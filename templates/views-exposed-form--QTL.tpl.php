<?php
  $sql = "SELECT COUNT(*) FROM {qtl_search}";
  if ($res = chado_query($sql, array())) {
    $row = $res->fetchObject();
    $num_qtl = $row->count;
  }
  
  drupal_add_js('sites/all/themes/legumeinfo_theme/js/legumeinfo_theme.js');
?>
<h2>Search for Legume QTL</h2>

<?php /* button click is bound to js function on legumeinfo_theme.js */ ?>
<?php /*
<form name="otherspecies_form" id="otherspecies_form" method="GET">
  <select name="otherspecies_species" id="otherspecies_species">
    <option value="soybean">soybean(<i>Glycine max</i>)</option>
  </select>
  Term: <input type="text" name="otherspecies_term" id="otherspecies_term">
  <input type="button" value="Search" id="otherspecies_btn">
</form>

<p>
  Search for chickpea (<i>Cicer arietinum</i>) QTL
  <a href="">here</a>
  <br>
  Search for faba bean (<i>Vicia faba</i>) QTL
  <a href="">here</a>
  <br>
  Search for lentil (<i>Lens culinaris</i>) QTL
  <a href="">here</a>
  <br>
  Search for pea (<i>Pisum sativa</i> and other <i>Pisum sp.</i>) QTL
  <a href="">here</a>
  <br>
  Search for soybean (<i>Glycine max</i>) QTL
  <a href="">here</a>
</p>
*/?>

<p>
  All fields are optional and partial names are accepted. 
  Click column headers to sort.
</p>

<?php 
//echo "<pre>";var_dump($button);echo "</pre>";
  if ($num_qtl) {
    echo "Total QTL count: <b>$num_qtl</b><br>";
  }
  
  include_once("sites/all/modules/legume/legume_qtl/theme/templates/views-exposed-form--QTL.tpl.php"); 
?>
