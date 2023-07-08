<?php include('header.php'); ?>

  <!-- section service area start -->
    <div class="container-fluid sider pb-5 mt-0" style="background-color: #212529;">
        <div id="content py-5">
            <div id="horz-list">
              <ul class="py-5" style="font-family: 'Century Gothic', sans-serif;">
                <li><a href="All.php">All</a></li>
                <li><a href="gallery.php">KITCHEN</a></li>
                <li><a href="tv-unit.php">TV UNIT</a></li>
                <li><a href="false-celling.php">False Ceiling</a></li>
                <li><a href="wordrop.php">Wardrobes</a></li>
                <li><a href="shoe.php">Shoe Rack</a></li>
                <li><a href="study.php">Study Unit</a></li>
                <li><a href="dress.php">Dresser Unit</a></li>
                <li><a href="vanity.php" class="kitchen">Vanity Units</a></li>
                <li><a href="excuted.php">Executed Project</a></li>
              </ul>
            </div>
          </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="card gallery-card my-3" style="height:300px;">
                <div class="card-img">
                    <a href="#"><img id="myImg" src="images/v1.jpg" style="width:100%; height:250px;"></a>
                </div>
                <div class="card-body">
                <h5 class="card-title gallery-title1">header-area</h5>
                <h6 class="card-text2">Some text here...</h6>
                </div>
            </div>
            <div id="myModal" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="img01">
              <div id="caption"></div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="card gallery-card my-3" style="height:300px;">
                <div class="card-img">
                    <a href="#"><img id="myImg1" src="images/v3.png" style="width:100%; height:250px;"></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title gallery-title1">header-area</h5>
                    <h6 class="card-text2">Some text here...</h6>
                </div>
            </div>
            <div id="myModal" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="img01">
              <div id="caption"></div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="card gallery-card my-3" style="height:300px;">
                <div class="card-img">
                    <a href="#"><img id="myImg2" src="images/v2.jpg" style="width:100%; height:250px;"></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title gallery-title1">header-area</h5>
                    <h6 class="card-text2">Some text here...</h6>
                </div>
            </div>
            <div id="myModal" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="img01">
              <div id="caption"></div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <div class="card gallery-card my-3" style="height:300px;">
                <div class="card-img">
                    <a href="#"><img  id="myImg3" src="images/v4.png" style="width:100%; height:250px;"></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title gallery-title1">header-area</h5>
                    <h6 class="card-text2">Some text here...</h6>
                </div>
            </div>
            <div id="myModal" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="img01">
              <div id="caption"></div>
            </div>
        </div>
    </div>
    </div>
    <!-- section service end -->


<?php include('footer.php'); ?>

   <!-- our js data -->
       <script type="text/javascript">
        function modify(){
         document.getElementById("click").style.backgroundColor="red"; 
        }
       </script>
      <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var img1 = document.getElementById("myImg1");
        var img2 = document.getElementById("myImg2");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        img1.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
          }
          img2.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
          }
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
          modal.style.display = "none";
        }
        </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    AOS.init({
        offset: 200,
        duration: 1000,
    });
  </script>
  <script type="text/javascript">
    $('.slider').slick({
  dots: true,
  infinite:true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  </script>   