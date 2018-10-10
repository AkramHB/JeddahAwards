<?php


if (!empty($_POST["id"])) {
        $un = $_POST["username"];
        $id = $_POST["id"];
        $servername = "localhost";
        $username = "Ujeddah";
        $password = "Ujeddah2018";
        $dbname = "jeddahawards";

        $link = mysqli_connect($servername, $username, $password, $dbname);
        mysqli_set_charset($link,"utf8");
        
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM individuals WHERE id='$id'";
        $result = $link->query($sql);
                  
        if ($result->num_rows > 0) {
            
            $name = mysqli_real_escape_string($link, $_REQUEST['name']);
            $idnum = mysqli_real_escape_string($link, $_REQUEST['idnum']);
            $job = mysqli_real_escape_string($link, $_REQUEST['job']);
            $email = mysqli_real_escape_string($link, $_REQUEST['email']);
            $mobile = mysqli_real_escape_string($link, $_REQUEST['mobile']);
            $phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
            $company = mysqli_real_escape_string($link, $_REQUEST['company']);
            $department = mysqli_real_escape_string($link, $_REQUEST['department']);
            $position = mysqli_real_escape_string($link, $_REQUEST['position']);
            $initiativeName = mysqli_real_escape_string($link, $_REQUEST['initiativeName']);
            $city = mysqli_real_escape_string($link, $_REQUEST['city']);
            $initiativeDesc = mysqli_real_escape_string($link, $_REQUEST['initiativeDesc']);
            $initiativeDesc2 = mysqli_real_escape_string($link, $_REQUEST['initiativeDesc2']);
            $initiativeDesc3 = mysqli_real_escape_string($link, $_REQUEST['initiativeDesc3']);
            $initiativeNum = mysqli_real_escape_string($link, $_REQUEST['initiativeNum']);
            $initiativeNum2 = mysqli_real_escape_string($link, $_REQUEST['initiativeNum2']); 
            $initiativeNum3 = mysqli_real_escape_string($link, $_REQUEST['initiativeNum3']); 
            $initiativeUnique = mysqli_real_escape_string($link, $_REQUEST['initiativeUnique']); 
            $initiativeUnique2 = mysqli_real_escape_string($link, $_REQUEST['initiativeUnique2']); 
            $initiativeUnique3 = mysqli_real_escape_string($link, $_REQUEST['initiativeUnique3']); 
            $initiativeInOut = mysqli_real_escape_string($link, $_REQUEST['initiativeInOut']);
            $initiativeSponsor = mysqli_real_escape_string($link, $_REQUEST['initiativeSponsor']);
            $manager = mysqli_real_escape_string($link, $_REQUEST['manager']);
            $managerMobile = mysqli_real_escape_string($link, $_REQUEST['managerMobile']);
            $companyManager = mysqli_real_escape_string($link, $_REQUEST['companyManager']);
            $managerPosition = mysqli_real_escape_string($link, $_REQUEST['managerPosition']);
            $officePhone = mysqli_real_escape_string($link, $_REQUEST['officePhone']);
            $video = mysqli_real_escape_string($link, $_REQUEST['video']);
            $video2 = mysqli_real_escape_string($link, $_REQUEST['video2']);
            $ack = "";
            $cer = "";
            $cer2 = "";
            $cer3 = "";
            $cer4 = "";
            $cer5 = "";
            $cer6 = "";
            $cer7 = "";
            $cer8 = "";
            $cer9 = "";

            if(file_exists($_FILES['ack']['name']) || is_uploaded_file($_FILES['ack']['name'])) {
                $temp = explode(".", $_FILES["ack"]["name"]);
                $newfilename = $idnum . pathinfo($_FILES['ack']['name'], PATHINFO_FILENAME) . '.' . end($temp);
                $dst = "./uploads/";
                move_uploaded_file($_FILES["ack"]["tmp_name"], $dst . $newfilename);
                $ack = $newfilename; 
            }

            if(file_exists($_FILES['cer']['name']) || is_uploaded_file($_FILES['cer']['name'])) {
                $temp = explode(".", $_FILES["cer"]["name"]);
                $newfilename = $idnum . pathinfo($_FILES['cer']['name'], PATHINFO_FILENAME) . '.' . end($temp);
                $dst = "./uploads/";
                move_uploaded_file($_FILES["cer"]["tmp_name"], $dst . $newfilename);
                $cer = $newfilename; 
            }

            if(file_exists($_FILES['cer2']['name']) || is_uploaded_file($_FILES['cer2']['name'])) {
                $temp = explode(".", $_FILES["cer2"]["name"]);
                $newfilename = $idnum . pathinfo($_FILES['cer2']['name'], PATHINFO_FILENAME) . '.' . end($temp);
                $dst = "./uploads/";
                move_uploaded_file($_FILES["cer2"]["tmp_name"], $dst . $newfilename);
                $cer2 = $newfilename; 
            }

            if(file_exists($_FILES['cer3']['name']) || is_uploaded_file($_FILES['cer3']['name'])) {
                $temp = explode(".", $_FILES["cer3"]["name"]);
                $newfilename = $idnum . pathinfo($_FILES['cer3']['name'], PATHINFO_FILENAME) . '.' . end($temp);
                $dst = "./uploads/";
                move_uploaded_file($_FILES["cer3"]["tmp_name"], $dst . $newfilename);
                $cer3 = $newfilename; 
            }

            if(file_exists($_FILES['cer4']['name']) || is_uploaded_file($_FILES['cer4']['name'])) {
                $temp = explode(".", $_FILES["cer4"]["name"]);
                $newfilename = $idnum . pathinfo($_FILES['cer4']['name'], PATHINFO_FILENAME) . '.' . end($temp);
                $dst = "./uploads/";
                move_uploaded_file($_FILES["cer4"]["tmp_name"], $dst . $newfilename);
                $cer4 = $newfilename; 
            }

            if(file_exists($_FILES['cer5']['name']) || is_uploaded_file($_FILES['cer5']['name'])) {
                $temp = explode(".", $_FILES["cer5"]["name"]);
                $newfilename = $idnum . pathinfo($_FILES['cer5']['name'], PATHINFO_FILENAME) . '.' . end($temp);
                $dst = "./uploads/";
                move_uploaded_file($_FILES["cer5"]["tmp_name"], $dst . $newfilename);
                $cer5 = $newfilename; 
            }

            if(file_exists($_FILES['cer6']['name']) || is_uploaded_file($_FILES['cer6']['name'])) {
                $temp = explode(".", $_FILES["cer6"]["name"]);
                $newfilename = $idnum . pathinfo($_FILES['cer6']['name'], PATHINFO_FILENAME) . '.' . end($temp);
                $dst = "./uploads/";
                move_uploaded_file($_FILES["cer6"]["tmp_name"], $dst . $newfilename);
                $cer6 = $newfilename; 
            }

            if(file_exists($_FILES['cer7']['name']) || is_uploaded_file($_FILES['cer7']['name'])) {
                $temp = explode(".", $_FILES["cer7"]["name"]);
                $newfilename = $idnum . pathinfo($_FILES['cer7']['name'], PATHINFO_FILENAME) . '.' . end($temp);
                $dst = "./uploads/";
                move_uploaded_file($_FILES["cer7"]["tmp_name"], $dst . $newfilename);
                $cer7 = $newfilename; 
            }

            if(file_exists($_FILES['cer8']['name']) || is_uploaded_file($_FILES['cer8']['name'])) {
                $temp = explode(".", $_FILES["cer8"]["name"]);
                $newfilename = $idnum . pathinfo($_FILES['cer8']['name'], PATHINFO_FILENAME) . '.' . end($temp);
                $dst = "./uploads/";
                move_uploaded_file($_FILES["cer8"]["tmp_name"], $dst . $newfilename);
                $cer8 = $newfilename; 
            }

            if(file_exists($_FILES['cer9']['name']) || is_uploaded_file($_FILES['cer9']['name'])) {
                $temp = explode(".", $_FILES["cer9"]["name"]);
                $newfilename = $idnum . pathinfo($_FILES['cer9']['name'], PATHINFO_FILENAME) . '.' . end($temp);
                $dst = "./uploads/";
                move_uploaded_file($_FILES["cer9"]["tmp_name"], $dst . $newfilename);
                $cer9 = $newfilename; 
            }

            if($ack != ''){
                $sql = "UPDATE individuals
                SET ack = '$ack'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }

            if($cer != ''){
                $sql = "UPDATE individuals
                SET cer = '$cer'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }

            if($cer2 != ''){
                $sql = "UPDATE individuals
                SET cer2 = '$cer2'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }

            if($cer3 != ''){
                $sql = "UPDATE individuals
                SET cer3 = '$cer3'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }

            if($cer4 != ''){
                $sql = "UPDATE individuals
                SET cer4 = '$cer4'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }
            if($cer5 != ''){
                $sql = "UPDATE individuals
                SET cer5 = '$cer5'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }

            if($cer6 != ''){
                $sql = "UPDATE individuals
                SET cer6 = '$cer6'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }

            if($cer7 != ''){
                $sql = "UPDATE individuals
                SET cer7 = '$cer7'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }

            if($cer8 != ''){
                $sql = "UPDATE individuals
                SET cer8 = '$cer8'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }

            if($cer9 != ''){
                $sql = "UPDATE individuals
                SET cer9 = '$cer9'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }

            $sql = "UPDATE individuals
            SET name = '$name', idnum = '$idnum', job = '$job', email = '$email', mobile = '$mobile', phone = '$phone', company = '$company', department = '$department', position = '$position', initiativeName = '$initiativeName', city = '$city', initiativeDesc = '$initiativeDesc', initiativeDesc2 = '$initiativeDesc2', initiativeDesc3 = '$initiativeDesc3', initiativeNum = '$initiativeNum', initiativeNum2 = '$initiativeNum2', initiativeNum3 = '$initiativeNum3', initiativeUnique = '$initiativeUnique', initiativeUnique2 = '$initiativeUnique2', initiativeUnique3 = '$initiativeUnique3', initiativeInOut = '$initiativeInOut', initiativeSponsor = '$initiativeSponsor', manager = '$manager', managerMobile = '$managerMobile', companyManager = '$companyManager', managerPosition = '$managerPosition', officePhone = '$officePhone', video = '$video', video2 = '$video2'
            WHERE id = '$id';";

            $result = $link->query($sql);

            if($result == true){
                echo '<script>alert("لقد تم تحديث بياناتكم");</script>';
                echo "<script> location.href='edit+your+initiative+ind.php?username=$un'; </script>";
                
            }
            else {
                echo '<script>alert("حدث خطأ ما٬ الرجاء المحاولة مرة أخرى")</script>';
                echo "<script> location.href='edit+your+initiative+ind.php?username=$un'; </script>";
                
            }


            
        }
}


?>