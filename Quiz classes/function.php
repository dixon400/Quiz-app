<?php
require "question.php";

class Functionality extends Questions
{
    public $index = -1;
    public function array_push_assoc($array, $ind, $quest, $key, $value)
    {
        $array[$ind][$quest][$key] = $value;
        return $array;
    }
    public function createQuestion()
    {

        $i = readline("please enter the question here: ");
        $this->index++;
        array_push($this->questions, $i);
        for ($ind = 0; $ind < 4; $ind++) {
            $ans = readline("please enter the answers options here (a, b, c, d): ");
            $j = readline("please enter the answer here: ");
            $this->answers = Functionality::array_push_assoc($this->answers, $this->index, $i, $ans, $j);
        }
        $correctAns = readline("please enter correct answer here: ");
        array_push($this->correctAnswers, $correctAns);

        
    }

    public function listQuestion()
    {
        return $this->questions;
    }
    
    public function removeQuestion($i)
    {
        $i = readline("please remove question here:: ");
        unset($this->questions[$i]);
        unset($this->answers[$i]);
        return $this->questions;
    }

    public function questions()
    {
        
            foreach ($this->answers as $index => $question) {
                
                foreach ($question as $questions => $answers) {
                    echo ($index+1).")"." ".$questions."\n";
                    foreach($answers as $options => $values){
                        echo $options.") ".$values."\n";
                        
                    }
                    $this->ind++;
                    $ans = readline("Enter the answer here:: ");
                    $this->answerEntered = $ans;
                    $correctAns = $this->correctAnswers[$this->ansIndex];
                    if (strcmp($ans,$correctAns) == 0){
                        $this->score++;
                      
                    }else{
                        echo"The correct answer is : ".$this->correctAnswers[$this->ansIndex]."\n";
                    }
                    $this->result();
                    $this->ansIndex++;
                    

                }
            
            }
        
    }
    

    public function Quit()
    {
        echo "\e[0;31mBye Bye!\e[0m\n";
        echo "\n";
        exit();
    }
}

$ques = new Functionality;
