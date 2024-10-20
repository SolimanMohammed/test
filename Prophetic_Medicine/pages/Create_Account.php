<html dir="rtl">
  <head>
    <meta charset="UTF-8"/>
    <title>Create Account</title>
    <link rel="stylesheet" href="../css/style.css">
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
        
        <div class="container_user">
          <h1 class="form-title">إنشاء حساب جديد</h1>
          <form action="Create_Account_Coding.php" method="post" enctype="multipart/form-data">

            <div class="main-user-info">
              <div class="user-input-box">
                <label for="Fullname">الاسم بالكامل</label>
                <input type="text" id="FullName" name="FullName" placeholder="ادخل اسمك" required/>
              </div>

              <div class="user-input-box">
                <label for="City">المدينة</label>
                <input type="text" id="City" name="City" placeholder="ادخل مدينتك" required/>
              </div>

              <div class="user-input-box">
                <label for="Email">البريد الإلكتروني</label>
                <input type="Email" id="Email" name="Email" placeholder="ادخل بريدك الإلكتروني" required/>
              </div>

              <div class="user-input-box">
                <label for="Password">كلمة المرور</label>
                <input type="Password" id="Password" name="Password" placeholder="كلمة المرور" minlength="9" maxlength="15" required/>
              </div>    
            </div>

            <input type="checkbox" Name="G" required/>أوافق على الشروط والأحكام <br><br>
            <center>
              <div class="form-submit-btn">
                <input type="submit" class="Submit_Account" value="تسجيل الحساب">
              </div><br>
              <a href="Sign_in.php" style="font-size: 18px;"><b>هل لديك حساب بالفعل؟ تسجيل دخول!</b></a>
            </center>
          </form>
        </div>
      </div>
      
      <div class="end_section">  
        <footer>
          <h4>&copy; جميع الحقوق محفوظة لدى مؤسسة الطب النبوي، 2024<h4>
        </footer>
      </div>            
    </div>
  </body>
</html>
