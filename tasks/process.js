module.exports = function(grunt) {
	'use strict';

    grunt.registerTask('process', ['process:html', 'process:img', 'process:js', 'process:sass', 'process:webcal']);

	grunt.registerTask('process:html', [
        'preprocess:html',
        'copy:html'
    ]);
	grunt.registerTask('process:img', [
        'imagemin', 
        'copy:img'
    ]);
	grunt.registerTask('process:js', [
        'jshint', 
        'concat', 
        'uglify', 
        'copy:js'
    ]);
	grunt.registerTask('process:sass', [
        'sass', 
        'preprocess:css', 
        'copy:css'
    ]);
    grunt.registerTask('process:webcal', [
        'copy:webcal'
    ]);
}