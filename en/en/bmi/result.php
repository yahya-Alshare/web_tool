<!DOCTYPE html>
<html lang="ar">

<!-- Mirrored from www.un-web.com/tools/bmi/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Jun 2023 14:02:49 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset='UTF-8'>
    <title>حساب الوزن المثالي - حساب كتلة الجسم - BMI</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/tool-style.css">



    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="حساب الوزن المثالي للطول الخاص بك من خلال حساب كتلة الجسم باستخدام حاسبة الوزن المثالي الإلكترونية" />
    <meta property="og:site_name" content="مملكة الويب" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="index.html" />
    <meta property="og:title" content="حساب الوزن المثالي - حساب كتلة الجسم - BMI" />
    <meta property="og:image" content="../theme/appImage/bmi.webp" />
    <meta property="og:description" content="حساب الوزن المثالي للطول الخاص بك من خلال حساب كتلة الجسم باستخدام حاسبة الوزن المثالي الإلكترونية" />
    <link rel="canonical" href="index.html">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="حساب الوزن المثالي - حساب كتلة الجسم - BMI" />
    <meta name="twitter:image" content="../theme/appImage/bmi.webp" />
    <meta name="twitter:description" content="حساب الوزن المثالي للطول الخاص بك من خلال حساب كتلة الجسم باستخدام حاسبة الوزن المثالي الإلكترونية" />
    <meta property="fb:pages" content="1590413411227023" />
    <meta property="fb:admins" content="100001226807746" />
    <base target="_top">
    <meta name="theme-color" content="#0e3650">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2P9HGPGCGE" type="c0a474511b127d8a7af81b58-text/javascript"></script>
    <script data-cfasync="false">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-2P9HGPGCGE');
    </script>
    <script data-cfasync="false">
        function DlCopy(id, target = 'textContent') {
            var inp = document.createElement('textarea');
            document.body.appendChild(inp);
            if (target == 'textContent')
                inp.value = document.getElementById(id).textContent;
            if (target == 'value')
                inp.value = document.getElementById(id).value;

            inp.select();
            document.execCommand('copy', false);
            inp.remove();
        }



        function isVisible(ele) {
            if (!ele) return false;
            const {
                top,
                bottom
            } = ele.getBoundingClientRect();
            const vHeight = (window.innerHeight || document.documentElement.clientHeight);

            return (
                (top > 0 || bottom > 0) &&
                top < vHeight
            );
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [

                {
                    "@type": "ListItem",
                    "position": 1,
                    "item": {
                        "@id": "https://www.un-web.com/tools/",
                        "name": "أدوات متعددة"
                    }
                }, {
                    "@type": "ListItem",
                    "position": 2,
                    "item": {
                        "@id": "https://www.un-web.com/tools/bmi/",
                        "name": "حساب الوزن المثالي - حساب كتلة الجسم - BMI"
                    }
                }

            ]
        }
    </script>
</head>


<div class="box text-center" id="result">
  <?php
  $weight = '';
  $height = '';
  $bmi = '';
  $bodyType = '';
  $ex = '';

  if (isset($_POST['submit'])) {
      $weight = $_POST['w'];
      $height = $_POST['h'] / 100;
      $bmi = calculateBMI($weight, $height);

      if ($bmi < 18.5) {
          $bodyType = "Underweight";
          $ex = "It is recommended to gain weight.";
      } elseif ($bmi >= 18.5 && $bmi < 25) {
          $bodyType = "Normal weight";
          $ex = "Maintain your current weight.";
      } elseif ($bmi >= 25 && $bmi < 30) {
          $bodyType = "Overweight";
          $ex = "It is recommended to lose weight.";
      } else {
          $bodyType = "Obese";
          $ex = "Significant weight loss is recommended.";
      }
  }
  ?>

  <h2>Inputs</h2>
  <p>
    Weight: <?php echo $weight; ?><br>
    Height: <?php echo $height; ?> <br>
  </p>
  <h2>Your Body Status</h2>
  <span class="text-red text-large"><?php echo $bodyType; ?></span>
  <br>
  Your Body Mass Index (BMI) is:
  <span class="text-red"> <?php echo $bmi; ?></span>
  <br>
  <span class="text-large">Take care of yourself</span><br>
  <span class="text-red"><?php echo $ex; ?> </span>
  <p></p>
</div>

<?php
function calculateBMI($weight, $height)
{
    $bmi = $weight / ($height * $height);
    return round($bmi, 2); // Round BMI to 2 decimal places
}
?>


<!-- Mirrored from www.un-web.com/tools/bmi/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Jun 2023 14:02:50 GMT -->

</html>