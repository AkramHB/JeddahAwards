<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.5.0, mobirise.com">


    <meta charset="UTF-8">
    <meta name="description" content="عرض المبادرات">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <title> جائزة جدة للإبداع</title>
    
    <style>
        
        @import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);
    * {
        font-family: 'Droid Arabic Kufi', serif !important;
        font-size: 16px;
        font-weight: 600;
    }
            
   
    
    
        </style>
   


</head>

<body dir="rtl">



    <div>
        <a href="http://www.jeddahawards.org"><img class="img-fluid d-none d-md-block" style="padding-bottom: 0em;" src="../assets/images/header4.png"></a>
        <a href="http://www.jeddahawards.org"><img class="img-fluid d--block d-md-none" style="padding-bottom: 0em;" src="../assets/images/headermobile1.png"></a>
    </div>
    
        <div class = "container"><ul class="nav nav-tabs nav-fill mt-5">
              <li class="nav-item">
                <a class="nav-link" href="displayind.php">أفراد</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">مؤسسات</a>
              </li>
        </ul></div>
        
    <?php
    
            error_reporting(0);
            session_start();
    

            if($_SESSION["admin"] == "admin"){

            $servername = "localhost";
            $username = "Ujeddah";
            $password = "Ujeddah2018";
            $dbname = "jeddahawards";;

            $MySQL_Handle = mysqli_connect($servername,$username,$password,$dbname) 
            or die ( mysqli_error($MySQL_Handle) ); 

            $sSQL= 'SET CHARACTER SET utf8'; 

            mysqli_query($MySQL_Handle,$sSQL) 
            or die ('Can\'t charset in DataBase');

            $query = "SELECT COUNT(*) c FROM organizations;";
            $result = $MySQL_Handle->query($query);
            $row = mysqli_fetch_assoc($result);
            echo "<div class = 'container mt-5'><h2 class = 'text-center'>إجمالي عدد المبادرات حتى الآن: " . $row['c'] . " مبادرة</h2></div>";

            if (empty($_GET['page'])) {
                $page = 1;
              }
              else {
                $page = $_GET['page'];
              }
            $items = 100; 
            $offset = ($page * $items) - $items;
            $sql = "SELECT * FROM organizations LIMIT $items OFFSET $offset";
            $result = $MySQL_Handle->query($sql);

            if ($result->num_rows > 0) {

                echo "<div class = 'container-fluid text-center mt-5'><table class = 'table table-hover table-responsive text-center'>
                    <thead class='thead-light'><tr><th scope='col'>ID #</th><th scope='col'>اسم الجهة المشاركة</th><th scope='col'>نوع المؤسسة</th><th scope='col'>تاريخ انشاءها</th><th scope='col'>رقم السجل التجاري</th><th scope='col'>المدينة</th><th scope='col'>النشاط الذي تزاوله الشركة</th><th scope='col'>البريد الإلكتروني</th><th scope='col'>رقم التواصل</th><th scope='col'>اسم ممثل المؤسسة</th><th scope='col'>اسم المبادرة</th><th scope='col'>مجال المبادرة</th><th scope='col'>تاريخ بدء تنفيذها</th><th scope='col'>تاريخ توقفها</th><th scope='col'>وصف المبادرة</th><th scope='col'> إبراز مدى الإبداع</th><th scope='col'> نموذج الإقرار</th><th scope='col'>إفادة ١</th><th scope='col'>إفادة ٢</th><th scope='col'>فيديو</th></tr></thead>";

                while($row = $result->fetch_assoc()) {
                    echo "<tr class=''>
                    <th scope='row'> " . $row['id'] . "
                    <td>" . $row['orgName'] . "
                    <td>" . $row['orgField'] . "
                    <td>" . $row['establishdate'] . "
                    <td>" . $row['commRegister'] . "
                    <td>" . $row['orgCity'] . "
                    <td>" . $row['orgActivities'] . "
                    <td>" . $row['email'] . "
                    <td>" . $row['phone'] . "
                    <td>" . $row['orgRep'] . "
                    <td>" . $row['initiativeName'] . "
                    <td>" . $row['initiativeCategory'] . "
                    <td>" . $row['initiativeStart'] . "
                    <td>" . $row['initiativeFinish'] . "
                    <td>" . $row['initiativeDesc'] . "
                    <td>" . $row['initiativeUnique'];

                    if($row['ack'] != ''){
                        echo "<td><a class = 'btn btn-default' href = '../uploads/" . $row['ack'] . "'>تحميل </a></td>";
                    }
                    else {
                        echo"<td></td>";
                    }
                    if($row['cer'] != ''){
                        echo "<td><a class = 'btn btn-default' href = '../uploads/" . $row['cer'] . "'>تحميل </a></td>";
                    }
                    else {
                        echo"<td></td>";
                    }
                    if($row['cer2'] != ''){
                        echo "<td><a class = 'btn btn-default' href = '../uploads/" . $row['cer2'] . "'>تحميل </a></td>";
                    }
                    else {
                        echo"<td></td>";
                    }
                    echo "<td>". $row["video"] . "";
                }
            } else {
                echo "<div class = 'my-5 text-center display-3'>لا توجد هناك نتائج حاليًا</div>";
            }
            $MySQL_Handle->close();

        }

        else {
            echo "<div class = 'container text-center mt-5'><div class='alert alert-danger' role='alert'>
                غير مصرح لك بالدخول هنا
          </div></div>";
        }
            



              echo "</tbody>
            </table>
            </div>";

    ?>
     <div class = "container my-5">
         <div class = "row justify-content-between">
            <div class = "col-3 order-2">                     
                <a class = "btn btn-default" style = "background-color: #a19b3c; color: #fff;" href="displaycor.php?page=<?php echo $page + 1; ?>">الصفحة التالية</a>
            </div>
            <div class = "col-3 order-1">
                <?php if ($page != 1) { ?>
                    <a class = "btn btn-default" style = "background-color: #a19b3c; color: #fff;" href="displaycor.php?page=<?php echo $page - 1; ?>">الصفحة السابقة</a>
                <?php } ?>
            </div>
        </div>
     </div> 

    <!-- footer -->

    <!-- #a00d1a -->
    



</body>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110676516-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-110676516-1');
</script>



</html>