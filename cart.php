

<?php
  session_start();
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
      $_SESSION['cart']=array();
      foreach($_POST as $key=>$value  )
      {
        if($value!=0)
        {
           $_SESSION['cart'][$key]=$value;
        }
        
      }
      if(!empty($_SESSION['cart']))
      {
        header('Location: cart.php');
      }
      else{
        echo "<style='color:red;'>"."Your cart is empty"."</style";
      }
      
    } 


?>
<!DOCTYPE html>

<html>
    <head>
    <title>cart</title>
    <style>

html {
  background: #bbc3c6;
  font: 62.5%/1.5em "Trebuchet Ms", helvetica;
}

.shopper {
  text-transform: lowercase;
  font: 2em 'Shopper', sans-serif;
  line-height: 0.5em;
  display: inline-block;
}

h1 {
  text-transform: uppercase;
  font-weight: bold;
  font-size: 2.5em;
}

p {
  font-size: 1.5em;
  color: #8a8a8a;
}

input {
  border: 0.3em solid #bbc3c6;
  padding: 0.5em 0.3em; 
  font-size: 1.4em;
  color: #8a8a8a;
  text-align: center;
}

img {
  max-width: 9em;
  width: 100%;
  overflow: hidden; 
  margin-right: 1em;
}

a {
  text-decoration: none;
}

.container {
  max-width: 75em;
  width: 95%;
  margin: 40px auto;  
  overflow: hidden;
  position: relative;
  
  border-radius: 0.6em;
  background: #ecf0f1;
  box-shadow: 0 0.5em 0 rgba(138, 148, 152, 0.2);
}

.heading {
  padding: 1em;
  position: relative;
  z-index: 1;
  color: #f7f7f7;
  background: rgb(82, 206, 255);
}

.cart {
  margin: 2.5em;
  overflow: hidden;
}

.cart.is-closed {
  height: 0;
  margin-top: -2.5em;
}

.table {
  background: #ffffff;
  border-radius: 0.6em;
  overflow: hidden;
  clear: both;
  margin-bottom: 1.8em;
}


.layout-inline > * {
  display: inline-block;
}

.align-center {
  text-align: center;
}

.th {
  background: rgb(82, 206, 255);
  color: #fff;
  text-transform: uppercase;
  font-weight: bold;
  font-size: 1.5em;
}

.tf {
  background: rgb(82, 206, 255);
  text-transform: uppercase;
  text-align: right;
  font-size: 1.2em;  
}

.tf p {
  color: #fff;
  font-weight: bold;
}

.col {
  padding: 1em;
  width: 12%;
}

.col-pro {
  width: 44%;
}

.col-pro > * {
  vertical-align: middle;
}

.col-qty {
  text-align: center;
  width: 17%;
}

.col-numeric p {
  font: bold 1.8em helvetica;
}

.col-total p {
  color: #12c8b1;
}

.tf .col {
  width: 20%;
}

.row > div {
  vertical-align: middle;
}

.row-bg2 {
  background: #f7f7f7;
}

.visibility-cart {
  position: absolute;
  color: #fff;
  top: 0.5em;
  right: 0.5em;
  font:  bold 2em arial;
  border: 0.16em solid #fff;
  border-radius: 2.5em;
  padding: 0 0.22em 0 0.25em ;
}

.col-qty > * {
  vertical-align: middle; 
}

.col-qty > input {
  max-width: 2.6em;
}


a.qty {
  width: 1em;
  line-height: 1em;
  border-radius: 2em;
  font-size: 2.5em;
  font-weight: bold;
  text-align: center;
  background: #43ace3;  
  color: #fff;
}

a.qty:hover {
  background: #3b9ac6;
}

.btn {
  padding: 10px 30px;
  font-size: 1.4em;
  font-weight: bold;
  background: #43ace3;
  color: #fff;
  border-color:transparent;
  
}

.btn:hover {
  box-shadow: 0 3px 0 rgba(59,154,198, 0)
}

.btn-update {
  float: right;
  margin: 0 0 1.5em 0;
}

.transition {
  transition: all 0.3s ease-in-out;
}

  
  .col-pro {
    width: 35%;
  }
  
  .col-qty {
    width: 22%;
  }
  
  img {
    max-width: 100%;
    margin-bottom: 1em;
  }

  

    </style>
    </head>
    <body>
      <form action="" method="post">
        <div class="container">
            <div class="heading">
              <h1>
                <span class="shopper">s</span> Shopping Cart
              </h1>
              
              <a href="index.php" class="visibility-cart transition is-open">X</a>    
            </div>
            
            <div class="cart transition is-open">
              
              <a href="cart.php" class="btn btn-update">Reset cart</a>
              
              
              <div class="table">
                
                <div class="layout-inline row th">
                  <div class="col col-pro" style="text-align: center;">Product</div>
                  <div class="col col-price "> 
                    Price
                  </div>
                  <div class="col col-qty" style="margin-left: -40px;">QTY</div>
                  <div class="col col-vat" >VAT</div>
                </div>
                
                <div class="layout-inline row">
                  
                  <div class="col col-pro layout-inline">
                    <img src="https://cdn.shopify.com/s/files/1/0364/4732/2248/products/1_aa8af1f1-00cb-433a-b75e-97ac53048743.png?v=1597677759" alt="kitten" />
                    <p style="margin-left: 60px;">White Tiger Hoodie</p>
                  </div>
                  
                  <div class="col col-price col-numeric align-center ">
                    <p>1200</p>
                  </div>
          
                  <div class="col col-qty layout-inline">
                   
                      <input type="number" value="0" min="0" max="20" id="q1" onchange=total() name="Tiger Hoodie"/>
                   
                  </div>
                  
                  <div class="col col-vat col-numeric">
                    <p>150</p>
                  </div>
                  <div class="col col-total col-numeric">               <p>Rs. 1350</p>
                  </div>
                </div>
                
                <div class="layout-inline row row-bg2">
          
                  <div class="col col-pro layout-inline">
                    <img src="http://cdn.shopify.com/s/files/1/0327/2205/9402/products/Hoodie_zip_2000x_4e70d5c7-0d4b-4571-a77e-60d58b7af525_1200x1200.png?v=1600767010" alt="kitten" />
                    <p style="margin-left: 60px;">Musical Hoodie</p>
                  </div>
                  
                  <div class="col col-price col-numeric align-center ">
                    <p>2000</p>
                  </div>
          
                  <div class="col col-qty  layout-inline">
                           <input type="number" value="0" min="0" max="20" id="q2" onchange=total() name="Musical Hoodie"/>
                   
                  </div>
                  
                  <div class="col col-vat col-numeric">
                    <p>250</p>
                  </div>
                  <div class="col col-total col-numeric">
                    <p>Rs. 2250</p>
                  </div>      
                
                </div>
                
                 <div class="layout-inline row">
                  
                  <div class="col col-pro layout-inline">
                    <img src="https://i.pinimg.com/originals/3c/d4/d6/3cd4d6fce15694021e9d632b922ae41a.png" alt="kitten" />
                    <p style="margin-left: 60px;">Joker T-shirt</p>
                  </div>
                  
                  <div class="col col-price col-numeric align-center ">
                    <p>800</p>
                  </div>
          
                  <div class="col col-qty layout-inline">
                   
                      <input type="number" value="0" min="0" max="20" id="q3" onchange=total() value="Joker"/>
                  
                  </div>
                  
                  <div class="col col-vat col-numeric">
                    <p>100</p>          
                  </div>
                   <div class="col col-total col-numeric">  
                     <p>Rs .900</p>
                   </div>         
                </div>
            

                <div class="layout-inline row">
                  
                    <div class="col col-pro layout-inline">
                      <img src="https://msale24.com/wp-content/uploads/2021/10/Fashion-Tattoo-Mens-hoodies-Sons-Of-Vikings-3D-Printed-Hoodie-Harajuku-Streetwear-Pullover-Unisex-Casual-Jacket.png" alt="viking" />
                      <p style="margin-left: 60px;">Vikings Jacket</p>
                    </div>
                    
                    <div class="col col-price col-numeric align-center ">
                      <p>1750</p>
                    </div>
            
                    <div class="col col-qty layout-inline">
                        <input type="number" value="0"  min="0" max="20" id="q4" onchange=total() name="Viking"/>
                 
                    </div>
                    
                    <div class="col col-vat col-numeric">
                      <p>200</p>          
                    </div>
                     <div class="col col-total col-numeric">  
                       <p>Rs. 1950</p>
                     </div>         
                  </div>

                  <div class="layout-inline row">
                  
                    <div class="col col-pro layout-inline">
                      <img src="https://img.btdmp.com/10219/10219193/products/1629542823439.png" alt="gaming" />
                      <p style="margin-left: 60px;">Gaming tshirt</p>
                    </div>
                    
                    <div class="col col-price col-numeric align-center ">
                      <p>1500</p>
                    </div>
            
                    <div class="col col-qty layout-inline">
                    
                        <input type="number" value="0" min="0" max="20" id="q5" onchange=total() name="Gaming"/>
    
                    </div>
                    
                    <div class="col col-vat col-numeric">
                      <p>150</p>          
                    </div>
                     <div class="col col-total col-numeric">  
                       <p>Rs. 1650</p>
                     </div>         
                  </div>


                  <div class="layout-inline row">
                  
                    <div class="col col-pro layout-inline">
                      <img src="https://static.nike.com/a/images/t_default/ab96d56f-fbe7-45ad-aaf8-2d8dbdf9c004/chelsea-fc-2021-22-stadium-home-mens-soccer-jersey-Fwt9bV.png" alt="chelsea-fc-2021-22-stadium-home-mens-soccer-jersey-Fwt9bV" />
                      <p style="margin-left: 60px;">Chelsea Jersey</p>
                    </div>
                    
                    <div class="col col-price col-numeric align-center ">
                      <p>1250</p>
                    </div>
            
                    <div class="col col-qty layout-inline">
                   
                        <input type="number" value="0" min="0" max="20" id="q6" onchange=total() name="chelsea"/>
                     
                    </div>
                    
                    <div class="col col-vat col-numeric">
                      <p>100</p>          
                    </div>
                     <div class="col col-total col-numeric">  
                       <p>Rs. 1350</p>
                     </div>         
                  </div>

                 <div class="tf">
                     <div class="row layout-inline">
                     <div class="col">
                       <p>Total</p>
                     </div>
                     <div class="col" style="width:50px; margin-right:200px; ">
                                <input type="text" id="Total" readonly style="background-color:transparent; color:white; border-color:transparent;" >
                     </div>
                   </div>
                 </div>         
            </div>
              
              <button class="btn btn-update" >Proceed To Checkout</button>
            
          </div>
</form>
<script>
  
  function total()
  {
      var q1=document.getElementById('q1').value;
      var q2=document.getElementById('q2').value;
      var q3=document.getElementById('q3').value;
      var q4=document.getElementById('q4').value;
      var q5=document.getElementById('q5').value;
      var q6=document.getElementById('q6').value;
      var e=q1*1350+q2*2250+q3*900+q4*1950+q5*1650+q6*1350;
      document.getElementById('Total').value="Rs. "+ e;
     
  }
  
 
  

  </script>


       
    </body>
    </html>
