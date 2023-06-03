<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container block mx-auto w-full h-screen flex items-center justify-center">
       <div class="w-[400px] border py-4 px-4 shadow-2xl rounded-md">
         <div class="flex justify-between items-center ">
            <div class="flex relative items-center">
                 <a href="message.php" class="p-2"><i class="fa-solid fa-arrow-left mr-2"></i></a>
                 <img src="images/profile.jpg" class=" w-10 h-10 rounded-full" alt="">
                 <h2 class="py-2 ml-2  text-md text-gray-700">F-user</h2>
                 <div class="green bottom-0 left-16"><p class="text-[10px] w-full absolute left-5">online</p></div>
            </div>
            <div class="info">
                <a href=""><i class="fa-solid fa-circle-info text-lg p-1 text-gray-600"></i></a>
            </div>
         </div>

          <div class="scroll-auto message-box overflow-y-auto mt-2 px-3 py-2 min-h-[400px] max-h-[400px] ">

           <div class="message-m my-2">
            <div class="flex relative items-center justify-end">
                 <p class="ml-2 p-1 px-2 bg-gray-600 text-sm text-white rounded-sm max-w-[250px]"">good, comngratulations</p>
            </div>
          </div>

          <div class="message-o">
            <div class="flex relative items-end my-2">
                 <img src="images/profile.jpg" class="flex justify-end items-end w-6 h-6 rounded-full mb-[4px]" alt="">
                 <p class="ml-2 p-1 px-2 max-w-[250px] bg-gray-200 rounded-sm text-sm">thank you for your support</p>
            </div>
          </div>

          <div class="message-m my-2">
            <div class="flex relative items-center justify-end">
                 <p class="ml-2 p-1 px-2 bg-gray-600 text-sm text-white rounded-sm max-w-[250px]"">good, Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam optio molestias blanditiis nam nobis! Dolorem quae consequuntur perferendis, nisi neque ratione voluptatem corporis sapiente est ullam. Veritatis doloribus suscipit, error, ratione sequi neque perferendis voluptate blanditiis, minus ipsum fugit nulla! comngratulations</p>
            </div>
          </div>

              <div class="message-o">
            <div class="flex relative items-end my-2">
                 <img src="images/profile.jpg" class="flex justify-end items-end w-6 h-6 rounded-full mb-[4px]" alt="">
                 <p class="ml-2 p-1 px-2 max-w-[250px] bg-gray-200 rounded-sm text-sm">thank you for your support</p>
            </div>
          </div>

          <div class="message-m my-2">
            <div class="flex relative items-center justify-end">
                 <p class="ml-2 p-1 px-2 bg-gray-600 text-sm text-white rounded-sm max-w-[250px]"">good, Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam optio molestias blanditiis nam nobis! Dolorem quae consequuntur perferendis, nisi neque ratione voluptatem corporis sapiente est ullam. Veritatis doloribus suscipit, error, ratione sequi neque perferendis voluptate blanditiis, minus ipsum fugit nulla! comngratulations</p>
            </div>
          </div>

          <div class="message-o">
            <div class="flex relative items-end my-2">
                 <img src="images/profile.jpg" class="flex justify-end items-end w-6 h-6 rounded-full mb-[4px]" alt="">
                 <p class="ml-2 p-1 px-2 max-w-[250px] bg-gray-200 rounded-sm text-sm">thank you for your support</p>
            </div>
          </div>
                     <div class="message-m my-2">
            <div class="flex relative items-center justify-end">
                 <p class="ml-2 p-1 px-2 bg-gray-600 text-sm text-white rounded-sm max-w-[250px]"">good, comngratulations</p>
            </div>
          </div>

          <div class="message-o">
            <div class="flex relative items-end my-2">
                 <img src="images/profile.jpg" class="flex justify-end items-end w-6 h-6 rounded-full mb-[4px]" alt="">
                 <p class="ml-2 p-1 px-2 max-w-[250px] bg-gray-200 rounded-sm text-sm">ok, let's see</p>
            </div>
          </div>
          </div>
         <div class="flex items-center justify-between w-full px-4 py-2 bg-gray-300">
             <div>
                <i class="fa-solid fa-folder-plus text-lg text-gray-700"></i>
             </div>
             <div>
                <input type="text" name="message" placeholder="Aa" class="rounded focus:outline-2 focus:outline-blue-400 focus:border-blue-400 py-[2px] px-2">
             <button type="submit" class="text-white rounded-sm py-[2px] px-2 bg-gray-700 hover:bg-gray-800 border-1 ">Send</button>
         </div>
             </div>
             
         </div>
    </div>
    </div>
    <script src="script.js"></script>
</body>
</html>