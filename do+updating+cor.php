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

        $sql = "SELECT * FROM organizations WHERE id='$id'";
        $result = $link->query($sql);
                  
        if ($result->num_rows > 0) {
            
            $orgName = mysqli_real_escape_string($link, $_REQUEST['orgName']);
            $orgField = mysqli_real_escape_string($link, $_REQUEST['orgField']);
            $commRegister = mysqli_real_escape_string($link, $_REQUEST['commRegister']);
            $orgCity = mysqli_real_escape_string($link, $_REQUEST['orgCity']);
            $address = mysqli_real_escape_string($link, $_REQUEST['address']);
            $orgActivities = mysqli_real_escape_string($link, $_REQUEST['orgActivities']);
            $website = mysqli_real_escape_string($link, $_REQUEST['website']);
            $email = mysqli_real_escape_string($link, $_REQUEST['email']);
            $phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
            $ceo = mysqli_real_escape_string($link, $_REQUEST['ceo']);
            $orgRep = mysqli_real_escape_string($link, $_REQUEST['orgRep']);
            $position = mysqli_real_escape_string($link, $_REQUEST['position']);
            $repEmail = mysqli_real_escape_string($link, $_REQUEST['repEmail']);
            $repMobile = mysqli_real_escape_string($link, $_REQUEST['repMobile']);
            $initiativeName = mysqli_real_escape_string($link, $_REQUEST['initiativeName']);
            $initiativeDepartment = mysqli_real_escape_string($link, $_REQUEST['initiativeDepartment']); 
            $impEmployee = mysqli_real_escape_string($link, $_REQUEST['impEmployee']); 
            $impEmployeeMobile = mysqli_real_escape_string($link, $_REQUEST['impEmployeeMobile']); 
            $impEmployee2 = mysqli_real_escape_string($link, $_REQUEST['impEmployee2']); 
            $impEmployeeMobile2 = mysqli_real_escape_string($link, $_REQUEST['impEmployeeMobile2']); 
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
            $initiativeSpon = mysqli_real_escape_string($link, $_REQUEST['initiativeSpon']);
            $initiativeSpon2 = mysqli_real_escape_string($link, $_REQUEST['initiativeSpon2']);
            $initiativeSpon3 = mysqli_real_escape_string($link, $_REQUEST['initiativeSpon3']);
            $initiativeSpon4 = mysqli_real_escape_string($link, $_REQUEST['initiativeSpon4']);
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
            $cer10 = "";
            $cer11 = "";

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

            if(file_exists($_FILES['cer10']['name']) || is_uploaded_file($_FILES['cer10']['name'])) {
                $temp = explode(".", $_FILES["cer10"]["name"]);
                $newfilename = $idnum . pathinfo($_FILES['cer10']['name'], PATHINFO_FILENAME) . '.' . end($temp);
                $dst = "./uploads/";
                move_uploaded_file($_FILES["cer10"]["tmp_name"], $dst . $newfilename);
                $cer8 = $newfilename; 
            }

            if(file_exists($_FILES['cer11']['name']) || is_uploaded_file($_FILES['cer11']['name'])) {
                $temp = explode(".", $_FILES["cer11"]["name"]);
                $newfilename = $idnum . pathinfo($_FILES['cer11']['name'], PATHINFO_FILENAME) . '.' . end($temp);
                $dst = "./uploads/";
                move_uploaded_file($_FILES["cer11"]["tmp_name"], $dst . $newfilename);
                $cer9 = $newfilename; 
            }

            if($ack != ''){
                $sql = "UPDATE organizations
                SET ack = '$ack'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }

            if($cer != ''){
                $sql = "UPDATE organizations
                SET cer = '$cer'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }

            if($cer2 != ''){
                $sql = "UPDATE organizations
                SET cer2 = '$cer2'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }

            if($cer3 != ''){
                $sql = "UPDATE organizations
                SET cer3 = '$cer3'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }

            if($cer4 != ''){
                $sql = "UPDATE organizations
                SET cer4 = '$cer4'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }
            if($cer5 != ''){
                $sql = "UPDATE organizations
                SET cer5 = '$cer5'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }

            if($cer6 != ''){
                $sql = "UPDATE organizations
                SET cer6 = '$cer6'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }

            if($cer7 != ''){
                $sql = "UPDATE organizations
                SET cer7 = '$cer7'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }

            if($cer8 != ''){
                $sql = "UPDATE organizations
                SET cer8 = '$cer8'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }

            if($cer9 != ''){
                $sql = "UPDATE organizations
                SET cer9 = '$cer9'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }

            if($cer10 != ''){
                $sql = "UPDATE organizations
                SET cer10 = '$cer10'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }

            if($cer11 != ''){
                $sql = "UPDATE organizations
                SET cer11 = '$cer11'
                WHERE id = '$id';";
                $result = $link->query($sql);
            }

            $sql = "UPDATE organizations
            SET orgName = '$orgName', orgField = '$orgField', commRegister = '$commRegister', orgCity = '$orgCity', address = '$address', orgActivities = '$orgActivities', website = '$website', email = '$email', phone = '$phone', ceo = '$ceo', orgRep = '$orgRep', position = '$position', repEmail = '$repEmail', repMobile = '$repMobile', initiativeName = '$initiativeName', initiativeDepartment = '$initiativeDepartment', impEmployee = '$impEmployee', impEmployeeMobile = '$impEmployeeMobile', impEmployee2 = '$impEmployee2', impEmployeeMobile2 = '$impEmployeeMobile2', initiativeDesc = '$initiativeDesc', initiativeDesc2 = '$initiativeDesc2', initiativeDesc3 = '$initiativeDesc3', initiativeNum = '$initiativeNum', initiativeNum2 = '$initiativeNum2', initiativeNum3 = '$initiativeNum3', initiativeUnique = '$initiativeUnique', initiativeUnique2 = '$initiativeUnique2', initiativeUnique3 = '$initiativeUnique3', initiativeInOut = '$initiativeInOut', initiativeSpon = '$initiativeSpon', initiativeSpon2 = '$initiativeSpon2', initiativeSpon3 = '$initiativeSpon3', initiativeSpon4 = '$initiativeSpon4', video = '$video', video2 = '$video2'
            WHERE id = '$id';";

            $result = $link->query($sql);

            if($result == true){
                echo '<script>alert("لقد تم تحديث بياناتكم");</script>';
                echo "<script> location.href='edit+your+initiative+cor.php?username=$un'; </script>";
                
            }
            else {
                echo '<script>alert("حدث خطأ ما٬ الرجاء المحاولة مرة أخرى")</script>';
                echo "<script> location.href='edit+your+initiative+cor.php?username=$un'; </script>";
                
            }


            
        }
}


?>