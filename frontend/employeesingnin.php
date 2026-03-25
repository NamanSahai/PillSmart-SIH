<html style="background-color: #02766f;">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;800&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Employee Sign-in</title>
    <style>
        td{
            color: black;
            font-family: 'Montserrat', sans-serif;
            width: 50%;
            font-size: 25px;
        }
        .positioning{
            height:80%;
            width: 80%;
            background-size: cover;
            top: 10%;
            position: absolute;
            left: 10%;
        }
        .hello{
            right: 15%;
            position:absolute;
            font-size: 100px;
            top: 20%;
            opacity: 100%;
            color:white;
            font-family: 'Montserrat', sans-serif;
            font-weight:bolder;
        }
        .patient-signup{
            top:65%;
            right: 20%;
            position:absolute;
            font-size: 25px;
            padding: 5px 5px;
            font-family: 'Montserrat', sans-serif;
            background-color: #02766f;
            color: white;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 20%;
            border-radius: 10px;
    
        }
        input[type="submit"] {
            font-family: 'Montserrat', sans-serif;
            font-size: 25px;
            background-color: #02766f;
            color: white;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 50%;
            border-radius: 10px;
        }
    </style>
    <center>
            <div class="positioning" style="background-image: url('IMAGES/loginpage-bg.png');"></div>
            <div class="positioning" style="background-color: white;opacity:30%;"></div>
            <h1 class="hello">Hello,<br>Employee</h1>
            <div style="background-color:white;width:40%;height:80%;left: 10%;top:10%;position: absolute;">
                <form style="padding-left: 50px;top: 10%;position: absolute;">
                    <table style="border-spacing: 10px 15px;">
                        <thead>
                            <th colspan="2" style="font-family: 'Montserrat', sans-serif;font-size:50px;padding-right: 80px;">Employee Sign-In</th>
                        </thead>
                        <tr>
                            <td>Employee ID</td><td><input type="text" name="NAME1"></td>
                            <td style="width: fit-content;"><button>Verify</button></td>
                        </tr>
                        <tr>
                            <td>OTP</td><td><input type="number(4)" name="conatct1"></td>
                        </tr>
                        <th colspan="2"><input type="submit"></th>
                    </table>
                </form>
            </div>
    </center>
</html>