<?php
$feature = $variables['node']->feature;

// eksc hack
if (strcmp($feature->type_id->name, 'QTL') == 0 ) {
  include_once('sites/all/modules/legume/legume_qtl/theme/templates/tripal_feature_QTL_measurements.tpl.php');
}
else if (strcmp($feature->type_id->name, 'genetic_marker') == 0 ) {
  // don't load
}
else if (strcmp($feature->type_id->name, 'gene') == 0 ) {
  // don't load
}
else if (strcmp($feature->type_id->name, 'linkage_group') == 0 ) {
  // don't load
}
else {
  include_once('sites/all/modules/tripal/tripal_feature/theme/templates/tripal_feature_alignments.tpl.php');
}
