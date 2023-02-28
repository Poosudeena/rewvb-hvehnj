<?php
    $file_name = $_FILES['myfile']['name'];
    $file_tmp_name = $_FILES['myfile']['tmp_name'];
    move_uploaded_file($file_tmp_name,"apex/" . $file_name)

?><br>
