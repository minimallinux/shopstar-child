jQuery(document).ready(function() {
// setting the tabs in the sidebar hide and show, setting the current tab
	jQuery('div.tabbed div').hide();
	jQuery('div.t1').show();
	jQuery('div.tabbed ul.tabs li.t1 a').addClass('tab-current');

// SIDEBAR TABS
jQuery('div.tabbed ul li a').click(function(){
	var thisClass = this.className.slice(0,2);
	jQuery('div.tabbed div').hide();
	jQuery('div.' + thisClass).show();
	jQuery('div.tabbed ul.tabs li a').removeClass('tab-current');
	jQuery(this).addClass('tab-current');
	});
});
