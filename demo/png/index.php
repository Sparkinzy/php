<?PHP
/*
 *$sourePic:原图路径
 * $smallFileName:小图名称
 * $width:小图宽
 * $heigh:小图高
 * 转载注明 www.521php.com*/
function pngthumb($sourePic,$smallFileName,$width,$heigh){
	$image=imagecreatefrompng($sourePic);//PNG
		 	imagesavealpha($image,true);//这里很重要 意思是不要丢了$sourePic图像的透明色;
		 	$BigWidth=imagesx($image);//大图宽度
			$BigHeigh=imagesy($image);//大图高度
			$thumb = imagecreatetruecolor($width,$heigh);
			imagealphablending($thumb,false);//这里很重要,意思是不合并颜色,直接用$img图像颜色替换,包括透明色;
			imagesavealpha($thumb,true);//这里很重要,意思是不要丢了$thumb图像的透明色;
			if(imagecopyresampled($thumb,$image,0,0,0,0,$width,$heigh,$BigWidth,$BigHeigh)){
			imagepng($thumb,$smallFileName);}
			return $smallFileName;//返回小图路径 转载注明 www.521php.com
}
 
pngthumb("a.png", "c.png", 300, 300);//调用
?>