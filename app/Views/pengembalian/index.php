<?= $this->extend('layout/asset') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="color:#000000;"><strong>Daftar Pengembalian</strong></h3>
        <div class="card-tools">
            <a href="/pengembalian/tambah/" class="btn btn-primary btn-sm">Tambah Pengembalian</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th style="color: #fff; background-color: #007bff; text-align: center;">PeminjamanID</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">User</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Buku</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Tanggal kembali</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Aksi</th>

            </tr>
            </thead>
            <tbody>
                <?php foreach ($pengembalians as $pengembalian): ?>
                <tr style="background-color: #D3D3D3;">
                    <td style="text-align: center;"><?= $pengembalian['PeminjamanID'] ?></td>
                    <td style="text-align: center;"><?= $pengembalian['user_name'] ?></td> <!-- Tampilkan nama pengguna -->
                    <td style="text-align: center;"><?= $pengembalian['buku_title'] ?></td> <!-- Tampilkan judul buku -->
                    <td style="text-align: center;"><?= $pengembalian['TanggalPengembalian'] ?></td>
                    <td style="text-align: center;">
                        <a href="/pengembalian/edit/<?= $pengembalian['PeminjamanID'] ?>" class="btn btn-warning">Edit</a>
                        <a href="/pengembalian/delete/<?= $pengembalian['PeminjamanID'] ?>" onclick="return confirm('Apakah kamu yakin?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>
<?= $this->endSection() ?>
