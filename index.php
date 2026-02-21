<?php

define("STUDENT1_NAME", "Guldana");
define("STUDENT1_AGE", 19);
define("STUDENT1_CITY", "BISHKEK");
define("STUDENT1_INSTITUT", "INIT");

define("STUDENT2_NAME", "Aitegin");
define("STUDENT2_AGE", 19);
define("STUDENT2_CITY", "BISHKEK");
define("STUDENT2_INSTITUT", "INIT");

define("STUDENT3_NAME", "Temirlan");
define("STUDENT3_AGE", 20);
define("STUDENT3_CITY", "BISHKEK");
define("STUDENT3_INSTITUT", "INIT");

define("STUDENT4_NAME", "Aidana");
define("STUDENT4_AGE", 19);
define("STUDENT4_CITY", "BISHKEK");
define("STUDENT4_INSTITUT", "INIT");

define("STUDENT5_NAME", "Aizada");
define("STUDENT5_AGE", 19);
define("STUDENT5_CITY", "BISHKEK");
define("STUDENT5_INSTITUT", "INIT");

define("STUDENT6_NAME", "Rafael");
define("STUDENT6_AGE", 20);
define("STUDENT6_CITY", "BISHKEK");
define("STUDENT6_INSTITUT", "INIT");

define("STUDENT7_NAME", "Malika");
define("STUDENT7_AGE", 19);
define("STUDENT7_CITY", "BISHKEK");
define("STUDENT7_INSTITUT", "INIT");

define("STUDENT8_NAME", "Sheker");
define("STUDENT8_AGE", 19);
define("STUDENT8_CITY", "BISHKEK");
define("STUDENT8_INSTITUT", "INIT");

define("STUDENT9_NAME", "Alia");
define("STUDENT9_AGE", 19);
define("STUDENT9_CITY", "BISHKEK");
define("STUDENT9_INSTITUT", "INIT");

define("STUDENT10_NAME", "Farhat");
define("STUDENT10_AGE", 19);
define("STUDENT10_CITY", "BISHKEK");
define("STUDENT10_INSTITUT", "INIT");
define("STUDENT11_NAME", "Sanira");
define("STUDENT11_AGE", 19);
define("STUDENT11_CITY", "BISHKEK");
define("STUDENT11_INSTITUT", "INIT");

define("STUDENT12_NAME", "Elmir");
define("STUDENT12_AGE", 19);
define("STUDENT12_CITY", "BISHKEK");
define("STUDENT12_INSTITUT", "INIT");

define("STUDENT13_NAME", "Elina");
define("STUDENT13_AGE", 19);
define("STUDENT13_CITY", "BISHKEK");
define("STUDENT13_INSTITUT", "INIT");

define("STUDENT14_NAME", "Kanimet");
define("STUDENT14_AGE", 19);
define("STUDENT14_CITY", "BISHKEK");
define("STUDENT14_INSTITUT", "INIT");

define("STUDENT15_NAME", "Aidana");
define("STUDENT15_AGE", 19);
define("STUDENT15_CITY", "BISHKEK");
define("STUDENT15_INSTITUT", "INIT");

define("STUDENT16_NAME", "Shirin");
define("STUDENT16_AGE", 19);
define("STUDENT16_CITY", "BISHKEK");
define("STUDENT16_INSTITUT", "INIT");

define("STUDENT17_NAME", "Nurbol");
define("STUDENT17_AGE", 19);
define("STUDENT17_CITY", "BISHKEK");
define("STUDENT17_INSTITUT", "INIT");

define("STUDENT18_NAME", "Nazgul");
define("STUDENT18_AGE", 20);
define("STUDENT18_CITY", "BISHKEK");
define("STUDENT18_INSTITUT", "INIT");

define("STUDENT19_NAME", "Jibek");
define("STUDENT19_AGE", 19);
define("STUDENT19_CITY", "BISHKEK");
define("STUDENT19_INSTITUT", "INIT");

define("STUDENT20_NAME", "Emir");
define("STUDENT20_AGE", 19);
define("STUDENT20_CITY", "BISHKEK");
define("STUDENT20_INSTITUT", "INIT");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица студентов</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px auto; }
        th, td { border: 1px solid black; padding: 10px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

<table>
    <tr>
        <th>Имя</th>
        <th>Возраст</th>
        <th>Город</th>
        <th>Институт</th>
    </tr>

    <tr>
        <td><?php echo STUDENT1_NAME; ?></td>
        <td><?php echo STUDENT1_AGE; ?></td>
        <td><?php echo STUDENT1_CITY; ?></td>
        <td><?php echo STUDENT1_INSTITUT; ?></td>
    </tr>

    <tr>
        <td><?php echo STUDENT2_NAME; ?></td>
        <td><?php echo STUDENT2_AGE; ?></td>
        <td><?php echo STUDENT2_CITY; ?></td>
        <td><?php echo STUDENT2_INSTITUT; ?></td>
    </tr>

    <tr>
        <td><?php echo STUDENT3_NAME; ?></td>
        <td><?php echo STUDENT3_AGE; ?></td>
        <td><?php echo STUDENT3_CITY; ?></td>
        <td><?php echo STUDENT3_INSTITUT; ?></td>
    </tr>


    <tr>
        <td><?php echo STUDENT20_NAME; ?></td>
        <td><?php echo STUDENT20_AGE; ?></td>
        <td><?php echo STUDENT20_CITY; ?></td>
        <td><?php echo STUDENT20_INSTITUT; ?></td>
    </tr>

</table>

</body>
</html>