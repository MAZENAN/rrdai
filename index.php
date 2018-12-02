<?php
$arr = [
	'p1' => ['name' => '张小姐', 'age' => 16],
	'p2' => ['name' => '张小姐', 'age' => 16],
	'p3' => ['name' => '张小姐', 'age' => 16],
];
$arr2 = [
	'p1' => ['name' => '张小姐', 'age' => 16],
	'p2' => ['name' => '张小姐', 'age' => 16],
	'p3' => ['name' => '张小姐', 'age' => 16],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		table{
			float: left;
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<div>
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
	<table>
		<tr>
			<td>姓名</td>
			<td>性别</td>
			<?php foreach ($arr2 as $key => $value): ?>
				<tr>
					<td><?php echo $value['name']; ?></td>
					<td><?php echo $value['age']; ?></td>
				</tr>
			<?php endforeach?>
	</table>
	</div>
</body>
</html>