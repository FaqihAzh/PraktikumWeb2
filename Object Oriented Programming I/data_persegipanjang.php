<?php
require_once "class_persegipanjang.php";
$persegipanjang1 = new PersegiPanjang(5,2);
$persegipanjang2 = new PersegiPanjang(5,4);
?>

<table>
<?php
echo '<tr><td>'.'Luas Persegi Panjang I'.'</td>';
echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
echo '<td>'.$persegipanjang1->getLuas().'</td></tr>';
echo '<tr><td>'.'Luas Persegi Panjang II'.'</td>';
echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
echo '<td>'.$persegipanjang2->getLuas().'</td></tr>';
echo '<tr><td>'.'Keliling Persegi Panjang I'.'</td>';
echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
echo '<td>'.$persegipanjang1->getLuas().'</td></tr>';
echo '<tr><td>'.'Keliling Persegi Panjang II'.'</td>';
echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
echo '<td>'.$persegipanjang2->getLuas().'</td></tr>';
?>
</table>