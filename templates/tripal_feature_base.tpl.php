<?php
$feature  = $variables['node']->feature;

// eksc hack
if (strcmp($feature->type_id->name, 'QTL') == 0 ) {
  include_once('sites/all/modules/legume/legume_qtl/theme/templates/tripal_feature_QTL_base.tpl.php');
}
else if (strcmp($feature->type_id->name, 'genetic_marker') == 0 ) {
  include_once('sites/all/modules/legume/legume_marker/theme/templates/tripal_feature_marker_base.tpl.php');
}
else if (strcmp($feature->type_id->name, 'gene') == 0 ) {
  include_once('sites/all/modules/tripal/tripal_gene/theme/templates/tripal_gene_base.tpl.php');
}
else if (strcmp($feature->type_id->name, 'linkage_group') == 0 ) {
  include_once('sites/all/modules/legume/legume_lg/theme/templates/tripal_feature_lg_base.tpl.php');
}
else {
  include_once('sites/all/modules/tripal/tripal_feature/theme/templates/tripal_feature_base.tpl.php');
}
