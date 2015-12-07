 <!DOCTYPE html>
<html>
<body>
<?php include("menu.php") ?>


<h1>第九期学员信息</h1>

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("jikexueyuan", $con);
MYSQL_QUERY('SET NAMES GBK');

$result = mysql_query("SELECT * FROM d8 order by id");
?>
<table border=1px>
	<tr>  			
  			<td>学号</td>
  			<td>姓名</td>
  			<td>单位</td>
  			<td>手机号码</td>
  			<td>身份证号码</td>
  			<td>职称</td>  			
  			<td>工作时间</td>
  			<td>从事专业</td>
  			<td>证书号码</td>
  			<td>缴费</td>
  			<td>交本</td>
  			<td>备注</td>

  		</tr>
<?php
while($row = mysql_fetch_array($result))
  {
  	?>
  		<tr>  			
  			<td><?php echo $row['id']; ?></td>
  			<td><?php echo $row['name'] ; ?></td>
  			<td><?php echo $row['danwei']; ?></td>
  			<td><?php echo $row['phone']; ?></td>
  			<td><?php echo $row['shenfenzheng']; ?></td>
  			<td><?php echo $row['zhicheng']; ?></td>
  			<td><?php echo $row['worktime']; ?></td>
  			
  			<td><?php echo $row['zhuanye']; ?></td>
  			<td><?php echo $row['zhengshu']; ?></td>
  			<td><?php echo $row['jiaofei']; ?></td>
  			<td><?php echo $row['jiaoben']; ?></td>
  			<td><?php echo $row['description']; ?></td> 			

  		</tr>
 <?php } ?>
</table>
<?php
mysql_close($con);
?>

</body>
</html>