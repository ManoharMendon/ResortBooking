<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Day Out</title>

        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/fontawesome/4.7.0/css/font-awesome.min.css">



        <link rel="stylesheet" href="adventure.css">
    </head>
    <body>
    <div class="background">

        <div class="main">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                             <div class="sliderText">
                                 <h3>Day Out</h3>  
                            </div>
                            <div class="content">
                                <li>Complementary Games
                                </li><li>Lunch included
                                </li><li>swimming pool
                                </li><li>Tea & Snacks
                                </li><li>Spa
                                </li>
                                <a href="#">Price ₹1500
                                </a>
                            </div>
                        </div>
                    </div>
    
    
                    <div class="swiper-slide">
                        <div class="card">
                             <div class="sliderText">
                                 <h3>Full Day</h3>  
                            </div>
                            <div class="content">
                                <li>Complementary Games
                                </li><li>Lunch included
                                </li><li>swimming pool
                                </li><li>Tea & Snacks
                                </li><li>Spa
                                </li><li>Dinner included</li>
                                <a href="#">Price ₹2500
                                </a>
                            </div>
                        </div>
                    </div>
    
    
    
                    <div class="swiper-slide">
                        <div class="card">
                             <div class="sliderText">
                                 <h3>Tea & Dinner</h3>  
                            </div>
                            <div class="content">
                                <li>Complementary Games
                                </li><li>swimming pool
                                </li><li>Tea & Snacks 
                                </li><li>Dinner included</li>
                                </li><li></li>
                                <a href="#">Price ₹1200 
                                </a>
                            </div>
                        </div>
                    </div>
    
        </div>
    
                </div>
            </div>
    
        </div>
    
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
            <script>
                var swiper = new Swiper('.swiper-container', {
                  effect: 'coverflow',
                  grabCursor: true,
                  centeredSlides: true,
                  slidesPerView: 'auto',
                  coverflowEffect: {
                    rotate: 30,
                    stretch: 0,
                    depth: 200,
                    modifier: 1,
                    slideShadows: true,
                  },
                  pagination: {
                    el: '.swiper-pagination',
                  },
                });
             
            </script>


<div class="box">
 <form id="dayout" action="connectadven.php"  class="input-group" method="post" >
    <div class="form-wrap">
                <form >
                    <div class="header">
                        <h1><b>Book Your Visit</b></h1>
                     </div>
                         <div class="content">
                         <input type="text" class="binput" name="name" placeholder="Name" required/>
                        <br>
                        <input type="text" class="binput" name="email" placeholder="Email" required/>
                         <br>
                        <input type="text" class="binput" name="phone" placeholder="Phone Number" required/>
                        <br>
                         <div class="input-field col s6">
                                   <h3><b>When are you visiting?</b></h3>
                         </div>    
                   
                      <br> 
                                                 
                                                 <input type="date" id="date_picker" name="checkin" class="validate datepicker" required>
                                                  <label for="date_icker">Check-in</label>
                                             
                      </br>
                     
                         </div>
                                               <div class="choice">
                                                  <h3><b>Package of Choice</b></h3>
                                          <div> 

                                                 <label class="choice"> 
                                                  <br>  <input type="radio" name="package" value="Day out with Breakfast" onclick="calculateTotal()" required> Day out with Breakfast(₹1500)
                                                   </br>
                                                  </label> 
             
                                                   <label class="choice"> 
                                                  <br> <input type="radio" name="package" value="Day out without Breakfast" onclick="calculateTotal()" required> Day out without Breakfast (₹1000)
                                                  </br> 
                                                 </label> 
                                                   <label class="choice"> 
                                                  <br> <input type="radio" name="package" value="Full Day out with Breakfast" onclick="calculateTotal()" required> Full Day out with Breakfast(₹2500)
                                                    </br>
                                                  </label> 
                                                   <label class="choice"> 
                                                   <br>  <input type="radio" name="package" value="Full Day out without Breakfast" onclick="calculateTotal()" required> Full Day out without Breakfast (₹1450)
                                                  </br>
                                                  </label> 
                                                  <label class="choice"> 
                                                  <br>  <input type="radio" name="package" value="Tea & Dinner" onclick="calculateTotal()" required> Tea & Dinner (₹1200)
                                                   </br>
                                                  </label>
                                                 
                                                  </div>
                                           </div> 
        
        
                                                <p> <nav> Number Of Adults</nav></p>        
                                                <select id="filling" name="adults" class="custom-select" onchange="calculateTotal()">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                </select>
                                            
                                                <p> <nav> Number Of Children</nav></p>        
                                                <select id="kids" name="kids" class="custom-select" onchange="calculateTotal()">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    </select>
                                                    <input type="hidden"  id="theinscription" class="total"
                                            name="theinscription" value="Enter Inscription"/>
                                            </p>
                                            <div style="color:blue" id="totalPrice" name="price"></div>
                                                <button class="button button2">Submit</button>
                                            </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>                      



 </form>
    </div>
    <script>
    var theForm = document.forms["dayout"];
    var room_prices = new Array();
room_prices["Day out with Breakfast"]=1500;
room_prices["Day out without Breakfast"]=1000;
room_prices["Full Day out with Breakfast"]=2500;
room_prices["Full Day out without Breakfast"]=1450;
room_prices["Tea & Dinner"]=1200;


var filling_prices= new Array();
filling_prices["1"]=1;
filling_prices["2"]=2;
filling_prices["3"]=3;
filling_prices["4"]=4;
filling_prices["5"]=5;
filling_prices["6"]=6;
filling_prices["7"]=7;
filling_prices["8"]=8;
filling_prices["9"]=9;
filling_prices["10"]=10;
filling_prices["11"]=11;
filling_prices["12"]=12;
filling_prices["13"]=13;
filling_prices["14"]=14;
filling_prices["15"]=15;
filling_prices["16"]=16;
filling_prices["17"]=17;
filling_prices["18"]=18;
filling_prices["19"]=19;
filling_prices["20"]=20;
filling_prices["21"]=21;
filling_prices["22"]=22;
filling_prices["23"]=23;
filling_prices["24"]=24;



var kids_prices= new Array();
kids_prices["0"]=0;
kids_prices["1"]=500;
kids_prices["2"]=1000;
kids_prices["3"]=1500;
kids_prices["4"]=2000;
kids_prices["5"]=2500;
kids_prices["6"]=3000;
kids_prices["7"]=3500;
kids_prices["8"]=4000;
kids_prices["9"]=4500;
kids_prices["10"]=5000;


function getkidsPrice()
{
    var packageFillingPrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["dayout"];
    //Get a reference to the select id="filling"
     var selectedpackage = theForm.elements["kids"];

    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    packageFillingPrice = kids_prices[selectedpackage.value];

    //finally we return cakeFillingPrice
    return packageFillingPrice;
}



function getFillingPrice()
{
    var cakeFillingPrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["dayout"];
    //Get a reference to the select id="filling"
     var selectedFilling = theForm.elements["filling"];

    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    cakeFillingPrice = filling_prices[selectedFilling.value];

    //finally we return cakeFillingPrice
    return cakeFillingPrice;
}


function getpackagePrice()
{
    var packagePrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["dayout"];
    //Get a reference to the cake the user Chooses name=package":
    var package = theForm.elements["package"];
    //Here since there are 4 radio buttons selectedCake.length = 4
    //We loop through each radio buttons
    for(var i = 0; i < package.length; i++)
    {
        //if the radio button is checked
        if(package[i].checked)
        {
            
            packagePrice = room_prices[package[i].value];
            break;
        }
    }
    
    return packagePrice;
}
function calculateTotal()
{
    
    var roomPrice = getkidsPrice()+(getpackagePrice() * getFillingPrice()) ;
    

    //display the result
    document.getElementById('totalPrice').innerHTML =
                                      "Total Price ₹"+roomPrice;

}


    </script>
    </body>
    </html>