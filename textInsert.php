<?	include 'head.php';
	$edit=strip_tags($_POST['edit'],('<strong>,<a>'));
	$name=$_POST['name'];
	$type=$_POST['type'];
	$val=$_POST['val'];
	$tag=$_POST['tag'];	//++이전 데이터는 히스토리 테이블로 이동되도록 만들자.
	$date=date("y-m-d H:i:s");
	$ip=$_SERVER['REMOTE_ADDR'];//ip확인
	
	$beforequery="select * from $val where num ='$name'";
	$beforeResult=mysql_query($beforequery);
	$beforeRow=mysql_fetch_assoc($beforeResult);
	$beforeDate=$beforeRow['Date'];
	$beforeIp=$beforeRow['ip'];
	$beforeContent=$beforeRow[$type];
	
	$historyquery="INSERT INTO history (beforeTable,beforeName,Category,beforeDate,submitDate,ip,content) VALUES ('$val','$type','$name','$beforeDate','$date','$beforeIp','$beforeContent')";
	
	mysql_query($historyquery);//기존의 데이터를 히스토리 테이블로 이동.
	
	$query="update $val set $type = '$edit', Date = '$date', ip='$ip' where num = '$name'";
	
	$result=mysql_query($query);//새로운 데이터 삽입.
	
	switch ($val) { //저장후 접속할 페이지 태그 구분하기
		case "univer" :
			$pageback = "univerSubPage.php?name=".$name;
			break;
		case "shcool" :
			$pageback = "schoolSubPage.php?name=".$name;
			break;
		case "parttimejob" :
			$pageback = "partworkSubPage.php?name=".$name;
			break;
		case "employment" :
			$pageback = "jobSubPage.php?name=".$name;break;
		default:$pageback = "index.php";break;
	}
	
	if($result){ //쿼리문 실행후 알맞는 페이지 이동후 종료
		echo "<meta http-equiv='refresh' content='0;url=$pageback'>";exit;
	}else{
		echo "<meta http-equiv='refresh' content='0;url=$pageback'>";exit;
	}
	include 'foot.php';
?>