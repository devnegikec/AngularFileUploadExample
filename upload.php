<?php
//echo nl2br(print_r($_FILES,1));
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
echo json_encode($_FILES["file"]);
?>
