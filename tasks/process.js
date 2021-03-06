module.exports = function(grunt) {
	'use strict';

    grunt.registerTask('process', [
        'process:html',
        'process:img',
        'process:js',
        'process:fonts',
        'process:sass',
        'process:wordpress-specific',
        'process:webcal'
    ]);



	grunt.registerTask('process:html', [
        'preprocess:html',
        'copy:html'
    ]);
	grunt.registerTask('process:img', [
        'imagemin',
        'copy:img',
        'copy:ico'
    ]);
	grunt.registerTask('process:js', [
        'jshint',
        'concat',
        'uglify',
        'copy:js'
    ]);
    grunt.registerTask('process:fonts', [
        'copy:fonts'
    ]);
	grunt.registerTask('process:sass', [
        'sass',
        'preprocess:css',
        'copy:css'
    ]);
    grunt.registerTask('process:wordpress-specific', [
        'copy:wordpress-specific'
    ]);
    grunt.registerTask('process:webcal', [
        'copy:webcal'
    ]);
}