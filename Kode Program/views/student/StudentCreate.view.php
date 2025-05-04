<?php
include_once("templates/header.html");
?>

<h2 class="mb-4">Tambah Mahasiswa</h2>

<form action="index.php" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" id="nim" name="nim" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">No HP</label>
        <input type="text" class="form-control" id="phone" name="phone" required>
    </div>
    <div class="mb-3">
        <label for="join_date" class="form-label">Tanggal Masuk</label>
        <input type="date" class="form-control" id="join_date" name="join_date" required>
    </div>
    <button type="submit" name="add" class="btn btn-primary">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Batal</a>
</form>

<?php
include_once("templates/footer.html");
?>
