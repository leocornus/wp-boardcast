jQuery(document).ready(function($) {

    // get ready the tooltip message.
    var tooltip = '<span class="tip">Check our new updates</span>';
    $('body').append(tooltip);

    //var selector = "div.tooltips > span";
    var selector = "span.tip";

    var showProperty = {
      opacity: 1,
      top: "43px",
      left: "900px",
      "margin-left": "-76px",
    };
    $(selector).animate(showProperty, 'slow',
                                     function() {
        setTimeout(function() {
            // set the tooltips to disappear
            $(selector).animate({opacity: 0}, 'slow');
        }, 2000);
    });
});
