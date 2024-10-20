<html dir="rtl">
  <head>
    <title>Prophetic Medicine Website</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <img class="Body_Img" src="../imgs/body.png" usemap="#image-map"/>
        <form  method="GET">
        <map name="image-map">
          <area target="_self" alt="Head" title="Head" href="Body_Prescription.php?ID=1" coords="203,22,190,66,226,76,236,92,282,98,322,130,345,107,342,56,303,16,257,0,232,10,231,8,232,10" shape="poly">
          <area target="_self" alt="Lungs" title="Lungs" href="Body_Prescription.php?ID=2" coords="235,226,165,159" shape="rect">
          <area target="_self" alt="Lungs" title="Lungs" href="Body_Prescription.php?ID=2" coords="324,222,259,156" shape="rect">
          <area target="_self" alt="Heart" title="Heart" href="Body_Prescription.php?ID=3" coords="252,224,228,161" shape="rect">
          <area target="_self" alt="Liver" title="Liver" href="Body_Prescription.php?ID=4" coords="265,250,156,206" shape="rect">
          <area target="_self" alt="Stomach" title="Stomach" href="Body_Prescription.php?ID=5" coords="333,265,241,226" shape="rect">
          <area target="_self" alt="Intestines" title="Intestines" href="Body_Prescription.php?ID=6" coords="312,337,171,281" shape="rect">
          <area target="_self" alt="Pancreas" title="Pancreas" href="Body_Prescription.php?ID=7" coords="309,284,170,265" shape="rect">
        </map>
        
        <div class="parag1">الطب النبوي</div>
        <h4>هو موقع لجميع الوصفات النبويه والمذكورة في القرآن والسنة لرفع المناعة والاستشارات الطبية</h4>    
        <a class="Space2" href="Medicine.php">تصفح المكتبة</a>
      </div>
    
      <div class="end_section">  
        <footer>
          <h4>&copy; جميع الحقوق محفوظة لدى مؤسسة الطب النبوي، 2024</h4>       
          </div>
        </footer>
      </div>
    </div>
  </body>
</html>