<? include 'head.php';
	$query="select * from univer order by Date desc";
	$result=mysql_query($query);
	$year = date('Y'); 
	$month = date('m');
	$day = date('d');
	$date=date('ymd');
	$cquery = "select * from calendar order by date desc";
	$cresult=mysql_query($cquery);
 ?>
		<div class="col-xs-11 col-sm-8 col-md-9 welcome ment">
		 	<div class="col-xs-11 col-sm-11 col-md-12 header">
				<p>- 본 위키는 대학생들의 고충을 공유하고 해소하고자 만들어 졌습니다.</p>
				<p>- 여러분의 참여가 좀 더 나은 위키로 이어집니다.</p>
				<p>- 각 대학 뒷이야기, 꿀강의를 공유해 보세요.</p>
			</div>
			
			<div class="fb-like face" data-href="https://www.facebook.com/univerwiki?fref=nf" data-width="300px" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
			<div class="col-xs-11 col-sm-11 col-md-12 mytip">
				<div class="col-xs-11 col-sm-11 col-md-12 main"style="margin: 0" title="대학꿀팁">
				<h3>대학 꿀팁</h3><span class="label label-primary mylabel uninew">New</span>
					<?
						$tipquery="select * from univer where Date <> '0000-00-00 00:00:00' order by rand() limit 1";
						$tipresult=mysql_query($tipquery);
						while($row=mysql_fetch_assoc($tipresult)){
							$uniname=$row['uniName'];
							$uninone=str_replace("\n","<br>",$row['uniStudy']);
							$unintwo=str_replace("\n","<br>",$row['uniProfessor']);
							$uninum=$row['num'];
						}
					?>
					<h5><?=$uniname?>의 꿀강의</h5>
					<p class="panel panel-default mine" style="padding:5px;width:100%;height:100%"><?= substr($uninone,0,3000);?>..........</p>
					<h5><?=$uniname?>의 뒷담</h5>
					<p class="panel panel-default mine" style="padding:5px;width:100%;height:100%"><?= substr($unintwo,0,3000);?>..........</p>
					<a class="pagelink" href="univerSubpage.php?name=<?=$uninum?>">...더보기</a>
				</div>
			</div>
			<div class="col-xs-11 col-sm-11 col-md-6 main" title="취업준비팁">
			<h3>취업 허니팁</h3>
				<p>- 자신의 취업준비를 공유하세요!</p>
				<p>- 어떤 회사가 좋을까?</p>
				<a class="pagelink" href="jobMain.php">취업꿀팁 바로가기</a>
			</div>
			<div class="col-xs-11 col-sm-11 col-md-6 main" title="알바꿀팁">
			<h3>알바 꿀팁</h3>
				<p>- 몸소 알바를 하며 느낀 그 점! 공유해 주세요.</p>
				<p>- 여긴 시급은 쎈데...</p>
				<a class="pagelink" href="partworkMain.php">알바꿀팁 바로가기</a>
			</div>
			  <div class="panel panel-default col-xs-11 col-sm-11 col-md-12 myTalk">
			    <div class="panel-heading ">
			      <h4 class="panel-title">
			        <a class="accordion-toggle calldevel" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
			        	  개발자에게 한마디
			        </a>
			        <span class="label label-danger mylabel">today</span>
			        <a href="#collapsefirst" data-toggle="collapse" data-parent="#accordion" style="color:#428bca" class="calendaredit">댓글달기</a>
			      </h4>
			    </div>
			    <div id="collapseOne" class="panel-collapse collapse in">
			      <div class="panel-body">
			        <?for($i=0;$i<20;$i++){
		        		$row=mysql_fetch_assoc($cresult);
		        		if($date==$row['today']){
		        			echo "<p class=talkcontent>- ".str_replace("\n","<br>",$row['content'])."<span>".substr($row['date'],11,5)."</span></p>";
						}else{
							continue;
						}
					}?>
			      </div>
			    </div>
			     <div id="collapsefirst" class="panel-collapse collapse">
			      <div class="panel-body">
			      <form method="post" action="calendarinsert.php">
			      	<textarea name="edit" class="col-xs-11 col-sm-8 col-md-8 texttalk"style="resize: none"wrap="hard"></textarea>
			      	<input type="hidden" name="date" value="<?=$date?>" />
			      	<input type="submit" class="btn btn-default"style="float: left" value="저장" />
			      	<p class="editwar" style="float: right">+ 저장시 한마디 페이지로 넘어갑니다.</p>
			      </form>
			      </div>
			    </div>
			  </div>
		</div>
		<div class="col-xs-10 col-sm-3 col-md-2 submain new" title="히스토리">
		<h3>새로운 대학꿀팁</h3>
			<?	for($i=0;$i<20;$i++){
				$row=mysql_fetch_assoc($result);
				echo "<p><a href=univerSubpage.php?name=".$row['num'].">".$row['uniName']."</a></br><span>수정된 날짜 : ".$row['Date']."</span></p>";
			}
			?>
		</div>
	</div>
<? include 'foot.php'; ?>