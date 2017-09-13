<?php include('header.php') ?>
    
    <main>
      <section class="banner-blk login">
        <div class="container">
          <div id="coriander" class="gain text-center wow  fadeInUp" data-wow-duration="1s">
            <h1>Universidad Técnica Aeroespacial</h1>
          </div>
        </div>
      </section>

      <section class="student-signup dashboard2 add-viedo wow  fadeInUp" data-wow-duration="1s">
        <div class="container">
          <h1 class="sighup-heading">Add Video</h1>
          <form action="" method="">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="mdl-select mdl-js-select mdl-select--floating-label">
                    <input class="mdl-select__input" type="text" name="" placeholder="">
                    <label class="mdl-select__label" for="">Post Date *</label>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                 <!-- <div class="mdl-select mdl-js-select mdl-select--floating-label">
                    <input class="mdl-select__input" type="text" name="" placeholder="">
                    <label class="mdl-select__label" for="">Post Date *</label>
                  </div> -->
                <div class="form-group">
                  <div class="mdl-select mdl-js-select mdl-select--floating-label">
                    <select class="mdl-select__input">
                      <option></option>
                      <option>20-30</option>
                      <option>30-40</option>
                    </select>
                    <label class="mdl-select__label" for="">Age Group *</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="mdl-select mdl-js-select mdl-select--floating-label">
                    <input class="mdl-select__input" type="text" name="" placeholder="">
                    <label class="mdl-select__label" for="">Subject Metter *</label>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="mdl-select mdl-js-select mdl-select--floating-label">
                    <input class="mdl-select__input" type="url" name="" placeholder="">
                    <label class="mdl-select__label" for="">Url *</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="mdl-select mdl-js-select mdl-select--floating-label">
                    <input class="mdl-select__input" type="text" name="" placeholder="">
                    <label class="mdl-select__label" for="">Comment *</label>
                  </div>
                </div>
              </div>
               <div class="col-sm-6">
                <div class="form-group">
                  <div class="mdl-select mdl-js-select mdl-select--floating-label">
                    <input class="mdl-select__input" type="text" name="" placeholder="">
                    <label class="mdl-select__label" for="">Description *</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group captcha-parent type-file">
              <div class="mdl-select mdl-js-select mdl-select--floating-label">
                <input id="add-image" class="form-control" type="file" name="">
                <span id="browse" class="captcha">CHOOSE</span>
                <!-- <a href="#" id="save" class="button">Save</a>
                <a href="#" id="clear" class="button danger">Clear</a> -->
                <input class="mdl-select__input" value=" " type="text" id="testfile" placeholder="">
                <label class="mdl-select__label" for="">Choose File *</label>
            </div>
              </div>
            <div class="login-btns signup-btn">
              <button class="btn btn-default btn-effect" type="submit">UPLOAD</button>
            </div>
          </form>
        </div>
        <div class="lbook">
          <img src="images/book-open.png" alt="">
        </div>
        <div class="drone">
          <img src="images/mouse-style.png" alt="">
        </div>
      </section>

    </main> 

<?php include('footer.php') ?>
