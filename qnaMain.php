<? include 'head.php'; ?>
<!--문의-->
	  <div class="content"><!--content in body-->
	  	<h2>문의</h2>
	  	<p class="editwar">- 부족한점 및 추가하실 점을 구체적으로 말씀해 주세요. </p>
		<p class="editwar">- 협업 및 기타 광고문의는 이 페이지 또는 hamper6004@naver.com 으로 문의주세요.</p>
		<p class="editwar">- 해당 피드백은 최대한 빠르고 정확하게 적용하도록 노력하겠습니다.</p>
		<form method="post" action="#qnaMain.php">
			<textarea class="well well-lg wikitextedit" style="resize: none"name="edit" wrap="hard"><?echo strip_tags($content,('<strong>,<a>'));?></textarea>
			<input class="btn btn-default mySubmit" type="submit" value="보내기"/>
			<input class="btn btn-default mySubmit movelft" type="button" onclick="history.go(-1)" value="취소"/>
		</form>
	  </div><!--content in body-->
	  <? 
	  	$edit=strip_tags($_POST['edit'],('<strong>,<a>'));
		
		if($edit!=null){
			$date=date("y-m-d H:i:s");
			$ip=$_SERVER['REMOTE_ADDR'];
			$query="insert into qna (date,text,ip) values ('$date','$edit','$ip')";
			if(!mysql_query($query)){
				echo "<script>alert('전송실패')</script>";
				echo "<meta http-equiv='refresh' content='0;url=index.php'>";
				exit;
			}else{
				echo "<script>alert('전송성공')</script>";
				echo "<meta http-equiv='refresh' content='0;url=index.php'>";
				exit;
			}
		}
	  ?>
<? include 'foot.php'; ?>