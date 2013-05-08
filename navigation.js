
// gather up all our elements
var viewSourceLink = document.getElementById('view-source');
var cssElement     = document.getElementById('css-file');
var nextLi         = document.getElementById('next-design');
var nextA          = document.getElementById('next-link');
var prevLi         = document.getElementById('previous-design');
var prevA          = document.getElementById('previous-link');
var designList     = document.getElementById('design-list');

// function to keep the "view css source" link correctly pointed
function updateViewSourceLink() {
    viewSourceLink.href = cssElement.href;
}

// A function to update both prev/next navigation in a single loop.
// todo: could possibly be most optimized, but this is O()fast enough.
function updateNav(prevNext, li, a) {
    var foundDesign = false;
    var designCount = g_designs.length;
    var current = 0;
    var i;
    while (current <= designCount) {
        if (prevNext == 'prev') {
            i = current;
        }
        else {
            i = designCount - (current+1);
        }
        if (g_designs[i][0] == design) {
            break;
        }
        foundDesign = g_designs[i];
        current++;
    }
    // we don't use display incase people want it to be block/inline/etc
    if (foundDesign) {
        li.style.visibility = 'visible';
        a.href = '#' + foundDesign[0];
    }
    else {
        li.style.visibility = 'hidden';
    }
}

// two little helper functions to trigger the real navigation button changer
function updateNext() {
    updateNav('next', nextLi, nextA);
}

function updatePrev() {
    updateNav('prev', prevLi, prevA);
}

// the real meat of this which changes our CSS/links/hash around properly
function changeDesign(designId) {
    design = designId;
    window.location.hash = '#' + design;
    cssElement.href = design + '/' + design + '.css';
    updateNext();
    updatePrev();
    updateViewSourceLink();
}

// hook into the links to execute the design change
prevA.onclick = nextA.onclick = function(){
    changeDesign(this.href.split('#')[1]);
    return false;
};

// one first load, get everything squared away
updateNext();
updatePrev();
updateViewSourceLink();
