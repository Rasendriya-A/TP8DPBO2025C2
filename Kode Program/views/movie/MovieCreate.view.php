<?php
include_once("templates/header.html");
?>

<h2 class="mb-4">Tambah Movie</h2>

<form action="index.php?page=movie" method="POST">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
        <label for="genre" class="form-label">Genre</label>
        <input type="text" class="form-control" id="genre" name="genre" required>
    </div>
    <div class="mb-3">
        <label for="year" class="form-label">Year</label>
        <input type="date" class="form-control" id="year" name="year" required>
    </div>
    <button type="submit" name="add" class="btn btn-primary">Simpan</button>
    <a href="index.php?page=movie" class="btn btn-secondary">Batal</a>
</form>

<?php
include_once("templates/footer.html");
?>
