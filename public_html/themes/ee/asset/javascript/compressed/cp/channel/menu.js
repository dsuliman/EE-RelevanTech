/**
 * ExpressionEngine (https://expressionengine.com)
 *
 * @link      https://expressionengine.com/
 * @copyright Copyright (c) 2003-2017, EllisLab, Inc. (https://ellislab.com)
 * @license   https://expressionengine.com/license
 */
$(document).ready(function(){function t(){var t=$("<input/>",{type:"file",name:"set_file"}),e=$("<form/>",{method:"post",action:EE.sets.importUrl,enctype:"multipart/form-data","class":"hidden"}).append($("<input/>",{type:"hidden",name:"csrf_token",value:EE.CSRF_TOKEN})).append(t);t.on("change",function(t){e.submit()}),$('a[rel="import-channel"]').click(function(e){e.preventDefault(),t.click()}).after(e)}$(".sidebar .folder-list .remove a.m-link").click(function(t){var e="."+$(this).attr("rel");$(e+" .checklist").html(""),$(e+" .checklist").append("<li>"+$(this).data("confirm")+"</li>"),$(e+" input[name='content_id']").val($(this).data("content_id")),t.preventDefault()}),t()});