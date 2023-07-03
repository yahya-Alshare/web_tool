function calculateHijriDate(jd) {
  const daysSinceEpoch = Math.floor(jd - 1948439.5);
  const year = Math.floor((daysSinceEpoch - 1) / 354.36607) + 1;
  const daysInYear = Math.ceil(
    daysSinceEpoch - (29.5 + (year - 1) * 354.36607)
  );
  const month = Math.ceil(daysInYear / 29.5);
  const day = Math.ceil(daysInYear - (month - 1) * 29.5);
  return { year, month, day };
}

module.exports = calculateHijriDate;
