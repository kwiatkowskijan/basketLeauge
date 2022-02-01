<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket leauge</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img\favicon.svg">
    <script src="https://kit.fontawesome.com/fe525bff25.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="navbar">
        <img src="img\logo.svg" alt="logo" class="logo">
        <nav class="navItem">
            <a href="index.php">Strona główna</a>
            <a href="aboutUs.html">O lidze</a>
            <a href="">Terminarz</a>
            <a href="">Wyniki</a>
            <a href="players.php" target="_blank">Zawodnicy</a>
            <a href="teams.php">Drużyny</a>
        </nav>
        <a href="#" class="contactUs">Napisz do nas</a>
        <a class="toggler" id="toggler" onclick="toggle()"><i class="fas fa-bars fa-2x"></i></a>
    </div>
    <div id="toggle">
        <a href="index.php">Strona główna</a>
        <a href="aboutUs.html">O lidze</a>
        <a href="">Terminarz</a>
        <a href="">Wyniki</a>
        <a href="players.php">Zawodnicy</a>
        <a href="teams.php">Drużyny</a>
        <a href="">Napisz do nas</a>
        <script src="scripts/navToggler.js"></script>
    </div>
    <div class="todaysGamesContainer">
        <div class="todaysGamesInfo">
            <h3>Nadchodzące</h3>
            <h3>mecze</h3>
            <p id="date"></p>
            <script src="scripts/currentDate.js"></script>
        </div>
        <div class="todaysGames">
            <div class="gameItem">

            </div>
        </div>
    </div>
    <div class="firstPage">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="img/example1.svg">
            </div>

            <div class="mySlides fade">
                <img src="img/example2.svg">
            </div>

            <div class="mySlides fade">
                <img src="img/example3.svg">
            </div>
        </div>
        <script src="scripts/slideshow.js"></script>
    </div>


</body>

</html>