<?php include './conn.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body>
    <h1 class="p-3 mb-2 bg-primary text-white text-center">Data Siswa</h1>
    <center>
        <a href="./create-siswa.php" class="btn btn-success">Create Data</a>
    </center>

    <hr>

    <?php $sql ='select * from siswa';
        $result = mysqli_query($conn, $sql);

    ?>

    <table class="table table-striped table-hover">
        <thead>
            <tr><th>nama</th>
                <th>alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while($data = mysqli_fetch_assoc($result)){?>
            <tr>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['kehadiran'] === date('Y-m-d')? '✅' : '❎' ?></td>
                <td>
                    <a href="check-in.php ?id= <?php echo $data ['id'] ?> " class="btn btn-success" >Check-in</a>
                    <a href="check-out.php ?id= <?php echo $data ['id'] ?> " class="btn btn-secondary" >Check-out</a>
                    <br>
                    <br>
                    <a href="edit-siswa.php ?id= <?php echo $data ['id'] ?> " class="btn btn-info" >Edit</a>
                    <a href="delete-siswa.post.php ?id= <?php echo $data ['id'] ?> " class="btn btn-danger">delete</a>
                    <br>
                    <br>
                    <br>
                </td>
            </tr>
              
            <?php } ?>
        </tbody>
    </table>
</body>
</html>