<?php
    $con = new mysqli ("localhost:3300","root","","pillsmart");
    if (!$con) {
        die(mysqli_error($con));
    }
    if(isset($_POST['submit'])){
        $pname = $_POST['pname'];
        $page = $_POST['page'];
        $pgen = $_POST['pgen'];
        $pcontact = $_POST['pcontact'];
        $padhar = $_POST['padhar'];
        $pcity = $_POST['pcity'];
        $pstate = $_POST['pstate'];
        $phospital = $_POST['phospital'];
        $docassign = $_POST['docassign'];
        $docdept = $_POST['pdocdept'];
        $generateID = $_POST['pid'];

        $sql = 'insert into `tb_patient`(pname,age,pgender,pcontact,paadhar,pcity,pstate,phospital,pspec,pdocassign,pid)values('.$pname.','.$page.','.$pgen.','.$pcontact.','.$padhar.','.$pcity.','.$pstate.','.$phospital.','.$docdept.','.$docassign.','.$generateID.')';

        $result = mysqli_query($con,$sql);

        if($result){
            header('location:patientregistration.php');
        }
        else{
            die(mysqli_error($con));
        }
    }

?>