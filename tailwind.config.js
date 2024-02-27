/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            fontFamily: {
                somar: ["Saira", "somar-sans"],
            },
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
};
