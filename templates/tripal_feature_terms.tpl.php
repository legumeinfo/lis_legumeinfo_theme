<?php
$feature = $variables['node']->feature;

// eksc hack
if (strcmp($feature->type_id->name, 'QTL') == 0 ) {
//eksc- trait information is displayed in overview; remove this tab
//  include_once('sites/all/modules/legume/legume_qtl/theme/templates/tripal_feature_QTL_trait.tpl.php');
}
else if (strcmp($feature->type_id->name, 'genetic_marker') == 0 ) {
  // don't load
}
else if (strcmp($feature->type_id->name, 'linkage_group') == 0 ) {
  // don't load
}
else {
  include_once('sites/all/modules/tripal/tripal_feature/theme/templates/tripal_feature_terms.tpl.php');
}
