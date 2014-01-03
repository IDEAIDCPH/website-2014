module.exports = {
    files: {
        src: '<%= concat.dist.dest %>',
        dest: '<%= concat.dist.dest %>'
    },
    options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy hh:mm") %> */\n',
        toplevel: false
    }
};