<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تعديل المبادرة</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
</head>
<body dir = "rtl">

    <a href="http://www.jeddahawards.org"><img class="img-fluid d-none d-md-block" style="padding-bottom: 0em;" src="assets/images/header4.png"></a>
     <a href="http://www.jeddahawards.org"><img class="img-fluid d--block d-md-none" style="padding-bottom: 0em;" src="assets/images/headermobile1.png"></a>
     <div class = "container">
         <div class = "row">
             <div class = "col-12">
                 <a class = "btn btn-default text-left" style = "font-size: 20px;" href = "logout.php"><i class="fa fa-sign-out" style="font-size:20px"></i> Sign-out</a>
             </div>
         </div>
     </div>

    <?php

        session_start();

        if(!empty($_SESSION["user"])){

        $un = $_GET["username"];
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

        $sql = "SELECT * FROM organizations WHERE username='$un'";
        $result = $link->query($sql);
                  
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo 
                "<div class = 'container mt-5'>

                    <div class = 'row' style = 'color: #A19B41;'>
                        <div class = 'col-6 text-right'>
                            <h3>
                                بيانات المبادرة
                            </h3>
                        </div>
                        <div class = 'col-6 text-left'>
                            <h3>
                                <a href = 'update+cor.php?data=$un'><i class='material-icons'>edit</i></a>
                                <!-- <a href='#' data-toggle='modal' data-target='#modalDelete'><i class='material-icons'>remove_circle</i></a> -->
                            </h3>
                        </div>
                    </div>


                    <div class = 'modal fade' id='modalDelete'>
    
                        <div class='modal-dialog modal-dialog-centered'>
                            
                            <div class = 'modal-content'>
                                
                                <div class='modal-header'>
                                        <h5 class = 'modal-title'>حذف المبادرة</h5>
                                </div>
                                
                                <div class='modal-body'>
                                    <p class = 'text-right'>هل ترغب بحذف المبادرة نهائيًا؟</p>
                                </div>
                                
                                <div class='modal-footer'>
                                    <a class='btn btn-primary' href = 'delete+cor.php?data=$un'>نعم</a>
                                    <button type='button' class='btn btn-secondary' data-dismiss = 'modal'>لا</button>
                                </div>
                                
                                </div>
                            
                        </div>
                    
                    </div>




                    <div class = 'row justify-content-center mt-5 border-top'>


                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>اسم الجهة المشاركة</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['orgName'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>نوع المؤسسة</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['orgField'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>تاريخ انشائها</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['establishdate'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>رقم السجل التجاري</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['commRegister'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>المدينة</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['orgCity'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>العنوان</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['address'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>النشاط الذي تزاوله المؤسسة</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['orgActivities'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>الموقع الإلكتروني</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['website'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>البريد الإلكتروني</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['email'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>رقم التواصل</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['phone'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>اسم المدير التنفيذي</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['ceo'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>اسم ممثل المؤسسة</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['orgRep'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>المسمى الوظيفي</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['position'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>البريد الإلكتروني</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['repEmail'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>رقم الجوال</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['repMobile'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>اسم المبادرة</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['initiativeName'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>مجال المبادرة</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['initiativeCategory'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>تاريخ بدء تنفيذها</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['initiativeStart'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>تاريخ توقفها</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['initiativeFinish'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>اسم القسم/الإدارة المقدمة للمبادرة</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['initiativeDepartment'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>اسم الموظف المعني بتقديم المبادرة</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['impEmployee'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>جواله</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['impEmployeeMobile'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>اسم موظف آخر معني بتقديم المبادرة</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['impEmployee2'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>جواله</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['impEmployeeMobile2'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>وصف المبادرة المشارِكة مع ابراز إذا ما كانت المساهمة توعويه او تهدف الى معالجه و/او تطوير قضية عامه؟</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['initiativeDesc'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>ابراز الفائدة او الاثر الاجتماعي والاقتصادي (إذا وجد) على الفئة المستهدفة بالمبادرة</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['initiativeDesc2'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>ابراز الفائدة الاجتماعية والاقتصادية المحققة و/او المرتقبة للمبادرة على الحي/ المدينة/ المجتمع على وجه العموم</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['initiativeDesc3'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>ابراز العدد الحالي والمتوقع (من 3-5 سنوات) للشريحة المستهدفة بالمبادرة مع تحديد فئاتهم المختلفة من حيث العمر، الجنس ...الخ</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['initiativeNum'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>ابراز المنطقة الجغرافية المستهدفة بالمبادرة في الوقت الحالي وذكر الامتداد الجغرافي المرتقب للمبادرة في خلال ثلاث سنوات من اليوم</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['initiativeNum2'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>ابراز الرؤية المستقبلية للمبادرة من ناحية امكانية تطويرها لإضافة فوائد وخدمات أخرى - ان وجد</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['initiativeNum3'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>ابراز مدى الابداع وتفرد المبادرة وتميزها من حيث اختيار الفكرة او المضمون او انتقاء الشريحة المستفيدة</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['initiativeUnique'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>ابراز الطريقة المعتمدة في تنفيذ المبادرة وايصالها للشريحة المستهدفة</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['initiativeUnique2'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>ابراز تميز (إذا وجد) الشريحة او الفئة المستهدفة من المبادرة، من حيث عدم التطرق اليها من قبل مبادرات اخرى سابقه</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['initiativeUnique3'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>تكلفة حصول الشريحة المستهدفة على مخرجات المبادرة سواء مجانا و/او بتكاليف مالية</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['initiativeInOut'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>ذكر مصادر التمويل الاساسي للمبادرة عند انطلاقتها - الرجاء ذكر راس المال الاولي لانطلاق المبادرة ومصدر التمويل</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['initiativeSpon'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>ذكر مصادر التمويل الحالي للمبادرة</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['initiativeSpon2'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>ذكر اي دعم او تعاون مقدم من جهات حكومية و/ أو أهليه منذ انطلاقة مبادرة</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['initiativeSpon3'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>ابراز حجم العنصر والمستوى التطوعي المطلوب في تنفيذ المبادرة من خدمات او افراد او مؤسسات</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5>". $row['initiativeSpon4'] ."</h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>نموذج الإقرار</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>";
                        if($row['ack'] != ''){
                            echo "<h5><a class = 'btn btn-default' href = '../uploads/" . $row['ack'] . "'>تحميل </a></h5>";
                        }
                       echo"</div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>إفادة ١</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>";
                        if($row['cer'] != ''){
                            echo "<h5><a class = 'btn btn-default' href = '../uploads/" . $row['cer'] . "'>تحميل </a></h5>";
                        }
                        echo "</div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>إفادة ٢</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>";
                        if($row['cer2'] != ''){
                           echo "<h5><a class = 'btn btn-default' href = '../uploads/" . $row['cer2'] . "'>تحميل </a></h5>";
                        }
                        echo "</div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>إفادة ٣</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>";
                        if($row['cer3'] != ''){
                           echo "<h5><a class = 'btn btn-default' href = '../uploads/" . $row['cer3'] . "'>تحميل </a></h5>";
                        }
                        echo "</div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>إفادة ٤</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>";
                        if($row['cer4'] != ''){
                            echo "<h5><a class = 'btn btn-default' href = '../uploads/" . $row['cer4'] . "'>تحميل </a></h5>";
                        }
                        echo "</div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>إفادة ٥</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>";
                        if($row['cer5'] != ''){
                            echo "<h5><a class = 'btn btn-default' href = '../uploads/" . $row['cer5'] . "'>تحميل </a></h5>";
                        }
                        echo"</div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>نسخه عن شهادات تقدير حصلت عليها المبادرة من جهات مختلفة</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>";
                        if($row['cer6'] != ''){
                            echo "<h5><a class = 'btn btn-default' href = '../uploads/" . $row['cer6'] . "'>تحميل </a></h5>";
                        }
                        echo "</div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>نسخه ٢ عن شهادات تقدير حصلت عليها المبادرة من جهات مختلفة</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>";
                        if($row['cer7'] != ''){
                            echo "<h5><a class = 'btn btn-default' href = '../uploads/" . $row['cer7'] . "'>تحميل </a></h5>";
                        }
                       echo "</div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>صور او مطبوعات تبرز وتشيد بنشاطات وانجازات المبادرة</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>";
                        if($row['cer8'] != ''){
                            echo "<h5><a class = 'btn btn-default' href = '../uploads/" . $row['cer8'] . "'>تحميل </a></h5>";
                        }
                        echo "</div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>صور او مطبوعات تبرز وتشيد بنشاطات وانجازات المبادرة</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>";
                        if($row['cer9'] != ''){
                            echo "<h5><a class = 'btn btn-default' href = '../uploads/" . $row['cer9'] . "'>تحميل </a></h5>";
                        }
                        echo "</div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>فيديو يبرز ويشيد بنشاطات وانجازات المبادرة</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5><a class = 'btn btn-default' href = '". $row['video'] ."'>". $row['video'] ."</a></h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                        <h5>فيديو ٢ يبرز ويشيد بنشاطات وانجازات المبادرة</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>
                            <h5><a class = 'btn btn-default' href = '". $row['video2'] ."'>". $row['video2'] ."</a></h5>
                        </div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>حساب الايرادات والمصاريف المتعلقة بالمبادرة للسنتين الماضيتين</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>";
                        if($row['cer10'] != ''){
                            echo "<h5><a class = 'btn btn-default' href = '../uploads/" . $row['cer10'] . "'>تحميل </a></h5>";
                        }
                        echo "</div>

                        <div class = 'col-3 text-left border-left border-bottom'>
                            <h5>حساب الايرادات والمصاريف المقدرة والمتعلقة بالمبادرة للسنة القادمة.</h5>
                        </div>
                        <div class = 'col-9 text-right border-bottom'>";
                        if($row['cer11'] != ''){
                            echo "<h5><a class = 'btn btn-default' href = '../uploads/" . $row['cer11'] . "'>تحميل </a></h5>";
                        }
                        echo "

                        

                    </div>

                </div>";
            }
                  
         }

        }

        else {
            echo "<div class = 'container text-center mt-5'><div class='alert alert-danger' role='alert'>
                غير مصرح لك بالدخول هنا
          </div></div>";
        }

    ?>

     

     
    
</body>
</html>