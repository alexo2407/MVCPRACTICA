$(function () {
    $('#listarUsuarios').DataTable({
        responsive: true,
        lengthChange: false,
        autoWidth: false,       
        language:{
             url:"views/js/spanishtable.json",
        },
        dom: "Bfrtip",
        buttons: ["copy", "csv", "excel", "pdf", "print"],

    });
  });