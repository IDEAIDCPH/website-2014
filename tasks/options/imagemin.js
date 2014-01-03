module.exports = {
    dist: {
        files: [{
            expand: true,
            cwd: '<%= dirs.src.img %>',

            src: ['<%= files.img %>'],
            dest: '<%= dirs.tmp.img %>'
        }]
    }
};