<?php include('header.php') ?>

    <main>
      <section class="banner-blk login">
        <div class="container">
          <div id="coriander" class="gain text-center wow  fadeInUp" data-wow-duration="1s">
           <h1>Universidad Técnica Aeroespacial</h1>
          </div>
        </div>
      </section>

      <section class="student-signup dashboard2 wow  fadeInUp" data-wow-duration="1s">
        <div class="container">
          <h1 class="sighup-heading">Add Book and Quiz</h1>
          <form action="" method="">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="mdl-select mdl-js-select mdl-select--floating-label">
                    <input class="mdl-select__input" type="text" name="" placeholder="">
                    <label class="mdl-select__label" for="">Book Name *</label>
                  </div>
                </div>
              </div>
               <div class="col-sm-6">
                <div class="form-group">
                  <div class="mdl-select mdl-js-select mdl-select--floating-label">
                    <input class="mdl-select__input" type="text" name="" placeholder="">
                    <label class="mdl-select__label" for="">ISBN No *</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="mdl-select mdl-js-select mdl-select--floating-label">
                  <input class="mdl-select__input" type="text" name="" placeholder="">
                  <label class="mdl-select__label" for="">Title *</label>
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
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group captcha-parent type-file">
                  <div class="mdl-select mdl-js-select mdl-select--floating-label">
                  <input id="add-image" class="form-control" type="file" name="">
                  <span id="browse" class="captcha">CHOOSE</span>
                  <!-- <a href="#" id="save" class="button">Save</a>
                  <a href="#" id="clear" class="button danger">Clear</a> -->
                  <input class="mdl-select__input" type="text" id="testfile" placeholder="" value=" ">
                  <label class="mdl-select__label" for="">Add Images *</label>
                </div>
                </div>
              </div>
               <div class="col-sm-6">
                  <div class="form-group captcha-parent type-file">
                    <div class="mdl-select mdl-js-select mdl-select--floating-label">
                      <input id="add-image1" class="form-control" type="file" name="">
                      <span id="browse1" class="captcha">CHOOSE</span>
                      <!-- <a href="#" id="save" class="button">Save</a>
                      <a href="#" id="clear" class="button danger">Clear</a> -->
                      <input class="mdl-select__input" type="text" id="testfile1" placeholder="" value=" ">
                      <label class="mdl-select__label" for="">Add Pdf *</label>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="mdl-select mdl-js-select mdl-select--floating-label">
                  <input class="mdl-select__input" type="text" name="" placeholder="">
                  <label class="mdl-select__label" for="">Price *</label>
                </div>
                </div>
              </div>
               <div class="col-sm-6">
                <div class="form-group">
                  <div class="mdl-select mdl-js-select mdl-select--floating-label">
                  <input class="mdl-select__input" type="text" name="" placeholder="">
                  <label class="mdl-select__label" for="">quantity *</label>
                </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="mdl-select mdl-js-select mdl-select--floating-label">
                  <input class="mdl-select__input" type="text" name="" placeholder="">
                  <label class="mdl-select__label" for="">Subject *</label>
                </div>
                </div>
              </div>
               <div class="col-sm-6">
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
            <div class="login-btns signup-btn">
              <button class="btn btn-default btn-effect" type="submit">SUBMIT</button>
            </div>
          </form>
        </div>
      </section>

      <section class="student-signup dashboard2 quiz wow  fadeInUp" data-wow-duration="1s">
        <div class="container">
          <h1 class="sighup-heading">Add Book and Quiz</h1>
          <div class="questions">
            
            <!-- <h4>1 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus ante eu gravida fringilla. in pulvinar diam, nec sodales est.</h4> -->
            <div class="quizContainer">
                <h3>Question -:</h3>

                <div class="question"></div>
                <ul class="choiceList"></ul>
                <div class="quizMessage"></div>
                <div class="result"></div>
                <div class="nextButton">Next <i class="fa fa-angle-right" aria-hidden="true"></i></div>
                <br>
            </div>
          </div>
        </div>
        <div class="lbook">
          <img src="images/book-open.png" alt="">
        </div>
        <div class="drone">
          <img src="images/animate-gif.png" alt="">
        </div>
      </section>
    
    </main> 
<?php include('footer.php') ?>
