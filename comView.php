<? $title = "팀 매칭";$link="comTim.php";include 'head.php';
	$timNum=$_GET['title'];
	$val=$_GET['val'];
	
	switch ($val) {
		case 1:
			$val= "seachtim";$tag="timNumber";break;
		case 2:
			$val= "seachstudy";break;
		case 3:
			$val= "seachcircle";break;
		case 4:
			$val= "seachroom";break;
		case 5:
			$val= "seachfree";break;
		default:
			exit;
			break;
	}
	$query= "select * from $val where $tag = $timNum";
	$result=mysql_query($query);
	$row=mysql_fetch_assoc($result);
?>
	<div class="myView">
		<div class="col-xs-11 col-sm-11 col-md-10 myinbox">
			<h2 class="col-xs-11 col-sm-11 col-md-5 myinTitle"><?=$row['timTitle']?></h2>
			<p class="col-xs-7 col-sm-7 col-md-3 myinfont">게시자 : <?=$row['timPname']?> (<?= substr($row['ip'],0,3)?>.xxx.xxx.xxx)</p>
			<p class="col-xs-5 col-sm-5 col-md-3 myinfont"><?=$row['timdate']?></p>
			<p class="col-xs-11 col-sm-11 col-md-12 myCon"><?=str_replace("\n","<br>",$row['timContent'])?></p>
		</div>
		<!--<form action="comFeed.php" method="post">
			<input type="text" name="feed" />
			<input type="text" name="name" />
			<input type="hidden" name="path" value="<?=$val?>" />
			<input type="hidden" name="where" value="<?=$timNum?>" />
			<input type="submit" value="게시" />
	<a href="<?=$link?>">목록으로</a>
		</form>-->
	</div>
<? include 'foot.php'; ?>