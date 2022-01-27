<?php
    file_put_contents('./data/'.$_POST['title'], $_POST['description']);
    echo '<p>TITLE : '.$_POST['title'].'</p>';
    echo '<p>DISCRIPTION : '.$_POST['description'].'</p>';
?>