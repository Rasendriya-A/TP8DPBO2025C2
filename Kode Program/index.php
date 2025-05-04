<?php
include_once("views/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Student.controller.php");
include_once("controllers/Movie.controller.php");
include_once("controllers/Student_movie.controller.php"); // Tambahan

// Cek controller yang digunakan
$page = $_GET['page'] ?? 'student';

switch ($page) {
    case 'movie':
        $movie = new MovieController();

        if (isset($_POST['add'])) {
            $movie->add($_POST);
        } else if (isset($_GET['action']) && $_GET['action'] == 'add') {
            $movie->add();
        } else if (isset($_POST['edit'])) {
            $movie->edit($_POST['id'], $_POST);
        } else if (isset($_GET['edit'])) {
            $movie->edit($_GET['edit']);
        } else if (isset($_GET['delete'])) {
            $movie->delete($_GET['delete']);
        } else {
            $movie->index();
        }
        break;

    case 'student_movie': // Tambahan untuk student_movie
        $studentMovie = new StudentMovieController();

        if (isset($_POST['add'])) {
            $studentMovie->add($_POST);
        } else if (isset($_GET['action']) && $_GET['action'] == 'add') {
            $studentMovie->add();
        } else if (isset($_POST['edit'])) {
            $studentMovie->edit($_POST['id'], $_POST);
        } else if (isset($_GET['edit'])) {
            $studentMovie->edit($_GET['edit']);
        } else if (isset($_GET['delete'])) {
            $studentMovie->delete($_GET['delete']);
        } else {
            $studentMovie->index();
        }
        break;

    case 'student':
    default:
        $student = new StudentController();

        if (isset($_POST['add'])) {
            $student->add($_POST);
        } else if (isset($_GET['action']) && $_GET['action'] == 'add') {
            $student->add();
        } else if (isset($_POST['edit'])) {
            $student->edit($_POST['id'], $_POST);
        } else if (isset($_GET['id_edit'])) {
            $student->edit($_GET['id_edit']);
        } else if (isset($_GET['id_hapus'])) {
            $student->delete($_GET['id_hapus']);
        } else {
            $student->index();
        }
        break;
}
