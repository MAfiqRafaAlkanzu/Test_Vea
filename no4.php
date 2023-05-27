<?php

function countSeats($rowCount, $firstRow) {
    $seatsInRowN = $firstRow;
    $totalSeats = $firstRow;

    for ($i = 2; $i <= $rowCount; $i++) {
        $seatsInRowN *= 2;
        $totalSeats += $seatsInRowN;
    }

    return [$seatsInRowN, $totalSeats];
}

$rowCount = 3;
$firstRow = 4;

[$seatsInRowN, $totalSeats] = countSeats($rowCount, $firstRow);

echo "Jumlah kursi pada barisan ke-$rowCount: " . $seatsInRowN . "<br>";
echo "Total jumlah kursi dalam ruangan: " . $totalSeats;

?>