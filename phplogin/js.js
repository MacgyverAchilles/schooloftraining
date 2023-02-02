    <script>
      function startTimer() {
        var minutes = 5;
        var seconds = 0;
        var timer = setInterval(function() {
          if (seconds === 0) {
            minutes--;
            seconds = 59;
          } else {
            seconds--;
          }
          
          document.getElementById("timer").innerHTML = "Time remaining: " + minutes + ":" + (seconds < 10 ? "0" + seconds : seconds);
          
          if (minutes === 0 && seconds === 0) {
            clearInterval(timer);
            window.location.href = "timeout.html";
          }
        }, 1000);
      }
    </script>