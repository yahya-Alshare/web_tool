<?php
// تحويل التاريخ الميلادي إلى هجري
$gdate = new \DateTime('2021-05-01');
$hdate = \GeniusTS\HijriDate\Date::fromDateTime($gdate);
echo $hdate->format('l j F Y') . "\n"; // يطبع "السبت 19 رمضان 1442"

// تحويل التاريخ الهجري إلى ميلادي
$hdate = new \GeniusTS\HijriDate\Hijri('1442-09-07');
$gdate = $hdate->toCarbon();
echo $gdate->format('l jS F Y') . "\n"; // يطبع "Saturday 17th April 2021"
?>