<?php
//global
include_once 'global.php';
include_once '../../tadtools/language/' . $xoopsConfig['language'] . '/admin_common.php';
define('_TAD_NEED_TADTOOLS', ' �ݭn modules/tadtools�A�i��<a href="http://campus-xoops.tn.edu.tw/modules/tad_modules/index.php?module_sn=1" target="_blank">XOOPS���P�[</a>�U���C');

define('_MA_TADNEWS_SAVE_CATE', '�x�s');
define('_MA_TADNEWS_FUNCTION', '�\��');
define('_MA_TADNEWS_MOVE', '�h���峹');
define('_MA_TADNEWS_ADD', '�s�W�峹');
define('_MA_TADNEWS_NEWS_TITLE', '�峹���D');
define('_MA_TADNEWS_NEWS_PASSWD', '�峹�[�K');
define('_MA_TADNEWS_CAN_READ_NEWS_GROUP', '�iŪ���s��');
define('_MA_TADNEWS_NEWS_CATE', '���ݤ���');
define('_MA_TADNEWS_CHECK_ALL', '����');
define('_MA_TADNEWS_NO_NEWS', '�Ӥ����S������峹');

//cate.php
define('_MA_TADNEWS_ADD_CATE', '�إߤ峹����');
define('_MA_TADNEWS_ADD_PAGE_CATE', '�إߦ۩w��������');
define('_MA_TADNEWS_PARENT_CATE', '��b���������U�G');
define('_MA_TADNEWS_CATE_TITLE', '�����W��');
define('_MA_TADNEWS_CAN_READ_CATE_GROUP', '�i<span style="color: blue;">Ū�峹</span>�s��');
define('_MA_TADNEWS_CAN_POST_CATE_GROUP', '�i<span style="color: red;">�o�峹</span>�s��');
define('_MA_TADNEWS_CAN_READ_CATE_GROUP_TXT', '����=�����iŪ');
define('_MA_TADNEWS_CAN_POST_CATE_GROUP_TXT', '����=�ȯ����i�o');
define('_MA_TADNEWS_DB_UPDATE_ERROR1', '�L�k��stad_news_cate���');
define('_MA_TADNEWS_DB_DEL_ERROR1', '�L�k�R��tad_news_cate���');
define('_MA_TADNEWS_CATE_COUNTER', '�峹��');
define('_MA_TADNEWS_ONLY_ROOT', '�Ⱥ޲z��');
define('_MA_TADNEWS_CAN_READ_CATE_GROUP_S', '�iŪ���s��');
define('_MA_TADNEWS_CAN_POST_CATE_GROUP_S', '�i�޲z�s��');
define('_MA_TADNEWS_NO', '�_�]�ۭq�������Ϊk�A�f�t�϶��ϥΡ^');
define('_MA_TADNEWS_CATE_PIC', '�����Ϥ�');
define('_MA_TADNEWS_CHANGE_TO_NEWS', '�ର�s�D����');
define('_MA_TADNEWS_CHANGE_TO_PAGE', '�ର�ۭq��������');

//import.php
define('_MA_TADNEWS_NO_NEWSMOD', '�����S���w�� news �s�D�ҲաA�G�L���i�����ಾ�C');
define('_MA_TADNEWS_HAVE_NEWSMOD', '�����w�˪� news �s�D�Ҳժ����� %s ��');
define('_MA_TADNEWS_IMPORT_CATE', '�п�ܭn�פJ���峹���O');
define('_MA_TADNEWS_IMPORT', '�}�l�i��峹�ಾ');

//newspaper.php
define('_MA_TADNEWS_NP', '�q�l��');
define('_MA_TADNEWS_NP_SELECT', '�s�W�@���q�l��');
define('_MA_TADNEWS_NP_MODIFY', '�ק�q�l�����������]�w');
define('_MA_TADNEWS_NP_DEL', '�R��');
define('_MA_TADNEWS_NP_DEL_DESC', '�]�� %s ����ƬG�L�k�R��');
define('_MA_TADNEWS_NP_OPTION', '��ܤ@�ӹq�l���D�D');
define('_MA_TADNEWS_NP_CREATE', '�إ߷s���q�l���D�D');
define('_MA_TADNEWS_NP_TITLE', '�q�l���D�D�W��');
define('_MA_TADNEWS_NP_DATE', '�o�G���');
define('_MA_TADNEWS_NP_NUMBER', '�q�l������');
define('_MA_TADNEWS_NP_NUMBER_INPUT', '�� %s ��');
define('_MA_TADNEWS_NP_STEP1', '�i�B�J�@�j��ܩηs�ؤ@�ӹq�l���D�D');
define('_MA_TADNEWS_NP_STEP2', '�i�B�J�G�j��ܭn���q�l�������峹');
define('_MA_TADNEWS_NP_STEP3', '�i�B�J�T�j�s��q�l��');
define('_MA_TADNEWS_NP_STEP4', '�i�B�J�|�j�H�o�q�l��');
define('_MA_TADNEWS_NP_CONTENT_HEAD', '�q�l�����D���e');
define('_MA_TADNEWS_NP_CONTENT_HEAD_DESC', '<p>�����|�X�{�b�q�l���̤W��A�i��Ϥ��Τ�r�C</p>
<p>{N}���u���ơv</p>
<p>{T}���u�q�l���Ӵ����D�v</p>
<p>{D}���u�o���ɶ��v</p>');
define('_MA_TADNEWS_NP_CONTENT', '�q�l�����e');
define('_MA_TADNEWS_NP_CONTENT_FOOT', '�q�l���������e');
define('_MA_TADNEWS_NP_CONTENT_FOOT_DESC', '�Y���^�Шt�ιw�]�������B�����A�M�Ť��A���u�U�@�B�v�Y�i�C');
define('_MA_TADNEWS_NP_TITLE_L', '�m');
define('_MA_TADNEWS_NP_TITLE_R', '�n');

define('_MA_TADNEWS_NP_HEAD_CONTENT', '<h5 style="color:white;float:right;">%s�q�l���� {N} ��</h5><h1>{T}</h1><h2>�� �q�\���}�G%s �� �o���ɶ��G{D}</h2>');

define('_MA_TADNEWS_NP_FOOT_CONTENT', '<div class="foot"><h1>�i���󥻳��j</h1>
<p>�� �D�s�G%s</p>
<p>���q�l�����z�]���v�ݩ�u<a href="%s" target="_blank">%s</a>�v�A�ĥ�<a href="http://creativecommons.org/licenses/by-sa/2.5/tw/deed.zh_TW" target="_blank">�Х� CC�u�m�W�ХܡиT���@�ЫD�ӷ~�ʡv���v���ڻO�W 2.5 �����v</a>�����C<a href="http://creativecommons.org/licenses/by-sa/2.5/tw/legalcode" target="_blank">�m���v���ڥ���n</a></p>
<p>�Y�����W�z���v�d��H�~���Q�ΡA�лP�u%s�v�]<a href="mailto:%s">%s</a>�^ �p���C</p>
<p>�Y���q�\�Ψ������q�l���A�ЦܥH�U���}�G<a href="%s" target="_blank">%s</a></p></div>');
define('_MA_TADNEWS_SEND_NOW', '�ߧY�H�X');
define('_MA_TADNEWS_MAIL_LIST', '�l�H�M��G�]�@ %s ���^');
define('_MA_TADNEWS_NP_LIST', '�޲z�{���q�l��');
define('_MA_TADNEWS_NP_THEMES', '��ܹq�l���G��');
define('_MA_TADNEWS_NP_EMAIL', 'Email�޲z');
define('_MA_TADNEWS_NP_EMAIL_IMPORT', '�פJEmail�A�Х� , �j�}');
define('_MA_TADNEWS_NEVER_SEND', '�|���H�L');
define('_MA_TADNEWS_SEND_LOG', '�[�ݱH�e����');
define('_MA_TADNEWS_EMPTY_LOG', '�d�L�H�e����');
define('_MA_TADNEWS_BACK_TO', '�^�u%s�v');
define('_MA_TADNEWS_NP_SUB_TITLE', '�����q�l�����D�G');
define('_MA_TADNEWS_NO_EMAIL', '�ثe�S������q�l�l��A�i��<a href="newspaper.php?op=newspaper_email&nps_sn=%s">Email�޲z</a>��ʶפJEmail�C');

//page
define('_MA_TADNEWS_CATE_SHOW_TITLE', '��ܤ峹���D');
define('_MA_TADNEWS_CATE_SHOW_TOOL', '��ܼҲդu��');
define('_MA_TADNEWS_CATE_SHOW_COMM', '�ϥε��ץ\��');
define('_MA_TADNEWS_CATE_SHOW_NAV', '�ϥΤW�U���s');

//tag.php
define('_MA_TADNEWS_TAG_TITLE', '����');
define('_MA_TADNEWS_TAG_FONTCOLOR', '��r�C��');
define('_MA_TADNEWS_TAG_COLOR', '�C��');
define('_MA_TADNEWS_TAG_ENABLE', '�O�_�ϥ�');
define('_MA_TADNEWS_TAG_DEMO', '�d��');
define('_MA_TADNEWS_TAG_FUNC', '�\��');
define('_MA_TADNEWS_TAG_NEW', '�s����');
define('_MA_TADNEWS_TAG_ABLE', '�ҥ�');
define('_MA_TADNEWS_TAG_UNABLE', '����');
define('_MA_TADNEWS_TAG_AMOUNT', '�A�� %s �g�峹�ϥΦ�����');
define('_MA_TADNEWS_NO_PERMISSION', '��S��Ū���v����');
define('_MA_TADNEWS_HIDE_ARTICLE', '�������ä峹');
define('_MA_TADNEWS_DISPLAY_TITLE', '����ܼ��D');
