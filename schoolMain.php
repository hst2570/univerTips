<? $title = "학원꿀팁";$link="schoolMain.php";include 'head.php'; ?>
<!--학원-->
 	<p class="editwar wartop">- 학원을 추가하고 싶다면 하단에 적힌 메일로 문의바랍니다.</p>
 	<p class="editwar">- 자신의 경험을 위키에 적어주세요.</p>
 	<p class="editwar">- 본 위키의 컨텐츠는 지극히 주관적일수 있습니다.</p>
	  <div class="content"><!--content in body-->
		<ul class="panel panel-default contentMain">
			<?
				$query= "select schSubName,subcode from shcool order by binary(schSubName)";
				$result=mysql_query($query);
				while($row=mysql_fetch_assoc($result)){
				echo "<li class=option>- <a href=schoolCategory.php?name=".$row['subcode'].">".$row['schSubName']."</a></li>";
				}
			 ?>
		</ul>
	  </div><!--content in body-->
<? include 'foot.php'; ?>