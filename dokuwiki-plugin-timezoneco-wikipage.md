Link: https://www.dokuwiki.org/plugin:timezoneco

====== timezoneco Plugin ======

---- plugin ----
description: This plugin add a timezone configuration field for you to set up your dokuwiki timezone
author     : beco
email      : rcb@beco.cc
type       : action
lastupdate : 2026-02-26
compatible : Librarian
depends    :
conflicts  :
similar    :
tags       : timezone

downloadurl: https://github.com/drbeco/timezoneco/archive/master.zip
bugtracker : https://github.com/drbeco/timezoneco/issues
sourcerepo : https://github.com/drbeco/timezoneco
donationurl:

screenshot_img : https://raw.github.com/drbeco/timezoneco/master/timezoneco.png
----

===== Installation =====

Install the plugin using the DokuWiki Extension Manager or download it from GitHub. No core file editing required.

===== Configuration and Settings =====

Go to Admin > Configuration Settings. Under the **Timezone changer plugin** section, select your timezone from the dropdown list. Leave it empty to use the server default.

The list contains all valid [[https://www.php.net/manual/en/timezones.php|PHP timezone strings]].

===== Development =====

=== Change Log ===

  * **2026-02-26**
    * Modernized: no longer requires editing ''inc/init.php''
    * Uses DokuWiki's event system (''DOKUWIKI_STARTED'' hook) to set the timezone
    * Timezone setting is now a dropdown instead of free-text
    * Added Portuguese (pt-br) and Italian translations
    * Survives DokuWiki upgrades without manual intervention
  * **2022-02-24**
    * A bug fix that prevented manager.dat to realize the plugin was already up to date
  * **2021-10-17**
    * Initial release

=== Known Bugs and Issues ===

None known.

=== ToDo/Wish List ===

  * In hope someday this plugin would cease to exist by adding this functionality to the very core of DokuWiki.


===== Discussion =====

//Add discussion at issue tracker://

[[https://github.com/drbeco/timezoneco/issues]]

