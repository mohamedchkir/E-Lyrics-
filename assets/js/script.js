
// datatables
$(document).ready(function () {

    var table = $('#example').DataTable({
        responsive: true
    })
        .columns.adjust()
        .responsive.recalc();
});