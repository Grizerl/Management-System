document.addEventListener("DOMContentLoaded", function () {
    const toggleIcons = document.querySelectorAll(".toggle-icon");

    toggleIcons.forEach(function (icon) {
        icon.addEventListener("click", function () {
            const submenu = icon.nextElementSibling; 
            if (submenu && submenu.classList.contains("submenu")) {
                submenu.classList.toggle("show");
                icon.classList.toggle("rotated");
            }
        });
    });
});
