<!DOCTYPE html>
<html>
    <head>
<title></title></head>
<body>
<h4> WELCOME TO <h4>
<h3 >Aplikasi Baris Aritmatika</h3>
<form action="" method="post"> 
<tr>
<td> Deret ke-1</td>
<td>:</td>
<input type="text" name="a" value="" placeholder="Masukkan Nilai Deret 1" /><br/>

</tr>
<tr>
<td> Pembeda </td>
<td>:</td>
<input type="text" name="b"value="" placeholder="Masukkan Nilai Pembeda" /><br/>

</tr>

<tr> 
<td> Deret Ke- </td>
<td>:</td>
 <input type="text" name="un"value="" placeholder="Masukkan Nilai Deret" /><br/>
 
</tr>


<input type="submit" name="submit" value="Hasil">
</body>
</form>
</html>


<?php 
if (isset($_POST['submit'])){
    $Deret1 = $_POST['a'];
    $Deret2 = $_POST['b'];
    $Deret_n = $_POST['un'];  

   $hasil1 = $Deret_n - 1;
   $hasil2 = $hasil1 * $Deret2;
   $hasil = $Deret1 + $hasil2;
   echo '<br>';
   echo "Deret Ke- ".$_POST['un'] ;
   echo "  yaitu  ";
   echo $hasil;
    
}
?>