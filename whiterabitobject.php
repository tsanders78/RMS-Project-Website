<?php
class WhiteRabbitObject {
    private $tables;

    public function __construct($tables) {
        $this->tables = $tables;
    }

    public function renderModifyDataForm() {
        echo '<h2>Modify Data</h2>';
        echo '<form method="post" action="">';
        echo '<label for="table">Select Table:</label>';
        echo '<select name="table" id="table">';
        foreach ($this->tables as $tableName => $tableData) {
            echo '<option value="' . htmlspecialchars($tableName) . '">' . htmlspecialchars(ucfirst($tableName)) . '</option>';
        }
        echo '</select>';
        echo '<br><br>';
        echo 'ID (for update/delete): <input type="text" name="idValue"><br><br>';
        echo 'Column: <input type="text" name="columnName"><br><br>';
        echo 'Value: <input type="text" name="columnValue"><br><br>';
        echo '<input type="submit" name="insert" value="Insert">';
        echo '<input type="submit" name="update" value="Update">';
        echo '<input type="submit" name="delete" value="Delete">';
        echo '</form>';
    }

    public function renderRMSHardwareSite() {
        // Placeholder for renderRMSHardwareSite function content
        echo '<h2>RMS Hardware Site</h2>';
    }
}

// Check if the switch state is set in the URL or POST data
$switchState = isset($_POST['switch_state']) ? $_POST['switch_state'] : (isset($_GET['switch_state']) ? $_GET['switch_state'] : 'off');

// Usage example:
$tables = [
    'users' => [],
    'products' => []
];

$whiteRabbitObject = new WhiteRabbitObject($tables);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Toggle</title>
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:checked + .slider:before {
            transform: translateX(26px);
        }

        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
</head>
<body>

<h2>Toggle Functions</h2>
<form method="post" action="">
    <label class="switch">
        <input type="checkbox" name="switch_state" value="on" <?php echo $switchState == 'on' ? 'checked' : ''; ?>>
        <span class="slider round"></span>
    </label>
    <input type="submit" value="Apply">
</form>

<?php
// Call functions based on switch state
if ($switchState == 'on') {

    $whiteRabbitObject->renderModifyDataForm();
    
    $whiteRabbitObject->renderRMSHardwareSite();
}
?>

</body>
</html>
