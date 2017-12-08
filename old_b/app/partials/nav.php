<<<<<<< HEAD
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">

        <!-- Logo -->
        <div class="navbar-header">
            <a class="navbar-brand" href=index#Home>
                <img alt="Brand" src="img/logo/Logo-dark.svg">
            </a>
        </div>

        <!-- right side of nav-->
        <div class="navbar-right">
            <p class="navbar-text">MENU</p>
        </div>

    </div>
</nav>

<!--hamburger menu-->
<ul class = "nav_button_container">
    <li>
        <a class = "McButton" data = "hamburger-menu">
            <b></b>
            <b></b>
            <b></b>
        </a>
    </li>
</ul>





<!--when nav is open this is displayes--
<div class="nav container_fluid">
    <div class="row_fluid nav">
        <div class="col-xs-12 nav">
            <div class="nav_container">

                <!--logo nav--
                <div class="nav_logo col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-2">
                    <a href="index">
                        <img src="img/logo/Logo-grey.svg" alt="ison logo">
                    </a>
                </div>

                <!--social media and language icons--
                <?php
                include "langshare.php";
                ?>

                <!--nav lik--
                <div class="nav_ul col-xs-8 col-xs-offset-2">
                    <ul>
                        <li><a href="index#">Home</a></li>
                        <li><a href="index#">Latest work</a></li>
                        <li><a href="index#">About us</a></li>
                        <li><a href="index#">Services</a></li>
                        <li><a href="contact">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
-->
=======
<script>
  //this makes the current link containing li of class "active"
  $(document).ready(function ($) {
    var url = window.location.href;
    var activePage = url;
    $('.menu-item a').each(function () {
      var linkPage = this.href;

      if (activePage == linkPage) {
        $(this).closest("li").addClass("active");
      }
    });
  });
</script>


<!-- NAV -->
<nav>
  <div class="nav_container">
    <div class="nav_text_container">
      <ul>
        <li class="menu-item"><a href="index">Home</a></li>
        <li class="menu-item"><a href="work">work</a></li>
        <li class="menu-item"><a href="about">About</a></li>
        <li class="menu-item"><a href="services">Services</a></li>
        <li class="menu-item"><a href="contact">Contact</a></li>
      </ul>
      <p>&copy; 2017 Digital penguin solutions All rights reserved | <a href="#">Terms</a> | <a href="#">Privacy</a></p>
    </div>
  </div>
</nav>

<!--hamburger meneu-->
<ul class = "nav_button_container">
  <li>
    <a class = "McButton" data = "hamburger-menu">
      <b></b>
      <b></b>
      <b></b>
    </a>
  </li>
</ul>
>>>>>>> old_b/master
