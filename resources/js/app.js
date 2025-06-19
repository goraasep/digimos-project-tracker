// import './bootstrap';
import "@tabler/core";
import "@fortawesome/fontawesome-free/js/all";
// resources/js/app.js
import "datatables.net-dt"; // JS functionality
import "datatables.net-dt/css/dataTables.dataTables.css"; // CSS
import $ from "jquery";

import tinymce from "tinymce/tinymce";

// Core assets
import "tinymce/icons/default/icons";
import "tinymce/themes/silver/theme";

// Plugins
import "tinymce/plugins/link";
import "tinymce/plugins/lists";
import "tinymce/plugins/table";
import "tinymce/plugins/code";
import "tinymce/models/dom/model";

// Required CSS
import "tinymce/skins/ui/oxide/skin";
import "tinymce/skins/ui/oxide/content";
import "tinymce/skins/content/default/content";

import "selectize/dist/js/selectize";
import "selectize/dist/css/selectize.css";

window.$ = window.jQuery = $;

$(document).ready(function () {
    $("#projectTable").DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        paging: true,
        pageLength: 10,
        ordering: true,
        order: [[4, "desc"]],
        ajax: "/projects/data",
        columns: [
            { data: "title", name: "title", orderSequence: ["asc", "desc"] },
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
                data: "created_by",
                name: "created_by",
                orderSequence: ["asc", "desc"],
            },
            {
                data: "status",
                name: "status",
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
        responsive: true,
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

tinymce.init({
    selector: ".rich-text-editor",
    height: 300,
    menubar: false,
    plugins: "link lists table code fontsize",
    toolbar:
        "undo redo | fontsize | bold italic underline | bullist numlist | code",
    branding: false,
    font_size_formats: "8pt 10pt 12pt 14pt 18pt", // optional: define sizes
});

document.addEventListener("DOMContentLoaded", () => {
    const selects = document.querySelectorAll(".selectize");
    selects.forEach((select) => {
        $(select).selectize();
    });
});
