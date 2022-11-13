<?php

require "function.php";


if(isset($_POST["submit"])){
        if(tambah($_POST) > 0 ){
        echo "
        <script>
        alert('Tugas berhasil Di tambahkan');
        document.location.href = 'index.php';
        </script>";
    }else{
        echo "
         <script>alert('Tugas gagal Di tambahkan');
        document.location.href = 'index.php';
        </script>";
    }
}
$todos = query("SELECT * FROM todos ORDER BY id DESC");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do-List</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2 align="center" style="font-family:arial;">To Do List </h2>
    <div class="main-section">
        <div class="add-section">
            <form action="" method="post" autocomplete="off">
                <input type="text" name="title" placeholder="Masukan Kegiatan Anda ">
                <button type="submit" name="submit">Add &nbsp; <span> &#43; </span></button>
            </form>
        </div>
        <div class="show-todo-section">
            <?php foreach($todos as $todos): ?>
            <div class="todo-item">
                <a href="hapusToDo.php?id=<?= $todos["id"];?>"><span class ="remove-to-do">X</span></a>
                        <h2><?php echo $todos['title'] ?></h2>
                    <small>Dibuat Tanggal:<?=$todos["datetime"];?></small>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</body>
</html>