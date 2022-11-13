<?php
$conn = mysqli_connect("localhost","root","","todolist");

//query data
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;

    }

    return $rows;
}
//tambahdata
function tambah($data){
    global $conn;

    $title = htmlspecialchars($data["title"]);
    $tanggal = date("Y-m-d H:i:s");

    $query = "INSERT INTO todos VALUES
        ('','$title','$tanggal','');
        ";
    mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}


//hapus data todolist
function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM todos WHERE id = $id");

return mysqli_affected_rows($conn);
}

?>