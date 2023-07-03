// تحديد جميع العناصر <td> الأولى في الصفوف
var firstTds = document.querySelectorAll('tr td:first-child');
var ctunty = document.getElementById('ctunty').innerHTML

// إضافة عنصر <input> من نوع number إلى كل عنصر <td> الأول
for (var i = 0; i < firstTds.length; i++) {
  var td = firstTds[i];
  // إنشاء عنصر <input> من نوع number
  var inputElement = document.createElement("input");
  var pElement = document.createElement("p");
  var btntElement = document.createElement("button");
  inputElement.type = "number";
  btntElement.innerHTML = "تحويل"
  
  td.querySelector("a").removeAttribute("href")
  btntElement.setAttribute("onclick", "convertCurrency(this)")

  td.appendChild(inputElement);
  td.appendChild(btntElement);
  td.appendChild(pElement);
}

function convertCurrency(button) {
  var inputElement = button.previousSibling;
  var inputValue = inputElement.value;

  var td = button.parentNode;
  var tds = td.parentNode.getElementsByTagName('td');
  var secondTdContent = tds[1].innerHTML;

  console.log("قيمة العنصر داخل الـ input: ", inputValue);
  console.log("المحتوى النصي للـ td الثاني: ", secondTdContent);

  fetch("https://api.currencyfreaks.com/v2.0/rates/latest?apikey=f66fa5cdf3da4b6fb455a23b0b2e2626")
    .then((result) => result.json())
    .then((currency) => {
      const coinValue = currency.rates[ctunty];
      const coinValueto = currency.rates[secondTdContent];
      console.log("قيمة العملة: ", coinValue);

      if (!isNaN(inputValue) && !isNaN(coinValue)) {
        var convertedValue = inputValue / coinValue;
        var corunvalue =  convertedValue  * coinValueto
        var pElement = td.querySelector("p")

        pElement.innerHTML = "القيمة المحولة: " + corunvalue.toFixed(2);

       

        console.log("القيمة محولة: ", corunvalue);
        
      }
    });
}
