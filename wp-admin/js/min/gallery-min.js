jQuery(document).ready(function($){var e,t,i,n,l,o=!1;t=function(){e=$("#media-items").sortable({items:"div.media-item",placeholder:"sorthelper",axis:"y",distance:2,handle:"div.filename",stop:function(){var e=$("#media-items").sortable("toArray"),t=e.length;$.each(e,function(e,i){var n=o?t-e:1+e;$("#"+i+" .menu_order input").val(n)})}})},i=function(){var e=$(".menu_order_input"),t=e.length;e.each(function(e){var i=o?t-e:1+e;$(this).val(i)})},n=function(e){e=e||0,$(".menu_order_input").each(function(){("0"===this.value||e)&&(this.value="")})},$("#asc").click(function(e){e.preventDefault(),o=!1,i()}),$("#desc").click(function(e){e.preventDefault(),o=!0,i()}),$("#clear").click(function(e){e.preventDefault(),n(1)}),$("#showall").click(function(e){e.preventDefault(),$("#sort-buttons span a").toggle(),$("a.describe-toggle-on").hide(),$("a.describe-toggle-off, table.slidetoggle").show(),$("img.pinkynail").toggle(!1)}),$("#hideall").click(function(e){e.preventDefault(),$("#sort-buttons span a").toggle(),$("a.describe-toggle-on").show(),$("a.describe-toggle-off, table.slidetoggle").hide(),$("img.pinkynail").toggle(!0)}),t(),n(),$("#media-items>*").length>1&&(l=wpgallery.getWin(),$("#save-all, #gallery-settings").show(),"undefined"!=typeof l.tinyMCE&&l.tinyMCE.activeEditor&&!l.tinyMCE.activeEditor.isHidden()?(wpgallery.mcemode=!0,wpgallery.init()):$("#insert-gallery").show())}),jQuery(window).unload(function(){tinymce=tinyMCE=wpgallery=null});var tinymce=null,tinyMCE,wpgallery;wpgallery={mcemode:!1,editor:{},dom:{},is_update:!1,el:{},I:function(e){return document.getElementById(e)},init:function(){var e=this,t,i,n,l,o=e.getWin();if(e.mcemode){for(t=(""+document.location.search).replace(/^\?/,"").split("&"),i={},n=0;n<t.length;n++)l=t[n].split("="),i[unescape(l[0])]=unescape(l[1]);i.mce_rdomain&&(document.domain=i.mce_rdomain),tinymce=o.tinymce,tinyMCE=o.tinyMCE,e.editor=tinymce.EditorManager.activeEditor,e.setup()}},getWin:function(){return window.dialogArguments||opener||parent||top},setup:function(){var e=this,t,i=e.editor,n,l,o,r,a;if(e.mcemode){if(e.el=i.selection.getNode(),"IMG"!==e.el.nodeName||!i.dom.hasClass(e.el,"wpGallery")){if(!(n=i.dom.select("img.wpGallery"))||!n[0])return"1"===getUserSetting("galfile")&&(e.I("linkto-file").checked="checked"),"1"===getUserSetting("galdesc")&&(e.I("order-desc").checked="checked"),getUserSetting("galcols")&&(e.I("columns").value=getUserSetting("galcols")),getUserSetting("galord")&&(e.I("orderby").value=getUserSetting("galord")),void jQuery("#insert-gallery").show();e.el=n[0]}t=i.dom.getAttrib(e.el,"title"),t=i.dom.decode(t),t?(jQuery("#update-gallery").show(),e.is_update=!0,l=t.match(/columns=['"]([0-9]+)['"]/),o=t.match(/link=['"]([^'"]+)['"]/i),r=t.match(/order=['"]([^'"]+)['"]/i),a=t.match(/orderby=['"]([^'"]+)['"]/i),o&&o[1]&&(e.I("linkto-file").checked="checked"),r&&r[1]&&(e.I("order-desc").checked="checked"),l&&l[1]&&(e.I("columns").value=""+l[1]),a&&a[1]&&(e.I("orderby").value=a[1])):jQuery("#insert-gallery").show()}},update:function(){var e=this,t=e.editor,i="",n;return e.mcemode&&e.is_update?void("IMG"===e.el.nodeName&&(i=t.dom.decode(t.dom.getAttrib(e.el,"title")),i=i.replace(/\s*(order|link|columns|orderby)=['"]([^'"]+)['"]/gi,""),i+=e.getSettings(),t.dom.setAttrib(e.el,"title",i),e.getWin().tb_remove())):(n="[gallery"+e.getSettings()+"]",void e.getWin().send_to_editor(n))},getSettings:function(){var e=this.I,t="";return e("linkto-file").checked&&(t+=' link="file"',setUserSetting("galfile","1")),e("order-desc").checked&&(t+=' order="DESC"',setUserSetting("galdesc","1")),3!==e("columns").value&&(t+=' columns="'+e("columns").value+'"',setUserSetting("galcols",e("columns").value)),"menu_order"!==e("orderby").value&&(t+=' orderby="'+e("orderby").value+'"',setUserSetting("galord",e("orderby").value)),t}};