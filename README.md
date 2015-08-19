# wordpress-breadkit-theme
Essential Configurations, Initiations, and Objects for insanely awesome UI / UX 

1. All libraries are directly called within the functions.php, with two separate add_action scripts, one for live development and one for production (noted within the comments).
2. GSAP and Scroll Magic are javascript animation libraries, two respective functions are called within the ux.js containing responsive objects.
3. Custom styles are being compiled from the styles.scss file.
4. Grunt plugins that are configured are: js concatenation and uglify, as well as cssmin which handles concatenation and minifying in one output. Run "grunt" from the directory and it will output the respective js and css files into final.min.js and final.min.css.
