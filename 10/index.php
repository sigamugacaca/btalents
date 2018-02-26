<?php
$grade = array('Ignas Bernotas' => 'Trimestro
Vidurkis: 9.4',
    'Jonas Jonaitis' => 'Trimestro
Vidurkis: 8.8',
    'Linas Linaitis' => 'Trimestro
Vidurkis: 8.4',
    'Romas Romaitis' => 'Trimestro
Vidurkis: 7.1');
print "<table>\n";
foreach ($grade as $key => $value) {
    print "<tr><td>$key</td><td>$value</td></tr>\n";
}
print '</table>';
?>
