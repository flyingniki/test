<form action="/register.php" method="POST" autocomplete="off">
    <h1 class="h3 mb-3 fw-normal">Please register</h1>

    <div class="form-floating">
        <input type="text" name="login" class="form-control <?= $class['login'] ?? '' ?>" id="floatingLogin"
            placeholder="name@example.com" value="<?= $post['login'] ?? null ?>" />
        <label for="floatingLogin">Login</label>
        <p class="form__message"><?= $errors['login'] ?? '' ?></p>
    </div>

    <div class="form-floating">
        <input type="password" name="password" class="form-control <?= $class['password'] ?? '' ?>"
            id="floatingPassword" placeholder="Password" value="<?= $post['password'] ?? null ?>" />
        <label for="floatingPassword">Password</label>
        <p class="form__message"><?= $errors['password'] ?? '' ?></p>
    </div>

    <div class="form-floating">
        <input type="text" name="email" class="form-control <?= $class['email'] ?? '' ?>" id="floatingEmail"
            placeholder="Email" value="<?= $post['email'] ?? null ?>" />
        <label for="floatingEmail">Email</label>
        <p class="form__message"><?= $errors['email'] ?? '' ?></p>
    </div>

    <div class="form-floating">
        <input type="text" name="name" class="form-control <?= $class['name'] ?? '' ?>" id="floatingName"
            placeholder="Name" value="<?= $post['name'] ?? null ?>" />
        <label for="floatingName">Name</label>
        <p class="form__message"><?= $errors['name'] ?? '' ?></p>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">
        Register
    </button>
    <a href="/index.php">Back to main page</a>
</form>