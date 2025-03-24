
document.addEventListener("DOMContentLoaded", () => {
    if (localStorage.getItem("theme") === "dark") {
        document.body.classList.add("dark-mode");
        document.getElementById("theme-icon").textContent = "☀️";
    } else {
        document.getElementById("theme-icon").textContent = "🌙";
    }
});

// Toggle Theme Function
function toggleTheme() {
    document.body.classList.toggle("dark-mode");

    // Change emoji based on theme
    const themeIcon = document.getElementById("theme-icon");
    if (document.body.classList.contains("dark-mode")) {
        themeIcon.textContent = "☀️";  // Sun emoji for dark mode
        localStorage.setItem("theme", "dark");
    } else {
        themeIcon.textContent = "🌙";  // Moon emoji for light mode
        localStorage.setItem("theme", "light");
    }
}

    function goBack() {
        window.location.href = "index.php"; // Redirects to homepage
    }

