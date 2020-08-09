<!DOCTYPE html>
<html>
<head>
    <title> Welcome to Doodle </title>

    <meta name="description" content="Search websites and images.">
    <meta name="keywords" content="Search engine">
    <meta name="author" content="Jared Zhang">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class="wrapper indexPage">
        <div class="mainSection">
            <div class="logoContainer">
                <img src="assets/images/google_logo.png">
            </div>

            <div class="searchContainer">
                <form action="search.php" method="GET">
                    <input class="searchBox" type="text" name="term">
                    <input class="searchButton" type="submit" value="Search">
                </form>
            </div>
        </div>
    </div>
</body>
</html>