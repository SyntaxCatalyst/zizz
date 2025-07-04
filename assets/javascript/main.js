document.addEventListener("DOMContentLoaded", () => {
  const inputGroups = document.querySelectorAll(".input-group");

  if (inputGroups.length > 0) {
    inputGroups.forEach((group) => {
      const passwordField = group.querySelector("input[type='password']");
      const eyeIcon = group.querySelector(".fa-eye");

      if (passwordField && eyeIcon) {
        eyeIcon.addEventListener("click", () => {
          const isPassword = passwordField.type === "password";
          passwordField.type = isPassword ? "text" : "password";
          eyeIcon.classList.toggle("fa-eye-slash", isPassword);
          eyeIcon.classList.toggle("fa-eye", !isPassword);
        });
      }
    });
  }

  const profileLink = document.getElementById("profileLink");
  const dropdown = document.querySelector(".dropdown"); // Get first matching dropdown

  if (profileLink && dropdown) {
    profileLink.addEventListener("click", (event) => {
      event.stopPropagation(); // Prevent clicks from closing immediately
      dropdown.classList.toggle("show"); // Toggle class
    });

    // Hide dropdown when clicking outside
    document.addEventListener("click", (event) => {
      if (
        !profileLink.contains(event.target) &&
        !dropdown.contains(event.target)
      ) {
        dropdown.classList.remove("show");
      }
    });
  }

  // Dark mode toggle
  const darkModeToggle = document.getElementById("darkModeToggle");
  const body = document.body;

  // Load saved theme from localStorage
  const savedTheme = localStorage.getItem("theme");
  if (savedTheme === "dark") {
    body.classList.add("dark-mode");
    darkModeToggle.textContent = "Light Mode";
  } else {
    darkModeToggle.textContent = "Dark Mode";
  }

  darkModeToggle.addEventListener("click", () => {
    body.classList.toggle("dark-mode");
    if (body.classList.contains("dark-mode")) {
      darkModeToggle.textContent = "Light Mode";
      localStorage.setItem("theme", "dark");
    } else {
      darkModeToggle.textContent = "Dark Mode";
      localStorage.setItem("theme", "light");
    }
  });
});
