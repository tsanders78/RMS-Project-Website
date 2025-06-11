<?php
// Location and pictures arrays
$pictures = array('brakes.png', 'headlight.png', 'spark_plug.png', 'steering_wheel.png', 'tire.png', 'wiper_blade.png');
shuffle($pictures);

//require_once 'LocationHandler.php';


// Handle dropdown selection
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['location'])) {
  $this->postLocation($_POST['location']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hardware and Remodeling</title>
</head>
<body>
    <form action="" method="POST">
        <h1>
            <?php
            ?>
        </h1>
        <div align="center">
            <?php

                ?>
            </tr>
        </table>
    </div>
</body>
</html>
