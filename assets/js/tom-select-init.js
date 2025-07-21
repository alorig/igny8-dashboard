document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('select.tom-select').forEach(function(select) {
    new TomSelect(select, {
      create: false,
      sortField: {
        field: "text",
        direction: "asc"
      }
    });
  });
}); 