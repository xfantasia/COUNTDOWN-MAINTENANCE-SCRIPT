
    

<!DOCTYPE html>
<html>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  background-image: url('/w3images/forestbridge.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: black;
  font-family: "Roboto Condensed", Roboto Condensed, oswald;
  font-size: 16px;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}
</style>
<body>

<div class="bgimg">

  <div class="middle">
    <h3 style="color:red;">D E V E L O P M E N T  &nbsp;&nbsp; I N &nbsp;&nbsp;  P R O G R E S S </h3> 
    <hr>
    
    <article>
        <h1>WE&rsquo;RE COUNTING DOWN TO LAUNCH!</h1>
        <div>
            <p>If you need to, you can always <a href="mailto:admin@directoreel.com">contact us</a>, otherwise we&rsquo;ll be online shortly!</p>
            <p>&mdash; The Directoreel Team</p>
        </div>
        <hr>
        <!-- Display the countdown timer in an element -->
<p id="demo" style="color:green;"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Apr 1, 2022 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "Days " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
    </article>
    
    
  </div>

</div>

</body>
</html>
