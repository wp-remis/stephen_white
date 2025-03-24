import Swiper from 'swiper/bundle';

let swiperInstance = null;

function initializeSwiper() {
  // Destroy existing instance if it exists
  if (swiperInstance) {
    swiperInstance.destroy(true, true);
    swiperInstance = null;
  }

  // Reinitialize
  swiperInstance = new Swiper(".projects", {
    slidesPerView: 1.1,
    spaceBetween: 13,
    loop: true,
    centeredSlides: true,
    pagination: {
      el: null,
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 24,
      },
    },
    on: {
      init: matchSlideHeights,
      resize: matchSlideHeights,
      slideChange: matchSlideHeights,
    },
  });
}

function matchSlideHeights() {
  const slides = document.querySelectorAll('.projects .swiper-slide');
  let maxHeight = 0;

  slides.forEach(slide => {
    slide.style.height = 'auto';
  });

  slides.forEach(slide => {
    const height = slide.offsetHeight;
    if (height > maxHeight) maxHeight = height;
  });

  slides.forEach(slide => {
    slide.style.height = `${maxHeight}px`;
  });
}

// Gutenberg detection
const isEditor = window.location.pathname.includes('/wp-admin/post.php');

if (isEditor) {
  window.addEventListener('DOMContentLoaded', () => {
    setTimeout(() => initializeSwiper(), 300);
  });

  // Reinitialize when block is updated (Gutenberg editor)
  if (window.wp && wp.data && wp.data.subscribe) {
    const { select } = wp.data;
    let prevBlocks = select('core/block-editor').getBlocks();

    wp.data.subscribe(() => {
      const blocks = select('core/block-editor').getBlocks();
      if (blocks !== prevBlocks) {
        prevBlocks = blocks;
        setTimeout(() => initializeSwiper(), 300);
      }
    });
  }
} else {
  // Frontend
  window.addEventListener('DOMContentLoaded', initializeSwiper);
}
