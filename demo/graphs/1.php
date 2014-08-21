<?php
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_line.php");         //引用折线图LinePlot类文件
$datay1 = array(8320,9360,14956,17028,13060,15376,25428,16216,28548,18632,22724,28460);  //定义数组
//$datay2 = array(8320,2360,14956,17028,13060,13376,25428,16216,28548,18635,22724,28123);  //定义数组
$graph = new Graph(600,300,"auto");       //创建画布//设置统计图所在画布的位置，左边距50、右边距40、上边距30、下边距40，单位为像素
$graph->img->SetMargin(50,40,30,40);
$graph->img->SetAntiAliasing();         //设置折线的平滑状态
$graph->SetScale("textlin");          //设置刻度样式
$graph->SetShadow();           //创建画布阴影
$graph->title->Set("2007年《PHP5从入门到精通》图书月销售额折线图"); //设置标题
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);      //设置标题字体
$graph->SetMarginColor("lightblue");        //设置画布的背景颜色为淡蓝色
$graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);     //设置Y轴标题的字体
$graph->xaxis->SetPos("min");$graph->yaxis->HideZeroLabel();$graph->ygrid->SetFill(true,'#EFEFEF@0.5','#BBCCFF@0.5');
$a=array("1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月");//X轴
$graph->xaxis->SetTickLabels($a);          //设置X轴
$graph->xaxis->SetFont(FF_SIMSUN);         //设置X坐标轴的字体
$graph->yscale->SetGrace(20); 
$p1 = new LinePlot($datay1);          //创建折线图对象
$p1->value->Show();                //设置显示数字
$p1->value->SetFormat('%d');       //设置只显示数字的整数部分
$p1->mark->SetType(MARK_FILLEDCIRCLE);      //设置数据坐标点为圆形标记
$p1->mark->SetFillColor("red");         //设置填充的颜色
$p1->mark->SetWidth(4);           //设置圆形标记的直径为4像素
$p1->SetColor("blue");           //设置折线颜色为蓝色
$p1->SetCenter();            //在X轴的各坐标点中心位置绘制折线
$graph->Add($p1);            //在统计图上绘制折线


/*
$p2 = new LinePlot($datay2);          //创建折线图对象
$p2->value->Show();                //设置显示数字
$p2->value->SetFormat('%d');       //设置只显示数字的整数部分
$p2->mark->SetType(MARK_FILLEDCIRCLE);      //设置数据坐标点为圆形标记
$p2->mark->SetFillColor("red");         //设置填充的颜色
$p2->mark->SetWidth(4);           //设置圆形标记的直径为4像素
$p2->SetColor("yellow");           //设置折线颜色为黄色
$p2->SetCenter();            //在X轴的各坐标点中心位置绘制折线
$graph->Add($p2);            //在统计图上绘制折线
*/
$graph->Stroke();            //输出图像
?>