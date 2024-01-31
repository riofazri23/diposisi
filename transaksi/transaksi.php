<?php

// Data personil
$personil = [
    ['nama' => 'Personil A', 'waktu_kerja' => 8],
    ['nama' => 'Personil B', 'waktu_kerja' => 6],
    ['nama' => 'Personil C', 'waktu_kerja' => 7],
    // ... tambahkan data personil lainnya sesuai kebutuhan
];

// Fungsi greedy untuk penjadwalan personil
function jadwalPersonil($personil, $totalWaktuKerja)
{
    $jadwal = [];
    
    // Urutkan personil berdasarkan waktu kerja secara descending
    usort($personil, function($a, $b) {
        return $b['waktu_kerja'] - $a['waktu_kerja'];
    });

    foreach ($personil as $orang) {
        // Cek apakah waktu kerja orang tersebut masih cukup
        if ($totalWaktuKerja >= $orang['waktu_kerja']) {
            // Tambahkan orang ke jadwal
            $jadwal[] = $orang['nama'];
            
            // Kurangi total waktu kerja yang tersisa
            $totalWaktuKerja -= $orang['waktu_kerja'];
        }
    }

    return $jadwal;
}

// Total waktu kerja yang perlu dijadwalkan
$totalWaktuKerja = 20;

// Panggil fungsi untuk mendapatkan jadwal personil
$hasilJadwal = jadwalPersonil($personil, $totalWaktuKerja);

// Tampilkan hasil jadwal
echo "Jadwal Personil:\n";
foreach ($hasilJadwal as $orang) {
    echo "- $orang\n";
}
