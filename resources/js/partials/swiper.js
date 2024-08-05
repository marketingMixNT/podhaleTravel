import Swiper from "swiper";
import { Autoplay, Pagination, Navigation } from "swiper/modules";
import "swiper/swiper-bundle.css";


//ATTRACTION GALLERY
document.addEventListener("livewire:navigated", () => {
    new Swiper(".attraction-gallery-swiper", {
        loop: true,
        slidesPerView: 1,
        centeredSlides: true,
        spaceBetween: 50,
        grabCursor:false,
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

    new Swiper(".attraction-posts-swiper", {
        loop: true,
        slidesPerView: 1,
        grabCursor:true,
   
        spaceBetween: 50,
        breakpoints: {
            850: {
                slidesPerView: 2,
            },
            1280: {
                slidesPerView: 2,
            }
        },

          

        autoplay: {
            delay: 3500,
            disableOnInteraction: true,
            pauseOnMouseEnter: true,
        },
      
       
        modules: [Autoplay,]
    });

});


// ATTRACTIONS POSTS
document.addEventListener("livewire:navigated", () => {
  
});





//SIMILAR ATTRACTIONS
document.addEventListener("livewire:navigated", () => {
    new Swiper(".similar-attraction-swiper", {
        loop: true,
        slidesPerView: 1,
        // grabCursor:true,
   
        spaceBetween: 50,
        breakpoints: {
            850: {
                slidesPerView: 2,
            },
            1280: {
                slidesPerView: 3,
            }
        },

          

        autoplay: {
            delay: 3500,
            disableOnInteraction: true,
            pauseOnMouseEnter: true,
        },
      
       
        modules: [Autoplay,]
    });
});