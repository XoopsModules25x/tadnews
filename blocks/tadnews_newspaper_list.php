<?php

//�϶��D�禡 (�C�X�̷s���s�D����)
function tadnews_newspaper_list($options){
  global $xoopsDB,$xoopsUser;

  //��X�{���]�w��
  $sql = "select a.npsn,a.number,b.title from ".$xoopsDB->prefix("tad_news_paper")." as a ,".$xoopsDB->prefix("tad_news_paper_setup")." as b where a.nps_sn=b.nps_sn and b.status='1' order by a.np_date desc limit 0,{$options[0]}";
  $result=$xoopsDB->query($sql) or redirect_header($_SERVER['PHP_SELF'],3,show_error($sql));
  $i=0;
  $page="";
  while(list($npsn,$number,$title)=$xoopsDB->fetchRow($result)){
    $page[$i]['npsn']=$npsn;
    $page[$i]['title']=$title.sprintf(_MB_TADNEWS_NP_TITLE,$number);
    $i++;
  }
  if(empty($page))return;

  $block['page']=$page;
  return $block;
}

//�϶��s��禡
function tadnews_newspaper_list_edit($options){

  $form="
  "._MB_TADNEWS_NP_EDIT_BITEM0."
  <INPUT type='text' name='options[0]' value='{$options[0]}'>
  ";
  return $form;
}

?>