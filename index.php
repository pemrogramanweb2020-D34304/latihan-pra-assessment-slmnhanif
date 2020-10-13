<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$buku = array(
    array(
        "judul" => "Sherlock Holmes",
        "pengarang" => "Arthur Conan Doyle",
        "harga" => "50000",
        "stok" => "20"
    ) ,
    array(
        "judul" => "Arsene Lupin",
        "pengarang" => "Maurice LeBlanc",
        "harga" => "250000",
        "stok" => "50"
    ) ,
    array(
        "judul" => "Game Of Throne",
        "pengarang" => "George R.R. Martin",
        "harga" => "125000",
        "stok" => "60"
    ) ,
);

$pembelian = array(
    array(
        "judul" => "Sherlock Holmes",
        "jumlah" => "5"
    ) ,
    array(
        "judul" => "Arsene Lupin",
        "jumlah" => "2"
    ) ,
    array(
        "judul" => "Game Of Throne",
        "jumlah" => "4"
    ) ,
);

$result = array_merge($buku, $pembelian);

$n = [];
$i = 0;

foreach ($buku as $b)
{
    $n[$i] = array_merge($buku[$i], $pembelian[$i]);

    $i++;
}

?>

<FORM>
<TABLE border = "1px" cellpadding="5">
	<tr>
		<td>Judul</td>
		<td>Pengarang</td>
		<td>Harga</td>
		<td>Stok</td>
	</tr>
<?php
$total = 0;
$totalharga = 0;

foreach ($buku as $user)
{
?>
		<tr>
		<td><?php echo $user["judul"] ?></td>
		<td><?php echo $user["pengarang"] ?></td>
		<td><?php echo $user["harga"] ?></td>
		<td><?php echo $user["stok"] ?></td>
	</tr> <?php $total += $user["stok"];
}
?>
<tr>
	<td colspan="3">Jumlah Stok Buku</td>
	<td><?php echo $total ?></td>
</tr>
	</TABLE><br>
<TABLE border = "1px" cellpadding="5">
	<tr>
		<td>Judul</td>
		<td>Harga Satuan</td>
		<td>Jumlah yang dibeli</td>
		<td>Total Harga</td>
	</tr>
	<?php
$total = 0;
$totalharga = 0;

foreach ($n as $dua)
{
?>
		<tr>
		<td><?php echo $dua["judul"] ?></td>
		<td><?php echo $dua["harga"] ?></td>
		<td><?php echo $dua["jumlah"] ?></td>
		<td><?php echo $dua["jumlah"]*$dua["harga"] ?></td>
	</tr> <?php
$total+= $dua["jumlah"]*$dua["harga"];
}

?>
	<tr>
	<td colspan="3">Jumlah Stok Buku</td>
	<td><?php echo $total ?></td>
</tr>

	
</table>
</FORM>

</body>
</html>
