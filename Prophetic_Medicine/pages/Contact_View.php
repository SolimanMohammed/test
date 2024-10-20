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
	  <br><br><br><br>
	  <section class="main"> 

	<div class="Contact_Form">
	  <form name="frmContact" method="post" class="Contact_Form_In" action="" enctype="multipart/form-data" onsubmit="return validateContactForm()">
		<div class="input-row">
		  <label>الاسم</label>
		  <input type="text" class="input-field" name="UserName" id="UserName" required />
		</div>
					
		<div class="input-row">
		  <label>البريد الإلكترونى</label>
		  <input type="text" class="input-field" name="UserEmail" id="UserEmail" required />
		</div>
		
		<div class="input-row">
		  <label>الموضوع</label>
		  <input type="text" class="input-field" name="Subject" id="Subject" required />
		</div>
	
		<div class="input-row">
		  <label>وصف المشكلة</label>
		  <textarea name="Content" id="Content" class="input-field" cols="70" rows="6" required ></textarea>
		</div>
					
		<div class="btn-submit1">
		  <input type="submit" name="send" class="btn-submit" value="إرسال"/>
		  <div id="statusMessage"> 
			<?php
			  if (! empty($message)) {
			?>
				<p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
			<?php
			  }
			?>
		  </div>
		</div>
	  </form>
	</div>
		
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	  <script type="text/javascript">
	  function validateContactForm() {
		var valid = true;
		
		$(".info").html("");
		$(".input-field").css('border', '#e66262 1px solid');

		var UserName = $("#UserName").val();
		var UserEmail = $("#UserEmail").val();
		var Subject = $("#Subject").val();
		var Content = $("#Content").val();
				
		if (UserName == "") {
		  $("#UserName-info").html("فارغ!");
		  $("#UserName").css('border', '#e66262 1px solid');
		  valid = false;
		}

		if (UserEmail == "") {
		  $("#UserEmail-info").html("فارغ!");
		  $("#UserEmail").css('border', '#e66262 1px solid');
		  valid = false;
		}

		if (!UserEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
		{
		  $("#UserEmail-info").html("عنوان البريد الإلكتروني غير صالح!");
		  $("#UserEmail").css('border', '#e66262 1px solid');
		  valid = false;
		}

		if (Subject == "") {
		  $("#Subject-info").html("فارغ!");
		  $("#Subject").css('border', '#e66262 1px solid');
		  valid = false;
		}

		if (Content == "") {
		  $("#userMessage-info").html("فارغ!");
		  $("#Content").css('border', '#e66262 1px solid');
		  valid = false;
		}

		return valid;
	  }
	</script>
  </body>
</html>