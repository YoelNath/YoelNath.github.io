<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Text Animation</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .typewriter-container {
      display: inline-block;
      overflow: hidden;
      border-right: .15em solid rgb(247, 0, 0);
      white-space: nowrap;
      margin: 0 auto;
      letter-spacing: .15em;
      animation: blink-caret .75s step-end infinite;
    }
    .typewriter-text {
      display: inline;
    }
    @keyframes blink-caret {
      from, to { border-color: transparent }
      50% { border-color: rgb(255, 166, 0) }
    }
  </style>
</head>
<body>
  <div class="container text-center mt-5">
    <div class="typewriter-container">
      <h1 class="typewriter-text"></h1>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
  $(document).ready(function() {
    const texts = [
      'Welcome to our website!',
      'Discover amazing products.',
      'Stay updated with our latest offers.',
      'Join our community today!'
    ];
    let currentTextIndex = 0;
    let currentText = '';
    let isDeleting = false;
    const period = 2000; // Change text every 2 seconds
    const typingSpeed = 100; // Typing delay of 100ms
    const delayAfterSentence = 500; // Delay after each sentence (0.5 second)

    function type() {
      const fullText = texts[currentTextIndex];
      if (isDeleting) {
        // Reshuffle logic
        let shuffledText = currentText.split('').sort(() => Math.random() - 0.5).join('');
        currentText = shuffledText.substring(0, currentText.length - 1);
        $('.typewriter-text').text(currentText);
        if (currentText === '') {
          isDeleting = false;
          currentTextIndex = (currentTextIndex + 1) % texts.length; // Change to next sentence
          setTimeout(type, delayAfterSentence); // Pause after sentence
        } else {
          setTimeout(type, typingSpeed);
        }
      } else {
        currentText = fullText.substring(0, currentText.length + 1);
        $('.typewriter-text').text(currentText);
        if (currentText === fullText) {
          isDeleting = true;
          setTimeout(type, typingSpeed); // Pause before deletion
        } else {
          setTimeout(type, typingSpeed);
        }
      }
    }

    type(); // Call type initially
  });
  </script>
</body>
</html>
