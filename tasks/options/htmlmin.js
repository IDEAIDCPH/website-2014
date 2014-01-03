module.exports = {
    dist: {
        options: {
            removeComments: true,
            collapseWhitespace: true
        },
        files: [{
            expand: true,
            cwd:   '<%= dirs.tmp.root %>',

            src:   '<%= files.html %>',
            dest:  '<%= dirs.tmp.root %>'
        }]
    }
};