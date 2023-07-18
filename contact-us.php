 <?php include('header.php'); ?>

 <!-- section service area start -->
   
    <section class="contact-banner px1">
        <div class="container-fluid gap">  
<div class="row contact-content ">
<div class="col-md-6" style="position: relative;">
    <h1>Get in Touch!</h1>

    <p>Learn how HomeAmbit can help you.<br>We'll get back to you within 24 hours</p>

    <div class="circle-contact"></div>
    <div class="side-tri-con">
        <!-- <img src="images/side-tri (1).png" alt=""> -->
    </div>
    <!-- <div class="square-contact"></div> -->
    
    <!-- <div class="square1"></div> -->
    <div class="rectangle-contact"></div>
    <div class="triangle-contact"></div>
    <img src="images/imageedit_0_7963303035.png">
</div>
<div class="col-md-6 mt2">
    <form  id="getintouch">
        <div class="form-group">
            <label for="">Name</label>
            
            <input type="text" name="name" id="name" placeholder="Enter your name" required="">
            <p style="margin-top:5px; text-align: left !important;"><span id="errorname" style="color: #f54646; font-size: 16px; margin-bottom:20px; font-weight: 600;"></span></p>
        </div>

        <div class="form-group">
            <label for="">Email </label>
            
            <input type="text" name="email" id="email" placeholder="Enter your email" required="">
            <p style="margin-top:5px; text-align: left !important;"><span id="erroremail" style="color: #f54646; font-size: 16px; margin-bottom:20px; font-weight: 600;"></span></p>
        </div>

        <div class="form-group">
            <label for="">Phone </label>
           
            <input type="tel" name="phone" id="phone" maxlength="13" id="phone" placeholder="Enter your phone" required="">
            <p style="margin-top:5px; text-align: left !important;"><span id="errormobile" style="color: #f54646; font-size: 16px; margin-bottom:20px; font-weight: 600;"></span></p>

        </div>

        <div class="form-group">
            <label for="">Message </label>
          
            <textarea name="message" id="message" cols="10" rows="5" maxlength="500" placeholder="Enter your message"></textarea>
            <p style=" text-align: left !important;"><span id="errormessage" style="color: #f54646; font-size: 16px; margin-bottom:20px; font-weight: 600;"></span></p>

        </div>

        <div class="form-group">
            <button type="submit" id="contactUsBtn" onsumbit="submit()">Contact Us</button>
            <p style="margin-top:5px; text-align: left !important;"><span id="success" style="color:#f54646; font-weight: bold; font-size: 16px; margin-bottom:20px ;"></span>
            <span id="error" style="color:red; font-size: 16px; margin-bottom:20px ;"></span></p>
        </div>
    </form>
    <div class="get text-end mt2">
      <h1>Get in Touch!</h1>
      <p class="text-end" style="text-align: justify;">We know how to take better care of your assets. <br> We’re a property management company in Bengaluru, Karnataka.<br> Talk to us and we’ll help you right away!!</p>
      <p class="fw-bolder text-end less-f" style="text-align: justify;font-size: 23px;font-family: 'Verdana', sans-serif;"><span class="fw-bolder text-danger">Customer Care : </span> 080-6897-2000 / 80731 42670 /<br> 9986123775 /  6364 839 384</p>
      <p class="fw-bolder text-end" style="text-align: justify;">Largest Service Provider in Bhartiya City, Nikoo Homes & Goyal Orchid Piccadilly</p>
      <p class="text-end" style="text-align: justify;">You can reach is on below as well.</p>
      <p class="d-flex justify-content-end">
        <a class="ms-2" href="https://www.linkedin.com/company/home-ambit/" target="_blank" style="background-color: #f54646; border-radius: 50%;"><i class="fa fa-linkedin ms-2 p-3" aria-hidden="true" style="color:#fff; font-size: 40px;"></i></a>
        <a class="ms-3" href="https://twitter.com/HomeAmbit" target="_blank"style="background-color: #f54646; border-radius: 50%;"><i class="fa fa-twitter ms-2 p-3" aria-hidden="true" style="color:#fff;font-size: 40px;"></i></a>
        <a class="ms-3" href="https://www.youtube.com/channel/UCBDxIHMOnBe2PHuEFpdgGlA" target="_blank" style="background-color: #f54646; border-radius: 50%;"><i class="fa fa-youtube-play ms-2 p-3" aria-hidden="true" style="color:#fff;font-size: 40px;"></i></a>
        <a class="ms-3" href="https://www.instagram.com/home.ambit/" target="_blank" style="background-color: #f54646; border-radius: 50%;"><i class="fa fa-facebook ms-2" aria-hidden="true" style="color:#fff;font-size: 40px;padding: 20px 25px 14px 18px;"></i></a>
    </p>
    </div>
</div>
</div>
</div>

<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-4K6TJXX5LZ&amp;l=dataLayer&amp;cx=c"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script language="javascript">

</script>

</section>

    <!-- section service end -->

<?php include('footer.php'); ?>

 <script type="text/javascript">
function submit(){
const url="https://stag.solidperformers.com/new/leadsapi/add_ticket/7cae868c04762044c85c2916e60e9f64";
var jsonData={"created_at":"Test","precentage":"Test","name":"Test","ticket_status_id":"Test","client_id":"Test",
"support_department_id":"Test","expected_date":"Test","assigned_user_id":"Test","ticket_id":"Test","phone":" Test",
"priority":"Test","email":"Test","description":"Test","service":"Test","contacts":"Test","flat_no":" Test",
"service_status":"Test","service_nature":"Test","payment_status":"Test","fw":"Test"}

const fetchOptions = {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body :JSON.stringify(jsonData)
    };

fetch(url,fetchOptions)
.then((response)=>{
    return response.json();
    console.log(response.json())
})
.then((result)=>{
    var data=JSON.stringify(result)
    document.write(data);
    console.log(data)
})

}
</script>
       <!-- our js data -->
       <script type="text/javascript">
        function modify(){
         document.getElementById("click").style.backgroundColor="red"; 
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