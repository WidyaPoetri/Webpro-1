
<?php
$kendaraan = "motor";
$jam = 30;

if ($kendaraan == "motor") {
    $tarif_awal = 3000;
    $tarif_lanjut = 2000;
    $maksimal = 15000;
    $inap = 20000;
} else if ($kendaraan == "mobil") {
    $tarif_awal = 5000;
    $tarif_lanjut = 3000;
    $maksimal = 30000;
    $inap = 50000;
}

if ($jam >= 24) {
    $harga = $inap;
    $jam = $jam - 24;
} else {
    $harga = 0;
}

if ($jam > 0) {
    $tambahan = $tarif_awal + (($jam - 1) * $tarif_lanjut);

    if ($tambahan > $maksimal) {
        $tambahan = $maksimal;
    }

    $harga = $harga + $tambahan;
}

echo "Kendaraan: $kendaraan <br>";
echo "Lama parkir: " . $jam . " jam <br>";
echo "Total biaya: Rp " . number_format($harga, 0, ',', '.');
?>
