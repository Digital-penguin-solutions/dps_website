window.onload = function () {
    function parallax() {
        img = document.getElementById('parallax_img');
        ypos = window.pageYOffset;
        img.style.top = ypos * 0.3 + 'px';
    }

    var ypos,img;
    window.addEventListener('scroll', parallax);
};