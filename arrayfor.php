<!DOCTYPE html>
<html>
<head>
	<title>Latihan Tabel</title>
</head>
<body>

<?php
$prodi = [
		["id"=> 0,
		"nama"=> "kimia",
		"kuota"=> 12,
		"kaprodi"=> "Andi"
		],
		[
		"id"=> 1,
		"nama"=> "fisika",
		"kuota"=> 14,
		"kaprodi"=> "Nurhasanah"
		],
		[
		"id"=> 2,
		"nama"=> "biologi",
		"kuota"=> 12,
		"kaprodi"=> "Rizalinda"
		],
		[
		"id"=> 3,
		"nama"=> "sisfo",
		"kuota"=> 32,
		"kaprodi"=> "Ilham"
		],
		[
		"id"=> 4,
		"nama"=> "kelautan",
		"kuota"=> 11,
		"kaprodi"=> "Nora"
		],
		[
		"id"=> 5,
		"nama"=> "statistika",
		"kuota"=> 15,
		"kaprodi"=> "Naomi"
		],
		[
		"id"=> 6,
		"nama"=> "matematika",
		"kuota"=> 12,
		"kaprodi"=> "Mariatul"
		],
	];

	echo $prodi [0][id];
	echo $prodi [0][nama];
	echo $prodi [0][kuota];
	echo $prodi [0][kaprodi];
	echo "<br>";
	echo "<br>";


	echo $prodi [1][id];
	echo $prodi [1][nama];
	echo $prodi [1][kuota];
	echo $prodi [1][kaprodi];
	echo "<br>";
	echo "<br>";

	echo $prodi [2][id];
	echo $prodi [2][nama];
	echo $prodi [2][kuota];
	echo $prodi [2][kaprodi];
	echo "<br>";
	echo "<br>";

	echo $prodi [3][id];
	echo $prodi [3][nama];
	echo $prodi [3][kuota];
	echo $prodi [3][kaprodi];
	echo "<br>";
	echo "<br>";

	echo $prodi [4][id];
	echo $prodi [4][nama];
	echo $prodi [4][kuota];
	echo $prodi [4][kaprodi];
	echo "<br>";
	echo "<br>";

	echo $prodi [5][id];
	echo $prodi [5][nama];
	echo $prodi [5][kuota];
	echo $prodi [5][kaprodi];
	echo "<br>";
	echo "<br>";

	echo $prodi [6][id];
	echo $prodi [6][nama];
	echo $prodi [6][kuota];
	echo $prodi [6][kaprodi];
	echo "<br>";
	echo "<br>";

	echo "<pre>";
	echo var_dump($prodi);
	echo "<pre>";
?>
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


