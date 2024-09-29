<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Arsip</title>
</head>
<body>
    <h1>Tambah Arsip</h1>

    <form method="post" action="<?php echo site_url('arsip/store'); ?>">
        <label>No Ref</label>
        <input type="text" name="no_ref" required><br>

        <label>Nama Berkas</label>
        <input type="text" name="nama_berkas" required><br>

        <label>Tanggal</label>
        <input type="date" name="tanggal" required><br>

        <label>Loker</label>
        <input type="text" name="loker" required><br
