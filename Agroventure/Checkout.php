
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>Portfólio</title>
  <script class="cssdeck" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  <script type="text/javascript" src="scripts/sections.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/layout.css"/>
  <link rel="stylesheet" type="text/css" href="styles/layout.css"/>
    <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Agroventure</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <script type="text/javascript" src="scripts/sections.js"></script>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
</head>
<body style="background-color: rgb(187, 203, 161);">
  <div class="container">
    <div class="title bg-dark text-light">
        <h2>Checkout Form</h2>
    </div>
  <div class="d-flex">
    <form action="Checkout.php" method="POST">
      <label>
        <span>Country <span class="required">*</span></span>
        <select name="selection">
          <option value="select">India</option>
         
        </select>
      </label>
      <label>
        <span> Address-1 <span class="required">*</span></span>
        <input type="text" name="houseadd-1" placeholder="Address-1" required>
      </label>
      <label>
        <span> Address-2 <span class="required">*</span></span>
        <input type="text" name="houseadd-2" placeholder="Address-2" required>
      </label>
      <label>
        <span> City <span class="required">*</span></span>
        <input type="text" name="city" placeholder="Your City" required> 
      </label>
      <label>
        <span>State<span class="required">*</span></span>
        <input type="text" name="state" placeholder="Your State" required>
      </label>
      <label>
        <span>Postcode / ZIP <span class="required">*</span></span>
        <input type="text" name="zip" placeholder="Your Postcode" required> 
      </label>
      
        <button type="submit" class="btn btn-success">Make Order</button>
        <button class="truck-button">
          <span class="default">Complete Order</span>
          <span class="success">
              Order Placed
              <svg viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
              </svg>
          </span>
          <div class="truck">
              <div class="wheel"></div>
              <div class="back"></div>
              <div class="front"></div>
              <div class="box"></div>
          </div>
      </button>
      
      <!-- dribbble - twitter -->
      <a class="dribbble" href="https://dribbble.com/shots/9552163-Complete-order-button" target="_blank"><img src="https://cdn.dribbble.com/assets/dribbble-ball-mark-2bd45f09c2fb58dbbfb44766d5d1d07c5a12972d602ef8b32204d28fa3dda554.svg" alt=""></a>
      <a class="twitter" target="_blank" href="https://twitter.com/aaroniker_me"><svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72"><path d="M67.812 16.141a26.246 26.246 0 0 1-7.519 2.06 13.134 13.134 0 0 0 5.756-7.244 26.127 26.127 0 0 1-8.313 3.176A13.075 13.075 0 0 0 48.182 10c-7.229 0-13.092 5.861-13.092 13.093 0 1.026.118 2.021.338 2.981-10.885-.548-20.528-5.757-26.987-13.679a13.048 13.048 0 0 0-1.771 6.581c0 4.542 2.312 8.551 5.824 10.898a13.048 13.048 0 0 1-5.93-1.638c-.002.055-.002.11-.002.162 0 6.345 4.513 11.638 10.504 12.84a13.177 13.177 0 0 1-3.449.457c-.846 0-1.667-.078-2.465-.231 1.667 5.2 6.499 8.986 12.23 9.09a26.276 26.276 0 0 1-16.26 5.606A26.21 26.21 0 0 1 4 55.976a37.036 37.036 0 0 0 20.067 5.882c24.083 0 37.251-19.949 37.251-37.249 0-.566-.014-1.134-.039-1.694a26.597 26.597 0 0 0 6.533-6.774z"></path></svg></a>
        
        
    </form>
    <div class="Yorder">
      <table>
        <tr>
          <th colspan="2">Your order</th>
        </tr>
        <tr>
          <td>Payable Amount</td>
          <td class="total-value"><?php echo $_SESSION['payableAmount'];?></td>
        </tr>
        <tr>
          <td>Shipping</td>
          <td>Free shipping</td>
        </tr>
      </table><br>
      <div>
        
     <h3 style="text-align: center;">  Cash on Delivery is the only available method</h3>
      </div>
      <div>

      
       
      </div>
      <a href="shop.php">
      <button type="button" class="btn btn-success">Don't want to buy? So Continue Shopping</button>
      </a>
    </div>
    
   </div>
   
</div>
</body>
</html>

  <style>
      @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700');

body{
  font-family: 'Roboto Condensed', sans-serif;
  color: #262626;
  margin: 5% 0;
}
.container{
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 1200px)
{
  .container{
    max-width: 1140px;
  }
}
.d-flex{
  display: flex;
  flex-direction: row;
  background: #f6f6f6;
  border-radius: 0 0 5px 5px;
  padding: 25px;
}
form{
  flex: 4;
}
.Yorder{
  flex: 2;
}
.title{
  border-radius:5px 5px 0 0 ;
  padding: 20px;
  color: #f6f6f6;
}
h2{
  margin: 0;
  padding-left: 15px; 
}
.required{
  color: red;
}
label, table{
  display: block;
  margin: 15px;
}
label>span{
  float: left;
  width: 25%;
  margin-top: 12px;
  padding-right: 10px;
}
input[type="text"], input[type="tel"], input[type="email"], select
{
  width: 70%;
  height: 30px;
  padding: 5px 10px;
  margin-bottom: 10px;
  border: 1px solid #dadada;
  color: #888;
}
select{
  width: 72%;
  height: 45px;
  padding: 5px 10px;
  margin-bottom: 10px;
}
.Yorder{
  margin-top: 15px;
  height: 600px;
  padding: 20px;
  border: 1px solid #dadada;
}
table{
  margin: 0;
  padding: 0;
}
th{
  border-bottom: 1px solid #dadada;
  padding: 10px 0;
}
tr>td:nth-child(1){
  text-align: left;
  color: #2d2d2a;
}
tr>td:nth-child(2){
  text-align: right;
  color: #52ad9c;
}
td{
  border-bottom: 1px solid #dadada;
  padding: 25px 25px 25px 0;
}

p{
  display: block;
  color: #888;
  margin: 0;
  padding-left: 25px;
}
.Yorder>div{
  padding: 15px 0; 
}

button{
  width: 100%;
  margin-top: 10px;
  padding: 10px;
  border: none;
  border-radius: 30px;
  background: #52ad9c;
  color: #fff;
  font-size: 15px;
  font-weight: bold;
}

.truck-button {
  --color: #fff;
  --background: #2B3044;
  --tick: #16BF78;
  --base: #0D0F18;
  --wheel: #2B3044;
  --wheel-inner: #646B8C;
  --wheel-dot: #fff;
  --back: #6D58FF;
  --back-inner: #362A89;
  --back-inner-shadow: #2D246B;
  --front: #A6ACCD;
  --front-shadow: #535A79;
  --front-light: #FFF8B1;
  --window: #2B3044;
  --window-shadow: #404660;
  --street: #646B8C;
  --street-fill: #404660;
  --box: #DCB97A;
  --box-shadow: #B89B66;
  padding: 12px 0;
  width: 172px;
  cursor: pointer;
  text-align: center;
  position: relative;
  border: none;
  outline: none;
  color: var(--color);
  background: var(--background);
  border-radius: var(--br, 5px);
  -webkit-appearance: none;
  -webkit-tap-highlight-color: transparent;
  transform-style: preserve-3d;
  transform: rotateX(var(--rx, 0deg)) translateZ(0);
  transition: transform 0.5s, border-radius 0.3s linear var(--br-d, 0s);
}
.truck-button:before, .truck-button:after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 6px;
  display: block;
  background: var(--b, var(--street));
  transform-origin: 0 100%;
  transform: rotateX(90deg) scaleX(var(--sy, 1));
}
.truck-button:after {
  --sy: var(--progress, 0);
  --b: var(--street-fill);
}
.truck-button .default,
.truck-button .success {
  display: block;
  font-weight: 500;
  font-size: 14px;
  line-height: 24px;
  opacity: var(--o, 1);
  transition: opacity 0.3s;
}
.truck-button .success {
  --o: 0;
  position: absolute;
  top: 12px;
  left: 0;
  right: 0;
}
.truck-button .success svg {
  width: 12px;
  height: 10px;
  display: inline-block;
  vertical-align: top;
  fill: none;
  margin: 7px 0 0 4px;
  stroke: var(--tick);
  stroke-width: 2;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke-dasharray: 16px;
  stroke-dashoffset: var(--offset, 16px);
  transition: stroke-dashoffset 0.4s ease 0.45s;
}
.truck-button .truck {
  position: absolute;
  width: 72px;
  height: 28px;
  transform: rotateX(90deg) translate3d(var(--truck-x, 4px), calc(var(--truck-y-n, -26) * 1px), 12px);
}
.truck-button .truck:before, .truck-button .truck:after {
  content: "";
  position: absolute;
  bottom: -6px;
  left: var(--l, 18px);
  width: 10px;
  height: 10px;
  border-radius: 50%;
  z-index: 2;
  box-shadow: inset 0 0 0 2px var(--wheel), inset 0 0 0 4px var(--wheel-inner);
  background: var(--wheel-dot);
  transform: translateY(calc(var(--truck-y) * -1px)) translateZ(0);
}
.truck-button .truck:after {
  --l: 54px;
}
.truck-button .truck .wheel,
.truck-button .truck .wheel:before {
  position: absolute;
  bottom: var(--b, -6px);
  left: var(--l, 6px);
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: var(--wheel);
  transform: translateZ(0);
}
.truck-button .truck .wheel {
  transform: translateY(calc(var(--truck-y) * -1px)) translateZ(0);
}
.truck-button .truck .wheel:before {
  --l: 35px;
  --b: 0;
  content: "";
}
.truck-button .truck .front,
.truck-button .truck .back,
.truck-button .truck .box {
  position: absolute;
}
.truck-button .truck .back {
  left: 0;
  bottom: 0;
  z-index: 1;
  width: 47px;
  height: 28px;
  border-radius: 1px 1px 0 0;
  background: linear-gradient(68deg, var(--back-inner) 0%, var(--back-inner) 22%, var(--back-inner-shadow) 22.1%, var(--back-inner-shadow) 100%);
}
.truck-button .truck .back:before, .truck-button .truck .back:after {
  content: "";
  position: absolute;
}
.truck-button .truck .back:before {
  left: 11px;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 2;
  border-radius: 0 1px 0 0;
  background: var(--back);
}
.truck-button .truck .back:after {
  border-radius: 1px;
  width: 73px;
  height: 2px;
  left: -1px;
  bottom: -2px;
  background: var(--base);
}
.truck-button .truck .front {
  left: 47px;
  bottom: -1px;
  height: 22px;
  width: 24px;
  -webkit-clip-path: polygon(55% 0, 72% 44%, 100% 58%, 100% 100%, 0 100%, 0 0);
  clip-path: polygon(55% 0, 72% 44%, 100% 58%, 100% 100%, 0 100%, 0 0);
  background: linear-gradient(84deg, var(--front-shadow) 0%, var(--front-shadow) 10%, var(--front) 12%, var(--front) 100%);
}
.truck-button .truck .front:before, .truck-button .truck .front:after {
  content: "";
  position: absolute;
}
.truck-button .truck .front:before {
  width: 7px;
  height: 8px;
  background: #fff;
  left: 7px;
  top: 2px;
  -webkit-clip-path: polygon(0 0, 60% 0%, 100% 100%, 0% 100%);
  clip-path: polygon(0 0, 60% 0%, 100% 100%, 0% 100%);
  background: linear-gradient(59deg, var(--window) 0%, var(--window) 57%, var(--window-shadow) 55%, var(--window-shadow) 100%);
}
.truck-button .truck .front:after {
  width: 3px;
  height: 2px;
  right: 0;
  bottom: 3px;
  background: var(--front-light);
}
.truck-button .truck .box {
  width: 13px;
  height: 13px;
  right: 56px;
  bottom: 0;
  z-index: 1;
  border-radius: 1px;
  overflow: hidden;
  transform: translate(calc(var(--box-x, -24) * 1px), calc(var(--box-y, -6) * 1px)) scale(var(--box-s, 0.5));
  opacity: var(--box-o, 0);
  background: linear-gradient(68deg, var(--box) 0%, var(--box) 50%, var(--box-shadow) 50.2%, var(--box-shadow) 100%);
  background-size: 250% 100%;
  background-position-x: calc(var(--bx, 0) * 1%);
}
.truck-button .truck .box:before, .truck-button .truck .box:after {
  content: "";
  position: absolute;
}
.truck-button .truck .box:before {
  content: "";
  background: rgba(255, 255, 255, 0.2);
  left: 0;
  right: 0;
  top: 6px;
  height: 1px;
}
.truck-button .truck .box:after {
  width: 6px;
  left: 100%;
  top: 0;
  bottom: 0;
  background: var(--back);
  transform: translateX(calc(var(--hx, 0) * 1px));
}
.truck-button.animation {
  --rx: -90deg;
  --br: 0;
}
.truck-button.animation .default {
  --o: 0;
}
.truck-button.animation.done {
  --rx: 0deg;
  --br: 5px;
  --br-d: .2s;
}
.truck-button.animation.done .success {
  --o: 1;
  --offset: 0;
}

html {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
}

* {
  box-sizing: inherit;
}
*:before, *:after {
  box-sizing: inherit;
}

body {
  min-height: 100vh;
  display: flex;
  font-family: "Inter UI", "Inter", Arial;
  justify-content: center;
  align-items: center;
  background: #ECEFFC;
}
body .dribbble {
  position: fixed;
  display: block;
  right: 20px;
  bottom: 20px;
}
body .dribbble img {
  display: block;
  height: 28px;
}
body .twitter {
  position: fixed;
  display: block;
  right: 64px;
  bottom: 14px;
}
body .twitter svg {
  width: 32px;
  height: 32px;
  fill: #1da1f2;
}
button:hover{
  cursor: pointer;
  background: #428a7d;
}
.total-value:before {
  content: '₹';
}
  </style>

  <script>
    document.querySelectorAll('.truck-button').forEach(button => {
    button.addEventListener('click', e => {

        e.preventDefault();
        
        let box = button.querySelector('.box'),
            truck = button.querySelector('.truck');
        
        if(!button.classList.contains('done')) {
            
            if(!button.classList.contains('animation')) {

                button.classList.add('animation');

                gsap.to(button, {
                    '--box-s': 1,
                    '--box-o': 1,
                    duration: .3,
                    delay: .5
                });

                gsap.to(box, {
                    x: 0,
                    duration: .4,
                    delay: .7
                });

                gsap.to(button, {
                    '--hx': -5,
                    '--bx': 50,
                    duration: .18,
                    delay: .92
                });

                gsap.to(box, {
                    y: 0,
                    duration: .1,
                    delay: 1.15
                });

                gsap.set(button, {
                    '--truck-y': 0,
                    '--truck-y-n': -26
                });

                gsap.to(button, {
                    '--truck-y': 1,
                    '--truck-y-n': -25,
                    duration: .2,
                    delay: 1.25,
                    onComplete() {
                        gsap.timeline({
                            onComplete() {
                                button.classList.add('done');
                            }
                        }).to(truck, {
                            x: 0,
                            duration: .4
                        }).to(truck, {
                            x: 40,
                            duration: 1
                        }).to(truck, {
                            x: 20,
                            duration: .6
                        }).to(truck, {
                            x: 96,
                            duration: .4
                        });
                        gsap.to(button, {
                            '--progress': 1,
                            duration: 2.4,
                            ease: "power2.in"
                        });
                    }
                });
                
            }
            
        } else {
            button.classList.remove('animation', 'done');
            gsap.set(truck, {
                x: 4
            });
            gsap.set(button, {
                '--progress': 0,
                '--hx': 0,
                '--bx': 0,
                '--box-s': .5,
                '--box-o': 0,
                '--truck-y': 0,
                '--truck-y-n': -26
            });
            gsap.set(box, {
                x: -24,
                y: -6
            });
        }

    });
});

      document.querySelector('.btn2').style.display = 'none'; 
document.querySelector('.btn1').addEventListener('click', showBtn); 
 
function showBtn(e) { 
 document.querySelector('.btn2').style.display = 'block'; 
 e.preventDefault(); 
} 


  </script>
