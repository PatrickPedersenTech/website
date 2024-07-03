const options = {
    animationDuration: 0.2,
    callbacks: {
        onInit: function() { },
        onFilteringStart: function() { },
        onFilteringEnd: function() { },
        onShufflingStart: function() { },
        onShufflingEnd: function() { },
        onSortingStart: function() { },
        onSortingEnd: function() { }
    },
    controlsSelector: '',
    delay: 0,
    delayMode: 'alternate',
    easing: 'linear',
    filter: 'all',
    filterOutCss: {
        opacity: 0,
        transform: 'scale(0,0)'
    },
    filterInCss: {
        opacity: 1,
        transform: 'scale(1,1)'
    },
    gridItemsSelector: '.filtr-item',
    gutterPixels: 0,
    layout: 'sameSize',
    multifilterLogicalOperator: 'or',
    searchTerm: '',
    setupControls: true,
    spinner: {
        enabled: false,
        fillColor: '#2184D0',
        styles: {
        height: '75px',
        margin: '0 auto',
        width: '75px',
        'z-index': 2,
        },
    },
}

const filterizr = new Filterizr('.filter-container', options);

var element = document.querySelectorAll(".filter-controls li");
element.forEach(function (el, key) {
    el.addEventListener("click", function () {
        el.classList.add("active");
        element.forEach(function (ell, els) {
        if (key !== els) {
            ell.classList.remove("active");
        }
        });
    });
});