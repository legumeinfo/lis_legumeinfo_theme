<?php
  $sql = "SELECT COUNT(*) FROM {qtl_search}";
  if ($res = chado_query($sql, array())) {
    $row = $res->fetchObject();
    $num_qtl = $row->count;
  }
  
  drupal_add_js('sites/all/themes/legumeinfo_theme/js/legumeinfo_theme.js');
?>
<h2>Search for Legume QTL</h2>

<table>
  <tr style="background-color:white;white-space:nowrap">
    <td>
      Search for chickpea (<i>Cicer arietinum</i>) QTL at
      <a target="_blandk"
         href="https://www.coolseasonfoodlegume.org/find/qtl">CoolSeasonFoodLegumes</a>
      <br>
      Search for faba bean (<i>Vicia faba</i>) QTL
      <a target="_blank"
         href="https://www.coolseasonfoodlegume.org/find/qtl">CoolSeasonFoodLegumes</a>
      <br>
      Search for lentil (<i>Lens culinaris</i>) QTL
      <a target="_blank"
         href="https://www.coolseasonfoodlegume.org/find/qtl">CoolSeasonFoodLegumes</a>
      <br>
      Search for pea (<i>Pisum sativa</i> and other <i>Pisum sp.</i>) QTL
      <a target="_blank"
         href="https://www.coolseasonfoodlegume.org/find/qtl">CoolSeasonFoodLegumes</a>
    </td>
  <td width="100%" style="vertical-align:middle">
    <img src="/sites/all/themes/legumeinfo_theme/images/csfl_logo_full.png">
  </td>
  </tr>
</table>
<p id="search-instructions">
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
