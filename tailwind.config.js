module.exports = {
    mode: "jit",
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: "media",
    theme: {
        container: {
            center: true,
            padding: "1rem",
            screens: {
                sm: "40rem",
                md: "48rem",
                lg: "64rem",
                xl: "64rem",
                "2xl": "64rem",
            },
        },
        extend: {
            colors: {
                primary: "#2e86de",
                danger: "#ee5253",
                success: "#10ac84",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [require("@tailwindcss/aspect-ratio")],
};
