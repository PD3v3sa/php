<?php

class Player {
    public $name;
    public $birthday;
    public $country;
    public $dorsal;
    public $position;
    public $goals;
    public $matches;
    public $minutes;
    public $yellowCard;
    public $redCard;

    public function __construct($name, $birthday, $country, $dorsal, $position, $goals, $matches, $minutes, $yellowCard, $redCard) {
        $this->name = $name;
        $this->birthday = DateTime::createFromFormat('d/m/Y', $birthday);
        $this->country = $country;
        $this->dorsal = $dorsal;
        $this->position = $position;
        $this->goals = $goals;
        $this->matches = $matches;
        $this->minutes = $minutes;
        $this->yellowCard = $yellowCard;
        $this->redCard = $redCard;
    }

    public function age() {
        $now = new DateTime();
        $interval = $this->birthday->diff($now);
        return $interval->y;
    }

    public function score() {
        $this->goals++;
    }

    public function addCard($color) {
        if ($color == 'yellow') {
            $this->yellowCard++;
        } elseif ($color == 'red') {
            $this->redCard++;
        }
    }

    public function playMinutes($min) {
        $this->minutes += $min;
    }

     public function render() {

        echo "<tr>";
        echo "<td>".$this->name."</td>";
        echo "<td> " . $this->age() . "</td>";
        echo "<td> $this->country</td>";
        echo "<td> $this->dorsal</td>";
        echo "<td> $this->position</td>";
        echo "<td> $this->goals</td>";
        echo "<td> $this->matches</td>";
        echo "<td> $this->minutes</td>";
        echo "<td> $this->yellowCard</td>";
        echo "<td> $this->redCard</td>";
        echo "<tr>";
    }
   
}
