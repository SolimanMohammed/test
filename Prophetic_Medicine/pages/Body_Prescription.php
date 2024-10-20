<html dir="rtl">
  <head>
    <title>Body Prescription</title>
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
      <br><br><br><br>

    <section class="main"> 
      <div class="content">
        <?php
        	$ID=$_GET['ID'];
          $DB_Conn=mysqli_connect("localhost","root","","prophetic") or die(mysqli_error($DB_Conn));
          $Check_Medicine=mysqli_query($DB_Conn,"select * from body where PrescriptionID=$ID") or die(mysqli_error($DB_Conn));

          while($Result=mysqli_fetch_array($Check_Medicine))
          {
            $Path=$Result['Path'];
        ?>  
            <div class="Medicine-Card">  
              <div class="Medicine-Image">
        <?php
                echo"<img src='".$Result['Path']."'alt='No Image'>";
        ?> 
              </div>
              <strong class="Medicine-Details">
        <?php 
                echo "<span>".'اسم الوصفة:'."</span>".$Result['TreatmentName']."</br>"."</br>";
                echo "<span>".'الجزء المستهدف:'."</span>".$Result['Title']."</br>"."</br>";
                echo "<span>".'الاستخدامات:'."</span>".$Result['Uses']."</br>"."</br>";
                echo "<span>".'المصدر:'."</span>".$Result['Source']."</br>"."</br>";
                echo "<span>".' '."</span>".$Result['IbnQayyim']."</br>"."</br>";
        ?>
              </strong>
            </div>
        <?php
          }
        ?>
      </div>
    </section>

  </body>
</html>


