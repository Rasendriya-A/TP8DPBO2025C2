<?php
include_once("conf.php");
include_once("models/Student_movie.class.php");
include_once("models/Student.class.php");
include_once("models/Movie.class.php");

class StudentMovieController
{
    private $studentMovie;
    private $student;
    private $movie;

    function __construct()
    {
        $this->studentMovie = new StudentMovie(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
        $this->student = new Student(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
        $this->movie = new Movie(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    public function index()
    {
        $this->studentMovie->open();
        $this->studentMovie->getAll();

        $data = [];
        while ($row = $this->studentMovie->getResult()) {
            $data[] = $row;
        }

        $this->studentMovie->close();

        include("views/student_movie/StudentMovieIndex.view.php");
    }

    public function add($data = null)
    {
        $this->student->open();
        $this->student->getAll();
        $students = [];
        while ($row = $this->student->getResult()) {
            $students[] = $row;
        }
        $this->student->close();

        $this->movie->open();
        $this->movie->getAll();
        $movies = [];
        while ($row = $this->movie->getResult()) {
            $movies[] = $row;
        }
        $this->movie->close();

        if ($data && isset($data['student_id'], $data['movie_id'], $data['watch_date'])) {
            $this->studentMovie->open();
            $this->studentMovie->add($data);
            $this->studentMovie->close();

            header("Location: index.php?page=student_movie");
            exit;
        } else {
            include("views/student_movie/StudentMovieCreate.view.php");
        }
    }

    public function edit($id, $data = null)
    {
        if ($data && isset($data['student_id'], $data['movie_id'], $data['watch_date'])) {
            $this->studentMovie->open();
            $this->studentMovie->update($id, $data);
            $this->studentMovie->close();

            header("Location: index.php?page=student_movie");
            exit;
        } else {
            $this->studentMovie->open();
            $this->studentMovie->getById($id);
            $student_movie = $this->studentMovie->getResult();
            $this->studentMovie->close();

            if (!$student_movie) {
                echo "<p>Data tidak ditemukan.</p>";
                return;
            }

            $this->student->open();
            $this->student->getAll();
            $students = [];
            while ($row = $this->student->getResult()) {
                $students[] = $row;
            }
            $this->student->close();

            $this->movie->open();
            $this->movie->getAll();
            $movies = [];
            while ($row = $this->movie->getResult()) {
                $movies[] = $row;
            }
            $this->movie->close();

            include("views/student_movie/StudentMovieEdit.view.php");
        }
    }

    public function delete($id)
    {
        $this->studentMovie->open();
        $this->studentMovie->delete($id);
        $this->studentMovie->close();

        header("Location: index.php?page=student_movie");
        exit;
    }
}
