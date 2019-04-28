<?php

xoops_loadLanguage('blocks', 'tadnews');

//條列式新聞區塊
require_once __DIR__ . '/header.php';

require_once XOOPS_ROOT_PATH . '/modules/tadnews/class/tadnews.php';

require_once $GLOBALS['xoops']->path('/modules/system/include/functions.php');
$num = system_CleanVars($_REQUEST, 'num', 10, 'int');
$show_ncsn = system_CleanVars($_REQUEST, 'show_ncsn', '', 'string');
$summary_length = system_CleanVars($_REQUEST, 'summary_length', 0, 'int');
$summary_css = system_CleanVars($_REQUEST, 'summary_css', '', 'string');
$start_from = system_CleanVars($_REQUEST, 'start_from', 0, 'int');
$title_length = system_CleanVars($_REQUEST, 'title_length', 0, 'int');
$show_cover = system_CleanVars($_REQUEST, 'show_cover', '', 'string');
$cover_css = system_CleanVars($_REQUEST, 'cover_css', '', 'string');
$display_mode = system_CleanVars($_REQUEST, 'display_mode', '', 'string');
$show_button = system_CleanVars($_REQUEST, 'show_button', 0, 'int');
$p = system_CleanVars($_REQUEST, 'p', 0, 'int');
$randStr = system_CleanVars($_REQUEST, 'randStr', '', 'string');
$ncsn_arr = explode(',', $show_ncsn);
$ncsn = system_CleanVars($_REQUEST, 'ncsn', 0, 'int');
$tag_sn = system_CleanVars($_REQUEST, 'tag_sn', 0, 'int');
$keyword = system_CleanVars($_REQUEST, 'keyword', '', 'string');
$start_day = system_CleanVars($_REQUEST, 'start_day', '', 'string');
$end_day = system_CleanVars($_REQUEST, 'end_day', '', 'string');

$b = $p - 1;
$n = $p + 1;
$start = $p * $num + $start_from;

if ($start <= 0) {
    $start = 0;
}

//echo "<p>strat:{$start},p:{$p},b:{$b},n:{$n},start_from:{$start_from},num:{$num}</p>";

$tadnews->set_show_num($num);
if ($ncsn) {
    $tadnews->set_view_ncsn($ncsn);
} else {
    $tadnews->set_view_ncsn($ncsn_arr);
}

if ($tag_sn) {
    $tadnews->set_view_tag($tag_sn);
}

if ($keyword) {
    $tadnews->set_keyword($keyword);
}

if ($start_day) {
    $tadnews->set_start_day($start_day);
}

if ($end_day) {
    $tadnews->set_end_day($end_day);
}
$tadnews->set_show_mode('list');
$tadnews->set_news_kind('news');
$tadnews->set_summary($summary_length, $summary_css);
$tadnews->set_title_length($title_length);
$tadnews->set_cover($show_cover, $cover_css);
$tadnews->set_skip_news($start);

$block = '';

$total = 0;

//die('display_mode:' . $display_mode);
if ('table' === $display_mode) {
    $block .= "
    <table class='table table-striped'>
      <tbody>";
    $all_news = $tadnews->get_news('return');
    if (empty($all_news['page'])) {
        die('<tr><td>' . _TADNEWS_EMPTY . '</td></tr>');
    }
    // die(var_export($all_news['page']));
    foreach ($all_news['page'] as $news) {
        $need_sign = $news['need_sign'] ? "<img src='{$news['need_sign']}' align='absmiddle' alt='{$news['news_title']}' style='margin:3px;'>" : '';

        $block .= "
        <tr>
          <td>
            {$news['chkbox']}
            {$news['post_date']}
            {$news['prefix_tag']}
            {$need_sign}
            {$news['enable_txt']}{$news['today_pic']}
            <a href='" . XOOPS_URL . "/modules/tadnews/{$news['link_page']}?nsn={$news['nsn']}'>{$news['news_title']}</a>

            <span style='color:gray;font-size:12px;'> (<a href='" . XOOPS_URL . "/modules/tadnews/index.php?show_uid={$news['uid']}'>{$news['uid_name']}</a> / {$news['counter']} / <a href='" . XOOPS_URL . "/modules/tadnews/{$news['link_page']}?ncsn={$news['ncsn']}'>{$news['cate_name']}</a>)</span> {$news['content']}
          </td>
        </tr>";
        $total++;
    }

    $block .= '
        </tbody>
      </table>';
} else {
    $block .= "<ul style='list-style: disc inside;'>";
    $all_news = $tadnews->get_news('return');
    if (empty($all_news['page'])) {
        die('<li>' . _TADNEWS_EMPTY . '</li>');
    }
    foreach ($all_news['page'] as $news) {
        $need_sign = $news['need_sign'] ? "<img src='{$news['need_sign']}' align='absmiddle' alt='{$news['news_title']}' style='margin:3px;'>" : '';
        $block .= "
        <li style='margin:6px 0px;'>
          {$news['post_date']}
          {$news['pic']}
          {$news['prefix_tag']}
          {$need_sign}
          {$news['enable_txt']}
          {$news['today_pic']}
          <a href='" . XOOPS_URL . "/modules/tadnews/{$news['link_page']}?nsn={$news['nsn']}'>{$news['news_title']}</a>
          {$news['content']}
        </li>";
        $total++;
    }
    $block .= '
  </ul>';
}

$b_button = ($b < 0) ? '' : "<button onClick='tadnew_list_content{$randStr}({$b})'  onfocus='tadnew_list_content{$randStr}({$b})' class='btn btn-info'>" . sprintf(_TADNEWS_BLOCK_BACK, $num) . '</button>';

$n_button = ($total < $num) ? '' : "<button onClick='tadnew_list_content{$randStr}({$n})' onfocus='tadnew_list_content{$randStr}({$n})' class='btn btn-info'>" . sprintf(_TADNEWS_BLOCK_NEXT, $num) . '</button>';

$m_button = ($total < $num) ? '' : "<a href='" . XOOPS_URL . "/modules/tadnews/' class='btn btn-info'>more</a>";
$button = ($show_button) ? "<div class='row'><div class='col-sm-4 text-left'>{$b_button}</div><div class='col-sm-4 text-center'>{$m_button}</div><div class='col-sm-4 text-right'>{$n_button}</div></div>" : '';

$block .= "
{$button}";

echo $block;
