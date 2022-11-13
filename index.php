<?php

require "function.php";

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
    <div class="main-section">
        <div class="add-section">
            <form action="">
                <input type="text" name="title" placeholder="this field is requierd ">
                <button type="submit">Add &nbsp; <span> &#43; </span></button>
            </form>
        </div>
        <div class="show-todo-section">
            <?php foreach($todos as $todos): ?>
            <div class="todo-item">
                <span id="<?=$todos["id"];?>" class ="remove-to-do">X</span>

                <?php if($todos['checked']){?>
                    <input type="checkbox" class = "check-box" checked />
                    <h2 class="checked"><?=$todos["title"];?></h2>
                <?php }else{?>
                    <input type="checkbox">
                    <h2><?=$todos["title"];?></h2>
                <?php }?>    
                        <br>
                    <small><?=$todos["datetime"];?></small>
            </div>
            <?php endforeach;?>


        </div>
    </div>
    
</body>
</html>