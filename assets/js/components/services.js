jQuery(function ($) {
  const $sidebarLinks = $('.sidebar-item a');
  const $sections = $('.service');
  const offset = 80;

  // Scroll to section on click
  $sidebarLinks.on('click', function (e) {
    e.preventDefault();

    const targetId = $(this).data('target');
    const $target = $('#' + targetId);

    if ($target.length) {
      $('html, body').animate(
        { scrollTop: $target.offset().top - offset },
        500
      );
    }
  });

  // Highlight active section on scroll
  $(window).on('scroll', function () {
    const scrollPosition = $(window).scrollTop();

    $sections.each(function () {
      const $section = $(this);
      const top = $section.offset().top - offset;
      const bottom = top + $section.outerHeight();

      if (scrollPosition >= top && scrollPosition < bottom) {
        const sectionId = $section.attr('id');

        $sidebarLinks.removeClass('active');
        $sidebarLinks.each(function () {
          if ($(this).data('target') === sectionId) {
            $(this).addClass('active');
          }
        });
      }
    });
  });

  // Trigger scroll on load to set initial active link
  $(window).trigger('scroll');
});

