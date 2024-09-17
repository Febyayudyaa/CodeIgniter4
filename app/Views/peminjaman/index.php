<?= $this->extend('layout/asset') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="color:#000000;"><strong>Daftar peminjaman</strong></h3>
        <div class="card-tools">
            <a href="/peminjaman/tambah/" class="btn btn-primary btn-sm">Tambah peminjaman</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th style="color: #fff; background-color: #007bff; text-align: center;">PeminjamanID</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">User</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Buku</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Tanggal Pinjam</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Aksi</th>

            </tr>
            </thead>
            <tbody>
                <?php foreach ($peminjamans as $peminjaman): ?>
                <tr style="background-color: #D3D3D3;">
                    <td style="text-align: center;"><?= $peminjaman['PeminjamanID'] ?></td>
                    <td style="text-align: center;"><?= $peminjaman['user_name'] ?></td> <!-- Tampilkan nama pengguna -->
                    <td style="text-align: center;"><?= $peminjaman['buku_title'] ?></td> <!-- Tampilkan judul buku -->
                    <td style="text-align: center;"><?= $peminjaman['TanggalPeminjaman'] ?></td>
                    <td style="text-align: center;">
                        <a href="/peminjaman/edit/<?= $peminjaman['PeminjamanID'] ?>" class="btn btn-warning">Edit</a>
                        <a href="/peminjaman/delete/<?= $peminjaman['PeminjamanID'] ?>" onclick="return confirm('Apakah kamu yakin?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>
<?= $this->endSection() ?>
