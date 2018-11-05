<html>
<head>
    <title>班级信息显示</title>
</head>
<body>
<center>点击课程编码链接可以查看学生信息</center>

<table width="380" border="1" align="center" cellpadding="0" cellspacing="1">
    <tr bgcolor="#0066cc" align="center">
        <td width="80"><font color="#ffffff"><b>班级编码</b></font></td>
        <td width="220"><font color="#ffffff"><b>班级名称</b></font></td>
        <td width="80"><font color="#ffffff"><b>学生人数</b></font></td>
    </tr>
    <?php
    include ("db_comm.php");

    $sql = "select * from class";
    $result = mysqli_query($conn,$sql);
    $number = mysqli_num_rows($result);
    if($number>0){
        for($i = 0;$i<$number;$i++){
            $row = mysqli_fetch_array($result);
            if($i%2==0)
                echo "<tr bgcolor='#dddddd' align='center'>";
            else
                echo "<tr align='center'>";
            //echo "<td width=\"80\"><a href='2-1'>";
            echo "<td width='80'><a href='2-1.php?classNo=".$row["classNo"]."'>".$row['classNo']."</a></td>";
            echo "<td width='220'>".$row["className"]."</td>";
            echo "<td width='80'>".$row["studentSum"]."</td>";
            echo "</tr>";
        }
    }
    ?>
</table>
</body>
</html>
