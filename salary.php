<?php
require_once('salaryfunction.php');
?>
 
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práce</title>
</head>
<body>
<?php

$employees[0]['salary'] = 10000; 
$employees[0]['type'] = 'student';
$employees[1]['salary'] = 2000; 
$employees[1]['type'] = 'student';
$employees[2]['salary'] = 3000; 
$employees[2]['type'] = 'student';
$employees[3]['salary'] = 4000; 
$employees[3]['type'] = 'korona';
$employees[4]['salary'] = 42069; 
$employees[4]['type'] = 'korona';
$employees[5]['salary'] = 15000; 
$employees[5]['type'] = 'normal';
$employees[6]['salary'] = 17000; 
$employees[6]['type'] = 'normal';
$employees[7]['salary'] = 25000; 
$employees[7]['type'] = 'korona';
$employees[8]['salary'] = 10000; 
$employees[8]['type'] = 'korona';
$employees[9]['salary'] = 45000; 
$employees[9]['type'] = 'korona';

?>

<h1>GAY GAAAAAAAAAAAAAAAANG /* je gay pride tak se nedivte na gay stuff, mcdonalds podporuje gaye takže furt se musí říkat GAY tohle a GAY tam dvojtečka smajlík XD</h1>

<?php 
    for ($i=0; $i < 10; $i++) { ?>
        <p>
         Hrubá mzda: <?= $employees[$i]['salary'] ?>
        </p>
        <p>
        Čistá mzda normal: <?=cleanSalaryComplex($employees[$i]['salary']);?>
        </p>
        <p>
        Čistá mzda student: <?=cleanSalaryComplex($employees[$i]['salary'], 'student');?>
        </p>
        <p>
        Čistá mzda normal během corony: <?=cleanSalaryComplex($employees[$i]['salary'], 'korona');?>
        </p> 
        <br>
        <br>
<?php } ?>

</body>
</html>
