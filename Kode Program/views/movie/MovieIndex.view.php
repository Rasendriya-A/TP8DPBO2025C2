<?php
include_once("views/Template.class.php");
include_once("templates/header.html");

$tpl = new Template("templates/index.html");

$tpl->replace("TOMBOL_TAMBAH", "<a href='index.php?page=movie&action=add' class='btn btn-primary'>Tambah Movie</a>");

// Siapkan header tabel mmovie
$tableHeader = "<tr>
    <th>ID</th>
    <th>TITLE</th>
    <th>GENRE</th>
    <th>YEAR</th>
    <th>ACTIONS</th>
</tr>";
$tpl->replace("DATA_LABEL", $tableHeader);

// Siapkan tabel movie
$dataList = '';
$no = 1;
foreach ($data as $movie) {
    $dataList .= "<tr>
        <td>{$no}</td>
        <td>{$movie[1]}</td>
        <td>{$movie[2]}</td>
        <td>{$movie[3]}</td>
        <td>
            <a href='index.php?page=movie&edit={$movie[0]}'>Edit</a> |
            <a href='index.php?page=movie&delete={$movie[0]}' onclick='return confirm(\"Hapus data ini?\")'>Hapus</a>
        </td>
    </tr>";
    $no++;
}

// Ganti placeholder {{DATA_TABEL}} dengan data movie
$tpl->replace("DATA_TABEL", $dataList);

$tpl->write();

include_once("templates/footer.html");
?>
