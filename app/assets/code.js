const app = new (function () {

    this.tbody = document.getElementById("tbody");
    this.id    = document.getElementById("id");
    this.names  = document.getElementById("name");
    this.age   = document.getElementById("age");
    this.email = document.getElementById("email");

    this.list = () => {
        fetch("../controllers/list.php")
        .then((resp) => resp.json())
        .then((data) =>{

            const fragment = document.createDocumentFragment(); // Crear un fragmento de documento

            data.forEach((item) => {
                const row = document.createElement('tr'); // Crear una nueva fila

                // Agregar celdas a la fila
                row.innerHTML = `
                    <td>${item.id}</td>
                    <td>${item.names}</td>
                    <td>${item.email}</td>
                    <td>${item.age}</td>
                    <td>
                        <a href="#" class="save" onclick="app.edit(${item.id})">Editar</a>
                        <a href="#" class="save" onclick="app.delete(${item.id})">Eliminar</a>
                    </td>
                `;

                fragment.appendChild(row); // Agregar la fila al fragmento
            });

            this.tbody.innerHTML = ""; // Limpiar el contenido previo de la tabla
            this.tbody.appendChild(fragment); // Agregar todas las filas al tbody
        })
        .catch((error) => console.log(error));
    }

    this.save = () => {
        var form = new FormData();
        form.append("name", this.names.value);
        form.append("email", this.email.value);
        form.append("age", this.age.value);

        fetch("../controllers/save.php", {
            method: "POST",
            body  : form
        })
        .then((resp) => resp.json())
            .then((data) => {
                alert('Creado con exito');
                this.list();
                this.cleanField();
            })
        .catch((error) => console.log(error));
    }

    this.cleanField = () => {
        this.id   = '';
        this.age   = '';
        this.names  = '';
        this.email = '';
    }

    this.delete = (id) => {
        var form = new FormData();
        form.append("id", id);

        fetch("../controllers/delete.php", {
            method: "POST",
            body  : form
        })
        .then((resp) => resp.json())
        .then((data) => {
            alert('Se elimino con exito')
            this.list();
        })

        .catch((error) => console.log(error));
    }
    this.edit = (id) => {
        var form = new FormData();
        form.append("id", id);
        form.append("email", email.value);
        form.append('name', names.value);
        form.append("age", age.value)

        fetch("../controllers/edit.php", {
            method: "POST",
            body  : form
        })
        .then((resp) => resp.json())
        .then((data) => {
            alert("se edito con exito");
            this.list();
            this.cleanField();
        })

        .catch((error) => console.log(error));
    }


})();

app.list();
