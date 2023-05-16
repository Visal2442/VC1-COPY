<?php require "views/partials/head.php" ?>
<?php require "controllers/login/login.account.controller.php" ?>

<div class="flex flex-row items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
    <!-- Login Form -->
    <div class="flex w-2/5">
        <div id="login" class="container m-auto login text-white p-4">
            <p class="text-red-500 text-lg text-center rounded <?= empty($account_error) ? "hidden" : "bg-red-300 p-3" ?>"><?= $account_error; ?></p>
            <div class="">
                <form action="" class="form w-full p-5 flex flex-col justify-center items-center gap-8" method='post'>
                    <span class="title text-center font-bold text-4xl">Login</span>
                    <div class="flex flex-col w-full">
                        <div class="form_control relative overflow-hidden">
                            <input required="" class="bg-transparent border-none outline-none text-white w-full input p-2.5" type="text" name="username">
                            <label class="label text-gray-300">Username</label>
                        </div>
                    </div>
                    <div class="flex flex-col w-full">
                        <div class="form_control relative overflow-hidden">
                            <input required="" class="bg-transparent border-none outline-none text-white w-full input p-2.5" type="email" name="email">
                            <label class="label text-gray-300">Email Address</label>
                        </div>
                    </div>
                    <div class="flex flex-col w-full">
                        <div class="form_control relative overflow-hidden">
                            <input required="" class="bg-transparent border-none outline-none text-white w-full input p-2.5" type="password" name="password">
                            <label class="label text-gray-300">Password</label>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="bg-transparent w-full border-none outline-none text-white">Login</button>
                    <span class="bottom_text text-sm">Don't have an account ?<a href="/register" class=" font-bold ml-2 hover:text-blue-500">Sign Up</a></span>
                </form>
            </div>
        </div>
    </div>
</div>