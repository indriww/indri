<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Arsip</title>
</head>
<body>
    <h1>Daftar Arsip</h1>
    <a href="<?php echo site_url('arsip/add'); ?>">Tambah Arsip</a>

    <form method="get" action="<?php echo site_url('arsip/search'); ?>">
        <input type="text" name="no_ref" placeholder="Cari No Ref">
        <button type="submit">Cari</button>
    </form>

    <table border="1">
        <tr>
            <th>No Ref</th>
            <th>Nama Berkas</th>
            <th>Tanggal</th>
            <th>Loker</th>
            <th>Row</th>
            <th>Aksi</th>
        </tr>
</table>
</body>
</html>

<tbody>
        <!-- Memeriksa apakah $arsip berisi data -->
        <?php if (!empty($arsip)) { ?>
            <!-- Jika ada data, lakukan iterasi dengan foreach -->
            <?php foreach ($arsip as $key => $item) { ?>
                <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td><?php echo $item->no_ref; ?></td>
                    <td><?php echo $item->nama_berkas; ?></td>
                    <td><?php echo $item->tanggal; ?></td>
                    <td><?php echo $item->loker; ?></td>
                    <td><?php echo $item->row; ?></td>
                    <a href="<?php echo site_url('arsip/delete/'.$item->no_ref); ?>">Hapus</a>
                </td>
            </tr>
                </tr>
            <?php } ?>
        <?php } else { ?>
            <!-- Jika tidak ada data, tampilkan pesan ini -->
            <tr>
                <td colspan="6">Tidak ada arsip yang ditemukan.</td>
            </tr>
        <?php } ?>
    </tbody>
    </table>
</body>
</html>
