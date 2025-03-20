<?php 
session_start();
$_SESSION['application']="Aufenthaltstitel";
?>
<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="app.css" />
    <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<!--- --->
<script src="./Country+State+District-City-Data.js"></script>
<!---->
<script>
  function validateForm() {
    var selectedCountry = document.getElementById("countySel").value;

// Update the value of the hidden input field
document.getElementById("selected_country").value = selectedCountry;
// Assuming you have JavaScript code to populate the state dropdown dynamically
// Retrieve the selected state name
var selectedState = document.getElementById("stateSel").value;

// Update the value of the hidden input field for selected state
document.getElementById("selected_state").value = selectedState;

// Assuming you have JavaScript code to populate the district dropdown dynamically
// Retrieve the selected district name
var selectedDistrict = document.getElementById("districtSel").value;

// Update the value of the hidden input field for selected district
document.getElementById("selected_district").value = selectedDistrict;

      var  fName= document.getElementById('fName').value;
      var  lName= document.getElementById('lName').value;
      var  email= document.getElementById('DOB').value;
      var  email= document.getElementById('bName').value;
      var  email= document.getElementById('BOB').value;
      var  email= document.getElementById('Nationality').value;
      var  email= document.getElementById('ecolor').value;
      var  email= document.getElementById('bsize').value;
      var  email= document.getElementById('gender').value;
      var  email= document.getElementById('Address').value;
      var  email= document.getElementById('lifeState').value;
      var  email= document.getElementById('DOE').value;
      var  email= document.getElementById('EhegattefName').value;
      var  maritalState= document.getElementById('EhegattelName').value;
      var  workState= document.getElementById('EhegatteDOB').value;
      var  lifeState= document.getElementById('EhegatteBName').value;
      var  regionCountry= document.getElementById('EhegatteBOB').value;
      var  phone= document.getElementById('phone').value;
      var  countySel= document.getElementById('countySel').value;
      var  stateSel= document.getElementById('stateSel').value;
      var  districtSel= document.getElementById('districtSel').value;
      var  zipCode= document.getElementById('zipCode').value;

      if (fName === '' || lName === '' || email === '' || maritalState === '' || workState === '' || lifeState === ''|| regionCountry === '' || phone === '' || countySel === '' || stateSel === '' || districtSel === '' || zipCode === '') {
          alert('All fields must be filled out');
          return false;
      }

      return true;
  }
</script>
</head>
  <body>
    <section class="container">
      <header>Aufenthaltstitel_schutz Form</header>
      <form method="post" action="generate.php" class="form" onsubmit="return validateForm()">
        <div class="column">
        <div class="input-box">
          <label>Name</label>
          <input type="text" placeholder="Enter name" name="fName" id="fName" required />
        </div>

        <div class="input-box">
            <label>VorName</label>
            <input type="text" placeholder="Enter VorName" name="lName" id="lName" required />
          </div>
        </div>

        <div class="column">
        <div class="input-box">
                <label>Birth Date</label>
                <input type="date" name="DOB" id="DOB" placeholder="Enter birth date" required />
              </div>

          <div class="input-box">
            <label>Birth name</label>
            <input type="text" placeholder="Enter Birth name" name="bName" id="bName" required />  
        </div>
            </div>

            <div class="column">
                <div class="input-box">
                        <label>Place Of Birth</label>
                        <input type="text" name="POB" id="POB" placeholder="Enter Place Of Birth" required />
                      </div>
        
                  <div class="input-box">
                    <label>Nationality</label>
                    <input type="text" placeholder="Enter Nationality" name="Nationality" id="Nationality" required />  
                </div>
                    </div>
                    <div class="column">
                        <div class="column">
                            <div class="input-box">
                                    <label>eye color</label>
                                    <input type="text" name="ecolor" id="ecolor" placeholder="eye color" required />
                                  </div>
                              <div class="input-box">
                                <label>body size</label>
                                <input type="text" placeholder="Enter body size" name="bsize" id="bsize" required />  
                            </div>
                                </div>
                                 <div class="gender-box">
                                    <h3>Gender</h3>
                                    <div class="gender-option">
                                      <div class="gender">
                                        <input type="radio" id="check-male" name="gender" value="male" checked />
                                        <label for="check-male">male</label>
                                      </div>
                                      <div class="gender">
                                        <input type="radio" id="check-female" name="gender" value="female"/>
                                        <label for="check-female">Female</label>
                                      </div>
                                      <div class="gender">
                                        <input type="radio" id="check-other" name="gender" value="else"/>
                                        <label for="check-other">prefer not to say</label>
                                      </div>
                                    </div>
                                  </div>
                            </div>

                            <div class="column">
                                   <div class="input-box">
                                    <label>Address </label>
                                    <input type="text" placeholder="street, house number, zip code, place of residence" name="Address" id="Address" required />  
                                </div>
                                    </div>
                            
            <div class="column">
                <div class="input-box">
                    <label>life state</label>
                    <div class="select-box" >
                        <select name="lifeState" id="lifeState">
                          <option value="" hidden>life state</option>
                          <option value="verheiratet">verheiratet</option>
                          <option value="geschieden">geschieden</option>
                          <option value="ledig">ledig</option>
                          <option value="sonstiges">sonstiges</option>
                        </select>
                      </div> 
                    </div>
          <div class="input-box">
            <label>Ersteinreise</label>
            <div class="select-box">
                <select name="Ersteinreise" id="Ersteinreise">
                  <option value="" hidden>Ersteinreise</option>
                  <option value="ohne">ohne Visa</option>
                  <option value="schengener">mit schengener visum(type C)</option>
                  <option value="nationalem">mit nationalem visum(type D)</option>
                  <option value="gultigen">mit einem gultigen aufenthaltstitel eines anderen EU-Mitgliedstaates</option>
 
                </select>
              </div>           </div>

          
        </div>

        <div class="column">
          <div class="input-box">
            <label>Datum der ersteinreise in die bundereisepublik Deutchland</label>
            </div>
             <div class="input-box">
                <input type="date" name="DOE" id="DOE"  required />
              </div>  
          </div>
        </div>
        <br>
        <label>2-Ehegatte / eingetragener Lebenspartner nach LPartG</label>
        <hr style="height: 3px; border-width: 0; color: black; background-color: black;">

        <div class="column">
            <div class="input-box">
              <label>Name</label>
              <input type="text" placeholder="Enter name" name="EhegattefName" id="EhegattefName" required />
            </div>
    
            <div class="input-box">
                <label>VorName</label>
                <input type="text" placeholder="Enter VorName" name="EhegattelName" id="EhegattelName" required />
              </div>
            </div>
    
            <div class="column">
            <div class="input-box">
                    <label>Birth Date</label>
                    <input type="date" name="EhegatteDOB" id="EhegatteDOB" placeholder="Enter birth date" required />
                  </div>
    
              <div class="input-box">
                <label>Birth name</label>
                <input type="text" placeholder="Enter Birth name" name="EhegatteBName" id="EhegatteBName" required />  
            </div>
                </div>
                <div class="column">
                    <div class="input-box">
                            <label>Place Of Birth</label>
                            <input type="text" name="EhegattePOB" id="EhegattePOB" placeholder="Enter Place Of Birth" required />
                          </div>
            
                      <div class="input-box">
                        <label>Nationality</label>
                        <input type="text" placeholder="Enter Nationality" name="EhegatteNationality" id="EhegatteNationality" required />  
                    </div>
                        </div>
                            <div class="column">
                                <div class="input-box">
                                        <label>eye color</label>
                                        <input type="text" name="eye_color" id="eye_color" placeholder="Enter eye color" required />
                                      </div>
                        
                                  <div class="input-box">
                                    <label>body size</label>
                                    <input type="text" placeholder="Enter body size" name="BS" id="BS" required />  
                                </div>
                                    </div>

                                <div class="column">
                                    <div class="input-box">
                                            <label>Address (street, house number, zip code, place of residence)</label>
                                          </div>
                            
                                      <div class="input-box">
                                        <input type="text" placeholder="Enter Address" name="EhegatteAddress" id="EhegatteAddress" required />  
                                    </div>
                         </div>
       <div class="column">
        <div class="input-box">
            <label>residential status</label>
            <div class="select-box">
                <select name="residential" id="residential">
                  <option value="" hidden>residential status</option>
                  <option value="aufenthaltserlaubnis">aufenthaltserlaubnis</option>
                  <option value="niederlassungserlaubnis">niederlassungserlaubnis/daueraufenthalt eu</option>
                  <option value="aufenthaltskarte">aufenthaltskarte/dauerhaftskarte</option>
                  <option value="laufenendes">laufenendes asylverfahren</option>
                  <option value="duldung">duldung</option>
                </select>
              </div>
          </div>
                    
        </div>
        <br>
        <div class="column">
            <br><br>
            <div class="input-box">
        <label>3. Beabsichtigte Aufenthaltsdauer im Bundesgebiet</label>
        <hr style="height: 3px; border-width: 0; color: black; background-color: black;">
    </div>
    <div class="input-box">
        <input type="text" placeholder="" name="Beabsichtigte" id="Beabsichtigte" required />  
    </div>
    </div>
    <br>
    <label>5. Straffreiheit / Rechtsverstöße</label>
    <hr style="height: 3px; border-width: 0; color: black; background-color: black;">
    <label>Have you been convicted of violating the law?</label>
    
            <div class="gender-option">
               <div class="">
               <input type="radio" id="check-violating" name="violating" value="ja" checked />
                <label for="check-ja">ja</label>
                </div>
                <div class="">
                <input type="radio" id="check-notviolating" name="violating" value="nein"/>
                 <label for="check-nein">nein</label>
                 </div>
                 <div class="">
                 <input type="radio" id="check-Federal" name="Federal" value="Federal"/>
                 <label for="check-Federal">in the Federal Republic of Germany</label>
              </div>
              <div class="">
                 <input type="radio" id="check-abroad" name="Federal" value="abroad"/>
                 <label for="check-abroad">abroad</label>
              </div>
           </div>
           <div class="column">
            <div class="input-box">
              <label>Reason</label>
              <input type="text" placeholder="Enter the Reason" name="Reason" id="EhegattefName" required />
            </div>
    
            <div class="input-box">
                <label>Type and amount of the penalty</label>
                <input type="text" placeholder="Enter penalty amount" name="penaltyAmount" id="EhegattelName" required />
              </div>
            </div>

<br>
            <label>Are you currently under investigation on suspicion of a crime?</label>
    
            <div class="gender-option">
               <div class="">
               <input type="radio" id="check-investigation" name="investigation" value="ja" checked />
                <label for="check-male">ja</label>
                </div>
                <div class="">
                <input type="radio" id="check-noinvestigation" name="investigation" value="nein"/>
                 <label for="check-female">nein</label>
                 </div>
                 <div class="">
                 <input type="radio" id="check-Federal" name="FederalReb" value="Republic"/>
                 <label for="check-other">in the Federal Republic of Germany</label>
              </div>
              <div class="">
                 <input type="radio" id="check-abroad" name="FederalReb" value="abroad"/>
                 <label for="check-other">abroad</label>
              </div>
           </div>
           <div class="column">
            <div class="input-box">
              <label>Reason</label>
              <input type="text" placeholder="Enter the Reason" name="investigationReason" id="EhegattefName" required />
            </div>
    
            <div class="input-box">
                <label>Investigating authority</label>
                <input type="text" placeholder="Enter Investigating authority" name="authority" id="EhegattelName" required />
              </div>
            </div>


<br>
            <label>6. Securing livelihoods</label>
    <hr style="height: 3px; border-width: 0; color: black; background-color: black;">
          <label>Aus welchen Mitteln sichern Sie Ihren Lebensunterhalt?</label>
          <br>
          <textarea id="comments" name="livelihoods" rows="4" cols="50" style="width:100%;"></textarea>

<div class="input-box">
            <label>I receive public benefits in accordance with</label>
            <div class="select-box">
                <select name="publicbenefits" id="publicbenefits">
                  <option value="" hidden>publicbenefits</option>
                  <option value="SGBII">SGB II</option>
                  <option value="SGB">SGB</option>
                  <option value="AsylbLG">AsylbLG</option>
                  <option value="Wohngeld">Wohngeld</option>
                  <option value="KEINE">KEINE</option>
                </select>
              </div>
          </div>

          <div class="column">
          <div class="input-box">
            <label>I am in school / vocational training</label>
            <div class="select-box">
                <select name="school" id="school">
                  <option value="" hidden>publicbenefits</option>
                  <option value="Grundschule">Grundschule</option>
                  <option value="Oberschule">Oberschule / Gymnasium</option>
                  <option value="Ausbildung">berufliche Ausbildung</option>
                </select>
              </div>
              </div>
              <div class="input-box">
              <label>als / zum </label>
              <input type="text" placeholder="Enter Investigating authority" name="alsauthority" id="EhegattelName" required />
              </div>
          </div>
          <br>
          <label>7. Knowledge of the German language</label>
         <hr style="height: 3px; border-width: 0; color: black; background-color: black;">
    


         <div class="column">
          <div class="input-box">
            <label>Welches Sprachkursniveau erfüllen Sie?</label>
            <div class="select-box">
                <select name="Sprachkursniveau" id="Sprachkursniveau">
                  <option value="" hidden>Sprachkursniveau</option>
                  <option value="A1">A1</option>
                  <option value="A2">A2</option>
                  <option value="B1">B1</option>
                  <option value="B2">B2</option>
                  <option value="C1">C1</option>
                  <option value="C2">C2</option>
                </select>
              </div>
              </div>
              <div class="input-box">
              <label>Art des Schulabschlusses </label>
              <input type="text" name="Schulabschlusses" id="Schulabschlusses" required />
              </div>
          </div>

          <div class="column">
              <div class="input-box">
              <label>Art des Studienabschlusses</label>
              <input type="text" name="Studienabschlusses" id="Studienabschlusses" required />
              </div>
          </div>

            <div class="gender-option">
              <label>Haben Sie den Inte rationskurs erfol reich ab eschlossen?</label>
               <div class="">
               <input type="radio" id="check-rationskurs" name="rationskurs" value="ja" checked />
                <label for="check-male">ja</label>
                </div>
                <div class="">
                <input type="radio" id="check-notrationskurs" name="rationskurs" value="nein"/>
                 <label for="check-female">nein</label>
                 </div>
              </div>

         <label>8. Leiden Sie an Krenkheiten?</label>
         <hr style="height: 3px; border-width: 0; color: black; background-color: black;">
         <div class="column">
         <div class="gender-option">
              <label>Haben Sie den Inte rationskurs erfol reich ab eschlossen?</label>
               <div class="">
               <input type="radio" id="check-rationskurs" name="rationskurserfol" value="ja" checked />
                <label for="check-male">ja</label>
                </div>
                <div class="">
                <input type="radio" id="check-notrationskurs" name="rationskurserfol" value="nein"/>
                 <label for="check-female">nein</label>
                 </div>
              </div>
              <div class="input-box">
                <label>Name of the disease</label>
              <textarea id="disease" name="diseasecmnt" rows="3" cols="50" ></textarea>
              </div>
              </div>
              <div class="column">
              <div class="input-box">
              <label>Signature</label>
              <input type="text" placeholder="Digital signature(will be used to sign volmacht)" name="signature" id="signature" required />
              </div>
              <div class="input-box">
              <label>Volmacht EXP</label>
              <input type="date" name="exp" id="exp" required />
              </div>
              </div>

              <div style="display: flex; justify-content: center; margin-top: 20px;">
  <button type="button" id="myButton">Show Volmacht(required)</button>
</div>
         <button type="submit">Submit</button>
      </form>
    </section>

<script>document.getElementById('myButton').addEventListener('click', function() {
  var pdfUrl = 'Vollmacht.pdf'; // replace with your PDF URL
  window.open(pdfUrl);
});</script>
  </body>
</html>