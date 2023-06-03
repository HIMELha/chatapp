<?php
// if(!isset($_SESSION['email'])){
//    header("location: login.php");
// }
?>

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
         <div class="flex justify-between items-center">
            <div class="flex relative">
                 <img src="images/profile.jpg" class=" w-10 h-10 rounded-full" alt="">
                 <h2 class="py-2 ml-2  text-md text-gray-700">F-user</h2>
                 <div class="green"><p class="text-[10px] w-full absolute left-5">online</p></div>
            </div>
            <div>
                <a href="logout.php" class="p-2 bg-gray-700 text-white rounded-sm hover:bg-gray-800"> Logout </a>
            </div>
         </div>
         <div class="flex justify-center items-center py-2 mt-2 mb-2 ">
          <h3 class="text-[15px] text-gray-700">Find your friends</h3>
          <input class="border py-1 px-2 w-auto ml-2 text-[14px] rounded outline-none  max-w-[200px]" type="search" placeholder="Search here..." >
          <i class="fa-solid fa-search p-2 bg-gray-700 text-white rounded-sm"></i>
         </div>

          <div class="scroll-auto message-box overflow-y-auto max-h-[400px]">
            
         <div class="w-full h-fit flex items-center  p-2  border-b border-gray-400">
            <div class="relative">
               <img src="images/images (10).jfif" class=" w-10 h-10 rounded-full" alt="">
            <div class="green"></div>
            </div>
            <div>
                <button class="msg-click cursor-pointer font-bold text-[15px] ml-3">New message</button>
            </div>
         </div>

         <div class="w-full h-fit flex items-center p-2  border-b border-gray-400">
            <div class="relative">
               <img src="images/images (10).jfif" class=" w-10 h-10 rounded-full" alt="">
            <div class="green"></div>
            </div>
            <div>
                <p class="font-bold text-[15px] ml-3">New message</p>
            </div>
         </div>

        <div class="w-full h-fit flex items-center p-2  border-b border-gray-400">
            <div class="relative">
               <img src="images/images (10).jfif" class=" w-10 h-10 rounded-full" alt="">
            <div class="green"></div>
            </div>
            <div>
                <p class="font-bold text-[15px] ml-3">New message</p>
            </div>
         </div>
         <div class="w-full h-fit flex items-center p-2  border-b border-gray-400">
            <div class="relative">
               <img src="images/images (10).jfif" class=" w-10 h-10 rounded-full" alt="">
            <div class="green"></div>
            </div>
            <div>
                <p class="font-bold text-[15px] ml-3">New message</p>
            </div>
         </div>
         <div class="w-full h-fit flex items-center p-2  border-b border-gray-400">
            <div class="relative">
               <img src="images/images (10).jfif" class=" w-10 h-10 rounded-full" alt="">
            <div class="green"></div>
            </div>
            <div>
                <p class="font-bold text-[15px] ml-3">New message</p>
            </div>
         </div>
         <div class="w-full h-fit flex items-center p-2  border-b border-gray-400">
            <div class="relative">
               <img src="images/images (10).jfif" class=" w-10 h-10 rounded-full" alt="">
            <div class="green"></div>
            </div>
            <div>
                <p class="font-bold text-[15px] ml-3">New message</p>
            </div>
         </div>
         <div class="w-full h-fit flex items-center p-2  border-b border-gray-400">
            <div class="relative">
               <img src="images/images (10).jfif" class=" w-10 h-10 rounded-full" alt="">
            <div class="green"></div>
            </div>
            <div>
                <p class="font-bold text-[15px] ml-3">New message</p>
            </div>
         </div>
         <div class="w-full h-fit flex items-center p-2  border-b border-gray-400">
            <div class="relative">
               <img src="images/images (10).jfif" class=" w-10 h-10 rounded-full" alt="">
            <div class="green"></div>
            </div>
            <div>
                <p class="font-bold text-[15px] ml-3">New message</p>
            </div>
         </div>

    </div>
    <script>
      
    </script>
</body>
</html>