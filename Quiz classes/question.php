<?php

class Questions
{
    public $questions = [];
    public $answers = [];
    public $correctAnswers = [];
    public $answerEntered = "";
    public $correctAns = "";
    public $score = 0;
    public $ind = 0;
    public $ansIndex = 0;
    public $player;
    public $playerList = [];
    public $playerScore;
    public $playerScoreList = [];
    public $highScore;

    public function result(){
        
        if ($this->ind === count($this->questions)){
           $i = $this->score;
           $c = count($this->questions);

            $percentage = ($i / $c) * 100;

            echo "$this->player  : ".$percentage."% \n";
            $this->score = 0;
            $this->ind = 0;
            $this->ansIndex = -1;
            $this->playerScore = $percentage;
            $this->playerScoreList();
        }
    
    }
}