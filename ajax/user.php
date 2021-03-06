<?php
  /**
   * User
   *
   * @package CMS Pro
   * @author wojoscripts.com
   * @copyright 2015
   * @version $Id: user.php, v3.00 2015-03-20 10:12:05 gewa Exp $
   */
  define("_VALID_PHP", true);
  require_once("../init.php");
?>
<?php
  /* Registration */
  if (isset($_POST['doRegister'])):
      if (intval($_POST['doRegister']) == 0 || empty($_POST['doRegister'])):
          exit;
      endif;
      $user->register();
  endif;

  /* Password Reset */
  if (isset($_POST['passReset'])):
      if (intval($_POST['passReset']) == 0 || empty($_POST['passReset'])):
          exit;
      endif;
      $user->passReset();
  endif;

  /* Account Acctivation */
  if (isset($_POST['accActivate'])):
      if (intval($_POST['accActivate']) == 0 || empty($_POST['accActivate'])):
          exit;
      endif;
      $user->activateUser();
  endif;
?>