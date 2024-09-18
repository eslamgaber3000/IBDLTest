<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\BotMan;

class BotManChatController extends Controller
{
    public function invoke()
    {
        $botman = app('botman');
        $botman->hears('{message}', function($botman, $message)  {
                $this->obtainCertificate($botman);
        });
        $botman->listen();
    }
  
    public function obtainCertificate($botman)
    {
        $instance = $this ;
        $botman->ask("Would you like to know about obtaining an IBDL certificate?", function(Answer $answer , $botman ) use($instance) {
            $ans = $answer->getText();
            if($ans == 'Yes' || $ans == 'YES' || $ans == 'yes'){
                $instance->specifyCert($botman);
            }else{
                $this->say("If you have any more questions or need further assistance, feel free to reach out. Good luck with your IBDL journey!");
            }
        });
    }

    public function specifyCert($botman){
        $instance = $this ;
        $botman->ask("Hello! Absolutely, I'd be happy to help you with information about IBDL certificates and exams. To get started, could you let me know which specific certificate you're interested in? <br> <br> 1-IBDL Essential <br> 2-IBDL Professional <br> 3-IBDL Master <br> 4-CIE <br> 5-CE <br> 6-COLP ", function(Answer $answer , $botman) use($instance) {
            $ans = $answer->getText();
            if($ans == 'IBDL Essential' || $ans == 'IBDL Professional' || $ans == 'IBDL Master' || $ans == 'CIE' || $ans == 'CE' || $ans == 'COLP' ){
            $botman->ask("Great choice! To earn the ".$ans." certificate, you'll need to take the corresponding IBDL exam. First, make sure you're familiar with the exam syllabus and study materials, which you can find on our official website or at any authorized IBDL training center. <br> <br> Would you like to know how to register for the exam?" , function(Answer $answer , $botman) use($instance) {
                $ans = $answer->getText();
                if($ans == 'Yes' || $ans == 'YES' || $ans == 'yes'){
                    $instance->examRegister($botman);
                }else{
                    $this->say("If you have any more questions or need further assistance, feel free to reach out. Good luck with your IBDL journey!");  
                }
            });
            }else{
                $this->say('Please specify existing certificate');
                $instance->specifyCert($botman);
            }
            });
    }

    public function examRegister($botman){
        $instance = $this ;
        $botman->ask("You can register for the exam on our website or through one of our authorized testing centers. There's a registration fee, and you'll need to choose a convenient exam date and location. Once registered, you'll receive further details about the exam process. <br> <br> Would you like to know the format of the exam? Is it online or in-person?", function(Answer $answer, $botman ) use($instance) {
            $ans = $answer->getText();
            if($ans == 'Yes' || $ans == 'YES' || $ans == 'yes'){
                $botman->ask("IBDL exams are offered both online and at authorized testing centers. You can choose the format that suits you best. The online exams provide flexibility, allowing you to take the test remotely. If you prefer a testing center, you can find the nearest one on our website. <br> <br>  Would you like to know how long does it take to get the results and the certificate?", function(Answer $answer, $botman ) use($instance) {
                $ans = $answer->getText();
                if($ans == 'Yes' || $ans == 'YES' || $ans == 'yes'){
                    $instance->certificateResultDuration($botman);
                }else{
                    $this->say("If you have any more questions or need further assistance, feel free to reach out. Good luck with your IBDL journey!");  
                }
            });
            }else{
                $this->say("If you have any more questions or need further assistance, feel free to reach out. Good luck with your IBDL journey!");  
            }
        });
    }

    public function certificateResultDuration($botman){
        $instance = $this ;
        $botman->ask("After completing the exam, you'll receive your results shortly. The digital certificate is usually issued within a few days. If you opt for a physical certificate, it may take a bit longer, depending on your location. We aim to process certificates as efficiently as possible. <br> <br> Would you like to know if there is any preparation material available for the exam?", function(Answer $answer, $botman ) use($instance) {
            $ans = $answer->getText();
            if($ans == 'Yes' || $ans == 'YES' || $ans == 'yes'){
                $botman->ask("Absolutely! We provide comprehensive study materials, including textbooks and online resources, to help you prepare for the exam. Additionally, many authorized training centers offer preparatory courses and workshops to support your studies. <br> <br>  Would you like to know what's the cost involved?", function(Answer $answer, $botman ) use($instance) {
                $ans = $answer->getText();
                if($ans == 'Yes' || $ans == 'YES' || $ans == 'yes'){
                    $this->say("There is a registration fee for the exam, and the cost varies depending on the certificate type. You can find detailed information on fees on our website or by contacting an authorized testing center.");
                }else{
                    $this->say("If you have any more questions or need further assistance, feel free to reach out. Good luck with your IBDL journey!");  
                }
            });
            }else{
                $this->say("If you have any more questions or need further assistance, feel free to reach out. Good luck with your IBDL journey!");  
            }
        });
    }
 

}