<?php 
require "function.php";

$id = $_GET["id"];

if(hapus($id) > 0){
    echo "
            <script>
            alert('Tugas Telah Selesai');
            document.location.href = 'index.php';
            </script>";
        }else{
            echo "
             <script>alert('Tugas gagal Di hapus');
            document.location.href = 'index.php';
            </script>";
        }



?>