

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/dist/output.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-[#2a2a72]">
<form class="bg-[#4c2885] box flex flex-col gap-3 w-[500px] h-[300px] justify-center items-center left-[50%] top-[50%] -translate-x-[50%] -translate-y-[50%] absolute rounded-3xl"
action="result.php" method="post" enctype="multipart/form-data">
        <h1 class="inline-block text-3xl text-[#000000]">Enter Github Username</h1>
        <input type="text1" name="name1"placeholder="username" class="w-[350px] h-[40px] border-2 border-[#000000] bg-[#4c2885] rounded-xl p-2 text-[#000000] placeholder:text-[#000000]">
        <div class="flex  w-[350px] gap-2 relative">
            <input type="submit" name="submit1" value="repos" class="border-black border-2 rounded-xl p-2 w-[33.333%] cursor-pointer">
            <input type="submit" name="submit2" value="followers" class="border-black border-2 rounded-xl p-2 w-[33.333%] cursor-pointer">
            <input type="submit" name="submit3" value="both"  class="border-black border-2 rounded-xl p-2 w-[33.333%] cursor-pointer">
        </div>

</form>
    <?php
    //include 'followers.php';
    ?>
</body>
</html>