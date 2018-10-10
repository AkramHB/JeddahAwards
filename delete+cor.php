<?php
    $un = $_GET["data"];
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

    $sql = "DELETE FROM organizations WHERE username= '$un';";
    $result = $link->query($sql);
                  
    if ($result == true) {
        echo "<script>
                alert('تم حذف المبادرة٬ شكرًا لكم.');
                location.href='/';
              </script>
        ";
    }

    else {
        echo "<script>
                alert('حدث خطأ٬ الرجاء التأكد من ادخال بياناتك بشكل صحيح.');
                location.href='/';
              </script>
        ";
    }
?>