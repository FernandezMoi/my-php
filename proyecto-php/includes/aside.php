<?php require('includes/helpers.php'); ?>

<aside id="sidebar">
    <div id="login" class="block-aside">
        <h3>Iniciar sesión</h3>
        <form action="login.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" />

            <label for="password">Contraseña</label>
            <input type="password" name="password" />

            <input type="submit" value="Iniciar" />
        </form>
    </div>
    <div id="register" class="block-aside"></div>
    <h3>Regístrate</h3>
    <form action="register.php" method="post">
        <?php if (isset($_SESSION['completado'])) : ?>
            <div class="alert alert_succes">
                <?= $_SESSION['completado'] ?>
            </div>
        <?php else : ?>
            <div class="alert alert_error">
                <?= $_SESSION['general'] ?>
            </div>
        <?php endif; ?>
        <label for="name">Nombre</label>
        <input type="text" name="name" />
        <?php echo isset($_SESSION['errors']) ? showErrors($_SESSION['errors'], 'name') : ''; ?>

        <label for="surname">Apellido</label>
        <input type="text" name="surname" />
        <?php echo isset($_SESSION['errors']) ? showErrors($_SESSION['errors'], 'surname') : ''; ?>

        <label for="email">Email</label>
        <input type="email" name="email" />
        <?php echo isset($_SESSION['errors']) ? showErrors($_SESSION['errors'], 'email') : ''; ?>

        <label for="password">Contraseña</label>
        <input type="password" name="password" />
        <?php echo isset($_SESSION['errors']) ? showErrors($_SESSION['errors'], 'password') : ''; ?>

        <input type="submit" value="Registrar" />
    </form>
    </div>
</aside>