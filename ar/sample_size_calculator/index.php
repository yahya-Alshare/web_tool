<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <header>

    </header>


                               
    <?php
if(isset($_POST['n'])){
    $populationSize = 10000; // حجم المجتمع الكلي
    $sampleSize = $_POST['n']; // حجم العينة المدخلة

    if($sampleSize > $populationSize){
        echo "حجم العينة يجب أن يكون أقل من حجم المجتمع الكلي.";
    } else {
        $sample = array(); // مصفوفة تخزن العينة

        // توليد عينة عشوائية
        while(count($sample) < $sampleSize){
            $randomNumber = rand(1, $populationSize);
            if(!in_array($randomNumber, $sample)){
                $sample[] = $randomNumber;
            }
        }

        
    }
}
?>


            <div class="box text-center">
                <h2>النتيجة</h2>
                          حجم المجتمع: <?php echo "$sampleSize"?> <br>
        <span class="result">حجم العينة هو : <?php echo "$randomNumber"?> </span> <br><br>
        <div>

        <div class="box ">
<h2>تطبيق حساب حجم العينة</h2>
<p>هو تطبيق خاص بالباحثين الذي يريدون القيام بدراسات استقصائية حيث يقوم التطبيق من خلال معرفة حجم المجتمع الحقيقي القيام بعملية حساب حجم العينة المطلوب دراستها من هذا المجتمع الكبير بناء على معادلة احصائية خاصة، فمن البديهي أن الباحث لا يمكنه دراسة مجتمع ضخم عدد أفراده مائة الف شخص ولذلك يتم اخد عينة من هذا المجتمع ودراستها وتعميم النتائج على المجتمع ككل، فمجتمع عدد افراده 100000 سيكون حجم عينة دراسته هو 383 شخص فقط.</p>
<table class="table_a ">
<tbody><tr>
<th>مؤشر القيمة</th>
<th>ازدياد القيمة</th>
<th>نقصان القيمة</th>
</tr>
<tr class="text-center">
<td>حجم المجتمع</td>
<td><span class="text-red">الدقة تقل ⇩ </span></td>
<td><span class="result"> الدقة تزداد ⇧</span></td>
</tr>
<tr class="text-center">
<td>حجم العينة</td>
<td><span class="result"> الدقة تزداد ⇧</span></td>
<td><span class="text-red">الدقة تقل ⇩ </span></td>
</tr>
<tr class="text-center">
<td>مستوى الثقة</td>
<td><span class="result"> الدقة تزداد ⇧</span></td>
<td><span class="text-red">الدقة تقل ⇩ </span></td>
</tr>
<tr class="text-center">
<td>نسبة الخطأ</td>
<td><span class="text-red">الدقة تقل ⇩ </span></td>
<td><span class="result"> الدقة تزداد ⇧</span></td>
</tr>
</tbody></table>
</div>


 <footer>

 </footer>
 <script src="../assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="aad25d294384eb2f18ba7868-|49" defer=""></script>
</body>
</html>