document.addEventListener("DOMContentLoaded", () => {
    const themeToggleBtn = document.getElementById("theme-toggle");
    const body = document.body;
    const icon = themeToggleBtn.querySelector("i");

    // Check for saved theme in localStorage
    const savedTheme = localStorage.getItem("theme");

    if (savedTheme) {
        body.classList.add(savedTheme);
        if (savedTheme === "dark-theme") {
            icon.classList.remove("fa-moon");
            icon.classList.add("fa-sun");
        } else {
            icon.classList.remove("fa-sun");
            icon.classList.add("fa-moon");
        }
    } else {
        // Default to dark theme if no theme is saved or first visit
        body.classList.add("dark-theme"); // Set dark theme as default here
        icon.classList.remove("fa-moon"); // Ensure sun icon for dark theme
        icon.classList.add("fa-sun");
        localStorage.setItem("theme", "dark-theme"); // Save dark theme as default
    }

    themeToggleBtn.addEventListener("click", () => {
        if (body.classList.contains("light-theme")) {
            body.classList.remove("light-theme");
            body.classList.add("dark-theme");
            icon.classList.remove("fa-moon");
            icon.classList.add("fa-sun");
            localStorage.setItem("theme", "dark-theme");
        } else {
            body.classList.remove("dark-theme");
            body.classList.add("light-theme");
            icon.classList.remove("fa-sun");
            icon.classList.add("fa-moon");
            localStorage.setItem("theme", "light-theme");
        }
    });
});