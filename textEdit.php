<? include 'head.php';
	$name=$_GET['name'];
	$val=$_GET['val'];
	$type=$_GET['type'];

	switch ($val){
		case '1':
			$val="univer";$tag="uniName";break;
		case '2':
			$val="employment";$tag="empName";break;
		case '3':
			$val="shcool";$tag="schName";break;
		case '4':
			$val="parttimejob";$tag="jobName";break;
		default:
			$val="DB error.";break;
	}
	
	$query= "select $type from $val where num ='$name'";
	$result=mysql_query($query);
	$row=mysql_fetch_assoc($result);
	
	$content=strip_tags($row[$type],('<strong>,<a>'));
 ?>
<!--문서 편집-->
	<h2>문서편집</h2>
	<p class="editwar">- 타인 비방 및 욕설, 추측성, 허위 내용 작성시 모든 책임은 작성자 본인에게 있습니다. </p>
	<p class="editwar">- 문서 편집시 작성자의 컴퓨터 ip가 서버에 저장됩니다. </p>
	<p class="editwar">- 굵은글씨를 표현하기 위해서는 <'strong>과<'/strong>사이에 단어를 넣으시면 됩니다.</p>
	<p class="editwar">- URL링크를 위해서는 <'a href="URL">문구<'/a>에서 href=""이곳에 알맞는 URL을 넣으시면 됩니다.</p>
	  <div class="content"><!--content in body-->
	  	<form method="post" action="textInsert.php">
			<textarea class="well well-lg wikitextedit" style="resize: none"name="edit" wrap="hard"><?echo strip_tags($content,('<strong>,<a>'));?></textarea>
			<input type="hidden" value="<?=$name?>" name="name" />
			<input type="hidden" value="<?=$type?>" name="type" />
			<input type="hidden" value="<?=$tag?>" name="tag" />
			<input type="hidden" value="<?=$val?>" name="val" />
			<input class="btn btn-default mySubmit" type="submit" value="수정"/>
			<input class="btn btn-default mySubmit movelft" type="button" onclick="history.go(-1)" value="취소"/>
		</form>
	  </div><!--content in body-->
<? include 'foot.php'; ?>