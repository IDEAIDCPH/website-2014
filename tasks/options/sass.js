module.exports = {
    dist: {
        files: [{
            expand: true,
            cwd: '<%= dirs.src.sass %>',

            src: ['<%= files.sass %>', '!<%= files.sassPartial %>'],
            dest: '<%= dirs.tmp.css %>',
            ext: '.css'
        }]
    }
};