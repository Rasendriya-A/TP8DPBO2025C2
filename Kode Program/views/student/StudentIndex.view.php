<?php
include_once("views/Template.class.php");
include_once("templates/header.html");

$tpl = new Template("templates/index.html");

$tpl->replace("TOMBOL_TAMBAH", "<a href='index.php?page=student&action=add' class='btn btn-primary'>Tambah Mahasiswa</a>");

// Siapkan header tabel mahasiswa
$tableHeader = "<tr>
    <th>ID</th>
    <th>NAME</th>
    <th>NIM</th>
    <th>PHONE</th>
    <th>JOIN DATE</th>
    <th>ACTIONS</th>
</tr>";
$tpl->replace("DATA_LABEL", $tableHeader);

// Siapkan tabel mahasiswa
$dataList = '';
$no = 1;
foreach ($data as $student) {
    $dataList .= "<tr>
        <td>{$no}</td>
        <td>{$student[1]}</td>
        <td>{$student[2]}</td>
        <td>{$student[3]}</td>
        <td>{$student[4]}</td>
        <td>
            <a href='?id_edit={$student[0]}'>Edit</a> |
            <a href='?id_hapus={$student[0]}' onclick='return confirm(\"Hapus data ini?\")'>Hapus</a>
        </td>
    </tr>";
    $no++;
}

// Ganti placeholder {{DATA_TABEL}} dengan data mahasiswa
$tpl->replace("DATA_TABEL", $dataList);

$tpl->write();

include_once("templates/footer.html");
?>
