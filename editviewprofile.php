<?php
// Ensure necessary files are included
$this->shortenKillCircle = [];

// Determine user role and initial state
$switchState = ($this->username != "guest") ? 'YES' : 'off';
$actionState = isset($_POST['action_state']) ? $_POST['action_state'] : 'none';

// Update switch state based on input
$switchState = isset($_POST['switch_state']) ? $_POST['switch_state'] : (isset($_GET['switch_state']) ? $_GET['switch_state'] : $switchState);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $table = isset($_POST['table']) ? $_POST['table'] : '';
    $idValue = isset($_POST['idValue']) ? $_POST['idValue'] : '';
    $columnValue = isset($_POST['columnValue']) ? $_POST['columnValue'] : '';

    if (isset($_POST['modify']) && isset($this->tables[$table])) {
        $this->modifyData($this->tables, $table, $idValue, $columnValue, $actionState);
    } else {
        echo "Error: Table '$table' does not exist.<br>";
    }
}

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
        .actions {
            margin-top: 20px;
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

<?php if ($switchState == 'on'): ?>
    <div class="actions">
        <form method="post" action="">
            <input type="hidden" name="switch_state" value="on">
            <input type="radio" id="update" name="action_state" value="update" <?php echo $actionState == 'update' ? 'checked' : ''; ?>>
            <label for="update">Update</label>
            <input type="radio" id="delete" name="action_state" value="delete" <?php echo $actionState == 'delete' ? 'checked' : ''; ?>>
            <label for="delete">Delete</label>
            <input type="radio" id="add" name="action_state" value="add" <?php echo $actionState == 'add' ? 'checked' : ''; ?>>
            <label for="add">Add</label>
            <input type="radio" id="none" name="action_state" value="none" <?php echo $actionState == 'none' ? 'checked' : ''; ?>>
            <label for="none">None</label>
            <input type="submit" value="Set Action">
        </form>

        <?php if ($actionState != 'none'): ?>
            <?php
            

            // if ($this->boolpass == 1) {
            //     $this->backupDatabase();
            // }
            // Instantiate YourClass with the predefined class SpreadInput
            $this->renderModifyDataForm();
            ?>
        <?php endif; ?>
    </div>
<?php endif; ?>

</body>
</html>
