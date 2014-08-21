<?php
//过滤文章中除指定域名之外的链接
    $pre = '|<a[^>]*?\s*href=\\\"http://(?:.*?)\.(.*?)\.(?:.*?)/(?:.*?)\"(?:.*?)>(.*?)<\/a>|i';
	preg_match_all($pre,$body,$a);
	if($a){
		$qian = $a[0];
		$home = $a[1];
		$hou  = $a[2];
		foreach ($home as $key=>$val){
			if($val=='beelink'||$val=='zoosnet'){
				continue;
			}else{
				echo $qian[$key];
				$body = str_replace($qian[$key],$hou[$key],$body);
			}
		}
	}
?>