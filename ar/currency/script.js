

  fetch("https://api.currencyfreaks.com/v2.0/rates/latest?apikey=f66fa5cdf3da4b6fb455a23b0b2e2626")
    .then((result) => {
      // console.log(result);
      let myData = result.json();
      // console.log(myData);
      return myData;
    })
    .then((currency) => {
     
      // العثور على جميع العناصر <td>
    var tdElements = document.getElementsByTagName('td');
  
  // التكرار على العناصر والوصول إلى العنصر الثاني في كل صف
  for (var i = 1; i < tdElements.length; i += 2) {
    var secondTd = tdElements[i];

    secondTd.style.color = "#0c598c";
    secondTd.style.fontSize = "16px";
    secondTd.style.display = "block";
    
    secondTd.innerText = secondTd.innerHTML + "\n"+   +currency.rates[secondTd.innerText]
    
  }
  

    });
    
