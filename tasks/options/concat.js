module.exports = {
    options: {
        separator: ';',
    },
    dist: {
        src: [
            '<%= dirs.src.jsVendor + files.js %>',
            '<%= dirs.src.jsLibs + files.js %>',
            '<%= dirs.src.js + files.js %>'
        ],
        dest: '<%= dirs.tmp.js + "main.min.js" %>',
    }
};