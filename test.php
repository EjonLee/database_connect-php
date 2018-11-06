<html>
<body>
<table>
    <tr>
        <td>班级编码</td>
        <td>班级名称</td>
        <td>班级人数</td>
    </tr>

    <?php
    require "db_comm.php";

    $sql = "select * from class";
    $result = mysqli_query($conn,$sql);
    $number = mysqli_num_rows($result);
    for($i = 0;$i<$number;$i++){
      $row = mysqli_fetch_array($result);
      echo "<tr>";
        echo "<td><a href=\"test_1.php?classNo=".$row[0]."\">".$row[0]."</a></td>";
        echo "<td>".$row[1]."</td>";
        echo "<td>".$row[2]."</td>";
      echo"</tr>";
    }
    ?>
</table>
</body>
</html>
