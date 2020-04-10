<?php
require "function.php";

function menuFunction()
{   echo "*****                   ********\n";
    echo "*****      QUIZ APP     ********\n";
    echo "*****                   *******\n";
    echo "Press 1: To create quiz\n";
    echo "Press 2: To view all quiz\n";
    echo "Press 3: To delete a quiz\n";
    echo "Press 4: To start a quiz\n";
    echo "Press 5: To list players\n";
    echo "Press 6: To list scores\n";
    echo "Press 7: To view high score\n";
    echo "Press 8: Quit\n";
}
$ques = new Functionality;
while (true) {
    menuFunction();
    $input = readline("Enter input here: ");

    switch ($input) {
        case 1: {
                $ques->createQuestion();
                break;
            }
        case 2: {
                print_r($ques->listQuestion());
                print_r($ques->answers);
                break;
            }
        case 3: {
                $ques->removeQuestion($input);
                break;
            }
        case 4: {
                $ques->questions();
                break;  
            }  


        case 5: {
            echo ($ques->playerList());
            break;
            }

        case 6:{
            print_r($ques->playerScoreList());
            break;
            }

        case 7: {
            echo $ques->highScore();
            break;
            }

        case 8: {
            $ques->Quit();
            break;
            }
        
        default: {
                echo "\n\n\e[0;31mNo / wrong choice is entered. Please provide a valid choice.\e[0m\n\n";
            }
    }
}