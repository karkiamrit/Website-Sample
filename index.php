<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="path-to-fontawesome/font-awesome.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>
            Business Site 
        </title>
        
    </head>
    <body>
        <div class="main container">
        <div class="navi">
         <ul>
            <li class="bn">Home</li>
            <li class="bn">Products</li>
            <li class="bn" >Top Deals</li>
            <li class="bn"><a href="./signup.php" style="color: white;">Sign up</a></li>
            <li><input type="search" placeholder="Search"/></li>
            <div class="user">
            <li>
                <i class="far fa-user"></i>
                <ul class="down">
                    <li><a href="#">Laptops</a></li>
                    <li><a href="#">Monitors</a></li>
                    <li><a href="#">Printers</a></li>

                </ul>
            </li>
        </div>
           
            <span class="heart">
            <li><i class="far fa-heart"></i></li>
            </span>
            <span class="bag">
            <li><i class="fas fa-shopping-bag"></i></li>
            </span>
         </ul>  
         </div> 
        <div class="red"><p style="padding-top: 7px; color: white;">START 2022 THE INERTIA WAY!</br>WITH CODE: YESPLS!</p></div>
        <div class="blue"><p>SALE UPTO 30% OFF</br>FINAL DISCOUNTS</p></div>
         </div>
         <div class="image"></a>
        </div>
        <div class="box">
            <img src="https://th.bing.com/th/id/R.9fe9892e3b9904b2f1466de39c56e724?rik=SWnljCowR85%2biQ&pid=ImgRaw&r=0"><h1>Tshirts</h1>
            
        </div>
        <div class="box">
            <img src="https://th.bing.com/th/id/R.d0303df313568f27930bad65cf238d01?rik=t5%2fM95dfh4Rbew&riu=http%3a%2f%2fwww.tshirt-supplier.com%2fUploads%2f5a324ae7d8660.jpg&ehk=CZ%2fm2tM%2be8zSwRVOi0e9QMS%2bbEXQcTjqfrqd4o9ZP48%3d&risl=&pid=ImgRaw&r=0"><h1>Sweatshirts</h1>
        </div>
        <div class="box">
            <img src="https://www.tshirt-supplier.com/Uploads/5a31f7e1ec310.jpg"><h1>Hoodies</h1>
        </div>
        <div class="image1"><a href="#"><img src="./img/sale.png"></a>
        </div>
        <div class="pth"><img src="./img/d.jpg"> 
       </div>
        <div class="pth"><img src="./img/f.jpg" style="margin-left:300px;"></div>
        <div class="head">
        <h2>"CUSTOMER SATISFACTION IS OUR MAIN GOAL"</h2>
        <input type="button" value="SHOP NOW">
        </div>
        <div id="clock" class="clock"><table border="3">
            <tr>
                <th id="Days"></th>
                <th id="Hours"></th>
                <th id="Mins"></th>
                <th id="Secs"></th>
            </tr>
            <tr>
                <td>Days </td>
                <td>Hours </td>
                <td>Minutes </td>
                <td>Seconds </td>
            </tr>
          
            
        </table></div>
        <div class="banner">
            <img src="./img/banner.png">
        </div>

        <a href="#"><div class="top">
            Back to Top
        </div></a>
        <div class="footer" style="background-color: #232F3E;">
            <div class="contain">
                <div class="col">
                  <h1>Accounts</h1>
                  <ul>
                    <li>About</li>
                    <li>Services</li>
                    <li>Get in touch</li>
                  </ul>
                </div>
                <div class="col">
                  <h1>Resources</h1>
                  <ul>                                        
                      <li>Get in Touch</li>
                   
                  </ul>
                </div>
                <div class="col">
                  <h1>Support</h1>
                  <ul>
                    <li>Contact us</li>
                    
                  </ul>
                </div>
                
              </div>
              </div>
        </div>


        <script>
            function changetime(){
            var countDownDate = new Date("Dec 5, 2022 15:37:25").getTime();
            var time=new Date().getTime();
            var timer=countDownDate-time;
            var days=parseInt(timer/(1000 * 60 * 60 * 24));
            var hrs=parseInt((timer % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var mins = parseInt((timer % (1000 * 60 * 60)) / (1000 * 60));
            var secs = parseInt((timer % (1000 * 60)) / 1000);
           if(days<10)
            {
                days="0"+days;
            }
            if(hrs<10){
               hrs="0"+hrs;
            }
            if(mins<10){
                mins="0"+mins;
            }
            if(secs<10){
                secs="0"+secs;
            }
            var clock=document.getElementById('clock');
            Days.innerText= days;
            Hours.innerText= hrs;
            Mins.innerText= mins;
            Secs.innerText= secs;
            }

            setInterval(changetime,1000);        
        </script>
    </body>
</html>
