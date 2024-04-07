
<section id="book-a-table" class="book-a-table">
    <div class="container " ">

      <div class="section-header">
        <h2>Book A Table</h2>
        <p>Book <span>Your Stay</span> With Us</p>
      </div>

      <div class="row g-0">

        <div class="col-lg-4 reservation-img" style="background-image: url({{asset('img/yummy/reservation.jpg')}});"></div>

        <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
          <form action="" method="post" role="form" class="php-email-form" >
            <div class="row gy-4">
              <div class="col-lg-4 col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone">
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="text" name="date" class="form-control" id="date" placeholder="Date">
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="text" class="form-control" name="time" id="time" placeholder="Time">
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="number" class="form-control" name="people" id="people" placeholder="# of people">
              </div>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            </div>
            <div class="text-center"><button type="submit">Book a Table</button></div>
          </form>
        </div><!-- End Reservation Form -->

      </div>

    </div>
  </section>
