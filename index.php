<?php
$arr = ['p1' => ['name' => '张小姐', 'age' => 16], 'p2' => ['name' => '张小姐', 'age' => 16], 'p3' => ['name' => '张小姐', 'age' => 16]];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<td>姓名</td>
			<td>性别</td>
			<?php foreach ($arr as $key => $value): ?>
				<tr>
					<td><?php echo $value['name']; ?></td>
					<td><?php echo $value['age']; ?></td>
				</tr>
			<?php endforeach?>
	</table>
</body>
</html>