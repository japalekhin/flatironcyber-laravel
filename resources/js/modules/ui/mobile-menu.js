export default () => {
    // Handle outside click.
    document.addEventListener("click", function (event) {
        const mobileMenu = document.querySelector("#navMobileMenu");

        // If the mobile menu is not open then do nothing.
        if (!mobileMenu.classList.contains("open")) {
            return;
        }

        // If the click was inside mobile menu, do nothing.
        if (event.path.includes(mobileMenu)) {
            return;
        }

        // Close mobile menu.
        mobileMenu.classList.remove("open");
    });

    // Handle open mobile menu button.
    document.addEventListener("click", (event) => {
        const openButton = document.querySelector("#aOpenMobileMenu");
        if (!event.path.includes(openButton)) {
            return;
        }

        event.preventDefault();

        const mobileMenu = document.querySelector("#navMobileMenu");
        mobileMenu.classList.add("open");
    });

    // Handle close mobile menu button.
    document.addEventListener("click", (event) => {
        const closeButton = document.querySelector("#aCloseMobileMenu");
        if (!event.path.includes(closeButton)) {
            return;
        }

        event.preventDefault();

        const mobileMenu = document.querySelector("#navMobileMenu");
        mobileMenu.classList.remove("open");
    });
};
