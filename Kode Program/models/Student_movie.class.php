<?php

class StudentMovie extends DB
{
    function getAll()
    {
        $query = "SELECT sm.id, s.name as student_name, m.title as movie_title, sm.watch_date 
                  FROM student_movie sm
                  JOIN students s ON sm.student_id = s.id
                  JOIN movie m ON sm.movie_id = m.id";
        return $this->execute($query);
    }

    function getById($id)
    {
        $query = "SELECT * FROM student_movie WHERE id = $id";
        return $this->execute($query);
    }

    function add($data)
    {
        $student_id = $data['student_id'];
        $movie_id = $data['movie_id'];
        $watch_date = $data['watch_date'];

        $query = "INSERT INTO student_movie (student_id, movie_id, watch_date)
                  VALUES ('$student_id', '$movie_id', '$watch_date')";

        return $this->execute($query);
    }

    function update($id, $data)
    {
        $student_id = $data['student_id'];
        $movie_id = $data['movie_id'];
        $watch_date = $data['watch_date'];

        $query = "UPDATE student_movie SET
                  student_id = '$student_id',
                  movie_id = '$movie_id',
                  watch_date = '$watch_date'
                  WHERE id = $id";

        return $this->execute($query);
    }

    function delete($id)
    {
        $query = "DELETE FROM student_movie WHERE id = $id";
        return $this->execute($query);
    }
}
