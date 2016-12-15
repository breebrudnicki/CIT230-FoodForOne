<!doctype html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title>Food For One | Audio and Video</title>
    <link href="../css/foodforone.css" type="text/css" rel="stylesheet" />
    <meta name="author" content="Bree Carrick">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../javascript/analytics.js"></script>
</head>

<body>

    <!--Import Header-->
    <?php include '../modules/header.php'; ?>
    <main>
        <h1>Audio</h1>
        <h3>My favorite Song</h3>
        <p>You might have to have your sound all the way up; it's a little quiet.</p>
        <audio controls>
            <source src="../audio/favorite.mp3" type="audio/mpeg">
        </audio>

        <h1>Video</h1>
        <h3>Sleeping Beauty's Salon</h3>
        <p>Now you might want to turn your volume back down. :) </p>
        <p>A Video I made with my nanny child during the summer. We're basically really good at making videos.</p>
        <video poster="../images/assignments/aurorasalon.jpg" preload="none" width="400" height="300" controls>
            <source src="../video/aurorasalon.mp4" type="video/mp4">
        </video>
        <h3>Blackmail</h3>
        <p>This is a video of my friends dancing to the credits of a movie we had just watched.</p>
        <video preload="none" poster="../images/assignments/blackmail.jpg" controls width="400" height="300">
            <source src="../video/blackmail.mp4" type="video/mp4">
        </video>
    </main>
    <!--Import Footer-->
    <?php include '../modules/footer.php'; ?>

</body>

</html>
