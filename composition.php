<?php
class Events{
    private $duration;
    private $prizeStrategy;
// constructor for events children
    public function __construct($duration, PrizeStrategy $prizeStrategy){
        $this->duration = $duration;
        $this->prizeStrategy = $prizeStrategy;
    }
    public function getDuration(){
        return $this->duration;
    }
    /*
     * method type of PrizeStrategy and his children
     */
    public function cost(){
     // will be realize after PrizeStrategy
        return $this->prizeStrategy->cost($this);
    }
    /*
     * method type of PrizeStrategy and his children
     */
    public function chargeType(){
        // will be realize after PrizeStrategy
        return $this->prizeStrategy->chargeType();
    }

}
/*
 * abstract class for managing prize, that depends on children of this class
 */
abstract class PrizeStrategy{
    abstract function cost(Events $events);
    abstract function chargeType();
}


class DaylyPrizeStrategy extends PrizeStrategy{
    public function cost(Events $events){
        return $events->getDuration() * 5;
    }
    public function chargeType(){
return 'per day prize';
    }
}
class FixedPrizeStrategy extends PrizeStrategy{
    public function cost(Events $events){
        return 30;
    }
    public function chargeType(){
return 'fixed price';
    }
}
class WorkEvent extends Events{}
class HomeEvent extends Events{}
/*
 * create two objects and put them into array
 */
$events[] = new WorkEvent(3, new DayLyPrizeStrategy());
$events[] = new HomeEvent(3, new FixedPrizeStrategy());
foreach($events as $event){
    echo $event->cost() . "$ during ".$event->getDuration() ." days" . ' with charge type: ' .$event->chargeType() . "<br>";
//    echo "<hr>";
//    print_r($event);
}