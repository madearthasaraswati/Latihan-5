<!DOCTYPE html>
<html>
    <head>
<title></title></head>
<body>
<h3>WELCOME TO</h3>
<h3>Aplikasi Deret Fibonacci</h3>
<form action="" method="post">
<tr>
  <td>Deret 1</td>
  <td>:</td>
  <input type="text" name="deret1" value="" placeholder="Masukkan Nilai Deret 1" /><br/>
</tr>
<tr>
  <td>Deret 2</td>
  <td>:</td>
  <input type="text" name="deret2" value="" placeholder="Masukkan Nilai Deret 2" /><br/>
</tr>
</tr>
<tr>
  <td>Jumlah Deret Yang Diinginkan</td>
  <td>:</td>
  <input type="text" name="jumlahderet"value="" placeholder="Masukkan Jumlah Deret" /><br/>
</tr>

<input type="submit" name="submit" value="Hasil">
</body>
</form>
</html>


<?php
if (isset($_POST['submit'])){
    $Deret1 = $_POST['deret1'];
    $Deret2 = $_POST['deret2'];
    $n = $_POST['jumlahderet'];  

    echo " <br> ";
    echo " Suku Deret Fibonaccinya yaitu  ";
    echo "$Deret1 $Deret2";
   
    for($i =0; $i < $n; $i++){
        $hasil = $Deret1 + $Deret2;
        echo " ";
        echo $hasil ;

        $Deret1 = $Deret2;
        $Deret2 = $hasil;
    }
}
?>






























