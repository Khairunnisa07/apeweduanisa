<!DOCTYPE html>
<html>
<head>
	<title>Latihan Tabel</title>
</head>
<body>
	<h1>Ini Latihan Tabel</h1>
	<table border="1">
		<tr>
			<td>id</td>
			<td>nama prodi</td>
			<td>kuota</td>
			<td>kaprodi</td>
		</tr>
<?php

	for ($i=1; $i <= 100; $i++):
	$a=$i*3		
?>
		<tr>
			<td><?php echo $i;?></td>
			<td>sisfo</td>
			<td><?php echo $a;?></td>

<?php if ($i%2 ==0): ?>
	<td>Ilhamsyah</td>

<?php else: ?>
	<td>Renny</td>

<?php endif; ?>
		</tr>
<?php
 	endfor;
?>
	</table>
</body>
</html>


