(function($){
	"use strict"
	//Tag ID wrapper
	// Tag Element: span
	// List tag: array()
	// Input: id
	// Auto complete: true/false
	// Press Up Key: Comma(,)/Dot(.)/Semicolon(;)
	// Result return: array(); ['tag1', tag2,...tagn]
	$.fn.lvd_tag =  function(){
		
		var lvd_tag = $('#lvd_tag');
		
		return this.each(function(){
			var lvd_tag_content = $(this).find('.lvd-tag-content');
			var lvd_tag_input = $(this).find('.lvd-tag-input');
			var lvd_tag_list = $(this).find('.lvd-tag-list');
			var lvd_key_separate = 188; //keycode comma: 188
			var lvd_array_tag = ['tiag1', 'tag2', 'tag3', 'Lorem ipsum dolor.'];

			lvd_tag_input.keyup( function(e){
				var item_list = '';
				var lvd_array_list = [];
				if (e.keyCode === lvd_key_separate) {
					var tag = $(this).val().replace(/(\,)+/, '');
					var tag = $(this).val().replace(/(\,+)$/, '');
					if (tag.length > 1) {
						lvd_tag_content.append('<span class="lvd-tag-item">'+tag+'</span>');
						lvd_tag_input.val('');
						// lvd_tag_content.css({'background':'#333'});
					}
					
				}
				var tmp_tag = $(this).val();
				if (tmp_tag.length > 0) {
					for (var i = 0; i < lvd_array_tag.length; i++) {
						if (lvd_array_tag[i].substr(0, tmp_tag.length) === tmp_tag) {
							lvd_array_list.push(lvd_array_tag[i]);
						}
					}
				}else{
					lvd_array_list = [];
				}
				// console.log(lvd_array_list);

				if (lvd_array_list.length > 0) {
					for (var j = 0; j < lvd_array_list.length; j++) {
						item_list += '<li>'+lvd_array_list[j]+'</li>';
					}
					lvd_tag_list.html(item_list);
				}else{
					lvd_tag_list.html('');
				}
				
			});
		});
	};

})(jQuery);
