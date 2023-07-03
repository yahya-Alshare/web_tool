<?php
// if (isset($_POST['submit'])) {
//     $day = $_POST['dd'];
//     $month = $_POST['mm'];
//     $year = $_POST['yyyy'];

//     // التحقق من صحة التاريخ الهجري
//     if (checkdate($month, $day, $year)) {
//         // تحويل التاريخ الهجري إلى تاريخ ميلادي
//         $hijriDate = $year . '-' . $month . '-' . $day;
//         $gregorianDate = hijriToGregorian($hijriDate);

//         // عرض التاريخ الميلادي
//         echo "التاريخ الميلادي: " . $gregorianDate;
//     } else {
//         // رسالة خطأ في حالة إدخال تاريخ هجري غير صحيح
//         echo "تاريخ هجري غير صحيح";
//     }
// }


// function hijriToGregorian($hijriDate)
// {
//     $hijriParts = explode('/', $hijriDate);
    
//     $day = (int)$hijriParts[0];
//     $month = (int)$hijriParts[1];
//     $year = (int)$hijriParts[2];
    
//     $hijriTimestamp = mktime(0, 0, 0, $month, $day, $year);
//     $gregorianDate = date('d/m/Y', $hijriTimestamp);
    
//     return $gregorianDate;
// }
function hijriToGregorian($hijriDate)
{
    $hijriParts = explode('/', $hijriDate);

    $day = (int)$hijriParts[0];
    $month = (int)$hijriParts[1];
    $year = (int)$hijriParts[2];

    $hijriDateTime = new DateTime();
    $hijriDateTime->setDate($year, $month, $day);
    $hijriDateTime->setTime(0, 0, 0);

    $hijriCalendar = IntlCalendar::createInstance('Asia/Riyadh', 'ar_SA');
    $hijriCalendar->set($year, $month - 1, $day);
    $gregorianCalendar = IntlGregorianCalendar::fromDateTime($hijriDateTime, 'Gregorian');

    return $gregorianCalendar->toDateTime()->format('d/m/Y');
}
$hijriDate = '01/01/1444';
$gregorianDate = hijriToGregorian($hijriDate);
echo $gregorianDate; // سيطبع 09/09/2022


?>
