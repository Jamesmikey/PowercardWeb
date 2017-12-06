  <footer>
    <div class="well">
      <div class="container">
        <p>
        <ul class="list-inline text-center">
            <li><a href="#"><i class="fa fa-facebook fa-social"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter fa-social"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram fa-social"></i></a></li>
        </ul>
        </p>      
        <p class="text-center">
          &copy; <?=date('Y') ?> POWERCARD GROUP COMPANY Ltd. All Rights Reserved | Designed &amp; Developed by <a href="https://josephmtinangi.github.io">Joseph Mtinangi</a>
        </p>
        <p>
          <ul class="list-inline text-center text-muted">
            <li><a href="<?=base_url('index.php/about')?>">About</a></li>
            <li><a href="<?=base_url('index.php/contact')?>">Contact</a></li>
            <li><a href="<?=base_url('index.php/#')?>">Terms</a></li>
            <li><a href="<?=base_url('index.php/#')?>">Privacy</a></li>
            <li><a href="<?=base_url('index.php/login')?>">Login</a></li>
          </ul>
        </p>
      </div>
    </div>
  </footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.js"></script>
  <script src="<?=base_url('public/js/app.js')?>"></script>
	<script>
		Dropzone.options.myAwesomeDropzone = {
		  paramName: "file", // The name that will be used to transfer the file
		  maxFilesize: 2, // MB
		  accept: function(file, done) {
		    done();
		  }
		};		
	</script>

  <?php if($this->uri->segment(1) === 'contact'): ?>
    <script>
        function myMap() {
            var mapProp= {
                center:new google.maps.LatLng(-6.1773018,35.7458355),
                zoom: 15,
            };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJnbNy5p1lUKv90bIYAsMr0brK69SvDU0&callback=myMap"></script>
  <?php endif;?>

<?php if($this->uri->segment(1) === 'services'): ?>

  <script src="<?=base_url('public/js/lightbox.min.js')?>"></script>
  <script src="<?=base_url('public/js/jssor.slider-25.2.1.min.js')?>"></script>
  <script>
      jQuery(document).ready(function ($) {

          var jssor_1_options = {
            $AutoPlay: 1,
            $AutoPlaySteps: 4,
            $SlideDuration: 160,
            $SlideWidth: 200,
            $SlideSpacing: 3,
            $Cols: 5,
            $Align: 390,
            $ArrowNavigatorOptions: {
              $Class: $JssorArrowNavigator$,
              $Steps: 5
            },
            $BulletNavigatorOptions: {
              $Class: $JssorBulletNavigator$
            }
          };

          var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

          /*#region responsive code begin*/
          function ScaleSlider() {
              var containerElement = jssor_1_slider.$Elmt.parentNode;
              var containerWidth = containerElement.clientWidth;
              if (containerWidth) {
                  var MAX_WIDTH = 980;

                  var expectedWidth = containerWidth;

                  if (MAX_WIDTH) {
                      expectedWidth = Math.min(MAX_WIDTH, expectedWidth);
                  }

                  jssor_1_slider.$ScaleWidth(expectedWidth);
              }
              else {
                  window.setTimeout(ScaleSlider, 30);
              }
          }

          ScaleSlider();
          $(window).bind("load", ScaleSlider);
          $(window).bind("resize", ScaleSlider);
          $(window).bind("orientationchange", ScaleSlider);
          /*#endregion responsive code end*/
      });    
  </script>

<?php endif;?>
	

</body>
</html>