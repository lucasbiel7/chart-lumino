$(document).ready(function(){
	var categorias=new Array(5);
	var valores=new Array(5);
	$.getJSON("http://localhost:8000/dados",function(data){
		for (var i = 0; i < data.length; i++) {
			var grafico=data[i];
			categorias[i]=grafico["categoria"];
			valores[i]=Math.round(grafico["valor"]);
		}
	});

	var randomScalingFactor = function(){ return Math.round(Math.random()*1000)};
	
	var lineChartData = {
		
		datasets : [
		{
			label: "My First dataset",
			fillColor : "rgba(220,220,220,0.2)",
			strokeColor : "rgba(220,220,220,1)",
			pointColor : "rgba(220,220,220,1)",
			pointStrokeColor : "#fff",
			pointHighlightFill : "#fff",
			pointHighlightStroke : "rgba(220,220,220,1)"
			//data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
		}]};
		lineChartData.labels=categorias;
		lineChartData.datasets[0].data=valores;
		//lineChartData.datasets[1].data=valores;
		console.log(lineChartData);
		window.onload = function(){
			var chart1 = document.getElementById("grafico-linha").getContext("2d");
			window.myLine = new Chart(chart1).Line(lineChartData, {
			responsive: true
			});
			console.log("Setando dados no grafico");
	};
});