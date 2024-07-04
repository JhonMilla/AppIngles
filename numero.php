<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/971fd9b73b.js" crossorigin="anonymous"></script>
    <title>Numeros</title>
</head>

<body>
    <h1 class="text-center p-3">Registro de juegos de numeros</h1>
    <a href="/panel.php"><button class="btn btn-primary">Volver a panel</button></a>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST" enctype="multipart/form-data">
            <?php
            include "modelo/conexion.php";
            include "controlador/registro_numero.php";
            ?>
            <h5 class="text-center alert alert-secondary">Registrar numero</h5>
            <?php
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre en Español</label>
                <input type="text" class="form-control" name="nomEsp_numero">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre en Ingles</label>
                <input type="text" class="form-control" name="nomEng_numero">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pronunciación</label>
                <input type="text" class="form-control" name="pronunciacion_numero">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Foto</label>
                <input type="file" class="form-control" name="img_numero">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Audio</label>
                <input type="file" class="form-control" name="audio_numero">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ESPAÑOL</th>
                        <th scope="col">INGLES</th>
                        <th scope="col">PRONUNCIACION</th>
                        <th scope="col">IMAGEN</th>
                        <th scope="col">AUDIO</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $listPer = $conexion->query("SELECT * FROM numeros");
                    while ($perFila = $listPer->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                            <td><?= htmlspecialchars($perFila['id_numero']) ?></td>
                            <td><?= htmlspecialchars($perFila['nomEsp_numero']) ?></td>
                            <td><?= htmlspecialchars($perFila['nomEng_numero']) ?></td>
                            <td><?= htmlspecialchars($perFila['pronunciacion_numero']) ?></td>
                            <td>
                                <img src="data:image/png;base64,<?= base64_encode($perFila['img_numero']) ?>" alt="Imagen de numero" style="width: 100px; heigth:100px;">
                            </td>
                            <td>
                                <audio controls>
                                    <source src="data:audio/mp3;base64,<?= base64_encode($perFila['audio_numero']) ?>" type="audio/mp3">
                                </audio>
                            </td>

                            <td>                         
                                <a href="../modelo/modificar_numero.php?id_numero=<?= htmlspecialchars($perFila['id_numero']) ?>" class="btn btn-small btn-warning" onclick="cargarDatosModificar(<?= htmlspecialchars($perFila['id_numero']) ?>)">
                                    <i class="fa-solid fa-pen-to-square"></i> Modificar
                                </a>
                                <form method="POST" action="../controlador/eliminar_numero.php">
                                    <input type="hidden" name="id_numero" value="<?= htmlspecialchars($perFila['id_numero']) ?>">
                                    <button type="submit" class="btn btn-danger" name="btneliminar">
                                        <i class="fa-solid fa-trash"></i> Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="ajax.js"></script>
</body>

</html>