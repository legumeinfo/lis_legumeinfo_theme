<?php
$feature = $variables['node']->feature;

// eksc hack
if (strcmp($feature->type_id->name, 'genetic_marker') == 0 ) {
  // don't load
}
else if (strcmp($feature->type_id->name, 'genetic_marker') == 0 ) {
  // don't load
}
else {
  include_once('sites/all/modules/tripal/tripal_feature/theme/templates/tripal_feature_synonyms.tpl.php');
}
