export default () => {
    console.log('initializing');
    document.addEventListener("click", (event) => {
        event.path
            .filter(
                (element) =>
                    element !== document &&
                    element !== window &&
                    element.hasAttribute("password-toggle")
            )
            .forEach((passwordToggle) => {
                const elPasswordToggleButton = passwordToggle.querySelector(
                    "[password-toggle-button]"
                );
                const elPasswordToggleInput = passwordToggle.querySelector(
                    "[password-toggle-input]"
                );
                const elPasswordToggleButtonIcon =
                    elPasswordToggleButton.querySelector(".fa-solid");

                if (
                    typeof elPasswordToggleButton === "undefined" ||
                    typeof elPasswordToggleInput === "undefined"
                ) {
                    return;
                }

                if (!event.path.includes(elPasswordToggleButton)) {
                    return;
                }

                event.preventDefault();
                const typeAttribute =
                    elPasswordToggleInput.getAttribute("type");

                elPasswordToggleInput.setAttribute(
                    "type",
                    typeAttribute === "password" ? "text" : "password"
                );

                // icon
                if (elPasswordToggleButtonIcon !== null) {
                    elPasswordToggleButtonIcon.classList.remove(
                        "fa-eye",
                        "fa-eye-slash"
                    );
                    elPasswordToggleButtonIcon.classList.add(
                        typeAttribute === "password" ? "fa-eye" : "fa-eye-slash"
                    );
                }
            });
    });
};
