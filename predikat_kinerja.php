<?php
function predikat_kinerja($hasil_kerja, $perilaku){
    $matriks = [
        "dibawah ekspektasi" => [
            "dibawah ekspektasi" => "Sangat Kurang",
            "sesuai ekspektasi" => "Butuh Perbaikan",
            "diatas ekspektasi" => "Butuh Perbaikan",
        ],
        "sesuai ekspektasi" => [
            "dibawah ekspektasi" => "Kurang/misconduct",
            "sesuai ekspektasi" => "Baik",
            "diatas ekspektasi" => "Baik",
        ],
        "diatas ekspektasi" => [
            "dibawah ekspektasi" => "Kurang/misconduct",
            "sesuai ekspektasi" => "Baik",
            "diatas ekspektasi" => "Sangat Baik",
        ],
    ];
    if (isset($matriks[$hasil_kerja][$perilaku])) {
        return $matriks[$hasil_kerja][$perilaku];
    } else {
        return "Input tidak valid.";
    }
}

$hasil_kerja = "diatas ekspektasi";
$perilaku = "diatas ekspektasi";
echo predikat_kinerja($hasil_kerja, $perilaku);
?>