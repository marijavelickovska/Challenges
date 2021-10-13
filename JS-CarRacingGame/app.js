// kratko izvestuvanje: ne vidov deka ima img za trakata za trkanje (raceTrack.jpg),
// veke ja napraviv trakata so css, za da ne menuvam se,
// go ostaviv vaka, se nadevam ne e problem

$(function () {
  class carRace {
    constructor(result, speed) {
      this.result = result;
      this.speed = speed;
    }
  }

  let results1 =
    localStorage.getItem("results1") != undefined
      ? JSON.parse(localStorage.getItem("results1"))
      : [];
  let results2 =
    localStorage.getItem("results2") != undefined
      ? JSON.parse(localStorage.getItem("results2"))
      : [];

  createList1(results1);
  createList2(results2);

  let count = 3;

  function countdown() {
    if (count >= 0) {
      $("#countdown").text(count);
      count--;
      $("#race").css("opacity", 0.5);
      setTimeout(countdown, 700);
    } else {
      $("#countdown").text("");
      $("#race").css("opacity", 1);
    }
  }

  $(".race").on("click", function (e) {
    countdown();
    setTimeout(function () {
      race();
    }, 3000);
  });

  let windowsWidth = $(window).width() - 260;

  function race() {
    let speedCar1 = Math.floor(Math.random() * 3000 + 1);
    let speedCar2 = Math.floor(Math.random() * 3000 + 1);

    let resultCar1 = speedCar1 < speedCar2 ? "FIRST" : "SECOND";
    let resultCar2 = speedCar2 < speedCar1 ? "FIRST" : "SECOND";

    $(".car1").animate(
      { marginLeft: windowsWidth },
      {
        duration: speedCar1,
        start: function () {
          $(".startOver").attr("disabled", true);
          $(".race").attr("disabled", true);
        },
        complete: function () {
          $("#finish").show();
          $(".startOver").attr("disabled", false);
          $(".race").attr("disabled", false);

          let res1 = new carRace(resultCar1, speedCar1);
          results1.push(res1);
          localStorage.setItem("results1", JSON.stringify(results1));
          createList1(results1);
        },
      }
    );

    $(".car2").animate(
      { marginLeft: windowsWidth },
      {
        duration: speedCar2,
        start: function () {
          $(".startOver").attr("disabled", true);
          $(".race").attr("disabled", true);
        },
        complete: function () {
          $("#finish").show();
          $(".startOver").attr("disabled", false);
          $(".race").attr("disabled", false);

          let res2 = new carRace(resultCar2, speedCar2);
          results2.push(res2);
          localStorage.setItem("results2", JSON.stringify(results2));

          createList2(results2);
        },
      }
    );
  }

  function createList1(results1) {
    let list = "";
    results1.forEach((res1) => {
      list += `
        <p class="boxResults">Finished in: <span class="white bold">${res1.result}</span> place with a time of: <span class="white bold">${res1.speed}</span> milliseconds!</p>`;
    });
    $(".resultsCar1").html(list);
  }

  function createList2(results2) {
    let list = "";
    results2.forEach((res2) => {
      list += `
        <p class="boxResults">Finished in: <span class="red bold">${res2.result}</span> place with a time of: <span class="red bold">${res2.speed}</span> milliseconds!</p>`;
    });
    $(".resultsCar2").html(list);
  }

  function showLastRase() {
    let lastRace1 = $(".resultsCar1 p:last-child").html();
    $(".lastCar1").html(lastRace1);
    let lastRace2 = $(".resultsCar2 p:last-child").html();
    $(".lastCar2").html(lastRace2);

    if ($(".resultsCar1").html() !== "" || $(".resultsCar2").html() !== "") {
      $(".lastRace").show();
      return;
    }
  }

  $(window).on("load", function () {
    showLastRase();
    results1 = [];
    results2 = [];

    $(".resultsCar1").html("");
    $(".resultsCar2").html("");
  });

  $(".startOver").on("click", function (e) {
    $(".car1").css("margin-left", "0px");
    $(".car2").css("margin-left", "0px");
    count = 3;
    $("#finish").hide();
    $(".startOver").attr("disabled", true);
    $(".race").attr("disabled", false);
  });
});
