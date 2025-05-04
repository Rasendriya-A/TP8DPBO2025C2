<?php

class Movie extends DB
{
    function getAll()
    {
        $query = "SELECT * FROM movie";
        return $this->execute($query);
    }

    function getById($id)
    {
        $query = "SELECT * FROM movie WHERE id = $id";
        return $this->execute($query);
    }

    function add($data)
    {
        $title = $data['title'];
        $genre = $data['genre'];
        $year = $data['year'];

        $query = "INSERT INTO movie (title, genre, year)
                  VALUES ('$title', '$genre', '$year')";

        return $this->execute($query);
    }

    function update($id, $data)
    {
        $title = $data['title'];
        $genre = $data['genre'];
        $year = $data['year'];

        $query = "UPDATE movie SET
                  title = '$title',
                  genre = '$genre',
                  year = '$year'
                  WHERE id = $id";

        return $this->execute($query);
    }

    function delete($id)
    {
        $query = "DELETE FROM movie WHERE id = $id";
        return $this->execute($query);
    }
}
