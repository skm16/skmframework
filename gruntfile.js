module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // Compile SASS files into minified CSS.
        sass: {

            dist: {
                options: {
                    outputStyle: 'compressed'
                },
                files: {
                    'assets/dist/css/app.css': 'assets/scss/app.scss'
                }
            }
        },

        postcss: {
         options: {
          map: {
           inline: false, // save all sourcemaps as separate files...
           annotation: 'dist/css/maps/' // ...to the specified directory
          },
          processors: [
           require('pixrem')(), // add fallbacks for rem units
           require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
           require('cssnano')() // minify the result
          ]
         },
         dist: {
          src: 'assets/dist/css/*.css'
         }
        },

        // concat js files
        concat: {
            core: {
                src: ['assets/js/plugins.js', 'assets/js/app.js'],
                dest: 'assets/js/compiled/compiled.js'
            }
        },

        // uglify js files
        uglify: {
            my_target: {
                files: {
                    'assets/dist/js/compiled.min.js': ['assets/js/compiled/compiled.js']
                }
            }
        },


        // Watch these files and notify of changes.
        watch: {
            grunt: {
                files: ['Gruntfile.js']
            },
            js: {
                files: ['assets/js/*.js'],
                tasks: ['concat', 'uglify']
            },
            sass: {
                files: [
                    'assets/scss/*.scss',
                    'assets/scss/**/*.scss'
                ],
                tasks: ['sass', 'autoprefixer', 'concat', 'uglify']
            },
        }
    });


    // Load externally defined tasks.
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-postcss');
    //grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    // Establish tasks we can run from the terminal.
    grunt.registerTask('build', ['sass', 'postcss', 'concat', 'uglify']);;
    grunt.registerTask('default', ['build', 'watch']);
}
