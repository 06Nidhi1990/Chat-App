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
         <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First Name: </label>
                        <input type="text" name="fname" placeholder="First Name" required="">
                    </div>
                    <div class="field input">
                        <label for="">Last Name: </label>
                        <input type="text" name="lname" placeholder="Last Name" required="">
                    </div>
                </div>
                <div class="field input">
                    <label for="">Email Address: </label>
                    <input type="email" name="email" placeholder="Enter Email Address" required="">
                </div>
                <div class="field input">
                    <label for="">Password: </label>
                    <input type="password" name="password" placeholder="Enter New Password" required="">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label for="">Select Image: </label>
                    <input type="file" name="image" required="">
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Already Signed Up? <a href="login.php">Login Now</a></div>
         </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
</body>
</html>