<?php

// jeneng file JSON data Jawa Timur
$jeneng_file = "data_jatim.json";

// maca isi file JSON
$data_json = file_get_contents($jeneng_file);

// yen file ora iso diwaca
if($data_json == false){
    echo "File ora iso diwaca\n";
    exit;
}

// ngubah JSON dadi array PHP
$data_array = json_decode($data_json, true);

// njupuk isi data utama saka key "data"
$daftar_data = $data_array["data"];

// judul tampilan
echo "=== DATA DBHCHT JAWA TIMUR 2025 ===\n\n";

// nomer awal
$nomer = 1;

// looping nampilake isi data
foreach($daftar_data as $baris){

    echo $nomer . ". ";
    echo "Provinsi : " . $baris["nama_provinsi"] . "\n";
    echo "Kategori : " . $baris["kategori"] . "\n";
    echo "Jumlah   : " . $baris["jumlah"] . " " . $baris["satuan"] . "\n";
    echo "Tahun    : " . $baris["tahun"] . "\n\n";

    $nomer++;
}

// pesan akhir
echo "Rampung nampilno data Jawa Timur.\n";

?>