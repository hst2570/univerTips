<?	include 'head.php';
	$edit=strip_tags($_POST['edit'],('<strong>,<a>'));
	$name=$_POST['name'];
	$title=$_POST['title'];
	$value=$_POST['play'];
	$phone=$_POST['phone'];
	$path=$_POST['path'];//진입해온 경로
	$date=date("y-m-d H:i:s");
	$ip=$_SERVER['REMOTE_ADDR'];//ip확인
	
	if($value==null){
		echo "<script>alert('카테고리를 지정해주세요.')</script>";
		echo "<script>history.go(-1);</script>";
		exit;
	}
	if($title==null){
		echo "<script>alert('제목을 적어주세요.')</script>";
		echo "<script>history.go(-1);</script>";
		exit;
	}
	if($name==null){
		echo "<script>alert('이름을 적어주세요.')</script>";
		echo "<script>history.go(-1);</script>";
		exit;
	}
	if($path==null){
		echo "<script>alert('잘못된 페이지 접근 ')</script>";
		exit;
	}
	
	switch ($path) {
		case 'tim':
			$val="seachtim";
			$num="timNumber";
			$dbcontent="timContent";
			$dbdate="timdate";
			$dbname="timPname";
			$dbtitle="timTitle";
			$dbval="timVal";
			break;
		default:
			break;
	}
	
	$selQuery="select * from $val order by $num desc";
	$selresult=mysql_query($selQuery);//새로운 데이터 삽입.
	while($row=mysql_fetch_assoc($selresult)){
		$number=$row[$num]+1;
		break;	
	}
	
	$query="INSERT INTO $val ($num,ip,$dbval,$dbcontent,$dbdate,$dbname,$dbtitle,phone,password) VALUES ('$number','$ip','$value','$edit','$date','$name','$title','$phone','$password')";
	
	$result=mysql_query($query);//새로운 데이터 삽입.
	
	switch ($val) { //저장후 접속할 페이지 태그 구분하기
		case "seachtim" :
			$pageback = "comTim.php";
			break;
		case "shcool" :
			$pageback = "schoolMain.php";
			break;
		case "parttimejob" :
			$pageback = "partworkMain.php";
			break;
		case "employment" :
			$pageback = "jobMain.php";
			break;
		default:
			$pageback = "index.php";
			break;
	}
	
	if($result){ //쿼리문 실행후 알맞는 페이지 이동후 종료
		echo "<script>alert('저장되었습니다.')</script>";
		echo "<meta http-equiv='refresh' content='0;url=$pageback'>";
		exit;
	}else{
		echo "<script>alert('잘못된 접근 ')</script>";
		echo "<meta http-equiv='refresh' content='0;url=$pageback'>";
		exit;
	}
	include 'foot.php';
?>