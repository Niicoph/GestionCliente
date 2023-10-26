<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Gimnasio</title>
</head>
<body>
    <main>
        <h1>Gimnasio X</h1>
        <div class="container">
            <div class="box" style="border:3px solid green" onclick="toAddPage()">
                <p>Agregar Cliente</p>
                <img src="img/add.png" alt="add image">
            </div>
            <div class="box" style="border:3px solid blue" onclick="toSearchPage()">
                <p>Buscar Cliente</p>
                <img src="img/search.png" alt="search image">
            </div>
            <div class="box" style="border:3px solid red" onclick="toDeletePage()">
                <p>Eliminar Cliente</p>
                <img src="img/close.png" alt="delete image">
            </div>
        </div>
    </main>
</body>

<script>
  function toAddPage() {
    window.location.href = "agregarCliente.php";
  }
  function toSearchPage() {
    window.location.href = "buscarCliente.php";
  }
  function toDeletePage() {
    window.location.href = "eliminarCliente.php";
  }




</script>

</html>

