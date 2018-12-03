
<?php
class TimeTravel
{
    public $start;
    public $end;

    public function __construct()
    {
        $this->start = new DateTime();
        $this->end = new DateTime();
    }

    public function getTravelInfo()
    {
        $difference = $this->start->diff($this->end);
        return $difference->format('Il y a %Y années, %m mois, %d jours, %H heures, %i minutes et %s secondes entre les deux dates. <br>');
    }

    /*
     * Trouve la date qui est située 1 milliard de secondes avant $start
     */
    public function findDate(DateInterval $interval)
    {
        $findDate = $this->start->sub($interval);
        return $findDate->format("d/m/Y");
    }

    /*
     *renvoie un tableau de N objets DateTime correctement formatés.
     */
    public function backToFutureStepByStep($step)
    {
        $array = [];
        foreach ($step as $date) {
            $array[] .= $date->format('M d Y A H:i') . '<br/>';
        }
        return $array;

    }
}