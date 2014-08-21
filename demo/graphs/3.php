<?php
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_bar.php");        //引用柱形图对象所在的文件
$datay=array(160,180,203,289,405,488,489,408,299,166,187,105);   //定义数组
$graph = new Graph(600,300,"auto");        //创建画布
$graph->SetScale("textlin");
$graph->yaxis->scale->SetGrace(20); 
$graph->SetShadow();           //创建画布阴影//设置统计图所在画布的位置，左边距40、右边距30、上边距30、下边距40，单位为像素
$graph->img->SetMargin(40,30,30,40);
$bplot = new BarPlot($datay);         //创建一个矩形的对象
$bplot->SetFillColor('orange');         //设置柱形图的颜色
$bplot->value->Show();          //设置显示数字 
$bplot->value->SetFormat('%d');          //在柱形图中显示格式化的图书销量
$graph->Add($bplot);           //将柱形图添加到图像中
$graph->SetMarginColor("lightblue");        //设置画布背景色为淡蓝色
$graph->title->Set("《PHP5从入门到精通》2007年销量统计");   //创建标题//设置X坐标轴文字
$a=array("1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月");
$graph->xaxis->SetTickLabels($a);          //设置X轴
$graph->title->SetFont(FF_SIMSUN);         //设置标题的字体
$graph->xaxis->SetFont(FF_SIMSUN);         //设置X轴的字体
$graph->Stroke();            //输出图像
?>