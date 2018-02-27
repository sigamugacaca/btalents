<?php

class Mokinys
{
    public $student;

    public function __construct($student)
    {
        $this->student=$student;
    }
}
class Birthday extends Mokinys
{
    public $gimimoData;

    function __construct($student, $gimimoData)
    {
        parent::__construct($student);
        $this->gimimoData=$gimimoData;
    }
    function studentAge(){
        return $this->student. ' ' .$this->gimimoData.' ';
    }
}
$mokinys1 = new Birthday('Ignas Bernotas', '1993-05-22');
$mokinys2 = new Birthday('Jonas Jonaitis', '2004-01-17');
$mokinys3 = new Birthday('Zigmas Zigmaitis', '2006-09-11');
$mokinys4 = new Birthday('Petras Petraitis', '1986-12-26');
$mokinys5 = new Birthday('Bronius Bronaitis', '1990-04-15');
$mokinys6 = new Birthday('Vilma Vilmaite', '1991-08-02');
echo $mokinys1->studentAge();
echo $mokinys2->studentAge();
echo $mokinys3->studentAge();
echo $mokinys4->studentAge();
echo $mokinys5->studentAge();
echo $mokinys6->studentAge();
echo str_repeat("&nbsp;", 6);
?>
<?php

date_default_timezone_set('Europe/Vilnius');

$birth = new DateTime('1993-05-22');
$today = new DateTime();
$diff = $birth->diff($today);
echo $diff->format('%y');
echo str_repeat("&nbsp;", 6);

$birth = new DateTime('2004-01-17');
$today = new DateTime();
$diff = $birth->diff($today);
echo $diff->format('%y');
echo str_repeat("&nbsp;", 6);

$birth = new DateTime('2006-09-11');
$today = new DateTime();
$diff = $birth->diff($today);
echo $diff->format('%y');
echo str_repeat("&nbsp;", 6);

$birth = new DateTime('1986-09-11');
$today = new DateTime();
$diff = $birth->diff($today);
echo $diff->format('%y');
echo str_repeat("&nbsp;", 6);

$birth = new DateTime('1990-04-15');
$today = new DateTime();
$diff = $birth->diff($today);
echo $diff->format('%y');
echo str_repeat("&nbsp;", 6);

$birth = new DateTime('1991-08-02');
$today = new DateTime();
$diff = $birth->diff($today);
echo $diff->format('%y');
echo str_repeat("&nbsp;", 15);
?>
<?php
echo str_repeat("&nbsp;", 15);
$age=array("Ignas"=>"24","Jonas"=>"14","Zigmas"=>"11","Petras"=>"31","Bronius"=>"27","Vilma"=>"26");
echo "Ignas is " . $age['Ignas'] . " years old";
echo str_repeat("&nbsp;", 6);
echo "Jonas is " . $age['Jonas'] . " years old";
echo str_repeat("&nbsp;", 6);
echo "Petras is " . $age['Petras'] . " years old";
echo str_repeat("&nbsp;", 6);
echo "Zigmas is " . $age['Zigmas'] . " years old";
echo str_repeat("&nbsp;", 6);
echo "Bronius is " . $age['Bronius'] . " years old";
echo str_repeat("&nbsp;", 6);
echo "Vilma is " . $age['Vilma'] . " years old";
?>
<?php
$studentai = array( array("name"=>"Ignas", "age"=>24),
    array("name"=>"Jonas", "age"=>14),
    array("name"=>"Petras", "age"=>11),
    array("name"=>"Zigmas", "age"=>31),
    array("name"=>"Bronius", "age"=>27),
    array("name"=>"Vilma", "age"=>26),
);
?>
<?php if (count($studentai) > 0): ?>
    <table>
        <thead>
        <tr>
            <th><?php echo implode('</th><th>', array_keys(current($studentai))); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($studentai as $row): array_map('htmlentities', $row); ?>
            <tr>
                <td><?php echo implode('</td><td>', $row); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
