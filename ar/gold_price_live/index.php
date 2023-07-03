<?php
// قم بتعديل هذه المتغيرات وفقًا لمتطلباتك
$apiUrl = 'https://api.example.com/gold/price';
$apiKey = 'YOUR_API_KEY';

// إعداد متطلبات الاتصال
$options = [
    'http' => [
        'header' => "Authorization: Bearer $apiKey"
    ]
];
$context = stream_context_create($options);

// استدعاء API للحصول على بيانات سعر الذهب
$response = file_get_contents($apiUrl, false, $context);

// تحقق من نجاح الاستجابة
if ($response !== false) {
    // تحويل الاستجابة إلى صيغة قابلة للقراءة
    $responseData = json_decode($response, true);

    // قراءة سعر الذهب من البيانات المستردة
    $goldPrice = $responseData['price'];

    // قم بعرض سعر الذهب
    echo "سعر الذهب: $goldPrice";
} else {
    echo "فشل في استرجاع بيانات سعر الذهب";
}
?>
