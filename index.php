<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Early Opening Analysis</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>
        <style>
            body{
                background:#eee;    
            }

table, th, td {
  border: 2px solid black;
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}

button {
  display: inline-block;

}
        </style>
    </head>
    <body>

        <div class="col-lg-8 pb-5">
<h1><image src="IRISE.JPG">
    Early Opening to Traffic Failure Probability Analysis 
  
 
    
</h1>
            

     
                                                   <div class="form-group">           
                        <label>Help: </label>      
                         <p>Open a PDF file with the project <a href="IRISE_PittRigid ME_Final Report_final(final version).pdf" target="_blank">report</a>.</p>
            
            
                      <!-- <a href="https://www.engineering.pitt.edu/uploadedFiles/_Content/Sub_Sites/Consortiums/IRISE/_Library/IRISE_PittRigid%20ME_Final%20Report_final(final%20version).pdf">  Project final report</a>   -->
                                                   </div>
  <script>
var tableHeader =["Single Axle, kip", "Axles/1000 trucks" , "Tandem Axle, kip","Axles/1000 trucks" ,"Trindem Axle, kip" , "Axles/1000 trucks" ];
var itraf = 0;
var sa1 = [];
for (i = 0; i < 12; i++) {
  sa1[i] = 14+i*2;
}
var ta1 = [];
for (i = 0; i < 12; i++) {
  ta1[i] = 20+i*4;
}
var tri1 = [];
for (i = 0; i < 12; i++) {
  tri1[i] = 28+i*6;
} 
var sa2=[];
sa2[1] = 57.07;
sa2[2] = 68.24;
sa2[3] = 41.82;
sa2[4] = 9.69;
sa2[5] = 4.16;
sa2[6] = 3.52;
sa2[7] = 1.78;
sa2[8] = 0.63;
sa2[9] = 0.54;
sa2[10] = 0.19;

var ta2=[];
ta2[1] = 71.16;
ta2[2] = 95.79;
ta2[3] = 109.54;
ta2[4] = 78.19;
ta2[5] = 20.31;
ta2[6] = 3.52;
ta2[7] = 3.03;
ta2[8] = 1.79;
ta2[9] = 1.07;
ta2[10] = 0.57;

var trafData = new Array(20);
naxles =12;
for (i = 0; i < 12; i++) {
  trafData[i]= new Array(6);
}


for (i = 1; i < 12; i++) {
  trafData[i][0] = 14+i*2;
  trafData[i][1] = sa2[i];
  trafData[i][2] = 20+i*4;
  trafData[i][3] = ta2[i];
  trafData[i][4] = 28+i*6;
  trafData[i][5] = 0;
}
console.log(trafData);
 </script>   

   
   

 <form id="input" onchange="change()">   
    <div class="container">
        <div class="row">
            <div class="form-group col-md-6" >
                <div class="row">

                    <div class="form-group col-md-4" >
                        <label for="station">Location</label>  
                        <select name="station" class="form-control"  placeholder="Default size">
                            <option value="33">Minneapolis, MN</option>
                            <option value="36">Birmingham, AL</option>
                            <option value="38">Little Rock, AR</option>
                            <option value="5">Phoenix, AZ</option>
                            <option value="17">Washington, D.C.</option>
                            <option value="2">Los Angeles, CA</option>
                            <option value="8">San Diego, CA</option>
                            <option value="12">San Francisco, CA</option>
                            <option value="16">Denver, CO</option>
                            <option value="10">Jacksonville, FL</option>
                            <option value="30">Miami, FL</option>
                            <option value="28">Atlanta, GA</option>
                            <option value="35">Des Moines, IA</option>
                            <option value="3">Chicago, IL</option>
                            <option value="14">Indianapolis, IN</option>
                            <option value="24">Louisville, KY</option>
                            <option value="34">New Orleans, LA</option>
                            <option value="18">Boston, MA</option>
                            <option value="25">Baltimore, MD</option>
                            <option value="19">Detroit, MI</option>
                            <option value="29">Kansas City, MO</option>
                            <option value="40">Jackson, MS</option>
                            <option value="13">Charlotte, NC</option>
                            <option value="31">Omaha, NE</option>
                            <option value="27">Albuquerque, NM</option>
                            <option value="23">Las Vegas, NV</option>
                            <option value="1">New York, NY</option>
                            <option value="11">Columbus, OH</option>
                            <option value="22">Oklahoma City, OK</option>
                            <option value="21">Portland, OR</option>
                            <option value="6">Philadelphia, PA</option>
                            <option value="39">Sioux Falls, SD</option>
                            <option value="20">Nashville, TN</option>
                            <option value="4">Houston, TX</option>
                            <option value="7">San Antonio, TX</option>
                            <option value="9">Dallas, TX</option>
                            <option value="37">Salt Lake City, UT</option>
                            <option value="32">Virginia Beach, VA</option>
                            <option value="15">Seattle, WA</option>
                            <option value="26">Milwaukee, WI</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4" >
                        <label for="cMonth">Construction Month</label>  
                        <select name="cMonth" class="form-control"  placeholder="Default size">
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September"</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="ndays">Number of days</label>
                        <input type="number" name="ndays" min="1" max="30" step="1" class="form-control" placeholder="0" value="3">    
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="traf">Number of trucks/day</label>
                        <input type="number" name="traf" min="0" max="100000" step="1" class="form-control" placeholder="0" value="10">    
                    </div>
                    <div class="form-group col-md-5">
                        <label for="trafficPattern">Traffic Pattern</label>  
                        <select name="trafficPattern" class="form-control" onchange="mychangeT(event)">
                            <option value="0">Minor Arterial</option>
                            <option value="1">Residential</option>
                            <option value="2">Interstate</option>
                             <option value="3">Custom Traffic</option>
                        </select>            
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="hPCC">PCC Thickness, in </label>
                        <input type="number" name="hPCC" min="5" max="16" step=".1" class="form-control" placeholder="0" value="7">    
                    </div>
                    <div class="form-group col-md-4">
                        <label for="alpPCC">PCC COTE </label>
                        <input type="number" name="alpPCC" min="0.000003" max="0.000008" step="0.0000001" class="form-control" placeholder="0" value="0.000005">    
                    </div>
                    <div class="form-group col-md-4">
                        <label for="jtSpace">Joint Spacing, ft </label>
                        <input type="number" name="jtSpace" min="12" max="20" step="1" class="form-control" placeholder="0" value="15">    
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="hBase">Base Thickness, in </label>
                        <input type="number" name="hBase" min="4" max="16" step=".1" class="form-control" placeholder="0" value="7">    
                    </div>
                    <div class="form-group col-md-4">
                        <label for="elBase">Base modulus, psi </label>
                        <input type="number" name="elBase" min="20000" max="2000000" step="100" class="form-control" placeholder="0" value="40000">    
                    </div>

                    <div class="form-group col-md-4">
                        <label for="sholder">Shoulder</label>  
                        <select name="shoulder" class="form-control" ">
                            <option value="0">Tied PCC</option>
                            <option value="1">AC/No shoulder</option>
                        </select>            
                    </div>    
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="pccMat">PCC Maturity at the time of opening, C-hr </label>
                        <input type="number" name="pccMat" min="500" max="10000" step=".1" class="form-control" placeholder="0" value="650">    
                    </div>
                </div>
                <div class="row">
       <!--           <input type="submit" name="submit" id="submitbutton" value="Submit">    --> 
                   <button class="action_btn" id ="submitbutton" type="button" onclick="Start()">Submit</button> 
                   <button class="action_btn" id ="setbutton" type="button" onclick="Settings()">Settings</button>
                    <button class="action_btn" style ="display:none" id="ok" type="submit" form="set">OK</button>
                </div> 
       
            </div>
            <div class="form-group col-md-6" >
                <div table id="tableTraf" name ="tableTraf"  >
  <!--               <div id="tableTraf" name ="tableTraf" class="table-editable">
                  <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><iclass="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
                     Editable table -->
                    
                </div>
        
                <script> 
                    var dvTable = document.getElementById("tableTraf");
                    dvTable.innerHTML = "";
   
        
                    var table2 = document.createElement("Table");
     //        table2 = '<table class="table table-bordered table-responsive-md table-striped text-center">';
                    table2.setAttribute('class',"pt-3-half");
                    table2.setAttribute('contenteditable',"false");
                    table2.setAttribute('table',"table table-bordered table-responsive-md table-striped text-center");
  
 
                    var row = table2.insertRow(-1);
                        for (var i = 0; i < 6; i++) {
                            var headerCell = document.createElement("TH");
                            headerCell.innerHTML = tableHeader[i];
                            row.appendChild(headerCell);
                        }
                    for (var i = 1; i < 11; i++) {
                        row = table2.insertRow(-1);
                        for (var j = 0; j < 6; j++) {
                            var cell = row.insertCell(-1);
                            cell.innerHTML =   trafData[i][j];
                        }
                    }


                    dvTable.innerHTML = "";
                    dvTable.appendChild(table2);  

                    </script> 
               
            </div>

        </div>
    </div>
</form>    
                <script>
       
              
                
                </script>
                
                
<form id="input2" onchange="change()">
        <div class="col-lg-12w">
                    <!-- Editable table -->
<!-- Editable table -->   
 </form>                       
        </div>
       

       
    
<div style ="display:none" id="defaultsettings">         
                       
<form id="set">
        <div class ="row">
                        <p style="font-size:24px">      Modulus of Rupture - Maturity Model</p>
        </div>
        <div class ="row">
             <div class="form-group col-md-3">
                 <label for="CoefA">A</label>
                 <input id ="CoefA" type="number" name="CoefA"  min="1" max="1000"  step="0.01" class="form-control" placeholder="0" value="175.66">  
             </div>                    
             <div class="form-group col-md-3">
                  <label for="CoefB">B</label>
                  <input id ="CoefB" type="number" name="CoefB" min="0" max="1000" step="0.01" class="form-control" placeholder="0" value="734.03">  
             </div>
             <div class="form-group col-md-6">
                    <p>&nbsp;</p>                                     
                    <p style="font-size:18px"> MR = A &times ln(Maturity) - B</p>
            </div>  
        </div>
                    
        <div class ="row">
             <div   id ="custom1" class="form-group col-md-4">
                    <label for="numSim">Number of simulations</label>        
                    <input id ="numSim" type="numSim" name="numSim"  min="10" max="10000" step="1" class="form-control" placeholder="0" value="100">  
             </div>                   
        </div>                   
                    
        <div class ="row">
             <div   id ="custom2" class="form-group col-md-4">
                    <label for="builtC">Built-in Curling, oF</label>
                    <input id ="builtC" type="number" name="builtC"  min="-20" max="10"  step="0.00001" class="form-control" placeholder="0" value="-10">  
             </div>                   
             <div   id ="custom3" class="form-group col-md-4">
                     <label for="sk">Dynamic k-value, psi/in</label>
                     <input id ="sk" type="number" name="sk"  min="100" max="1000"  step="10" class="form-control" placeholder="0" value="250">  
             </div>                   
        </div>                   
        <div class ="row">
             <div class="form-group col-md-3">
                    <label for="CoefVarH">PCC Thickness Coefficient of Variation </label>
                    <input id ="CoefVarH" type="number" name="CoefVarH"  min="0" max="1.0"  step="0.001" class="form-control" placeholder="0" value="0.03">  
            </div>   
        </div>
        
        <div class ="row">
                     <p style="font-size:18px">      Coefficient of Variation of the Modulus of Rupture Model: COV = A &times Exp( - B &times Maturity) + C</p>
        </div>
 
        <div class ="row">
              <div class="form-group col-sm-3">
                    <label for="CoefVarMRa">A</label>
                    <input id ="CoefVarMRa" type="number" name="CoefVarMRa" min="0" max="0.5" step="0.01" class="form-control" placeholder="0" value="0.25">  
              </div>                    
              <div class="form-group col-sm-3">
                    <label for="CoefVarMRb">B</label>
                    <input id ="CoefVarMRb" type="number" name="CoefVarMRb" min="0.0" max="0.1" step="0.001" class="form-control" placeholder="0" value="0.001">  
              </div>                    
              <div class="form-group col-sm-3">
                    <label for="CoefVarMRc">C</label>
                    <input id ="CoefVarMRc" type="number" name="CoefVarMRc" min="0.01" max="0.5" step="0.001" class="form-control" placeholder="0" value="0.075">  
              </div>                    
              <div class="form-group col-md-6">
                     <p>&nbsp;</p>                                     
                     <p style="font-size:18px"> Coef of Var MR = A &times Exp( - B Maturity) + C</p>
              </div>  
        </div>   
     </form>
 </div>
                    


    <script>
function Start() {
       
       document.getElementById("submitbutton").style.color = "#ff0000";
       event.preventDefault();
 
       var sk = document.getElementById("sk").value;
       var builtC = document.getElementById("builtC").value;
       var numSim = document.getElementById("numSim").value;
       var CoefA = document.getElementById("CoefA").value;
       var CoefB = document.getElementById("CoefB").value;

       var CoefVarH   = document.getElementById("CoefVarH").value;
       var CoefVarMRa = document.getElementById("CoefVarMRa").value;
       var CoefVarMRb = document.getElementById("CoefVarMRb").value;
       var CoefVarMRc = document.getElementById("CoefVarMRc").value;
       
  //     var traf22 = $('#tableTraf').tableToJSON();
 


    var traf22 = [];

    for (var i=1; i<table2.rows.length; i++) { 
        var tableRow = table2.rows[i]; 

        var rowData = []; 
        for (var j=0; j<tableRow.cells.length; j++) { 

  //        alert("text  =" + tableRow.cells[j].innerHTML);
         rowData.push(tableRow.cells[j].innerHTML); 
        } 
        traf22.push(rowData); 
    } 
//      alert("itraf traf0= " + itraf+ " "  +traf22[0][1]);

if (itraf==1){
         traf22[0][1] = 0;
     }
//      alert("traf= " +  traf22[0][1]);
       var traf222 = JSON.stringify(traf22);
          //alert("Step: " + sa22);
      console.log(traf222);
   //    var CC1 = document.getElementById("CC1").value;
       //   alert("CaliPara: "+ CoefVarH);
        
  //     var rnum = Math.floor(Math.random() * 10000);
       
         $.ajax({
                        type: 'POST',
                        url: 'trafCall.php',
  //                      data: $('form').serialize()+ "&builtC" + builtC  +"&numSim" + numSim +"&CoefA" + CoefA + "&CoefB" + CoefB + 
  //                              "&sk" + sk + "&CoefVarH" + CoefVarH +"&CoefVarMRa"+ CoefVarMRa+"&CoefVarMRb"+ CoefVarMRb+"&CoefVarMRc"+ CoefVarMRc
  //                         + "&sa220" +sa22, 
                        data: {"traf222":traf222},
                        dataType: +"json",
                        success: function (data) {}
                    })
   //                 alert("Step: " + sa2);


                    $.ajax({
                        type: 'POST',
                        url: 'crackcall.php',
                        data: $('form').serialize()+ "&builtC" + builtC  +"&numSim" + numSim +"&CoefA" + CoefA + "&CoefB" + CoefB + 
                                "&sk" + sk + "&CoefVarH" + CoefVarH +"&CoefVarMRa"+ CoefVarMRa+"&CoefVarMRb"+ CoefVarMRb+"&CoefVarMRc"+ CoefVarMRc, 
                        dataType: +"json",
                    
                        success: function (data02) {
  //                          alert("CaliPara: " + data02);
                             console.log(data02);
                             var rnd = data02.substring(1, data02.length - 1);
                              rnd2 = parseInt(rnd);
                             console.log(rnd2);
                              var rNumber = JSON.stringify({rNumber:rnd2});
                           $.ajax({
                            type: 'POST',
                            url: 'crackingRes.php',
                            data: rNumber, 
                            dataType: "json",
                           contentType: "applcation/json",
                            success: function (data1) {
                             x.style.display = "block";
       //                     alert("CaliPara: " + data[5] + " PercentCrack: " + data[6] + " PercentCrack: " + data[7] + "CC " + data[8] + "FC" + data[9]);
      //                      alert("CaliPara: " + data1);
                            console.log("CaliPara: " + data1);
//                            console.log(typeof data1);
                            pfaila = data1[0][0];
                       var     strength0 = data1[0][2];
                       document.getElementById("submitbutton").style.color = "#000000";
// console.log(pfaila);
//                            var keys = Object.keys(crackAge);
//                            var output1 = crackAge[crackAge.length - 1];
                            var o01 = document.getElementById("title");
                            o01.innerHTML = "<p style=color:blue;font-size:22px> <br> Results </p>" ;

 //            var hPCC1 = document.getElementById("output_thick");
               var pfail = document.getElementById("output_fail");
                        pfail.innerHTML = "<p style=color:blue;font-size:18px>Probability of faliure:  " + pfaila +"</p>"
                            pfail.style.fontSize = "18px";  


               var pstrength = document.getElementById("output_strength0");
                        pstrength.innerHTML = "<p style=color:blue;font-size:18px>  " + strength0 +"</p>"
                            pstrength.style.fontSize = "18px";  

                            



//var file = new File([""], "stress1.txt");
//console.log('size=' + file.size);
//console.log('type=' + file.type);
//console.log('name=' + file.name);

                                                       
                        }});
                    }});
                    }
                    
 
                    function Settings() {
                        var x = document.getElementById("defaultsettings");
                        x.style.display = "block";
                        document.getElementById("ok").style.display = "inline-block";
                        change();
                    }
                </script>
    
    <script>

            $(function () {
                $('#set').bind('submit', function () {
                    event.preventDefault();
                    var x = document.getElementById("defaultsettings");
                    x.style.display = "none";
                        var x = document.getElementById("ok");
                    x.style.display = "none";
                });
            });
        </script>
    </div>

    <br>
<div id="outputs">
        <script>

            var x = document.getElementById("outputs");
            x.style.display = "none";
            function change()
            {

                x.style.display = "none";
            }
            $('#pcc').hide();
            $('#dowel').hide();
     

        </script>
        <div class="col-lg-12 pb-5">
            <div class="row">
                <p class = "col-md-6"id = "title"></p>
                <p class = "col-md-6"id = "title2"></p>
            </div>    
            <div class="row">
                <p class = "col-md-6"id = "output_fail"></p>
                <p class = "col-md-6"id = "output_strength0"></p>
            </div>

        </div>
 </div>
    
                          <script>
                            function mychangeT(event)
                            {
                            
                          
                                //load( event.currentTarget.value );
                                if (event.currentTarget.value == "0") {
itraf = 0;
trafData[1][0] =16;	trafData[1][1] =57.07;	trafData[1][2] =24;	trafData[1][3] =71.16;	trafData[1][4] =24;	trafData[1][5] =0;
trafData[2][0] =18;	trafData[2][1] =68.24;	trafData[2][2] =28;	trafData[2][3] =95.79;	trafData[2][4] =30;	trafData[2][5] =0;
trafData[3][0] =20;	trafData[3][1] =41.82;	trafData[3][2] =32;	trafData[3][3] =109.54;	trafData[3][4] =36;	trafData[3][5] =0;
trafData[4][0] =22;	trafData[4][1] =9.69;	trafData[4][2] =36;	trafData[4][3] =78.19;	trafData[4][4] =42;	trafData[4][5] =0;
trafData[5][0] =24;	trafData[5][1] =4.16;	trafData[5][2] =40;	trafData[5][3] =20.31;	trafData[5][4] =48;	trafData[5][5] =0;
trafData[6][0] =26;	trafData[6][1] =3.52;	trafData[6][2] =44;	trafData[6][3] =3.52;	trafData[6][4] =54;	trafData[6][5] =0;
trafData[7][0] =28;	trafData[7][1] =1.78;	trafData[7][2] =48;	trafData[7][3] =3.03;	trafData[7][4] =60;	trafData[7][5] =0;
trafData[8][0] =30;	trafData[8][1] =0.63;	trafData[8][2] =52;	trafData[8][3] =1.79;	trafData[8][4] =66;	trafData[8][5] =0;
trafData[9][0] =32;	trafData[9][1] =0.54;	trafData[9][2] =56;	trafData[9][3] =1.07;	trafData[9][4] =72;	trafData[9][5] =0;
trafData[10][0] =34;	trafData[10][1] =0.19;	trafData[10][2] =60;	trafData[10][3] =0.57;	trafData[10][4] =78;	trafData[10][5] =0;
                                } else if(event.currentTarget.value == "1"){
itraf = 1;

trafData[1][0] =4;	trafData[1][1] =1693.31;	trafData[1][2] =0;	trafData[1][3] =0;	trafData[1][4] =0;	trafData[1][5] =0;	
trafData[2][0] =6;	trafData[2][1] =732.8;	trafData[2][2] =4;	trafData[2][3] =31.9;	trafData[2][4] =4;	trafData[2][5] =0;	
trafData[3][0] =8;	trafData[3][1] =483.1;	trafData[3][2] =8;	trafData[3][3] =85.59;	trafData[3][4] =10;	trafData[3][5] =0;	
trafData[4][0] =10;	trafData[4][1] =204.96;	trafData[4][2] =12;	trafData[4][3] =139.3;	trafData[4][4] =16;	trafData[4][5] =0;	
trafData[5][0] =12;	trafData[5][1] =124;	trafData[5][2] =16;	trafData[5][3] =75.02;	trafData[5][4] =22;	trafData[5][5] =0;	
trafData[6][0] =14;	trafData[6][1] =56.11;	trafData[6][2] =20;	trafData[6][3] =57.1;	trafData[6][4] =28;	trafData[6][5] =0;	
trafData[7][0] =16;	trafData[7][1] =38.02;	trafData[7][2] =24;	trafData[7][3] =39.18;	trafData[7][4] =34;	trafData[7][5] =0;	
trafData[8][0] =18;	trafData[8][1] =15.81;	trafData[8][2] =28;	trafData[8][3] =68.48;	trafData[8][4] =40;	trafData[8][5] =0;	
trafData[9][0] =20;	trafData[9][1] =4.23;	trafData[9][2] =32;	trafData[9][3] =69.59;	trafData[9][4] =46;	trafData[9][5] =0;	
trafData[10][0] =22;	trafData[10][1] =0.96;	trafData[10][2] =36;	trafData[10][3] =4.19;	trafData[10][4] =52;	trafData[10][5] =0;	

        
        
        }  else if(event.currentTarget.value == "2"){
itraf = 2;
trafData[1][0] =16;	trafData[1][1] =71.26;	trafData[1][2] =32;	trafData[1][3] =175.77;	trafData[1][4] =48;	trafData[1][5] =2.46;	
trafData[2][0] =18;	trafData[2][1] =69.00;	trafData[2][2] =36;	trafData[2][3] =142.31;	trafData[2][4] =54;	trafData[2][5] =2.31;	
trafData[3][0] =20;	trafData[3][1] =42.82;	trafData[3][2] =40;	trafData[3][3] =74.68;	trafData[3][4] =60;	trafData[3][5] =1.26;	
trafData[4][0] =22;	trafData[4][1] =14.22;	trafData[4][2] =44;	trafData[4][3] =33.04;	trafData[4][4] =66;	trafData[4][5] =0.64;	
trafData[5][0] =24;	trafData[5][1] =7.01;	trafData[5][2] =48;	trafData[5][3] =14.37;	trafData[5][4] =72;	trafData[5][5] =0.46;	
trafData[6][0] =26;	trafData[6][1] =3.61;	trafData[6][2] =52;	trafData[6][3] =6.44;	trafData[6][4] =78;	trafData[6][5] =0.15;	
trafData[7][0] =28;	trafData[7][1] =1.96;	trafData[7][2] =56;	trafData[7][3] =2.95;	trafData[7][4] =84;	trafData[7][5] =0.07;	
trafData[8][0] =30;	trafData[8][1] =0.97;	trafData[8][2] =60;	trafData[8][3] =1.31;	trafData[8][4] =90;	trafData[8][5] =0.04;	
trafData[9][0] =32;	trafData[9][1] =0.73;	trafData[9][2] =64;	trafData[9][3] =0.68;	trafData[9][4] =96;	trafData[9][5] =0.01;	
trafData[10][0] =34;	trafData[10][1] =0.36;	trafData[10][2] =68;	trafData[10][3] =0.62;	trafData[10][4] =102;	trafData[10][5] =0.01;	
      } else{
       itraf =3   
      for (i = 1; i < 12; i++) {
  sa2[i] =0;
  ta2[i] = 0;
}
      for (i = 1; i < 12; i++) {
  trafData[i][0] = 14+i*2;
  trafData[i][1] = sa2[i];
  trafData[i][2] = 20+i*4;
  trafData[i][3] = ta2[i];
  trafData[i][4] = 28+i*6;
  trafData[i][5] = 0;        
      }

}

 
        dvTable = document.getElementById("tableTraf");
        dvTable.innerHTML = "";
   
        
         table2 = document.createElement("Table");
     //        table2 = '<table class="table table-bordered table-responsive-md table-striped text-center">';
       table2.setAttribute('class',"pt-3-half");
       table2.setAttribute('contenteditable',"true");
  
    table2.setAttribute('table',"table table-bordered table-responsive-md table-striped text-center");
       
        var row = table2.insertRow(-1);
                for (var i = 0; i < 6; i++) {
            var headerCell = document.createElement("TH");
            headerCell.innerHTML = tableHeader[i];
            row.appendChild(headerCell);
        }
        for (var i = 1; i < 11; i++) {
            row = table2.insertRow(-1);
            for (var j = 0; j < 6; j++) {
                var cell = row.insertCell(-1);
               cell.innerHTML =  trafData[i][j];
               cell.style.textAlign = "center";

               console.log(trafData[i][j])
            }
        }


        dvTable.innerHTML = "";
        dvTable.appendChild(table2);  
  //      var table2 = document.getElementById("tableTraf1");    
  //            table2 = '<table class="table table-bordered table-responsive-md table-striped text-center">';




      
                            }
                            
</script>

                   
</body>
</html>
                     