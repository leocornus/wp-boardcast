jQuery(document).ready(function($) {

    // get ready the tooltip message.
    var tooltip = '<span class="tip">OPSpedia has new updates</span>';
    $('body').append(tooltip);

    // find the right position:
    var left = $('#wp-admin-bar-boardcast > .ab-item > .ab-icon').offset()['left'];

    //var selector = "div.tooltips > span";
    var selector = "span.tip";

    var showProperty = {
      "opacity": 1,
      "top": "43px",
      "left": left + "px",
      "margin-left": "-180px",
    };

    $(selector).animate(showProperty, 1000,
                                     function() {
        setTimeout(function() {
            // set the tooltips to disappear
            $(selector).animate({opacity: 0}, 2000);
        }, 3000);
    });
});
