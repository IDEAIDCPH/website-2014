module.exports = {
    html: {
        expand: true,
        cwd:   '<%= dirs.tmp.root %>',

        src:   '<%= files.html %>',
        dest:  '<%= dirs.dist.root %>'
    },
    img: {
        expand: true,
        cwd:   '<%= dirs.tmp.img %>',

        src:   '<%= files.img %>',
        dest:  '<%= dirs.dist.img %>'
    },
    js: {
        expand: true,
        cwd:   '<%= dirs.tmp.js %>',

        src:   '<%= files.js %>',
        dest:  '<%= dirs.dist.js %>'
    },
    css: {
        expand: true,
        cwd:    '<%= dirs.tmp.css %>',

        src:    '<%= files.css %>',
        dest:   '<%= dirs.dist.css %>'
    },
    'wordpress-specific': {
        expand: true,
        cwd:    '<%= dirs.src.root %>',

        src:    [
            '<%= files.css %>' //The style.css file that defines the theme
        ],
        dest:   '<%= dirs.dist.root %>'
    },
    webcal: {
        expand: true,
        cwd:    '<%= dirs.src.webcal %>',

        src:    '<%= files.cal %>',
        dest:   '<%= dirs.dist.webcal %>'
    }
};