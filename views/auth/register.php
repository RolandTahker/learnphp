<?php include __DIR__ . '/../partials/header.php'; ?>
<div class="container">
    <form action="/register" method="POST">
        <div class="field">
            <label class="label" for="email">Email</label>
            <div class="control">
                <input class="input" type="email" placeholder="Email" name="email" id="email">
            </div>
        </div>
        <div class="field">
            <label class="label" for="password">Password</label>
            <div class="control">
            <input class="input" type="password" placeholder="password" name="password" id="password">
            </div>
        </div>
        <div class="field">
            <label class="label" for="password_confirm">Password confirm</label>
            <div class="control">
            <input class="input" type="Password_confirm" placeholder="Password_confirm" name="Password_confirm" id="Password_confirm">
            </div>
        </div>
    </form>
</div>
<?php include __DIR__ .  '/../partials/footer.php'; ?>