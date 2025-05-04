<?php
include_once("conf.php");
include_once("models/Student.class.php");

class StudentController
{
    private $student;

    function __construct()
    {
        $this->student = new Student(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    public function index()
    {
        $this->student->open();
        $this->student->getAll();

        $data = [];
        while ($row = $this->student->getResult()) {
            $data[] = $row;
        }

        $this->student->close();

        include("views/student/StudentIndex.view.php");
    }

    public function add($data = null)
    {
        if ($data && isset($data['name'], $data['nim'], $data['phone'], $data['join_date'])) {
            $this->student->open();
            $this->student->add($data);
            $this->student->close();

            header("Location: index.php");
        } else {
            include("views/student/StudentCreate.view.php");
        }
    }

    public function edit($id, $data = null)
    {
        $this->student->open();

        if ($data && isset($data['name'], $data['nim'], $data['phone'], $data['join_date'])) {
            $this->student->update($id, $data);
            $this->student->close();

            header("Location: index.php");
        } else {
            $this->student->getById($id);
            $student = $this->student->getResult();
            $this->student->close();

            if ($student) {
                include("views/student/StudentEdit.view.php");
            } else {
                echo "<p>Data mahasiswa tidak ditemukan.</p>";
            }
        }
    }

    public function delete($id)
    {
        $this->student->open();
        $this->student->delete($id);
        $this->student->close();

        header("Location: index.php");
    }
}
