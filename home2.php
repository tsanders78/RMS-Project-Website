<?php
require('header.php');
require('searchengine.php');
require('page.php');

class Login {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function eat() {
        echo $this->name . " is eating.\n";
    }
}

// Derived class
class Employee extends Login {
    public function bark() {
        echo $this->name . " is ready to purchase.\n";
    }
}

class DepartmentHead extends Employee {
    public function bark() {
        echo $this->name . " is logged in.\n";
    }
}

// Initialize employee instance
$myEmployee = new Employee("Buddy");
$myEmployee->eat();  // Inherited from Login
$myEmployee->bark(); // Defined in Employee
echo "==========================";


$locations = array('Home', 'Payment', 'Login', 'Edit/View Profile', 'Contact Resources', 'Services', 'About');
$locationHandler = new LocationHandler($locations);
$display = new Display($locations);

// Handle dropdown selection
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['location'])) {
    $locationHandler->postLocation($_POST['location']);
}
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

echo "==========================";
        echo $locationHandler->getCompus();
        echo "==========================";

        ?>
    </h1>
    <form action="" method="POST">
        <div align="center">
            <?php
            $locationHandler->renderDropdown();
            ?>
        </div>
    </form>
    <div>
        <?php
        echo "==========================";





        $homepage->content ="<!-- page content -->
        <section>
        <h2>Welcome to the home of TLA Consulting.</h2>
        <p>Please take some time to get to know us.</p>
        <p>We specialize in serving your business needs
        and hope to hear from you soon.</p>
        </section>";






        $display->handleLocation();
        echo "==========================";

        ?>
    </div>
</body>
</html>

