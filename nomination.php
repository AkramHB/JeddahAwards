<!DOCTYPE html>
<html lang="en" >

<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="UTF-8">
<meta name="description" content="">
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

<title></title>

<style>
    @import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);
* {
    font-family: 'Droid Arabic Kufi', serif !important;
    font-size: 16px;
    font-weight: 600;
}
    </style>


</head>

<body dir = "rtl">

              <a href="http://www.jeddahawards.org"><img class="img-fluid d-none d-md-block mb-5" style="padding-bottom: 0em;" src="assets/images/header.png"></a>
              <a href="http://www.jeddahawards.org"><img class="img-fluid d--block d-md-none mb-5" style="padding-bottom: 0em;" src="assets/images/headermobile.png"></a>

<?php

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
    

 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$mobile = mysqli_real_escape_string($link, $_REQUEST['mobile']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$nominatedName = mysqli_real_escape_string($link, $_REQUEST['nominatedName']);
$nomiatedEmail = mysqli_real_escape_string($link, $_REQUEST['nomiatedEmail']);
$initiativeName = mysqli_real_escape_string($link, $_REQUEST['initiativeName']);
$initiativeCategory = mysqli_real_escape_string($link, $_REQUEST['initiativeCategory']); 
$initiativeInfo = mysqli_real_escape_string($link, $_REQUEST['initiativeInfo']);

     

if($name == "" || $mobile == "" || $email == "" || $nominatedName == "" || $nomiatedEmail == "" || $initiativeName == "" || $initiativeCategory == ""){
              echo "<div class = 'container' style = 'position:absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);'><h3 style = 'color: red;'>حدث خطأ ما، الرجاء التأكد من ادخال جميع البيانات بشكل صحيح</h3></div>";
              die();
              }
    

else{
$sql = "INSERT INTO nomination (name, mobile, email, nominated_name, nominated_email, initiative_name, initiative_field, initiative_details) VALUES ('$name', '$mobile', '$email', '$nominatedName', '$nomiatedEmail', '$initiativeName','$initiativeCategory', '$initiativeInfo')";



// attempt insert query execution

if(mysqli_query($link, $sql)){
    
    $to = $nomiatedEmail;
    $subject = 'تم ترشيحكم في جائزة جدة للابداع';
    $text = 'عزيزي ' .  $nominatedName . "<br>";
    $text .= 'لقد تم ترشيحكم في جائزة جدة للابداع لعام ١٤٤٠ ' . "<br>";
    $text .= 'بيانات ترشيحكم كالآتي: ' . "<br>";
    $text .= 'اسم المرشح ' .  $name . "<br>";
    $text .= 'رقم الجوال ' .  $mobile . "<br><br>";
    $text .= '<div>بإمكانك الترشح بمبادرات الأفراد أو التسجيل كمؤسسة على الرابط التالي: </div>';
    $text .= '<div>http://jeddahawards.org/register+your+initiative.html</div>';



    $from = "info@jeddahawards.org";
    // Always set content-type when sending HTML email
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type:text/html;charset=UTF-8' . "\r\n";

    // More headers
    $headers .= 'From: ' . $from . "\r\n";
    
    $header=$headers;
    
    mail($to, $subject, $text, $header);
    
    /*include("includeSettings.php");
    
        $myMobile = "Jeddahtawteen";							//رقم الجوال (إسم المستخدم) في موبايلي
        $password = "adgj1235";							//كلمة المرور في موبايلي

        $numbers = $mobile;							//يجب كتابة الرقم بالصيغة الدولية مثل 96650555555 وعند الإرسال إلى أكثر من رقم يجب وضع الفاصلة (,) وهي التي عند حرف الواو بين كل رقمين 


        $sender = "Jeddah Tawteen";					//اسم المرسل الذي سيظهر عند ارسال الرساله، ويتم تشفيره إلى  بشكل تلقائي إلى نوع التشفير (urlencode)

                                                //لا يوجد عدد محدد من الأرقام التي يمكنك الإرسال لها في حال تم الإرسال من خلال بوابة fsockpoen  أو بوابة CURL،
                                                //ولكن في حال تم الإرسال من خلال بوابة fOpen ، فإنه يمكنك الإرسال إلى 120 رقم فقط في كل عملية إرسال

        $msg = "تم تسجيلكم في برنامج جدة توطين بنجاح";		/*
                                                نص الرسالة
                                                الرساله العربيه  70 حرف
                                                الرساله الانجليزيه 160 حرف
                                                في حال ارسال اكثر من رساله عربيه فان الرساله الواحده تحسب 67
                                                والرساله الانجليزي 153
                                                */

        /*$MsgID = rand(1,99999);					//رقم عشوائي يتم إرفاقه مع الإرساليه، في حال الرغبة بإرسال نفس الإرساليه في أقل من ساعه من إرسال الرساله الأولى.
                                                //موقع موبايلي يمنع تكرار إرسال نفس الرساله خلال ساعه من إرسالها، إلا في حال تم إرسال قيمة مختلفه مع كل إرساليه.

        $timeSend = 0;							//لتحديد وقت الإرساليه - 0 تعني الإرسال الآن
                                                //الشكل القياسي للوقت هو hh:mm:ss

        $dateSend = 0;							//لتحديد تاريخ الإرساليه - 0 تعني الإرسال الآن
                                                //الشكل القياسي للتاريخ هو mm:dd:yyyy

        $deleteKey = 152485;					//يمكنك من خلال هذه القيمة  القيمه يمكنك من خلالها حذف الرساله من خلال بوابة حذف الرسائل.
                                                //يمكنك تحديد رقم واحد لمجموعه من الإرساليات، بحيث يتم حذفها دفعه واحده.

        $resultType = 1;						//دالة تحديد نوع النتيجه الراجعه من البوابة
                                                //0: إرجاع نتيجة البوابة بشكل عددي
                                                //1: إرجاع نتيجة البوابة بشكل نصي											

        // دالة الإرسال
        sendSMS($myMobile, $password, $numbers, $sender, $msg, $MsgID, $timeSend, $dateSend, $deleteKey, $resultType);

        echo "<div>
             <a href='http://jeddahtawteen.org'><img class='img-fluid' style='padding-bottom: 0em;' src='../assets/images/header.jpg'></a>
        </div>";

        $sentence = '';
        $link = '';
        $features='http://jeddahtawteen.org/features.html';
        if($gender == 'male'){
            $sentence = 'المقابلات الشخصية للبرنامج التدريبي سوف تكون من يوم الاثنين ٢٤ ذو القعدة ١٤٣٩ هـ يوم الاثنين ٢ ذو الحجة ١٤٣٩ هـ يوميا من الساعة 10 صباحا الى ١ ظهرا  بمقر  البرنامج التدريبي لتوطين الوظائف بفرع جامعة جدة في الفيصلية ( بنين) 
            ) 
  
          ملاحظة: لا توجد مقابلات يومي الجمعة و السبت<br> 
            موقع المقابلات الشخصية';
            $link = 'https://maps.google.com/?q=21.580778,39.168953';
        }else {
            $sentence = 'المقابلات الشخصية النسائية للبرنامج التدريبي سوف تكون من يوم الثلاثاء  ١٨ ذو القعدة ١٤٣٩ هـ الى يوم الاثنين ٢ ذو الحجة ١٤٣٩ هـ يوميا من الساعة 10 صباحا الى 2 ظهرا  بالمقر النسائي للبرنامج التدريبي لتوطين الوظائف بفرع جامعة جدة في الفيصلية ( بنين) 

            يمكنكم الحضور خلال هذه الفترة لإجراء المقابلة<br> 
            موقع المقابلات الشخصية ';
            $link = 'https://maps.google.com/?q=21.580778,39.168953';
        }

        echo "<div class = 'container text-center my-5'><div class='alert alert-success' role='alert'>
                شكرًا لتسجيلكم معنا٬ من فضلك الرجاء الاطلاع على الجدول المخصص لكم <br> " . $sentence . "<br> <a href = '" . $link . "'>الموقع </a>   <br> وللإطلاع على مميزات الشركات الموظفة يمكنك زيارة الرابط التالي: <br> <a href='".$features."'> رابط المميزات </a> <br>
              </div></div>";

       /* echo "<div class = 'container text-center mt-5'>مواعيد الرسائل (رجال)
            <table class = 'table table-striped table-hover table-responsive text-center'>
            <thead class='thead-light'><tr><th scope='col'>م</th><th scope='col'>التاريخ</th><th scope='col'>نوع الرسالة</th><th scope='col'>الوسيلة</th><th scope='col'>المرسل إليهم</th></tr></thead>
            <tr><th scope='row'>1</th><td>24-10-1439</td><td>اخبار بموعد المقابلات</td><td>نصية - جوال</td><td>جميع المسجلين في المنصه</td></tr>
            <tr><th scope='row'>2</th><td>24-10-1439</td><td>اخبار بموعد المقابلات</td><td>البريد الالكتروني</td><td>جميع المسجلين في المنصه</td></tr>
            <tr><th scope='row'>3</th><td>25-10-1439</td><td>تذكيرية بموعد المقابلات</td><td>البريد الالكتروني</td><td>جميع المسجلين في المنصه</td></tr>
            <tr><th scope='row'>4</th><td>26-10-1439</td><td>تذكيرية بموعد المقابلات</td><td>البريد الالكتروني</td><td>جميع المسجلين في المنصه</td></tr>
            <tr><th scope='row'>5</th><td>27-10-1439</td><td>تذكيرية بموعد المقابلات</td><td>البريد الالكتروني</td><td>جميع المسجلين في المنصه</td></tr>
            <tr><th scope='row'>6</th><td>28-10-1439</td><td>تذكيرية بموعد المقابلات</td><td>البريد الالكتروني</td><td>جميع المسجلين في المنصه</td></tr>
            <tr><th scope='row'>7</th><td>2-11-1439</td><td>تذكيرية بموعد المقابلات</td><td>البريد الالكتروني</td><td>جميع المسجلين في المنصه</td></tr>
            <tr><th scope='row'>8</th><td>3-11-1439</td><td>تذكيرية بموعد المقابلات</td><td>البريد الالكتروني</td><td>جميع المسجلين في المنصه</td></tr>
            <tr><th scope='row'>9</th><td>4-11-1439</td><td>تذكيرية بموعد المقابلات</td><td>البريد الالكتروني</td><td>جميع المسجلين في المنصه</td></tr>
            <tr><th scope='row'>10</th><td>5-11-1439</td><td>تذكيرية بموعد المقابلات</td><td>البريد الالكتروني</td><td>جميع المسجلين في المنصه</td></tr>
            </table>
        </div>";*/

        /* echo "<div class = 'container text-center mt-5'>مواعيد الرسائل (رجال)
            <table class = 'table table-striped table-hover table-responsive text-center'>
            <thead class='thead-light'><tr><th scope='col'>م</th><th scope='col'>التاريخ</th><th scope='col'>نوع الرسالة</th><th scope='col'>الوسيلة</th><th scope='col'>المرسل إليهم</th></tr></thead>
            <tr><th scope='row'>1</th><td>24-10-1439</td><td>اخبار بموعد المقابلات</td><td>نصية - جوال</td><td>جميع المسجلين في المنصه</td></tr>
            <tr><th scope='row'>2</th><td>24-10-1439</td><td>اخبار بموعد المقابلات</td><td>البريد الالكتروني</td><td>جميع المسجلين في المنصه</td></tr>
            <tr><th scope='row'>3</th><td>25-10-1439</td><td>تذكيرية بموعد المقابلات</td><td>البريد الالكتروني</td><td>جميع المسجلين في المنصه</td></tr>
            <tr><th scope='row'>4</th><td>26-10-1439</td><td>تذكيرية بموعد المقابلات</td><td>البريد الالكتروني</td><td>جميع المسجلين في المنصه</td></tr>
            <tr><th scope='row'>5</th><td>27-10-1439</td><td>تذكيرية بموعد المقابلات</td><td>البريد الالكتروني</td><td>جميع المسجلين في المنصه</td></tr>
            <tr><th scope='row'>6</th><td>28-10-1439</td><td>تذكيرية بموعد المقابلات</td><td>البريد الالكتروني</td><td>جميع المسجلين في المنصه</td></tr>
            <tr><th scope='row'>7</th><td>2-11-1439</td><td>تذكيرية بموعد المقابلات</td><td>البريد الالكتروني</td><td>جميع المسجلين في المنصه</td></tr>
            <tr><th scope='row'>8</th><td>3-11-1439</td><td>تذكيرية بموعد المقابلات</td><td>البريد الالكتروني</td><td>جميع المسجلين في المنصه</td></tr>
            <tr><th scope='row'>9</th><td>4-11-1439</td><td>تذكيرية بموعد المقابلات</td><td>البريد الالكتروني</td><td>جميع المسجلين في المنصه</td></tr>
            <tr><th scope='row'>10</th><td>5-11-1439</td><td>تذكيرية بموعد المقابلات</td><td>البريد الالكتروني</td><td>جميع المسجلين في المنصه</td></tr>
            </table>
        </div>";*/

        echo "<div class = 'container text-center'><div class='alert alert-success text-center' role='alert'>
        لقد تم تسجيلكم بنجاح في جائزة جدة للابداع.
        </div>";
        echo "<div class = 'container text-center'><a class='btn btn-lg text-center' href='http://jeddahawards.org' role='button' style = 'color: #055d9b; background-color: #aea337;'>العودة إلي الصفحة الرئيسية</a></div></div>";

    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
 
// close connection
mysqli_close($link);
?>



</body>

</html>