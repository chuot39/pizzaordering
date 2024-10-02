<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Dosis:wght@500&display=swap" rel="stylesheet">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<style>
  @import url(//db.onlinewebfonts.com/c/3e8c66479e166f48e44525609aebd682?family=Graviola+Soft+W01);
  .contact {
    display: flex;
    width: 100%;
    height: 800px; 
    justify-content: center;
    align-items: center;
    padding-top: 40px;
  }
  .contact-wrapper {
    display: flex;
    flex-direction: column;
    width: 75rem;
    height: 70%;
    /* background-color: green; */
  }
  .contact-info {
    display: flex;
    flex: 7 0 0px; 
    /* background-color: red; */
  }
  .contact-info-above {
    color: rgb(202,0,0);
    font-size: 28px;
    font-family: 'Dancing Script', cursive;
  }
  .contact-info-below {
    font-size: 40px;
    font-family: 'Graviola Soft W01';
  }
  .contact-info-intro {
    color: gray;
  }
  .contact-info-address {
    display: flex;
    /* background-color: pink; */
    align-items: center;
  }
  .contact-info-open {
    display: flex;
    /* background-color: pink; */
    align-items: center;
  }
  .contact-info-address-txt {
    color: gray;
    margin-left: 10px;
  }
  .contact-info-open-txt {
    color: gray;
    margin-left: 10px;
  }
  .contact-info-phone {
    display: flex;
    /* background-color: pink; */
    align-items: center;
  }
  .contact-info-phone-txt {
    color: gray;
    margin-left: 10px;
  } 
  .contact-info-left {
    display: flex;
    flex: 1 0 0px; 
    /* background-color: pink; */
    justify-content: space-around;
  }
  .contact-info-left img {
    width: 45%;
    height: 90%;
  }
  .contact-info-right {
    display: flex;
    flex-direction: column;
    flex: 1 0 0px;
    /* background-color: orange; */
    justify-content: space-between;
    padding-top: 5px;
    padding-left: 80px;
    padding-bottom: 5%;
  }
  .contact-options {
    display: flex;
    flex: 2 0 0px;
  }
  .contact-option {
    display: flex;
    flex: 1 0 0px;
    justify-content: space-around;
    align-items: flex-end;
    padding: 0px 50px 0px 50px; 
  }
  .contact-option img {
    width: 50px;
    height: 50px;
  }
  .contact-option p {
    font-family: 'Graviola Soft W01';
    font-size: 22px;
    color: #5F5E5E;
    margin-bottom: 10px;
  }
</style>
<section class="contact">
  <div class="contact-wrapper">
    <div class="contact-info">
      <div class="contact-info-left">
        <img src="http://pizzahouse.themerex.net/wp-content/uploads/2016/08/image_1.jpg">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.65718568529!2d105.78272751485471!3d21.046398585988875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abb158a2305d%3A0x5c357d21c785ea3d!2sElectric%20Power%20University!5e0!3m2!1sen!2s!4v1640009218460!5m2!1sen!2s" style="border:0; width: 45%; height: 90%;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="contact-info-right">
        <h1 class="contact-info-above">get in touch</h1>
        <h1 class="contact-info-below">Thông tin liên hệ</h1>
        <p class="contact-info-intro">With great prices, excellent service, and some of the best food you’ll<br>ever have…Pizza House is “Just the Best There is!”</p>
        <div class="contact-info-address">
          <ion-icon name="location-outline" style="color: red; font-size: 22px;"></ion-icon>
          <p class="contact-info-address-txt">2277 Lorem Ave., San Diego, CA 22553</p>
        </div>
        <div class="contact-info-open">
          <ion-icon name="time-outline" style="color: red; font-size: 22px;"></ion-icon>
          <p class="contact-info-open-txt">Monday – Friday: 10 am – 10pm Sunday: 11 am – 9pm</p>
        </div>
        <div class="contact-info-phone">
          <ion-icon name="call-outline" style="color: red; font-size: 22px;"></ion-icon>
          <p class="contact-info-phone-txt">123-456-7890</p>
        </div>
      </div>
    </div>
    <div class="contact-options">
      <div class="contact-option">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Facebook_icon.svg/2048px-Facebook_icon.svg.png">
        <p>Follow us on Facebook</p>
      </div>
      <div class="contact-option">
        <img src="https://inkythuatso.com/uploads/thumbnails/800/2021/11/logo-twitter-inkythuatso-2-01-27-10-22-11.jpg">
        <p>Follow us on Twitter</p>
      </div>
      <div class="contact-option">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png">
        <p>Follow us on Instagram</p>
      </div>
    </div>  
  </div>
</section>