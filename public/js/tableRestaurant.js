var $table = $('#table'),
    $deleteButton = $('#delete-button');
    $addButton = $('#add-button');

$(function () {
    $.fn.editable.defaults.url = '/saveRestaurantComponent';
    
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });
    $('#table').bootstrapTable({
        idField: 'nik',
        // url: '/getListRestaurant',
        url: '../json/resto.json',
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
            field: 'restaurant_id',
            title: 'Restaurant ID',
            sortable: 'true'
        }, {
            field: 'name',
            title: 'Restaurant Name',
            sortable: 'true'
        }, {
            field: 'address',
            title: 'Location',
            sortable: 'true'
        }, {
            field: 'city',
            title: 'City',
            sortable: 'true',
        }, {
            field: 'phone_number',
            title: 'Phone Number',
            sortable: 'true',
            editable: {
                type: 'text',
                mode: 'popup',
                name: 'spj',
                pk : '*[@id="table"]/tbody/tr/td[1]',
                validate: function(value) {
                    if($.trim(value) == '') return 'This field is required';
                }
            }
        }, {
            field: 'price_bottom',
            title: 'Lower Bound Price',
            sortable: 'true',
            editable: {
                type: 'text',
                mode: 'popup',
                name: 'spj',
                pk : '*[@id="table"]/tbody/tr/td[1]',
                validate: function(value) {
                    if($.trim(value) == '') return 'This field is required';
                }
            }
        }, {
            field: 'price_top',
            title: 'Upper Bound Price',
            sortable: 'true',
            editable: {
                type: 'text',
                mode: 'popup',
                name: 'cuti',
                pk : '*[@id="table"]/tbody/tr/td[1]',
                validate: function(value) {
                    if($.trim(value) == '') return 'This field is required';
                }
            }
        }, {
            field: 'img_url',
            title: 'Image File',
            sortable: 'true',
            formatter: function formatter(value, row, index) {
                return [
                    '<div class="pull-left">',
                    '<span>' + value + '</span>',
                    '</div>',
                    '<div class="custom-file">',
                    '<input type="file" class="custom-file-input" id="customFile">',
                    '</div>'
                ].join('');
            }
        }]
    });
});

$(function () {
    $deleteButton.click(function () {
        var ids = $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.restaurant_id;
        });
        $table.bootstrapTable('remove', {
            field: 'restaurant_id',
            values: ids
        });
    });
});

$(function () {
    $addButton.click(function () {
        $table.bootstrapTable('insertRow', {
            index: 1,
            row: {
                restaurant_id: 1,
                name: 'Item ',
                address: '$',
                city: 'd',
                phone_number: 'd',
                price_bottom: 'd',
                price_top: 'd',
                img_url: 'd',
            }
        });
    });
});