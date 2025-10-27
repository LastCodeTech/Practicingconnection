<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<script src="https://kit.fontawesome.com/39c5fdd9a0.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libertinus+Serif+Display&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
</head>
<body>
   <div class="main-wrapper flex justify-center items-center min-h-screen bg-orange-100 text-white px-4 sm:px-6 lg:px-8">
  <div class="card-wrapper w-full max-w-md">
    <div class="card">
  
      <!-- end of login card -->
         <div class="signup-card bg-orange-600 py-8 px-6 sm:px-10 rounded-3xl shadow-lg">
        <h1 class="text-3xl font-bold capitalize text-center mb-6">signup</h1>

        <form action="process.php" method="post" class="space-y-6">
          <!-- Username -->
          <div data-aos="fade-down">
            <label for="signupUsername" class="block mb-2 text-lg font-semibold capitalize ml-1">username</label>
            <input
              type="text"
              id="signupUsername"
              name="signupUsername"
              placeholder="username"
              class="w-full text-base font-medium bg-yellow-200 outline-none h-11 rounded-2xl px-5 text-slate-950 focus:ring-2 focus:ring-emerald-400 transition"
            />
          </div>

          <!-- Password -->
          <div data-aos="fade-up">
            <label for="signupPassword" class="block mb-2 text-lg font-semibold capitalize ml-1">password</label>
            <div class="relative">
              <input
              
                type="password"
                id="signupPassword"
                name="signupPassword"
                placeholder="password"
                class="pass w-full text-base font-medium bg-yellow-200 outline-none h-11 rounded-2xl px-5 pr-10 text-slate-950 focus:ring-2 focus:ring-emerald-400 transition"
              />
              <div class="absolute right-3 top-1/2 transform -translate-y-1/2">
                
                <div class="eyeContainer"><button class="fa-solid fa-eye-slash text-xl text-slate-800 cursor-pointer visibilityBtn"></button></div>
              </div>
            </div>
          </div>
          <!--Confirm Password -->
          <div data-aos="fade-up">
            <label for="signupConfirmPassword" class="block mb-2 text-lg font-semibold capitalize ml-1">password</label>
            <div class="relative">
              <input
              
                type="password"
                id="signupConfirmPassword"
                name="signupConfirmPassword"
                placeholder="Confirm password"
                class="pass w-full text-base font-medium bg-yellow-200 outline-none h-11 rounded-2xl px-5 pr-10 text-slate-950 focus:ring-2 focus:ring-emerald-400 transition"
              />
              <div class="absolute right-3 top-1/2 transform -translate-y-1/2">
                
                <div class="eyeContainer"><button class="fa-solid fa-eye-slash text-xl text-slate-800 cursor-pointer visibilityBtn"></button></div>
              </div>
            </div>
          </div>

          <!-- Submit Button -->
          <div data-aos="fade-right" class="flex justify-center">
            <input
              type="submit"
              value="Signup"
              class="text-lg font-semibold capitalize border-2 border-slate-950 rounded-xl py-2 px-6 bg-orange-400 hover:bg-orange-700 hover:scale-105 transition-all duration-300 cursor-pointer"
            />
          </div>
        </form>

        <!-- sign in Link -->
      <h1 class="text-md font-medium capitalize text-center mt-6 " data-aos="">
          already have an account ?
          <a href="login.html" class="no-underline text-emerald-400 hover:text-white transition-colors ">login up here</a>
        </h1>
      </div>

    </div>
  </div>
</div>

<script>
    AOS.init();
</script>




</body>
</html>