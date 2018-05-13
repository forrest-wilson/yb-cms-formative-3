$(document).ready(function() {
    // Adds bootstrap classes to all blockquote elements on the page
    var blockquotes = document.getElementsByTagName("blockquote");

    for (var i = 0; i < blockquotes.length; i++) {
        var item = blockquotes[i];

        item.classList.add("col-lg-8", "col-sm-12", "offset-lg-2");
    }
});