<?php require "views/partials/head.php" ?>
<?php require "controllers/register/register.account.controller.php" ?>

<div class="flex flex-row items-center justify-center px-6 py-8 mx-auto mt-6 lg:py-0">
    <!-- Register form  -->
    <div class="flex w-2/5">
        <div id="login" class="container m-auto login text-white p-4">
            <div>
                <form action="#" method="post" class="form w-full p-5 flex flex-col justify-center items-center gap-8">
                    <span class="title text-center font-bold text-4xl">Sign Up</span>
                    <div class="flex flex-col w-full">
                        <div class="form_control relative overflow-hidden">
                            <input type="text" name="username" class="bg-transparent border-none outline-none text-white w-full input p-2.5" required="">
                            <label class="label text-gray-300">Username</label>
                        </div>
                        <small class="text-red-500"> <?= $username_error; ?></small>
                    </div>
                    <div class="flex flex-col w-full">
                        <div class="form_control relative overflow-hidden">
                            <input type="email" name="email" class="bg-transparent border-none outline-none text-white w-full input p-2.5" required="">
                            <label class="label text-gray-300">Email</label>
                        </div>
                        <small class="text-red-500"><?= $email_error; ?></small>
                        <p class="text-red-500"><?= $isTaken_error; ?></p>
                    </div>
                    <div class="flex flex-col w-full">
                        <div class="form_control relative overflow-hidden">
                            <input type="password" name="password" class="bg-transparent border-none outline-none text-white w-full input p-2.5" required="">
                            <label class="label text-gray-300">Password</label>
                        </div>
                        <small class="text-red-500"> <?= $password_error; ?></small>
                    </div>
                    <div class="flex flex-col w-full">
                        <div class="form_control relative overflow-hidden">
                            <input type="password" name="confirm_password" class="bg-transparent border-none outline-none text-white w-full input p-2.5" required="">
                            <label class="label text-gray-300">Confirm Password</label>
                        </div>
                        <small class="text-red-500"> <?= $confirm_error; ?></small>
                    </div>
                    <div class="flex flex-col w-full">
                        <div class="form_control relative overflow-hidden">
                            <input type="date" name="date_of_birth" class="bg-transparent border-none outline-none text-white w-full input p-2.5" required="">
                        </div>
                        <small class="text-red-500"> <?= $date_error; ?></small>
                    </div>
                    <div class="flex flex-col w-full">
                        <div class="form_control relative overflow-hidden">
                            <input type="text" name="address" class="bg-transparent border-none outline-none text-white w-full input p-2.5" required="">
                            <label class="label text-gray-300">Address</label>
                        </div>
                        <small class="text-red-500"> <?= $address_error; ?></small>
                    </div>
                    <button type='submit' name="submit" class="bg-transparent w-full border-none outline-none text-white">Sign Up</button>
                    <div class="flex items-center">
                        <span class="bottom_text text-sm">Already have an account ?<a href="/login" class=" font-bold ml-2 hover:text-blue-500">Sign In</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>