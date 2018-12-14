<script type="text/javascript" src="<{$xoops_url}>/modules/tadtools/mColorPicker/javascripts/mColorPicker.js" charset="UTF-8"></script>

<script type="text/JavaScript">
  $(".color").mColorPicker({
    imageFolder: "<{$xoops_url}>/modules/tadtools/mColorPicker/images/"
  });

  function delete_tag(tag_sn){
  	var sure = window.confirm('<{$smarty.const._TADNEWS_SURE_DEL}>');
  	if (!sure)	return;
  	location.href="<{$xoops_url}>/modules/tadnews/admin/tag.php?op=del_tag&tag_sn=" + tag_sn;
  }

</script>

<div class="container-fluid">
  <form action="tag.php" method="post" id="myForm" role="form">
    <table class="table table-striped table-bordered">
      <tr>
        <th><{$smarty.const._MA_TADNEWS_TAG_DEMO}></th>
        <th><{$smarty.const._MA_TADNEWS_TAG_TITLE}></th>
        <th><{$smarty.const._MA_TADNEWS_TAG_FONTCOLOR}></th>
        <th><{$smarty.const._MA_TADNEWS_TAG_COLOR}></th>
        <th><{$smarty.const._MA_TADNEWS_TAG_ENABLE}></th>
        <th><{$smarty.const._MA_TADNEWS_TAG_FUNC}></th>
      </tr>

      <{if $tag_sn==""}>
        <tr class="info">
          <td><{$smarty.const._MA_TADNEWS_TAG_NEW}></td>
          <td><input type="text" name="tag" value="<{$tag}>" class="form-control"></td>
          <td>
            <input type="text" name="font_color" class="form-control color" value="<{$font_color}>" id="font_color" data-text="hidden" data-hex="true">
          </td>
          <td>
            <input type="text" name="color" class="form-control color" value="<{$color}>" id="color" data-text="hidden" data-hex="true">
          </td>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="enable" id="enable_1" value="1" <{if $enable!='0'}>checked<{/if}>>
              <label class="form-check-label" for="enable_1"><{$smarty.const._YES}></label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="enable" id="enable_0" value="0" <{if $enable=='0'}>checked<{/if}>>
              <label class="form-check-label" for="enable_0"><{$smarty.const._NO}></label>
            </div>
          </td>
          <td>
            <input type="hidden" name="op" value="insert_tad_news_tags">
            <button class="btn btn-primary" type="submit"><{$smarty.const._MA_TADNEWS_SAVE_CATE}></button>
          </td>
        </tr>
      <{/if}>

      <{foreach item=tag from=$tagarr}>
        <{if $tag.mode=="edit"}>
          <tr class="warning">
            <td><{$tag.prefix_tag}></td>
            <td><input type="text" name="tag" value="<{$tag.tag}>" class="form-control"></td>

            <td>
              <input type="text" name="font_color" class="form-control color" value="<{$tag.font_color}>" id="font_color" data-text="hidden" data-hex="true">
            </td>
            <td>
              <input type="text" name="color" class="form-control color" value="<{$tag.color}>" id="color" data-text="hidden" data-hex="true">
            </td>

            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="enable" id="enable_1" value="1" <{if $tag.enable=='1' or $tag.enable==''}>checked<{/if}>>
                <label class="form-check-label" for="enable_1"><{$smarty.const._YES}></label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="enable" id="enable_0" value="0" <{if $tag.enable=='0'}>checked<{/if}>>
                <label class="form-check-label" for="enable_0"><{$smarty.const._NO}></label>
              </div>
            </td>
            <td>
          	<input type="hidden" name="tag_sn" value="<{$tag_sn}>">
            <input type="hidden" name="op" value="update_tad_news_tags">
            <button class="btn btn-primary" type="submit"><{$smarty.const._MA_TADNEWS_SAVE_CATE}></button>
            </td></tr>
        <{else}>
          <tr>
            <td><{$tag.prefix_tag}></td>
            <td><{$tag.tag}></td>
            <td><{$tag.font_color}></td>
            <td><{$tag.color}></td>
            <td><{$tag.enable_txt}><{$tag.amount}></td>
            <td><{$tag.tool}></td>
          </tr>
        <{/if}>
      <{/foreach}>

    </table>
  </form>
</div>