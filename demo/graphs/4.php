
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ͳ�Ʒ���</title>

<style type="text/css">
<!--
.STYLE5 {font-size: 12px}
.STYLE7 {font-size: 12px; font-weight: bold; }
-->
</style>
</head>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="400"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#E1FA14">
      <tr>
        <td width="8%" height="40" align="center" bgcolor="#FFFFFF">&nbsp;</td>
        <td colspan="3" align="center" bgcolor="#E1FA14" class="STYLE7">Ӧ������ͼͳ�Ʒ���������ҵ�����</td>
      </tr>
      <?php
$num_jianli=100;
$num_zaojia=200;
$num_daili=250;
	$totle=$num_jianli+$num_zaojia+$num_daili;
?>
      <tr bgcolor="#E1FA14">
        <td height="22" width="8%" align="left" valign="bottom" bgcolor="#FFFFFF"><img src="images/line2.jpg" width="40" height="394" /></td>
        <td width="120" height="400" align="center" valign="bottom"><table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center" valign="bottom"><span class="STYLE5"><?php echo "($num_jianli)" ?></span></td>
            </tr>
            <tr>
              <td align="center" valign="bottom"><img src="images/scale.gif" height="<?php
	 //echo intval(300*$num_jianli/$totle);  ���ձ�������Ը߶�
	 echo $num_jianli;?>" width="10"/></td>
            </tr>
        </table></td>
        <td align="center" valign="bottom" width="120"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center" valign="bottom"><span class="STYLE5"><?php echo "($num_zaojia)" ?></span></td>
            </tr>
            <tr>
              <td align="center" valign="bottom"><img src="images/scale.gif" height="<?php //echo intval(300*$num_zaojia/$totle);���ձ�������Ը߶�
	 echo $num_zaojia;?>" width="10"/></td>
            </tr>
        </table></td>
        <td align="left" width="120" valign="bottom"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="bottom"><span class="STYLE5"><?php echo "($num_daili)" ?></span></td>
          </tr>
          <tr>
            <td align="center" valign="bottom"><img src="images/scale.gif" height="<?php //echo intval(300*$num_daili/$totle);���ձ�������Ը߶�
	 echo $num_daili;?>" width="10"/></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="22" colspan="4" align="left" valign="top" bgcolor="#FFFFFF" class="STYLE5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/line1.jpg" width="360" height="11" /></td>
      </tr>
      <tr>
        <td height="22" align="center" bgcolor="#FFFFFF" class="STYLE5">&nbsp;</td>
        <td height="22" align="center" bgcolor="#FFFFFF" class="STYLE5">����ҵ��<br />
          &nbsp;<?php echo round(($num_jianli/$totle*100),2)."%";
		 ?></td>
        <td height="22" align="center" bgcolor="#FFFFFF" class="STYLE5">���ҵ��<br />
          &nbsp;<?php echo round(($num_zaojia/$totle*100),2)."%";
		 ?></td>
        <td height="22" align="center" bgcolor="#FFFFFF" class="STYLE5">����ҵ��<br />
          <?php echo round(($num_daili/$totle*100),2)."%";
		 ?></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>