 <!DOCTYPE html>
<html>
<body>
<?php include("menu.php") ?>


<h1>�ھ���ѧԱ��Ϣ</h1>

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
  			<td>ѧ��</td>
  			<td>����</td>
  			<td>��λ</td>
  			<td>�ֻ�����</td>
  			<td>���֤����</td>
  			<td>ְ��</td>  			
  			<td>����ʱ��</td>
  			<td>����רҵ</td>
  			<td>֤�����</td>
  			<td>�ɷ�</td>
  			<td>����</td>
  			<td>��ע</td>

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