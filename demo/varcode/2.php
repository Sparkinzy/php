<?php
$num = 4;//验证的长度
$str = getCode($num,0);

//创建一个画布，分配颜色
$width=$num*20;//宽度
$height = 30;//高度
$im = imagecreatetruecolor($width,$height);//创建一个画布
$color[] = imagecolorallocate($im,111,0,55);
$color[] = imagecolorallocate($im,0,77,0);
$color[] = imagecolorallocate($im,0,0,160);
$color[] = imagecolorallocate($im,221,111,0);
$color[] = imagecolorallocate($im,221,220,0);
$bg = imagecolorallocate($im,200,200,200);//创建背景颜色
//开始绘画
imagefill($im,0,0,$bg);
imagerectangle($im,0,0,$width-1,$height-1,$color[rand(0,4)]);
//随机添加干扰点
for($i=0;$i<200;$i++){
	//随即一个颜色
	$c = imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));
	imagesetpixel($im,rand(0,$width),rand(0,$height),$c);
}
//随机添加干扰线
for($i=0;$i<8;$i++){
	//随即一个颜色
	$c = imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));
	imageline($im,rand(0,$width),rand(0,$height),rand(0,$width),rand(0,$height),$c);
}
//绘制验证内容(一个一个字符绘制)
for($i=0;$i<$num;$i++){
	//图像语言，字体大小，倾斜，位置，高度，颜色，字体文件,内容
	imagettftext($im,18,rand(-40,40),8+(18*$i),24,$color[rand(0,4)],"simhei.ttf",$str[$i]);
}
//输出图像
header('Content-type: image/png');//设置响应头信息
imagepng($im);
//销毁图片
imagedestroy($im);

/**
 *@param $m 验证码的值的个数
 *@patam $type 验证码的类型 
 *
 **/
function getCode($m=4,$type=0){
	$str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$c='';
	$t = array(9,35,strlen($str)-1);
	for($i=0;$i<$m;$i++){
		$c .= $str[rand(0,$t[$type])];
	}
	return $c;
}
//getCode();
?>