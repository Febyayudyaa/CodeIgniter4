<?= $this->extend('layout/asset') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="color:#000000;"><strong>Daftar User</strong></h3>
        <div class="card-tools">
            <a href="/user/create" class="btn btn-primary btn-sm">Tambah User</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th style="color: #fff; background-color: #007bff; text-align: center;">UserID</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Username</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Email</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Nama Lengkap</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Alamat</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Aksi</th>

            </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr style="background-color: #D3D3D3;">
                    <td style="text-align: center;"><?= $user['UserID'] ?></td>
                    <td style="text-align: center;"><?= $user['Username'] ?></td>
                    <td style="text-align: center;"><?= $user['Email'] ?></td>
                    <td style="text-align: center;"><?= $user['NamaLengkap'] ?></td>
                    <td style="text-align: center;"><?= $user['Alamat'] ?></td>
                    <td style="text-align: center;">
                        <a href="/user/update<?= $user['UserID'] ?>" class="btn btn-warning">Edit</a>
                        <a href="/user/hapus/<?= $user['UserID'] ?>"onclick="return confirm('Apakah kamu yakin?')"class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
