<?PHP
/*
 *$sourePic:ԭͼ·��
 * $smallFileName:Сͼ����
 * $width:Сͼ��
 * $heigh:Сͼ��
 * ת��ע�� www.521php.com*/
function pngthumb($sourePic,$smallFileName,$width,$heigh){
	$image=imagecreatefrompng($sourePic);//PNG
		 	imagesavealpha($image,true);//�������Ҫ ��˼�ǲ�Ҫ����$sourePicͼ���͸��ɫ;
		 	$BigWidth=imagesx($image);//��ͼ���
			$BigHeigh=imagesy($image);//��ͼ�߶�
			$thumb = imagecreatetruecolor($width,$heigh);
			imagealphablending($thumb,false);//�������Ҫ,��˼�ǲ��ϲ���ɫ,ֱ����$imgͼ����ɫ�滻,����͸��ɫ;
			imagesavealpha($thumb,true);//�������Ҫ,��˼�ǲ�Ҫ����$thumbͼ���͸��ɫ;
			if(imagecopyresampled($thumb,$image,0,0,0,0,$width,$heigh,$BigWidth,$BigHeigh)){
			imagepng($thumb,$smallFileName);}
			return $smallFileName;//����Сͼ·�� ת��ע�� www.521php.com
}
 
pngthumb("a.png", "c.png", 300, 300);//����
?>