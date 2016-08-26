<?$title = "대학꿀팁";$link="univerMain.php";
	include 'head.php';
	
	$name=$_GET['name'];
	
	$query= "select * from univer where num='$name'";
	$result=mysql_query($query);
	$row=mysql_fetch_assoc($result);
	
	$uniName=str_replace("\n","<br>",$row['uniName']);
	$uniStudy=str_replace("\n","<br>",$row['uniStudy']);
	$uniClass=str_replace("\n","<br>",$row['uniClass']);
	$uniPro=str_replace("\n","<br>",$row['uniProfessor']);
?>
<p class="editwar wartop">- 타인 비방 및 욕설, 추측성, 허위 내용은 작성시 모든 책임은 작성자 본인에게 있습니다.</p>
<p class="editwar">- 자신의 대학교가 없다면 하단에 적힌 메일로 추가 신청바랍니다.</p>
<p class="editwar">- 굵은글씨를 표현하기 위해서는 <'strong>과<'/strong>사이에 단어를 넣으시면 됩니다.</p>
<p class="editwar">- URL링크를 위해서는 <'a href="URL">문구<'/a>에서 href=""이곳에 알맞는 URL을 넣으시면 됩니다.(칸안에 '점을 빼고 사용하시면 됩니다.)</p>
<h2><? echo $uniName; ?></h2>
<div class="panel-group calendarbox" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">학교, 학과정보</a>
        <a href="#collapsefirst" data-toggle="collapse" data-parent="#accordion" style="color:#428bca" class="calendaredit">댓글달기</a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        <p class="well contentReading"><?=$uniClass?></p>
      </div>
    </div>
     <div id="collapsefirst" class="panel-collapse collapse">
      <div class="panel-body">
      <form method="post" action="newinsert.php">
      	<textarea name="edit" class="col-xs-11 col-sm-8 col-md-8 texttalk"style="resize: none"wrap="hard"></textarea>
      	<input type="hidden" name="num" value="<?=$name?>" />
      	<input type="hidden" name="type" value="uniClass" />
      	<input type="submit" class="btn btn-default" value="저장" />
      </form>
      </div>
    </div>
  </div>
  <!------------------>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2">꿀강의 모음</a>
        <span class="label label-danger mylabel">today</span>
        <a href="#collapseT" data-toggle="collapse" data-parent="#accordion" style="color:#428bca" class="calendaredit">댓글달기</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
        <p class="well contentReading"><?=$uniStudy?></p>
      </div>
    </div>
     <div id="collapseT" class="panel-collapse collapse">
      <div class="panel-body">
      <form method="post" action="newinsert.php">
      	<textarea name="edit" class="col-xs-11 col-sm-8 col-md-8 texttalk"style="resize: none"wrap="hard"></textarea>
      	<input type="hidden" name="num" value="<?=$name?>" />
      	<input type="hidden" name="type" value="uniStudy" />
      	<input type="submit" class="btn btn-default" value="저장" />
      </form>
      </div>
    </div>
  </div>
  <!------------------>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse3">뒷담</a>
        <span class="label label-danger mylabel">today</span>
        <a href="#collapseS" data-toggle="collapse" data-parent="#accordion" style="color:#428bca" class="calendaredit">댓글달기</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
        <p class="well contentReading"><?=$uniPro?></p>
      </div>
    </div>
     <div id="collapseS" class="panel-collapse collapse">
      <div class="panel-body">
      <form method="post" action="newinsert.php">
      	<textarea name="edit" class="col-xs-11 col-sm-8 col-md-8 texttalk"style="resize: none"wrap="hard"></textarea>
      	<input type="hidden" name="num" value="<?=$name?>" />
      	<input type="hidden" name="type" value="uniProfessor" />
      	<input type="submit" class="btn btn-default" value="저장" />
      </form>
      </div>
    </div>
  </div>
</div>
<?include 'foot.php';?>