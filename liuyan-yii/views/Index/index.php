<?php
use yii\widgets\LinkPager;
?>
<html>
	<meta charset="utf-8"/>
	<center>
		<h2>留言板</h2>
		<form action="index.php?r=index/add" method="post">
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
						<a href="index.php?r=index/del&id=<?php echo $value['id']?>">删除</a>
						<a href="index.php?r=index/update&id=<?php echo $value['id']?>">修改</a>
					</td>
				</tr>
			<?php }?>
		</table>
		<?php
		echo LinkPager::widget([
		    'pagination' => $pages,
		    'firstPageLabel'=>"首页",
		    'nextPageLabel'=>"下一页",
		    'prevPageLabel'=>"上一页",
		    'lastPageLabel'=>"尾页",
		]);
		?>

	</center>
</html>