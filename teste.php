<?php
require_once('phplot.php');

$grafico = new PHPlot();

//$grafico->SetPlotType('lines');
//$grafico->SetDataType('text-data');

//SetFileFormat("png");

#Indicamos o título do gráfico e o título dos dados no eixo X e Y do mesmo
$grafico->SetTitle("Gráfico de exemplo");
$grafico->SetXTitle("Eixo X");
$grafico->SetYTitle("Eixo Y");


#Definimos os dados do gráfico
$dados = array(
		array('Janeiro', 10),
		array('Fevereiro', 5),
		array('Março', 4),
		array('Abril', 8),
		array('Maio', 7),
		array('Junho', 105),
);

$grafico->SetDataValues($dados);

#Exibimos o gráfico
$grafico->DrawGraph();


?>