<!doctype html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title>Food For One | CSS Presentation</title>
    <link href="../css/foodforone.css" type="text/css" rel="stylesheet" />
    <link href="../css/media.css" type="text/css" rel="stylesheet" media="screen"/>
    <link href="../css/presentation.css" type="text/css" rel="stylesheet" />
    <meta name="author" content="Bree Carrick">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="javascript/analytics.js"></script>
</head>

<body>
    <!--Import Header-->
    <?php include '../modules/header.php'; ?>

    <main id="presentation">
        <div id="content">
        <h1>CSS syntax: Rule, Declaration, Property, Value</h1>
        <h4>Rule:</h4>
        <p>A rule is exactly what it sounds like, it dictates how your content what your content is going to look like. A rule contains two parts: a selector and a declaration.</p>
        <img src="../images/assignments/cssrule.jpg" alt="CSS Rule">
        <h4>Selector: </h4>
        <p>The selector tells us which element your rule is applied to. You can apply a rule to more than one element by using commas. </p>
        <h4>Declaration: </h4>
        <p>The declaration tells us how to style the elements that you have selected. The declaration is nested within the curly brackets that follow the selector. The content of a declaration consists of two parts: property and value. Property and value are separated by a colon and each declaration is separated by a semicolon.</p>
        <h4>Property: </h4>
        <p>The property is the part of the element you want to change. This may be the color, font, width, height, or border.</p>
        <h4>Values: </h4>
        <p>The value is what you want to apply to the property. If you decided you wanted to change the font, this is where you would tell what font you want.</p>
        <img src="../images/assignments/cssrule.jpg" alt="CSS Rule">
        </div>
        <div id="example">
        <h1>Example:</h1>
        </br>
        <h2>About Audrey</h2>
        <p>Audrey is my youngest sister (I have three).</p>
        <p class="color">She was born when I was 16.</p>
        <p class="transformation">She will be three at the end of this month.</p>
        <p class="wordspace">Although I may be biased, I think she’s absolutely adorable.</p>
        <p class="color">Here is a photo of her taken this summer enjoying a doughnut.</p>
        <div id="div">
            <img src="../images/happy.jpg" alt="Audrey eating a doughnut" id="img">
        </div>
        </br>
        <img src="../images/assignments/html.jpg" alt="HTML example">
        <img src="../images/assignments/css.jpg" alt="CSS example">
        </div>


    </main>
    <!--Import Footer-->
    <?php include '../modules/footer.php'; ?>

</body>

</html>
