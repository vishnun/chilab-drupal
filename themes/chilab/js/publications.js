$ = jQuery;
$(function () {
    var options = {
        valueNames: ['index', 'year', 'citation']
    };

    var papersList = new List('papers', options);
    var booksAndChapters = new List('books-and-chapters', options);
});