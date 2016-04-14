(function($) {
  $(document).ready(function() {
    $('#otherspecies_btn').click(function() {
      var species = $('#otherspecies_species').find(":selected").val();
      var term = $.trim($("#otherspecies_term").val());
      if (!term || term == '') {
        return;
      }

      if (species == 'soybean') {
        window.location.href = "http://soybase.org//search/index.php?search=true&qtl="+term;
      }
    });
  });//ready
})(jQuery);
