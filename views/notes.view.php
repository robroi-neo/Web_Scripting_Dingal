<?php require('partials/header.php') ?>

<div class="flex flex-col items-center justify-center">
    <h1><?php echo $heading; ?></h1>
    <h1><?php echo $_SESSION['full_name'] ?? 'Guest'; ?></h1>
    <p>This part is unimplemented. You have succesfully logged in tho. Good for you!</p>
    <a class="text-sky-400 hover:underline" href="/logout">Logout</a>
</div>
<?php require('partials/footer.php') ?>