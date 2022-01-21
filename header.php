<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ville de Tenirac</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="images/tenirac_favicon.ico">
    <!-- Icones Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;400&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900" rel="stylesheet">

<style>

    body.sunny {
        background-image: linear-gradient(to right top, #ff4e50, #ff713e, #ff932b, #ffb41d, #f9d423);
    }
    body.cloudy {
        background-image: linear-gradient(to right top, #63747c, #71858e, #7f96a0, #8da8b2, #9bbac5);
    }
    body.rainy {
        background-image: linear-gradient(to right top, #637c7b, #718e8c, #7ea09e, #8db2b0, #9bc5c3);
    }
</style>

    <!-- Feuille de style -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- --------- HEADER ------------- -->
    <div class="fond">
        <!-- top bar téléphone et email -->
        <div id="top-bar" class="container">
            <a href="+33297335566"><i class="fas fa-phone"></i></a>
            <a href="contact.php#ancre"><i class="fas fa-at"></i></a>
        </div>
    </div>
    <header id="top-page">
         <div id="bandeau" class="container">
            <a class="icones-bandeau" href="#"><i class="fas fa-search"></i></a>
            <a class="logo" href="index.php"><img src="images/logo.png" alt="ville de Tenirac"></a>
            
            <!-- menu burger -->
            <nav id="menu-burger">
                <label for="toggle">☰</label>
                <input type="checkbox" id="toggle">
                <div class="main_pages">
                    <a href="index.php">Accueil</a>
                    <a href="actualites.php">Actualités</a>
                    <a href="vielocale.php">Vie Locale</a>
                    <a href="mairie.php">Mairie</a>
                    <a href="decouvrir.php">Découvrir</a>
                    <a href="contact.php">Contact</a>
                </div>
            </nav>
        </div>
    </header>