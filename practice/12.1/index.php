<?php
namespace btalents\practice\lecture12;

class Radar
{

    public $date;
    public $number;

    /**
     * Radar constructor.
     * @param $date
     * @param $number
     */
    public function __construct($date, $number)
    {
    $this->date=$date;
    $this->number=$number;
    }
}
class Masina extends Radar
{

    public $distance;
    public $time;

    /**
     * Masina constructor.
     * @param $date
     * @param $number
     * @param $distance
     * @param $time
     */
    function __construct($date, $number, $distance, $time)
    {
        parent::__construct($date, $number);
        $this->distance=$distance;
        $this->time=$time;
    }
    function carinfo(){
        return $this->date.' '.$this->number.' '.$this->distance.' '.$this->time.' ';
    }
}
$radar1 = new Masina('2001-09-11 14:35', 'ABC123', '200,000 meters', '59000 seconds');
echo $radar1->carinfo();
?>

