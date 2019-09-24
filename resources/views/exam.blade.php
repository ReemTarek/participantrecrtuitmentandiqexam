
<!DOCTYPE html>
<html>
  <head>
    <title>IQ Exam</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
     <link rel="shortcut icon" href="img/icon.png">


    <link href="https://fonts.googleapis.com/css?family=Bungee&display=swap" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-light bg-light text-center sticky-top">
  <span class="navbar-brand mb-0 h1 text-center"id="countdown"></span>
</nav>
<form class="p-5  text-dark" style="background-color: white" id="xyz" action="{{route('checkexam')}}" method="post">
@csrf
  <div class="container">
    <h2 class="text-center">IQ exam</h2>
  <fieldset class="form-group">
    
      <p class="text-center border-top border-bottom border-primary">Question 1</p>
      <div class="text-center mb-3">
      <img class="rounded" src="img/q1.jpg" width="200" alt="question1">
         </div>

        <div class="form-check mb-3">
          <input class="form-check-input mt-3" type="radio" name="q1" id="q1a" value="a">
          <label class="form-check-label" for="q1a">
           A- <img src="img/q1a.jpg" width="50" height="50">
          </label>
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input mt-3" type="radio" name="q1" id="q1b" value="b">
          <label class="form-check-label" for="q1b">
            B- <img src="img/q1b.jpg" width="50" height="50">
          </label>
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input mt-3" type="radio" name="q1" id="q1c" value="c">
          <label class="form-check-label" for="q1c">
            C- <img src="img/q1c.jpg" width="50" height="50">
          </label>
        </div>
             <div class="form-check mb-3">
          <input class="form-check-input mt-3" type="radio" name="q1" id="q1d" value="d">
          D- <label class="form-check-label" for="q1d">
            <img src="img/q1d.jpg" width="50" height="50">
          </label>
        </div>
   
  </fieldset>
  <fieldset class="form-group">
      <p class="text-center border-top border-bottom border-primary">Question 2</p>
    6,5=33
    <br>
  7,2=17
<br>
11,4=47
<br>
3,8=?</p>
     

        <div class="form-check">
          <input class="form-check-input" type="radio" name="q2" id="q2a" value="a">
          <label class="form-check-label" for="q2a">
            23
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q2" id="q2b" value="b">
          <label class="form-check-label" for="q2b">
            45
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q2" id="q2c" value="c">
          <label class="form-check-label" for="q2c">
          34 
          </label>
        </div>
            <div class="form-check">
          <input class="form-check-input" type="radio" name="q2" id="q2d" value="d">
          <label class="form-check-label" for="q2d">
          27
          </label>
        </div>
     
   
  </fieldset>
  <fieldset class="form-group">
    
      <p class="text-center border-top border-bottom border-primary">Question 3</p>
      <p class="text-center">29-27-24-20-15-..?</p>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q3" id="q3a" value="a">
          <label class="form-check-label" for="q3a">
            7
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q3" id="q3b" value="b">
          <label class="form-check-label" for="q3b">
            9
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q3" id="q3c" value="c">
          <label class="form-check-label" for="q3c">
            10
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q3" id="q3d" value="d">
          <label class="form-check-label" for="q3d">
            11
          </label>
        </div>
     
     
   
  </fieldset>
  <fieldset class="form-group">
    
      <p class="text-center border-top border-bottom border-primary">Question 4</p>
      <p class="text-center">7-15-31-..?</p>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q4" id="q4a" value="a">
          <label class="form-check-label" for="q4a">
            45
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q4" id="q4b" value="b">
          <label class="form-check-label" for="q4b">
            37
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q4" id="q4c" value="c">
          <label class="form-check-label" for="q4c">
            63
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q4" id="q4d" value="d">
          <label class="form-check-label" for="q4d">
            76
          </label>
        </div>
  </fieldset>
  <fieldset class="form-group">
    
      <p class="text-center border-top border-bottom border-primary">Question 5</p>
      <p class="text-center">
اذا كان اجمالي ثمن المضرب مع الكرة يساوي 1.10 دولار , و كان ثمن المضرب يزيد عن ثمن الكرة بمقدار 1 دولار , فكم يكون ثمن الكرة ؟ </p>        <div class="form-check">
          <input class="form-check-input" type="radio" name="q5" id="q5a" value="a">
          <label class="form-check-label" for="q5a">
0.10          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q5" id="q5b" value="b">
          <label class="form-check-label" for="q5b">
            1
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q5" id="q5c" value="c">
          <label class="form-check-label" for="q5c">
0.05          </label>
        </div>
     
     <div class="form-check">
          <input class="form-check-input" type="radio" name="q5" id="q5d" value="d">
          <label class="form-check-label" for="q5d">
0.5          </label>
        </div>
  </fieldset>
   <fieldset class="form-group">
    
      <p class="text-center border-top border-bottom border-primary">Question 6</p>
      <div class="text-center mb-3">
      <img class="rounded" src="img/q6.jpg" width="200" alt="question1">
         </div>

        <div class="form-check mb-3">
          <input class="form-check-input mt-3" type="radio" name="q6" id="q6a" value="a">
          <label class="form-check-label" for="q6a">
           A- <img src="img/q6a.jpg" width="50" height="50">
          </label>
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input mt-3" type="radio" name="q6" id="q6b" value="b">
          <label class="form-check-label" for="q6b">
            B- <img src="img/q6b.jpg" width="50" height="50">
          </label>
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input mt-3" type="radio" name="q6" id="q6c" value="c">
          <label class="form-check-label" for="q6c">
            C- <img src="img/q6c.jpg" width="50" height="50">
          </label>
        </div>
             <div class="form-check mb-3">
          <input class="form-check-input mt-3" type="radio" name="q6" id="q6d" value="d">
          D- <label class="form-check-label" for="q6d">
            <img src="img/q6d.jpg" width="50" height="50">
          </label>
        </div>
   
  </fieldset>
  <fieldset class="form-group">
    
      <p class="text-center border-top border-bottom border-primary">Question 7</p>
      <p class="text-center">5-5X5+5 = ?</p>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q7" id="q7a" value="a">
          <label class="form-check-label" for="q7a">
            0
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q7" id="q7b" value="b">
          <label class="form-check-label" for="q7b">
25          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q7" id="q7c" value="c">
          <label class="form-check-label" for="q7c">
5          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q7" id="q7d" value="d">
          <label class="form-check-label" for="q7d">
30          </label>
        </div>
   
  </fieldset>
  <fieldset class="form-group">
    
      <p class="text-center border-top border-bottom border-primary">Question 8</p>
      <p class="text-center">2-4-8-16-32-64-..?</p>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q8" id="q8a" value="a">
          <label class="form-check-label" for="q8a">
            128
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q8" id="q8b" value="b">
          <label class="form-check-label" for="q8b">
90
        </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q8" id="q8c" value="c">
          <label class="form-check-label" for="q8c">

100      </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q8" id="q8d" value="d">
          <label class="form-check-label" for="q8d">
140          </label>
        </div>
   
  </fieldset>
  <fieldset class="form-group">
    
      <p class="text-center border-top border-bottom border-primary">Question 9</p>
      <div class="text-center mb-3">
      <img class="rounded" src="img/q8.jpg" width="200" alt="question1">
         </div>

        <div class="form-check mb-3">
          <input class="form-check-input mt-3" type="radio" name="q9" id="q9a" value="a">
          <label class="form-check-label" for="q9a">
           A- <img src="img/q8a.jpg" width="50" height="50">
          </label>
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input mt-3" type="radio" name="q9" id="q9b" value="b">
          <label class="form-check-label" for="q9b">
            B- <img src="img/q8b.jpg" width="50" height="50">
          </label>
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input mt-3" type="radio" name="q9" id="q9c" value="c">
          <label class="form-check-label" for="q9c">
            C- <img src="img/q8c.jpg" width="50" height="50">
          </label>
        </div>
             <div class="form-check mb-3">
          <input class="form-check-input mt-3" type="radio" name="q9" id="q9d" value="d">
          D- <label class="form-check-label" for="q9d">
            <img src="img/q8d.jpg" width="50" height="50">
          </label>
        </div>
   
   
  </fieldset>
  <fieldset class="form-group">
    
      <p class="text-center border-top border-bottom border-primary">Question 10</p>
      <p class="text-center">8-8/4X3 = ?</p>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q10" id="q10a" value="a">
          <label class="form-check-label" for="q10a">
            3
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q10" id="q10b" value="b">
          <label class="form-check-label" for="q10b">
0
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q10" id="q10c" value="c">
          <label class="form-check-label" for="q10c">
2          </label>
        </div>
     
     <div class="form-check">
          <input class="form-check-input" type="radio" name="q10" id="q10d" value="d">
          <label class="form-check-label" for="q10d">
12          </label>
        </div>
  </fieldset>
  <fieldset class="form-group">
    
      <p class="text-center border-top border-bottom border-primary">Question 11</p>
      <div class="text-center mb-3">
      <img class="rounded" src="img/q10.jpg" width="200" alt="question1">
         </div>

        <div class="form-check mb-3">
          <input class="form-check-input mt-3" type="radio" name="q11" id="q11a" value="a" >
          <label class="form-check-label" for="q11a">
           A- <img src="img/q9a.jpg" width="50" height="50">
          </label>
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input mt-3" type="radio" name="q11" id="q11b" value="b">
          <label class="form-check-label" for="q11b">
            B- <img src="img/q9b.jpg" width="50" height="50">
          </label>
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input mt-3" type="radio" name="q11" id="q11c" value="c">
          <label class="form-check-label" for="q11c">
            C- <img src="img/q9c.jpg" width="50" height="50">
          </label>
        </div>
             <div class="form-check mb-3">
          <input class="form-check-input mt-3" type="radio" name="q11" id="q11d" value="d">
          D- <label class="form-check-label" for="q11d">
            <img src="img/q9d.jpg" width="50" height="50">
          </label>
        </div>
   
   
  </fieldset>
  <fieldset class="form-group">
    
      <p class="text-center border-top border-bottom border-primary">Question 12</p>
      <div class="text-center mb-3">
      <img class="rounded" src="img/q11.jpg" width="200" alt="question1">
         </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q12" id="q12a" value="a">
          <label class="form-check-label" for="q12a">
            5
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q12" id="q12b" value="b">
          <label class="form-check-label" for="q12b">
4          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q12" id="q12c" value="c">
          <label class="form-check-label" for="q12c">
6          </label>
        </div>
            <div class="form-check">
          <input class="form-check-input" type="radio" name="q12" id="q12d" value="d">
          <label class="form-check-label" for="q12d">
10         </label>
        </div>
   
  </fieldset>
  
    
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">submit exam</button>
    </div>
  </div>
</div>
</form>
<script>
window.addEventListener( "pageshow", function ( event ) {
  var historyTraversal = event.persisted || 
                         ( typeof window.performance != "undefined" && 
                              window.performance.navigation.type === 2 );
  if ( historyTraversal ) {
    // Handle page restore.
    window.location.reload();
  }
});
</script>
<script>
// Set the date we're counting down to

var sec         =  localStorage.getItem('seco') || 1800,
    countDiv    = document.getElementById("countdown"),
    secpass,
    countDown   = setInterval(function () {
        'use strict';
        
        secpass();
    }, 1000);

function secpass() {
    'use strict';
    
    var min     = Math.floor(sec / 60),
        remSec  = sec % 60;
    
    if (remSec < 10) {
        
        remSec = '0' + remSec;
    
    }
    if (min < 10) {
        
        min = '0' + min;
    
    }
    countDiv.innerHTML ="Time left: "+ min + ":" + remSec;
    
    if (sec > 0) {
        sec = sec - 1;
        localStorage.setItem("seco", sec);
    } else {
        
        clearInterval(countDown);
        countDiv.innerHTML = 'countdown done';
        document.getElementById("xyz").submit();
        
    }
}

</script>


</body>
</html>