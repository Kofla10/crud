<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h5 class="title">Form</h5>
            <hr>
            <form class="form" action="" onsubmit= "app.save()">
                <input type="hidden" id="id">
                <!-- <label for="name">Nombres</label> -->
                <input type="text"
                       id="name"
                       placeholder="Nombre y Apellido"
                       autofocus
                       required
                >

                <input type="email"
                       id="email"
                       placeholder="email@email.com"
                       required
                >

                <input type="number"
                       id="age"
                       placeholder="18"
                       min="18"
                       max="85"
                       required
                >

                <br>

                <div class="btns">
                    <button type="submit" class="save">Guardar</button>
                    <button type="submit" class="cancel">Cancelar</button>
                </div>
            </form>

            <h5>Listado</h5>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombres</th>
                        <th>Email</th>
                        <th>Edad</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody id="tbody"></tbody>
            </table>
        </div>
    </div>

    <script src="../assets/code.js"></script>
</body>
</html>