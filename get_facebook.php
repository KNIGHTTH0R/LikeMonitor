<?php
  /* get_facebook.php
   * This will pull the number of likes from any given Facebook page, this does not work with groups.
   *
   * 2018 Damian West <damian@damian.id.au>
   */

  require_once('monitor.php');

  // we need to be given a page variable with the Facebook page
  if (!isset($_GET['page'])) {
    die('ERROR [0001] NO PAGE GIVEN');
  }

  echo get_facebook($_GET['page'], (isset($_GET['img']) ? $_GET['img'] : false));
?>
