<?php
include_once("views/Template.class.php");
include_once("templates/header.html");

$tpl = new Template("templates/index.html");

$tpl->replace("TOMBOL_TAMBAH", "<a href='index.php?page=student_movie&action=add' class='btn btn-primary'>Tambah Data Tontonan</a>");

// Siapkan header tabel student_movie
$tableHeader = "<tr>
    <th>No</th>
    <th>Nama Mahasiswa</th>
    <th>Judul Film</th>
    <th>Tanggal Menonton</th>
    <th>Aksi</th>
</tr>";
$tpl->replace("DATA_LABEL", $tableHeader);

// Siapkan isi tabel
$dataList = '';
$no = 1;
foreach ($data as $entry) {
    // Misal: $entry = [id, student_name, movie_title, watch_date]
    $dataList .= "<tr>
        <td>{$no}</td>
        <td>{$entry[1]}</td>
        <td>{$entry[2]}</td>
        <td>{$entry[3]}</td>
        <td>
            <a href=\"index.php?page=student_movie&edit={$entry[0]}\">Edit</a>
            <a href=\"index.php?page=student_movie&delete={$entry[0]}\" onclick=\"return confirm('Hapus data ini?')\">Hapus</a>
        </td>
    </tr>";

    $no++;
}

$tpl->replace("DATA_TABEL", $dataList);

$tpl->write();

include_once("templates/footer.html");
?>
