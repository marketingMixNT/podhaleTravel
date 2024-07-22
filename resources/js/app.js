import "./bootstrap";
import { initFlowbite } from "flowbite";
import "./partials/darkMode";
import "./partials/nav";
import "./partials/footerYear";

document.addEventListener("livewire:navigated", () => {
    initFlowbite();
});


