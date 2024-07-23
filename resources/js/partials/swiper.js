// document.addEventListener("livewire:navigated", () => {
//     initFlowbite();
// });


import Swiper from "swiper";
import { Autoplay, Pagination, Navigation } from "swiper/modules";
import "swiper/swiper-bundle.css";





// ADVANTAGES
// document.addEventListener("livewire:navigated", () => {
//     new Swiper(".advantages-swiper", {
//         loop: true,
//         effect: "fade",
//         // grabCursor: true,
//         slidesPerView: 2,

//         breakpoints: {
//             450: {
//                 slidesPerView: 3,
//             },
//             650: {
//                 slidesPerView: 4,
//             },
//             1000: {
//                 slidesPerView: 5,
//             },
//             1250: {
//                 slidesPerView: 7,
//             },
//         },

//         autoplay: {
//             delay: 3500,
//             disableOnInteraction: true,
//             pauseOnMouseEnter: true,
//         },
//         navigation: {
//             nextEl: ".advantages-next",
//             prevEl: ".advantages-prev",
//         },

//         modules: [Autoplay, Navigation],
//     });
// });
//ATTRACTION GALLERY
document.addEventListener("livewire:navigated", () => {
    new Swiper(".attraction-gallery-swiper", {
        loop: true,
        slidesPerView: 1,
        centeredSlides: true,
        spaceBetween: 50,
        breakpoints: {
            650: {
                slidesPerView: 2,
            },
            1000: {
                slidesPerView: 3,
            },
            1500: {
                slidesPerView: 4,
            },
        },

        autoplay: {
            delay: 3500,
            disableOnInteraction: true,
            pauseOnMouseEnter: true,
        },
        navigation: {
            nextEl: ".attraction-gallery-next",
            prevEl: ".attraction-gallery-prev",
        },
       
        modules: [Autoplay, Navigation,]
    });
});
//ATTRACTION GALLERY
document.addEventListener("livewire:navigated", () => {
    new Swiper(".attraction-post-swiper", {
        loop: true,
        slidesPerView: 1,
        grabCursor:true,
        // centeredSlides: true,
        spaceBetween: 50,
        breakpoints: {

            1500: {
                slidesPerView: 3,
            },
        },

        autoplay: {
            delay: 3500,
            disableOnInteraction: true,
            pauseOnMouseEnter: true,
        },
      
       
        modules: [Autoplay,]
    });
});
