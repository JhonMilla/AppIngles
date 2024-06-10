<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Panel</title>
    <link rel="stylesheet" href="/panel.css">
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <input type="radio" name="slide" id="c1" checked>
            <label for="c1" class="card">
                <div class="row">
                    <div class="icon">1</div>
                    <div class="description">
                        <h4>Animales</h4>
                        <a href="/index.php">Ver animales</a>
                    </div>
                </div>
            </label>

            <input type="radio" name="slide" id="c2" checked>
            <label for="c2" class="card">
                <div class="row">
                    <div class="icon">2</div>
                    <div class="description">
                        <h4>Frutas</h4>
                        <a href="/fruta.php">Ver frutas</a>
                    </div>
                </div>
            </label>

            <input type="radio" name="slide" id="c3" checked>
            <label for="c3" class="card">
                <div class="row">
                    <div class="icon">3</div>
                    <div class="description">
                        <h4>Abecedario</h4>
                        <a href="/abecedario.php">Ver abecedario</a>
                    </div>
                </div>
            </label>

            <input type="radio" name="slide" id="c4" checked>
            <label for="c4" class="card">
                <div class="row">
                    <div class="icon">4</div>
                    <div class="description">
                        <h4>Vocales</h4>
                        <a href="/vocal.php">Ver vocales</a>
                    </div>
                </div>
            </label>
        </div>
    </div>
</body>

</html>