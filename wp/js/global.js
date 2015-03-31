// From sass/_typography.scss
var base_font_size   = 18,
    base_line_height = 27;

$$('.post_thumb').each(function(el) {
    var sizes = el.getSize();
    var y = sizes.y;
    el.setStyle('height', (y-(y%base_line_height)) + 'px');
});