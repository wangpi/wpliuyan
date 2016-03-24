<html>
	<meta charset="utf-8"/>
	<center>
		<h2>留言板</h2>
		<form action="add" method="post">
			<input type="text" name="content">
			<input type="submit" value="我要留言">
		</form>
		<table>
			<tr>
				<td>留言内容</td>
				<td>留言时间</td>
				<td>操作</td>
			</tr>
			<?php foreach ($arr as $key => $value) {?>
				<tr>
					<td><?php echo $value['content']?></td>
					<td><?php echo $value['addtime']?></td>
					<td>
						<a href="del?id=<?php echo $value['id']?>">删除</a>
						<a href="update?id=<?php echo $value['id']?>">修改</a>
					</td>
				</tr>
			<?php }?>
		</table>
		{!! $arr->render() !!}
	</center>
</html>