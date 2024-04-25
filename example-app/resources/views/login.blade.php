<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
<section class="flex">
   <header class="header">
    <section class="flex items-center justify-between p-4">

        <img src="images/lol.jpg" class="image w-10 h-10 rounded-full mr-2" alt="">
        <a href="{{url('home')}}" class="logo">CodeCraftHub</a> 
 
       
    </section>
</header>

      <form action="search.php" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>
      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name">Hugaboga</h3>
         <p class="role">student</p>
         <a href="{{url('profile')}}"class="btn">view profile</a>
         <div class="flex-btn">
            <a href="{{url('login')}}" class="option-btn outline outline-offset-2 outline-pink-500">login</a>
            <a href="{{url('register')}}" class="option-btn">register</a>
         </div>
      </div>

   </section>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name">shaikh anas</h3>
      <p class="role">studen</p>
      <a href="{{url('profile')}}" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="{{url('home')}}" ><i class="fas fa-home"></i><span>home</span></a>
      <a href="{{url('about')}}"><i class="fas fa-question"></i><span>about</span></a>
      <a href="{{url('courses')}}"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="{{url('teachers')}}"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <a href="{{url('contact')}}"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>

<section class="form-container">
<form action="" method="post" enctype="multipart/form-data">
    <h3>login now</h3>
      <p>your email <span>*</span></p>
      <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
      <p>your password <span>*</span></p>
      <input type="password" name="pass" placeholder="enter your password" required maxlength="20" class="box">
       <input type="submit" value="login new" name="submit" class="btn">
      </form>
</section>
















<footer class="footer bg-gray-100 py-4 text-center">
   <p class="text-sm text-gray-500">&copy; 2024 <span class="font-bold">CodeCraftHub</span>. All rights reserved.</p>
</footer>


<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>