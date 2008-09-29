/*
	Title: addClasses, ScottMap
	Author: Scott Jehl, www.scottjehl.com
	Purpose: This script will loop through an embedded Definition List and add classnames "first" and "last" to the first and last DD in each DL.
				It also adds a className "ddTree" to any dd that is deeper than first-level and contains a dl. 
				It starts by taking each DL element on the page and getting its child dd's.
				Then it makes an array of the dd's that are first-children of the top-level dl.
				It then assigns class names to the first and last dd's in this array.
				The next loop goes through the second-level DL's and adds a class to any dd's with a child dl.
				These classes can then be used to simulate the css pseudo-selectors :first-child and :last-child for browsers that don't support it.
				The "ddTree" class is there to 'un-float' and remove top-padding from those dd's, since it gets doubled up.
*/			
			
function addClasses(){
	//set the home dt's classname to first
	var sitemap = document.getElementById('sitemap');
	var firstDT = sitemap.getElementsByTagName('dt')[0];
	firstDT.className+=firstDT.className?' root':'root';
	//get all the dls
	var dls = document.getElementsByTagName('dl');
		//for each dl loop through and add first, last
		for(i=0; i<dls.length; i++){
			var thisDL = dls[i];
			//get all the dds in this dl
			var dds = thisDL.getElementsByTagName('dd');
			//make an array of the direct children of this dl
			var thisDLfirstChilds = new Array;
			var k = 0;
				//for each dd in the dl
				for(j=0; j<dds.length; j++){
					var thisDD = dds[j];
						if(thisDD.parentNode == thisDL){
							thisDLfirstChilds[k] = thisDD;
							k++;
						}
				}
			//give the first and last nodes of this DL some classnames
				if (!/\bfirst\b/.exec(thisDLfirstChilds[0].className)) {
					thisDLfirstChilds[0].className+=thisDLfirstChilds[0].className?' first':'first';
				}
				var m = thisDLfirstChilds.length - 1;
				if (!/\blast\b/.exec(thisDLfirstChilds[m].className)) {
					thisDLfirstChilds[m].className+=thisDLfirstChilds[m].className?' last':'last';
				}
		}
	//add the ddTree classname to any dd's beneath top-level that have a dl inside them	
	var innerDLs = sitemap.getElementsByTagName('dl');
	for(n=0;n<innerDLs.length; n++){
		var thisInnerDL = innerDLs[n];
		var deepDDs = thisInnerDL.getElementsByTagName('dd');
		for(o=0;o<deepDDs.length; o++){
			var thisDeepDD = deepDDs[o];
			if(thisDeepDD.firstChild.nodeName != 'A'){
				thisDeepDD.className+=thisDeepDD.className?' ddTree':'ddTree';
			}
		}
	}	
		
}
addEvent(window, 'load', addClasses);
