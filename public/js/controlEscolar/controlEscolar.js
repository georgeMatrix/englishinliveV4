function deleteRecord(id) {
    fetch('api/eliminarControlEscolar/' + id)
    let table = $('#controlEscolarTable').DataTable();
    table.ajax.reload();
}
