<?php include 'config/declare.php'; ?>

<!-- a universal file that has all the classes included -->
<?php include 'config/classesGetter.php'; ?>

<!-- creating objects -->
<?php
  $universal = new universal;
?>

<?php
  if ($universal->isLoggedIn()) {
    header('Location: '.DIR);
  }
?>

<?php
  $title = "Career Path";
  $keywords = "Career Path, Share and capture world's moments, share, capture, share, login, signup";
  $desc = "Career Path lets you capture, follow, like and share world's moments in a better way and tell your story with photos, messages, posts and everything in between";
?>

<?php  include 'index_include/index_header.php';
 ?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<div class="index_wrapper">

  <!-- <div class="index_sign log_sign">
    <a href="signup" class="pri_btn">Need an account?</a>
  </div> -->

  <!-- <div class="github">
  <iframe src="https://ghbtns.com/github-btn.html?user=yTakkar&type=follow&count=false&size=large" frameborder="0" scrolling="0" width="180px" height="30px"></iframe>
    <iframe src="https://ghbtns.com/github-btn.html?user=yTakkar&repo=Career Path-Clone&type=fork&count=true&size=large" frameborder="0" scrolling="0" width="125px" height="30px"></iframe>
    <iframe src="https://ghbtns.com/github-btn.html?user=yTakkar&repo=Career Path-Clone&type=star&count=true&size=large" frameborder="0" scrolling="0" width="160px" height="30px"></iframe>
  </div> -->



  <!-- <div class="username_checker i_c">
    <span class="checker_text">username not available</span>
    <span class="checker_icon">
      <i class="fa fa-frown-o" aria-hidden="true"></i>
    </span>
  </div> -->
<!--
  <div class="feature">
    <div class="feature_desc">
      <h1>It's awesome to capture and share world's moments</h1>
      <h3>Career Path helps you connect with people with your amazing photos, videos and everything in between.</h3>

    </div>
    <div class="index_login sign_up_div">
      <form class="index_form login" action="" method="post">
        <input type="text" name="s_username" value="" autocomplete="off" placeholder="Username" class="s_username big_input" spellcheck="false" mssg="" maxlength="32" required autofocus>
        <input type="password" name="s_password" value="" autocomplete="off" placeholder="Password" id="password" class="s_password big_input" required maxlength="32">
        <span class="show_psswrd home_show_psswrd" id="show_psswrd">
          <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
        <input type="submit" name="s_submit" value="Log in to continue" class="s_submit">
      </form>
      <div class="forgot_psswrd">
        <a href="forgot_psswrd" class="a_pri hover" alt="Forgot your password" data-description="Forgot your password">Forgot password?</a>
        <a href="login" class="a_pri" alt="Open in another page">Separate Page</a>
      </div>
    </div>
  </div> -->
  <style>

.content{
width: 450px;
height: auto;
margin: 0 auto;
padding: 30px;
}
.nav-pills{
width: 450px;
}
.nav-item{
width: 50%;
}
.nav-pills .nav-link{
font-weight: bold;
padding-top: 13px;
text-align: center;
background: #343436;
color: #fff;
border-radius: 30px;
height: 100px;
}
.nav-pills .nav-link.active{
background: #fff;
color: #000;
}
.tab-content{
position: absolute;
width: 450px;
height: auto;
margin-top: -50px;
background: #fff;
color: #000;
border-radius: 30px;
z-index: 1000;
box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.4);
padding: 30px;
margin-bottom: 50px;
}
.tab-content button{
border-radius: 15px;
width: 100px;
margin: 0 auto;
float: right;
}
  </style>
  <div class="content">
    <!-- Nav pills -->
    <ul class="nav nav-pills" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" href="#login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#regis">Register</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div id="login" class="container tab-pane active">
        <form class="login" action="" method="post">
          <div class="form-group p-1">
          <label>Username</label>
          <input type="text" name="s_username" value="" autocomplete="off" placeholder="Username" class="form-control" spellcheck="false" mssg="" maxlength="32" required autofocus>
        </div>
          <div class="username_checker u_c">
            <span class="checker_text">username not available</span>
            <span class="checker_icon">
              <i class="fa fa-frown-o" aria-hidden="true"></i>
            </span>
          </div>
          <div class="form-group p-1">
            <label for="">Password</label>
          <input type="password" name="s_password" value="" autocomplete="off" placeholder="Password" id="login_password" class="form-control" required maxlength="32">
          </div>
          <span class="show_psswrd log_show_psswrd" id="show_psswrd">
            <i class="fa fa-lock" aria-hidden="true"></i>
          </span>
          <div class="form-group p-1">
          <input type="submit" name="s_submit" id="btnLogin" value="Log in to continue" class="btn btn-primary">
        </div>
        </form>
        <div class="forgot_psswrd">
          <a href="forgot_psswrd" class="a_pri" alt="Forgot your password">Forgot your password?</a>
        </div>
      </div>
      <div id="regis" class="container tab-pane fade">
        <form class="sign_up" id="sign_up" action="" method="post" class="p-1">
          <div class="form-group p-1">
              <label for="">Username</label>
          <input type="text" name="s_username" value="" autocomplete="off" placeholder="Username" class="form-control" spellcheck="false" mssg="" maxlength="30" required autofocus>
        </div>
          <div class="username_checker">
            <span class="checker_text">username not available</span>
            <span class="checker_icon">
              <i class="fa fa-frown-o" aria-hidden="true"></i>
            </span>
          </div>
          <div class="form-group p-1">
              <label for="">First Name</label>
          <input type="text" name="s_first_name" value="" autocomplete="off" placeholder="First name" class="form-control" spellcheck="false" maxlength="20" required>
          </div>
          <div class="form-group p-1">
              <label for="">Surname</label>
          <input type="text" name="s_surname" value="" autocomplete="off" placeholder="Surname" class="form-control " spellcheck="false" maxlength="20" required>
         </div>
          <div class="form-group p-1">
          <label for="">Email</label>
          <input type="email" name="s_email" value="" autocomplete="off" placeholder="Email" class="form-control " spellcheck="false" maxlength="52" required>
         </div>
          <div class="form-group p-1">
          <label for="">Password</label>
          <input type="password" name="s_password" value="" autocomplete="off" placeholder="Password" class="form-control"  maxlength="32" spellcheck="false" required id="password">
         </div>
          <span class="show_psswrd" id="show_psswrd">
            <i class="fa fa-lock" aria-hidden="true"></i>
          </span>
          <div class="psswrd_strength">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
            <div class="four"></div>
          </div><br>
          <div class="form-group p-1">
          <input type="checkbox" id="s_terms" name="s_terms" class="s_terms" required>
          <label for="s_terms" class="terms">I agree to <a href="terms" class="a_pri">Career Path Terms</a></label>
        </div>
          <div class="form-group p-1">
          <input type="submit" name="s_submit" id="btnSignup" value="Sign up for free" class="btn btn-primary p-2">
         </div>
        </form>
      </div>
    </div>
  </div>
  <div class="notify">
    <span></span>
  </div>

</div>

<div class="overlay-2"></div>
<?php include 'index_include/index_footer.php'; ?>

<script type="text/javascript">
  $(function(e){
    // $('.s_username').username_checker({
    //   url: "reg_process/@username_checker.php"
    // });

    $('#show_psswrd').togglePassword({
      input: document.getElementById('password')
    });

    $('#form1').on('submit', (function(e){
      e.preventDefault();
      $('.s_submit').prop('disabled', true);
      $('.overlay-2').show();
      login($('.s_username').val(), $('.s_password').val(), $('.s_submit'));
    }))

  });
</script>
<script type="text/javascript">
  $(function(){

    $('.s_username').username_checker();

    $('input[type="password"]').psswrd_strength();

    $('.sign_up').on('submit', (function(e){
      e.preventDefault();

      $('.s_submit').prop('disabled', true);
      $('.overlay-2').show();

      var username = $('.s_username').val();
      var firstname = $('.s_firstname').val();
      var surname = $('.s_surname').val();
      var email = $('.s_email').val();
      var password = $('.s_password').val();
      var terms = $('.s_terms').val();
      $.ajax({
        url: DIR+"/ajaxify/ajax_requests/register_requests.php",
        method: 'POST',
        cache: false,
        data: {
          username: username,
          firstname: firstname,
          surname: surname,
          email: email,
          password: password,
          terms: terms
        },
        success: function(data){
          console.log(data);
          if (data == "Successfull") {
            console.log('yepp');
            $('.s_submit').prop('disabled', true);
            $('.s_submit').prop('value', 'Redirecting..');
            $('.overlay-2').show();
            // window.location.href = DIR+"/success";
            window.location.href = DIR+"/thanks";
          } else {
            $('.s_submit').prop('disabled', false);
            $('.overlay-2').hide();
            $('.notify').notify({ value: 'Hello ' + username + '!!' });
          }
        }
      });
    }));

    $('#show_psswrd').togglePassword({
      input: document.getElementById('password')
    });

  });


</script>

<script type="text/javascript">
  $(function(e){
    $('form.login').on('submit', (function(e){
      e.preventDefault();
      $('.s_submit').prop('disabled', true);
      $('.overlay-2').show();
      login($('.s_username').val(), $('.s_password').val(), $('.s_submit'));
    }));

    $('.log_show_psswrd').togglePassword({
      input: document.getElementById('login_password')
    });

    $('.q_l_div > img').description({extraTop: -30});

    $('.q_l_div > img').quickLogin();

  });
</script>
