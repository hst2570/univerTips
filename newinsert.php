<? include 'head.php';
	$edit=$_POST['edit'];
	$num=$_POST['num'];
	$type=$_POST['type'];
	$date=date("y-m-d H:i:s");
	
	$edit = "- ".$edit."\n";
	
	$beforequery="select * from univer where num ='$name'";
	$beforeResult=mysql_query($beforequery);
	$beforeRow=mysql_fetch_assoc($beforeResult);
	$beforeDate=$beforeRow['Date'];
	$beforeIp=$beforeRow['ip'];
	$beforeContent=$beforeRow[$type];
	
	$historyquery="INSERT INTO history (beforeTable,beforeName,Category,beforeDate,submitDate,ip,content) VALUES ('univer','$type','$name','$beforeDate','$date','$beforeIp','$beforeContent')";
	
	mysql_query($historyquery);//기존의 데이터를 히스토리 테이블로 이동.
	
	if($edit==null){
		echo "<script>alert('내용을 입력해 주세요.')</script>";
		echo "<script>history.go(-1);</script>";
		exit;
	}
	
	$query="update univer set $type=concat($type,'$edit'), ip = '$ip', Date= '$date', count=(count+1) where num='$num'";
	
	if(mysql_query($query)){
		echo "ok";
		echo "<meta http-equiv='refresh' content='0;url=univerSubpage.php?name=$num'>";exit;
	}else{
		echo "no..";
		echo "<meta http-equiv='refresh' content='0;url=univerSubpage.php?name=$num'>";exit;
	}

	?>
<? include 'foot.php'; ?>