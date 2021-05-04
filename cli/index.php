<?php
include 'logic.php';
class Cli 
{
    function __construct($type_soal)
    {
       if ($type_soal == 'logic') {
          $this->logic();
        
         
       }else{
        echo 'please type soal (logic) :';
       }
    }
    public function logic()
    {
        $soal = readline('Masukan No soal 1-5 :');
        new Logic($soal);
    }
}
