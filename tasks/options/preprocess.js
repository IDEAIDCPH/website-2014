module.exports = {
    html: {
        files: [{
            expand: true,
            cwd:    '<%= dirs.src.root %>',

            src: ['<%= files.html %>'],
            dest: '<%= dirs.dist.root %>'
        }]
    },
    css: {
        src: '<%= dirs.tmp.css + files.css %>',
        options: {
            inline: true
        }
    }
};