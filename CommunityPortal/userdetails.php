<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <?php include 'links.php' ?>

</head>

<body><br><br><br>
    <h2 class="text-center"> User Details</h2>
    <br>
    <div class="container">
        <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>" method="POST">
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" name="firstname">
            </div>

            <div class="form-group">
                <label for="surname">Surname:</label>
                <input type="text" class="form-control" name="surname">
            </div>

            <div class="form-group">
                <label for="username">User Name:</label>
                <input type="text" class="form-control" name="username">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="form-group">
                <label for="confirmpassword">Confirm Password:</label>
                <input type="password" class="form-control" name="confirmpassword">
            </div>

            <label for="gender">Gender:</label>&nbsp;
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optradio">Male
                </label>
            </div>

            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optradio">Female
                </label>
            </div>

            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optradio">Other
                </label>
            </div>

            <div class="form-group">
                <label for="mobile">Date Of Birth</label>
                <input type="date" class="form-control " name="mobile">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email">
            </div>

            <div class="form-group">
                <label for="mobile">Mobile No.:</label>
                <input type="number" class="form-control" name="mobile">
            </div>

            <div class="form-group">
                <label for="country">Country list:</label>
                <select class="form-control" id="country" name="country">
                    <option value="India">India</option>
                    <option value="Afganistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bonaire">Bonaire</option>
                    <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Canary Islands">Canary Islands</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Channel Islands">Channel Islands</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos Island">Cocos Island</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote DIvoire">Cote DIvoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Curaco">Curacao</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="East Timor">East Timor</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands">Falkland Islands</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Ter">French Southern Ter</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Great Britain">Great Britain</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Hawaii">Hawaii</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran">Iran</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea North">Korea North</option>
                    <option value="Korea Sout">Korea South</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Laos">Laos</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libya">Libya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macau">Macau</option>
                    <option value="Macedonia">Macedonia</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Midway Islands">Midway Islands</option>
                    <option value="Moldova">Moldova</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Nambia">Nambia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherland Antilles">Netherland Antilles</option>
                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                    <option value="Nevis">Nevis</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau Island">Palau Island</option>
                    <option value="Palestine">Palestine</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Phillipines">Philippines</option>
                    <option value="Pitcairn Island">Pitcairn Island</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                    <option value="Republic of Serbia">Republic of Serbia</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russia">Russia</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="St Barthelemy">St Barthelemy</option>
                    <option value="St Eustatius">St Eustatius</option>
                    <option value="St Helena">St Helena</option>
                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                    <option value="St Lucia">St Lucia</option>
                    <option value="St Maarten">St Maarten</option>
                    <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                    <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                    <option value="Saipan">Saipan</option>
                    <option value="Samoa">Samoa</option>
                    <option value="Samoa American">Samoa American</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syria">Syria</option>
                    <option value="Tahiti">Tahiti</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Erimates">United Arab Emirates</option>
                    <option value="United States of America">United States of America</option>
                    <option value="Uraguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Vatican City State">Vatican City State</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                    <option value="Wake Island">Wake Island</option>
                    <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zaire">Zaire</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                </select>
                </select>
            </div>



            <div class="form-group">
                <label for="occupation">Occupation:</label>
                <select class="form-control dropdown" id="occupation" name="occupation">
                    <option value="" selected="selected" disabled="disabled">-- select one --</option>
                    <optgroup label="Healthcare Practitioners and Technical Occupations:">
                        <option value="1">- Chiropractor</option>
                        <option value="2">- Dentist</option>
                        <option value="3">- Dietitian or Nutritionist</option>
                        <option value="4">- Optometrist</option>
                        <option value="5">- Pharmacist</option>
                        <option value="6">- Physician</option>
                        <option value="7">- Physician Assistant</option>
                        <option value="8">- Podiatrist</option>
                        <option value="9">- Registered Nurse</option>
                        <option value="10">- Therapist</option>
                        <option value="11">- Veterinarian</option>
                        <option value="12">- Health Technologist or Technician</option>
                        <option value="13">- Other Healthcare Practitioners and Technical Occupation</option>
                    </optgroup>
                    <optgroup label="Healthcare Support Occupations:">
                        <option value="14">- Nursing, Psychiatric, or Home Health Aide</option>
                        <option value="15">- Occupational and Physical Therapist Assistant or Aide</option>
                        <option value="16">- Other Healthcare Support Occupation</option>
                    </optgroup>
                    <optgroup label="Business, Executive, Management, and Financial Occupations:">
                        <option value="17">- Chief Executive</option>
                        <option value="18">- General and Operations Manager</option>
                        <option value="19">- Advertising, Marketing, Promotions, Public Relations, and Sales Manager
                        </option>
                        <option value="20">- Operations Specialties Manager (e.g., IT or HR Manager)</option>
                        <option value="21">- Construction Manager</option>
                        <option value="22">- Engineering Manager</option>
                        <option value="23">- Accountant, Auditor</option>
                        <option value="24">- Business Operations or Financial Specialist</option>
                        <option value="25">- Business Owner</option>
                        <option value="26">- Other Business, Executive, Management, Financial Occupation</option>
                    </optgroup>
                    <optgroup label="Architecture and Engineering Occupations:">
                        <option value="27">- Architect, Surveyor, or Cartographer</option>
                        <option value="28">- Engineer</option>
                        <option value="29">- Other Architecture and Engineering Occupation</option>
                    </optgroup>
                    <optgroup label="Education, Training, and Library Occupations:">
                        <option value="30">- Postsecondary Teacher (e.g., College Professor)</option>
                        <option value="31">- Primary, Secondary, or Special Education School Teacher</option>
                        <option value="32">- Other Teacher or Instructor</option>
                        <option value="33">- Other Education, Training, and Library Occupation</option>
                    </optgroup>
                    <optgroup label="Other Professional Occupations:">
                        <option value="34">- Arts, Design, Entertainment, Sports, and Media Occupations</option>
                        <option value="35">- Computer Specialist, Mathematical Science</option>
                        <option value="36">- Counselor, Social Worker, or Other Community and Social Service Specialist
                        </option>
                        <option value="37">- Lawyer, Judge</option>
                        <option value="38">- Life Scientist (e.g., Animal, Food, Soil, or Biological Scientist,
                            Zoologist)</option>
                        <option value="39">- Physical Scientist (e.g., Astronomer, Physicist, Chemist, Hydrologist)
                        </option>
                        <option value="40">- Religious Worker (e.g., Clergy, Director of Religious Activities or
                            Education)</option>
                        <option value="41">- Social Scientist and Related Worker</option>
                        <option value="42">- Other Professional Occupation</option>
                    </optgroup>
                    <optgroup label="Office and Administrative Support Occupations:">
                        <option value="43">- Supervisor of Administrative Support Workers</option>
                        <option value="44">- Financial Clerk</option>
                        <option value="45">- Secretary or Administrative Assistant</option>
                        <option value="46">- Material Recording, Scheduling, and Dispatching Worker</option>
                        <option value="47">- Other Office and Administrative Support Occupation</option>
                    </optgroup>
                    <optgroup label="Services Occupations:">
                        <option value="48">- Protective Service (e.g., Fire Fighting, Police Officer, Correctional
                            Officer)</option>
                        <option value="49">- Chef or Head Cook</option>
                        <option value="50">- Cook or Food Preparation Worker</option>
                        <option value="51">- Food and Beverage Serving Worker (e.g., Bartender, Waiter, Waitress)
                        </option>
                        <option value="52">- Building and Grounds Cleaning and Maintenance</option>
                        <option value="53">- Personal Care and Service (e.g., Hairdresser, Flight Attendant, Concierge)
                        </option>
                        <option value="54">- Sales Supervisor, Retail Sales</option>
                        <option value="55">- Retail Sales Worker</option>
                        <option value="56">- Insurance Sales Agent</option>
                        <option value="57">- Sales Representative</option>
                        <option value="58">- Real Estate Sales Agent</option>
                        <option value="59">- Other Services Occupation</option>
                    </optgroup>
                    <optgroup label="Agriculture, Maintenance, Repair, and Skilled Crafts Occupations:">
                        <option value="60">- Construction and Extraction (e.g., Construction Laborer, Electrician)
                        </option>
                        <option value="61">- Farming, Fishing, and Forestry</option>
                        <option value="62">- Installation, Maintenance, and Repair</option>
                        <option value="63">- Production Occupations</option>
                        <option value="64">- Other Agriculture, Maintenance, Repair, and Skilled Crafts Occupation
                        </option>
                    </optgroup>
                    <optgroup label="Transportation Occupations:">
                        <option value="65">- Aircraft Pilot or Flight Engineer</option>
                        <option value="66">- Motor Vehicle Operator (e.g., Ambulance, Bus, Taxi, or Truck Driver)
                        </option>
                        <option value="67">- Other Transportation Occupation</option>
                    </optgroup>
                    <optgroup label="Other Occupations:">
                        <option value="68">- Military</option>
                        <option value="69">- Homemaker</option>
                        <option value="70">- Other Occupation</option>
                        <option value="71">- Don't Know</option>
                        <option value="72">- Not Applicable</option>
                    </optgroup>
                </select>
            </div>


            <input type="submit" class="btn btn-success" name="submit" value="Registor">

        </form>
    </div>




</body>

</html>
<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($con,$_POST['user']);
    $degree = mysqli_real_escape_string($con,$_POST['degree']);
    $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $refer = mysqli_real_escape_string($con,$_POST['refer']);
    $lang = mysqli_real_escape_string($con,$_POST['lang']);
    

    $insertquery = " insert into registration(name,email,mobile,degree,refer,language) values('$name' ,'$email','$mobile','$degree','$refer','$lang')";

    $qurey = mysqli_query($con,$insertquery);

    if($qurey){
        ?>
<script>
    alert('Inserted Successfull');
</script>
<?php
    }else{
        ?>
<script>
    alert('Inserted Fail');
</script>
<?php
    }

}

?>