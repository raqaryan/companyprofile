/*!
 * Start Bootstrap - Agency v7.0.12
 */

document.addEventListener("DOMContentLoaded", () => {

    // === Navbar shrink on scroll ===
    const handleNavbarShrink = () => {
        const navbar = document.querySelector("#mainNav");
        if (!navbar) return;

        if (window.scrollY === 0) {
            navbar.classList.remove("navbar-shrink");
        } else {
            navbar.classList.add("navbar-shrink");
        }
    };

    handleNavbarShrink();
    document.addEventListener("scroll", handleNavbarShrink);

    // === Initialize Bootstrap ScrollSpy ===
    const navbar = document.querySelector("#mainNav");
    if (navbar) {
        new bootstrap.ScrollSpy(document.body, {
            target: "#mainNav",
            rootMargin: "0px 0px -40%",
        });
    }

    // === Collapse mobile menu on nav-link click ===
    const navbarToggler = document.querySelector(".navbar-toggler");
    const navLinks = document.querySelectorAll("#navbarResponsive .nav-link");

    if (navbarToggler && navLinks.length) {
        navLinks.forEach((link) => {
            link.addEventListener("click", () => {
                const isVisible = window.getComputedStyle(navbarToggler).display !== "none";
                if (isVisible) {
                    navbarToggler.click();
                }
            });
        });
    }

    // === Hide broken images or replace with fallback ===
    const allImages = document.querySelectorAll("img");
    allImages.forEach((img) => {
        img.addEventListener("error", () => {
            // Option 1: Hide image
            img.style.display = "none";

            // Option 2 (preferred): Replace with default fallback image
            // img.src = '/images/default.jpg';
        });
    });

});
