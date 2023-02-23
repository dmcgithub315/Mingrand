<?php
session_start();
if (isset($_SESSION['username']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: http://localhost/mingrand/public/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Pages</title>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />
    <link rel="stylesheet" href="./assets/slick/slick.css">
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div class="wrapper-pages">
        <div class="pages-banner">
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
                                <a class="nav-link text-success" href="./pages.php">Pages +</a>
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
            <div class="contact-us text-center">
                <h1>Add Property</h1>
                <div class="breadcrump d-flex justify-content-center">
                    <a href="./index.php">
                        <span>Home</span>
                    </a>
                    <i class="fa-solid fa-angle-right"></i>
                    <h5>Add Property</h5>
                </div>
            </div>
        </div>

        <div class="pages-content">
            <div class="container">
                <div class="add-proparty-list d-flex">
                    <button data-tab="#description" class="add-proparty-tag active">
                        <span>Description</span>
                    </button>
                    <button data-tab="#set-location" class="add-proparty-tag">
                        <span>Set Location</span>
                    </button>
                    <button data-tab="#gallary" class="add-proparty-tag">
                        <span>Gallary</span>
                    </button>
                    <button data-tab="#additional-info" class="add-proparty-tag">
                        <span>Additional Info</span>
                    </button>
                    <button data-tab="#property-type" class="add-proparty-tag border border-0">   
                        <span>Property Type</span>
                    </button>
                </div>
                <div class="form-tabs">
                    <form action="addhouse.php" method="post">
                        <div id="description" class="add-proparty-form active row shadow p-3 mb-5 bg-body rounded"> 
                            <div class="col-12">
                                
                                <div>
                                    <p>Property Title</p>
                                    <input class="form-control" name="title" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <p>Property Type</p>
                                    <select class="form-select" name="type" aria-label="Default select example">
                                        <option value="Villa">Villa</option>
                                        <option value="House">House</option>
                                        <option value="Apartment">Apartment</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <p>Garages</p>
                                    <select class="form-select" name="garages" aria-label="Default select example" >
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <p>Bedrooms</p>
                                    <select class="form-select" name="bedrooms" aria-label="Default select example">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <p>Bathrooms</p>
                                    <select class="form-select" name="bathrooms" aria-label="Default select example">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <p>Kitchen</p>
                                    <select class="form-select" name="kitchen" aria-label="Default select example">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <p>Living room</p>
                                    <select class="form-select" name="livingroom" aria-label="Default select example">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="javascript:void(0);" onclick="setActiveTab('#set-location');" class="btn btn-success float-end next-tab-btn btn-next">Next</a>
                            </div>
                        </div>
                        <div id="set-location" class="add-proparty-form row shadow p-3 mb-5 bg-body rounded"> 
                            <div class="col-12">
                                <div>
                                    <p>Location</p>
                                    <input class="form-control" name="location" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <p>Location Detail</p>
                                    <input class="form-control" name="locationdetail" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <p>Floor(Apartment)</p>
                                    <input class="form-control" name="floor" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <p>Area</p>
                                    <input class="form-control" name="area" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <p>Price</p>
                                    <input class="form-control" name="price" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <p>Floors</p>
                                    <select class="form-select" name="floors" aria-label="Default select example">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value=">3">>3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <p>Orienten</p>
                                    <select class="form-select" name="orienten" aria-label="Default select example" value="South">
                                        <option value="West">West</option>
                                        <option value="East">East</option>
                                        <option value="North">North</option>
                                        <option value="South">South</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="javascript:void(0);" onclick="setActiveTab('#gallary');" class="btn btn-success float-end next-tab-btn btn-next">Next</a>
                            </div>
                        </div>
                        <div id="gallary" class="add-proparty-form row shadow p-3 mb-5 bg-body rounded"> 
                            <div class="col-md-4">
                                <div>
                                    <p>Length</p>
                                    <input class="form-control" name="length" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <p>Width</p>
                                    <input class="form-control" name="width" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <p>Height</p>
                                    <input class="form-control" name="height" type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div>
                                    <p>Year Build</p>
                                    <input class="form-control" name="yearbuild" type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="large-input">
                                    <p>Description</p>
                                    <input class="form-control" name="description" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="javascript:void(0);" onclick="setActiveTab('#additional-info');" class="btn btn-success float-end next-tab-btn btn-next">Next</a>
                            </div>
                        </div>
                        <div id="additional-info" class="add-proparty-form row shadow p-3 mb-5 bg-body rounded"> 
                            <div class="col-12">
                                <div>
                                    <div>
                                        <p>Equipment</p>
                                        <select class="form-select" name="equipment" aria-label="Default select example">
                                            <option value="Full">Full</option>
                                            <option value="Base">Base</option>
                                            <option value="Nothing">Nothing</option>
                                        </select>
                                        
                                    </div>
                                    <p>Amenities:</p>
                                    <div class="d-flex row checkbox-amenities">
                                        <form action="addhouse.php">
                                            <div class="d-flex col-md-3 col-6">
                                                <p>Air Conditioner</p>
                                                <input type="checkbox" name="amenities[]" value="Air Conditioner">
                                            </div>
                                            <div class="d-flex col-md-3 col-6">
                                                <p>Fencing</p>
                                                <input type="checkbox" name="amenities[]" value="Fencing">
                                            </div>
                                            <div class="d-flex col-md-3 col-6">
                                                <p>Internet</p>
                                                <input type="checkbox" name="amenities[]" value="Internet">
                                            </div>
                                            <div class="d-flex col-md-3 col-6">
                                                <p>Hospital</p>
                                                <input type="checkbox" name="amenities[]" value="Hospital">
                                            </div>
                                            <div class="d-flex col-md-3 col-6">
                                                <p>School</p>
                                                <input type="checkbox" name="amenities[]" value="School">
                                            </div>
                                            <div class="d-flex col-md-3 col-6">
                                                <p>Park</p>
                                                <input type="checkbox" name="amenities[]" value="Park">
                                            </div>
                                            <div class="d-flex col-md-3 col-6">
                                                <p>Dishwasher</p>
                                                <input type="checkbox" name="amenities[]" value="Dishwasher">
                                            </div>
                                            <div class="d-flex col-md-3 col-6">
                                                <p>Floor Convering</p>
                                                <input type="checkbox" name="amenities[]" value="Floor Convering">
                                            </div>
                                            <div class="d-flex col-md-3 col-6">
                                                <p>Wardrobes</p>
                                                <input type="checkbox" name="amenities[]" value="Wardrobes">
                                            </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-12">
                                <a href="javascript:void(0);" onclick="setActiveTab('#property-type');" class="btn btn-success float-end next-tab-btn btn-next">Next</a>
                            </div>
                            </div>
                        </div>
                        <div id="property-type" class="add-proparty-form row shadow p-3 mb-5 bg-body rounded"> 
                            <div class="col-md-6">
                                <div>
                                    <p>Image</p>
                                    <input class="form-control" type="text" name="image">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <p>Purpose</p>
                                    <select class="form-select" name="purpose" aria-label="Default select example">
                                            <option value="For Rent">For Rent</option>
                                            <option value="For Sale">For Sale</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <p>Album</p>
                                    <textarea class="form-control" name="album"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <p>Estate Location</p>
                                    <textarea class="form-control" name="estatelocation"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <p>Floor Plans</p>
                                    <textarea class="form-control" name="floorplan"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <p>Intro Video</p>
                                    <textarea class="form-control" name="introvideo"></textarea>
                                </div>
                            </div>
                            <input type="submit" name="post" class="btn btn-success submit-proparty" value="Post">
                        </div>
                    </form>
                </div>
                
                <a href="#navbar">
                    <button class="go-header-btn">
                        <i class="fa-solid fa-chevron-up"></i>
                    </button>
                </a>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>

    <script>
        function setActiveTab(tab_id) {
            $('.add-proparty-tag').removeClass('active');
            $("button[data-tab='" + tab_id +"']").addClass('active');

            $('.add-proparty-form').removeClass('active');
            $(tab_id).addClass('active');
        };
        jQuery(document).ready(function($) {
           $('.add-proparty-tag').click( function() {
                var tab = $(this).data('tab');
                setActiveTab(tab);
            });
        });
    </script>
  </body>
</html>
