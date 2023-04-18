<?php
$conn=new mysqli('localhost', 'root', '', 'stories');

if(!$conn)
{
    die(mysqli_error($conn));
}
?>