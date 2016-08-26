<? $title = "알바꿀팁";$link="partworkMain.php";include 'head.php'; ?>
<!--알바-->
 	<p class="editwar wartop">- 정확한 알바명과 분위기를 기재해주세요.</p>
 	<p class="editwar">- 자신의 경험을 위키에 적어주세요.</p>
 	<p class="editwar">- 본 위키의 컨텐츠는 지극히 주관적일수 있습니다.</p>
	  <div class="content"><!--content in body-->
		<ul class="panel panel-default contentMain">
			<?
				$query= "select jobName,num from parttimejob order by binary(jobName)";
				$result=mysql_query($query);
				while($row=mysql_fetch_assoc($result)){
				echo "<li class=option>- <a href=partworkSubpage.php?name=".$row['num'].">".$row['jobName']."</a></li>";
				}
			 ?>
		</ul>
	  </div><!--content in body-->
<? include 'foot.php'; ?>