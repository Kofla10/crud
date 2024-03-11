alert('this is a test');

const app = new (function () {
    this.list = () => {
        fetch('../controllers/list.php')
        .then((resp) => resp.json())
        .then((data) =>{
            console.log(data)
        })
        .catch((error) => console.log(error));
    }
})

