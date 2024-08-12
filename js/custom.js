$(window).on("load", function () {
  $(".loader").fadeOut();
});

AOS.init();

$(".search_control").click(function () {
  $(".search-form-main").toggleClass("active-search");
  $(".search-form-main .search-field").focus();
});

$("#toggleButton").on("click", function () {
  $(".filter_wrapper_sec").toggleClass("filter_for_mobile");
});

$(document).on("click", function (event) {
  const filterWrapper = $(".filter_wrapper_sec");
  const isClickInside =
    filterWrapper.is(event.target) ||
    filterWrapper.has(event.target).length > 0;
  const isToggleButton = $(event.target).is("#toggleButton");

  if (!isClickInside && !isToggleButton) {
    filterWrapper.removeClass("filter_for_mobile");
  }
});

const new_arival_slide_top = new Swiper(".new_arival_slide_top", {
  speed: 1000,
  slidesPerView: 2.6,
  parallax: true,
  spaceBetween: 100,
  loop: true,

  // centeredSlides: true,
  autoplay: {
    delay: 200000,
    disableOnInteraction: true,
  },
  pagination: {
    el: ".new_arival_slide_top_pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".new_arival_slide_top_next",
    prevEl: ".new_arival_slide_top_prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    991: {
      slidesPerView: 2.6,
      spaceBetween: 100,
    },
  },
});

const new_arival_slide_bottom = new Swiper(".new_arival_slide_bottom", {
  speed: 1000,
  slidesPerView: 2.6,
  parallax: true,
  spaceBetween: 100,
  loop: true,

  // centeredSlides: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
    reverseDirection: true,
  },
  pagination: {
    el: ".new_arival_slide_bottom_pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".new_arival_slide_bottom_next",
    prevEl: ".new_arival_slide_bottom_prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    991: {
      slidesPerView: 2.6,
      spaceBetween: 100,
    },
  },
});

const latest_product_sldier = new Swiper(".latest_product_sldier", {
  speed: 1000,
  slidesPerView: 5,
  spaceBetween: 30,
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 2000,
  },
  pagination: {
    el: ".latest_product_sldier_pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".latest_product_sldier_next",
    prevEl: ".latest_product_sldier_prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    599: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    767: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    1199: {
      slidesPerView: 5,
      spaceBetween: 30,
    },
  },
});

const latest_product_mobile = new Swiper(".latest_product_mobile", {
  speed: 1000,
  slidesPerView: 5,
  spaceBetween: 30,
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 2000,
  },
  pagination: {
    el: ".latest_product_mobile_pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".latest_product_mobile_next",
    prevEl: ".latest_product_mobile_prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    991: {
      slidesPerView: 3,
      spaceBetween: 30,
      centeredSlides: false,
    },
    599: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    1199: {
      slidesPerView: 5,
      spaceBetween: 30,
    },
  },
});

const recomd_product_slide = new Swiper(".recomd_product_slide", {
  speed: 1000,
  slidesPerView: 4,
  spaceBetween: 30,
  loop: true,
  autoplay: {
    delay: 20000,
  },
  pagination: {
    el: ".latest_product_sldier_pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".recomd_product_slide_next",
    prevEl: ".recomd_product_slide_prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    599: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    759: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    991: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  },
});

const latest_news_slide = new Swiper(".latest_news_slide", {
  speed: 2000,
  slidesPerView: 3,
  parallax: true,
  spaceBetween: 30,
  loop: false,
  centeredSlides: false,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
    reverseDirection: false,
  },
  pagination: {
    el: ".latest_news_slide_pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".latest_news_slide_next",
    prevEl: ".latest_news_slide_prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    759: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    991: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});

const instagram_post_slide = new Swiper(".instagram_post_slide", {
  speed: 1000,
  autoplay: {
    delay: 1000,
  },
  draggable: false,
  effect: "coverflow",
  loop: "false",
  slidesPerView: 4,
  centeredSlides: true,
  coverflowEffect: {
    slideShadows: true,
    rotate: 30,
    stretch: 10,
    depth: 100,
    modifier: 1,
  },
  navigation: {
    nextEl: ".instagram_post_slide_next",
    prevEl: ".instagram_post_slide_prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    991: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  },
});

const testimonial_slider = new Swiper(".testimonial_slider", {
  speed: 3000,
  autoplay: {
    delay: 3000,
  },
  draggable: false,
  loop: "true",
  slidesPerView: 3,
  centeredSlides: true,

  navigation: {
    nextEl: ".testimonial_slider_next",
    prevEl: ".testimonial_slider_prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    991: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    759: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
  },
});

var swiper = new Swiper(".mobile_hero_slider_thumb", {
  loop: true,
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".mobile_hero_slider", {
  loop: true,
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },
});

var swiper = new Swiper(".product_uses_card_slide", {
  effect: "cards",
  grabCursor: true,
});

const initSlider = (selector, options = {}) => {
  const sliderContainers = document.querySelectorAll(selector);

  if (sliderContainers.length) {
    sliderContainers.forEach((container) => {
      const slider = container.querySelector(".swiper-container");
      const paging = container.querySelector(".js-paging");
      let prev;
      let next;

      if (paging) {
        prev = paging.querySelector(".js-paging-prev");
        next = paging.querySelector(".js-paging-next");
      }

      const swiper = new Swiper(slider, {
        loop: false,
        speed: 1000,
        slidesPerView: 4,
        centeredSlides: false,
        spaceBetween: 30,
        grabCursor: true,
        breakpoints: {
          320: {
            slidesPerView: 3,
            spaceBetween: 20,
            centeredSlides: true,
            loop: true,
          },
          991: {
            slidesPerView: 4,
            spaceBetween: 30,
          },
        },

        ...options,
      });

      next.addEventListener("click", () => {
        swiper.slideNext(1000);
      });
      prev.addEventListener("click", () => {
        swiper.slidePrev(1000);
      });

      // Used for animations on slider dragging
      swiper.on("touchMove", ({ el }) => {
        el.classList.add("dragged");
      });
      swiper.on("touchEnd", ({ el }) => {
        el.classList.remove("dragged");
      });
    });
  }
};

initSlider(".js-slider");

//---------------------
// CURSOR CODE
//---------------------

// set the starting position of the cursor outside of the screen
let clientX = -100;
let clientY = -100;
let lastX = -100;
let lastY = -100;
const cursor = document.querySelector(".cursor");
const section = document.querySelector(".slider");

// Show/hide the cursor when it is over the section
if (section) {
  section.addEventListener("mouseenter", () => {
    cursor.classList.add("visible");
  });

  section.addEventListener("mouseleave", () => {
    cursor.classList.remove("visible");
  });
}

// function for linear interpolation of values
const lerp = (a, b, n) => {
  return (1 - n) * a + n * b;
};

const initCursor = () => {
  if (!cursor) return;

  // add listener to track the current mouse position
  document.addEventListener("mousemove", (e) => {
    clientX = e.clientX;
    clientY = e.clientY;
  });

  // transform the cursor to the current mouse position
  // use requestAnimationFrame() for smooth performance
  const render = () => {
    // lesser delta, greater the delay that the custom cursor follows the real cursor
    const delta = 0.1;
    lastX = lerp(lastX, clientX, delta);
    lastY = lerp(lastY, clientY, delta);

    cursor.style.transform = `translate(${lastX}px, ${lastY}px)`;

    requestAnimationFrame(render);
  };

  requestAnimationFrame(render);
};

initCursor();

/**************Range Slider***************/
const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  range = document.querySelector(".range_slider .progress");
let priceGap = 1000;

priceInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minPrice = parseInt(priceInput[0].value),
      maxPrice = parseInt(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
      if (e.target.className === "input-min") {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
      }
    }
  });
});

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minVal = parseInt(rangeInput[0].value),
      maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === "range-min") {
        rangeInput[0].value = maxVal - priceGap;
      } else {
        rangeInput[1].value = minVal + priceGap;
      }
    } else {
      priceInput[0].value = minVal;
      priceInput[1].value = maxVal;
      range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
  });
});

var swiper = new Swiper(".single_product_thumb", {
  spaceBetween: 30,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
  breakpoints: {
    320: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    991: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  },
});
var swiper2 = new Swiper(".single_product_main", {
  spaceBetween: 10,
  navigation: {
    nextEl: ".single_product_main_next",
    prevEl: ".single_product_main_prev",
  },
  thumbs: {
    swiper: swiper,
  },
});

let counter = 0;

function increment() {
  counter++;
  document.getElementById("counter").innerText = counter;
}

function decrement() {
  if (counter > 0) {
    counter--;
    document.getElementById("counter").innerText = counter;
  }
}

document.addEventListener("DOMContentLoaded", function () {
  const items = document.querySelectorAll(".usees_item .uses_single_item");

  // Event listener for hovering over any item
  items.forEach(function (item) {
    item.addEventListener("mouseover", function (event) {
      // Remove 'opaque' class from all items
      items.forEach(function (item) {
        item.classList.remove("opaque");
      });
      // Add 'opaque' class to the hovered item
      event.target.classList.add("opaque");
    });

    // Event listener for hovering out of any item
    item.addEventListener("mouseout", function (event) {
      // Remove 'opaque' class from the item
      event.target.classList.remove("opaque");
    });
  });
});
