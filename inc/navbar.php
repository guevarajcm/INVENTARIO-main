<nav class="navbar" role="navigation" aria-label="main navigation">

    <div class="navbar-brand">
        <a class="navbar-item" href="index.php?vista=home">
        <img src="img/logo.png" width="100%" height="100%">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Usuarios</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=user_new" class="navbar-item">Agregar nuevo usuario</a>
                    <a href="index.php?vista=user_list" class="navbar-item">Lista de usuarios</a>
                    <a href="index.php?vista=user_search" class="navbar-item">Buscar usuario</a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Gestion de categorías</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=category_new" class="navbar-item">Agregar nueva categoria</a>
                    <a href="index.php?vista=category_list" class="navbar-item">Lista de categorias</a>
                    <a href="index.php?vista=category_search" class="navbar-item">Buscar categoria</a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Gestion de productos</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=product_new" class="navbar-item">Agregar nuevo producto</a>
                    <a href="index.php?vista=product_list" class="navbar-item">Lista de productos</a>
                    <a href="index.php?vista=product_category" class="navbar-item">Productos por categoría</a>
                    <a href="index.php?vista=product_search" class="navbar-item">Buscar producto</a>
                </div>
            </div>

        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a href="index.php?vista=user_update&user_id_up=<?php echo $_SESSION['id']; ?>" class="button is-primary is-rounded">
                        Mi cuenta
                    </a>

                    <a href="index.php?vista=logout" class="button is-link is-rounded">
                        Cerrar sesion
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>