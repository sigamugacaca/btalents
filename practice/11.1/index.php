<?php
class Gyvunas
{
    public $svoris;
    public $ugis;

    public function __construct($svoris, $ugis)
    {
        $this->svoris=$svoris;
        $this->ugis=$ugis;
    }
}
class Suo extends Gyvunas
{
    public $spalva;
    public $lytis;

    function __construct($svoris, $ugis, $spalva, $lytis){
        parent::__construct($svoris, $ugis);
        $this->spalva=$spalva;
        $this->lytis=$lytis;
    }
    function fullInfo(){
        return $this->svoris.' '.$this->ugis.' '.$this->spalva.' '.$this->lytis.' ';
    }
}
$gyvunas1 = new Suo('150', '5feet', 'brown', 'male');
$gyvunas2 = new Suo('200', '9feet', 'yellow', 'female');
echo $gyvunas1->fullInfo();
echo $gyvunas2->fullInfo();
?>
