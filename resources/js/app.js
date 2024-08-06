import "./bootstrap";
import { initFlowbite } from "flowbite";
import "fslightbox";
import "./partials/darkMode";
import "./partials/nav";
import "./partials/footerYear";
import "./partials/swiper";
import "./partials/dynamicTyped";

document.addEventListener("livewire:navigated", () => {
    initFlowbite();
    refreshFsLightbox();
});

document.addEventListener("livewire:navigated", () => {
    const filters = document.getElementById("filters");
    const closeFiltersBtn = document.getElementById("closeFilters");
    const openFiltersBtn = document.getElementById("openFilters");

    const filtersHandler = () => {
        filters.classList.toggle("translate-y-[100%]");
    };

    closeFiltersBtn.addEventListener("click", filtersHandler);
    openFiltersBtn.addEventListener("click", filtersHandler);
});
