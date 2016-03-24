<html>
	<meta charset="utf-8"/>
	<form action="index.php?r=index/updata" method="post">
	<table>
		<tr>
			<td><input type="text" name="content" value="<?php echo $arr['content']?>"></td>
			<td><input type="submit" value="修改"></td>
			<input type="hidden" name="id" value="<?php echo $arr['id']?>">
		</tr>
	</table>
	</form>
</html>