<?php
//  ------------------------------------------------------------------------ //
// ���Ҳե� tad �s�@
// �s�@����G2007-11-04
// $Id: index.php,v 1.3 2008/06/25 06:35:58 tad Exp $
// ------------------------------------------------------------------------- //

/*-----------�ޤJ�ɮװ�--------------*/
include_once "admin_header.php";
include_once "admin_function.php";
$xoopsOption['template_main'] = "tadnews_adm_list_tpl.html";
/*-----------function��--------------*/


/*-----------����ʧ@�P�_��----------*/
$op = (empty($_REQUEST['op']))? "":$_REQUEST['op'];
$ncsn = (empty($_REQUEST['ncsn']))? "":intval($_REQUEST['ncsn']);
$nsn = (empty($_REQUEST['nsn']))? "":intval($_REQUEST['nsn']);
$show_uid = (empty($_REQUEST['show_uid']))? "":$_REQUEST['show_uid'];

switch($op){

	//�R�����
	case "delete_tad_news":
  $tadnews=new tadnews();
	$tadnews->delete_tad_news($nsn);
	header("location: ".$_SERVER['PHP_SELF']);
	break;
	
	//�妸�޲z
	case "batch":
	if($_POST['act']=="move_news"){
    move_news($_POST['nsn_arr'],$ncsn);
  }elseif($_POST['act']=="del_news"){
    del_news($_POST['nsn_arr']);
  }
	header("location: ".$_SERVER['PHP_SELF']);
	break;
	
	default:
	list_tad_news($ncsn,"news",$show_uid);
	break;
}

/*-----------�q�X���G��--------------*/
include_once "footer.php";
?>
