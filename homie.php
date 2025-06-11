<?php

require("page.php");

// Define locations array
$locations =  array(
    "Home" => "home2.php",
    "Contact" => "contact.php",
    "Services" => "services.php",
    "Payment" => "Payment.php",
    "Edit/View-Profile" => "EditViewProfile.php",
    "About" => "about.php"
);

$locationHandler = new LocationHandler($locations);

// Handle dropdown selection
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['location'])) {
    $locationHandler->postLocation($_POST['location']);
}

// Display homepage
$homepage = new Page();
$homepage->Display();

// Render dropdown menu
$locationHandler->renderDropdown();


$locationHandler->handleLocation();
$locationHandler->requireCurrentLocation();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Location and Employee Handler</title>
</head>
<body>
    <h1>
        <?php
        echo $locationHandler->getCompus();
        ?>
    </h1>
    <form action="" method="POST">
        <div align="center">
            <?php
            require 'searchengine.php';
            
            $locationHandler->renderDropdown(); ?>
        </div>
    </form>
    <div>
        <?php

        ?>
    </div>
</body>
</html>

<?php



require('land.php');


require('itemlist.php');

require('footer.php');

?>
