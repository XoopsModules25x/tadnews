<?php
/*-----------引入檔案區--------------*/
$xoopsOption['template_main'] = "tadnews_post.tpl";
include_once "header.php";
include XOOPS_ROOT_PATH . "/header.php";
/*-----------function區--------------*/
if (empty($xoopsUser)) {
    redirect_header("index.php", 3, _MD_TADNEWS_NO_POST_POWER);
}

/*-----------執行動作判斷區----------*/
include_once $GLOBALS['xoops']->path('/modules/system/include/functions.php');
$op   = system_CleanVars($_REQUEST, 'op', '', 'string');
$nsn  = system_CleanVars($_REQUEST, 'nsn', 0, 'int');
$ncsn = system_CleanVars($_REQUEST, 'ncsn', 0, 'int');

switch ($op) {

    //新增資料
    case "insert_tad_news":
        //die(var_export($_REQUEST));
        $tadnews->insert_tad_news();
        break;

    //輸入表格
    case "tad_news_form":
        // $tadnews->set_news_editor($xoopsModuleConfig['editor']);
        $tadnews->tad_news_form($nsn);
        break;

    //更新資料
    case "update_tad_news":
        $tadnews->update_tad_news($nsn);
        break;

    //啟用文章
    case "enable_news":
        $tadnews->enable_tad_news($nsn);
        break;

    //刪除封面圖
    case "delete_cover":
        $tadnews->delete_cover($nsn);
        header("location:post.php?op=tad_news_form&nsn=$nsn");
        exit;
        break;

    default:
        // $tadnews->set_news_editor($xoopsModuleConfig['editor']);
        $tadnews->tad_news_form($nsn, $ncsn);
        break;
}

/*-----------秀出結果區--------------*/

$xoopsTpl->assign("toolbar", toolbar_bootstrap($interface_menu));

include_once XOOPS_ROOT_PATH . '/footer.php';
