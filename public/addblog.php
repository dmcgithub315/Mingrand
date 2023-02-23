<?php
	session_start(); 
 ?>
<?php require_once("connect.php");?>
<?php include("permission.php");?>
<?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		if(isset($_POST['image'])){
			$image = $_POST['image'];
		}

		$inputalbum = isset($_POST['album'])?$_POST['album']:"";
		$album = explode("\n", str_replace("\r", "", $inputalbum));
		// encode array to string to save into database
		if(isset($album)){
			$album = json_encode($album, true);
		}

		if(isset($_POST['title'])){
			$title = $_POST['title'];
		}

		if(isset($_SESSION["userid"])){
			$userid = $_SESSION["userid"];
		}
		

		$time = date('Y/m/d', time());

		$content1 = isset($_POST['content1'])? trim($_POST['content1']) :"";
		

		$content2 = isset($_POST['content2'])? trim($_POST['content2']) :"";
		
		if(isset($_POST['quote'])){
			$quote = $_POST['quote'];
		}

		if(isset($_POST['author'])){
			$author = $_POST['author'];
		} 

		$sqlQuery = "INSERT INTO blog(image, album, userid, time, title, content1, content2, quote, author) VALUES('{$image}', '{$album}', '{$userid}', '{$time}',
		'{$title}', '{$content1}', '{$content2}', '{$quote}', '{$author}')";
		
		if ($conn->query($sqlQuery) === TRUE) {
			$sqlSelect = "SELECT * FROM blog WHERE title = '{$title}'";
			$select = mysqli_query($conn, $sqlSelect);
			$row = mysqli_fetch_array($select);
			$id = $row['id'];
			echo "Add House Successfully. <a href='/mingrand/public/blogsingle.php?id={$id}'>Check It</a>";
		  } else {
			echo "Error: " . $sqlQuery . "<br>" . $conn->error;
		  }
		  
		  $conn->close();
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />
    <link rel="stylesheet" href="./assets/slick/slick.css">
    <link rel="stylesheet" href="./style.css" />
</head>
<body>
    <div class="wrapper-login">
        <div class="property-banner">
            <div class="container">
                <nav id="navbar" class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="./index.php">
                            <img
                            class="logo-img"
                            src="./assets/image/logo.png"
                            alt="logo"
                            />
                            <img
                            class="logo-img"
                            src="./assets/image/logo-text.png"
                            alt="logo"
                            />
                        </a>
                        <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                        >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-6 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-white active home-nav" aria-current="page" href="./index.php"
                                >Home</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./propertygrid.php">Properties +</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./pages.php">Pages +</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./blog.php">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./contact.php">Contact</a>
                            </li>
                        </div>
                        <form class="d-flex header-form" role="search">
                            <button class="submit-btn" type="submit">Submit +</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
        <div class="login-content">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6 login-box">
                        <form action="addblog.php" method="post" class="col-md-12 row">
                            <h3>Add Blog</h3>
                            <div class="form-group col-12">
                                <label for="title" class="form-text">Title:</label><br>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group col-12">
                                <label for="content1" class="form-text">Content 1:</label><br>
								<textarea name="content1" id="content1" style="width:100%;"></textarea>
                            </div>
							<div class="form-group col-12">
                                <label for="content2" class="form-text">Content 2:</label><br>
								<textarea name="content2" id="content2" style="width:100%;"></textarea>
                            </div>
                            <div class="form-group col-12">
                                <label for="image" class="form-text">Image:</label><br>
                                <input type="text" name="image" id="image" class="form-control">
                            </div>
							<div class="form-group col-12">
                                <label for="album" class="form-text">Album:</label><br>
								<textarea name="album" id="album" style="width:100%;"></textarea>
                            </div>
                            <div class="form-group col-12">
                                <label for="quote" class="form-text">Quote:</label><br>
                                <input type="text" name="quote" id="quote" class="form-control">
                            </div>
							<div class="form-group col-12">
                                <label for="author" class="form-text">Author:</label><br>
                                <input type="text" name="author" id="author" class="form-control">
                            </div>
                            <div class="form-group col-12">
                                <input type="submit" name="btn_submit" class="btn btn-success btn-md login-btn" value="Register">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-top">
                <div class="footer-logo container">
                    <div class="row justify-content-center">
                      <div class="row company-logo-row col-lg-4 col-12">
                        <div class="company-logo">
                          <img src="./assets/image/logo.png" alt="logo">
                          <img src="./assets/image/logo-text.png" class="company-logo-text" alt="logo-text">
                        </div>
                      </div>
                      <div class="footer-contact col-lg-8 d-flex justify-content-end">
                        <a class="" href="https://www.facebook.com/" target="_blank">
                          <div class="logo-circle rounded-circle">
                            <i class="fa-brands fa-facebook-f"></i>
                          </div>
                        </a>
                        <a class="" href="https://www.twitter.com/" target="_blank">
                          <div class="logo-circle rounded-circle">
                            <i class="fa-brands fa-twitter"></i>
                          </div>
                        </a>
                        <a class="" href="https://www.instagram.com" target="_blank">
                          <div class="logo-circle rounded-circle">
                            <i class="fa-brands fa-instagram"></i>
                          </div>
                        </a>
                        <a class="" href="https://www.skype.com" target="_blank">
                          <div class="logo-circle rounded-circle">
                            <i class="fa-brands fa-skype"></i>
                          </div>
                        </a>
                        <a class="" href="https://www.pinterest.com" target="_blank">
                          <div class="logo-circle rounded-circle">
                            <i class="fa-brands fa-pinterest-p"></i>
                          </div>
                        </a>
                      </div>
                      
                  </div>
                </div>
            <div class="footer-content">
                <div class="footer-content-container container">
                    <div class="row">
                      <div class="col-lg-3 col-sm-auto col-12">
                        <div class="company-info">
                          <h2>COMPANY</h2>
                          <div class="company-detail">
                            <div class="location-detail">
                              <i class="fa-solid fa-location-dot"></i>
                              <span>420 Love Sreet 133/2 Mirpur City, Dhaka</span>
                            </div>
                            <div class="phone-detail">
                              <i class="fa-solid fa-phone"></i>
                              <span>+(066) 19 5017 800 628</span>
                            </div>
                            <div class="mail-detail">
                              <i class="fa-solid fa-envelope"></i>
                              <span>info.contact@gmail.com</span>
                            </div>
                          </div>
                        </div>
                      </div>
                        <div class="col-sm-auto col-6 quick-links">
                            <h2>QUICK LINKS</h2>
                            <a href="">Our Services</a>
                            <a href="">Terms of Use</a>
                            <a href="">New Guest List</a>
                            <a href="">The Team List</a>
                        </div>
                        <div class="col-sm-auto col-6 categories-footer">
                            <h2>CATEGORIES</h2>
                            <a href="">Art & Design</a>
                            <a href="">Business</a>
                            <a href="">Computer Science</a>
                            <a href="">Deta Science</a>
                        </div>
                      <div class="col-lg-4 col-sm-auto col-12">
                        <div class="newslater">
                          <h2>NEWSLATER</h2>
                          <p>Lorem ipsum dolor sit amet,</p>
                          <div class="subcribe-form">
                            <input class="form-control" type="text" name="mail" id="mail" placeholder="Your Mail">
                            <button class="btn btn-success">Subcribe</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                </div>
            </div>
          <div class="copyright">
            <hr>
            <div class="copyright-detail">
              <div class="container">
                <span class="copyright-text">©2020, Copy Right By Ijm NH. All Rights Reserved copy</span>
              </div>
              <div class="nav-link-footer d-flex">
                <a href="./index.php">HOME</a>
                <p>|</p>
                <a href="./about.php">ABOUT</a>
                <p>|</p>
                <a href="./blog.php">BLOG</a>
                <p>|</p>
                <a href="./contact.php">CONTACT</a>
              </div>
              
            </div>
          </div>
        </div>
        
    </div>
</body>
</html>