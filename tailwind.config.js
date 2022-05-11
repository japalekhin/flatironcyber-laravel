module.exports = {
    mode: "jit",
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: "media",
    theme: {
        extend: {
            colors: {
                primary: "#0063b2",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [require("@tailwindcss/aspect-ratio")],
};
