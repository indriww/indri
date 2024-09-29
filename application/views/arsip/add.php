<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Arsip</title>
</head>

<body>
    <h1>Tambah Arsip Baru</h1>
    <form method="post" action="<?php echo site_url('arsip/add'); ?>">
        <label for="no_ref">No Ref:</label>
        <input type="text" name="no_ref" id="no_ref" required><br>

        <label for="nama_berkas">Nama Berkas:</label>
        <input type="text" name="nama_berkas" id="nama_berkas" required><br>

        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" required><br>

        <label for="loker">Loker:</label>
        <input type="text" name="loker" id="loker" required><br>

        <label for="row">Row:</label>
        <input type="number" name="row" id="row" required><br>

        <button type="submit">Tambah Arsip</button>
    </form>
</body>

</html>