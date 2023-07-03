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
                Community size: <?php echo "$sampleSize"?> <br>
        <span class="result">
        The sample size is: <?php echo "$randomNumber"?> </span> <br><br>
        <div>

     

 <footer>

 </footer>
 <script src="../assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="aad25d294384eb2f18ba7868-|49" defer=""></script>
</body>
</html>