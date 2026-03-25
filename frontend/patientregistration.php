<html style="background-color: #02766f;">
<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;800&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <style>
        .place{
            width: 65%;
            height: 100%;
            font-size: 20px;
            font-family: 'Montserrat', sans-serif;
        }
        td{
            color: black;
            font-family: 'Montserrat', sans-serif;
            width: 50%;
            font-size: 20px;
        }
        .positioning{
            height:80%;
            width: 80%;
            background-size: cover;
            top: 10%;
            position: absolute;
            left: 10%;
            background-image: url('IMAGES/loginpage-bg.png');
        }
        .positioning_1{
            height:80%;
            width: 80%;
            background-size: cover;
            top: 10%;
            position: absolute;
            left: 10%;
            background-color: white;
            opacity:30%;
        }
        .hello{
            left: 20%;
            position:absolute;
            font-size: 110px;
            top: 20%;
            opacity: 100%;
            color:white;
            font-family: 'Montserrat', sans-serif;
            font-weight:bolder;
        }
        .Generate{
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            background-color: #02766f;
            color: white;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 80%;
            border-radius: 10px;
            content: "Generate Patient Id";
        }
        .Submit{
            font-family: 'Montserrat', sans-serif;
            font-size: 25px;
            background-color: #02766f;
            color: white;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 80%;
            border-radius: 10px;
        }
    </style>
    <title> Patient Registration PAGE</title>
    </head>
    <body>
            <div class="positioning"></div>
            <div class="positioning_1"></div>
            <h1 class="hello">Hello!<br>World</h1>
            <div style="background-color:white;width:40%;height:80%;right: 10%;top:10%;position: absolute;">
                <form action="connect.php" method="post" style="padding-left: 50px;top: 10%;position: absolute;">
                    <table style="border-spacing: 10px 15px;">
                        <thead>
                            <th colspan="2" style="font-family: 'Montserrat', sans-serif;font-size:30px;padding-right: 80px;">
                            PATIENT REGISTRATION</th>
                        </thead>
                        <tr>
                            <td><input class="place" type="text" name="pname" placeholder="Name"></td>
                            <td><input class="place" type="number" name="page" placeholder="Age"></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td><select name="pgen" id="" style="font-family: 'Montserrat', sans-serif;font-size:30px;width: 65%;height: 100%;font-size: 20px;">
                                    <option name="pgen" value="male">Male</option>
                                    <option name="pgen" value="female">Female</option>
                                    <option name="pgen" value="nonbin">Non Binary</option>
                                    </select></td>
                        </tr>
                        <tr>
                            <td><input class="place" type="number" name="pcontact" placeholder="Contact No." style="font-family: 'Montserrat', sans-serif;font-size:20px;"></td>
                            <td><input class="place" type="number" name="padhar" placeholder="Aadhar Card No." style="font-family: 'Montserrat', sans-serif;font-size:20px;"></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td><select name="pcity" id="city" style="width: 65%;height: 100%;font-size: 20px;font-family: 'Montserrat', sans-serif;">
                                <option name="pcity" value="JOD">Jodhpur</option>
                                <option name="pcity" value="JPR">Jaipur</option>
                                <option name="pcity" value="AJM">Ajmer</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>State</td>
                            <td><select name="pstate" id="" style="width: 65%;height: 100%;font-size: 20px;font-family: 'Montserrat', sans-serif;">
                                <option name="pstate" value="rajasthan">RAJASTHAN</option>
                                <option name="pstate" value="gujrat">GUJARAT</option>
                                <option name="pstate" value="maharashtra">MAHARASTRA</option>
                                <option name="pstate" value="madhyapradesh">MADHYA PRADESH</option>
                                <option name="pstate" value="jammu">JAMMU</option>
                                <option name="pstate" value="kashmir">Kashmir</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Hopital</td>
                            <td><select name="phospital" id="hospital" style="width: 65%;height: 100%;font-size: 20px;font-family: 'Montserrat', sans-serif;">
                                    <option value="MDM">MDM</option>
                                    <option value="AIIMS">AIIMS</option>
                                    <option value="MGH">MGH</option>
                                    </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Doctor Assigned</td>
                            <td><select id="Doctor Assigned" name="docassign" style="font-family: 'Montserrat', sans-serif;width: 65%;height: 100%;font-size: 20px;">
                                <option name="docassign" value="Dr Henry">Dr. Henry</option>
                                <option name="docassign" value="Dr Gagan">Dr. Gagan</option>
                                <option name="docassign" value="Dr Abhishek">Dr. Abhishek</option>
                                <option name="docassign" value="Dr Ravindra">Dr. Ravindra</option>
                                <option name="docassign" value="Dr Cameron">Dr. Cameron</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Specialisation</td>
                            <td><select id="Specialisation" name="docdept" style="width: 65%;height: 100%;font-size: 20px;font-family: 'Montserrat', sans-serif;">
                                <option name="docdept" value="Psychiatrist">Psychiatrist</option>
                                <option name="docdept" value="Neurologist">Neurologist</option>
                                <option name="docdept" value="Dermatologist">Dermatologist</option>
                                <option name="docdept" value="Surgeon">Surgeon</option>
                                <option name="docdept" value="Cardiologist">Cardiologist</option>
                                <option name="docdept" value="Radiologist">Radiologist</option>
                                <option name="docdept" value="Dentist">Dentist</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
              
                            <td>
                                <button type="button" class="Generate" onclick="generateID()">Generate Patient Id</button>
                            </td>
                            <td>
                                <input type="text" name="pid" id="generatedID" style="width: 65%;height: 100%;font-size: 20px;" readonly>
                            </td>
                        </tr>
                       <tr>
                       <!-- <th colspan="2"><button class="Submit" type="submit">Submit</button></th> -->
                       <th colspan="2"><input class="Submit" type="submit" value="Submit"></th>
                       </tr>
                    </table>
                </form>
                
            </div>
    <script>
        function generateID() {
            var city = document.getElementById("city").value;
            var hospital = document.getElementById("hospital").value;

            var randomNumId = Math.floor(Math.random() * (9999 - 1000 + 1)) + 1000;

            var uniqueID = city + hospital + 'P' + randomNumId;

            document.getElementById("generatedID").value = uniqueID;
        }
    </script>
    </body>
</html>