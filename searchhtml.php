<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search Offices</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--    <link href="http://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />-->

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css" />
    <style>

    .search_bar{
        background-color: #f6dac0;
    }
    .search_button_place{
        padding-bottom: 20px; padding-right: 30px; float: right;
    }
    .page_left {
        height: 728px;
        padding-right: 20px;
        overflow:scroll;
    }
    .page_block{
        background-color: #fbf2e9;
        box-shadow: 0px 0px 10px 0px #efbf92;
        margin-bottom: 50px;
    }
    .house_photo{
        /*padding: 22px 0px 10px 8px;*/
        margin-top: 20px;
        padding-left: 10px;
    }
    .house-details{
        padding-left: 10px;
    }
    .house-address{
        line-height: 12px;
        padding-bottom: 15px;
    }
    .details-house{
        line-height: 9px;
        padding-bottom: 5px;
    }
    .font_inside_option{
        height: 25px;
        padding: 0px;
    }



</style>

</head>

<body>

<!-- HEADER -->
<header class="navbar-fixed-top" role="banner">

<div id="brandlook">
<div class="container">
  <div class="row">
    <div class="col col-xs-12 col-sm-6 logo">
      <h1>Your Company Name Here</h1>
    </div>
    <div class="col col-xs-12 col-sm-6 contactinfo">
        <p> <i class="glyphicon glyphicon-earphone"></i> 30423048023840238</p>
        <p> <i class="glyphicon glyphicon-envelope"></i> aksdhkashdkjahsdxx</p>
    </div>
  </div>
</div>
</div>

<!-- Navigation -->
<div class="navbar navbar-default " role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="#">F-ROOM</a> -->
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-2">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>

                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="signup.php">Sign up / Sign in</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>

                  </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</div>

</header>
<!-- Header Carousel -->

<div class="container-fluid search_bar">
    <form action="" name="homesearch" method="POST" onsubmit="">
        <!--visible portion-->
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

            <div class="input-group">
                   <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                        <span id="search_concept">Filter by</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu scrollable-menu" role="menu">
                      <li><a href="#contains">Filter 1</a></li>
                      <li><a href="#greather_than">Filter 2</a></li>
                      <li><a href="#less_than">Filter 3</a></li>
                      <li><a href="#all">Filter 4</a></li>
                    </ul>
                </div>
                <input autocomplete="off" class="form-control" id="" name="location" size="46" placeholder="Type a city and state or zip code" value="" type="text">
                <span class="input-group-btn">
                    <button type="submit" name="submitbtn" value="Search" class="btn btn-warning">
                      <i class="glyphicon glyphicon-search"></i><span> Search</span>
                    </button>
                </span>
            </div>

               
            </div>
        </div>
        <!--end visible portion-->

       
       
        
    </form>
    <!--</form>-->
</div>
<!--end container fluid-->


<div class="container-fluid">
    <div class="row" style="margin-top: 30px;">
        <div class="col-lg-3">
             <!--invisible portion-->
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label" for="inputSuccess2">Minimum Sq. Ft</label>
                    <select class="form-control font_inside_option">
                        <option selected style="">any</option>
                        <option value="" >1687432</option>
                        <option value="" >232r</option>
                        <option value="" >332r32r</option>
                        <option value="" >4r32r</option>
                    </select>
                    <label class="control-label" for="inputSuccess2">Minimum Lot Size</label>
                    <select class="form-control font_inside_option">
                        <option selected>any</option>
                        <option value="" >1687432</option>
                        <option value="" >232r</option>
                        <option value="" >332r32r</option>
                        <option value="" >4r32r</option>
                    </select>
                    <label class="control-label" for="inputSuccess2">Year Built</label>
                    <select class="form-control font_inside_option">
                        <option selected>any</option>
                        <option value="" >1687432</option>
                        <option value="" >232r</option>
                        <option value="" >332r32r</option>
                        <option value="" >4r32r</option>
                    </select>
                    <label class="control-label" for="inputSuccess2">Days listed</label>
                    <select class="form-control font_inside_option">
                        <option selected>any</option>
                        <option value="" >1687432</option>
                        <option value="" >232r</option>
                        <option value="" >332r32r</option>
                        <option value="" >4r32r</option>
                    </select>
                </div>
           
                <h3>Property type</h3>
                <div class="checkbox" name="family-type">
                    <label>
                        <input type="checkbox" value="">
                        Single Family
                    </label>
                </div>
                <div class="checkbox" name="family-type">
                    <label>
                        <input type="checkbox" value="">
                        Condo/Townhouse
                    </label>
                </div>
                <div class="checkbox" name="family-type">
                    <label>
                        <input type="checkbox" value="">
                        Multi-Family
                    </label>
                </div>
            
                <h3>Listing features</h3>
                <div class="form-group">
                    <label class="control-label" for="inputSuccess2">Price reductions</label>
                    <select class="form-control font_inside_option">
                        <option selected>include</option>
                        <option value="" >1687432</option>
                        <option value="" >232r</option>
                        <option value="" >332r32r</option>
                        <option value="" >4r32r</option>
                    </select>
                    <label class="control-label" for="inputSuccess2">Featured listings</label>
                    <select class="form-control font_inside_option">
                        <option selected>include</option>
                        <option value="" >1687432</option>
                        <option value="" >232r</option>
                        <option value="" >332r32r</option>
                        <option value="" >4r32r</option>
                    </select>
                    <label class="control-label" for="inputSuccess2">Listings with photos</label>
                    <select class="form-control font_inside_option">
                        <option selected>include</option>
                        <option value="" >1687432</option>
                        <option value="" >232r</option>
                        <option value="" >332r32r</option>
                        <option value="" >4r32r</option>
                    </select>
                </div>
           
                <h3>Listing type</h3>
                <div class="form-group">
                    <label class="control-label" for="inputSuccess2">Foreclosures</label>
                    <select class="form-control font_inside_option">
                        <option selected>include</option>
                        <option value="" >1687432</option>
                        <option value="" >232r</option>
                        <option value="" >332r32r</option>
                        <option value="" >4r32r</option>
                    </select>
                    <label class="control-label" for="inputSuccess2">Short Sales</label>
                    <select class="form-control font_inside_option">
                        <option selected>include</option>
                        <option value="" >1687432</option>
                        <option value="" >232r</option>
                        <option value="" >332r32r</option>
                        <option value="" >4r32r</option>
                    </select>
                    <label class="control-label" for="inputSuccess2">Fixer Uppers</label>
                    <select class="form-control font_inside_option">
                        <option selected>include</option>
                        <option value="" >1687432</option>
                        <option value="" >232r</option>
                        <option value="" >332r32r</option>
                        <option value="" >4r32r</option>
                    </select>
                </div>
            </div>
        </div>
        <!--end inviable portion-->
            
        </div>
        <div class="col-lg-6">
            <div class="page_left">
                <!--start block-->
                <div class="row page_block">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="house_photo">
                            <img src="assets/house photo/download.jpg" class="img-responsive" alt="photo not loaded">
                             <div class="house-address">
                                <h3>House Name</h3>
                                <p>Address: Baridhara DOHS, lan 4 , 3rd floor</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="house_photo">
                            <img src="assets/house photo/download.jpg" class="img-responsive" alt="photo not loaded">
                             <div class="house-address">
                                <h3>House Name</h3>
                                <p>Address: Baridhara DOHS, lan 4 , 3rd floor</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="house_photo">
                            <img src="assets/house photo/download.jpg" class="img-responsive" alt="photo not loaded">
                             <div class="house-address">
                                <h3>House Name</h3>
                                <p>Address: Baridhara DOHS, lan 4 , 3rd floor</p>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!--end block-->
                <div class="row page_block">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="house_photo">
                            <img src="assets/house photo/download.jpg" class="img-responsive" alt="photo not loaded">
                             <div class="house-address">
                                <h3>House Name</h3>
                                <p>Address: Baridhara DOHS, lan 4 , 3rd floor</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="house_photo">
                            <img src="assets/house photo/download.jpg" class="img-responsive" alt="photo not loaded">
                             <div class="house-address">
                                <h3>House Name</h3>
                                <p>Address: Baridhara DOHS, lan 4 , 3rd floor</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="house_photo">
                            <img src="assets/house photo/download.jpg" class="img-responsive" alt="photo not loaded">
                             <div class="house-address">
                                <h3>House Name</h3>
                                <p>Address: Baridhara DOHS, lan 4 , 3rd floor</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!--end block-->

                    <div class="row page_block">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="house_photo">
                            <img src="assets/house photo/download.jpg" class="img-responsive" alt="photo not loaded">
                             <div class="house-address">
                                <h3>House Name</h3>
                                <p>Address: Baridhara DOHS, lan 4 , 3rd floor</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="house_photo">
                            <img src="assets/house photo/download.jpg" class="img-responsive" alt="photo not loaded">
                             <div class="house-address">
                                <h3>House Name</h3>
                                <p>Address: Baridhara DOHS, lan 4 , 3rd floor</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="house_photo">
                            <img src="assets/house photo/download.jpg" class="img-responsive" alt="photo not loaded">
                             <div class="house-address">
                                <h3>House Name</h3>
                                <p>Address: Baridhara DOHS, lan 4 , 3rd floor</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!--end block-->
                
              
                <!--end block-->
                <div class="text-center">
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>

        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>

        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>

        </tr>
         <tr>
          <th scope="row">1</th>
          <td>Mark</td>

        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>

        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>

        </tr>
      </tbody>
    </table>

<!--                <img src="assets/house photo/subway_2400x2889.jpg" class="img-responsive" alt="Responsive image">-->
            </div>
        </div>
    </div>
</div>
<!-- FOOTER -->
<footer id="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col col-md-6 col-xs-6 copy"><p>&copy; 2015 All rights reserved</p></div>
            <div class="col col-md-6 col-xs-6 social-icons">
              <div class="row">
                 <a href=""> <i data-toggle="tooltip" data-placement="top" title="Facebook" class="social-roll fa fa-facebook"></i></a>
                 <a href=""> <i data-toggle="tooltip" data-placement="top" title="Twitter" class="social-roll fa fa-twitter"></i></a>
                 <a href=""> <i data-toggle="tooltip" data-placement="top" title="Google Plus" class="social-roll fa fa-google-plus"></i></a>
                 <a class="silast" href=""> <i data-toggle="tooltip" data-placement="top" title="Linkedin" class="social-roll fa fa-linkedin"></i></a>
              </div>
            </div>
        </div>
   </div>
</footer>
<!-- /. FOOTER -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- CUSTOM JS -->
    <script type="text/javascript" src="js/froom.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script>
    </body>

</html>
