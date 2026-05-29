document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.querySelector(".custom-navbar");
    const collapseElement = document.getElementById("mainNavbar");
    const navLinks = document.querySelectorAll(".nav-links .nav-link");

    const updateNavbarState = () => {
        if (!navbar) {
            return;
        }

        navbar.classList.toggle("is-scrolled", window.scrollY > 8);
    };

    updateNavbarState();
    window.addEventListener("scroll", updateNavbarState, { passive: true });

    navLinks.forEach((link) => {
        link.addEventListener("click", () => {
            if (
                !collapseElement ||
                window.getComputedStyle(collapseElement).display !== "block"
            ) {
                return;
            }

            const collapseInstance =
                bootstrap.Collapse.getInstance(collapseElement) ||
                new bootstrap.Collapse(collapseElement, { toggle: false });
            collapseInstance.hide();
        });
    });
});
