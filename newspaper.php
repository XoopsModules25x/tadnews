<?php
//  ------------------------------------------------------------------------ //
// ���Ҳե� tad �s�@
// �s�@����G2007-11-04
// $Id: newspaper.php,v 1.2 2008/05/14 01:31:48 tad Exp $
// ------------------------------------------------------------------------- //

/*-----------�ޤJ�ɮװ�--------------*/
include "header.php";
$xoopsOption['template_main'] = "tadnews_newspaper_tpl.html";
include XOOPS_ROOT_PATH."/header.php";
/*-----------function��--------------*/


//�C�Xnewspaper���
function list_newspaper(){
	global $xoopsDB,$xoopsOption,$xoopsTpl;
	
  $myts =& MyTextSanitizer::getInstance();
  
	$sql = "select a.npsn,a.number,b.title,a.np_date from ".$xoopsDB->prefix("tad_news_paper")." as a ,".$xoopsDB->prefix("tad_news_paper_setup")." as b where a.nps_sn=b.nps_sn and b.status='1' order by a.np_date desc";

  //getPageBar($��sql�y�k, �C����ܴX�����, �̦h��ܴX�ӭ��ƿﶵ);
  $PageBar=getPageBar($sql,10,10);
  $bar=$PageBar['bar'];
  $sql=$PageBar['sql'];


	$result=$xoopsDB->query($sql) or redirect_header($_SERVER['PHP_SELF'],3,show_error($sql));
  $i=0;
  $main="";
	while(list($allnpsn,$number,$title,$np_date)=$xoopsDB->fetchRow($result)){
      $title=$myts->htmlSpecialChars($title);
      $main[$i]['allnpsn']=$allnpsn;
      $main[$i]['title']=$title.sprintf(_MD_TADNEWS_NP_TITLE,$number);
      $main[$i]['np_date']=$np_date;
      $i++;
	}
	
	
	$xoopsTpl->assign( "page" , $main) ;
	$xoopsTpl->assign( "bar" , $bar) ;
	
}


/*-----------����ʧ@�P�_��----------*/
$_REQUEST['op']=(empty($_REQUEST['op']))?"":$_REQUEST['op'];
$npsn=(empty($_GET['npsn']))?"":intval($_GET['npsn']);
switch($_REQUEST['op']){

	case "preview":
	$main=preview_newspaper($npsn);
	break;
	
	default:
	$main=list_newspaper();
	break;
}

/*-----------�q�X���G��--------------*/
if($_REQUEST['op']=="preview"){
  echo $main;
}else{
	$xoopsTpl->assign('xoops_showrblock', 0);

	$xoopsTpl->assign( "toolbar" , toolbar_bootstrap($interface_menu)) ;
  $xoopsTpl->assign( "bootstrap" , get_bootstrap()) ;
	include_once XOOPS_ROOT_PATH.'/footer.php';
}

?>
