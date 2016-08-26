<? 	$title = "학원꿀팁";$link="schoolMain.php";
	include 'head.php';
	$name=$_GET['name'];
	$path=$_GET['path'];

	
	$query= "select * from shcool where subcode='$path' and num='$name'";
	$result=mysql_query($query);
	$row=mysql_fetch_assoc($result);
	
	$schName=str_replace("\n","<br>",$row['schName']);
	$schAtm=str_replace("\n","<br>",$row['schAtm']);
	$schNote=str_replace("\n","<br>",$row['schNote']);
	//val이 1은 대학 2는 취업 3은 학원 4는 알바
?>
 	<p class="editwar wartop">- 학원을 추가하고 싶다면 하단에 적힌 메일로 문의바랍니다.</p>
 	<p class="editwar">- 자신의 경험을 위키에 적어주세요.</p>
 	<p class="editwar">- 본 위키의 컨텐츠는 지극히 주관적일수 있습니다.</p>
	  <div class="content"><!--content in body-->
	  	<h2><? echo $schName; ?></h2>
	  	<ul class="panel panel-default contentMain">
			<h3 class="contentInfo">분위기</h3>
			<a class="contentEdit" href="textEdit.php?name=<?=$schName;?>&val=3&type=schAtm">편집</a>
			<li class="panel-body well contentReading"><? echo $schAtm; ?></li>
			<h3 class="contentInfo">뒷이야기</h3>
			<a class="contentEdit" href="textEdit.php?name=<?=$schName;?>&val=3&type=schNote">편집</a>
			<li class="panel-body well contentReading"><? echo $schNote; ?></li>
		</ul>
	  </div><!--content in body-->

<? include 'foot.php'; ?>