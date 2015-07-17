<?php
// Code to get sub menu's working
function legumeinfo_theme_links__system_main_menu() {
  return null;
}
// Code to get sub menu's working
function legumeinfo_theme_menu_tree__main_menu($variables) {
  return '<ul id="main-menu-links" class="menu clearfix">'.$variables['tree'].'</ul>';
}
