<? $title = "팀 매칭";$link="comTim.php";include 'head.php';

	$query= "select * from seachtim order by timNumber desc";
	$result=mysql_query($query);
	$count=$_POST['dbstart'];
	$page=$_POST['page']+1;
 ?>
	<div class="col-xs-11 col-sm-11 col-md-10 contentMain">
		<form method="post" action="comEdit.php">
			<input type="hidden" name="path" value="tim" />
			<input type="submit" class="btn btn-default mybtn" value="글쓰기" />
		</form>
		<table class="table table-hover ssultable">
			<thead>
					<tr class="myTbHead">
						<td class="col-xs-10 col-sm-10 col-md-7 my-Title">제  목</td><!--제목-->
						<td class="col-xs-3 col-sm-3 col-md-2 my-Ip">이름</td><!--이름(ip)-->
						<td class="col-xs-2 col-sm-2 col-md-2 my-Date">날짜</td><!--날짜-->
					</tr>
			</thead>
			<tbody class="">
				<?
				for($i=0;$i<=20;$i++){
				$row=mysql_fetch_assoc($result);
				$timNum = $row['timNumber'];
				if($timNum<1){break;}
				$timTitle = $row['timTitle'];
				$timName=$row['timPname'];
				$timDate=$row['timdate'];
				$timVal=$row['timVal'];
					
				switch ($timVal) {
					case 1:
						$val="[정보]";break;
					case 2:
						$val="[유머]";break;
					case 3:
						$val="[뒷담]";break;
					default:
						$val="[기타]";
						break;
				}
				?>
				<tr>
					<td class="col-xs-5 col-sm-5 col-md-7 myTitle"><p class="mySmtit"><?=$val?><a href="comView.php?title=<?=$timNum?>&val=1"><?=$timTitle?></a></p></td><!--제목-->
					<td class="col-xs-3 col-sm-3 col-md-2 myIp"><?=$timName?></td><!--이름(ip)-->
					<td class="col-xs-2 col-sm-2 col-md-2 myDate"><?=$timDate?></td><!--날짜-->
				</tr>
				<? 
					$count=$timNum-$i;
				}?>
			</tbody>
			<tfoot>
				<tr>
					<td>
						<form action="comTim" method="post">
							<input type="hidden" name="page" value="<?=$page-1?>" />
							<input type="hidden" name="dbstart" value="<?=$count?>"/>
						</form>
					</td>
				</tr>
			</tfoot>
		</table>
	</div>
<? include 'foot.php'; ?>