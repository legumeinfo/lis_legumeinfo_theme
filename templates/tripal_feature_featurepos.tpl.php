<?php

$feature = $variables['node']->feature;

// eksc hack
if (strcmp($feature->type_id->name, 'linkage_group') == 0) {
  // don't load
}
else {
  include_once('sites/all/modules/tripal/tripal_featuremap/theme/templates/tripal_feature_featurepos.tpl.php');
}
?>
