$(document).ready(time);

var today = new Date();
var curHr = today.getHours();

//Print time of day to contact h2
function time() {

  var message = "";
  if (curHr < 12) {
    message = "Good morning";
  } else if (curHr < 18) {
    message = "Good afternoon";
  } else {
    message = "Good evening";
  }
  var header_tag = document.getElementById("time");
  header_tag.innerHTML = message;
}
