<?$title = "대학꿀팁";$link="univerMain.php";
	include 'head.php';
 ?>
 	<p class="editwar wartop">- 자신의 대학이야기를 한줄로 적어보세요.</p>
 	<p class="editwar">- Ctrl + F로 자신의 대학교를 찾을 수 있습니다.</p>
 	<p class="editwar">- 자신의 경험을 위키에 적어주세요.</p>
 	<p class="editwar">- 본 위키의 컨텐츠는 지극히 주관적일수 있습니다.</p>
	  <div class="contentIndex"><!--content in body-->
	  	<h2>대학 목록</h2>
		<ul class="panel panel-default contentMain">
			<?
				for($i=11;$i<25;$i++){
					$query= "select uniName,num from univer where code = $i order by binary(uniName)";
					$result=mysql_query($query);
					switch ($i) {
						case 11:echo "<li> 가 </li>";break;
						case 12:echo "<li> 나 </li>";break;
						case 13:echo "<li> 다 </li>";break;
						case 14:echo "<li> 라 </li>";break;
						case 15:echo "<li> 마 </li>";break;
						case 16:echo "<li> 바 </li>";break;
						case 17:echo "<li> 사 </li>";break;
						case 18:echo "<li> 아 </li>";break;
						case 19:echo "<li> 자 </li>";break;
						case 20:echo "<li> 차 </li>";break;
						case 21:echo "<li> 카 </li>";break;
						case 22:echo "<li> 타 </li>";break;
						case 23:echo "<li> 파 </li>";break;
						case 24:echo "<li> 하 </li>";break;
						default:break;
					}
					echo "<li class=well contentReading>";
					while($row=mysql_fetch_assoc($result)){
						$name=$row['uniName'];
						echo "ㆍ";
						echo "<a class=unioption href=univerSubpage.php?name=".$row['num'].">".$row['uniName']."</a>";
					}
					echo "</li>";
				}
			 ?>
		</ul>
	  </div><!--content in body-->
<? include 'foot.php'; ?>