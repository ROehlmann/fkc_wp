!function(e){function n(){function n(){!o&&window.tinymce&&(o=window.tinymce,l=o.$,l(document).on("click",function(e){var n,t,p=l(e.target);p.hasClass("wp-switch-editor")&&(n=p.attr("data-wp-editor-id"),t=p.hasClass("switch-tmce")?"tmce":"html",r(n,t))}))}function t(e){var n=l(".mce-toolbar-grp",e.getContainer())[0],t=n&&n.clientHeight;return t&&t>10&&t<200?parseInt(t,10):30}function r(e,n){e=e||"content",n=n||"toggle";var r,p,i,a=o.get(e),c=l("#wp-"+e+"-wrap"),d=l("#"+e),s=d[0];if("toggle"===n&&(n=a&&!a.isHidden()?"html":"tmce"),"tmce"===n||"tinymce"===n){if(a&&!a.isHidden())return!1;"undefined"!=typeof window.QTags&&window.QTags.closeAllTags(e),r=parseInt(s.style.height,10)||0,a?(a.show(),!o.Env.iOS&&r&&(p=t(a),r=r-p+14,r>50&&r<5e3&&a.theme.resizeTo(null,r))):o.init(window.tinyMCEPreInit.mceInit[e]),c.removeClass("html-active").addClass("tmce-active"),d.attr("aria-hidden",!0),window.setUserSetting("editor","tinymce")}else if("html"===n){if(a&&a.isHidden())return!1;a?(o.Env.iOS||(i=a.iframeElement,r=i?parseInt(i.style.height,10):0,r&&(p=t(a),r=r+p-14,r>50&&r<5e3&&(s.style.height=r+"px"))),a.hide()):d.css({display:"",visibility:""}),c.removeClass("tmce-active").addClass("html-active"),d.attr("aria-hidden",!1),window.setUserSetting("editor","html")}}function p(e){var n="blockquote|ul|ol|li|dl|dt|dd|table|thead|tbody|tfoot|tr|th|td|h[1-6]|fieldset|figure",t=n+"|div|p",r=n+"|pre",p=!1,i=!1,a=[];return e?(e.indexOf("<script")===-1&&e.indexOf("<style")===-1||(e=e.replace(/<(script|style)[^>]*>[\s\S]*?<\/\1>/g,function(e){return a.push(e),"<wp-preserve>"})),e.indexOf("<pre")!==-1&&(p=!0,e=e.replace(/<pre[^>]*>[\s\S]+?<\/pre>/g,function(e){return e=e.replace(/<br ?\/?>(\r\n|\n)?/g,"<wp-line-break>"),e=e.replace(/<\/?p( [^>]*)?>(\r\n|\n)?/g,"<wp-line-break>"),e.replace(/\r?\n/g,"<wp-line-break>")})),e.indexOf("[caption")!==-1&&(i=!0,e=e.replace(/\[caption[\s\S]+?\[\/caption\]/g,function(e){return e.replace(/<br([^>]*)>/g,"<wp-temp-br$1>").replace(/[\r\n\t]+/,"")})),e=e.replace(new RegExp("\\s*</("+t+")>\\s*","g"),"</$1>\n"),e=e.replace(new RegExp("\\s*<((?:"+t+")(?: [^>]*)?)>","g"),"\n<$1>"),e=e.replace(/(<p [^>]+>.*?)<\/p>/g,"$1</p#>"),e=e.replace(/<div( [^>]*)?>\s*<p>/gi,"<div$1>\n\n"),e=e.replace(/\s*<p>/gi,""),e=e.replace(/\s*<\/p>\s*/gi,"\n\n"),e=e.replace(/\n[\s\u00a0]+\n/g,"\n\n"),e=e.replace(/\s*<br ?\/?>\s*/gi,"\n"),e=e.replace(/\s*<div/g,"\n<div"),e=e.replace(/<\/div>\s*/g,"</div>\n"),e=e.replace(/\s*\[caption([^\[]+)\[\/caption\]\s*/gi,"\n\n[caption$1[/caption]\n\n"),e=e.replace(/caption\]\n\n+\[caption/g,"caption]\n\n[caption"),e=e.replace(new RegExp("\\s*<((?:"+r+")(?: [^>]*)?)\\s*>","g"),"\n<$1>"),e=e.replace(new RegExp("\\s*</("+r+")>\\s*","g"),"</$1>\n"),e=e.replace(/<((li|dt|dd)[^>]*)>/g," \t<$1>"),e.indexOf("<option")!==-1&&(e=e.replace(/\s*<option/g,"\n<option"),e=e.replace(/\s*<\/select>/g,"\n</select>")),e.indexOf("<hr")!==-1&&(e=e.replace(/\s*<hr( [^>]*)?>\s*/g,"\n\n<hr$1>\n\n")),e.indexOf("<object")!==-1&&(e=e.replace(/<object[\s\S]+?<\/object>/g,function(e){return e.replace(/[\r\n]+/g,"")})),e=e.replace(/<\/p#>/g,"</p>\n"),e=e.replace(/\s*(<p [^>]+>[\s\S]*?<\/p>)/g,"\n$1"),e=e.replace(/^\s+/,""),e=e.replace(/[\s\u00a0]+$/,""),p&&(e=e.replace(/<wp-line-break>/g,"\n")),i&&(e=e.replace(/<wp-temp-br([^>]*)>/g,"<br$1>")),a.length&&(e=e.replace(/<wp-preserve>/g,function(){return a.shift()})),e):""}function i(e){var n=!1,t=!1,r="table|thead|tfoot|caption|col|colgroup|tbody|tr|td|th|div|dl|dd|dt|ul|ol|li|pre|form|map|area|blockquote|address|math|style|p|h[1-6]|hr|fieldset|legend|section|article|aside|hgroup|header|footer|nav|figure|figcaption|details|menu|summary";return e=e.replace(/\r\n|\r/g,"\n"),e.indexOf("\n")===-1?e:(e.indexOf("<object")!==-1&&(e=e.replace(/<object[\s\S]+?<\/object>/g,function(e){return e.replace(/\n+/g,"")})),e=e.replace(/<[^<>]+>/g,function(e){return e.replace(/[\n\t ]+/g," ")}),e.indexOf("<pre")===-1&&e.indexOf("<script")===-1||(n=!0,e=e.replace(/<(pre|script)[^>]*>[\s\S]*?<\/\1>/g,function(e){return e.replace(/\n/g,"<wp-line-break>")})),e.indexOf("<figcaption")!==-1&&(e=e.replace(/\s*(<figcaption[^>]*>)/g,"$1"),e=e.replace(/<\/figcaption>\s*/g,"</figcaption>")),e.indexOf("[caption")!==-1&&(t=!0,e=e.replace(/\[caption[\s\S]+?\[\/caption\]/g,function(e){return e=e.replace(/<br([^>]*)>/g,"<wp-temp-br$1>"),e=e.replace(/<[^<>]+>/g,function(e){return e.replace(/[\n\t ]+/," ")}),e.replace(/\s*\n\s*/g,"<wp-temp-br />")})),e+="\n\n",e=e.replace(/<br \/>\s*<br \/>/gi,"\n\n"),e=e.replace(new RegExp("(<(?:"+r+")(?: [^>]*)?>)","gi"),"\n\n$1"),e=e.replace(new RegExp("(</(?:"+r+")>)","gi"),"$1\n\n"),e=e.replace(/<hr( [^>]*)?>/gi,"<hr$1>\n\n"),e=e.replace(/\s*<option/gi,"<option"),e=e.replace(/<\/option>\s*/gi,"</option>"),e=e.replace(/\n\s*\n+/g,"\n\n"),e=e.replace(/([\s\S]+?)\n\n/g,"<p>$1</p>\n"),e=e.replace(/<p>\s*?<\/p>/gi,""),e=e.replace(new RegExp("<p>\\s*(</?(?:"+r+")(?: [^>]*)?>)\\s*</p>","gi"),"$1"),e=e.replace(/<p>(<li.+?)<\/p>/gi,"$1"),e=e.replace(/<p>\s*<blockquote([^>]*)>/gi,"<blockquote$1><p>"),e=e.replace(/<\/blockquote>\s*<\/p>/gi,"</p></blockquote>"),e=e.replace(new RegExp("<p>\\s*(</?(?:"+r+")(?: [^>]*)?>)","gi"),"$1"),e=e.replace(new RegExp("(</?(?:"+r+")(?: [^>]*)?>)\\s*</p>","gi"),"$1"),e=e.replace(/(<br[^>]*>)\s*\n/gi,"$1"),e=e.replace(/\s*\n/g,"<br />\n"),e=e.replace(new RegExp("(</?(?:"+r+")[^>]*>)\\s*<br />","gi"),"$1"),e=e.replace(/<br \/>(\s*<\/?(?:p|li|div|dl|dd|dt|th|pre|td|ul|ol)>)/gi,"$1"),e=e.replace(/(?:<p>|<br ?\/?>)*\s*\[caption([^\[]+)\[\/caption\]\s*(?:<\/p>|<br ?\/?>)*/gi,"[caption$1[/caption]"),e=e.replace(/(<(?:div|th|td|form|fieldset|dd)[^>]*>)(.*?)<\/p>/g,function(e,n,t){return t.match(/<p( [^>]*)?>/)?e:n+"<p>"+t+"</p>"}),n&&(e=e.replace(/<wp-line-break>/g,"\n")),t&&(e=e.replace(/<wp-temp-br([^>]*)>/g,"<br$1>")),e)}function a(n){var t={o:d,data:n,unfiltered:n};return e&&e("body").trigger("beforePreWpautop",[t]),t.data=p(t.data),e&&e("body").trigger("afterPreWpautop",[t]),t.data}function c(n){var t={o:d,data:n,unfiltered:n};return e&&e("body").trigger("beforeWpautop",[t]),t.data=i(t.data),e&&e("body").trigger("afterWpautop",[t]),t.data}var o,l,d={};return e?e(document).ready(n):document.addEventListener?(document.addEventListener("DOMContentLoaded",n,!1),window.addEventListener("load",n,!1)):window.attachEvent&&(window.attachEvent("onload",n),document.attachEvent("onreadystatechange",function(){"complete"===document.readyState&&n()})),window.wp=window.wp||{},window.wp.editor=window.wp.editor||{},window.wp.editor.autop=c,window.wp.editor.removep=a,d={go:r,wpautop:c,pre_wpautop:a,_wp_Autop:i,_wp_Nop:p}}window.switchEditors=new n}(window.jQuery);