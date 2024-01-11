<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <center>
        <h1>Tambah Buku</h1>
        <form name="Tambah" action="add.php" method="post" onsubmit="return validasi()">
            Judul : <input type="text" name="judul"><br><br>
            Karya : <input type="text" name="karya"><br><br>
            Penerbit : <input type="text" name="penerbit"><br><br>
            Tahun : <input type="text" name="tahun"><br><br>
            <input type="submit" value="kirim">
        </form>
    </center>
</body>
<script>
    function validasi() {
        var x = document.forms['Tambah']['judul'].value;
        if (x == "") {
            alert("Judul harus diisi");
            return false;
        }
    }
</script>
</html>