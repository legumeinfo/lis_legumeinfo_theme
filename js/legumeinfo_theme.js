(function($) {
  $(document).ready(function() {
    $('#edit-organism').append($('<option>', {
      value: 'Glycine max',
      text: 'Glycine max - SoyBase'
    }));

/*prototype    
    // bind function to otherspecies_btn click
    $('#otherspecies_btn').click(function() {
      var species = $('#otherspecies_species').find(":selected").val();

      if (species == 'soybean') {
        // Send request to SoyBase
        var term = $.trim($('#otherspecies_term').val());
        window.location.href = "http://soybase.org//search/index.php?search=true&qtl="+term;
      }
    });//otherspecies_btn
*/    
    // bind function to edit-submit-qtl click
    $('#edit-submit-qtl').click(function() {
      var species = $('#edit-organism').find(":selected").val();
      var expt_term = $.trim($("#edit-expt-pub-symbol").val());
      var qtl_term = $.trim($("#edit-qtl-name").val());

      if (species == 'Glycine max') {
        // Send request to SoyBase
        var url = "http://soybase.org//search/index.php?search=true&qtl="+qtl_term;
        window.open(url, '_blank');
        return false;  // Necessary to override Drupal functionality
      }
      else {
        // Process normally
        $(this.form).submit();
      }
    });//edit-submit-qtl
    
    // bind function to edit-organism change
    $('#edit-organism').change(function() {
      var species = $('#edit-organism').find(":selected").val();
      if (species == 'Glycine max') {
        $('label[for="edit-trait-class"]').css('display', 'none');
        $('#edit-trait-class').css('display', 'none');
        $('label[for="edit-citation"]').css('display', 'none');
        $('#edit-citation').css('display', 'none');
        $('label[for="edit-expt-pub-symbol"]').css('display', 'none');
        $('#edit-expt-pub-symbol').css('display', 'none');
        $('label[for="edit-expt-trait-name"]').css('display', 'none');
        $('#edit-expt-trait-name').css('display', 'none');
      }
      else {
        $('label[for="edit-trait-class"]').css('display', 'inline');
        $('#edit-trait-class').css('display', 'inline');
        $('label[for="edit-citation"]').css('display', 'inline');
        $('#edit-citation').css('display', 'inline');
        $('label[for="edit-expt-pub-symbol"]').css('display', 'inline');
        $('#edit-expt-pub-symbol').css('display', 'inline');
        $('label[for="edit-expt-trait-name"]').css('display', 'inline');
        $('#edit-expt-trait-name').css('display', 'inline');
      }
    });
    
  });//ready
})(jQuery);
