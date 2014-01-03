module.exports = function(grunt) {
    grunt.registerTask('dev', [
        'env',
        'clean:dist', 
        'process', 
        'watch',
        'clean:tmp' //Not sure if called on exit
    ]);
} 