<?php
if(isset($_POST['upload'])){
    $file_name = $_FILES['myfile']['name'];
    $file_tmp_name = $_FILES['myfile']['tmp_name'];
    if(move_uploaded_file($file_tmp_name,"apex/" . $file_name)){
        echo "file uploaded sucessfully"; 
    }
    else{
        echo "ERROR... try again";
    }
}
?><br>
<a download="<?php echo $file_name;?>" href="apex/<?php echo $file_name;?>">Click me</a>