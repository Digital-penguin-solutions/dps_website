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
<!--<nav>
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
</nav>-->

<!--hamburger meneu-->
<div class="nav_out">
  <div class="nav_out_container">
    <a class="nav_out_logo" href="">
      <img class="nav_out_logo_img" src="img/Logo/Logo-dark_no_text.svg" alt="DPS logo">
    </a>

    <ul class="nav_button_container">
      <li>
        <a class="McButton" data="hamburger-menu">
          <b class="McButton_b"></b>
          <b class="McButton_b"></b>
          <b class="McButton_b"></b>
        </a>
      </li>
    </ul>
  </div>
</div>
