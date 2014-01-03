module.exports = {
    html: {
        files: '<%= dirs.src.root + files.html %>',
        tasks: ['process:html']
    },
    img: {
        files: '<%= dirs.src.img + files.img %>',
        tasks: ['process:img']
    },
    js: {
        files: '<%= dirs.src.js + files.js %>',
        tasks: ['process:js']
    },
    sass: {
        files: '<%= dirs.src.sass + files.sass %>',
        tasks: ['process:sass']
    }
};