!function($){function e(){function e(){!c&&window.tinymce&&(c=window.tinymce,o=c.$,o(document).on("click",function(e){var n,r,p=o(e.target);p.hasClass("wp-switch-editor")&&(n=p.attr("data-wp-editor-id"),r=p.hasClass("switch-tmce")?"tmce":"html",t(n,r))}))}function n(e){var n=o(".mce-toolbar-grp",e.getContainer())[0],t=n&&n.clientHeight;return t&&t>10&&t<200?parseInt(t,10):30}function t(e,t){e=e||"content",t=t||"toggle";var r,p,i,a=c.get(e),l=o("#wp-"+e+"-wrap"),d=o("#"+e),s=d[0];if("toggle"===t&&(t=a&&!a.isHidden()?"html":"tmce"),"tmce"===t||"tinymce"===t){if(a&&!a.isHidden())return!1;"undefined"!=typeof window.QTags&&window.QTags.closeAllTags(e),r=parseInt(s.style.height,10)||0,a?(a.show(),!c.Env.iOS&&r&&(p=n(a),r=r-p+14,r>50&&r<5e3&&a.theme.resizeTo(null,r))):c.init(window.tinyMCEPreInit.mceInit[e]),l.removeClass("html-active").addClass("tmce-active"),d.attr("aria-hidden",!0),window.setUserSetting("editor","tinymce")}else if("html"===t){if(a&&a.isHidden())return!1;a?(c.Env.iOS||(i=a.iframeElement,r=i?parseInt(i.style.height,10):0,r&&(p=n(a),r=r+p-14,r>50&&r<5e3&&(s.style.height=r+"px"))),a.hide()):d.css({display:"",visibility:""}),l.removeClass("tmce-active").addClass("html-active"),d.attr("aria-hidden",!1),window.setUserSetting("editor","html")}}function r(e){var n="blockquote|ul|ol|li|dl|dt|dd|table|thead|tbody|tfoot|tr|th|td|h[1-6]|fieldset|figure",t=n+"|div|p",r=n+"|pre",p=!1,i=!1,a=[];return e?(e.indexOf("<script")===-1&&e.indexOf("<style")===-1||(e=e.replace(/<(script|style)[^>]*>[\s\S]*?<\/\1>/g,function(e){return a.push(e),"<wp-preserve>"})),e.indexOf("<pre")!==-1&&(p=!0,e=e.replace(/<pre[^>]*>[\s\S]+?<\/pre>/g,function(e){return e=e.replace(/<br ?\/?>(\r\n|\n)?/g,"<wp-line-break>"),e=e.replace(/<\/?p( [^>]*)?>(\r\n|\n)?/g,"<wp-line-break>"),e.replace(/\r?\n/g,"<wp-line-break>")})),e.indexOf("[caption")!==-1&&(i=!0,e=e.replace(/\[caption[\s\S]+?\[\/caption\]/g,function(e){return e.replace(/<br([^>]*)>/g,"<wp-temp-br$1>").replace(/[\r\n\t]+/,"")})),e=e.replace(new RegExp("\\s*</("+t+")>\\s*","g"),"</$1>\n"),e=e.replace(new RegExp("\\s*<((?:"+t+")(?: [^>]*)?)>","g"),"\n<$1>"),e=e.replace(/(<p [^>]+>.*?)<\/p>/g,"$1</p#>"),e=e.replace(/<div( [^>]*)?>\s*<p>/gi,"<div$1>\n\n"),e=e.replace(/\s*<p>/gi,""),e=e.replace(/\s*<\/p>\s*/gi,"\n\n"),e=e.replace(/\n[\s\u00a0]+\n/g,"\n\n"),e=e.replace(/\s*<br ?\/?>\s*/gi,"\n"),e=e.replace(/\s*<div/g,"\n<div"),e=e.replace(/<\/div>\s*/g,"</div>\n"),e=e.replace(/\s*\[caption([^\[]+)\[\/caption\]\s*/gi,"\n\n[caption$1[/caption]\n\n"),e=e.replace(/caption\]\n\n+\[caption/g,"caption]\n\n[caption"),e=e.replace(new RegExp("\\s*<((?:"+r+")(?: [^>]*)?)\\s*>","g"),"\n<$1>"),e=e.replace(new RegExp("\\s*</("+r+")>\\s*","g"),"</$1>\n"),e=e.replace(/<((li|dt|dd)[^>]*)>/g," \t<$1>"),e.indexOf("<option")!==-1&&(e=e.replace(/\s*<option/g,"\n<option"),e=e.replace(/\s*<\/select>/g,"\n</select>")),e.indexOf("<hr")!==-1&&(e=e.replace(/\s*<hr( [^>]*)?>\s*/g,"\n\n<hr$1>\n\n")),e.indexOf("<object")!==-1&&(e=e.replace(/<object[\s\S]+?<\/object>/g,function(e){return e.replace(/[\r\n]+/g,"")})),e=e.replace(/<\/p#>/g,"</p>\n"),e=e.replace(/\s*(<p [^>]+>[\s\S]*?<\/p>)/g,"\n$1"),e=e.replace(/^\s+/,""),e=e.replace(/[\s\u00a0]+$/,""),p&&(e=e.replace(/<wp-line-break>/g,"\n")),i&&(e=e.replace(/<wp-temp-br([^>]*)>/g,"<br$1>")),a.length&&(e=e.replace(/<wp-preserve>/g,function(){return a.shift()})),e):""}function p(e){var n=!1,t=!1,r="table|thead|tfoot|caption|col|colgroup|tbody|tr|td|th|div|dl|dd|dt|ul|ol|li|pre|form|map|area|blockquote|address|math|style|p|h[1-6]|hr|fieldset|legend|section|article|aside|hgroup|header|footer|nav|figure|figcaption|details|menu|summary";return e=e.replace(/\r\n|\r/g,"\n"),e.indexOf("\n")===-1?e:(e.indexOf("<object")!==-1&&(e=e.replace(/<object[\s\S]+?<\/object>/g,function(e){return e.replace(/\n+/g,"")})),e=e.replace(/<[^<>]+>/g,function(e){return e.replace(/[\n\t ]+/g," ")}),e.indexOf("<pre")===-1&&e.indexOf("<script")===-1||(n=!0,e=e.replace(/<(pre|script)[^>]*>[\s\S]*?<\/\1>/g,function(e){return e.replace(/\n/g,"<wp-line-break>")})),e.indexOf("<figcaption")!==-1&&(e=e.replace(/\s*(<figcaption[^>]*>)/g,"$1"),e=e.replace(/<\/figcaption>\s*/g,"</figcaption>")),e.indexOf("[caption")!==-1&&(t=!0,e=e.replace(/\[caption[\s\S]+?\[\/caption\]/g,function(e){return e=e.replace(/<br([^>]*)>/g,"<wp-temp-br$1>"),e=e.replace(/<[^<>]+>/g,function(e){return e.replace(/[\n\t ]+/," ")}),e.replace(/\s*\n\s*/g,"<wp-temp-br />")})),e+="\n\n",e=e.replace(/<br \/>\s*<br \/>/gi,"\n\n"),e=e.replace(new RegExp("(<(?:"+r+")(?: [^>]*)?>)","gi"),"\n\n$1"),e=e.replace(new RegExp("(</(?:"+r+")>)","gi"),"$1\n\n"),e=e.replace(/<hr( [^>]*)?>/gi,"<hr$1>\n\n"),e=e.replace(/\s*<option/gi,"<option"),e=e.replace(/<\/option>\s*/gi,"</option>"),e=e.replace(/\n\s*\n+/g,"\n\n"),e=e.replace(/([\s\S]+?)\n\n/g,"<p>$1</p>\n"),e=e.replace(/<p>\s*?<\/p>/gi,""),e=e.replace(new RegExp("<p>\\s*(</?(?:"+r+")(?: [^>]*)?>)\\s*</p>","gi"),"$1"),e=e.replace(/<p>(<li.+?)<\/p>/gi,"$1"),e=e.replace(/<p>\s*<blockquote([^>]*)>/gi,"<blockquote$1><p>"),e=e.replace(/<\/blockquote>\s*<\/p>/gi,"</p></blockquote>"),e=e.replace(new RegExp("<p>\\s*(</?(?:"+r+")(?: [^>]*)?>)","gi"),"$1"),e=e.replace(new RegExp("(</?(?:"+r+")(?: [^>]*)?>)\\s*</p>","gi"),"$1"),e=e.replace(/(<br[^>]*>)\s*\n/gi,"$1"),e=e.replace(/\s*\n/g,"<br />\n"),e=e.replace(new RegExp("(</?(?:"+r+")[^>]*>)\\s*<br />","gi"),"$1"),e=e.replace(/<br \/>(\s*<\/?(?:p|li|div|dl|dd|dt|th|pre|td|ul|ol)>)/gi,"$1"),e=e.replace(/(?:<p>|<br ?\/?>)*\s*\[caption([^\[]+)\[\/caption\]\s*(?:<\/p>|<br ?\/?>)*/gi,"[caption$1[/caption]"),e=e.replace(/(<(?:div|th|td|form|fieldset|dd)[^>]*>)(.*?)<\/p>/g,function(e,n,t){return t.match(/<p( [^>]*)?>/)?e:n+"<p>"+t+"</p>"}),n&&(e=e.replace(/<wp-line-break>/g,"\n")),t&&(e=e.replace(/<wp-temp-br([^>]*)>/g,"<br$1>")),e)}function i(e){var n={o:l,data:e,unfiltered:e};return $&&$("body").trigger("beforePreWpautop",[n]),n.data=r(n.data),$&&$("body").trigger("afterPreWpautop",[n]),n.data}function a(e){var n={o:l,data:e,unfiltered:e};return $&&$("body").trigger("beforeWpautop",[n]),n.data=p(n.data),$&&$("body").trigger("afterWpautop",[n]),n.data}var c,o,l={};return $?$(document).ready(e):document.addEventListener?(document.addEventListener("DOMContentLoaded",e,!1),window.addEventListener("load",e,!1)):window.attachEvent&&(window.attachEvent("onload",e),document.attachEvent("onreadystatechange",function(){"complete"===document.readyState&&e()})),window.wp=window.wp||{},window.wp.editor=window.wp.editor||{},window.wp.editor.autop=a,window.wp.editor.removep=i,l={go:t,wpautop:a,pre_wpautop:i,_wp_Autop:p,_wp_Nop:r}}window.switchEditors=new e}(window.jQuery);