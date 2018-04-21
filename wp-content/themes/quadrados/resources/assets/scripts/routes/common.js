export default {
  init() {
    // JavaScript to be fired on all pages

    $('.hamburger-menu').click(function() {
        $('.closed').toggle();
        $('.open').toggle();
        $('.nav-menu').toggle();
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
