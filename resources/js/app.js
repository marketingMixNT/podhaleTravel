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

