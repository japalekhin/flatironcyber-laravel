export default () => {
    document.addEventListener("click", (event) => {
        event.path
            .filter(
                (element) =>
                    element !== document &&
                    element !== window &&
                    element.hasAttribute("click-to-copy")
            )
            .forEach((button) => {
                const sourceInput = button.parentNode.querySelector(
                    "[click-to-copy-source]"
                );

                if (typeof sourceInput === "undefined") {
                    return;
                }

                event.preventDefault();

                const el = document.createElement("textarea");
                el.value = sourceInput.value;
                el.setAttribute("readonly", "");
                el.style.position = "absolute";
                el.style.left = "-9999px";
                document.body.appendChild(el);
                el.select();
                document.execCommand("copy");
                document.body.removeChild(el);
            });
    });
};
