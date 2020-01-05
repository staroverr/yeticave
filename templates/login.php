<main>
    <nav class="nav">
        <ul class="nav__list container">
            <?php foreach ($categories as $cat): ?>
            <li class="nav__item">
                <a href="all-lots.html"><?=$cat; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <form class="form container" <?php if (isset($errors)) {print('form--invalid');}?> action="login.php" method="post">
        <h2>Вход</h2>
        <div class="form__item <?php if (isset($errors['email'])) {print('form__item--invalid');}?>">
            <label for="email">E-mail*</label>
            <input id="email" type="text" name="email" placeholder="Введите e-mail" value="<?=$form['email'];?>">
            <span class="form__error"><?=$errors['email'];?></span>
        </div>
        <div
            class="form__item form__item--last <?php if (isset($errors['password'])) {print('form__item--invalid');}?>">
            <label for="password">Пароль*</label>
            <input id="password" type="text" name="password" placeholder="Введите пароль"
                value="<?=$form['password'];?>">
            <span class="form__error"><?=$errors['password'];?></span>
        </div>
        <button type="submit" class="button">Войти</button>
    </form>
</main>
