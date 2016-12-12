
// gather up all our elements
var viewSourceLink = document.getElementById('view-source');
var cssElement     = document.getElementById('css-file');
var nextLi         = document.getElementById('next-design');
var nextA          = document.getElementById('next-link');
var prevLi         = document.getElementById('previous-design');
var prevA          = document.getElementById('previous-link');
var designList     = document.getElementById('design-list');
var g_perpage      = 8;
var g_currentPage  = null; // 0 based index of current "page" id
var g_pageSets     = {};   // All the navigation pages' html contents

// function to keep the "view css source" link correctly pointed
function updateViewSourceLink() {
	viewSourceLink.href = cssElement.href;
}

// set the current page and initialize all the pageSets
function initCurrentPage() {
	var page;
	for (var i in g_designs) {
		page = Math.floor(i/g_perpage);
		if (!g_pageSets.hasOwnProperty(page)) {
			g_pageSets[page] = '';
		}
		g_pageSets[page] += '<li><a href="#'+ g_designs[i][0] +'" class="design-name">'+ g_designs[i][1] +'</a> by <a href="'+ g_designs[i][3] +'" class="designer-name">'+ g_designs[i][2] +'</a></li>';
		if (g_designs[i][0] == design) {
			g_currentPage = page;
		}
	}
	if (design == '001') {
		g_currentPage = page;
	}
}

// change which page set is showing and update next/prev button visiblity
function updateNavToPage(page) {

	// valid page? that's gonna be needed
	if (!g_pageSets.hasOwnProperty(page)) {
		return;
	}

	// set the html and page
	designList.innerHTML = g_pageSets[page];
	g_currentPage = page;

	// rebind the links to change designs
	var links = document.getElementsByClassName('design-name');
	var change = function() {
		changeDesign(this.href.split('#')[1]);
	};
	for (var i in links) {
		links[i].onclick = change;
	}

	// hide/unhide prev/next links -- use visibility in case designers want display:inline.
	// todo: could utilize classes to denote "hidden" and "visible"
	prevLi.style.visibility = g_pageSets.hasOwnProperty(page-1) ? 'visible' : 'hidden';
	nextLi.style.visibility = g_pageSets.hasOwnProperty(page+1) ? 'visible' : 'hidden';

}

// the real meat of this which changes our CSS/links/hash around properly
function changeDesign(designId) {
	design = designId;
	window.location.hash = '#' + design;
	cssElement.href = design + '/' + design + '.css';
	updateViewSourceLink();
}

// hook into the links to execute the design change
prevA.onclick = function(){
	updateNavToPage(g_currentPage-1);
	return false;
};
nextA.onclick = function(){
	updateNavToPage(g_currentPage+1);
	return false;
};

// one first load, get everything squared away
initCurrentPage();
updateNavToPage(g_currentPage);
updateViewSourceLink();
