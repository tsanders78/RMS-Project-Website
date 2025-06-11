<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $switchState = isset($_POST['switch_state']) && $_POST['switch_state'] == 'on' ? 'on' : 'off';

    // Use a hidden form field to POST data back to editviewprofile.php
    echo '<form id="postForm" method="post" action="editviewprofile.php">';
    echo '<input type="hidden" name="switch_state" value="' . $switchState . '">';
    echo '</form>';

    // Automatically submit the form using a meta refresh
    echo '<meta http-equiv="refresh" content="0;URL=editviewprofile.php">';
}
?>
