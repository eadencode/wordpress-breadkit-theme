module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
        
        concat: {
            dist: {
                src: [
                    '../js/*.js'
                    ],
                dest: '../js/final.js'
            }
        },
        
        uglify: {
            build: {
                src: '../js/final.js',
                dest: '../js/final.min.js'
            }
        },
        
        cssmin: {
          options: {
            shorthandCompacting: false,
            roundingPrecision: -1
          },
          target: {
            files: {
              '../final.min.css': ['../style.css']
            }
          }
        }
	});
    
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
   // require('load-grunt-tasks')(grunt);
 
    //grunt.initConfig({});
    grunt.registerTask('default', [
                        'concat', 
                        'uglify', 
                        'cssmin']);

};
