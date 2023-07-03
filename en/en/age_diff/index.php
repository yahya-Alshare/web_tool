<!DOCTYPE html>
<html lang="ar">

<!-- Mirrored from www.un-web.com/tools/age_diff/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Jun 2023 14:03:00 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset='UTF-8'>
    <title>حساب فرق العمر بين شخصين</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/tool-style.css">


    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="حساب فرق العمر بين الزوجين أو بين أي شخصين بالتاريخ الميلادي أو بالتاريخ الهجري" />
    <meta property="og:site_name" content="مملكة الويب" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="index.html" />
    <meta property="og:title" content="حساب فرق العمر بين شخصين" />
    <meta property="og:image" content="../theme/appImage/age_diff.webp" />
    <meta property="og:description" content="حساب فرق العمر بين الزوجين أو بين أي شخصين بالتاريخ الميلادي أو بالتاريخ الهجري" />
    <link rel="canonical" href="index.html">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="حساب فرق العمر بين شخصين" />
    <meta name="twitter:image" content="../theme/appImage/age_diff.webp" />
    <meta name="twitter:description" content="حساب فرق العمر بين الزوجين أو بين أي شخصين بالتاريخ الميلادي أو بالتاريخ الهجري" />
    <meta property="fb:pages" content="1590413411227023" />
    <meta property="fb:admins" content="100001226807746" />
    <base target="_top">
    <meta name="theme-color" content="#0e3650">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2P9HGPGCGE" type="f1b15cbd5deb728ca82b1725-text/javascript"></script>
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
                        "@id": "https://www.un-web.com/tools/age_diff/",
                        "name": "حساب فرق العمر بين شخصين"
                    }
                }

            ]
        }
    </script>
</head>

<div class='box text-center' id='start'>
  <h2>Calculate Age Difference Between Two Individuals or Couples</h2>
  <?php
    if (isset($_POST["submit_1"])) {
      $birthdate_1 = $_POST["yyyy"] . "-" . $_POST["mm"] . "-" . $_POST["dd"];
      echo "Birthdate of Person 1: $birthdate_1</br>";

      $birthdate_2 = $_POST["tyyyy"] . "-" . $_POST["tmm"] . "-" . $_POST["tdd"];
      echo "Birthdate of Person 2: $birthdate_2</br>";

      echo "Age Difference (Years): " . abs($_POST["yyyy"] - $_POST["tyyyy"]) . "<br>";
      echo "Age Difference (Months): " . abs($_POST["mm"] - $_POST["tmm"]) . "<br>";
      echo "Age Difference (Days): " . abs($_POST["dd"] - $_POST["tdd"]) . "<br>";
    }
  ?>

  <script type="text/javascript">
    function checkTType() {
      if (document.getElementById("ttype_g").checked == true) {
        document.getElementById("tform_g").style.display = "block";
        document.getElementById("tform_h").style.display = "none";
      }

      if (document.getElementById("ttype_h").checked == true) {
        document.getElementById("tform_g").style.display = "none";
        document.getElementById("tform_h").style.display = "block";
      }
    }

    checkTType();
  </script>
</div>


<!-- Mirrored from www.un-web.com/tools/age_diff/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Jun 2023 14:03:01 GMT -->

</html>