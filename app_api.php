<?php
use XoopsModules\Tadtools\Utility;
require_once __DIR__ . '/header.php';

/*-----------執行動作判斷區----------*/
include_once $GLOBALS['xoops']->path('/modules/system/include/functions.php');
$op = system_CleanVars($_REQUEST, 'op', '', 'string');
$ncsn = system_CleanVars($_REQUEST, 'ncsn', 0, 'int');
$nsn = system_CleanVars($_REQUEST, 'nsn', 0, 'int');
$fsn = system_CleanVars($_REQUEST, 'fsn', 0, 'int');
$num = system_CleanVars($_REQUEST, 'num', 10, 'int');

header("Content-Type: application/json; charset=utf-8");
switch ($op) {

    case 'get_cates':
        die(json_encode(get_cates(), 256));

    case 'list_all_news':
        die(json_encode(list_all_news($ncsn, $num), 256));

    case 'show_news':
        die(json_encode(show_news($nsn), 256));
}

//顯示單一新聞
function show_news($nsn = '')
{
    global $tadnews, $xoopsTpl;

    $tadnews->set_show_enable(0);
    $tadnews->set_view_nsn($nsn);
    $tadnews->set_cover(true, 'db');
    $tadnews->set_summary('full');
    return $tadnews->get_news('app');
}

//列出所有tad_news資料
function list_all_news($ncsn = '', $num = 10)
{
    global $tadnews, $xoopsTpl;

    $tadnews->set_show_enable(0);
    $tadnews->set_show_num($num);
    $tadnews->set_news_kind('news');
    if ($ncsn > 0) {
        $tadnews->set_view_ncsn($ncsn);
    }
    $tadnews->set_show_mode('list');
    return $tadnews->get_news('app');
}

function get_cates()
{
    global $xoopsDB, $xoopsTpl;

    $sql = 'SELECT ncsn,of_ncsn,nc_title FROM ' . $xoopsDB->prefix('tad_news_cate') . " WHERE not_news!='1' ORDER BY sort";
    $result = $xoopsDB->query($sql);
    while (list($ncsn, $of_ncsn, $nc_title) = $xoopsDB->fetchRow($result)) {
        $cate['ncsn'] = $ncsn;
        $cate['title'] = $nc_title;
        $cate['of_ncsn'] = $of_ncsn;
        $cate['sort'] = $sort;
        $cate['url'] = XOOPS_URL . "/modules/tadnews/index.php?ncsn={$ncsn}";
        $all_cates[] = $cate;
    }
    return $all_cates;
}
