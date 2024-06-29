<?php 
  session_start();
  if(isset($_SESSION['unique_id']))
  {
    header("location: users.php");
  }
?>
<?php include_once 'header.php'; ?>
<body>
    <div class="wrapper">
         <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt"></div>
                <div class="field input">
                    <label for="">Email Address: </label>
                    <input type="email" name="email" placeholder="Enter Email Address">
                </div>
                <div class="field input">
                    <label for="">Password: </label>
                    <input type="password" name="password" placeholder="Enter Your Password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Not Yet Signed Up? <a href="index.php">Signup Now</a></div>
         </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
</body>
</html> 