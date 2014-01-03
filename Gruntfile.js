var path = require('path');

module.exports = function(grunt) {
    'use strict';


    function loadConfig(path) {
        var obj = {},
            file,
            key;

        grunt.file.expand(path).forEach(function(option) {
            file = option.replace(/\.js$/,'');
            key = file.match(/[^\/]+$/);

            obj[key] = require(file);
        });

        return obj;
    }

    var config = {
        pkg: grunt.file.readJSON('package.json'),
        dirs: {
            src: {
                root: 'src/',
                sass: 'src/assets/sass/',

                img: 'src/assets/img/',
                js: 'src/assets/js/',
                webcal: 'src/assets/webcal/',
                misc: 'src/assets/misc/'
            },
            dist: {
                root: 'dist/',
                css: 'dist/css/',
                img: 'dist/img/',
                js: 'dist/js/',
                webcal: 'dist/webcal/',
                misc: 'dist/misc/'
            },
            tmp: {
                root: 'tmp/',
                css: 'tmp/css/',
                img: 'tmp/img/',
                js: 'tmp/js/'
            }
        },

        files: {
            any: '**/*',

            html: '**/*.{htm,html}',
            sass: '**/*.{sass,scss}',
            sassPartial: '**/_*.{sass,scss}',
            css: '**/*.css',
            js: '**/*.js',
            img: '**/*.{jpg,jpeg,png,ico,gif,svg}',
            cal: '**/*.{ics,vcs}'
        }
    };

    grunt.util._.extend(config, loadConfig('./tasks/options/*'));
    require('load-grunt-tasks')(grunt);

    grunt.initConfig(config);

    grunt.loadTasks('tasks');

    grunt.registerTask('default', ['build']);
};