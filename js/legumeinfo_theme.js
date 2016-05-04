(function($) {
  $(document).ready(function() {
    // Rebuild option list
    $('#edit-organism')
      .find('option')
      .remove()
      .end();    
    $('#edit-organism')
      .append($('<option>', {
        value: 'Arachis hypogaea',
        text: 'Arachis hypogaea (PeanutBase)'
      }))
      .append($('<option>', {
        value: 'Arachis spp.',
        text: 'Arachis spp. (PeanutBase)'
      }))
      .append($('<option>', {
        value: 'Glycine max',
        text: 'Glycine max (SoyBase)'
      }))
      .append($('<option>', {
        value: 'Phaseolus vulgaris',
        text: 'Phaseolus vulgaris',
        selected: true
      }));
   $('.views-submit-button').prepend($('<img>', {
       id: 'site-logo',
       style: 'vertical-align: middle;display:none'
     }));

    // bind function to edit-submit-qtl click
    $('#edit-submit-qtl').click(function() {
      var species = $('#edit-organism').find(":selected").val();
      var expt_term = $.trim($("#edit-expt-pub-symbol").val());
      var qtl_term = $.trim($("#edit-qtl-name").val());

      if (species == 'Glycine max') {
        // Hide any local search results
        $('.view-content').css('display', 'none');
        $('.item-list').css('display', 'none');
        
        // Send request to SoyBase
        var url = "http://soybase.org/search/index.php?search=true&qtl="+qtl_term;
        window.open(url, '_blank');
        return false;  // Necessary to override Drupal functionality
      }
      else if (species == 'Arachis hypogaea') {
        // Hide any local search results
        $('.view-content').css('display', 'none');
        $('.item-list').css('display', 'none');
        
        // Request search
        var url = "http://peanutbase.org/search/qtl?qtl_name="
                + qtl_term + '&organism=' + species;
        window.open(url, '_blank');
        return false;  // Necessary to override Drupal functionality
      }
      else if (species == 'Arachis spp.') {
        // Hide any local search results
        $('.view-content').css('display', 'none');
        $('.item-list').css('display', 'none');
        
        var url = "http://peanutbase.org/search/qtl?qtl_name="
                + qtl_term;
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
      
      // Set site logo
      var site_logo;
      var instructions;
      if (species == 'Glycine max') {
        site_logo = '/sites/all/themes/legumeinfo_theme/images/sb_logo_sm.jpg';
        instructions = "All fields are optional and partial names are accepted. You will be redirected to SoyBase.";
      }
      else if (species == 'Arachis hypogaea' || species == 'Arachis spp.') {
        site_logo = '/sites/all/themes/legumeinfo_theme/images/peanutbase_logo_sm.jpg';
        instructions = "All fields are optional and partial names are accepted. You will be redirected to PeanutBase.";
      }
      else {
        instructions = "All fields are optional and partial names are accepted. Click column headers to sort.";
      }
      
      
      if (species == 'Glycine max' || species == 'Arachis hypogaea'
            || species == 'Arachis spp.') {
        $('label[for="edit-trait-class"]').css('display', 'none');
        $('#edit-trait-class').css('display', 'none');
        $('label[for="edit-citation"]').css('display', 'none');
        $('#edit-citation').css('display', 'none');
        $('label[for="edit-expt-pub-symbol"]').css('display', 'none');
        $('#edit-expt-pub-symbol').css('display', 'none');
        $('label[for="edit-expt-trait-name"]').css('display', 'none');
        $('#edit-expt-trait-name').css('display', 'none');
        
        // Show site icon
        $('#site-logo').attr('src', site_logo);
        $('#site-logo').css('display', 'inline');
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
        
        // Hide site icon
        $('#site-logo').css('display', 'none');
      }
      
      // Set instructions
      $('#search-instructions').html(instructions);
    });//change
    
  });//ready
})(jQuery);
