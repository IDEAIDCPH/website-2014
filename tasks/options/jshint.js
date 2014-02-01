module.exports = {
    files: [
        '<%= dirs.src.js + files.js %>',
        '!<%= dirs.src.jsVendor + files.js %>'
    ],
    options: {}
};