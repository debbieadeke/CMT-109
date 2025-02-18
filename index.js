document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".navbar a");

    
    navLinks.forEach(link => {
        if (window.location.href.includes(link.href)) {
            link.classList.add("active");
        }
    });
});

