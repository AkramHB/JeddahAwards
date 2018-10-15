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
    
</head>
<body dir = "rtl">

    <a href="http://www.jeddahawards.org"><img class="img-fluid d-none d-md-block mb-5" style="padding-bottom: 0em;" src="assets/images/header4.png"></a>
     <a href="http://www.jeddahawards.org"><img class="img-fluid d--block d-md-none mb-5" style="padding-bottom: 0em;" src="assets/images/headermobile1.png"></a>

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

        $sql = "SELECT * FROM organizations WHERE username='$un'";
        $result = $link->query($sql);
                  
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '

                    <div class = "container mt-5">
                        <form class="form" role="form" autocomplete="off" method="post" action="do+updating+cor.php" enctype="multipart/form-data">
                            <div class="container mt-5">
                                <div class="card card-outline-secondary">
                                    <div class="card-header" style="color: #055d9b; background-color: #d7d49f;">
                                        <h3 class="mb-0 text-center">بيانات المؤسسة</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="orgName">اسم الجهة المشاركة</label>
                                            <div class="col-lg-9"> 
                                            <input type="text" hidden class="form-control" name="id" id="txtName" value = '. $row["id"] .'>
                                            <input type="text" hidden class="form-control" name="username" id="txtName" value = '. $row["username"] .'> 
                                                <input type="text" class="form-control" name="orgName" id="orgName" value = "'. $row["orgName"] .'">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="orgField">نوع المؤسسة</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="orgField"  id="orgField" value = "'. $row["orgField"] .'">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="commRegister">رقم السجل التجاري</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" id="commRegister" name="commRegister" value = "'. $row["commRegister"] .'">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="orgCity">المدينة</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="orgCity" value = "'. $row["orgCity"] .'">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="address">العنوان</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="address" value = "'. $row["address"] .'">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="orgActivities">النشاط الذي تزاوله المؤسسة</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="orgActivities" value = "'. $row["orgActivities"] .'">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="website">الموقع الإلكتروني</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="website" value = "'. $row["website"] .'">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="email">البريد الإلكتروني</label>
                                            <div class="col-lg-9">
                                                <input type="email" class="form-control" name="email" value = "'. $row["email"] .'">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="phone">رقم التواصل</label>
                                            <div class="col-lg-9">
                                                <input type="tel" class="form-control" name="phone" value = "'. $row["phone"] .'">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="ceo">اسم المدير التنفيذي</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="ceo" value = "'. $row["ceo"] .'">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header" style="color: #055d9b; background-color: #d7d49f;">
                                        <h3 class="mb-0 text-center">مندوب الاتصال من المؤسسة/h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="orgRep">اسم ممثل المؤسسة</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="orgRep" id="orgRep" value = "'. $row["orgRep"] .'">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="position">المسمى الوظيفي</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="position" id="position" value = "'. $row["position"] .'">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="repEmail">البريد الإلكتروني</label>
                                            <div class="col-lg-9">
                                                <input type="email" class="form-control" name="repEmail" id="repEmail" value = "'. $row["repEmail"] .'">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="repMobile">رقم الجوال</label>
                                            <div class="col-lg-9">
                                                <input type="tel" placeholder=" رقم الجوال  - مثال 966540869636" pattern="[0-9]{3}[0-9]{2}[0-9]{3}[0-9]{4}" class="form-control" name="repMobile" id="repMobile" value = '. $row["repMobile"] .'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header" style="color: #055d9b; background-color: #d7d49f;">
                                        <h3 class="mb-0 text-center">معلومات أساسية</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="initiativeName">اسم المبادرة</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="initiativeName" id="initiativeName" value = "'. $row["initiativeName"] .'">
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="initiativeDepartment">اسم القسم/الإدارة المقدمة للمبادرة</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="initiativeDepartment" id="initiativeDepartment" value = "'. $row["initiativeDepartment"] .'">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="impEmployee">اسم الموظف المعني بتقديم المبادرة</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="impEmployee" id="impEmployee" value = "'. $row["impEmployee"] .'">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="impEmployeeMobile">جواله</label>
                                        <div class="col-lg-9">
                                            <input type="tel" placeholder=" رقم الجوال  - مثال 966540869636" pattern="[0-9]{3}[0-9]{2}[0-9]{3}[0-9]{4}" class="form-control" name="impEmployeeMobile" id="impEmployeeMobile" value = '. $row["impEmployeeMobile"] .'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="impEmployee2">اسم موظف آخر معني بتقديم المبادرة</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="impEmployee2" id="impEmployee2" value = "'. $row["impEmployee2"] .'">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="impEmployeeMobile2">جواله</label>
                                        <div class="col-lg-9">
                                            <input type="tel" placeholder=" رقم الجوال  - مثال 966540869636" pattern="[0-9]{3}[0-9]{2}[0-9]{3}[0-9]{4}" class="form-control" name="impEmployeeMobile2" id="impEmployeeMobile2" value = '. $row["impEmployeeMobile2"] .'>
                                        </div>
                                    </div>
                                    <div class="form-group row">';
                                        if($row["ack"] != $row['commRegister'] . "."){
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="ack">ارفاق نموذج الاقرار (تم رفع ملف مسبقًا)</label>';
                                        }
                                        else {
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="ack">ارفاق نموذج الاقرار</label>';
                                        }
                                        echo '<div class="col-lg-9">
                                            <label for="ack" class="btn btn-default  dar btn-block" style="background-color: #d8b92b;">اختر الملف</label>
                                            <input type="file" id="ack" name="ack" class="form-control" style="visibility:hidden">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header" style="color: #055d9b; background-color: #d7d49f;">
                                    <h3 class="mb-0 text-center">التأثير الإجتماعي والإقتصادي</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="initiativeDesc">وصف المبادرة المشارِكة مع ابراز إذا ما كانت المساهمة توعويه او تهدف الى معالجه و/او تطوير قضية عامه؟</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="initiativeDesc" id="initiativeDesc" value = "'. $row["initiativeDesc"] .'">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="initiativeDesc2">ابراز الفائدة او الاثر الاجتماعي والاقتصادي (إذا وجد) على الفئة المستهدفة بالمبادرة</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="initiativeDesc2" id="initiativeDesc2" value = "'. $row["initiativeDesc2"] .'">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="initiativeDesc3">ابراز الفائدة الاجتماعية والاقتصادية المحققة و/او المرتقبة للمبادرة على الحي/ المدينة/ المجتمع على وجه العموم</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="initiativeDesc3" id="initiativeDesc3" value = "'. $row["initiativeDesc3"] .'">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header" style="color: #055d9b; background-color: #d7d49f;">
                                    <h3 class="mb-0 text-center">الإستدامة</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="initiativeNum">ابراز العدد الحالي والمتوقع (من 3-5 سنوات) للشريحة المستهدفة بالمبادرة مع تحديد فئاتهم المختلفة من حيث العمر، الجنس ...الخ</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="initiativeNum" id="initiativeNum" value = "'. $row["initiativeNum"] .'">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="initiativeNum2">ابراز المنطقة الجغرافية المستهدفة بالمبادرة في الوقت الحالي وذكر الامتداد الجغرافي المرتقب للمبادرة في خلال ثلاث سنوات من اليوم</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="initiativeNum2" id="initiativeNum2" value = "'. $row["initiativeNum2"] .'">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="initiativeNum3">ابراز الرؤية المستقبلية للمبادرة من ناحية امكانية تطويرها لإضافة فوائد وخدمات أخرى - ان وجد</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="initiativeNum3" id="initiativeNum3" value = "'. $row["initiativeNum3"] .'">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header" style="color: #055d9b; background-color: #d7d49f;">
                                    <h3 class="mb-0 text-center">التميز والابداع</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="initiativeUnique">ابراز مدى الابداع وتفرد المبادرة وتميزها من حيث اختيار الفكرة او المضمون او انتقاء الشريحة المستفيدة</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="initiativeUnique" id="initiativeUnique" value = "'. $row["initiativeUnique"] .'">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="initiativeUnique2">ابراز الطريقة المعتمدة في تنفيذ المبادرة وايصالها للشريحة المستهدفة</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="initiativeUnique2" id="initiativeUnique2" value = "'. $row["initiativeUnique2"] .'">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="initiativeUnique3">ابراز تميز (إذا وجد) الشريحة او الفئة المستهدفة من المبادرة، من حيث عدم التطرق اليها من قبل مبادرات اخرى سابقه</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="initiativeUnique3" id="initiativeUnique3" value = "'. $row["initiativeUnique3"] .'">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header" style="color: #055d9b; background-color: #d7d49f;">
                                    <h3 class="mb-0 text-center">التنفيذ والمخرجات</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="initiativeInOut">تكلفة حصول الشريحة المستهدفة على مخرجات المبادرة سواء مجانا و/او بتكاليف مالية</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="initiativeInOut" id="initiativeInOut" value = "'. $row["initiativeInOut"] .'">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header" style="color: #055d9b; background-color: #d7d49f;">
                                    <h3 class="mb-0 text-center">التمويل والدعم</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="initiativeSpon">ذكر مصادر التمويل الاساسي للمبادرة عند انطلاقتها - الرجاء ذكر راس المال الاولي لانطلاق المبادرة ومصدر التمويل</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="initiativeSpon" id="initiativeSpon" value = "'. $row["initiativeSpon"] .'">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="initiativeSpon2">ذكر مصادر التمويل الحالي للمبادرة</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="initiativeSpon2" id="initiativeSpon2" value = "'. $row["initiativeSpon2"] .'">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="initiativeSpon3">ذكر اي دعم او تعاون مقدم من جهات حكومية و/ أو أهليه منذ انطلاقة مبادرة</label>
                                        <div class="col-lg-9">
                                        <input type="text" class="form-control" name="initiativeSpon3" id="initiativeSpon3" value = "'. $row["initiativeSpon3"] .'">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="initiativeSpon4">ابراز حجم العنصر والمستوى التطوعي المطلوب في تنفيذ المبادرة من خدمات او افراد او مؤسسات</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="initiativeSpon4" id="initiativeSpon4" value = "'. $row["initiativeSpon4"] .'">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header" style="color: #055d9b; background-color: #d7d49f;">
                                    <h3 class="mb-0 text-center">مستندات مطلوبة</h3>
                                </div>
                                <div class="card-body">
                                    <form class="form" role="form" autocomplete="off" method="post" action="do+updating+cor.php" enctype="multipart/form-data">
                                    <input type="text" hidden class="form-control" name="id" id="txtName" value = '. $row["id"] .'>
                                    <input type="text" hidden class="form-control" name="username" id="txtName" value = '. $row["username"] .'>
                                        <h5 class="text-center mb-5">ثلاثة شهادات او افادات - على الأقل - من جهات مختلفة تبرز الجودة في تنفيذ المبادرة والفائدة الاجتماعية والاقتصادية على الشريحة المستهدفة</h5>
                                        <div class="form-group row">';
                                        if($row["cer"] != $row['commRegister'] . "."){
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer">إفادة ١ (تم رفع ملف مسبقًا)</label>';
                                        }
                                        else {
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer">إفادة ١</label>';
                                        }  
                                           echo '<div class="col-lg-9">
                                                <label for="cer" class="btn btn-default  dar btn-block" style="background-color: #d8b92b;">اختر الملف</label>
                                                <input type="file" id="cer" name="cer" class="form-control" style="visibility:hidden">
                                            </div>
                                        </div>
                                        <div class="form-group row">';
                                        if($row["cer2"] != $row['commRegister'] . "."){
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer2">إفادة ٢ (تم رفع ملف مسبقًا)</label>';
                                        }
                                        else {
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer2">إفادة ٢</label>';
                                        }  
                                            echo '<div class="col-lg-9">
                                                <label for="cer2" class="btn btn-default  dar btn-block" style="background-color: #d8b92b;">اختر الملف</label>
                                                <input type="file" id="cer2" name="cer2" class="form-control" style="visibility:hidden">
                                            </div>
                                        </div>
                                        <div class="form-group row">';
                                        if($row["cer3"] != $row['commRegister'] . "."){
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer3">إفادة ٣ (تم رفع ملف مسبقًا)</label>';
                                        }
                                        else {
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer3">إفادة ٣</label>';
                                        }  
                                            echo '<div class="col-lg-9">
                                                <label for="cer3" class="btn btn-default  dar btn-block" style="background-color: #d8b92b;">اختر الملف</label>
                                                <input type="file" id="cer3" name="cer3" class="form-control" style="visibility:hidden">
                                            </div>
                                        </div>
                                        <div class="form-group row">';
                                        if($row["cer4"] != $row['commRegister'] . "."){
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer4">إفادة ٤ (تم رفع ملف مسبقًا)</label>';
                                        }
                                        else {
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer4">إفادة ٤</label>';
                                        } 
                                            echo '<div class="col-lg-9">
                                                <label for="cer4" class="btn btn-default  dar btn-block" style="background-color: #d8b92b;">اختر الملف</label>
                                                <input type="file" id="cer4" name="cer4" class="form-control" style="visibility:hidden">
                                            </div>
                                        </div>
                                        <div class="form-group row">';
                                        if($row["cer5"] != $row['commRegister'] . "."){
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer5">إفادة ٥ (تم رفع ملف مسبقًا)</label>';
                                        }
                                        else {
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer5">إفادة ٥</label>';
                                        } 
                                            echo '<div class="col-lg-9">
                                                <label for="cer5" class="btn btn-default  dar btn-block" style="background-color: #d8b92b;">اختر الملف</label>
                                                <input type="file" id="cer5" name="cer5" class="form-control" style="visibility:hidden">
                                            </div>
                                        </div>
                                </div>
                                <div class="card-header" style="color: #055d9b; background-color: #d7d49f;">
                                    <h3 class="mb-0 text-center">مستندات اختيارية</h3>
                                </div>
                                <div class="card-body">
                                    <form class="form" role="form" autocomplete="off" method="post" action="do+updating+cor.php" enctype="multipart/form-data">
                                    <input type="text" hidden class="form-control" name="id" id="txtName" value = '. $row["id"] .'>
                                    <input type="text" hidden class="form-control" name="username" id="txtName" value = '. $row["username"] .'>
                                        <div class="form-group row">';
                                        if($row["cer6"] != $row['commRegister'] . "."){
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer6">نسخه عن شهادات تقدير حصلت عليها المبادرة من جهات مختلفة (تم رفع ملف مسبقًا)</label>';
                                        }
                                        else {
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer6">نسخه عن شهادات تقدير حصلت عليها المبادرة من جهات مختلفة</label>';
                                        } 
                                           echo '<div class="col-lg-9">
                                                <label for="cer6" class="btn btn-default  dar btn-block" style="background-color: #d8b92b;">اختر الملف</label>
                                                <input type="file" id="cer6" name="cer6" class="form-control" style="visibility:hidden">
                                            </div>
                                        </div>
                                        <div class="form-group row">';
                                        if($row["cer7"] != $row['commRegister'] . "."){
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer7">نسخه ٢ عن شهادات تقدير حصلت عليها المبادرة من جهات مختلفة (تم رفع ملف مسبقًا)</label>';
                                        }
                                        else {
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer7">نسخه ٢ عن شهادات تقدير حصلت عليها المبادرة من جهات مختلفة</label>';
                                        } 
                                            echo '<div class="col-lg-9">
                                                <label for="cer7" class="btn btn-default  dar btn-block" style="background-color: #d8b92b;">اختر الملف</label>
                                                <input type="file" id="cer7" name="cer7" class="form-control" style="visibility:hidden">
                                            </div>
                                        </div>
                                        <div class="form-group row">';
                                        if($row["cer8"] != $row['commRegister'] . "."){
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer8">صور او مطبوعات تبرز وتشيد بنشاطات وانجازات المبادرة (تم رفع ملف مسبقًا)</label>';
                                        }
                                        else {
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer8">صور او مطبوعات تبرز وتشيد بنشاطات وانجازات المبادرة</label>';
                                        } 
                                           echo '<div class="col-lg-9">
                                                <label for="cer8" class="btn btn-default  dar btn-block" style="background-color: #d8b92b;">اختر الملف</label>
                                                <input type="file" id="cer8" name="cer8" class="form-control" style="visibility:hidden">
                                            </div>
                                        </div>
                                        <div class="form-group row">';
                                        if($row["cer9"] != $row['commRegister'] . "."){
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer9">صور او مطبوعات تبرز وتشيد بنشاطات وانجازات المبادرة (تم رفع ملف مسبقًا)</label>';
                                        }
                                        else {
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer9">صور او مطبوعات تبرز وتشيد بنشاطات وانجازات المبادرة</label>';
                                        } 
                                           echo '<div class="col-lg-9">
                                                <label for="cer9" class="btn btn-default  dar btn-block" style="background-color: #d8b92b;">اختر الملف</label>
                                                <input type="file" id="cer9" name="cer9" class="form-control" style="visibility:hidden">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="video">فيديو يبرز ويشيد بنشاطات وانجازات المبادرة</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="video" id="video" value = "'. $row["video"] .'">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="video2">فيديو ٢ يبرز ويشيد بنشاطات وانجازات المبادرة</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="video2" id="video2" value = "'. $row["video2"] .'">
                                            </div>
                                        </div>
                                        <div class="form-group row">';
                                        if($row["cer10"] != $row['commRegister'] . "."){
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer10">حساب الايرادات والمصاريف المتعلقة بالمبادرة للسنتين الماضيتين (تم رفع ملف مسبقًا)</label>';
                                        }
                                        else {
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer10">حساب الايرادات والمصاريف المتعلقة بالمبادرة للسنتين الماضيتين</label>';
                                        } 
                                           echo '<div class="col-lg-9">
                                                <label for="cer10" class="btn btn-default  dar btn-block" style="background-color: #d8b92b;">اختر الملف</label>
                                                <input type="file" id="cer10" name="cer10" class="form-control" style="visibility:hidden">
                                            </div>
                                        </div>
                                        <div class="form-group row">';
                                        if($row["cer11"] != $row['commRegister'] . "."){
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer11">حساب الايرادات والمصاريف المتعلقة بالمبادرة للسنتين الماضيتين (تم رفع ملف مسبقًا)</label>';
                                        }
                                        else {
                                            echo '<label class="col-lg-3 col-form-label form-control-label text-center" for="cer11">حساب الايرادات والمصاريف المتعلقة بالمبادرة للسنتين الماضيتين</label>';
                                        } 
                                           echo '<div class="col-lg-9">
                                                <label for="cer11" class="btn btn-default  dar btn-block" style="background-color: #d8b92b;">اختر الملف</label>
                                                <input type="file" id="cer11" name="cer11" class="form-control" style="visibility:hidden">
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <div class="form-group row">
                                            <div class="col-lg-12 text-center">
                                                <input type="submit" class="btn btn-lg text-center" style="color: #055d9b; background-color: #d7d49f;" value="تحديث">
                                            </div>
                                        </div>
                                </div>
    
                            </div>
                        </div>
                        </form>
                    </div>
                


                ';
            }
                  
         }

        

    ?>

     

     
    
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