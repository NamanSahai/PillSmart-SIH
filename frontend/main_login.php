<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PillSmart</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;800&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('IMAGES/DOCTOR.png');
            z-index: 9999;
        }

        .dashboard {
            padding-left: 35%;
            font-family: 'Montserrat', sans-serif;
            font-size: 70px;
            color: white;
            font-weight: bold;
        }
        a.buttons {
            position: relative;
            margin-top: 5%;
            font-family: 'Montserrat', sans-serif;
            font-size: 25px;
            background-color: #02766f;
            color: white;
            display: block;
            line-height: 50px;
            border: 2px solid transparent;
            cursor: pointer;
            width: 50%;
            padding: 0 7%;
            box-sizing: border-box;
            border-radius: 10px;
            height: 50px;
            transition: background-color 0.3s, border-color 0.3s, transform 0.3s;
            text-decoration: none;
            font-weight: lighter;
        }

        a.buttons:hover {
            background-color: transparent;
            transform: scale(1.2);
            border-color: #02766f;
        }

        td {
            font-family: 'Montserrat', sans-serif;
            width: 50%;
        }

        .positioning {
            height: 100%;
            width: 100%;
            background-size: cover;
            position: absolute;
            top: 0;
            left: 0;
            background-color:#027667;
            opacity:50%;
        }

        .positioning_1 {
            height: 80%;
            width: 80%;
            background-size: cover;
            top: 10%;
            position: absolute;
            left: 10%;
        }
    </style>
</head>
<body>
    <center>
        <div class="positioning"></div>
        <div class="positioning_1" style="background-color:white;opacity:30%"></div>
        <div class="positioning_1">
            <form class="dashboard" style="top: 10%; position: absolute;">
                <table cellspacing="30">
                    <thead><th style="padding-right: 50%;"><a href="main_login.php" style="color: white; text-decoration: none;">PillSmart</a></th></thead>
                    <tr><td><a href="patientsingnin.php" class="buttons">Patient Sign-in</a></td></tr>
                    <tr><td><a href="doctorsingnin.php" class="buttons">Doctor Sign-in</a></td></tr>
                    <tr><td><a href="employeesingnin.php" class="buttons" style="font-size: 26px;">Employee Sign-in</a></td></tr>
                </table>
            </form>
        </div>
    </center>
</body>
</html>