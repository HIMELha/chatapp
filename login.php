<?php
if(isset($_SESSION['email'])){
   header("location: message.php");
}
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
       <div class="w-[400px] py-4 px-4 shadow rounded-md">
         <h2 class="text-center p-2 text-lg text-gray-700"><i class="fa-solid fa-comments mr-1"></i> iChat App</h2>
         <div class="py-2 px-4  gap-4">
            <p class="text-gray-600 pb-2 text-center text-md">Login </p>
            <form method="post" class="flex flex-col jusify-center p-2">

               <div class="text-sm bg-red-100 w-full py-1 mb-2 rounded-sm hidden"><p class="text-center text-red-600 ">Alert! error meesage</p></div>
                <div>
                <label>Email</label>
                <input type="text" name="email" placeholder="enter your email" class="w-full rounded-sm border border-gray-400 outline-sky-500 text-sm px-2 py-1 mb-1">
                </div>
                <div class="relative">
                <label>password</label>
                <input type="cpassword" name="password" placeholder="enter password" class="relative w-full rounded-sm border border-gray-400 outline-sky-500 text-sm px-2 py-1 mb-1">
                <i class="fa-solid fa-eye absolute right-3 bottom-3"></i>
                </div>
                <div >
                <button type="submit" name="submit" class="py-1 mt-4 w-full bg-blue-500 rounded-sm text-white hover:bg-blue-600">Submit</button>
                </div>
                <div>
                  <p class="py-2 text-[15px]">Don't Have account? <a href="register.php" class="hover:underline text-blue-600">create account</a></p>
                </div>
            </form>
         </div>
       </div>
    </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $(document).ready(function(){
        $("#form").on("submit", function(e){
          e.preventDefault();
          var form = new FormData(this);         
          $.ajax({
            url: "login1.php",
            type: "POST",
            data: form,
            contentType: false,
            processData: false,
            success: function(data){
            $("#err-msg").show().html(data);
            if(data == 'success'){
              location.href = "message.php"
            };
            }
          });
        })
        
      });
    </script>
</body>
</html>