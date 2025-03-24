jQuery(function ($) {
  const $menuButton = $('.site-header button');
  const $nav = $('#site-navigation');
  const $menuIcon = $menuButton.find('svg').first();
  const $closeIcon = $menuButton.find('svg').last();
  const breakpoint = 1280;

  // Toggle menu on button click
  $menuButton.on('click', function () {
    $nav.toggleClass('hidden');
    $menuIcon.toggleClass('hidden');
    $closeIcon.toggleClass('hidden');
  });

  // Close menu on nav link click (only for mobile)
  $nav.find('a').on('click', function () {
    if ($(window).width() < breakpoint) {
      $nav.addClass('hidden');
      $menuIcon.removeClass('hidden');
      $closeIcon.addClass('hidden');
    }
  });

  // Reset on resize to desktop
  $(window).on('resize', function () {
    if ($(window).width() >= breakpoint) {
      $nav.removeClass('hidden');
      $menuIcon.removeClass('hidden');
      $closeIcon.addClass('hidden');
    }
  });
});
