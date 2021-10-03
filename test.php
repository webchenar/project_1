<?php include_once('header.php');

session_destroy();

/* set the cache limiter to 'private' */

session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

/* set the cache expire to 30 minutes */
session_cache_expire(1);
$cache_expire = session_cache_expire();

/* start the session */

session_start();

$_SESSION['name'] = 'test';
echo $_SESSION['name'];

echo "The cache limiter is now set to $cache_limiter<br />";
echo "The cached session pages expire after $cache_expire minutes";

?>



<?php include_once('footer.php'); ?>