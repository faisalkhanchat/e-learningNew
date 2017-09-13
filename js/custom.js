$(document).ready(function(){

new WOW().init();

var myNavBar = {

    flagAdd: true,

    elements: [],

    init: function (elements) {
        this.elements = elements;
    },

    add : function() {
        if(this.flagAdd) {
            for(var i=0; i < this.elements.length; i++) {
                document.getElementById(this.elements[i]).className += " fixed-theme";
            }
            this.flagAdd = false;
        }
    },

    remove: function() {
        for(var i=0; i < this.elements.length; i++) {
            document.getElementById(this.elements[i]).className =
                    document.getElementById(this.elements[i]).className.replace( /(?:^|\s)fixed-theme(?!\S)/g , '' );
        }
        this.flagAdd = true;
    }

};

/**
 * Init the object. Pass the object the array of elements
 * that we want to change when the scroll goes down
 */
myNavBar.init(  [
    "header",
    "header-container",
    "brand"
]);

/**
 * Function that manage the direction
 * of the scroll
 */
function offSetManager(){

    var yOffset = 0;
    var currYOffSet = window.pageYOffset;

    if(yOffset < currYOffSet) {
        myNavBar.add();
    }
    else if(currYOffSet == yOffset){
        myNavBar.remove();
    }

}

/**
 * bind to the document scroll detection
 */
window.onscroll = function(e) {
    offSetManager();
}

/**
 * We have to do a first detectation of offset because the page
 * could be load with scroll down set.
 */
offSetManager();
});

$(function(){
  
  var $container = $('#filter-container'),
      $filterLinks = $('#filters a');
  
  $container.isotope({
    itemSelector: '.iso-item',
    filter: '*'
  });
  
  $filterLinks.click(function(){
    var $this = $(this);
    
    // don't proceed if already selected
    if ( $this.hasClass('selected') ) {
      return;
    }
    
    $filterLinks.filter('.selected').removeClass('selected');
    $this.addClass('selected');
    
    // get selector from data-filter attribute
    selector = $this.data('filter');
    
    $container.isotope({
      filter: selector
    });
    
    
  });
  
});


// here I am 
     $(function() {

      $('.feature-slider .owl-carousel').owlCarousel({
          loop: true,
          margin: 10,
          items: 5,
          pagination: false,
          responsiveClass: true,
          responsive: {
            0: {
              items: 1,
              nav: true
            },
            600: {
              items: 3,
              nav: true
            },
            1000: {
              items: 3,
              nav: true,
              loop: true,
              margin: 20
            }
          }
        })
      });
      $( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
      $( ".owl-next").html('<i class="fa fa-chevron-right"></i>');

      $('.relted_books,.owl_contributer').owlCarousel({
          loop: true,
          margin: 10,
          pagination: false,
          items: 4,
              nav: true
          
        });
      $('.course_video').owlCarousel({
          loop: true,
          margin: 10,
          pagination: false,
          items: 3,
              nav: true
          
        });

      
      $( ".relted_books .owl-prev,.owl_contributer .owl-prev,.course_video .owl-prev").html('<i class="fa fa-angle-left"></i>');
      $( ".relted_books .owl-next,.owl_contributer .owl-next,.course_video .owl-prev").html('<i class="fa fa-angle-right"></i>');


      (function($){
           $('[data-toggle="tooltip"]').tooltip(); 

        $(window).on("load",function(){
          $("#content-1").mCustomScrollbar({
            axis:"x",
            theme:"dark-3",
            advanced:{
              autoExpandHorizontalScroll:true //optional (remove or set to false for non-dynamic/static elements)
            }
          });
        });
      })(jQuery);

          $(".review_blk").mCustomScrollbar({
            autoHideScrollbar: true,
              theme:"dark"
          });




      (function($){
        $(window).on("load",function(){
          $("#content-2").mCustomScrollbar({
            axis:"x",
            theme:"dark-3",
            advanced:{
              autoExpandHorizontalScroll:true //optional (remove or set to false for non-dynamic/static elements)
            }
          });
        });
      })(jQuery);


      // if scroll position is not zero, add a class to header

      $(function() {
          var header = $(".why-choose");
          $(window).scroll(function() {    
              var scroll = $(window).scrollTop();
          
              if (scroll >= 400) {
                  header.addClass('wscrolled');
              } else {
                  header.removeClass('wscrolled');
              }
          });
      });

      $(function() {
          var bebefits = $(".for-student-inner");
          $(window).scroll(function() {    
              var scroll = $(window).scrollTop();
          
              if (scroll >= 2600) {
                  bebefits.addClass('benefits');
              } else {
                  bebefits.removeClass('benefits');
              }
          });
      });

      // $(function() {
      //     var bebefits = $(".feature-courses");
      //     $(window).scroll(function() {    
      //         var scroll = $(window).scrollTop();
          
      //         if (scroll >= 3600) {
      //             bebefits.addClass('fea-scroll');
      //         } else {
      //             bebefits.removeClass('fea-scroll');
      //         }
      //     });
      // });


      $(document).ready(function(){
      function animateDivers() {
        $(".gif-img").animate({left: '1000px'},5000).animate({top: '880px'},5000) .animate({left: '-130px'},5000).animate({top: '-100px'},5000, animateDivers);
        }
        animateDivers();
      });
$(document).on('click', '.cource_name a', function(event){
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $( $('.video_section')).offset().top - 100
    }, 500);
});
$(document).on('click', '.rating_value a', function(event){
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $( $('.product_review')).offset().top - 100
    }, 500);
});

      $("#browse").click(function () {
            $("#add-image").click();
        })
/*
$('.be_review a').click(function(){
    $('.review_form').slideToggle();
});
*/

$('.video_with').click(function(){
    
});
    $(".search-form button").hover(function (e) {
        e.preventDefault();
            $('.search-form input').slideToggle();
        $('.search-form input').focus();
        })

        // $("#save").click(function () {
        //     alert('Run a save function');
        // })
        // $("#clear").click(function () {
        //      $('#testfile').val('');
        // })

        $('#add-image').change(function () {
            $('#testfile').val($(this).val());
        })

        $("#browse1").click(function () {
            $("#add-image1").click();
        })
        $('#add-image1').change(function () {
            $('#testfile1').val($(this).val());
        })



        /**
       * Created with JetBrains WebStorm.
       * User: pwanwu
       * Date: 18/09/2013
       * Time: 17:41
       * To change this template use File | Settings | File Templates.
       */

      var questions = [{
          question: "What is the population of Brazil?",
          choices: ["145 million", "199 million", "182 million", "205 million"],
          correctAnswer: 1
      }, {
          question: "What is 27*14?",
          choices: ["485", "634", "408", "528"],
          correctAnswer: 2
      }, {
          question: "What is the busiest train station in the world?",
          choices: ["Grand Central, NY", "Shibuya, Tokyo", "Beijing Central, Chine", "Gard du Nord, Paris"],
          correctAnswer: 1
      }, {
          question: "What is the longest river?",
          choices: ["Nile", "Amazon", "Mississippi", "Yangtze"],
          correctAnswer: 0
      }, {
          question: "What is the busiest tube station in the London?",
          choices: ["Waterloo", "Baker Street", "Kings Cross", "Victoria"],
          correctAnswer: 0
      }];

      var currentQuestion = 0;
      var correctAnswers = 0;
      var quizOver = false;

      $(document).ready(function () {

          // Display the first question
          displayCurrentQuestion();
          $(this).find(".quizMessage").hide();

          // On clicking next, display the next question
          $(this).find(".nextButton").on("click", function () {
              if (!quizOver) {

                  value = $("input[type='radio']:checked").val();

                  if (value == undefined) {
                      $(document).find(".quizMessage").text("Please select an answer");
                      $(document).find(".quizMessage").show();
                  } else {
                      // TODO: Remove any message -> not sure if this is efficient to call this each time....
                      $(document).find(".quizMessage").hide();

                      if (value == questions[currentQuestion].correctAnswer) {
                          correctAnswers++;
                      }

                      currentQuestion++; // Since we have already displayed the first question on DOM ready
                      if (currentQuestion < questions.length) {
                          displayCurrentQuestion();
                      } else {
                          displayScore();
                          //                    $(document).find(".nextButton").toggle();
                          //                    $(document).find(".playAgainButton").toggle();
                          // Change the text in the next button to ask if user wants to play again
                          $(document).find(".nextButton").text("Play Again?");
                          quizOver = true;
                      }
                  }
              } else { // quiz is over and clicked the next button (which now displays 'Play Again?'
                  quizOver = false;
                  $(document).find(".nextButton").text("Next");
                  resetQuiz();
                  displayCurrentQuestion();
                  hideScore();
              }
          });

      });

      // This displays the current question AND the choices
      function displayCurrentQuestion() {

          console.log("In display current Question");

          var question = questions[currentQuestion].question;
          var questionClass = $(document).find(".quizContainer > .question");
          var choiceList = $(document).find(".quizContainer > .choiceList");
          var numChoices = questions[currentQuestion].choices.length;

          // Set the questionClass text to the current question
          $(questionClass).text(question);

          // Remove all current <li> elements (if any)
          $(choiceList).find("li").remove();

          var choice;
          for (i = 0; i < numChoices; i++) {
              choice = questions[currentQuestion].choices[i];
              $('<li><label><input type="radio" value=' + i + ' name="dynradio" />' + choice + '</label>' + '</li>').appendTo(choiceList);
          }
      }

      function resetQuiz() {
          currentQuestion = 0;
          correctAnswers = 0;
          hideScore();
      }

      function displayScore() {
          $(document).find(".quizContainer > .result").text("You scored: " + correctAnswers + " out of: " + questions.length);
          $(document).find(".quizContainer > .result").show();
      }

      function hideScore() {
          $(document).find(".result").hide();
      }





/*      (function($){
        $(window).on("load",function(){
          $("#content-1").mCustomScrollbar({
            axis:"x",
            theme:"dark-3",
            advanced:{
              autoExpandHorizontalScroll:true //optional (remove or set to false for non-dynamic/static elements)
            }
          });
        });
      })(jQuery);*/


      $(function(){
        $('.btn-effect').click(function(){
          $('#dashboard-form').slideDown(2000);
        })
      })

      $(document).on('click', '.login-btns .btn', function(event){
       /* event.preventDefault();
*/
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top -100
        }, 500);
      });

$('.video-icon a').click(function(){ //alert('')
    var myVideo = document.getElementById("video2");
    if (myVideo.paused) {
      myVideo.play();$(this).css("opacity","0");
    } else {
      myVideo.pause();$(this).css("opacity","1");
   }
});