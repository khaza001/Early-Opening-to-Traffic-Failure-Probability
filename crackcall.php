<?php

$rnd;


genResult();

function genResult() {


    $Climate = $_POST['station'];
    $hPCC = $_POST['hPCC'];
    $alpPCC = $_POST['alpPCC'];
    $porPCC = 0.15;
    $jtSpace = $_POST['jtSpace'];
    $iSh = $_POST['shoulder'];
    $shoulderLTE = 10;
    if ($iSh == 0) {
        $shoulderLTE = 70;
    }
    $builtC = $_POST['builtC'];
    $numSim = $_POST['numSim'];
    $ndays = $_POST['ndays'];

    $traf = $_POST['traf'];
    $hBase = $_POST['hBase'];
    $elBase = $_POST['elBase'];
    $sk = $_POST['sk'];
    $cMonth = $_POST['cMonth'];
    $pccMat = $_POST['pccMat'];
    $CoefA = $_POST['CoefA'];
    $CoefB = $_POST['CoefB'];
    $CoefVarH = $_POST['CoefVarH'];
    $CoefVarMRa = $_POST['CoefVarMRa'];
    $CoefVarMRc = $_POST['CoefVarMRb'];
    $CoefVarMRb = $_POST['CoefVarMRc'];

  //  $sa2 = json_decode($_POST['sa220']);
   // $sa2 =explode(',',$sa20);

     $rNumber = Rand(1, 100000);
    $myInp = "runs\\inp" . $rNumber . ".csv";
    $myfile = fopen($myInp, "w") or die("Unable to open file!");

 //   fwrite($myfile, $Climate. "  ,climate" . PHP_EOL);
    fwrite($myfile, $hPCC . "  ,thickness" . PHP_EOL);
    fwrite($myfile, $traf . "," . $numSim . "," . $ndays . "  ,number of trucks, number of runs, number of days" . PHP_EOL);
    fwrite($myfile, $alpPCC . "  ,COTE" . PHP_EOL);
    fwrite($myfile, $porPCC . "  ,porPCC" . PHP_EOL);
    fwrite($myfile, $jtSpace . "  ,jtSpace" . PHP_EOL);
    fwrite($myfile, $shoulderLTE . "  ,shoulder LTE" . PHP_EOL);
    fwrite($myfile, $builtC . "  ,built-in curling" . PHP_EOL);
    fwrite($myfile, $hBase . "  ,base thickness" . PHP_EOL);
    fwrite($myfile, $elBase . "  ,base elastic modulus, psi" . PHP_EOL);
    fwrite($myfile, $sk . "  ,subgrade modulus, psi/in" . PHP_EOL);
    fwrite($myfile, $CoefVarMRa . "," . $CoefVarMRb . "," . $CoefVarMRc . "  ,MR COV model" . PHP_EOL);
    fwrite($myfile, $CoefVarH . "  ,Hpcc COV " . PHP_EOL);
    fwrite($myfile, $cMonth . "  ,construction month" . PHP_EOL);
    fwrite($myfile, $pccMat . "  ,initial maturity" . PHP_EOL);
    fwrite($myfile, "1" . PHP_EOL);
    fwrite($myfile, $CoefA . ", " . $CoefB . "  ,maturity model coefficients" . PHP_EOL);





    fclose($myfile);

$ttt= $rNumber.  ".csv  runs\\out";
$ttt=$ttt. $rNumber;
$ttt= $ttt.  ".txt  runs\\trafdist.csv  runs\\Temperature_Nation\\station" .  $Climate. ".out runs\\nnFiles";

$ttt = "earlycarck2.exe runs\inp". $ttt  ;
  $myfile = fopen("bbb.bat", "w") or die("Unable to open file!");
   fwrite($myfile, $ttt .  PHP_EOL);
   fwrite($myfile,"exit".  PHP_EOL);
   fclose($myfile);
      

  
//inp.txt eout.txt  trafdist.csv x:\try\station3.out z:\069048\JPCP\Cracking   
//$res = array($design,);//add variables in array
//echo json_encode($res);  
 //   $res = array(strval ($rNumber),$CoefA);
   $res = array($rNumber);
    echo json_encode($res);




//
//  if the analysis option is selected  
//                
}

?>