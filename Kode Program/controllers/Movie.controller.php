<?php
include_once("conf.php");
include_once("models/Movie.class.php");

class MovieController
{
    private $movie;

    function __construct()
    {
        $this->movie = new Movie(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    public function index()
    {
        $this->movie->open();
        $this->movie->getAll();

        $data = [];
        while ($row = $this->movie->getResult()) {
            $data[] = $row;
        }

        $this->movie->close();

        include("views/movie/MovieIndex.view.php");
    }

    public function add($data = null)
    {
        if ($data && isset($data['title'], $data['genre'], $data['year'])) {
            $this->movie->open();
            $this->movie->add($data);
            $this->movie->close();

            header("Location: index.php");
        } else {
            include("views/movie/MovieCreate.view.php");
        }
    }

    public function edit($id, $data = null)
    {
        $this->movie->open();

        if ($data && isset($data['title'], $data['genre'], $data['year'])) {
            $this->movie->update($id, $data);
            $this->movie->close();

            header("Location: index.php");
        } else {
            $this->movie->getById($id);
            $movie = $this->movie->getResult();
            $this->movie->close();

            if ($movie) {
                include("views/movie/MovieEdit.view.php");
            } else {
                echo "<p>Data film tidak ditemukan.</p>";
            }
        }
    }

    public function delete($id)
    {
        $this->movie->open();
        $this->movie->delete($id);
        $this->movie->close();

        header("Location: index.php");
    }
}
