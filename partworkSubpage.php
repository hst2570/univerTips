<? 	$title = "알바꿀팁";$link="partworkMain.php";
	include 'head.php';
	$name=$_GET['name'];
	
	$query= "select * from parttimejob where num='$name'";
	$result=mysql_query($query);
	$row=mysql_fetch_assoc($result);
	
	$jobName=str_replace("\n","<br>",$row['jobName']);//지역명
	$jobInfo=str_replace("\n","<br>",$row['jobInfo']);//알바정도
	
	//val이 1은 대학 2는 취업 3은 학원 4는 알바
?>
	<p class="editwar wartop">- 정확한 알바명과 분위기를 기재해주세요.</p>
 	<p class="editwar">- 자신의 경험을 위키에 적어주세요.</p>
 	<p class="editwar">- 본 위키의 컨텐츠는 지극히 주관적일수 있습니다.</p>
	  <div class="content"><!--content in body-->
	  	<h2><? echo $jobName; ?></h2>
		<ul class="panel panel-default contentMain">
			<h3 class="contentInfo">알바 정보와 뒷이야기</h3>
			<a class="contentEdit" href="textEdit.php?name=<?=$name;?>&val=4&type=jobInfo">편집</a>
			<li class="panel-body well contentReading"><? echo $jobInfo; ?></li>
		</ul>
	  </div><!--content in body-->
<? include 'foot.php'; ?>