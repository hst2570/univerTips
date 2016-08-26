<? $title = "팀 매칭";$link="comTim.php";include 'head.php';
	$name=$_POST['path'];
 ?>
	<p class="editwar wartop">- 타인 비방 및 욕설, 거짓된 정보는 법적으로 처벌 받을수 있습니다.</p>
	<p class="editwar">- 게시판에 알맞는 내용을 작성해 주세요.</p>
	  <div class="content"><!--content in body-->
	  	<form method="post" action="comInsert.php">
	  		<label class="myComLab">닉네임  </label><input class="well myComtitle com-name" type="text" name="name" alt="이름적는곳"/>
	  		<label class="myComLab">제목 </label>
	  		<select name="play" class="myPlay">
			    <option value="">-------</option>
			    <option value="1">썰</option>
			    <option value="2">유머</option>
			    <option value="3">뒷담</option>
			    <option value="4">기타</option>
			</select>
	  		<input class="well myComtitle" type="text" name="title" alt="제목적는곳"placeholder="제목을 적어주세요." />
	  		<input type="hidden" name="path" value="<?=$name?>" />
			<textarea class="well col-xs-11 col-sm-11 col-md-11 textedit"placeholder="본문입니다."style="resize: none;padding: 15px" name="edit" wrap="hard"alt="내용적는곳"></textarea>
			<input class="btn btn-primary btn-lg mySubmit" type="submit" value="작성"/>
		</form>
	  </div><!--content in body-->
<? include 'foot.php'; ?>