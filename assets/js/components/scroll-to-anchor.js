jQuery(function ($) {
  const offset = 80;
  const $headerLinks = $('nav#site-navigation a[href*="#"]');
  let sections = [];

  // Smooth scroll (excluding sidebar links)
  $('a[href*="#"]').on('click', function (e) {
    if ($(this).closest('.sidebar-item').length) return;

    const targetId = this.hash;
    const $target = $(targetId);
    if ($target.length) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: $target.offset().top - offset }, 500);
    }
  });

  function updateSectionOffsets() {
    sections = [];

    $headerLinks.each(function () {
      const hash = this.hash;
      const $section = $(hash);
      if ($section.length) {
        sections.push({
          id: hash,
          top: $section.offset().top,
          bottom: $section.offset().top + $section.outerHeight(),
        });
      }
    });
  }

  function updateActiveMenuItem() {
    const scrollTop = $(window).scrollTop() + offset + 1;

    let currentId = null;
    sections.forEach((section) => {
      if (scrollTop >= section.top && scrollTop < section.bottom) {
        currentId = section.id;
      }
    });

    $headerLinks.each(function () {
      const $parent = $(this).parent();
      if (this.hash === currentId) {
        $parent.addClass('current-menu-item');
      } else {
        $parent.removeClass('current-menu-item');
      }
    });
  }

  // Run on load and scroll
  $(window).on('load resize', updateSectionOffsets);
  $(window).on('scroll', updateActiveMenuItem);

  // Initial check in case user lands mid-page
  setTimeout(function () {
    updateSectionOffsets();
    updateActiveMenuItem();
  }, 100);
});
