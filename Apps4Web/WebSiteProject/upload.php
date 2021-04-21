<?php
session_start();
include_once './connection.php';
include_once './auth/login_exec.php';

$_SESSION['SESS_MEMBER_ID'] = $member['mem_id'];

if (isset($_FILES['file']) &&
    ($_FILES['file']['error'] == UPLOAD_ERR_OK)) {
    $file= $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmp = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $filesError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    
    $fileExt = explode('.',$_FILES['file']['name']);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png','pdf');
    if(in_array($fileActualExt,$allowed)){
        if($_FILES['file']['error'] ===  0){
            if($_FILES['file']['size'] < 1000000){            
                $fileNameNew = "profile".$mem_id.".".$fileActualExt;
                $fileDestination = 'gallery/'.$fileNameNew;
                move_uploaded_file($_FILES['file']['tmp_name'],$fileDestination);
                $sql = "UPDATE users SET status = 0 WHERE mem_id ='$mem_id'";
                $result = mysqli_query($conn, $sql);
                header("Location: member.php?uploadsucess");
            }else{
                echo "Your file is too big!";
            }
        }else{
            echo "You have an error uploading your file!";
        }
    }else{
        echo "You cannot upload files of this type!";
    }

}