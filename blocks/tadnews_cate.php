<?php

//區塊主函式 (顯示所有新聞的類別)
function tadnews_cate_show($options)
{
    global $xoTheme;
    if (!file_exists(XOOPS_ROOT_PATH . '/modules/tadtools/dtree.php')) {
        redirect_header('index.php', 3, _MB_NEED_TADTOOLS);
    }
    include_once XOOPS_ROOT_PATH . '/modules/tadtools/dtree.php';
    $cate = block_get_news_cate();
    if (empty($cate)) {
        return;
    }

    $home['sn'] = 0;
    $home['title'] = _MB_TADNEWS_NO_CATE;
    $home['url'] = XOOPS_URL . '/modules/tadnews/index.php?ncsn=0';
    $dtree = new dtree('tadnews_cate_tree', $home, $cate['title'], $cate['of_ncsn'], $cate['url']);
    $block = $dtree->render();

    return $block;
}

//取得所有類別標題
if (!function_exists('block_get_news_cate')) {
    function block_get_news_cate()
    {
        global $xoopsDB;

        $sql = 'SELECT ncsn,of_ncsn,nc_title FROM ' . $xoopsDB->prefix('tad_news_cate') . " WHERE not_news!='1' ORDER BY sort";
        $result = $xoopsDB->query($sql);
        while (list($ncsn, $of_ncsn, $nc_title) = $xoopsDB->fetchRow($result)) {
            $cate['title'][$ncsn] = $nc_title;
            $cate['of_ncsn'][$ncsn] = $of_ncsn;
            $cate['url'][$ncsn] = XOOPS_URL . "/modules/tadnews/index.php?ncsn={$ncsn}";
        }

        return $cate;
    }
}
