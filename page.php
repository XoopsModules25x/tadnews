<?php
/*-----------�ޤJ�ɮװ�--------------*/
include_once "header.php";
/*-----------function��--------------*/

//��ܳ�@�s�D
function show_news($nsn=""){
  global $xoopsModuleConfig,$xoopsTpl,$interface_menu;

  $tadnews=new tadnews();
  $tadnews->set_view_nsn($nsn);
  $tadnews->set_cover(true,"db");
  $tadnews->set_summary('full');

  //if($xoopsModuleConfig['use_star_rating']=='1'){
  //  $tadnews->set_use_star_rating(true);
  //}
  $tadnews->get_news();

}


//�C�X�Ҧ�tad_news���
function list_tad_all_news($the_ncsn=""){
  global $xoopsModuleConfig,$xoopsTpl,$interface_menu;

  $tadnews=new tadnews();
  $tadnews->set_news_kind("page");
  $tadnews->set_show_num('none');
  $tadnews->set_view_ncsn($the_ncsn);
  $tadnews->get_cate_news();

}


/*-----------����ʧ@�P�_��----------*/
$_REQUEST['op']=(empty($_REQUEST['op']))?"":$_REQUEST['op'];

$nsn=(isset($_REQUEST['nsn']))?intval($_REQUEST['nsn']) : 0;
$ncsn=(isset($_REQUEST['ncsn']))?intval($_REQUEST['ncsn']) : 0;
$fsn=(isset($_REQUEST['fsn']))?intval($_REQUEST['fsn']) : 0;

switch($_REQUEST['op']){

  //�U���ɮ�
  case "tufdl":
  $files_sn=isset($_GET['files_sn'])?intval($_GET['files_sn']):"";
  $TadUpFiles->add_file_counter($files_sn,$hash=false);
  exit;
  break;


  //�R�����
  case "delete_tad_news";
  $tadnews=new tadnews();
  $tadnews->delete_tad_news($nsn);
  header("location: ".$_SERVER['PHP_SELF']);
  break;



  default:
  if(!empty($nsn)){
    $xoopsOption['template_main'] = "tadnews_page_tpl.html";
    include XOOPS_ROOT_PATH."/header.php";
    $main=show_news($nsn);
  }elseif(!empty($ncsn)){
    $xoopsOption['template_main'] = "tadnews_page_list_tpl.html";
    include XOOPS_ROOT_PATH."/header.php";
    $main=list_tad_all_news($ncsn);
  }else{
    header("location:index.php?nsn={$nsn}");
  }

  break;
}

$xoopsTpl->assign( "bootstrap" , get_bootstrap()) ;
$xoopsTpl->assign( "toolbar" , toolbar_bootstrap($interface_menu)) ;

/*-----------�q�X���G��--------------*/
include_once XOOPS_ROOT_PATH.'/include/comment_view.php';
include_once XOOPS_ROOT_PATH.'/footer.php';

?>
