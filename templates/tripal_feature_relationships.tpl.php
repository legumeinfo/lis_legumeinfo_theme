<?php
$feature = $variables['node']->feature;

// eksc hack
if (strcmp($feature->type_id->name, 'genetic_marker') == 0 ) {
  include_once('sites/all/modules/legume/legume_marker/theme/templates/tripal_feature_marker_positions.tpl.php');
}
else if (strcmp($feature->type_id->name, 'gene') == 0 ) {
  // none
}
else {
  include_once('sites/all/modules/tripal/tripal_feature/theme/templates/tripal_feature_relationships.tpl.php');
}
