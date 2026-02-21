<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        table { 
            border-collapse: collapse; 
            border-top: 10px solid yellow;
            border-left: 10px solid yellow;
        }
        td { 
            width: 30px; 
            height: 30px; 
            border: 1px solid #ddd; 
        }
        .black { background-color: black; }
        .white { background-color: white; }
    </style>
</head>
<body>

<?php
$size = 23; 
$board = [];


for ($row = 0; $row < $size; $row++) {
    for ($col = 0; $col < $size; $col++) {
        $board[$row][$col] = ($row + $col) % 2 == 0 ? 0 : 1;
    }
}


echo "<table>";
foreach ($board as $rowArray) {
    echo "<tr>";
    foreach ($rowArray as $cell) {
        $colorClass = ($cell == 1) ? 'black' : 'white';
        echo "<td class='$colorClass'></td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>