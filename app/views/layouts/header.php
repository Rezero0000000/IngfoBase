<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>IngfoBase | <?= $data['title'] ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="<?= BASEURL ?>/css/bootstrap-icons.css" rel="stylesheet" />
        <link href="<?= BASEURL ?>/css/styles.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <!-- card -->
        <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/card.css">
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">IngfoBase</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link  <?php if($data['title'] == "Home"){echo"active";} ?>" aria-current="page" href="<?= NEWURL?>">Home</a></li>
                         <li class="nav-item"><a class="nav-link  <?php if($data['title'] == "About"){echo"active";} ?>" aria-current="page" href="<?= NEWURL?>About">About</a></li>
                        <li class="nav-item"><a class="nav-link  <?php if($data['title'] == "Character"){echo"active";} ?>" href="<?= NEWURL?>Character">Characters</a></li>
                        <li class="nav-item"><a class="nav-link" target="blank" href="https://github.com/Kazut00/">Github</a></li>
                    </ul>
                </div>
            </div>
        </nav>