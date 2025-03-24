jQuery(function($) {
  const header = $('.site-header');

  function handleScroll() {
    if ($(window).scrollTop() > 10) {
      header.addClass('xl:py-[16px] xl:bg-black transition-all duration-300');
      header.removeClass('xl:py-[39px] xl:bg-transparent duration-300');
    } else {
      header.removeClass('xl:py-[16px] xl:bg-black transition-all duration-300');
      header.addClass('xl:py-[39px] xl:bg-transparent duration-300');
    }
  }

  $(window).on('scroll', handleScroll);
  handleScroll();
});
