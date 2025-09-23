<?php require('partials/header.php') ?>

<div class="min-h-screen flex flex-col justify-center items-center bg-black text-white">
    <div class="bg-zinc-900 flex flex-col px-12 py-16 rounded-lg shadow-lg w-full max-w-md">

        <!-- Title with arrow -->
        <div class="relative flex items-center justify-center mb-8">
            <span class="material-symbols-outlined absolute left-0 cursor-pointer">
                arrow_back_ios
            </span>
            <h1 class="text-4xl font-bold">Login</h1>
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
                class="mt-4 bg-blue-600 hover:bg-blue-500 text-white font-semibold py-2 px-6 rounded-lg shadow-md">
                Submit
            </button>
        </form>
    </div>
</div>

<?php require('partials/footer.php') ?>