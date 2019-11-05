<html>
<head> 
<meta charset="utf-8">
</head> 
<body>
<h1> Бондаренко Дмитрий ИУ4-12Б Вариант 10 </h1>
<form action="" method="get">





<h1> 2 Zadanie </h1>
<p> First number:  </p> <input type="text " name="n1">
<p> Second number: </p> <input type="text " name="n2">

<p> + </p> <input type="radio" name="plus"> 
<p> - </p> <input type="radio" name="minus"> 
<p> * </p> <input type="radio" name="mnoz"> 
<p> / </p> <input type="radio" name="del">
<input type= "submit">

<p> Result: </p> <input type="text" name="rez">
</form>
</body>

</html>

<?php 
echo "1 Zadanie";
for ($i= 1 ; $i<101 ; $i++) {
	for ($j=1 ; $j<101 ; $j++) { 
echo $i  ; echo $j ;
}
echo "<br>" ;
}  



$n1= $_GET['n1'];
$n2= $_GET['n2'];
$plus= $_GET['plus'];
$minus= $_GET['minus'];
$mnoz= $_GET['mnoz'];
$del= $_GET['del']; 
	if ($plus == TRUE )
 $rez= $n1 + $n2 ;
	if ($minus == TRUE )
 $rez= $n1 - $n2;
	if ($mnoz == TRUE )
$rez= $n1 * $n2;
	if ($del == TRUE )
$rez= $n1 / $n2;

echo  $rez ;
?>
