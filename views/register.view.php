<?php require('partials/header.php') ?>

<div class="bg-zinc-900 flex flex-col px-30 py-20 my-10 rounded-lg shadow-lg gap-8 w-full max-w-2xl">
    <div class="relative flex items-center justify-center">
        <!-- Arrow on the left -->
        <a href="/" class="absolute left-0 cursor-pointer material-symbols-outlined">
            arrow_back_ios
        </a>
        <!-- Centerose title -->
        <h1 class="text-4xl font-bold ">Register</h1>
    </div>

    <form class="flex flex-col gap-6" method="POST" action="/register">
        <!-- Full Name -->
        <div>
            <label class="block mb-1 font-medium">Full Name</label>
            <input name="full_name" type="text" placeholder="Enter your full name"
                class="w-full px-4 py-2 rounded-lg bg-zinc-800 border border-zinc-700 focus:outline-none focus:ring-2 focus:ring-sky-400">
            <?php if (isset($error['full_name'])) : ?>
                <p class="text-red-500 text-sm mt-1"><?php echo $error['full_name']; ?></p>
            <?php endif; ?>
        </div>

        <!-- Email -->
        <div>
            <label class="block mb-1 font-medium">Email Address</label>
            <input name="email" type="email" placeholder="Enter your email"
                class="w-full px-4 py-2 rounded-lg bg-zinc-800 border border-zinc-700 focus:outline-none focus:ring-2 focus:ring-sky-400">
            <?php if (isset($error['email'])) : ?>
                <p class="text-red-500 text-sm mt-1"><?php echo $error['email']; ?></p>
            <?php endif; ?>
        </div>

        <!-- Username -->
        <div>
            <label class="block mb-1 font-medium">Username</label>
            <input name="username" type="text" placeholder="Choose a username"
                class="w-full px-4 py-2 rounded-lg bg-zinc-800 border border-zinc-700 focus:outline-none focus:ring-2 focus:ring-sky-500">
            <?php if (isset($error['username'])) : ?>
                <p class="text-red-500 text-sm mt-1"><?php echo $error['username']; ?></p>
            <?php endif; ?>
        </div>

        <!-- Password -->
        <div>
            <label class="block mb-1 font-medium">Password</label>
            <input name="password" type="password" placeholder="Enter your password"
                class="w-full px-4 py-2 rounded-lg bg-zinc-800 border border-zinc-700 focus:outline-none focus:ring-2 focus:ring-sky-500">
            <?php if (isset($error['password'])) : ?>
                <p class="text-red-500 text-sm mt-1"><?php echo $error['password']; ?></p>
            <?php endif; ?>
        </div>

        <!-- Confirm Password -->
        <div>
            <label class="block mb-1 font-medium">Confirm Password</label>
            <input name="confirm_password" type="password" placeholder="Confirm your password"
                class="w-full px-4 py-2 rounded-lg bg-zinc-800 border border-zinc-700 focus:outline-none focus:ring-2 focus:ring-sky-500">
            <?php if (isset($error['confirm_password'])) : ?>
                <p class="text-red-500 text-sm mt-1"><?php echo $error['confirm_password']; ?></p>
            <?php endif; ?>
        </div>

        <!-- Gender -->
        <div>
            <label class="block mb-2 font-medium">Gender</label>
            <div class="flex gap-6">
                <label class="flex items-center gap-2">
                    <input type="radio" name="gender" value="male" class="text-sky-400 focus:ring-skytext-sky-400">
                    <span>Male</span>
                </label>
                <label class="flex items-center gap-2">
                    <input type="radio" name="gender" value="female" class="text-sky-400 focus:ring-skytext-sky-400">
                    <span>Female</span>
                </label>
                <label class="flex items-center gap-2">
                    <input type="radio" name="gender" value="other" class="text-sky-400 focus:ring-skytext-sky-400">
                    <span>Other</span>
                </label>
            </div>
            <?php if (isset($error['gender'])): ?>
                <p class="text-red-500 text-sm mt-1"><?= $error['gender']; ?></p>
            <?php endif; ?>
        </div>

        <!-- Hobbies -->
        <div>
            <label class="block mb-2 font-medium">Hobbies</label>
            <div class="grid grid-cols-2 gap-3">
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="hobbies[]" value="reading" class="text-sky-400 focus:ring-skytext-sky-400">
                    <span>Reading</span>
                </label>
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="hobbies[]" value="sports" class="text-sky-400 focus:ring-skytext-sky-400">
                    <span>Sports</span>
                </label>
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="hobbies[]" value="music" class="text-sky-400 focus:ring-skytext-sky-400">
                    <span>Music</span>
                </label>
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="hobbies[]" value="travel" class="text-sky-500 focus:ring-sky-500">
                    <span>Travel</span>
                </label>
                <?php if (isset($error['hobbies'])): ?>
                    <p class="text-red-500 text-sm mt-1"><?= $error['hobbies']; ?></p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Country -->
        <div>
            <label class="block mb-1 font-medium">Country</label>
            <select name="country"
                class="w-full px-4 py-2 rounded-lg bg-zinc-800 border border-zinc-700 focus:outline-none focus:ring-2 focus:ring-sky-400">
                <option value="">Select your country</option>
                <option value="ph">Philippines</option>
                <option value="us">United States</option>
                <option value="uk">United Kingdom</option>
                <option value="ca">Canada</option>
            </select>
            <?php if (isset($error['country'])): ?>
                <p class="text-red-500 text-sm mt-1"><?= $error['country']; ?></p>
            <?php endif; ?>
        </div>

        <!-- Submit -->
        <button type="submit"
            class="w-full bg-white hover:bg-zinc-300 text-black font-semibold py-2 px-4 rounded-lg shadow-md transition">
            Submit
        </button>
        <p>Already have an account? <a href="/login" class="text-sky-400 hover:underline">Login here</a></p>
    </form>
    <?php dd($_POST) ?>
</div>
</div>

<?php require('partials/footer.php') ?>