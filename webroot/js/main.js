// To ensure that elements are ready on polyfilled browsers,
// wait for WebComponentsReady.
document.addEventListener('WebComponentsReady', function() {
    // Listen for menu events
    var menu = document.querySelector('#menu');
    menu.selected = "index";
    menu.addEventListener('iron-select', function(event){
        var selected = event.target.selected;
        window.open("/pages/" + selected + ".php", '_blank');
    });
});
