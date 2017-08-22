$ = jQuery;
$(function () {
    $(".button-collapse").sideNav();


    var options = {
        valueNames: ['index', 'year', 'citation']
    };

    var papersList = new List('papers', options);
    var booksAndChapters = new List('books-and-chapters', options);
});