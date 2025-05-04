<?php
include_once("templates/header.html");

// Pastikan $student berisi data hasil query dari controller
?>

<h2 class="mb-4">Edit Data Mahasiswa</h2>

<form action="index.php" method="POST">
    <input type="hidden" name="id" value="<?= $student['id'] ?>">

    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $student['name'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" id="nim" name="nim" value="<?= $student['nim'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">No HP</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?= $student['phone'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="join_date" class="form-label">Tanggal Masuk</label>
        <input type="date" class="form-control" id="join_date" name="join_date" value="<?= $student['join_date'] ?>" required>
    </div>
    <button type="submit" name="edit" class="btn btn-success">Perbarui</button>
    <a href="index.php" class="btn btn-secondary">Batal</a>
</form>

<?php
include_once("templates/footer.html");
?>
