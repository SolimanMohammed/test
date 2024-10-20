<html dir="rtl">
  <head>
    <title>Login Page</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"/> <!--For Social Icons-->  
  </head>    
    
  <body>
    <div class="homePage">
      <div class="nav">
        <div>
          <a href="Index.php" target="_self"><img class="logo" src="../imgs/logo.png" alt="Something Wrong!"/></a>
        </div>
          
        <div class="Medicine"><a href="Medicine.php">المكتبة</a></div>
        <div class="Shop"><a href="Shop.php">المتجر</a></div>
        <div class="About_Us"><a href="About_Us.php">من نحن</a></div>
        <div class="Contact_Us"><a href="Contact_Us.php">تواصل معنا</a></div>
 
        <?php
          session_start();
            if(!empty($_SESSION['Type'])){
		    ?>
              <div class="Consultation"><a href="Consultation.php">طلب استشارة</a></div>

					    <div class="logout">
            		<div class="sub_logout"><a class="link" href="logout.php">تسجيل خروج</a></div>
          		</div>
		    <?php
				    }

				    else{
		    ?>
              <div class="consultation"><a href="Create_Account.php">طلب استشارة</a></div>

              <div class="login">
                <div class="sub_login"><a class="link" href="Sign_in.php">تسجيل دخول</a></div>
              </div>
             
              <div class="create_account">
                <div class="sub_create_account"><a class="link" href="Create_Account.php">إنشاء حساب</a></div>
              </div>
		    <?php	
					  }
		    ?>
      </div>
  
      <div class="Space3">
        <div class="Space4">
          <img class="MedicineImg_Account" src="../imgs/cover.jpg"/>
        </div>
          
        <div class="container_Signin">
          <h1 class="form-title">تسجيل الدخول</h1>
          <form name="login" onsubmit= "return validateR()" action="Sign_in_Coding.php" method="post" enctype="multipart/form-data">
            <div class="main-user-info">
              <div class="user-input-box">
                <label for="Email">البريد الإلكتروني</label>
                <input type="Email" name="UserEmail" placeholder="البريد الإلكتروني" required/>
              </div>

              <div class="user-input-box">
                <label for="Password">كلمة المرور</label>
                <input type="Password" name="UserPassword" placeholder="كلمة المرور" minlength="9" maxlength="15" required/>
              </div>
            </div>

            <center>
              <div class="form-submit-btn">
                <input type="submit" class="submit_account" value="تسجيل دخول">
              </div><br>
            <span style="font-size: 18px;">هل نسيت كلمة المرور؟</span><br><br>
              <a href="Create_Account.php" style="font-size: 18px;"><b>إنشاء حساب جديد</b></a>
            </center>
          </form>
        </div>
      </div>          
    </div>
  </body>
</html>