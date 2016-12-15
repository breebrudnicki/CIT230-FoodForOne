<!doctype html>
<html lang="en-us">
    <head>
    <meta charset="utf-8">
    <title>Food For One</title>
    <link href="css/foodforone.css" type="text/css" rel="stylesheet" />
    <link href="css/media.css" type="text/css" rel="stylesheet" media="screen"/>
    <meta name="author" content="Bree Carrick">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Recipes, College Recipes, Small Portion Recipes, Food for one, Meals for one">
    <meta name="description" content="A collection of recipes that serve on person">
    <script src="../javascript/analytics.js"></script>
</head>

<body>
    <!--Import header-->
       <?php include 'modules/header.php'; ?>

    <main>
        <h1 hidden>Food</h1>
        <h1 hidden>Recipes</h1>
        <h1 hidden>College Recipes</h1>
        <h1 hidden>Small Portion Recipes</h1>
        <h1 hidden>Meals for one person</h1>
         <!--Start Image gallery-->
        <div id=gallery>

        </div>
        <!--End Image Gallery-->
        <div class="flex">
            <a href="recipes/dessert.php"><img src="images/mediumicon/brownieicon.jpg" alt="Brownie in a Mug" class="mediumphoto"></a>
                <a href="recipes/entertaining.php"><img src="images/mediumicon/applenachosicon.jpg" alt="Apple Nachos" class="mediumphoto"></a>
            <a href="recipes/dinner.php"><img src="images/mediumicon/bakedchickenicon.jpg" alt="Baked Chicken" class="mediumphoto"></a>
        </div>
        <div  class="flex">
            <a href="recipes/recipes.php"><img src="images/smallicon/recipesicon.jpg" alt="Recipes" class="icon1"></a>
            <a href="mainpages/contact.php"><img src="images/smallicon/contacticon.jpg" alt="Contact" class="icon1"></a>
            <a href="mainpages/groceries.php"><img src="images/smallicon/groceryicon.jpg" alt="Groceries" class="icon1"></a>
            <a href="mainpages/gettingstarted.php"><img src="images/smallicon/gettingstartedicon.jpg" alt="Getting Started" class="icon1"></a>
        </div>
        <div  class="flex">
            <a href="recipes/breakfast.php"><img src="images/smallicon/breakfasticon.jpg" alt="Breakfast" class="icon2"></a>
            <a href="recipes/lunch.php"><img src="images/smallicon/lunchicon.jpg" alt="Lunch" class="icon2"></a>
            <a href="recipes/dinner.php"><img src="images/smallicon/dinnericon.jpg" alt="Dinner" class="icon2"></a>
            <a href="recipes/dessert.php"><img src="images/smallicon/desserticon.jpg" alt="Dessert" class="icon2"></a>
            <a href="recipes/entertaining.php"><img src="images/smallicon/entertainingicon.jpg" alt="Entertaining" class="icon2"></a>
        </div>
    </main>

    <!--Import Footer-->
    <?php include 'modules/footer.php'; ?>

</body>

</html>
