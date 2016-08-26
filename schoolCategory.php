<? $title = "학원꿀팁";$link="schoolMain.php";include 'head.php';$areainfo=$_GET['name'];
	$query= "select schName,num from shcool where subcode='$areainfo'";
	$result=mysql_query($query);
	switch ($areainfo) {
		case 1:$name="제주도";break;
		case 2:$name="경기도";break;
		case 3:$name="강원도";break;
		case 4:$name="충청남도";break;
		case 5:$name="충청북도";break;
		case 6:$name="경상남도";break;
		case 7:$name="경상북도";break;
		case 8:$name="전라남도";break;
		case 9:$name="전라북도";break;
		case 10:$name="서울";break;
		case 11:$name="대전";break;
		case 12:$name="대구";break;
		case 13:$name="부산";break;
		case 14:$name="광주";break;
		default:break;
	}
 ?>
<!--학원-->
 	<p class="editwar wartop">- 학원을 추가하고 싶다면 하단에 적힌 메일로 문의바랍니다.</p>
 	<p class="editwar">- 자신의 경험을 위키에 적어주세요.</p>
 	<p class="editwar">- 본 위키의 컨텐츠는 지극히 주관적일수 있습니다.</p>
	  <div class="content"><!--content in body-->
	  	<h2><? echo $name; ?></h2>
		<ul class="panel panel-default contentMain">
			<?
				while($row=mysql_fetch_assoc($result)){
					echo "<li class=option>- <a href=schoolSubpage.php?name=".$row['num']."&path=".$areainfo.">".$row['schName']."</a></li>";
				}
			 ?>
		</ul>
	  </div><!--content in body-->
<? include 'foot.php'; ?>