$(document).ready(function() {

  $('.slider').slick({

    infinite: true,
    // autoplay: true,
    // autoplaySpeed: 2000,
   
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
    slidesToShow: 2.5,
    slidesToScroll: 2,
    speed:500,
    arrows : false,
    reverse: true,
    initialSlide: 5,
    responsive: [
  
      {
       breakpoint: 991,
       settings: {
         slidesToShow: 1,
         slidesToScroll: 1,
         autoplay: true,
         arrows: false, 
       }
      },
     {
       breakpoint: 700,
       settings: {
         slidesToShow: 1,
         slidesToScroll: 1,
         autoplay: true,
         arrows: false, 
       }
     },
     {
       breakpoint: 480,
       settings: {
         slidesToShow: 1,
         slidesToScroll: 1,
         autoplay: true,
         arrows: false, 

       }
     }

   ]
 
  });
 
  $('.navbar-togglers').click(function () {
    $('.sidebar').toggleClass('active');
    $('.navbar-togglers').toggleClass("fa-times");
    $('.navbar-togglers').toggleClass("rotate-animation"); 
        $('.top-home').toggleClass('sidebar-opens');
    $('body').toggleClass('sidebar-open');
  });

  $('.fa-times').click(function () {
    $('.sidebar').removeClass('active');
;$('.navbar-togglers').toggleClass("fa-bars");
    $('.navbar-togglers').toggleClass("rotate-back"); 
    $('.top-home').toggleClass('sidebar-opens');
    $('body').toggleClass('sidebar-open');
  }); 

  $('#fullpage').fullpage({
    navigation: true, 
    sectionSelector: '.scroll' ,
    scrollingSpeed: 1000, 
    scrollOverflow: true,
    normalScrollElements: '.sidebar',
    });

    $(document).ready(function() {
      var words = ['stuff', 'content', 'things'];
      var currentWordIndex = 0;
      var changingWordSpan = $('#changingWord');
      var cursorSpan = $('#cursor');
      var isDeleting = false;
      var currentText = '';
      var typingSpeed = 300;
      var pauseAfterTyping = 800;
      var pauseAfterWord = 2000;
  
      function typeWriter() {
          if (isDeleting) {
              currentText = currentText.slice(0, -1);
          } else {
              currentText = '|' + words[currentWordIndex].slice(0, currentText.length + 1);
          }
  
          changingWordSpan.text(currentText.slice(1));
          cursorSpan.text(currentText.slice(0, 1));
  
          var typingTimeout = isDeleting ? typingSpeed / 2 : typingSpeed;
  
          if (!isDeleting && currentText === '|' + words[currentWordIndex]) {
              isDeleting = true;
              setTimeout(typeWriter, pauseAfterWord);
          } else if (isDeleting && currentText === '|') {
              isDeleting = false;
              currentWordIndex = (currentWordIndex + 1) % words.length;
              setTimeout(typeWriter, pauseAfterTyping);
          } else {
              setTimeout(typeWriter, typingTimeout);
          }
      }
  
      typeWriter();
  });
});

document.addEventListener('DOMContentLoaded', function() {
  const sections = document.querySelectorAll('.animated-content');

  const options = {
      threshold: 0.5 
  };

  const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              entry.target.classList.add('visible');
              observer.unobserve(entry.target);
          }
      });
  }, options);

  sections.forEach(section => {
      observer.observe(section);
  });



});




