<!-- Products Section start -->
<section class="products" id="products">
    <h2><span>Produk Unggulan</span> Kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo unde eum, ab fuga possimus iste.</p>

    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="product-card">
                <div class="product-icons">
                    <a href="#"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                </div>
                <div class="product-image">
                    <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                </div>
                <div class="product-content">
                    <h3><?= htmlspecialchars($product['name']) ?></h3>
                    <div class="product-stars">
                    <?php if (!empty($product['rating'])): ?>
                        <?php foreach ($product['rating'] as $star): ?>
                            <?php 
                            switch ($star) {
                                case 1: 
                                    echo '<i data-feather="star" class="star-full"></i>';
                                    break;
                                default: 
                                    echo '<i data-feather="star"></i>';
                                    break;
                            }
                            ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </div>
                    <div class="product-price"><?= htmlspecialchars($product['price']) ?> <span>IDR 55K</span></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!-- Products Section end -->
