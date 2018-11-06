<html>
<body>
<table>
    <tr>
        <td>学号</td>
        <td>姓名</td>
        <td>年龄</td>
        <td>班级编号</td>
    </tr>
    <?php
    require "db_comm.php";
    $classNo = $_GET['classNo'];
    $sql = "select * from student where class = \"".$classNo."\"";
    $result = mysqli_query($conn,$sql);
    $n = mysqli_num_rows($result);
    for($i = 0;$i<$n;$i++){
        $row = mysqli_fetch_array($result);
        echo "<tr>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$row[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[3]."</td>";
        echo"</tr>";
    }
    ?>
</table>
</body>
</html>
