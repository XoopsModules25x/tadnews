<?php
//  ------------------------------------------------------------------------ //
// ���Ҳե� tad �s�@
// �s�@����G2007-11-04
// $Id: post.php,v 1.2 2008/06/25 06:35:58 tad Exp $
// ------------------------------------------------------------------------- //

/*-----------�ޤJ�ɮװ�--------------*/
include_once "admin_header.php";

$xoopsOption['template_main'] = "tadnews_post_tpl.html";
/*-----------����ʧ@�P�_��----------*/
$op = (!isset($_REQUEST['op']))? "":$_REQUEST['op'];
$nsn = (!isset($_REQUEST['nsn']))? 0:intval($_REQUEST['nsn']);

switch($op){

	//�s�W���
	case "insert_tad_news":
	$nsn=tadnews::insert_tad_news();
	break;
	
	//��J���
	case "tad_news_form";
	tadnews::tad_news_form($nsn);
	break;
		
	//��s���
	case "update_tad_news";
	tadnews::update_tad_news($nsn);
	header("location: ../index.php?nsn={$nsn}");
	break;
	

	default:
	tadnews::tad_news_form($nsn);
	break;
}

/*-----------�q�X���G��--------------*/
include_once "footer.php";

?>
