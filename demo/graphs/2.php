<?php
include_once ("jpgraph/jpgraph.php");
include_once ("jpgraph/jpgraph_pie.php");
include_once ("jpgraph/jpgraph_pie3d.php");     //引用3D饼形图PiePlot3D对象所在的类文件
$data = array(266036,295621,335851,254256,254254,685425);  //定义数组
$graph = new PieGraph(540,260,'auto');      //创建画布
$graph->SetShadow();         //设置画布阴影
$graph->title->Set("应用3D饼形图统计2007年商品的年销售额比率");//创建标题
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);    //设置标题字体
$graph->legend->SetFont(FF_SIMSUN,FS_NORMAL);   //设置图例字体
$p1 = new PiePlot3D($data);        //创建3D饼形图对象
$p1->SetLegends(array("IT数码","家电通讯","家居日用","服装鞋帽","健康美容","食品烟酒"));
$targ=array("pie3d_csimex1.php?v=1","pie3d_csimex1.php?v=2","pie3d_csimex1.php?v=3","pie3d_csimex1.php?v=4","pie3d_csimex1.php?v=5","pie3d_csimex1.php?v=6");
$alts=array("val=%d","val=%d","val=%d","val=%d","val=%d","val=%d");
$p1->SetCSIMTargets($targ,$alts);$p1->SetCenter(0.4,0.5);         //设置饼形图所在画布的位置
$graph->Add($p1);          //将3D饼形图添加到图像中
$graph->StrokeCSIM();         //输出图像到浏览器
?>