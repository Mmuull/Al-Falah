<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percabangan</title>
</head>
<body>
    <form method="post" action="PHP_Percabangan.php">
        <label for="angka1">Angka 1</label><br>
        <input type="number" name="angka1" id="" min="0" max="9"><br>
        <label for="angka2">Angka 2</label><br>
        <input type="number" name="angka2" id="" min="0" max="9"><br>
        <label for="operasi">Operasi</label><br>
        <select name="operasi" id="operasi">
            <option value="jumlah">Penjumlahan</option>
            <option value="kurang">Pengurangan</option>
            <option value="kali">Perkalian</option>
            <option value="bagi">Pembagian</option>
        </select><br><br>
        <input type="submit" value="Submit">
    </form>    
</body>
</html>