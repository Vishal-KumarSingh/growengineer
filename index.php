
<?php
include "includes/includes_header.php";
include "includes/includes_home_navbar.php";
if(isset($_SESSION["user_id"])){
    header("Location: dashboard.php");
} else{
    
?>
<div id="login">
<h2>Just Login and Get Everythig....</h2>
<div class="button center"><a href="login.php">Login to continue</a></div>
<div class="button center">Login with Facebook</div>
<div class="button center">Login with Google</div>

</div>
<div id="panel">
    <h2>Why Grow Engineer</h2>
<div class="panel_row">
<div class="panel_element">
    <h4>One place for every Engineering Study</h4>
 We provide our best of study materils for every engineering persuing students.    
</div>

<div class="panel_element">
    <h4>Get instant help from Friends</h4>
    We at grow engineer maintain a friendly community for every engineering learners to get help from other grow engineer students.
</div>
    <div class="panel_element">
        <h4>No Ads NO Disturbance</h4>
        Providing free content to the web we also provides a non disturbing environment for all those studets that feels annoyed after getting s much ads on other learning platforms.
    </div>

    <div class="panel_element">
        <h4>Prepare for Exams</h4>
        Our top questions banks are specially designed by experts to crack every competitive exams as wel as engineering board exams. You can lso demand question bnks from grow engineering friendship.
    </div>
    </div>
    <div class="panel_row">
    <div class="panel_element">
        <h4>Get rid of Spammers</h4>
    Every body loves a spam free environment that's why we work hard for creating a no spam environment which rich AI spamdetection mechanism. 
    </div>
    <div class="panel_element">
        <h4>Get Help from teachers</h4>
        We at grow engineers invites professional teachers to help engineers to get their best.
    </div>
        <div class="panel_element">
            <h4>Solve doubts instantly</h4>
            With rich environment support we also provide Chat to Support team to help. You can anytime send a message to get help and help will provide you bavk instantly
        </div>
    
        <div class="panel_element">
            <h4>Increase your grades</h4>
            Grow engineer is working hard to create a comfortable and safe environment for teachers,students,helpers and all that matters for grow engineers. Please be respectfulon Grow Engineer platform
        </div>

        </div>


</div>
<div id="latest">
    <h3>Trending articles</h3>
<ul>
    <li>Start learning web development on grow engineer.. Click here</li>
    <li></li>
    <li>Indian institutes are going to open soon with some COVID-19 safety guidelines . See here</li>
    <li>See how can you become an ethical hacker in just two monthes. Read more</li>
    <li>How to prepare for Google interview ??</li>
    <li>Sbte has declared his third semester result. Check out now</li>
    <li>Android has became the top Operating System for Smartphones. Read it here</li>
    <li>How mechanical engineer can learn from home. Read it here</li>
    <li>Ceramics is a branch of money Said William Stockig. Check it how.</li>
    <li>India is becoming a country for engineers. </li>




</ul>

</div>
<h1>See what people say about us</h1>
    
<div id="testinomials">
   
<div class="testinomial">
<h4>Isha kumari</h4>
<h5>Student of government poltechnic patna 7</h5>
<span>Hey, I am daily learner at grow engineer and I am happy with my happy results
    this site really helped me lot in cracking my exams
</span>
</div>

<div class="testinomial">
<h4>Mukesh kumar</h4>
    <h5>Student of government poltechnic patna 7</h5>
    <span>Hey, I am daily learner at grow engineer and I am happy with my happy results
        this site really helped me lot in cracking my exams
    </span></div>
  
    

    <div class="testinomial">
        <h4>Hulas Chandra kumar</h4>
        <h5>Student of government poltechnic patna 7</h5>
        <span>Hey, I am daily learner at grow engineer and I am happy with my happy results
            this site really helped me lot in cracking my exams
        </span>
        </div>
        





    
</div>
<div id="contact">
    <form action="" class="center" style="border: 5px solid rgb(160, 145, 145); padding: 20px;">
        <h2 class="center">Send a quick message</h2>
        <h4 class="center">Your email</h4>
        <input type="text"class="center" placeholder="Enter your email"><br>
        <h4 class="center">Your message</h4>
        <textarea class="center" name="message" placeholder="Enter your message" id="message" cols="30" rows="10"></textarea><br>
        <input class="center" type="submit" value="Send">
    </form>
</div>
<div id="footer">
All copyrights are reserved for growengineer team <br>
Contact email- growengineer0@gmail.com



</div>




</body>


</html>

<?php 
}
?>