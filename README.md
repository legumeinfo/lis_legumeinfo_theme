# lis_legumeinfo_theme

installation notes...

```
cd /usr/local/www/drupal7/sites/all/themes
git clone https://github.com/ncgr/lis_legumeinfo_theme.git
# make sure theme dir is named correctly
mv lis_legumeinfo_theme legumeinfo_theme
cd legumeinfo_theme
git checkout release-yyyy-mm-dd
```
In drupal, make legumeinfo_theme the default, then also:

* install nice_menus 7.x-2.x.zip
* enable nice menus module
* configure nice menus in modules -> animation speed fast
* then in admin/structure/block, remove main menu from header (because menu is printed by the page template explicitly)
* drush cc all
