window.onload = function () {
var chart = new CanvasJS.Chart("chartContainer", {
title: {
text: "HTML5"
},
animationEnabled: true,
theme: "theme2",
data: [
{
type: "doughnut",
indexLabelFontFamily: "Garamond",
indexLabelFontSize: 20,
startAngle: 0,
indexLabelFontColor: "dimgrey",
indexLabelLineColor: "darkgrey",
// toolTipContent: "{y} %",

dataPoints: [
{ y: 51.04, indexLabel: "CSS {y}%" },
// { y: 40.83, indexLabel: "iOS {y}%" },
// { y: 3.20, indexLabel: "Java ME {y}%" },
// { y: 1.11, indexLabel: "BlackBerry {y}%" },
// { y: 2.29, indexLabel: "Windows {y}%" },
// { y: 1.53, indexLabel: "Others {y}%" }

]
}
]
});

chart.render();
}
