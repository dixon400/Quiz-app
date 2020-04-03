<?php

class Quiz{

    public $question = array(
        array(
       0 => "Who is the richest man in Nigeria ?",
       1 => "Your father",
       2 => "Alhaji Dangote",
       3 => "Mrs ALakija ",
       4 => "Professor Rahman",
       5 => "Bola Ahmed Tinubu",
       6 => 2
    ),
        array(
       0 => "The capital of Nigeria is ?",
       1 => "Lagos",
       2 => "Ikeja",
       3 => "Abuja",
       4 => "F.C.T",
       5 => "Kano",
       6 => 4
    ),
        array(
       0 => "The basic unit of life is the?",
       1 => "Cell",
       2 => "Cytoplasm",
       3 => "Atom",
       4 => "cosmic",
       5 => "heart",
       6 => 1
    ),
        array(
       0 => "Which is not related to the immune system?",
       1 => "Mast cells",
       2 => "basophils",
       3 => "blastocyst",
       4 => "erythrocyte",
       5 => "Histamine",
       6 => 3
    ),
        array(
       0 => "Which is not an household item?",
       1 => "Television",
       2 => "Radio",
       3 => "Blender",
       4 => "Utensils",
       5 => "Flamethrower",
       6 => 5
    ),
        array(
       0 => "which ias not a capital?",
       1 => "Accra",
       2 => "Nairobi",
       3 => "Washington",
       4 => "Togo",
       5 => "Paris",
       6 => 4
    ),
        array(
       0 => "Which is not present in an animal cell?",
       1 => "Cell Wall",
       2 => "Cell membrane",
       3 => "Nucleus",
       4 => "E.R",
       5 => "golgi bodies",
       6 => 1
    ),
        array(
       0 => "How many continents do we have?",
       1 => "5",
       2 => "6",
       3 => "7",
       4 => "8",
       5 => "9",
       6 => 3
    ),
        array(
       0 => "which is the first country to land on the moon ?",
       1 => "USA",
       2 => "Germany",
       3 => "Russia",
       4 => "China",
       5 => "England",
       6 => 1
    ),
        array(
       0 => "When did Nigeria become a republic?",
       1 => "1960",
       2 => "1961",
       3 => "1962",
       4 => "1963",
       5 => "1964",
       6 => 4
    ),
    );
    
    public $answers = [];
    public static $score = 0;

    // public function CreateQuiz()
    // {
    //     echo "-------------------------------------------\n";
    //     $key = readline("please enter the question here: ");
    //     $value = readline("please enter the question here: ");
    //     $this->questions += [$key => $value];
    //     print_r($this->questions);
    //     echo "-------------------------------------------\n";
    //     $start = new Menu();
    //     $start->menuFunction();
    // }

    public function startQuestion(array $question, array $answers)
    {
        $this->questions = $question;
        foreach ($question as $askeQuestion) {
            $ask = readline($askQuestion);
            Quiz::$score++;
            
        }

        $this->answers = $answers;
        print_r($question);
        foreach ($answers as $askAnswer) {
            $singleAnswer;
        }
         if ($ask === $askAnswer) {
             echo "\nYour Total Score is " . Quiz::$score ."\n";
         } else {
             echo "\nYour Total Score is " . Quiz::$score . "\n";
         }
    }

    public function listQuestion()
    {
        // return $this->questions;
        print_r($this->questions);
        $startApp = new Menu();
        $startApp->menuFunction();
    }

    public function removeQuestion($position)
    {
        // return $this->$questions;
        unset($this->questions[$position]);
        $startApp = new Menu();
        $startApp->menuFunction();
    }
    public function Quit()
    {
        echo '-----===' . "\n";
        exit("Goodbye" . "\n");
    }
}

$i = new Quiz();



class Menu extends Quiz
{

    public function menuFunction()
    {
        echo "*****      QUIZ APP     ********\n";
        echo "*****                   *******\n";
        echo "Press 1: To start quiz\n";
        echo "Press 2: To list quiz\n";
        echo "Press 3: To delete a quiz\n";
        echo "Press 4: Quit\n";

        $input = readline("Enter input here: ");

        if ($input == 1) {
            $ques = new Quiz();
            $ques->startQuestion([], []);
        } else if ($input == 2) {
            $ques = new Quiz();
            $ques->listQuestion();
        } else if ($input == 3) {
            $ques = new Quiz();
            $ques->removeQuestion($input);
        } else if ($input == 4) {
            $ques = new Quiz();
            $ques->Quit();
        } else {
            echo "Wrong value entered";

            $startApp = new Menu();
            $startApp->menuFunction();
        }
    }
}
$startApp = new Menu();
$startApp->menuFunction();