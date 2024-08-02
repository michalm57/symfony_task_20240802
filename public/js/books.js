$(function () {
    const booksTable = $('#books-table').DataTable({
        'dom': '<"top"f>rt<"bottom"lp><"clear">',
        'ordering': true,
        'bInfo': false,
        'bLengthChange': false,
        'pageLength': 10,
        'order': [],
        'autoWidth': false,
        "columnDefs": [
            { "targets": 0, orderable: true, "searchable": false },
            { "targets": 1, orderable: true, "searchable": true },
            { "targets": 2, orderable: true, "searchable": true },
            { "targets": 3, orderable: true, "searchable": false },
            { "targets": 4, orderable: true, "searchable": false },
            { "targets": 5, orderable: true, "searchable": false },
            { "targets": 6, orderable: false, "searchable": false },
            { "targets": 7, orderable: false, "searchable": false }
        ],
    });
});
