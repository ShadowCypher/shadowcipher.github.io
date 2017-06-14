<?php
if(isset($_POST['name']) && isset($_POST['submission'])) {
    $data = $_POST['name'] . '-' . $_POST['submission'] . "\n";
    $ret = file_put_contents('database.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}
?>