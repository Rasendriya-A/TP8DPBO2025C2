<?php
include_once("templates/header.html");

// Pastikan $movie berisi data hasil query dari controller
?>

<h2 class="mb-4">Edit Data Film</h2>

<form action="index.php?page=movie" method="POST">
    <input type="hidden" name="id" value="<?= $movie['id'] ?>">

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?= $movie['title'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="genre" class="form-label">Genre</label>
        <input type="text" class="form-control" id="genre" name="genre" value="<?= $movie['genre'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="year" class="form-label">Year</label>
        <input type="date" class="form-control" id="year" name="year" value="<?= $movie['year'] ?>" required>
    </div>
    <button type="submit" name="edit" class="btn btn-success">Perbarui</button>
    <a href="index.php?page=movie" class="btn btn-secondary">Batal</a>
</form>

<?php
include_once("templates/footer.html");
?>
