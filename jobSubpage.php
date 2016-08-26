<? 	$title = "취업꿀팁";$link="jobMain.php";include 'head.php';
	$name=$_GET['name'];
	
	$query= "select * from employment where num='$name'";
	$result=mysql_query($query);
	$row=mysql_fetch_assoc($result);
	
	$empName=str_replace("\n","<br>",$row['empName']);//회사명
	$empAtm=str_replace("\n","<br>",$row['empAtm']);//회사정보
	$empTip=str_replace("\n","<br>",$row['empTip']);//회사 입사팁
	//val이 1은 대학 2는 취업 3은 학원 4는 알바
?>
	<p class="editwar wartop">- 하단의 추가로 회사를 추가할 수 있습니다.</p>
 	<p class="editwar">- 자신의 경험을 위키에 적어주세요.</p>
 	<p class="editwar">- 본 위키의 컨텐츠는 지극히 주관적일수 있습니다.</p>
	  <div class="content"><!--content in body-->
	  	<h2><? echo $empName; ?></h2>
		<ul class="panel panel-default contentMain">
			<h3 class="contentInfo">회사 정보 / 실생활</h3>
			<a class="contentEdit" href="textEdit.php?name=<?=$name;?>&val=2&type=empAtm">편집</a>
			<li class="panel-body well contentReading"><? echo $empAtm; ?></li>
			<h3 class="contentInfo">입사 팁</h3>
			<a class="contentEdit" href="textEdit.php?name=<?=$name;?>&val=2&type=empTip">편집</a>
			<li class="panel-body well contentReading"><? echo $empTip; ?></li>
		</ul>
	  </div><!--content in body-->

<? include 'foot.php'; ?>