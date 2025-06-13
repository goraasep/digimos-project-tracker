// import './bootstrap';
import "@tabler/core";
// resources/js/app.js
import "datatables.net-dt"; // JS functionality
import "datatables.net-dt/css/dataTables.dataTables.css"; // CSS
import $ from "jquery";

window.$ = window.jQuery = $;

$(document).ready(function () {
    $("#myTable").DataTable({
        paging: true,

        pageLength: 10,
        order: [[1, "desc"]],
        language: {
            lengthMenu: "Show _MENU_ entries",
            // search: "🔍 Search:",
            zeroRecords: "Nothing found",
            info: "Showing _START_ to _END_ of _TOTAL_ entries",
        },
    });
});

$(document).ready(function () {
    $("#projectTable").DataTable({
        processing: true,
        serverSide: true,
        paging: true,
        pageLength: 10,
        ordering: true,
        order: [[6, "desc"]],
        ajax: "/projects/data",
        columns: [
            { data: "title", name: "title", orderSequence: ["asc", "desc"] },
            {
                data: "project_number",
                name: "project_number",
                orderSequence: ["asc", "desc"],
            },
            { data: "budget", name: "budget", orderSequence: ["asc", "desc"] },
            { data: "client", name: "client", orderSequence: ["asc", "desc"] },
            {
                data: "start_date",
                name: "start_date",
                orderSequence: ["asc", "desc"],
            },
            {
                data: "end_date",
                name: "end_date",
                orderSequence: ["asc", "desc"],
            },
            {
                data: "created_at",
                name: "created_at",
                orderSequence: ["asc", "desc"],
            },
            // { data: 'action' },
            {
                data: "actions",
                name: "actions",
                orderable: false,
                searchable: false,
            },
        ],
        language: {
            lengthMenu: "Show _MENU_ entries",
            // search: "🔍 Search:",
            zeroRecords: "Nothing found",
            info: "Showing _START_ to _END_ of _TOTAL_ entries",
        },
    });
});
