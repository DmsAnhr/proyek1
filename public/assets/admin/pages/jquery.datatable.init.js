/**
 * Theme: Crovex - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Datatables Js
 */


$(document).ready(function () {

    var table = $('#table-items').DataTable({});

    // Select2
    $(".select2").select2({
        width: '100%'
    });

});

/* Formatting function for row details - modify as you need */
function format(d) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
        '<tr>' +
        '<td>Full name:</td>' +
        '<td>' + d.name + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Extension number:</td>' +
        '<td>' + d.extn + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Extra info:</td>' +
        '<td>And any further details here (images etc)...</td>' +
        '</tr>' +
        '</table>';
}

$(document).ready(function () {
    var table = $('#child_rows').DataTable({
        // "ajax": "../../plugins/datatables/objects.txt",
        "data": testdata.data,
        select: "single",
        "columns": [
            {
                "className": 'details-control',
                "orderable": false,
                "data": null,
                "defaultContent": ''
            },
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "salary" },
            { "data": "action" }
        ],
        "order": [[1, 'asc']]
    });

    // Add event listener for opening and closing details
    $('#child_rows tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row(tr);

        if (row.child.isShown()) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child(format(row.data())).show();
            tr.addClass('shown');
        }
    });
});

var testdata = {
    "data": [
        {
            "name": "Tiger Nixon",
            "position": "System Architect",
            "salary": "$320,800",
            "start_date": "2011/04/25",
            "office": "Edinburgh",
            "extn": "5421",
            "action": '<div class="dropdown d-inline-block float-right"><a class= "nav-link dropdown-toggle arrow-none" id="dLabel4" data- toggle="dropdown" href = "#" role = "button" aria - haspopup="false" aria - expanded="false" ><i class="fas fa-ellipsis-v font-20 text-muted"></i></a><div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel4"><a class="dropdown-item" href="#">Creat Project</a><a class="dropdown-item" href="#">Open Project</a><a class="dropdown-item" href="#">Tasks Details</a></div></div >'
        },
        {
            "name": "Garrett Winters",
            "position": "Accountant",
            "salary": "$170,750",
            "start_date": "2011/07/25",
            "office": "Tokyo",
            "extn": "8422",
            "action": '<div class="dropdown d-inline-block float-right"><a class= "nav-link dropdown-toggle arrow-none" id="dLabel4" data- toggle="dropdown" href = "#" role = "button" aria - haspopup="false" aria - expanded="false" ><i class="fas fa-ellipsis-v font-20 text-muted"></i></a><div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel4"><a class="dropdown-item" href="#">Creat Project</a><a class="dropdown-item" href="#">Open Project</a><a class="dropdown-item" href="#">Tasks Details</a></div></div >'
        },
        {
            "name": "Garrett Bill",
            "position": "Accountant",
            "salary": "$80,504",
            "start_date": "2009/10/04",
            "office": "Paris",
            "extn": "7344",
            "action": '<div class="dropdown d-inline-block float-right"><a class= "nav-link dropdown-toggle arrow-none" id="dLabel4" data- toggle="dropdown" href = "#" role = "button" aria - haspopup="false" aria - expanded="false" ><i class="fas fa-ellipsis-v font-20 text-muted"></i></a><div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel4"><a class="dropdown-item" href="#">Creat Project</a><a class="dropdown-item" href="#">Open Project</a><a class="dropdown-item" href="#">Tasks Details</a></div></div >'
        },
        {
            "name": "Lebron James",
            "position": "Secretary",
            "salary": "$150,766",
            "start_date": "2010/12/19",
            "office": "Jakarta",
            "extn": "65124",
            "action": '<div class="dropdown d-inline-block float-right"><a class= "nav-link dropdown-toggle arrow-none" id="dLabel4" data- toggle="dropdown" href = "#" role = "button" aria - haspopup="false" aria - expanded="false" ><i class="fas fa-ellipsis-v font-20 text-muted"></i></a><div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel4"><a class="dropdown-item" href="#">Creat Project</a><a class="dropdown-item" href="#">Open Project</a><a class="dropdown-item" href="#">Tasks Details</a></div></div >'
        },
        {
            "name": "Ashton Cox",
            "position": "Junior Technical Author",
            "salary": "$86,000",
            "start_date": "2009/01/12",
            "office": "San Francisco",
            "extn": "1562",
            "action": '<div class="dropdown d-inline-block float-right"><a class= "nav-link dropdown-toggle arrow-none" id="dLabel4" data- toggle="dropdown" href = "#" role = "button" aria - haspopup="false" aria - expanded="false" ><i class="fas fa-ellipsis-v font-20 text-muted"></i></a><div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel4"><a class="dropdown-item" href="#">Creat Project</a><a class="dropdown-item" href="#">Open Project</a><a class="dropdown-item" href="#">Tasks Details</a></div></div >'
        },]
}