<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:/index.php');
    exit();
}

?>


<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/main.css">


</head>

<body>


<div class="container">
  <div class="form">
    <div class="form-content">

      <div class="form-item">
        <label>name</label>
        <div class="input-item">
          <input class=" text input-name"  placeholder="Your Name" type="text" name="name">
        </div>

      </div>
        <span class=" exe name-exe"></span>

      <div class="form-item">
        <label>Email</label>
        <div class="input-item">
          <input class="text input-email" placeholder="Email" type="text" name="email">
        </div>
      </div>
        <span class="ema-exe"></span>

      <div class="form-item">
        <label>Password</label>
        <div class="input-item">
          <input class="text input-password" placeholder="******" type="text" name="password">
        </div>
      </div>
        <span class="exe pass-exe"></span>

      <div class="form-item">
        <label>Gender</label>
        <div class="input-item input-gender">
          <input id="r1" class="gen" type="radio" name="gender" value="male"><label>Male</label>
          <input id="r2"  class="gen" type="radio" name="gender" value="female"><label>Female</label>
            <span class="gende-exe"></span>
        </div>
      </div>

      <div class="form-item">
        <label>Birthdate</label>
        <input class="text input-birthdate" type="date" name="password">
      </div>
        <span class="date-exe"></span>
      <div class="form-contact">


        <div class="select-div">
            <label class="contact-label">Contacts</label>
            <select class="networks-input">
                <option>facebook</option>
                <option>telegram</option>
                <option>instagram</option>
                <option>twitter</option>
                <option>other</option>
            </select>
        </div>
        <div class="form-item">




            <div class="form-item-box">


            </div>
        </div>




        <div class="nav-btn">
          <button class="btn-save">Save</button>
          <label>or</label>
          <button class="btn-add">addNew</button>
        </div>
        <div class="form-item">
          <label>Photo</label>
          <div class="input-item">
            <input class="text" type="file" name="photo">
          </div>
        </div>


        <div class="form-item">
          <label>Hobbies</label>
          <div class="input-item ">
            <textarea   class="text-area input-hobbies">  </textarea>
          </div>
        </div>


        <div class="form-item">
          <label>Some Words</label>
          <div class="input-item">
            <textarea  class="text-area  input-somewords">  </textarea>
          </div>
        </div>


        <div class="nav-btn">
          <button class="update-btn">Update</button>
          <button class="next-btn">Cancel</button>
            <input type="checkbox" class="check">
            <button class="ok-btn">OK</button>
        </div>
          <span class="check-exe"></span>
      </div>

        <div class="showData">

        </div>
    </div>



  </div>
</div>



<script src="../js/script.js"></script>
<script src="../js/validation.js"></script>
<script src="../js/form.js"></script>



</body>

</html>
