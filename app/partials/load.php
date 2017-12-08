<head>
    <!--hide loader when page is done loading-->
    <script>
        window.addEventListener("load", function(){
            var load_screen = document.getElementById("load_screen");
            document.body.removeChild(load_screen);
        });
    </script>
</head>

<!--loading screen-->
<div id="load_screen" class="load_screen">
    <div class="loding">
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
        <div class="base">
            <span></span>
            <div class="face"></div>
        </div>
    </div>
    <div class="longfazers">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <h1 class="loading-h1">Loading...</h1>
</div>