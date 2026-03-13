<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP Functions</title>
</head>
<body>

<?php

$str = "apple,banana,orange";
$arr = explode(",", $str);

echo "<h3>explode()</h3>";
echo "<pre>"; print_r($arr); echo "</pre>";

echo "<h3>implode() / join()</h3>";
echo implode(" - ", $arr) . "<br>";
echo join(" + ", $arr);

echo "<h3>trim() / ltrim() / rtrim()</h3>";
$space = "   Hello   ";
echo "[" . trim($space) . "]<br>";
echo "[" . ltrim($space) . "]<br>";
echo "[" . rtrim($space) . "]";

echo "<h3>md5() / sha1()</h3>";
echo md5("pass") . "<br>";
echo sha1("pass");

echo "<h3>nl2br()</h3>";
echo nl2br("Line 1\nLine 2");

echo "<h3>str_replace() / str_ireplace()</h3>";
echo str_replace("World", "PHP", "Hello World") . "<br>";
echo str_ireplace("php", "Java", "I like PHP");

echo "<h3>strip_tags()</h3>";
echo strip_tags("<b>Hello</b> <i>World</i>");

echo "<h3>strlen() / mb_strlen()</h3>";
echo strlen("Привет") . "<br>";
echo mb_strlen("Привет");

echo "<h3>mb_strpos()</h3>";
echo mb_strpos("PHP World", "World");

echo "<h3>mb_strtolower() / mb_strtoupper()</h3>";
echo mb_strtolower("HELLO") . "<br>";
echo mb_strtoupper("hello");

echo "<h3>mb_substr()</h3>";
echo mb_substr("Programming", 0, 4);

echo "<h3>htmlspecialchars() / decode / entities</h3>";
echo htmlspecialchars("<b>Hi</b>") . "<br>";
echo htmlspecialchars_decode("&lt;b&gt;Hi&lt;/b&gt;") . "<br>";
echo htmlentities("<b>'Quote'</b>");

?>

</body>
</html>