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
	
	if($uniClass==null){
		$uniClass = "저장된 내용이 없습니다. 내용을 입력해보세요.";
	}
	if($uniStudy==null){
		$uniStudy = "저장된 내용이 없습니다. 내용을 입력해보세요.";
	}
	if($uniPro==null){
		$uniPro = "저장된 내용이 없습니다. 내용을 입력해보세요.";
	}
?>
<p class="editwar wartop">- 타인 비방 및 욕설, 추측성, 허위 내용은 작성시 모든 책임은 작성자 본인에게 있습니다.</p>
<p class="editwar">- 자신의 대학이야기를 한줄로 적어보세요.</p>
<p class="editwar">- 적은 글을 삭제하고 싶다면 한마디문의로 삭제요청 바랍니다.</p>
<p class="editwar">- 굵은글씨를 표현하기 위해서는 html <a href="https://www.google.co.kr/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#newwindow=1&q=strong%ED%83%9C%EA%B7%B8">strong태그</a>를 사용하시면 됩니다.</p>
<p class="editwar">- URL링크를 위해서는 html <a href="https://www.google.co.kr/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#newwindow=1&q=a%ED%83%9C%EA%B7%B8">a 태그</a>를 사용하시면 됩니다.</p>
<h2><? echo $uniName; ?></h2>
<div class="panel-group calendarbox" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">- 학교, 학과정보</a>
        <a href="#collapsefirst" data-toggle="collapse" data-parent="#accordion" style="color:#428bca" class="calendaredit">추가하기</a>
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
      	<p class="editwar" style="float: right">저장시 자동으로 "-"문자가 문단 최상단에 붙습니다.</p>
      </form>
      </div>
    </div>
  </div>
  <!------------------>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2">- 꿀강의 모음</a>
        <a href="#collapseT" data-toggle="collapse" data-parent="#accordion" style="color:#428bca" class="calendaredit">추가하기</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse in">
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
      	<p class="editwar" style="float: right">저장시 자동으로 "-"문자가 문단 최상단에 붙습니다.</p>
      </form>
      </div>
    </div>
  </div>
  <!------------------>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse3">- 뒷담</a>
        <a href="#collapseS" data-toggle="collapse" data-parent="#accordion" style="color:#428bca" class="calendaredit">추가하기</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse in">
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
      	<p class="editwar" style="float: right">저장시 자동으로 "-"문자가 문단 최상단에 붙습니다.</p>
      </form>
      </div>
    </div>
  </div>
</div>
<?include 'foot.php';?>