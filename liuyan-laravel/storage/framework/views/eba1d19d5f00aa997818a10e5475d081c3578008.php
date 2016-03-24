<html>
	<meta charset="utf-8"/>
	<form action="updata" method="post">
	<table>
		<tr>
			<td><input type="text" name="content" value="<?php echo $arr[0]['content']?>"></td>
			<td><input type="submit" value="修改"></td>
			<input type="hidden" name="id" value="<?php echo $arr[0]['id']?>">
		</tr>
	</table>
	</form>
</html>