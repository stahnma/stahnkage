/*
	Title: hugSiteMap, VisualScottMap
	Author: Scott Jehl, www.scottjehl.com
	Purpose: This script gets the width of the sitemap and sets its parent container to the same width.
			Units are in ems for scaling text.
*/
function hugSiteMap(){
	var sitemap = document.getElementById('sitemap');
	var contain = document.getElementById('contain');
	var smWidth = sitemap.offsetWidth;
	smWidth = smWidth+'';
	var lastSpot = smWidth.length - 1;
	var lastChar = smWidth[lastSpot];
	emVal = smWidth.substring(0, lastSpot);
	emString = emVal + '.' + lastChar;
	var emWidth = emString + "em";
	contain.style.width = emWidth;
}
addEvent(window, 'load', hugSiteMap);	