<?$title="한마디";$link="calendar.php"; include 'head.php';
	$year = date('Y'); 
	$month = date('m');
	$day = date('d');
	$date=date('ymd');
	
	$query = "select * from calendar order by date asc";
	$result=mysql_query($query);
?>
<h2>한마디로 문의하기</h2>
<p class="editwar">- 부족한점 및 추가하실 점을 간략하게 적어 주세요. </p>
<p class="editwar">- 협업 및 기타 광고문의는 이 페이지 또는 hamper6004@naver.com 으로 문의주세요.</p>
<p class="editwar">- 해당 피드백은 최대한 빠르고 정확하게 적용하도록 노력하겠습니다.</p>
<div class="panel-group calendarbox" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          <? echo $year."년".$month."월".$day."일"; ?></a>
        <span class="label label-danger mylabel">today</span>
        <a href="#collapsefirst" data-toggle="collapse" data-parent="#accordion" style="color:#428bca" class="calendaredit">댓글달기</a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        <?
        	while($row=mysql_fetch_assoc($result)){
        		if($date==$row['today']){
        			echo "<p class=talkcontent>- ".str_replace("\n","<br>",$row['content'])."<span>".substr($row['date'],11,5)."</span></p>";
				}else{
					continue;
				}
			}
        ?>
      </div>
    </div>
     <div id="collapsefirst" class="panel-collapse collapse in">
      <div class="panel-body">
      <form method="post" action="calendarinsert.php">
      	<textarea name="edit" class="col-xs-11 col-sm-8 col-md-8 texttalk"style="resize: none"wrap="hard"></textarea>
      	<input type="hidden" name="date" value="<?=$date?>" />
      	<input type="submit" class="btn btn-default" value="저장" />
      </form>
      </div>
    </div>
  </div>
</div>
<?include 'foot.php';?>