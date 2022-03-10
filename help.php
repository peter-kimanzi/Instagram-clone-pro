<?php include 'config/declare.php'; ?>

<!-- a universal file that has all the classes included -->
<?php include 'config/classesGetter.php'; ?>

<!-- creating objects -->
<?php
  $universal = new universal;
  $avatar = new Avatar;
  $post = new post;
  $noti = new notifications;
  $message = new message;
?>

<?php
  $title = "{$noti->titleNoti()} Help for you • Career Path";
  $keywords = "Career Path, Share and capture world's moments, share, capture, help";
  $desc = "Career Path lets you capture, follow, like and share world's moments in a better way and tell your story with photos, messages, posts and everything in between";
?>

<!-- including files for header of document -->
<?php
  if ($universal->isLoggedIn()) {
    include 'includes/header.php';
    include 'needs/heading.php';
    include 'needs/nav.php';
    include_once 'needs/search.php';
  } else if ($universal->isLoggedIn() == false) {
    include 'index_include/index_header.php';
  }
?>

<div class="overlay"></div>
<div class="notify"><span></span></div>
<div class="badshah">

  <div class="help_div">
    <h2>for any issues or complains contact management through Email: <a href="mailto:kimjayden001@gmail.com">kimjayden001@gmail.com</a>
    or PhoneNumber: <a href="tel:+254712080741">+254712080741</a></h2>
<br><br>
    <h1>tipically replays within a day</h1>

    <br><br><br><br>
    <p>A non beneficial website to assist students. Terms and conditions apply</p>
  </div>

</div>

<?php
if ($universal->isLoggedIn()) {
  include 'includes/footer.php';
} else if ($universal->isLoggedIn() == false) {
  include 'index_include/index_footer.php';
}
?>
