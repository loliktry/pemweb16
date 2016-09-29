<html>
<head>
</head>
<body>
<h3>FORM INPUTAN DATA </h3>
<form method="POST" action="terima.php">
<pre>
Bil 1 :<input type="text" name="n1" value="<?php echo $_POST['operasi']?>" >
Bil 2 :<input type="text" name="n2">
Jenis Operasi
:
<input type="radio" name="operasi" value="1"> - penjumlahan
<input type="radio" name="operasi" value="2"> - perngurangan

<input type="submit" name="tombol" value="hitung">
<input type="reset" name="bersih" value="BERSIHKAN">
</pre>
</form>
</body>
</html>

