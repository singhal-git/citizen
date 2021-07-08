<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<style>

* {
      margin: 0;
      padding: 0;
    }

     #navbar {
      display: flex;
      align-items: center;
      position: relative;

    }


    .logo {
      margin: 1rem 1rem;
      float: left;

    }

    .logo img {
      width: 4rem;
    }

    #navbar ul {
      display: flex;

    }

    #navbar::before {
      content: "";
      background-color: black;
      position: absolute;
      height: 100%;
      width: 100%;
      z-index: -1;
      opacity: 0.4;

    }

    #navbar ul li {
      list-style: none;
      font-size: 1.25rem;

    }

    

    #navbar ul li a {
      color: white;
      display: block;
      padding: 3px 22px;
      text-decoration: none;
      font-family: cursive;
      font-style: bold;
      
      

    }

    #navbar ul li a:hover,
    #navbar ul li a.active {
      color: black;
      background-color: white;
      display: block;
      padding: 3px 22px;
      text-decoration: none;
      border-radius: 1rem;
      font-family: cursive;
      font-style: bold;
      

    }

    .menu {
      color: white;

    }

    .menu i {
      font-size: 20px;
      display: none;

      margin-left: 21rem;
      margin-top: -0.5rem;
      position: absolute;

    }

    #check {
      display: none;
    }


    /* Services Section */
    body{
       background-image: url('images/bg.png');
       background-repeat: no-repeat;
       background-size: cover;
       background-attachment: fixed;
       
    }

    *{
        box-sizing: border-box;
    }
#services{
    margin: 34px;
    display: flex;

}
#services .box{ 
   
    padding: 34px;
    margin: 2px 55px;
    border-radius: 28px;
    background:#38b6ff;
    margin-bottom: 20px;
}

#services .box img{ 
   height: 85px;
   margin: auto;
   display: block;
}

#services .box p{
    font-family: 'Bree Serif', serif;

} 

.h-primary{
    font-family: 'Bree Serif', serif;
    font-size: 3.8rem;
    padding: 12px;
    
    
    font-family: 'Otomanopee One', sans-serif;
}

.h-secondary{
    font-family: 'Bree Serif', serif;
    font-size: 1.3rem;
    padding: 12px;
    color: white ;
    align-items: center;
}
.h-tertiary{
    font-family: 'Otomanopee One', sans-serif;
}



.center{
    text-align: center;
    color: white ;
}

#services .box1{ 
   
   padding: 34px;
   margin: 2px 55px;
   border-radius: 28px;
   background: #ff1616;
   margin-bottom: 20px;
}
#services .box1 img{ 
   height: 80px;
   margin: auto;
   display: block;
}


a.btn {
    text-decoration: none;
    background: white;
    padding: 13px;
    border-radius: 9px;
    /* text-align: center; */
    
    color: #38b6ff;
    font-size: 19px;
    text-align: center;
    margin-top: 0.5rem;
    
}

a.btn1 {
    text-decoration: none;
    background: white;
    padding: 13px;
    border-radius: 9px;
    /* text-align: center; */
    
    color:#ff1616;
    font-size: 19px;
    text-align: center;
    margin-top: 0.5rem;
}



a.btn:hover,a.btn1:hover{
   color: white;
   background-color: rgba(0, 0, 0, 0.678);
}

.container{
    display: flex;
    align-items: center;
    justify-content: center;
}



@media screen and (max-width: 650px){
    .menu i {

display: block;

}

.logo {
        margin: 1rem 1rem;

      }

      .logo img {
        width: 3rem;
      }

      #navbar ul {


        flex-direction: column;
        position: fixed;
        top: 5rem;
        align-items: center;
        justify-content: flex-start;
        width: 100%;
        height: 100vh;
        background: black;
        left: 100%;
        transition: 0.3s all ease;
      }

      #navbar ul li {

        margin: 38px;
        font-size: 20px;
      }




      #check:checked~ul {
        left: 0;
      }
    #services{
    margin: 34px;
    display: flex;
    flex-direction: column;

}
 #services .box img {
    height: 62px;}

   #services .box1 img {
    height: 62px;}

    .h-secondary{
        padding: 0px;
    }
}


  



@media screen and (max-width: 360px){
    #services{
    margin: 34px;
    display: flex;
    flex-direction: column;

}
 #services .box img {
    height: 62px;}

   #services .box1 img {
    height: 55px;}

    .h-secondary{
        padding: 0px;
        font-size: 1.05rem;
    }

    .h-primary {
   
    font-size: 2.8rem;}


    #services .box {
    padding: 20px;
    margin: 2px 55px;
    border-radius: 28px;
    background: #38b6ff;
    margin-bottom: 20px;}

    #services .box1 {
    padding: 20px;
    margin: 2px 55px;
    border-radius: 28px;
    background: #ff1616;
    margin-bottom: 20px;}
}

.menu i {
    
    margin-left: 18rem;
    
} 
 


   

</style>
<body>

    <nav id="navbar">
        <input type="checkbox" id="check">
        <label for="check" class="menu">
          <i class="fas fa-bars"></i>
        </label>
        <div class="logo">
          <img src="images/logo.png" alt="logo">
        </div>
        <ul>
          <li class="item"><a href="#">Home</a></li>
          
          <li class="item"><a class="active" href="#">Join Our Team</a></li>
          <li class="item"><a href="#">Contact us</a></li>
    
        </ul>
      </nav>

    <section id="services-container">
        <h1 class="h-primary center">Our Societies</h1>
        <h2 class="h-tertiary center">"We rise by lifting others"</h2>
        
        <div id="services">
            <div class="box">
                <img src="images/game.PNG" alt="">
                <h2 class="h-secondary center">Game Developement</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et qui, repudiandae similique nam, recusandae quidem ab asperiores ex, aut fugit labore veritatis facere?
                    sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                    voluptas beatae facilis labore, omnis sint quae eum.</p>
                 <div class="container">
                <a href="#" class="btn"><b>Join Team</b></a>
                 </div>
            </div>
            <div class="box1">
                <img src="images/web.PNG" alt="">
                <h2 class="h-secondary center">Web Developement</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde laudantium a incidunt animi ad, ab dignissimos vero? Unde numquam odit repudiandae perferendis nisi.

                    sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                    voluptas beatae facilis labore, omnis sint quae eum.</p>
                    <div class="container">
                    <a href="#" class="btn1"><b> Join Team</b> </a>
                    </div>
            </div>
            
        </div>
    </section>
    
    
</body>
</html>