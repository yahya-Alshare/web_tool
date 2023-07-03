const calculateJulianDay = require("./calculateJulianDay");
const calculateHijriDate = require("./calculateHijriDate");
const formatHijriDate = require("./formatHijriDate");

function gregorianToHijri(gregorianDate) {
  const jd = calculateJulianDay(gregorianDate);
  const hijriDate = calculateHijriDate(jd);
  const formattedDate = formatHijriDate(hijriDate);
  return formattedDate;
}

module.exports = gregorianToHijri;
