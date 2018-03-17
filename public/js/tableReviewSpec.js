var $table = $('#table'),
    $deleteButton = $('#delete-button');
var restaurant_id = $('#restaurant_id').val();

$(function () {
    $('#table').bootstrapTable({
        idField: 'nik',
        // url: '/getListReview/' + restaurant_id,
        url: '../json/reviewspec.json',
        queryParams: 'queryParams',
        pagination: 'true',
        pageList: '[5,10,15,20]',
        pageSize: 5,
        toolbar: '#toolbar',
        showColumns: 'true',
        showToggle: 'true',
        search: 'true',
        clickToSelect: 'true',
        columns: [{
            field: 'state',
            checkbox: 'true'
        }, {
            field: 'id',
            title: 'Review ID',
            sortable: 'true'
        }, {
            field: 'name',
            title: 'Name',
            sortable: 'true'
        }, {
            field: 'email',
            title: 'Email',
            sortable: 'true'
        }, {
            field: 'review',
            title: 'Review',
            sortable: 'true',
        }, {
            field: 'rating',
            title: 'rating',
            sortable: 'true',
        }]
    });
});

$(function () {
    $deleteButton.click(function () {
        var ids = $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        $table.bootstrapTable('remove', {
            field: 'id',
            values: ids
        });
    });
});