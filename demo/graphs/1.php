<?php
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_line.php");         //��������ͼLinePlot���ļ�
$datay1 = array(8320,9360,14956,17028,13060,15376,25428,16216,28548,18632,22724,28460);  //��������
//$datay2 = array(8320,2360,14956,17028,13060,13376,25428,16216,28548,18635,22724,28123);  //��������
$graph = new Graph(600,300,"auto");       //��������//����ͳ��ͼ���ڻ�����λ�ã���߾�50���ұ߾�40���ϱ߾�30���±߾�40����λΪ����
$graph->img->SetMargin(50,40,30,40);
$graph->img->SetAntiAliasing();         //�������ߵ�ƽ��״̬
$graph->SetScale("textlin");          //���ÿ̶���ʽ
$graph->SetShadow();           //����������Ӱ
$graph->title->Set("2007�꡶PHP5�����ŵ���ͨ��ͼ�������۶�����ͼ"); //���ñ���
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);      //���ñ�������
$graph->SetMarginColor("lightblue");        //���û����ı�����ɫΪ����ɫ
$graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);     //����Y����������
$graph->xaxis->SetPos("min");$graph->yaxis->HideZeroLabel();$graph->ygrid->SetFill(true,'#EFEFEF@0.5','#BBCCFF@0.5');
$a=array("1��","2��","3��","4��","5��","6��","7��","8��","9��","10��","11��","12��");//X��
$graph->xaxis->SetTickLabels($a);          //����X��
$graph->xaxis->SetFont(FF_SIMSUN);         //����X�����������
$graph->yscale->SetGrace(20); 
$p1 = new LinePlot($datay1);          //��������ͼ����
$p1->value->Show();                //������ʾ����
$p1->value->SetFormat('%d');       //����ֻ��ʾ���ֵ���������
$p1->mark->SetType(MARK_FILLEDCIRCLE);      //�������������ΪԲ�α��
$p1->mark->SetFillColor("red");         //����������ɫ
$p1->mark->SetWidth(4);           //����Բ�α�ǵ�ֱ��Ϊ4����
$p1->SetColor("blue");           //����������ɫΪ��ɫ
$p1->SetCenter();            //��X��ĸ����������λ�û�������
$graph->Add($p1);            //��ͳ��ͼ�ϻ�������


/*
$p2 = new LinePlot($datay2);          //��������ͼ����
$p2->value->Show();                //������ʾ����
$p2->value->SetFormat('%d');       //����ֻ��ʾ���ֵ���������
$p2->mark->SetType(MARK_FILLEDCIRCLE);      //�������������ΪԲ�α��
$p2->mark->SetFillColor("red");         //����������ɫ
$p2->mark->SetWidth(4);           //����Բ�α�ǵ�ֱ��Ϊ4����
$p2->SetColor("yellow");           //����������ɫΪ��ɫ
$p2->SetCenter();            //��X��ĸ����������λ�û�������
$graph->Add($p2);            //��ͳ��ͼ�ϻ�������
*/
$graph->Stroke();            //���ͼ��
?>