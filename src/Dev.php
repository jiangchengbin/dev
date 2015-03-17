<?php namespace Jiangchengbin\Dev;

class Dev{
	public function dump($value){
		echo '<pre>';
		var_dump($value);
		echo '</pre>';
	}
	
	public function id($id)
	{
		return "?id=$id";
	}
	
	public function pic($pre,$name,$value)
	{
		$host = env('RES_IMG');
		$desc = $pre."_".$name;
		
		
		$timestamp 	= time();
		$token		= md5('unique_salt' . $timestamp);
		
		
		$vals = <<<EOF
	<input id='{$desc}_input'  name='{$name}' 	type='hidden' value='$value' >
    <img   id='{$desc}_img'    src ='{$host}{$value}'>
    <input class='up_file' id='{$desc}_upload' name='{$name}' 	type='file' multiple=false>
            
            
	<script type="text/javascript">
	    $(function() {
	        $('#{$desc}_upload').uploadify({
	            'formData'			: {
	                'timestamp' 	: '{$timestamp}',
	                'token'     	: '{$token}'
	            },
	            'debug'	   			: false,
	            'auto'	   			: true,
	            'buttonText'		: '选择图片',
	            'swf'       		: '/lib/up/uploadify.swf',
	            'fileTypeDesc'		: '支持的格式：',
	            'fileTypeExts'		: '*.jpg;*.jpge;*.gif;*.png',
	            'fileSizeLimit' 	: '2MB',
	            'uploader'    		: '/lib/up/merch.php',
	            'hideButton'		:true,
	            'multi'				:false,
	            'onUploadSuccess'	: function(file,data,response){
	                $("#{$desc}_img").attr("src", data);
	                $("#{$desc}_input").attr("value", data);
	            }
	        });
	    });
	</script>
EOF;
		return $vals;
	}
	
	public function video($name,$value="")
	{
		$host = env('RES_IMG');
		$desc = $name;
		
		$timestamp 	= time();
		$token		= md5('unique_salt' . $timestamp);
		$vals = <<<EOF
	<input id='{$desc}_input'  name='{$name}' 	type='test' value='$value' >
	<input id='{$desc}_upload' name='{$name}' 	type='file' multiple=false>
	<script type="text/javascript">
	    $(function() {
	        $('#{$desc}_upload').uploadify({
	            'formData'			: {
	                'timestamp' 	: '{$timestamp}',
	                'token'     	: '{$token}'
	            },
	            'debug'	   			: false,
	            'auto'	   			: true,
	            'buttonText'		: '选择视频',
	            'swf'       		: '/lib/up/uploadify.swf',
	            'fileTypeDesc'		: '支持的格式：',
	            'fileTypeExts'		: '*.jpg;*.jpge;*.gif;*.png',
	            'fileSizeLimit' 	: '10MB',
	            'uploader'    		: '/lib/up/video.php',
	            'hideButton'		:true,
	            'multi'				:false,
	            'onUploadSuccess'	: function(file,data,response){
	                $("#{$desc}_img").attr("src", data);
	                $("#{$desc}_input").attr("value", data);
	            }
	        });
	    });
	</script>
EOF;
		return $vals;
	}
}
