$(document).ready(function() {
    // check input
    var $btnSubmit = $('#add_input');
    var $title = $('#title_input');
    var $url = $('#url_input');
    var $desc = $('#description_input');
    var $image = $('#image_input');
	var $tag = $('#tag_input');
    $btnSubmit.on('click', function(event) {
    	
	    var $content = CKEDITOR.instances.content_input.getData();
	    var $content_d = $("#content_input");

        if ($title.val().length <= 0 || $url.val().length <= 0 || $desc.val().length <= 0 || $content.length <= 0 || $image.val().length <= 0 || $tag.val().length <= 0) {
        	alert("Data input is null. Try again!");
        	return false;
        }

        if($title.val().length < 10 || $title.val().length > 200 ){
        	alert("Title too short or too long (Min 10 and Max 200 character). Try again!");
        	return false;
        }

        if($url.val().length < 10 || $url.val().length > 200 ){
        	alert("Url too short or too long (Min 10 and Max 200 character). Try again!");
        	return false;
        }

        if($desc.val().length < 10 || $desc.val().length > 200 ){
        	alert("Description too short or too long (Min 10 and Max 200 character). Try again!");
        	return false;
        }

        if($content.length < 20 ){
        	alert("Content too short or too long (Min 20 and Max 200 character). Try again!");
        	return false;
        }
        
        if($tag.val().length < 5 || $tag.val().length > 200 ){
        	alert("Tag too short or too long (Min 5 and Max 200 character). Try again!");
        	return false;
        }
        
        if(_validateImage($image.val()) == false){
        	alert("Format image invalid! (*.jpg, *.png, *.gif, *.jpeg, *.bmp) Try again!");
        	return false;
        }
        
        return true;
    });

    $title.on('blur', function(event) {
        var strUrl = convertUrl($title.val());
        if ($title.val().length > 0) {
            $url.val(strUrl);
        }
    });


    // Function
    function convertUrl(str) {
        str = str.toLowerCase();
        str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ |ặ|ẳ|ẵ/g, "a");
        str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
        str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
        str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
        str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
        str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
        str = str.replace(/đ/g, "d");
        str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|\–|$|_/g, "-");
        /* tìm và thay thế các kí tự đặc biệt trong chuỗi sang kí tự - */
        str = str.replace(/-+-/g, "-"); //thay thế 2- thành 1-
        str = str.replace(/^\-+|\-+$/g, "");
        return str;
    }

    var _extensionImage = ['.jpg', '.png', '.bmp', '.jpeg', '.gif'];
    function validateImage(image){
    	var _validReturn = false;
    	var str  ='';
    	for (var i = 0; i < _extensionImage.length; i++) {
    		if(image.substr(image.length-_extensionImage[i].length, _extensionImage[i].length).toLowerCase() === _extensionImage[i].toLowerCase()){
    			_validReturn = true;
    			break;
    		}

    	}

    	if(!_validReturn){
    		return false;
    	}
    	return true;
    }
    $('#lvd_tag').lvd_tag();
});
