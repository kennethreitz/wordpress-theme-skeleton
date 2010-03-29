$.fn.markCurrentLocation = function() {
	var path = window.location.href
	return this.each(function(){
		var self = $(this);
		var href = self.attr('href');
		if(RegExp(href).test(path)){
			self
				.wrap('<em></em>')
		}
	})
};