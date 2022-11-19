/** @type {import('tailwindcss').Config} */
module.exports = {
  /**Definir el archivo html en el que usaremos tailwind */
  content: [
    "./resources/**/*.{blade.php, .js}", 
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
