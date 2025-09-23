<?php require('partials/header.php') ?>


<div class="bg-black text-white h-full flex flex-col justify-center items-center gap-10">
    <div class="bg-zinc-900 flex flex-col px-30 py-20 my-20 rounded-lg shadow-lg gap-8 w-full max-w-2xl">
        <div class="relative flex items-center justify-center">
            <!-- Arrow on the left -->
            <a href="/" class="absolute left-0 cursor-pointer material-symbols-outlined">
                arrow_back_ios
            </a>
            <!-- Centered title -->
            <h1 class="text-4xl font-bold ">Register</h1>
        </div>

        <form class="flex flex-col gap-6">
            <!-- Full Name -->
            <div>
                <label class="block mb-1 font-medium">Full Name</label>
                <input type="text" placeholder="Enter your full name"
                    class="w-full px-4 py-2 rounded-lg bg-zinc-800 border border-zinc-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Email -->
            <div>
                <label class="block mb-1 font-medium">Email Address</label>
                <input type="email" placeholder="Enter your email"
                    class="w-full px-4 py-2 rounded-lg bg-zinc-800 border border-zinc-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Username -->
            <div>
                <label class="block mb-1 font-medium">Username</label>
                <input type="text" placeholder="Choose a username"
                    class="w-full px-4 py-2 rounded-lg bg-zinc-800 border border-zinc-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Password -->
            <div>
                <label class="block mb-1 font-medium">Password</label>
                <input type="password" placeholder="Enter your password"
                    class="w-full px-4 py-2 rounded-lg bg-zinc-800 border border-zinc-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Confirm Password -->
            <div>
                <label class="block mb-1 font-medium">Confirm Password</label>
                <input type="password" placeholder="Confirm your password"
                    class="w-full px-4 py-2 rounded-lg bg-zinc-800 border border-zinc-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Gender -->
            <div>
                <label class="block mb-2 font-medium">Gender</label>
                <div class="flex gap-6">
                    <label class="flex items-center gap-2">
                        <input type="radio" name="gender" value="male" class="text-blue-500 focus:ring-blue-500">
                        <span>Male</span>
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="radio" name="gender" value="female" class="text-blue-500 focus:ring-blue-500">
                        <span>Female</span>
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="radio" name="gender" value="other" class="text-blue-500 focus:ring-blue-500">
                        <span>Other</span>
                    </label>
                </div>
            </div>

            <!-- Hobbies -->
            <div>
                <label class="block mb-2 font-medium">Hobbies</label>
                <div class="grid grid-cols-2 gap-3">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" value="reading" class="text-blue-500 focus:ring-blue-500">
                        <span>Reading</span>
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" value="sports" class="text-blue-500 focus:ring-blue-500">
                        <span>Sports</span>
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" value="music" class="text-blue-500 focus:ring-blue-500">
                        <span>Music</span>
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" value="travel" class="text-blue-500 focus:ring-blue-500">
                        <span>Travel</span>
                    </label>
                </div>
            </div>

            <!-- Country -->
            <div>
                <label class="block mb-1 font-medium">Country</label>
                <select
                    class="w-full px-4 py-2 rounded-lg bg-zinc-800 border border-zinc-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Select your country</option>
                    <option value="ph">Philippines</option>
                    <option value="us">United States</option>
                    <option value="uk">United Kingdom</option>
                    <option value="ca">Canada</option>
                </select>
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full bg-white hover:bg-zinc-300 text-black font-semibold py-2 px-4 rounded-lg shadow-md transition">
                Submit
            </button>
        </form>
    </div>
</div>


<?php require('partials/footer.php') ?>