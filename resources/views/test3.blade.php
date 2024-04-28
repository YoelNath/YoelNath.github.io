<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Text Animation</title>
  <style>
    .typewriter-container {
 
    }
    .typewriter-text {
      display: inline;

      overflow: hidden;
      border-right: .15em solid orange;
      white-space: nowrap;

      letter-spacing: .15em;
      animation: blink-caret .75s step-end infinite;
    }
    @keyframes blink-caret {
      from, to { border-color: transparent }
      50% { border-color: orange }
    }
  </style>
</head>
<body>
  <div class="container text-center mt-5">

  </div>
  <div class="container">
    <div class="row">
        <div class="col-md-6">
          <h1>     <span> <h1 class="typewriter-text"></h1></span>
          guys
 
           
          </h1>

            <p>A creative studio built by creators</p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/game-studio.jpg') }}" alt="Game Studio" class="img-fluid">
        </div>
    </div>
  <script>
    const texts = [
      'Hello',
      'Hola',
      'Bonjour',
      'Hallo',
      'Ciao',
    ];
    let currentTextIndex = 0;
    let currentText = '';
    let isDeleting = false;
    const period = 2000; // Change text every 2 seconds (unused in this example)
    const typingSpeed = 300; // Typing delay of 500ms (adjust as needed)
    const delayAfterSentence = 1000; // Delay after each sentence (adjust as needed)

    function type() {
      const fullText = texts[currentTextIndex];
      const typewriterText = document.querySelector('.typewriter-text');
      if (isDeleting) {
        // Reshuffle logic
        let shuffledText = currentText.split('').sort(() => Math.random() - 0.5).join('');
        currentText = shuffledText.substring(0, currentText.length - 1);
        typewriterText.textContent = currentText;
        if (currentText === '') {
          isDeleting = false;
          currentTextIndex = (currentTextIndex + 1) % texts.length;
          setTimeout(() => type(), delayAfterSentence); // Delay after sentence (even if deleting)
        } else {
          setTimeout(type, typingSpeed);
        }
      } else {
        currentText = fullText.substring(0, currentText.length + 1);
        typewriterText.textContent = currentText;
        if (currentText === fullText) {
          isDeleting = true;
          setTimeout(type, delayAfterSentence); // Delay after sentence (even if deleting)
        } else {
          setTimeout(type, typingSpeed);
        }
      }
    }

    type(); // Call type initially
  </script>
</body>
</html>
