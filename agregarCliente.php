<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="agregarClientes.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Gimnasio</title>
</head>
<body>
    <main>
        <h1>Gimnasio X</h1>
        <div class="container">
            <label class="fs-3">Agregar Usuario</label>
            <form action="" method="post">
                <input type="text" name="i-name" placeholder="Nombre" class="form-control">
                <input type="text" name="i-apellido" placeholder="Apellido" class="form-control">
                <input type="number" name="i-dni" placeholder="DNI" class="form-control" id="myNumberInput" maxlength="8">
                <input list="membresias" name ="i-membresia" placeholder="Membresia" class="form-control">
                  <datalist id="membresias">
                    <option value="Basico">
                    <option value="Intermedio">
                    <option value="Avanzado">
                  </datalist>
                <input type="date" name="i-actual-date" class="form-control">
                <input type="submit" value="Agregar" class="form-control btn btn-success mt-4">
                <input type="button" value="Inicio" class="form-control btn btn-danger mt-1" onclick="backToInicio()">
            </form>
        </div>
    </main>
</body>


<script>

let dniEL = document.getElementById("myNumberInput");

dniEL.addEventListener("input", function() {
    if (this.value.length > 8) {
        this.value = this.value.slice(0, 8);
    }
});

function backToInicio() {
    window.location.href = "index.php";
}


</script>

</html>


