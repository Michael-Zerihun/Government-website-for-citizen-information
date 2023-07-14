<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <script src="./js/index.js"></script>
    <title>Ahadu</title>
</head>
<body>
    <div class="top" id="top">
        <div class="left" id="left"><img src="./image/Ahadu-logos/lo.png" alt="Ahadu" class="logo" srcset="">
        <div class="authority" id="authority">
            <span class="branch">Ahadu</span>
        </div>
        </div>
        <div class="right" id="right">
            <button class="topbtn"><a href="./index.php">Home</a></button>
            <button class="topbtn" id="topbtnserv" onclick="tab(this)">Services</button>
                <div class="sevices" id="services">
                    <button class="servbtn" id="idcsroll" onclick="mov(this)">ID Card</button>
                    <button class="servbtn" id="passcroll" onclick="movp(this)">Passport</button>
                </div>
                <div  id="overlay" onclick="closetab(this)"></div>
            <button class="topbtn" id="topbtnlog"><a href="./login.php">Login</a></button>
            <button class="topbtn" id="topbtnsu"><a href="./signup.php">Sign Up</a></button>

        </div>
        
   </div>
   <div class="main" id="main">
       <div class="frontlogo" id="frontlogo">
           
       </div>
       <div class="welcome" id="welcome">
            <h1>Welcome to Ahadu</h1>
            <h2>From Department of Internal Affairs</h2>
       </div>
   </div>
   <div class="moreinfo" id="moreinfo">
       <div class="idcard" id="idcard">
           <div class="text" id="text">
               <h3>ID Card</h3>
               <p>An easier option to apply for an ID card is now available!
                    You will no longer have to wait in a long line to obtain an ID card.
                     All you have to do now is sign up for an account. Fill in all the
                      required fields and double-check that the information 
                      you've entered is correct. You will be notified as soon as your ID is ready.
                       As simple as that.</p>
               </div>
           <div class="image" id="image"><img src="./image/img/kindpng_2778964.png" alt="" class="idimage" id="idimage"></div>
       </div>
       <div class="passport" id="passport">
           <div class="image" id="image"><img src="./image/img/passport-png-photo.png" alt="" class="passimage" id="passimage"></div>
           <div class="text" id="text">
               <h3>Passport</h3>
               <p>Want to explore the world, attend business meetings in other countries,
                    or continue your education? No worries; you may now apply for a passport
                     from the convenience of your own home, office, or anywhere else.
                      Simply say the word, and you'll have it. Whether you require an urgent
                       or routine service or a large or small number of pages, everything 
                       is available in one location. There's no need to go from office to office;
                        everything can be done with a single click of a button.</p>
            </div>
       </div>
   </div>
</body>
</html>