<?= $this->extend('layout/asset') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="color:#000000;"><strong>Daftar Buku</strong></h3>
        <div class="card-tools">
            <a href="/buku/create" class="btn btn-primary btn-sm">Tambah Buku</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th style="color: #fff; background-color: #007bff; text-align: center;">BukuID</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Judul</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Penulis</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Penerbit</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Tahun Terbit</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($bukus as $buku): ?>
                <tr style="background-color: #D3D3D3;">
                    <td style="text-align: center;"><?= $buku['BukuID'] ?></td>
                    <td style="text-align: center;"><?= $buku['Judul'] ?></td>
                    <td style="text-align: center;"><?= $buku['Penulis'] ?></td>
                    <td style="text-align: center;"><?= $buku['Penerbit'] ?></td>
                    <td style="text-align: center;"><?= $buku['TahunTerbit'] ?></td>
                    <td style="text-align: center;">
                        <a href="/buku/update/<?= $buku['BukuID'] ?>" class="btn btn-warning">Edit</a>
                        <a href="/buku/hapus/<?= $buku['BukuID'] ?>"onclick="return confirm('Apakah kamu yakin?')"class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
