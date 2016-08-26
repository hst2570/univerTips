<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no;">
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/myWiki.js"></script>
  <meta name="description" content="우리들이 만들어 가는 대학 생활">
  <meta name="author" content="seong">
  <meta name="naver-site-verification" content="72b6f1fec40c587f652754067d70f8ee9d38b6b0"/>
  <link rel="shortcut icon" href="img/tipmain.ico"> <!--title icon-->
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="css/myWiki.css">
  <link href='http://fonts.googleapis.com/css?nanumgothic' rel='stylesheet' type='text/css'>
  <div id="fb-root"></div>  
  <title class="titlebar">대학꿀팁위키</title>
  <script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	  }(document, 'script', 'facebook-jssdk'));</script>
  <?
  
  	$connect = mysql_connect("localhost","root","tjdxo#9513!");
	if(!mysql_select_db("univertip",$connect)){
		echo "<script>alert('DB error!')</script>";
		exit;
	}
	mysql_query('SET NAMES utf8');
	
	if($title==null){
		$title="대학꿀팁";
		$link="index.php";
	}
	$date=date("y-m-d H:i:s");
	$time=time();
	$ip=$_SERVER['REMOTE_ADDR'];
	$check=substr($ip,0,2);
	if($ip!="192.168.1.1" and  $ip!="127.0.0.1" and $check!="66"){
		$query = "insert into userinfo (ip,page,date,dateint) values ('$ip','$title','$date','$time')";
		mysql_query($query);
	}
	?>
</head>

<body>
	<div class="myHeader"><!--herder start-->
		<div class="myHeaderDetail">
		    <p class="mintitle">
		    	<a href="category.php" class="myMap">
					<span class="glyphicon glyphicon-th-large"></span>
		    	</a>
		    	누구나 참여가능한
		    	<a href="index.php" class="myHome">
					<span class="glyphicon glyphicon-home"></span>
			    </a>
			</p>
			<h1><a href="<?=$link?>" class="test"><?=$title?></a></h1>
		</div>
		<div class="container inner">
			<div class="navbar navbar-default myNav"style="margin: 0" data-position="fixed"role="navigation"><!--nav-->
			  <div class="collapse navbar-collapse navbar-ex1-collapse">
			    <ul class="nav navbar-nav myNav2">
			    	<li><a class="navbar-brand" href="index.php">Home</a></li>
			    	<!--<li class="dropdown">
					<a href="univerMain.php" class="dropdown-toggle" data-toggle="dropdown">위키<b class="caret"></b></a>
						<ul class="dropdown-menu">-->
							<li><a href="univerMain.php">대학꿀팁</a></li>
						 	<li><a href="jobMain.php">취업꿀팁</a></li>
						  	<li><a href="partworkMain.php">알바꿀팁</a></li>
						<!--</ul>
					</li>-->
					<li><a href="calendar.php">한마디문의</a></li>
			    </ul>
			  </div>
			</div>
		</div>
		
	</div><!--herder end-->
	<div class="container">