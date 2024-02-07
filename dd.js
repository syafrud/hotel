$(function () {
  ("use strict");
  $(function () {
    const DateTime = easepick.DateTime;
    const bookedDates = [
      ["2023-09-01", "2023-09-04"],
      "2023-09-07",
      ["2023-10-11", "2023-10-17"],
    ].map((d) => {
      if (d instanceof Array) {
        const start = new DateTime(d[0], "YYYY-MM-DD");
        const end = new DateTime(d[1], "YYYY-MM-DD");

        return [start, end];
      }

      return new DateTime(d, "YYYY-MM-DD");
    });
    const picker = new easepick.create({
      element: document.getElementById("date_booking"),
      css: ["./css/datepicker_v2.css"],
      lang: "en-EN",
      calendars: 2,
      grid: 2,
      zIndex: 10,
      inline: true,
      plugins: ["LockPlugin"],
      LockPlugin: {
        minDate: new Date(),
        minDays: 2,
        inseparable: true,
        filter(date, picked) {
          if (picked.length === 1) {
            const incl = date.isBefore(picked[0]) ? "[)" : "(]";
            return (
              !picked[0].isSame(date, "day") && date.inArray(bookedDates, incl)
            );
          }

          return date.inArray(bookedDates, "[)");
        },
      },
    });
  });
});
