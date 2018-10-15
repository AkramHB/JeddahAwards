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

        $sql = "SELECT * FROM individuals WHERE username='$un'";
        $result = $link->query($sql);
                  
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '

                    <div class = "container mt-5">
                        <form class="form" role="form" autocomplete="off" method="post" action="do+updating+ind.php" enctype="multipart/form-data">
                            <div class="container mt-5">
                                <div class="card card-outline-secondary">
                                    <div class="card-header" style="color: #055d9b; background-color: #d7d49f;">
                                        <h3 class="mb-0 text-center">المعلومات الشخصية</h3>
                                    </div>
                                    <div class="card-body">
                                    <input type="text" hidden class="form-control" name="id" id="txtName" value = '. $row["id"] .'>
                                    <input type="text" hidden class="form-control" name="username" id="txtName" value = '. $row["username"] .'>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="name">الاسم</label>
                                            <div class="col-lg-9">  
                                                <input type="text" class="form-control" name="name" id="txtName" value = "'. $row["name"] .'">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="idnum">رقم الهوية</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" id="idnum" name="idnum" placeholder=" " maxlength="10" value = "'. $row["idnum"] .'">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="job">الوظيفة</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" id="job" name="job" value = "'. $row["job"] .'">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="email">البريد الإلكتروني </label>
                                            <div class="col-lg-9">
                                                <input type="email" class="form-control" name="email" value = "'. $row["email"] .'">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="mobile">رقم الجوال</label>
                                            <div class="col-lg-9">
                                                <input type="tel" class="form-control" placeholder=" رقم الجوال  - مثال 966540869636" name="mobile" pattern="[0-9]{3}[0-9]{2}[0-9]{3}[0-9]{4}" value = "'. $row["mobile"] .'">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="phone">رقم الهاتف</label>
                                            <div class="col-lg-9">
                                                <input type="tel" class="form-control" name="phone" value = "'. $row["phone"] .'">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header" style="color: #055d9b; background-color: #d7d49f;">
                                        <h3 class="mb-0 text-center">معلومات وظيفية</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="company">جهة العمل</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="company" id="company" value = "'. $row["company"] .'">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="department">الإدارة/القسم</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="department" id="department" value = "'. $row["department"] .'">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="position">مسمى الوظيفة</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="position" id="position" value = "'. $row["position"] .'">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header" style="color: #055d9b; background-color: #d7d49f;">
                                        <h3 class="mb-0 text-center">التعريف بالمبادرة</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label text-center" for="initiativeName">اسم المبادرة</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="initiativeName" id="initiativeName" value = "'. $row["initiativeName"] .'">
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="city">المدينة التي انطلقت منها المبادرة</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="city" id="city" value = "'. $row["city"] .'">
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
                                    <h3 class="mb-0 text-center">مصدر التمويل</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="initiativeSponsor">جهة تمويل المبادرة</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="initiativeSponsor" id="initiativeSponsor" value = "'. $row["initiativeSponsor"] .'">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="manager" value = '. $row["manager"] .'>اسم المدير المباشر</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="manager" id="manager" value = "'. $row["manager"] .'">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="managerMobile">هاتفه</label>
                                        <div class="col-lg-9">
                                            <input type="tel" placeholder=" رقم الجوال  - مثال 966540869636" pattern="[0-9]{3}[0-9]{2}[0-9]{3}[0-9]{4}" class="form-control" name="managerMobile" id="managerMobile" value = '. $row["managerMobile"] .'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="companyManager">اسم مدير الجهة</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="companyManager" id="companyManager" value = "'. $row["companyManager"] .'">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="managerPosition">مسماه الوظيفي</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="managerPosition" id="managerPosition" value = "'. $row["managerPosition"] .'">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-center" for="officePhone">ارقام هواتف مكتبه</label>
                                        <div class="col-lg-9">
                                            <input type="tel" class="form-control" name="officePhone" id="officePhone" value = "'. $row["officePhone"] .'">
                                        </div>
                                    </div>
                                    <div class="form-group row">';
                                        if($row["ack"] != $row['idnum'] . "."){
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
                                    <h3 class="mb-0 text-center">مستندات مطلوبة</h3>
                                </div>
                                <div class="card-body">
                                    <form class="form" role="form" autocomplete="off" method="post" action="do+updating+ind.php" enctype="multipart/form-data">
                                    <input type="text" hidden class="form-control" name="id" id="txtName" value = '. $row["id"] .'>
                                    <input type="text" hidden class="form-control" name="username" id="txtName" value = '. $row["username"] .'>
                                        <h5 class="text-center mb-5">ثلاثة شهادات او افادات - على الأقل - من جهات مختلفة تبرز الجودة في تنفيذ المبادرة والفائدة الاجتماعية والاقتصادية على الشريحة المستهدفة</h5>
                                        <div class="form-group row">';
                                        if($row["cer"] != $row['idnum'] . "."){
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
                                        if($row["cer2"] != $row['idnum'] . "."){
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
                                        if($row["cer3"] != $row['idnum'] . "."){
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
                                        if($row["cer4"] != $row['idnum'] . "."){
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
                                        if($row["cer5"] != $row['idnum'] . "."){
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
                                    <form class="form" role="form" autocomplete="off" method="post" action="do+updating+ind.php" enctype="multipart/form-data">
                                    <input type="text" hidden class="form-control" name="id" id="txtName" value = '. $row["id"] .'>
                                    <input type="text" hidden class="form-control" name="username" id="txtName" value = '. $row["username"] .'>
                                        <div class="form-group row">';
                                        if($row["cer6"] != $row['idnum'] . "."){
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
                                        if($row["cer7"] != $row['idnum'] . "."){
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
                                        if($row["cer8"] != $row['idnum'] . "."){
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
                                        if($row["cer9"] != $row['idnum'] . "."){
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
                                        </div><br>
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