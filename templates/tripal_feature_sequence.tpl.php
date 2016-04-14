<?php
$feature = $variables['node']->feature;

// eksc hack
if (strcmp($feature->type_id->name, 'genetic_marker') == 0 ) {
  // don't load
}
else if (strcmp($feature->type_id->name, 'gene') == 0 ) {
  include_once('sites/all/modules/tripal/tripal_gene/theme/templates/tripal_gene_sequence.tpl.php');
}
else if (strcmp($feature->type_id->name, 'linkage_group') == 0 ) {
  // don't load
}
else {
  include_once('sites/all/modules/tripal/tripal_feature/theme/templates/tripal_feature_sequence.tpl.php');
}
