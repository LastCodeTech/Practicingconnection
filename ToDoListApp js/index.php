<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://kit.fontawesome.com/39c5fdd9a0.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">
    <div>
        <h1 class="text-2xl md:text-3xl font-bold capitalize text-center  py-10 " id="topic">My to do list</h1>
        <div>
            <div id="insertedHere">
                 <div class="bg-white flex gap-5 py-2 px-3 rounded-2xl md:gap-10 items-center mx-5 my-3">
        <div class="flex items-center">
          <input
            type="checkbox"
            class="appearance-none w-5 h-5 md:h-8 md:w-8 border-2 border-gray-400 rounded-md bg-white checked:bg-blue-600 checked:border-transparent peer"
          />
          <svg
            class="absolute w-4 h-4 md:h-7 md:w-7 text-white pointer-events-none hidden peer-checked:block"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="4"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <polyline points="20 6 9 17 4 12"></polyline>
          </svg>
        </div>
        <h1 class="text-base md:text-xl text-gray-700" id="todotext">
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, corporis. Unde, odio? Eum, minima explicabo eveniet autem veniam ex possimus impedit eligendi rerum architecto laudantium, animi harum velit expedita cumque!
        </h1>
        <button class="deleteBtn border-1 rounded-xl bg-[#FB4141] text-white font-semi-bold hover:bg-[#FF9B2F] text-base py-1 px-2 md:text-xl capitalize">Delete</button>
</div>
            </div>

            <div class="bg-white flex items-center justify-between px-3 py-2 mx-5 my-3 rounded-2xl">
                <h1 class="text-base md:text-xl capitalize font-semi-bold text-gray-700">Add a new To Do ...</h1>
                <button class="border-1 rounded-xl bg-[#78C841] text-white font-semi-bold hover:bg-[#B4E50D] text-base py-1 px-2 md:text-xl capitalize "><a href='create.php'>add task</a></button>
            </div>

        </div>


    </div>
    <script src="index.js"></script>
</body>
</html>