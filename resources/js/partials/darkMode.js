if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    document.documentElement.classList.add("dark");
} else {
    document.documentElement.classList.remove("dark");
}

var themeToggleDarkIcons = document.querySelectorAll(".theme-toggle-dark-icon");
var themeToggleLightIcons = document.querySelectorAll(
    ".theme-toggle-light-icon"
);

if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    themeToggleLightIcons.forEach((icon) => icon.classList.remove("hidden"));
} else {
    themeToggleDarkIcons.forEach((icon) => icon.classList.remove("hidden"));
}

var themeToggleBtns = document.querySelectorAll(".theme-toggle");

themeToggleBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
        // toggle icons inside button
        themeToggleDarkIcons.forEach((icon) => icon.classList.toggle("hidden"));
        themeToggleLightIcons.forEach((icon) =>
            icon.classList.toggle("hidden")
        );

        if (localStorage.getItem("color-theme")) {
            if (localStorage.getItem("color-theme") === "light") {
                document.documentElement.classList.add("dark");
                localStorage.setItem("color-theme", "dark");
            } else {
                document.documentElement.classList.remove("dark");
                localStorage.setItem("color-theme", "light");
            }
        } else {
            if (document.documentElement.classList.contains("dark")) {
                document.documentElement.classList.remove("dark");
                localStorage.setItem("color-theme", "light");
            } else {
                document.documentElement.classList.add("dark");
                localStorage.setItem("color-theme", "dark");
            }
        }
    });
});
