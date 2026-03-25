<html style="background-color: #02766f;">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;800&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Patient Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .dashboard {
            padding-left: 30%;
            font-family: 'Montserrat', sans-serif;
            font-size: 70px;
            color: white;
            font-weight: bold;
        }
        .buttons {
            position: relative;
            margin-top: 5%;
            font-family: 'Montserrat', sans-serif;
            font-size: 30px;
            background-color: #02766f;
            color: white;
            border: 2px solid transparent;
            cursor: pointer;
            width: 50%;
            border-radius: 10px;
            height: 70px;
            transition: background-color 0.3s, border-color 0.3s, transform 0.3s;
        }

        .buttons:hover {
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
            background-image: url('IMAGES/DOCTOR.png');
        }
        .positioning_2{
            height: 100%;
            width: 100%;
            background-size: cover;
            position: absolute;
            top: 0;
            left: 0;
        }

        .positioning_1 {
            height: 80%;
            width: 80%;
            background-size: cover;
            top: 10%;
            position: absolute;
            left: 10%;
        }

        th{
            
        }
    </style>
    <center>
            <div class="positioning"></div>
            <div class="positioning_2" style="background-color: #02766f;opacity: 50%;"></div>
            <div class="positioning_1" style="background-color: white;opacity:30%;"></div>
            <div class="positioning_1">
                <form class="dashboard" style="top: 10%;position: absolute;">
                    <table cellspacing="50">
                    <thead><th style="padding-right: 50%;"><a style="color: white; text-decoration: none;font-size:50px">DIAGONISTIC REPORTS</a></th></thead>
                        <tr><td><button class="buttons">Previous Records</button></td></tr>
                        <tr><td><button class="buttons">Current Records</button></td></tr>
                    </table>
                </form>
            </div>
            
    </center>
</html>