<?php
//  ------------------------------------------------------------------------ //
// ���Ҳե� tad �s�@
// �s�@����G2007-11-04
// $Id: admin.php,v 1.4 2008/06/25 06:40:09 tad Exp $
// ------------------------------------------------------------------------- //
//global
include_once "global.php";

include_once "../../tadtools/language/{$xoopsConfig['language']}/admin_common.php";

define("_MA_TADNEWS_TO_MOD","�^�Ҳխ���");
define("_MA_TADNEWS_TO_ADMIN","�޲z����");
define("_MA_TADNEWS_TOOLBAR","�@ %s ���A�ثe�b�� %s ���G");
define("_MA_TADNEWS_SAVE_CATE","�x�s");
define("_MA_TADNEWS_FUNCTION","�\��");
define("_MA_TADNEWS_MOVE","�h���峹");
define("_MA_TADNEWS_MOVE_TO_WHERE","�n�N�u%s�v���峹�h������Ӥ����U�H");
define("_MA_TADNEWS_ADD","�s�W�峹");
define("_MA_TADNEWS_STATUS","���A");
define("_MA_TADNEWS_OUT_DATE","�L��");
define("_TAD_NEED_TADTOOLS"," �ݭn modules/tadtools�A�i��<a href='http://www.tad0616.net/modules/tad_uploader/index.php?of_cat_sn=50' target='_blank'>Tad�Ч���</a>�U���C");

//define("_MA_TADNEWS_NO_DIRNAME","�L�ؿ��W��");
//define("_MA_TADNEWS_MKDIR_ERROR","�L�k�إ� %s �ؿ��A�Ф�ʫإߡA�ö}�ҰΦW�g�J�v���]777�^");


//index.php
define("_MA_TADNEWS_SAVE_NEWS_SN","�峹�s��");
define("_MA_TADNEWS_NEWS_UID","�o�G��");
define("_MA_TADNEWS_LIST","�w�o�G���峹�C��");



//post.php
define("_MA_TADNEWS_NO_POST_POWER","�|���n�J�A�L�k�o��峹�C");
define("_MA_TADNEWS_ADD_NEWS","�s�W�@�g�峹");
define("_MA_TADNEWS_NEWS_TITLE","�峹���D");
define("_MA_TADNEWS_ALWAYS_TOP","�m��");
define("_MA_TADNEWS_NEWS_CONTENT","�峹���e");
define("_MA_TADNEWS_START_DATE","�o�G�ɶ�");
define("_MA_TADNEWS_END_DATE","�����ɶ�");
define("_MA_TADNEWS_NEWS_PASSWD","�峹�[�K");
define("_MA_TADNEWS_ADV_SETUP","�i���]�w");
define("_MA_TADNEWS_SAVE_NEWS","�x�s");
define("_MA_TADNEWS_CAN_READ_NEWS_GROUP","�iŪ���s��");
define("_MA_TADNEWS_DB_ADD_ERROR2","�L�k�s�W��ƨ�tad_news��");
define("_MA_TADNEWS_DB_SELECT_ERROR2","�L�k���otad_news���");
define("_MA_TADNEWS_DB_UPDATE_ERROR2","�L�k��stad_news�������");
define("_MA_TADNEWS_DB_DELETE_ERROR2","�L�k�R��tad_news�������");
define("_MA_TADNEWS_NEWS_CATE_TEXT","�п�ܤ峹�����C<br>����O�ݩ�u�ۭq���������v");
define("_MA_TADNEWS_NEWS_TITLE_TEXT","�п�J�峹���D");
define("_MA_TADNEWS_START_DATE_TEXT","�]�w�峹�o�G����A<br>����@��h�ߧY�o�G�A<br>���]�N��ߧY�o�G�C");
define("_MA_TADNEWS_END_DATE_TEXT","�]�w�峹�U�[����A<br>���]�N��û����");
define("_MA_TADNEWS_NEWS_PASSWD_TEXT","���[�K���峹<br>�ݿ�J�K�X�~�ݱo��");
define("_MA_TADNEWS_CAN_READ_NEWS_GROUP_TEXT","����A�Ϊ̿�u�����}��v�N��Ҧ��H���i�HŪ�����峹<br>��i���� Ctrl �ӬD��u�}�񵹭��Ǹs���[�ݡC");
define("_MA_TADNEWS_NEWS_CATE","���ݤ���");
define("_MA_TADNEWS_NEWS_ENABLE","���}�ί�Z");
define("_MA_TADNEWS_NEWS_ENABLE1_TEXT","��ܡu���}�v�h�|�ߧY�ݨ��Ӥ峹");
define("_MA_TADNEWS_NEWS_ENABLE0_TEXT","��ܡu��Z�v�h���|�b�峹�C���ݨ��Ӥ峹");
define("_MA_TADNEWS_NEWS_FILES","�W�Ǫ��ɡG");
define("_MA_TADNEWS_NEWS_FILES_LIST","���ɦC��");
define("_MA_CAT_CANT_FIND_FILE","�L�k�U������");
define("_MA_TADNEWS_MON","��");
define("_MA_TADNEWS_1","�@");
define("_MA_TADNEWS_2","�G");
define("_MA_TADNEWS_3","�T");
define("_MA_TADNEWS_4","�|");
define("_MA_TADNEWS_5","��");
define("_MA_TADNEWS_6","��");
define("_MA_TADNEWS_7","��");
define("_MA_TADNEWS_WEEK","�g");
define("_MA_TADNEWS_TODAY","����");
define("_MA_TADNEWS_NEWS_HAVE_READ","��ñ���s��");
define("_MA_NEED_TADTOOLS","�ݭn modules/tadtools�A�i��<a href='http://www.tad0616.net/modules/tad_uploader/index.php?of_cat_sn=50' target='_blank'>Tad�Ч���</a>�U���C");



//cate.php
define("_MA_TADNEWS_ADD_CATE","�إߤ峹����");
define("_MA_TADNEWS_ADD_PAGE_CATE","�إߦ۩w��������");
define("_MA_TADNEWS_PARENT_CATE","��b���������U�G");
define("_MA_TADNEWS_CATE_TITLE","�����W��");
define("_MA_TADNEWS_CAN_READ_CATE_GROUP","�i<font color='blue'>Ū�峹</font>�s��");
define("_MA_TADNEWS_CAN_POST_CATE_GROUP","�i<font color='red'>�o�峹</font>�s��");
define("_MA_TADNEWS_CAN_READ_CATE_GROUP_TXT","����=�����iŪ");
define("_MA_TADNEWS_CAN_POST_CATE_GROUP_TXT","����=�ȯ����i�o");
define("_MA_TADNEWS_CATE_SN","�����s��");
define("_MA_TADNEWS_DB_SELECT_ERROR1","�L�k���otad_news_cate���");
define("_MA_TADNEWS_DB_UPDATE_ERROR1","�L�k��stad_news_cate���");
define("_MA_TADNEWS_DB_DEL_ERROR1","�L�k�R��tad_news_cate���");
define("_MA_TADNEWS_CATE_SORT","�Ƨ�");
define("_MA_TADNEWS_CATE_COUNTER","�峹��");
define("_MA_TADNEWS_CATE_LIST","�s�D�����C��");
define("_MA_TADNEWS_PAGECATE_LIST","�ۭq��������");
define("_MA_TADNEWS_ONLY_ROOT","�Ⱥ޲z��");
define("_MA_TADNEWS_CAN_READ_CATE_GROUP_S","�iŪ���s��");
define("_MA_TADNEWS_CAN_POST_CATE_GROUP_S","�i�޲z�s��");
define("_MA_TADNEWS_SHOW_FP","�O�_���s�D�����H");
define("_MA_TADNEWS_YES","�O�]�@�몺�Ϊk�^");
define("_MA_TADNEWS_NO","�_�]�ۭq�������Ϊk�A�f�t�϶��ϥΡ^");
define("_MA_TADNEWS_CATE_PIC","�����Ϥ�");
define("_MA_TADNEWS_CATE_ADV","�����i���]�w");
define("_MA_TADNEWS_CHANGE_TO_NEWS","�ର�s�D����");
define("_MA_TADNEWS_CHANGE_TO_PAGE","�ର�ۭq��������");

//import.php
define("_MA_TADNEWS_NO_NEWSMOD","�����S���w�� news �s�D�ҲաA�G�L���i�����ಾ�C");
define("_MA_TADNEWS_HAVE_NEWSMOD","�����w�˪� news �s�D�Ҳժ����� %s ��");
define("_MA_TADNEWS_IMPORT_CATE","�п�ܭn�פJ���峹���O");
define("_MA_TADNEWS_STORY_OF_CATE","�峹");
define("_MA_TADNEWS_IMPORT","�}�l�i��峹�ಾ");

//newspaper.php
define("_MA_TADNEWS_NP","�q�l��");
define("_MA_TADNEWS_NP_SELECT","�s�W�@���q�l��");
define("_MA_TADNEWS_NP_MODIFY","�ק�q�l�����������]�w");
define("_MA_TADNEWS_NP_DEL","�R��");
define("_MA_TADNEWS_NP_DEL_DESC","�]�� %s ����ƬG�L�k�R��");
define("_MA_TADNEWS_NP_OPTION","��ܤ@�ӹq�l���D�D");
define("_MA_TADNEWS_NP_CREATE","�إ߷s���q�l���D�D");
define("_MA_TADNEWS_NP_TITLE","�q�l���D�D�W��");
define("_MA_TADNEWS_NP_DATE","�o�G���");
define("_MA_TADNEWS_NP_NUMBER","�q�l������");
define("_MA_TADNEWS_NP_NUMBER_INPUT","�� %s ��");
define("_MA_TADNEWS_NP_STEP1","�i�B�J�@�j��ܩηs�ؤ@�ӹq�l���D�D");
define("_MA_TADNEWS_NP_STEP2","�i�B�J�G�j��ܭn���q�l�������峹");
define("_MA_TADNEWS_NP_STEP3","�i�B�J�T�j�s��q�l��");
define("_MA_TADNEWS_NP_STEP4","�i�B�J�|�j�H�o�q�l��");
define("_MA_TADNEWS_NP_CONTENT_HEAD","�q�l�����D���e");
define("_MA_TADNEWS_NP_CONTENT_HEAD_DESC","<p>�����|�X�{�b�q�l���̤W��A�i��Ϥ��Τ�r�C</p>
<p>{N}���u���ơv</p>
<p>{T}���u�q�l���Ӵ����D�v</p>
<p>{D}���u�o���ɶ��v</p>");
define("_MA_TADNEWS_NP_CONTENT","�q�l�����e");
define("_MA_TADNEWS_NP_CONTENT_FOOT","�q�l���������e");
define("_MA_TADNEWS_NP_CONTENT_FOOT_DESC","�Y���^�Шt�ιw�]�������B�����A�M�Ť��A���u�U�@�B�v�Y�i�C");
define("_MA_TADNEWS_NP_AVAILABLE_COUNTRIES","�Ҧ��峹");
define("_MA_TADNEWS_NP_SELECTED_COUNTRIES","�n���q�l�����峹");
define("_MA_TADNEWS_NP_TITLE_L","�m");
define("_MA_TADNEWS_NP_TITLE_R","�n");

define("_MA_TADNEWS_NP_HEAD_CONTENT","<h5 style=\"color:white;float:right;\">%s�q�l���� {N} ��</h5><h1>{T}</h1><h2>�� �q�\���}�G%s �� �o���ɶ��G{D}</h2>");

define("_MA_TADNEWS_NP_FOOT_CONTENT","<div class=\"foot\"><h1>�i���󥻳��j</h1>
<p>�� �D�s�G%s</p>
<p>���q�l�����z�]���v�ݩ�u<a href='%s' target='_blank'>%s</a>�v�A�ĥ�<a href='http://creativecommons.org/licenses/by-sa/2.5/tw/deed.zh_TW' target='_blank'>�Х� CC�u�m�W�ХܡиT���@�ЫD�ӷ~�ʡv���v���ڻO�W 2.5 �����v</a>�����C<a href='http://creativecommons.org/licenses/by-sa/2.5/tw/legalcode' target='_blank'>�m���v���ڥ���n</a></p>
<p>�Y�����W�z���v�d��H�~���Q�ΡA�лP�u%s�v�]<a href='mailto:%s'>%s</a>�^ �p���C</p>
<p>�Y���q�\�Ψ������q�l���A�ЦܥH�U���}�G<a href='%s' target='_blank'>%s</a></p></div>");
define("_MA_TADNEWS_SEND_NOW","�ߧY�H�X");
define("_MA_TADNEWS_SEND_OK","�o�e���\�I");
define("_MA_TADNEWS_SEND_ERROR","�o�e���ѡI");
define("_MA_TADNEWS_MAIL_LIST","�l�H�M��G�]�@ %s ���^");
define("_MA_TADNEWS_NP_LIST","�޲z�{���q�l��");
define("_MA_TADNEWS_NP_THEMES","��ܹq�l���G��");
define("_MA_TADNEWS_NP_ADD","�N���峹�[�J�q�l��");
define("_MA_TADNEWS_NP_REMOVE","�q�q�l��������");
define("_MA_TADNEWS_NP_EMAIL","Email�޲z");
define("_MA_TADNEWS_NP_EMAIL_NUM","�@�� %s �H�q�\ ");
define("_MA_TADNEWS_NP_EMAIL_IMPORT","�פJEmail�A�Х� , �j�}");
define("_MA_TADNEWS_NEVER_SEND","�|���H�L");
define("_MA_TADNEWS_SEND_LOG","�[�ݱH�e����");
define("_MA_TADNEWS_EMPTY_LOG","�d�L�H�e����");
define("_MA_TADNEWS_LOGS","�H�e����");
define("_MA_TADNEWS_BACK_TO","�^�u%s�v");
define("_MA_TADNEWS_NP_SUB_TITLE","�����q�l�����D�G");

//update
define("_MA_TADNEWS_AUTOUPDATE","�Ҳդɯ�");
define("_MA_TADNEWS_AUTOUPDATE_VER","����");
define("_MA_TADNEWS_AUTOUPDATE_DESC","�@��");
define("_MA_TADNEWS_AUTOUPDATE_STATUS","��s���p");
define("_MA_TADNEWS_AUTOUPDATE_GO","�ߧY��s");
define("_MA_TADNEWS_AUTOUPDATE1","�إ� tad_news_files ��ƪ�");
define("_MA_TADNEWS_AUTOUPDATE2","�b tad_news_cate ��ƪ�[�J sort ���");
define("_MA_TADNEWS_AUTOUPDATE3","�إ� tad_news_paper_setup�Btad_news_paper�Btad_news_paper_email ���T�Ӹ�ƪ�");
define("_MA_TADNEWS_AUTOUPDATE4","�b tad_news_files ��ƪ�[�J counter ���");
define("_MA_TADNEWS_AUTOUPDATE5","�b tad_news_cate ��ƪ�[�J enable_post_group ���");
define("_MA_TADNEWS_AUTOUPDATE6","�b tad_news_paper_setup ��ƪ�[�J themes ���");
define("_MA_TADNEWS_AUTOUPDATE7","�b tad_news ��ƪ�[�J prefix_tag �H�� always_top ���");
define("_MA_TADNEWS_AUTOUPDATE8","�b tad_news ��ƪ�[�J cate_pic�Bnot_news �� setup ���");
define("_MA_TADNEWS_EVN_CHK","�D�����Ҵ���");
define("_MA_TADNEWS_ICONV_OK","���䴩 iconv �禡�w�I����s�X�ഫ�S���D�I");
define("_MA_TADNEWS_ICONV_NOT_OK","�S���䴩 iconv �禡�w�I");
define("_MA_TADNEWS_ICONV_NOT_WORK","���䴩 iconv �禡�w�I�� iconv() ��ƵL�k���`�B�@�I");
define("_MA_TADNEWS_MBSTRING_OK","�����䴩 mbstring �禡�w�I�ҥH����s�X�ഫ�S���D�I");
define("_MA_TADNEWS_MBSTRING_NOT_OK","��S���䴩 mbstring �禡�w�I����s�D�BRSS�B�s�D�϶����N�L�k���`��ܡI");


//page
define("_MA_TADNEWS_CATE_SHOW_TITLE","��ܤ峹���D");
define("_MA_TADNEWS_CATE_SHOW_3D","��ܶꨤ�~��");
define("_MA_TADNEWS_CATE_SHOW_TOOL","��ܭ����u��");
define("_MA_TADNEWS_CATE_SHOW_COMM","�ϥε��ץ\��");
define("_MA_TADNEWS_CATE_SHOW_NAV","�ϥΤW�U���s");
define("_MA_TADNEWS_CATE_YES","�O");
define("_MA_TADNEWS_CATE_NO","�_");

//tag.php
define('_MA_TADNEWS_TAG_TITLE' , '����');
define('_MA_TADNEWS_TAG_COLOR' , '�C��');
define('_MA_TADNEWS_TAG_SN' , '���ҽs��');
define('_MA_TADNEWS_TAG_ENABLE' , '�O�_�ϥ�');
define('_MA_TADNEWS_TAG_DEMO' , '�d��');
define('_MA_TADNEWS_TAG_FUNC' , '�\��');
define('_MA_TADNEWS_TAG_NEW' , '�s����');
define('_MA_TADNEWS_TAG_ABLE' , '�ҥ�');
define('_MA_TADNEWS_TAG_UNABLE' , '����');
define('_MA_TADNEWS_TAG_AMOUNT' , '�A�� %s �g�峹�ϥΦ�����');

?>
