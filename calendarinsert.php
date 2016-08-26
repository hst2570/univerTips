<?	include 'head.php';
	$edit=strip_tags($_POST['edit'],('<strong>,<a>'));
	$today=$_POST['date'];
	$date=date("y-m-d H:i:s");
	$ip=$_SERVER['REMOTE_ADDR'];
	
	$query="insert into calendar (ip,today,date,content) values ('$ip','$today','$date','$edit')";
	
	$result=mysql_query($query);//새로운 데이터 삽입.
	if($result){
		echo "<meta http-equiv='refresh' content='0;url=calendar.php'>";
		exit;
	}else{
		echo "<meta http-equiv='refresh' content='0;url=calendar.php'>";
		exit;
	}
	include 'foot.php';
?>