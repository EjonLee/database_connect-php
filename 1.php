<?php
require("db_comm.php");
$sql = "select * from student";
$result = mysqli_query($conn,$sql);
$n = mysqli_num_rows($result);
for($i = 0;$i<$n;$i++)
{
    $row = mysqli_fetch_array($result);
    echo "编号：".$row["studentId"]."<br/>";
    echo "名称：".$row["studentName"]."<br/>";
    echo "年龄：".$row["age"]."<br/>";
}
echo "总人数：{$n}<br/>";
?>
