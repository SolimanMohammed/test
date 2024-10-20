<html dir="rtl">
  <head>
    <title>About Us Page</title>
    <meta charset="UTF-8" />
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

      <div class="Space1">
        <img class="Medicine_Img" src="../imgs/cover.jpg"/>
        <div class="Parag1">الطب النبوي</div>
        <h4>هو موقع لجميع الوصفات النبويه والمذكورة في القرآن والسنة لرفع المناعة والاستشارات الطبية<br><br>
            الطب النبوي هو مصطلح يطلق على مجموعة النصائح المنقولة عن النبي محمد ﷺ تتعلق بأمور طبية <br>
            الذي تطبب بها هو ووصفها لغيره، ووصلت على شكل أحاديث نبويه بعضها علاجي وبعضها وقائي.</h4>    
      </div>
        
        <div class="end_section">  
        <footer>
          <h4>&copy; جميع الحقوق محفوظة لدى مؤسسة الطب النبوي، 2024<h4>       
          </div>
        </footer>
      </div>  
    </div>
  </body>
</html>
