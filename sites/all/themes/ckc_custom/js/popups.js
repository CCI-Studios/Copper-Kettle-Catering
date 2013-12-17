(function($) {
	$(function () {
		$("body.page-node-8 #block-system-main img").parent().filter("a").click(function(){
			return hs.expand(this);
		});
	});
}(jQuery));