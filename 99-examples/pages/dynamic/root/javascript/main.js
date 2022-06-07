var vid = document.getElementById("myVideo");

function playVid() {
  vid.play();
}

function pauseVid() {
  vid.pause();
}

function myFunctions() {
  document.getElementByIdStartsWith("main").style.fontSize = "medium";
};

function myFunctionl() {
  document.getElementById("main1", "main2", "main3").style.fontSize = "larger";
};

function myFunctionxl() {
  document.getElementById("main1", "main2", "main3").style.fontSize = "x-large";
};

function myFunctionxxl() {
  document.getElementById("main1", "main2", "main3").style.fontSize = "xx-large";
};

$(".boldtrigger").click(function() {
$("[id*=main]").toggleClass("bold");
});



document.getElementById('btnBold').addEventListener('click', bolden, false);

function switch_div(show) {
  document.getElementById("show_"+show).style.display = "block";
  document.getElementById("show_"+((show==1)?2:1)).style.display = "none";
}


function myFunctionbb() {
  document.getElementById("main1").style.display = "block";
  document.getElementById("main2").style.display = "none";
  document.getElementById("main3").style.display = "none";

}

function myFunctionzk() {
  document.getElementById("main1").style.display = "none";
  document.getElementById("main2").style.display = "block";
  document.getElementById("main3").style.display = "none";

}

function myFunctionold() {
  document.getElementById("main1").style.display = "none";
  document.getElementById("main2").style.display = "none";
  document.getElementById("main3").style.display = "block";

}
