<?php     
include 'conn.php';

$id = $_GET['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];


$sql = "
    UPDATE siswa
    set nama = '".$nama."', alamat= '". $alamat . "'
    where id = '".$id."'
    ;

";

$result =mysqli_query($conn,$sql);

if($result){
  
    header('Location: index.php');

}else{
    printf('Failed update student'.mysqli_error($conn));
    exit();
}
?>
