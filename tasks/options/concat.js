module.exports = {
    options: {
        separator: ';',
    },
    dist: {
        src: ['<%= dirs.src.js + "main.js" %>'],
        dest: '<%= dirs.tmp.js + "main.min.js" %>',
    }
};