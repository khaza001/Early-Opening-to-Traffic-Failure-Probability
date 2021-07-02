    <?php
    genResult();
    function genResult() {

    // message before starting the program    
    $myfilebat = fopen("bbb.bat", "r") or die("Unable to open file!");
      $res0 = fread($myfilebat,filesize("bbb.bat"));
        fclose($myfilebat);
 //  $rNumber = json_decode($body,TRUE)['rNumber'];
 
 $res02 = explode(' ',$res0);

//echo '<script>console.log($rNumber)</script>';   
    exec("bbb.bat");
    $outfile = $res02[3];
    $myfileres = fopen($outfile, "r") or die("Unable to open file!");
    $res22 = fread($myfileres,filesize($outfile));
      fclose($myfileres);
     $res32 = explode(',',$res22);
 
   
     
            
//    $results = array($traf0, $crackResults[0], $crackResults[1],$truckCum,$esalCum,$CaliPara,$PercentCrack,$faultResults[0], $faultResults[1]);
//    $results = array($traf0, $crackResults[0], $crackResults[1],$truckCum,$esalCum,$CaliPara,$PercentCrack,$faultResults[0], $faultResults[1],$CC,$FC);
//$results = array($res2[$iLife+1],$res2[$iLife+101],$res2[$iLife+201],$res2[$iLife+301]);    
$results = array($res32);
    echo json_encode($results ); 
    }
        function selectID($choice, $array) {

        $iChoice = 0;
        $arrayLength = count($array);
        for ($i = 0; $i < $arrayLength; $i++) {
            if ($array[$i] == $choice) {
                $iChoice = $i;
            } else {
                
            }
        }
        return $iChoice;
    }

    

    ?>