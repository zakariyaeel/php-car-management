<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/default.css">
</head>
<body class="position-relative">
    <header class="navbar navbar-light bg-dark text-white">
        <div class="container-fluid">
            <h1 >Gestionnaire de voiture</h1>
            <div class="d-flex w-25 justify-content-evenly">
                <span><a href="index.php" class="nav-link text-white">Home</a></span>
                <span><a href="?action=create" class="nav-link text-white">Ajouter</a></span>
            </div>
        </div>
    </header>

    <?= $contenue ?>

    <footer class="bg-dark text-center text-white w-100 position-absolute bottom-0">
        &copy;2023
    </footer>
</body>
</html>