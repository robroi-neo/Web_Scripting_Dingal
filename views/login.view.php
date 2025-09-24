<?php require('partials/header.php') ?>


<div class="bg-zinc-900 flex flex-col px-30 py-20 my-10 rounded-lg shadow-lg gap-8 w-full max-w-2xl">

    <!-- Title with arrow -->
    <div class="relative flex items-center justify-center mb-5">
        <!-- Arrow on the left -->
        <a href="/" class="absolute left-0 cursor-pointer material-symbols-outlined">
            arrow_back_ios
        </a>
        <!-- Centered title -->
        <h1 class="text-4xl font-bold ">Login</h1>
    </div>

    <!-- Form -->
    <form action="#" method="POST" class="flex flex-col gap-6">
        <div class="flex flex-col">
            <label for="username" class="mb-2 font-semibold">Username</label>
            <input type="text" id="username" name="username"
                class="px-4 py-2 rounded-lg bg-zinc-800 border border-zinc-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="flex flex-col">
            <label for="password" class="mb-2 font-semibold">Password</label>
            <input type="password" id="password" name="password"
                class="px-4 py-2 rounded-lg bg-zinc-800 border border-zinc-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <button type="submit"
            class="w-full bg-white hover:bg-zinc-300 text-black font-semibold py-2 px-4 rounded-lg shadow-md transition">
            Submit
        </button>
        <p>Already have an account? <a href="/register" class="text-sky-400 hover:underline">Register here</a></p>
    </form>
</div>
</div>

<?php require('partials/footer.php') ?>