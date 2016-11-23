@extends("template/template")
@section("conteudo")
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Gráfico número 1</div>
			<div class="panel-body">
				<div class="canvas-wrapper">
					<canvas class="main-chart" id="grafico-linha" height="200" width="600"></canvas>
				</div>
			</div>
		</div>
	</div>
</div><!--/.row-->
<script src="js/chart-data.js"></script>
<script src="js/chart.min.js"></script>
@stop