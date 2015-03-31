module.exports = function(grunt) {

    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            dist: {
                src: [
                    'js/libs/*.js',
                    'js/global.js' // All JS in the libs folder
                ],
                dest: 'script.js',
            }
        },

        uglify: {
            build: {
                src: 'script.js',
                dest: 'script.min.js'
            }
        },

        // imagemin: {
        //     dynamic: {
        //         files: [{
        //             expand: true,
        //             cwd: 'images/',
        //             src: ['**/*.{png,jpg,gif,jpeg}'],
        //             dest: 'images/build/'
        //         }]
        //     }
        // },

        compass: {
            dist: {
                options: {
                    sassDir: 'sass',
                    cssDir: '.',
                    outputStyle: 'nested'
                }
            }
        },

        watch: {
            options: {
                livereload: true,
            },
            css: {
                files: ['sass/*.scss'],
                tasks: ['compass'],
                options: {
                    spawn: false
                }
            },
            js: {
                files: ['js/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false
                }
            }
        }

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    // grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['concat', 'uglify', 'compass', 'watch']);

};