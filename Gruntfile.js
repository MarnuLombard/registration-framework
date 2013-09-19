'use strict';
module.exports = function(grunt) {

    // load all grunt tasks matching the `grunt-*` pattern
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({

        // watch for changes and trigger sass, jshint, uglify and livereload
        watch: {
            sass: {
                files: ['scss/**/*.{scss,sass}'],
                tasks: ['sass']
            },
            js: {
                files: '<%= jshint.all %>',
                tasks: ['jshint', 'uglify']
            },
            livereload: {
                options: { livereload: true },
                files: ['css/style.css', 'js/*.js', '*.html', '*.php', 'images/**/*.{png,jpg,jpeg,gif,webp,svg}']
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
                    // 'scss/style.scss':'css/style.css',
                    // 'scss/no-mq.scss':'css/no-mq.css'
                    'css/style.css':'scss/style.scss',
                    'css/no-mq.css':'scss/no-mq.scss'
                }
            }
        },

        // javascript linting with jshint
        jshint: {
            options: {
                jshintrc: '.jshintrc',
                "force": true,
                ignores: ['js/ie/selectivizr.js']
            },
            all: [
                'Gruntfile.js',
                'js/source/**/*.js'
            ]
        },

        // uglify to concat, minify, and make source maps
        uglify: {
            plugins: {
                options: {
                    sourceMap: 'js/script.js.map',
                    sourceMappingURL: 'script.js.map',
                    sourceMapPrefix: 2
                },
                files: {
                    'js/script.min.js': [
                        'js/source/*.js'
                    ]
                }
            },
            main: {
                options: {
                    sourceMap: 'js/app.js.map',
                    sourceMappingURL: 'app.js.map',
                    sourceMapPrefix: 2
                },
                files: {
                    'js/app.min.js': [
                        'js/source/app.js'
                    ]
                }
            },
            app: {
                options: {
                    sourceMap: 'js/ie.js.map',
                    sourceMappingURL: 'ie.js.map',
                    sourceMapPrefix: 2
                },
                files: {
                    'js/ie.min.js': [
                        'js/ie/selectivizr.js',
                        'js/ie/ie.js'
                    ]
                }
            }
        }

    });


    // register task
    grunt.registerTask('default', ['watch']);

};
