Link: https://www.dokuwiki.org/plugin:timezoneco

====== timezoneco Plugin ======

---- plugin ----
description: This plugin add a timezone configuration field for you to set up your dokuwiki timezone
author     : beco
email      : rcb@beco.cc
type       : action
lastupdate : 2022-02-24
compatible : Hogfather
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

:!: You need to be a bit savage, I can't lie. It is not plain simple. But it is easy enough.

After installing this plugin in your plugin directory (from github or from the instalation tool), you need to edit the file:

  ...dokuwiki/public/inc/init.php

Comment line 95:

  //date_default_timezone_set(@date_default_timezone_get());

Add the following lines:

  if(empty($conf['plugin']['timezoneco']['timezone'])){
      date_default_timezone_set(@date_default_timezone_get());
  }else{
      date_default_timezone_set($conf['plugin']['timezoneco']['timezone']);
  }


===== Configuration and Settings =====


On your admin / configuration settings, find the ''timezone'' field and add a string of your timezone according to [[https://www.php.net/manual/en/timezones.php|PHP timezone strings]].


===== Development =====

Remember: if you upgrade your dokuwiki, you need to edit the ''init.php'' file again.

=== Change Log ===

  * ** 2022-02-24**
    * A bug fix that prevented manager.dat to realize the plugin was already up to date
  * **2021-10-17**
    * Initial release

=== Known Bugs and Issues ===

  * There should be a better way

=== ToDo/Wish List ===

  * In hope someday this plugin would cease to exist by adding this functionality to the very core of Dokuwiki.


===== Discussion =====

//Add discussion at issue tracker://

[[https://github.com/drbeco/timezoneco/issues]]

