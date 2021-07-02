<?php

$rnd;


genResult();

function genResult() {


   
    $traf222 = $_POST['traf222'];
   
$traf22 = json_decode($traf222, true); 
 $na=count($traf22);
  


    $myInp = "runs\\trafdist.csv";
    $myfile = fopen($myInp, "w") or die("Unable to open file!");

//  fwrite($myfile, $Climate. "  ,climate" . PHP_EOL);
    
    
    fwrite($myfile, $na . "  ,1000" . PHP_EOL);
    for ($i = 0; $i <= $na; $i++) {
    for  ($j = 0; $j <= 4; $j++)    {
         fwrite($myfile, $traf22[$i][$j] . "  ," );
    }
 fwrite($myfile, $traf22[$i][5] . "  ," . PHP_EOL);
}   
    





    fclose($myfile);


//  exec("mkdir  ZUBOL". $rNumber );
//exec("simpleDos inp.txt out.txt");
//inp.txt eout.txt  trafdist.csv x:\try\station3.out z:\069048\JPCP\Cracking   
//$res = array($design,);//add variables in array
//echo json_encode($res);  
    $res = array($na, $na);
    echo json_encode($res);




//
//  if the analysis option is selected  
//                
}

?>