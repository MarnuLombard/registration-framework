'use strict';
module.exports = function(grunt) {

    // load all grunt tasks matching the `grunt-*` pattern
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({

        // watch for changes and trigger sass, concat, uglify and livereload
        watch: {
            sass: {
                files: ['scss/**/*.{scss,sass}'],
                tasks: ['sass']
            },
            js: {
                files: ['Gruntfile.js','js/plugins/*.js','js/app/*.js','js/ie/*js'],
                tasks: ['concat', 'uglify']
            },
            livereload: {
                options: { livereload: true },
                files: ['css/style.css', 'js/*.js', '*.php']
            }
        },

        // sass and scss
        sass: {
            dist: {
                options: {
                    sourcemap: true,
                    style: 'compressed',
                    precision: '2',
                    compass: true,
                    cache: 'delete/'
                },
                files: {
                    'css/style.css':'scss/style.scss',
                    'css/no-mq.css':'scss/no-mq.scss'
                }
            }
        },

        // concat files
        concat: {
            ie: {
                files: {
                    'js/ie.min.js': [
                        'js/ie/selectivizr.min.js'
                    ]
                }
            }
        },

        // uglify to concat, minify, and make source maps
        uglify: {
            plugins: {
                files: {
                    'js/script.min.js': [
                        'js/plugins/*.js'
                    ]
                }
            },
            app: {
                files: {
                    'js/app.min.js': [
                        'js/app/app.js'
                    ]
                }
            }
        }

    });


    // register task
    grunt.registerTask('default', ['watch']);

};
