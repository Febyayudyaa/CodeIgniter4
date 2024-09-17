<?= $this->extend('layout/asset') ?>
<?= $this->section('content') ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="color:#000000;"><strong>Tambah Peminjaman</strong></h3>
    </div>
    <div class="card-body">
        <form action="/peminjaman/simpan/" method="post">
            <div class="form-group">
                <label for="UserID" style="color: #007bff;">User ID</label>
                <input type="text" name="UserID" id="UserID" class="form-control" required>
            </div> 
            <div class="form-group">
                <label for="BukuID" style="color: #007bff;">Buku ID</label>
                <input type="text" name="BukuID" id="BukuID" class="form-control" required>
            </div>
            

            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>

<!-- Tambahkan jQuery dan datetimepicker -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>

<script>
    $(function () {
        // Inisialisasi datetimepicker dan set tanggal default ke sekarang
        $('#TanggalPeminjaman').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            defaultDate: new Date()
        });
    });
</script>

<?= $this->endSection() ?>
