# wordpress-breadkit-theme
Essential Configurations, Initiations, and Objects for insanely awesome UI / UX 

1. All libraries are directly called within the functions.php, with two separate add_action scripts, one for live development and one for production (noted within the comments).
2. GSAP and Scroll Magic are javascript animation libraries, two respective functions are called within the ux.js containing responsive objects.
3. Custom styles are being compiled from the styles.scss file.
4. Gulpfile is used to create four tasks, one to compile and minify sass, second to minify and concatenate all css files, third to minify and concatenate all js files, and fourth to clean up dest directories before building.
