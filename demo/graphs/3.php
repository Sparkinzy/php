<?php
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_bar.php");        //��������ͼ�������ڵ��ļ�
$datay=array(160,180,203,289,405,488,489,408,299,166,187,105);   //��������
$graph = new Graph(600,300,"auto");        //��������
$graph->SetScale("textlin");
$graph->yaxis->scale->SetGrace(20); 
$graph->SetShadow();           //����������Ӱ//����ͳ��ͼ���ڻ�����λ�ã���߾�40���ұ߾�30���ϱ߾�30���±߾�40����λΪ����
$graph->img->SetMargin(40,30,30,40);
$bplot = new BarPlot($datay);         //����һ�����εĶ���
$bplot->SetFillColor('orange');         //��������ͼ����ɫ
$bplot->value->Show();          //������ʾ���� 
$bplot->value->SetFormat('%d');          //������ͼ����ʾ��ʽ����ͼ������
$graph->Add($bplot);           //������ͼ��ӵ�ͼ����
$graph->SetMarginColor("lightblue");        //���û�������ɫΪ����ɫ
$graph->title->Set("��PHP5�����ŵ���ͨ��2007������ͳ��");   //��������//����X����������
$a=array("1��","2��","3��","4��","5��","6��","7��","8��","9��","10��","11��","12��");
$graph->xaxis->SetTickLabels($a);          //����X��
$graph->title->SetFont(FF_SIMSUN);         //���ñ��������
$graph->xaxis->SetFont(FF_SIMSUN);         //����X�������
$graph->Stroke();            //���ͼ��
?>