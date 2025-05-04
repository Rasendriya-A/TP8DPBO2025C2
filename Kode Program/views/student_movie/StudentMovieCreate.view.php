<?php
include_once("templates/header.html");
?>

<h2 class="mb-4">Tambah Catatan Tontonan</h2>

<form action="index.php?page=student_movie" method="POST">
    <div class="mb-3">
        <label for="student_id" class="form-label">Mahasiswa</label>
        <select class="form-control" id="student_id" name="student_id" required>
            <option value="" disabled selected>Pilih Mahasiswa</option>
            <?php foreach ($students as $student): ?>
                <option value="<?= $student['id'] ?>"><?= $student['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="movie_id" class="form-label">Film</label>
        <select class="form-control" id="movie_id" name="movie_id" required>
            <option value="" disabled selected>Pilih Film</option>
            <?php foreach ($movies as $movie): ?>
                <option value="<?= $movie['id'] ?>"><?= $movie['title'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="watch_date" class="form-label">Tanggal Tonton</label>
        <input type="date" class="form-control" id="watch_date" name="watch_date" required>
    </div>
    <button type="submit" name="add" class="btn btn-primary">Simpan</button>
    <a href="index.php?page=student_movie" class="btn btn-secondary">Batal</a>
</form>

<?php
include_once("templates/footer.html");
?>
