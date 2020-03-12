//* Load
jQuery(window).bind("load", function() {
  //priceMatchHeight();
  //replaceSvgToInline();
  // damaxStickyHeader();
  damaxToggleMenu();
  //setupMobileMenu();
});

//* Resize
jQuery(window).resize(function() {
  //setupMobileMenu();
  //priceMatchHeight();
});

//* Scroll
jQuery(window).scroll(function() {
  // damaxStickyHeader();
});

//* Register
function damaxRegister() {
  // damaxBackToTop();
  // damaxToggleMenu();
  //priceMatchHeight();
  //replaceSvgToInline();
  //damaxToggleMenu();
  // damaxStickyHeader();
  //setupMobileMenu();
}
damaxRegister();
//** BEG CUSTOM FUNCTIONS **//

function priceMatchHeight() {
  jQuery(function() {
    //jQuery('.news-block p').matchHeight();
  });
}

jQuery(".vote-btn-list li a.tab-link").on("click", function(e) {
  e.preventDefault();
  var tab_id = jQuery(this).attr("data-tab");

  jQuery(".vote-btn-list li a.tab-link").removeClass("current");
  jQuery(".tab-block").removeClass("current");

  jQuery(this).addClass("current");
  jQuery("#" + tab_id).addClass("current");
});

jQuery(".vote-btn-list li a.item-link").on("click", function(e) {
  e.preventDefault();
  var tab_id = jQuery(this).attr("data-tab");

  jQuery(".vote-btn-list li a.item-link").removeClass("current");
  jQuery(".tabcontent").removeClass("current");

  jQuery(this).addClass("current");
  jQuery("#" + tab_id).addClass("current");
});

jQuery(".vote-btn-list li a.code-link").on("click", function(e) {
  e.preventDefault();
  var tab_id = jQuery(this).attr("data-tab");

  jQuery(".vote-btn-list li a.code-link").removeClass("current");
  jQuery(".codecontent").removeClass("current");

  jQuery(this).addClass("current");
  jQuery("#" + tab_id).addClass("current");
});

jQuery(".balance-menu  a.tab-link").on("click", function(e) {
  e.preventDefault();
  var tab_id = jQuery(this).attr("data-tab");

  jQuery(".balance-menu a.tab-link").removeClass("active");
  jQuery(".tab-block").removeClass("current");

  jQuery(this).addClass("active");
  jQuery("#" + tab_id).addClass("current");
});

function damaxToggleMenu() {
  $("#toggle").click(function() {
    $(this).toggleClass(" on");
    $("body").toggleClass(" menu_expanded");
    $(".menu-nav").slideToggle();
  });
}

$(document).mouseup(function (e){ // событие клика по веб-документу
    var div = $(".menu-nav"); // тут указываем ID элемента
    if (screen.width < 992 && !div.is(e.target) // если клик был не по нашему блоку
        && div.has(e.target).length === 0) { // и не по его дочерним элементам
      div.hide(); // скрываем его
      $("#toggle").removeClass(" on");
    }
  });

$("#banner-select").change(function() {
  $(".buy-server-block .flex-center").removeClass("active");
  $("." + $(this).val()).addClass("active");
});

jQuery(".mob-control a").on("click", function(e) {
  e.preventDefault();
  var tab_id = jQuery(this).attr("data-tab");

  jQuery(".mob-control a").removeClass("current");
  jQuery(".tab-content").removeClass("current");

  jQuery(this).addClass("current");
  jQuery("#" + tab_id).addClass("current");
});

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    var file = $("#imgInp")[0].files[0].name;

    reader.onload = function(e) {
      $("#blah").attr("src", e.target.result);
      document.getElementById("file-name").innerHTML = file;
    };

    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
});

$("#upload").change(function() {
  var file = $("#upload")[0].files[0].name;
  document.getElementById("show-name").innerHTML = file;
});

$(function() {
  let chart = document.getElementById("votes-chart").getContext("2d");
  let gradient = chart.createLinearGradient(0, 0, 0, 450);

  gradient.addColorStop(0, "rgba(58, 136, 243, .5)");
  gradient.addColorStop(0.5, "rgba(58, 136, 243, .001)");
  gradient.addColorStop(1, "rgba(58, 136, 243, 0)");

  let data = {
    labels: [
      "2019-12-26",
      "2019-12-27",
      "2019-12-28",
      "2019-12-29",
      "2019-12-30",
      "2019-12-31",
      "2020-01-01",
      "2020-01-02",
      "2020-01-03",
      "2020-01-04",
      "2020-01-05",
      "2020-01-06",
      "2020-01-07",
      "2020-01-08",
      "2020-01-09",
      "2020-01-10",
      "2020-01-11",
      "2020-01-12",
      "2020-01-13",
      "2020-01-14",
      "2020-01-15",
      "2020-01-16",
      "2020-01-17",
      "2020-01-18",
      "2020-01-19",
      "2020-01-20",
      "2020-01-21",
      "2020-01-22",
      "2020-01-23",
      "2020-01-24",
      "2020-01-25"
    ],
    datasets: [
      {
        label: "Votes",
        backgroundColor: gradient,
        pointBackgroundColor: "#3a88f3",
        borderColor: "#3a88f3",
        hoverBackgroundColor: "#f1f2f3",
        hoverBorderColor: "#f1f2f3",
        data: [
          1510,
          1610,
          1619,
          1675,
          1579,
          1477,
          1338,
          1568,
          1622,
          1596,
          1706,
          1666,
          1704,
          1614,
          1623,
          1564,
          1620,
          1626,
          1593,
          1655,
          1638,
          1543,
          1431,
          1595,
          1641,
          1585,
          1589,
          1498,
          1593,
          1555,
          1173
        ]
      }
    ]
  };

  let options = {
    responsive: true,
    maintainAspectRatio: true,
    animation: {
      easing: "easeInOutQuad",
      duration: 520
    },
    legend: {
      display: false
    },
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: true,
            stepSize: 500
          }
        }
      ],
      xAxes: [
        {
          ticks: {
            autoSkip: true,
            maxTicksLimit: 5,
            maxRotation: 0,
            minRotation: 0
          }
        }
      ]
    }
  };

  new Chart(chart, {
    type: "line",
    data: data,
    options: options
  });
});
