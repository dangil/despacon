// JavaScript Document

/*

<script type="text/javascript">
		<!--
		insertFlash('flashBanner','website/atributos/filmes/banner.swf','788','262','1');
		-->
</script>

OBS: 1 = Transparent
     2 = Nao Transparente


*/

//	FUNCTION TO INSERT FLASH
function insertFlash(flashId,flashURL,flashWidth,flashHeight,flashWmode){
	var $id = document.getElementById(flashId);
	var $url = flashURL;
	var $w = flashWidth;
	var $h = flashHeight;
	var $wmode = flashWmode;
	
	if($wmode==1){
		$att= "wmode='transparent'";
		$tag = "<param name='wmode' value='transparent' />";
	}else{
		$att = '';
		$tag = '';
	}
	
	var $archive = "<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0' width='"+$w+"' height='"+$h+"'>"+$tag+"<param name='movie' value='"+$url+"' /><param name='quality' value='high' /><embed src='"+$url+"' "+$att+" quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' width='"+$w+"' height='"+$h+"'></embed></object>";
	
	$id.innerHTML = $archive;
}

function Flash(){
	
	this.to;
	this.id = 'f_0';
	this.quality = 'high';
	this.bgcolor = '#FFFFFF';
	this.wmode = false;
	this.flashVars;
	this.url;
	this.name = 'flash';
	this.width;
	this.height;
	this.align = 'middle';
	
	this.setTo = function(setToId){
		this.to = document.getElementById(setToId);
	}
	
	this.render = function(){
		if(this.wmode===false){
			var $param = '';
			var $embed = '';
		}else{
			var $param = '<param name=\'wmode\' value=\'Transparent\' />';
			var $embed = 'wmode=\'transparent\'';
		}
		var $obj = "<object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0' width='"+this.width+"' height='"+this.height+"' id='"+this.id+"' align='"+this.align+"'><param name='allowScriptAccess' value='sameDomain' /><param name='movie' value='"+this.url+"' /><param name='quality' value='"+this.quality+"' /><param name='bgcolor' value='"+this.bgcolor+"' />"+$param+"<param name='FlashVars' value='"+this.flashVars+"' /><embed src='"+this.url+"' FlashVars='"+this.flashVars+"' quality='"+this.quality+"' bgcolor='"+this.bgcolor+"' width='"+this.width+"' height='"+this.height+"' name='"+this.name+"' align='"+this.align+"' allowscriptaccess='sameDomain' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer' "+$embed+" /></object>";
		this.to.innerHTML = $obj;
	}
	
}