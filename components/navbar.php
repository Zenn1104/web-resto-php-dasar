<!-- Navbar start -->
<nav class="navbar">
    <a href="#" class="navbar-logo">Soka<span>Crab</span>.</a>

    <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#products">Produk</a>
        <a href="#contact">Kontak</a>
    </div>

    <div class="navbar-extra">
        <a href="#" id="search-button"><i data-feather="search"></i></a>
        <button id="shopping-cart-button"><i data-feather="shopping-cart"></i></button>
        <button id="hamburger-menu"><i data-feather="menu"></i></button>
    </div>

    <!-- Search Form start -->
    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box"><i data-feather="search"></i></label>
    </div>
    <!-- Search Form end -->

    <!-- Shopping Cart start -->
    <div class="shopping-cart">
        <?php foreach ($products as $product) { ?>
            <div class="cart-item">
                <?php if (!empty($product['image'])): ?>
                    <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                <?php endif; ?>
                <div class="item-detail">
                    <h3><?= htmlspecialchars($product['name']) ?></h3>
                    <div class="item-price"><?= htmlspecialchars($product['price']) ?></div>
                </div>
                <i data-feather="trash-2" class="remove-item"></i>
            </div>
        <?php } ?>
    </div>
    <!-- Shopping Cart end -->
</nav>
<!-- Navbar end -->

<!-- Sidebar start -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <h3>Soka<span>Crab</span>.</h3>
        <button id="close-sidebar"><i data-feather="x"></i></button>
    </div>
    <ul class="sidebar-menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">Tentang Kami</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#products">Produk</a></li>
        <li><a href="#contact">Kontak</a></li>
    </ul>
</div>
<!-- Sidebar end -->
