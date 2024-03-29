<!doctype html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title>Food For One | Contact</title>
    <link href="../css/foodforone.css" type="text/css" rel="stylesheet" />
    <link href="../css/media.css" type="text/css" rel="stylesheet" media="screen"/>
    <meta name="author" content="Bree Carrick">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../javascript/analytics.js"></script>
    <meta name="keywords" content="Recipes, College Recipes, Small Portion Recipes, Food for one, Meals for one">
    <meta name="description" content="A collection of recipes that serve on person">
</head>

<body>

    <!--Import Header-->
    <?php include '../modules/header.php'; ?>
    <main>
        <div></div>
        <h1>Contact Me</h1>
        <p>Please use this form to submit any inquiries/comments/questions/suggestions/etc. that you may have.</p>
        <!--Contact Form-->
        <form method="post" id="contactform">
            <fieldset>
                <label >Name: <br>
                <input type="text" name="name" id="name" size="50"></label><br>
                <label >Email:<br>
                <input type="email" name="email" id="email" size="50"> </label><br>
                <label >Subject: <br>
                <input type="text" name="subject" id="subject" size="50"> </label><br>
                <label> Message: <br>
                <textarea name="message" id="message" cols="50" rows="5"></textarea> </label> <br>
                <input type="submit" value="Submit">
            </fieldset>
        </form>
        <div>
        </div>
    </main>

    <!--Import Footer-->
    <?php include '../modules/footer.php'; ?>

</body>

</html>
