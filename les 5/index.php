<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

function str_count($str, $substr) {
    $count = 0;
    $str_len = 0;
    while (isset($str[$str_len])) $str_len++;
    
    $sub_len = 0;
    while (isset($substr[$sub_len])) $sub_len++;

    if ($sub_len == 0) return 0;

    for ($i = 0; $i <= $str_len - $sub_len; $i++) {
        $check = "";
        for ($j = 0; $j < $sub_len; $j++) {
            $check .= $str[$i + $j];
        }
        
        if ($check == $substr) {
            $count++;
        }
    }
    return $count;
}

function no_space(string $str): string {
    $res = "";
    for ($i = 0; isset($str[$i]); $i++) {
        if ($str[$i] != " ") {
            $res .= $str[$i];
        }
    }
    return $res;
}

function max_number(int $num): int {
    $s = (string)$num;
    $arr = [];
    
    for ($i = 0; isset($s[$i]); $i++) {
        $arr[] = $s[$i];
    }

    rsort($arr);
    
    $final = "";
    foreach ($arr as $val) {
        $final .= $val;
    }

    return (int)$final;
}

echo str_count('programming', 'r'); 
echo "<br>";
echo no_space(' My Code '); 
echo "<br>";
echo max_number(5291);

?>