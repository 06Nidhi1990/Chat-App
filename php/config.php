<?php
$conn = mysqli_connect("localhost", "root", "", "chat");

if(!$conn)
{
    echo "Database created successfully" . mysqli_connect_error();
}
?>