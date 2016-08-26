<? $title = "취업꿀팁";$link="jobMain.php";include 'head.php';
	$addcom=$_POST['addcom'];
	$count=$_POST['count']+1;
	$ment="저장된 문서가 없습니다. 

새로운 <strong>문서</strong> 작성에 참여해보세요.";

	if($addcom!=null){
		$query="insert into employment (empName,num,empAtm,empTip) values ('$addcom','$count','$ment','$ment')";
		mysql_query($query);
		$addcom=null;
		echo "<meta http-equiv='refresh' content='0;url=jobMAin.php'>";exit;
	}
 ?>
<!--취업-->
	<p class="editwar wartop">- 하단의 추가로 회사를 추가할 수 있습니다.</p>
 	<p class="editwar">- 자신의 경험을 위키에 적어주세요.</p>
 	<p class="editwar">- 본 위키의 컨텐츠는 지극히 주관적일수 있습니다.</p>
 	<form method="post" action="#jobMain">
 		<input type="submit" class="btn btn-default btnadd" value="추가" />
 		<input type="text" class="addcom" name="addcom"placeholder="회사를 추가하세요." />
 		<h2 class="boxing">회사 목록</h2>
		<div class="content"><!--content in body-->
	 		<ul class="panel panel-default contentMain">
			<?
				$query= "select empName,num from employment order by binary(empName)";
				$result=mysql_query($query);
				while($row=mysql_fetch_assoc($result)){
				echo "<li class=option>- <a href=jobSubpage.php?name=".$row['num'].">".$row['empName']."</a></li>";//get방식으로 값넘기기
				$i=$i+1;
				}
			 ?>
			</ul>
		</div><!--content in body-->
		<input type="hidden" name="count" value="<?=$i?>" />
	  </form>
<? include 'foot.php'; ?>