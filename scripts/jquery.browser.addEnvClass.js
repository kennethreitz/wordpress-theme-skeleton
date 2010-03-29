(function(){
	var ua = navigator.userAgent;
	var b = jQuery.browser;
	b.engine = '';
	b.mobile = false;

	if(/Windows/.test(ua)){
		b.os = 'win';
		b.win = true;
	}else if(/Mac/.test(ua)){
		b.os = 'mac';
		b.mac = true;
	}else if(/iPhone/.test(ua)){
		b.os = 'iphone';
		b.iphone = true;
	}

	if(/Chrome/.test(ua)){
		b.safari = false;
		b.chrome = true;
	}

	if(/Gecko/.test(ua)){
		b.gecko = true;
		b.engine = 'gecko'
	}if(/WebKit/.test(ua)){
		b.gecko = false;
		b.webkit = true;
		b.engine = 'webkit'
	}

	if(/Mobile/i.test(ua)){
		b.mobile = true;
	}
	
	if(b.msie){
		b.name = 'msie';
	}else if(b.opera){
		b.name = 'opera';
	}else if(b.safari){
		b.name = 'safari';
	}else if(b.chrome){
		b.name = 'chrome';
	}else if(b.mozilla){
		b.name = 'mozilla';
	}

	if(b.msie){
		b.ver = /MSIE (\d(.\d+)?)/.exec(ua)[1];
	}else if(b.mozilla){
		b.ver = /Firefox\/(\d(.\d+)?)/.exec(ua)[1];
	}else if(b.opera){
		b.ver = /Opera\/? ?(\d(\.\d+)?)/.exec(ua)[1];
	}else if(b.safari){
		b.ver = /Version\/(\d(\.\d+)+)/.exec(ua)[1];
	}else if(b.chrome){
		b.ver = /Chrome\/(\d(\.\d+)+)/.exec(ua)[1];
	}
})()

jQuery.fn.addEnvClass = function() {
	return this.each(function(){
		var self = jQuery(this);
		var b = jQuery.browser;
		self
			.addClass('js')
			.addClass(b.os)
			.addClass(b.name)
			.addClass(b.engine)
			.addClass('ver'+b.ver);
	
		if(b.msie){
			self.addClass('ie' + parseInt(b.ver));
		}
	})
};

jQuery('html').addEnvClass();