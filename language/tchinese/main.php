<?php
//  ------------------------------------------------------------------------ //
// ���Ҳե� tad �s�@
// �s�@����G2007-11-04
// $Id: main.php,v 1.4 2008/06/25 06:40:17 tad Exp $
// ------------------------------------------------------------------------- //
//global
include_once "global.php";



define("_MD_TADNEWS_TO_MOD","�^�Ҳխ���");
define("_MD_TADNEWS_TO_ADMIN","�޲z����");
define("_MD_TADNEWS_MY","�ڪ��峹");
define("_MD_TADNEWS_ADD_FIRST","�ثe�S������峹�A�ߧY�s�W�Ĥ@�g�峹�I");
define("_MD_TADNEWS_NO_NEWS","�ثe�S������峹�I");
define("_MD_TADNEWS_HIDDEN","����w���}��I");
define("_MD_TADNEWS_OVERDUE","����w�L���I");
define("_MD_TADNEWS_NOT_GROUP","�z���ݪ��s�ըS���v���\Ū����I");
define("_MD_TADNEWS_ALL_CATE","�Ҧ�����");
define("_MD_TADNEWS_FILES","����");
define("_MD_TADNEWS_POSTER","�o�G��");
define("_MD_TADNEWS_FOR","�G");
define("_TAD_NEED_TADTOOLS"," �ݭn modules/tadtools�A�i��<a href='http://www.tad0616.net/modules/tad_uploader/index.php?of_cat_sn=50' target='_blank'>Tad�Ч���</a>�U���C");
define("_MD_TADNEWS_NEWS_PIC","�W�Ǥ峹�ʭ���");
define("_MD_TADNEWS_ORDER_SUCCESS","�q�\�u%s�v�����I");
define("_MD_TADNEWS_ORDER_ERROR","�q�\�u%s�v���ѡI");
define("_TADNEWS_DEL_SUCCESS","�����q�\�u%s�v�����I");
define("_TADNEWS_DEL_ERROR","�����q�\�u%s�v���ѡI");
define("_MD_TADNEWS_NP_TITLE","�� %s ��");
define("_MD_TADNEWS_FILE_DL_NUM","�]�w�Q�U�� %s ���^");
define("_MD_TADNEWS_ERROR_EMAIL","%s ���O�X�k��Email");

define("_MD_TADNEWS_POST","�o�G�峹");
define("_MD_TADNEWS_HAVE_READ_NUM","%s �Hñ��");
define("_MD_TADNEWS_UID_NAME","�Τ�W��");
define("_MD_TADNEWS_SIGN_TIME","ñ���ɶ�");
define("_MD_TADNEWS_SIGN_LOG","�u%s�vñ������");

//post.php
define("_MD_TADNEWS_NO_POST_POWER","�|���n�J�A�L�k�o��峹�C");
define("_MD_TADNEWS_ADD_NEWS","�s��峹");
define("_MD_TADNEWS_NEWS_TITLE","�峹���D");
define("_MD_TADNEWS_PREFIX_TAG","����");
define("_MD_TADNEWS_ALWAYS_TOP","�m��");
define("_MD_TADNEWS_NEWS_CONTENT","�峹���e");
define("_MD_TADNEWS_START_DATE","�o�G�ɶ�");
define("_MD_TADNEWS_END_DATE","�����ɶ�");
define("_MD_TADNEWS_NEWS_PASSWD","�峹�[�K");
define("_MD_TADNEWS_ADV_SETUP","�i���]�w");
define("_MD_TADNEWS_SAVE_NEWS","�x�s");
define("_MD_TADNEWS_CAN_READ_NEWS_GROUP","�iŪ���s��");
define("_MD_TADNEWS_DB_ADD_ERROR2","�L�k�s�W��ƨ�tad_news��");
define("_MD_TADNEWS_DB_SELECT_ERROR2","�L�k���otad_news���");
define("_MD_TADNEWS_DB_UPDATE_ERROR2","�L�k��stad_news�������");
define("_MD_TADNEWS_DB_DELETE_ERROR2","�L�k�R��tad_news�������");
define("_MD_TADNEWS_NEWS_CATE_TEXT","�п�ܤ峹�����C<br>����O�ݩ�u�ۭq���������v");
define("_MD_TADNEWS_NEWS_TITLE_TEXT","�п�J�峹���D");
define("_MD_TADNEWS_START_DATE_TEXT","�]�w�峹�o�G����A<br>����@��h�ߧY�o�G�A<br>���]�N��ߧY�o�G�C");
define("_MD_TADNEWS_END_DATE_TEXT","�]�w�峹�U�[����A<br>���]�N��û����");
define("_MD_TADNEWS_NEWS_PASSWD_TEXT","���[�K���峹<br>�ݿ�J�K�X�~�ݱo��");
define("_MD_TADNEWS_CAN_READ_NEWS_GROUP_TEXT","����A�Ϊ̿�u�����}��v�N��Ҧ��H���i�HŪ�����峹<br>��i���� Ctrl �ӬD��u�}�񵹭��Ǹs���[�ݡC");
define("_MD_TADNEWS_NEWS_CATE","�峹����");
define("_MD_TADNEWS_SELECT_NEWS_CATE","�п�ܤ峹����");
define("_MD_TADNEWS_NEWS_ENABLE","���}�ί�Z");
define("_MD_TADNEWS_NEWS_ENABLE1_TEXT","��ܡu���}�v�h�|�ߧY�ݨ��Ӥ峹");
define("_MD_TADNEWS_NEWS_ENABLE0_TEXT","��ܡu��Z�v�h���|�b�峹�C���ݨ��Ӥ峹");
define("_MD_TADNEWS_NEWS_ENABLE_OK","���}");
define("_MD_TADNEWS_NEWS_FILES","�W�Ǫ��ɡG");
define("_MD_TADNEWS_NEWS_FILES_LIST","���ɦC��");
define("_MD_CAT_CANT_FIND_FILE","�L�k�U������");
define("_MD_TADNEWS_MON","��");
define("_MD_TADNEWS_1","�@");
define("_MD_TADNEWS_2","�G");
define("_MD_TADNEWS_3","�T");
define("_MD_TADNEWS_4","�|");
define("_MD_TADNEWS_5","��");
define("_MD_TADNEWS_6","��");
define("_MD_TADNEWS_7","��");
define("_MD_TADNEWS_WEEK","�g");
define("_MD_TADNEWS_TODAY","����");
define("_MD_TADNEWS_ALL_NO","����ñ��");
define("_MD_TADNEWS_NEWS_HAVE_READ","��ñ���s��");
define("_MD_NEED_TADTOOLS","�ݭn modules/tadtools�A�i��<a href='http://www.tad0616.net/modules/tad_uploader/index.php?of_cat_sn=50' target='_blank'>Tad�Ч���</a>�U���C");
define("_MD_TADNEWS_CREAT_NEWS_CATE","�b��������U�إ߷s����");

//archive.php
define("_MD_TADNEWS_ARCHIVE","����峹");
define("_MD_TADNEWS_YEAR","�~");
define("_MD_TADNEWS_MONTH","��");


define("_MD_TADNEWS_NEWSPAPER","�q�l���C��");
define("_MD_TADNEWS_NEWSPAPER_LIST","==== �п�ܭn�[�ݪ��q�l�� ====");
define("_MD_TADNEWS_NP_DATE","�o�G���");
define("_MD_TADNEWS_NP_NUMBER","�q�l������");


define("_MD_TADNEWS_ALWAYS_TOP","�m���峹");
define("_MD_TADNEWS_ALWAYS_TOP","����峹");



define("_MD_TADNEWS_TIME_TAB","�o���ɶ�");
define("_MD_TADNEWS_PRIVILEGE_TAB","�v��");
define("_MD_TADNEWS_NEWSPIC_TAB","�ʭ���");
define("_MD_TADNEWS_FILES_TAB","����");
define("_MD_TADNEWS_ENABLE_NEWSPIC","�O�_���");
define("_MD_TADNEWS_ENABLE_NEWSPIC_NO","���n�b���夤��ܫʭ���");
define("_MD_TADNEWS_ENABLE_NEWSPIC_YES","�n�b���夤��ܫʭ��ϡ]��@���ϥΡ^");
define("_MD_TADNEWS_NEWSPIC_SIZE","�Ϥ��ؤؤo");
define("_MD_TADNEWS_NEWSPIC_WIDTH","�e x ��");
define("_MD_TADNEWS_NEWSPIC_BORDER","�Ϥ���إ~�[");
define("_MD_TADNEWS_NEWSPIC_BORDER_WIDTH","�ʲ�");
define("_MD_TADNEWS_NEWSPIC_BORDER_STYTLE","�u��");
define("_MD_TADNEWS_NEWSPIC_SOLID","��u");
define("_MD_TADNEWS_NEWSPIC_DASHED","��u");
define("_MD_TADNEWS_NEWSPIC_DOUBLE","���u");
define("_MD_TADNEWS_NEWSPIC_DOTTED","�I�u");
define("_MD_TADNEWS_NEWSPIC_GROOVE","�W�u");
define("_MD_TADNEWS_NEWSPIC_RIDGE","�Y�u");
define("_MD_TADNEWS_NEWSPIC_INSET","�O�J�u");
define("_MD_TADNEWS_NEWSPIC_OUTSET","�B�X�u");
define("_MD_TADNEWS_NEWSPIC_NONE","�L�ؽu");
define("_MD_TADNEWS_NEWSPIC_BORDER_COLOR","�C��");
define("_MD_TADNEWS_NEWSPIC_FLOAT","�Ϥ��ئ�m");
define("_MD_TADNEWS_NEWSPIC_FLOAT_LEFT","�a����¶��");
define("_MD_TADNEWS_NEWSPIC_FLOAT_RIGHT","�a�k��¶��");
define("_MD_TADNEWS_NEWSPIC_FLOAT_NONE","����¶��");
define("_MD_TADNEWS_NEWSPIC_MARGIN","�~���");
define("_MD_TADNEWS_NEWSPIC","�ʭ��Ϫ����Ƥ覡");
define("_MD_TADNEWS_NEWSPIC_NO_REPEAT","������");
define("_MD_TADNEWS_NEWSPIC_REPEAT","����");
define("_MD_TADNEWS_NEWSPIC_X_REPEAT","��������");
define("_MD_TADNEWS_NEWSPIC_Y_REPEAT","��������");
define("_MD_TADNEWS_NEWSPIC_SHOW","�e�{�ʭ��Ϫ�");
define("_MD_TADNEWS_NEWSPIC_AND","�Y��ʭ���");
define("_MD_TADNEWS_NEWSPIC_LEFT_TOP","���W");
define("_MD_TADNEWS_NEWSPIC_LEFT_CENTER","����");
define("_MD_TADNEWS_NEWSPIC_LEFT_BOTTOM","���U");
define("_MD_TADNEWS_NEWSPIC_RIGHT_TOP","�k�W");
define("_MD_TADNEWS_NEWSPIC_RIGHT_CENTER","�k��");
define("_MD_TADNEWS_NEWSPIC_RIGHT_BOTTOM","�k�U");
define("_MD_TADNEWS_NEWSPIC_CENTER_TOP","���W");
define("_MD_TADNEWS_NEWSPIC_CENTER_CENTER","����");
define("_MD_TADNEWS_NEWSPIC_CENTER_BOTTOM","���U");
define("_MD_TADNEWS_NEWSPIC_NO_RESIZE","���������Y��");
define("_MD_TADNEWS_NEWSPIC_CONTAIN","�Y��H�ݨ�����ʭ���");
define("_MD_TADNEWS_NEWSPIC_COVER","�Y���뺡��ӹϤ��ت���");
define("_MD_TADNEWS_NEWSPIC_DEMO","<p>�ҿסu�ʭ��ϡv�����N�O���C�@�g�峹�W�Ǥ@�Ө㦳�N��ʪ��Ϥ��A���Ϥ��|�Φb�U�Ӱ϶��W�A�H�W�[����������ʡC�C�Ӱ϶����ʭ��ϳ��i�H�ۦ�h�]�w��j�p�Υ~�[�C�Y�O�z�Q��ʭ��Ϥ]��줺�夤��@���ϡA����A�z�i�H�Q�Φ��ɭ��Ӱ��]�w�C</p><p>�ʭ��ϨèS���@�w�n�h�j�A���ѩ�ʭ��Ϥ]�i�H�Φb�ưʷs�D�϶��W�@���j�i���ưʹϡA�]����ĳ�z�A�Ϫ��j�p�ܤ֤�ưʰ϶��j�Y�i�A�w�]�Ȭ� 670x250�A�]���A��ĳ�z�A�ʭ��Ϻɶq�b�o�Ӥj�p�d�򬰨ΡC</p>");


define("_MD_TADNEWS_TABLE_CONTENT_WIDTH","�e�{�e��");
define("_MD_TADNEWS_MORE","�[�ݧ���峹");
define("_MD_TADNEWS_DEL_FILE","��ܭn�R�����ɮסG");
?>
