<?php 
use App\App\App;
 $app = new App ();;
; ?>

<header class=" bg-indigo-700  font-bold min-h-96">
    <?php $app->requireIt('includes/nav');?>
    <div class="text-center flex justify-center flex-col  mt-20">
        <p class="text-white">Find your appointment</p>
        <p class="text-white">Find your appointment</p>
        <form action="" class="p-5 m-5">
                <div class="">
                        <div class="">
                            <input placeholder="Enter a profession" type="text" class=" my-5 px-20 py-3 rounded-md hover:ring-black outline-none">
                            <input placeholder="Enter a city" type="text" class="px-20 py-3  rounded-md outline-none ring-2 focus:ring-indigo-500">
                        </div>
                        <div>
                               <button type="submit" class=" bg-black sm:my-10 px-24 py-3 rounded-md text-white ">Search</button>  
                        </div>
                </div>
        </form>
    </div>
</header>