<!-- Menu Section start -->
<section id="menu" class="menu">
    <h2><span>Menu</span> Kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, repellendus numquam quam tempora voluptatum.</p>

    <div class="row">
        <?php foreach ($menus as $menu): ?>
            <div class="menu-card">
                <img src="<?= htmlspecialchars($menu['image']) ?>" alt="<?= htmlspecialchars($menu['name']) ?>" class="menu-card-img">
                <h3 class="menu-card-title">- <?= htmlspecialchars($menu['name']) ?> -</h3>
                <p class="menu-card-price"><?= htmlspecialchars($menu['price']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!-- Menu Section end -->
