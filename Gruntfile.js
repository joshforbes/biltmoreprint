module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            dist: {
                options: {
                    sourcemap: true
                },
                files: {
                    'public/css/main.css': 'app/assets/scss/main.scss'
                }
            }
        },

        concat: {
            dist: {
                src: [
                    'app/assets/js/navModule.js',
                    'app/assets/js/serviceModule.js',
                    'app/assets/js/flashMessageModule.js',
                    'app/assets/js/init.js'
                ],
                dest: 'public/js/built.js',
            },
        },

        watch: {
            options: {
                livereload: true,
            },
            css: {
                files: '**/*.scss',
                tasks: ['sass']
            },
            js: {
                files: '**/*.js',
                tasks: ['concat']
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');

    grunt.registerTask('default', ['watch']);
};