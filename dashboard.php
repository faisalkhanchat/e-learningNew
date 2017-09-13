<?php include('header.php') ?>
 
    <main>
      <section class="banner-blk login">
        <div class="container">
          <div id="coriander" class="gain text-center wow  fadeInUp" data-wow-duration="1s">
            <h1>Universidad Técnica Aeroespacial</h1>
          </div>
        </div>
      </section>

      <section class="login-blk dashboard">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <div class="lbooks">
                <img src="images/cap.png" alt="">
              </div>
              <div class="for-student-login  wow  fadeInUp" data-wow-duration="1s">
                <div class="login-img">
                  <img src="images/edit-profile.png" alt="">
                </div>
                <h3>EDIT PROFILE</h3>
                <div class="login-btns">
                  <a href="#dashboard-form" class="btn btn-default btn-effect">ADD </a>
                  <a href="#dashboard-form" class="btn btn-primary btn-effect">EDIT </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="for-student-login last  wow  fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                <div class="login-img">
                  <img src="images/add-video.png" alt="">
                </div>
                <h3>ADD VIDEO</h3>
                <div class="login-btns">
                  <a href="#dashboard-form" class="btn btn-default btn-effect">ADD </a>
                  <a href="#dashboard-form" class="btn btn-primary btn-effect">EDIT </a>
                </div>
              </div>
              <div class="lpens">
                <img src="images/pens.png" alt="">
              </div>
            </div>
          </div>
          <div class="row dash-bott-row">
            <div class="col-sm-6">
              <div class="for-student-login  wow  fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="login-img">
                  <img src="images/add-lectures.png" alt="">
                </div>
                <h3>LECTURES</h3>
                <div class="login-btns">
                  <a href="#dashboard-form" class="btn btn-default btn-effect">ADD </a>
                  <a href="#dashboard-form" class="btn btn-primary btn-effect">EDIT </a>
                </div>
              </div>

            </div>
            <div class="col-sm-6 wow  fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
              <div class="for-student-login last">
                <div class="login-img">
                  <img src="images/add-books.png" alt="">
                </div>
                <h3>BOOKS</h3>
                <div class="login-btns">
                  <a href="#dashboard-form" class="btn btn-default btn-effect">ADD </a>
                  <a href="#dashboard-form" class="btn btn-primary btn-effect">EDIT </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="dashboard-form" class="student-signup dashboard-bott  wow  fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
          <div class="container">
            <form action="" method="">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" type="text" name="" placeholder="First Name *" required="">
                  </div>
                </div>
                 <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" type="text" name="" placeholder="Last Name *" required="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" type="password" name="" placeholder="Password *" required="">
                  </div>
                </div>
                 <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" type="password" name="" placeholder="Conform Password *" required="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" type="email" name="" placeholder="Email *" required="">
                  </div>
                </div>
                 <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" type="text" name="" placeholder="Phone No. *" required="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" type="text" name="" placeholder="D. O.  B. *" required="">
                  </div>
                </div>
                 <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" type="text" name="" placeholder="Lorem Ipsum *" required="">
                  </div>
                </div>
              </div>
              <div class="login-btns signup-btn">
                <button class="btn btn-default btn-effect" type="submit">SUBMIT</button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </main> 

<?php include('footer.php') ?>
