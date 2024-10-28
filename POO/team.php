<?php

class Team {
    public $name;
    public $players = [];
    public $matches;
    public $won;
    public $lost;
    public $tie;
    public $scoreGoals;
    public $concededGoals;

    public function __construct($name, $matches = 0, $won = 0, $lost = 0, $tie = 0, $scoreGoals = 0, $concededGoals = 0) {
        $this->name = $name;
        $this->matches = $matches;
        $this->won = $won;
        $this->lost = $lost;
        $this->tie = $tie;
        $this->scoreGoals = $scoreGoals;
        $this->concededGoals = $concededGoals;
    }

    public function signPlayer($player) {
        $this->players[] = $player;
    }

    public function render() {
        echo "Team: $this->name<br>";
        echo "Matches: $this->matches<br>";
        echo "Won: $this->won<br>";
        echo "Lost: $this->lost<br>";
        echo "Tie: $this->tie<br>";
        echo "Score Goals: $this->scoreGoals<br>";
        echo "Conceded Goals: $this->concededGoals<br>";
        echo "Players:<br>";
        echo "<table>";
    echo "<tr><th>Player</th><th>Age</th><th>Country</th><th>Dorsal</th><th>Position</th><th>Goals</th><th>Matches</th><th>Minutes</th><th>Yellow Cards</th><th>Red Cards</th></tr>";
   
        foreach ($this->players as $player) {
            $player->render();
           
        }
        echo "<table>";
    }
}
