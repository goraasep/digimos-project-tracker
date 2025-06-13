// import './bootstrap';
import "@tabler/core";
import "@fortawesome/fontawesome-free/js/all";
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
            {
                data: "actions",
                name: "actions",
                orderable: false,
                searchable: false,
            },
        ],
        language: {
            lengthMenu: "Show _MENU_ entries",
            zeroRecords: "Nothing found",
            info: "Showing _START_ to _END_ of _TOTAL_ entries",
        },
    });
    $("#userTable").DataTable({
        processing: true,
        serverSide: true,
        paging: true,
        pageLength: 10,
        ordering: true,
        order: [[1, "asc"]],
        ajax: "/user-management/data",
        columns: [
            { data: "name", name: "name", orderSequence: ["asc", "desc"] },
            {
                data: "email",
                name: "email",
                orderSequence: ["asc", "desc"],
            },
            {
                data: "updated_at",
                name: "updated_at",
                orderSequence: ["asc", "desc"],
            },
            {
                data: "created_at",
                name: "created_at",
                orderSequence: ["asc", "desc"],
            },
            {
                data: "actions",
                name: "actions",
                orderable: false,
                searchable: false,
            },
        ],
        language: {
            lengthMenu: "Show _MENU_ entries",
            zeroRecords: "Nothing found",
            info: "Showing _START_ to _END_ of _TOTAL_ entries",
        },
    });
});
