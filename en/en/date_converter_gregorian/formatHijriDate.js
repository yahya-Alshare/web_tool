const months = [
  "Muharram",
  "Safar",
  "Rabi al-Awwal",
  "Rabi al-Thani",
  "Jumada al-Awwal",
  "Jumada al-Thani",
  "Rajab",
  "Shaban",
  "Ramadan",
  "Shawwal",
  "Dhu al-Qadah",
  "Dhu al-Hijjah (month of Hajj)",
];

function formatHijriDate(hijriDate) {
  const monthName = months[hijriDate.month - 1];
  return `${hijriDate.day} ${monthName} ${hijriDate.year}`;
}

module.exports = formatHijriDate;
