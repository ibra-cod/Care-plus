
<?php 
use App\App\App;

// (new App())->requireIt('requests/MysqlRequest', PUBLIC_PATH)

?> 

<div class="container mx-auto rounded-sm flex mt-40 justify-around items-center p-10 ">
    <div class="formSide  text-black font-semibold  w-full ">
        <h1 class="text-xl ">Welcome Back</h1>
        <span>Please enter yout details and log in</span>
        <div class="text max-w-sm mx-auto ">
          <form class="max-w-sm mx-auto  text-dark" method="post">
            <div class="mb-5">
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
              <input name="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required />
            </div>
            
            <div class="mb-5">
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Your password</label>
              <input name="password" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>

            <!-- <div class="flex items-start mb-5">
              <div class="flex items-center h-5">
                <input name="checkbox" id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
              </div>
              <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
            </div> -->
            <button name="submit" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
        </div>

    </div>

     <div class="Img  w-2/4 hidden md:block  ">
          <img class=" mx-auto mr-auto" src="/images/undraw_secure_login_pdn4.svg" alt="">
    </div>
    

</div>
