export default () => {
    document.addEventListener("click", event => {
        const isDropdownOpen = dropdown => {
            const dropdownMenu = dropdown.querySelector("[ui-dropdown-menu]");
            if (dropdownMenu === null) {
                return false;
            }
            return !dropdownMenu.classList.contains("hidden");
        };
        const openDropdown = dropdown => {
            const dropdownMenu = dropdown.querySelector("[ui-dropdown-menu]");
            if (dropdownMenu === null) {
                return;
            }
            dropdownMenu.classList.remove("hidden");
            dropdownMenu.classList.add("block");
        };
        const closeDropdown = dropdown => {
            const dropdownMenu = dropdown.querySelector("[ui-dropdown-menu]");
            if (dropdownMenu === null) {
                return;
            }
            dropdownMenu.classList.remove("block");
            dropdownMenu.classList.add("hidden");
        };

        // close all dropdowns except if the event happens in the same dropdown
        const dropdowns = document.querySelectorAll("[ui-dropdown]");
        dropdowns.forEach(dropdown => {
            if (isDropdownOpen(dropdown) && !event.path.includes(dropdown)) {
                closeDropdown(dropdown);
            }
        });

        event.path
            .filter(
                element =>
                    element !== document &&
                    element !== window &&
                    element.hasAttribute("ui-dropdown")
            )
            .forEach(dropdown => {
                const dropdownToggle = dropdown.querySelector(
                    "[ui-dropdown-toggle]"
                );

                if (!event.path.includes(dropdownToggle)) {
                    return;
                }

                event.preventDefault();
                if (isDropdownOpen(dropdown)) {
                    closeDropdown(dropdown);
                } else {
                    openDropdown(dropdown);
                }
            });
    });
};
