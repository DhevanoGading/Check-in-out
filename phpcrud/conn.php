<?php 

$conn = mysqli_connect('localhost','root','','sekolah');


if(mysqli_connect_errno()){

    printf('Connection failed: '. mysqli_connect_errno());
    exit();
}


?>