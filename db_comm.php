<?php
$conn = mysqli_connect("localhost","root","root");

if(!$conn)
    die("连接失败");
mysqli_select_db($conn,"testdb");
