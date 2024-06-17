<?php
require 'model.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    deleteMember($id);
}

header('Location: Member.php');
exit();
?>
