module.exports = function(grunt) {
    grunt.registerTask('build', [
        'env',
        'clean:dist', 
        'process',
        'clean:tmp'
    ]);
}