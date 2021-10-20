<?php include './conn.php'; 

    $id = $_GET['id'];

    $sql="
    delete from siswa
    where id = '".$id."';
    ";

    $result = mysqli_query($conn,$sql);
    if($result){
        header('Location: index.php');
    }else{
        printf('Failed update student'.mysqli_error($conn));
        exit();
    }
?>