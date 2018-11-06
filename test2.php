<html>
<body>
<form method="post" action="test2_1.php">
<table align="center" border="1">
    <tr>
        <td>请选择</td>
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
        echo "<td><input type='checkbox' name='classNo[]' value='".$row[0]."'>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$row[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo"</tr>";
    }
    ?>
</table>
    <center><input type="submit" value="提交">
    <input type="reset" value="重置"></center>
</form>
</body>
</html>
