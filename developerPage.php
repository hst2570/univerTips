<?include 'head.php';
	
	$query="select * from univer where Date <> '0000-00-00 00:00:00' order by rand() limit 1";
	$result=mysql_query($query);
	while($row=mysql_fetch_assoc($result)){
		echo $row['uniName'];
		echo $row['uniStudy'];
		echo $row['uniClass'];
	}

?>

<?	$day=time()-86400;
	$week=time()-604800;
	$mouth=time()-2592000;
	$query="select * from userinfo where dateint>'$day'";
	$hiquery="select * from history order by submitDate desc";
	$result=mysql_query($query);
	$hisesult=mysql_query($hiquery);
?>
<ul>
	<h4>접속자조회</h4>
<?
	while($row=mysql_fetch_assoc($result)){
		if($row['ip']=="127.0.0.1"){
			continuen;
		}else{
			echo "<li>".$row['ip']." / ";
			echo $row['date']." / ".$row['page']."</li>";
			$count=$count+1;
		}
	}
?>
<li>접속인원 = <?=$count?></li>
</ul>
</br>
<ul>
	<h4>히스토리 목록</h4>	
<?
	while($row=mysql_fetch_assoc($hisesult)){
		if($row['ip']=="127.0.0.1"){
			continuen;
		}else{
			echo "<li>".$row['ip']." / ";
			echo $row['submitDate']." / ".$row['content']." / ".$row['category']."</li>";
		}
	}
?>
</ul>
 		<div id="carousel-example-generic" class="carousel slide">
		    <ol class="carousel-indicators">
		      <li data-target="#carousel-example-generic" data-interval="100" data-slide-to="0" class="active"></li>
		      <li data-target="#carousel-example-generic" data-interval="100"data-slide-to="1" class=""></li>
		      <li data-target="#carousel-example-generic" data-interval="100"data-slide-to="2" class=""></li>
		      <li data-target="#carousel-example-generic" data-interval="100"data-slide-to="3" class=""></li>
		      <li data-target="#carousel-example-generic" data-interval="100"data-slide-to="4" class=""></li>
		    </ol>
		    <div class="carousel-inner">
		      <div class="item active">
			      <img class="myPanimg" src="Desert.jpg" alt="">
			      <div class="carousel-caption">
			      	<h3>테스트중입니다.</h3>
			  	  </div>
		      </div>
		      <div class="item">
		        <img class="myPanimg" src="Desert.jpg" alt="">
		      </div>
		      <div class="item">
		        <img class="myPanimg"src="Desert.jpg" alt="">
		      </div>
		      <div class="item">
		        <img class="myPanimg"src="Desert.jpg" alt="">
		      </div>
		      <div class="item">
		        <img class="myPanimg"src="Desert.jpg" alt="">
		      </div>
		    </div>
		    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		      <span class="icon-prev"></span>
		    </a>
		    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		      <span class="icon-next"></span>
		    </a>
		  </div>
		  ----------------------------------------------------

<?include 'foot.php';?>