<?php
require_once('database.php');
$theme = $files = '';

if (isset($_POST["submit"])) {
    $theme = $_POST['theme'];
    $files = $_FILES['file'];

    move_uploaded_file($files['tmp_name'], 'uploads/' . $files['name']);
    $sql = "INSERT INTO fileup (theme,file) VALUES ('$theme','$files')";

    header('Location: upload.php');
}

?>
