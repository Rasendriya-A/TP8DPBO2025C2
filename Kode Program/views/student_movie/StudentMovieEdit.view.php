<?php
include_once("templates/header.html");
?>

<h2 class="mb-4">Edit Catatan Tontonan</h2>

<form action="index.php?page=student_movie" method="POST">
    <input type="hidden" name="id" value="<?= $student_movie['id'] ?>">

    <div class="mb-3">
        <label for="student_id" class="form-label">Mahasiswa</label>
        <select class="form-control" id="student_id" name="student_id" required>
            <?php foreach ($students as $student): ?>
                <option value="<?= $student['id'] ?>" <?= $student['id'] == $student_movie['student_id'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($student['name'], ENT_QUOTES, 'UTF-8') ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="movie_id" class="form-label">Film</label>
        <select class="form-control" id="movie_id" name="movie_id" required>
            <?php foreach ($movies as $movie): ?>
                <option value="<?= $movie['id'] ?>" <?= $movie['id'] == $student_movie['movie_id'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($movie['title'], ENT_QUOTES, 'UTF-8') ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="watch_date" class="form-label">Tanggal Tonton</label>
        <input type="date" class="form-control" id="watch_date" name="watch_date" value="<?= $student_movie['watch_date'] ?>" required>
    </div>

    <button type="submit" name="edit" class="btn btn-success">Perbarui</button>
    <a href="index.php?page=student_movie" class="btn btn-secondary">Batal</a>
</form>

<?php
include_once("templates/footer.html");
?>
