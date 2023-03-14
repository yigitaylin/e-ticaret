<div class="slider">
    <div class="row">
      <div class="columns large-12">
        <div class="row flexslider-row">
          <div class="columns large-12">
            <div class="flexslider">
              <ul class="slides">
                <li> <img src="<?=base_url()?>assets/images/slider1.jpg" alt=""> </li>
                <li> <img src="<?=base_url()?>assets/images/slider.jpg" alt=""> </li>
                <li> <img src="<?=base_url()?>assets/images/slider2.jpg" alt=""> </li>
                <li> <img src="<?=base_url()?>assets/images/slider3.jpg" alt=""> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/js/hoverIntent.js"></script>
<script src="<?=base_url()?>assets/js/superfish.js"></script>
<script src="<?=base_url()?>assets/js/slider/jquery.flexslider.js"></script>
<script>
Modernizr.load({
    test: Modernizr.placeholder,
    nope: 'js/placeholder.min.js'
});
function goToNewPage() {
    if (document.getElementById('target').value) {
        window.location.href = document.getElementById('target').value;
    }
}
</script>
<script>
$(document).ready(function () {
    $('ul.sf-menu').superfish({
        animation: {
            height: 'show'
        },
        delay: 400
    });
    $("img.scrollToTop").click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    });
    $('.flexslider').flexslider();
    $('.flexcar').flexslider();
});
</script>
</body>
</html>