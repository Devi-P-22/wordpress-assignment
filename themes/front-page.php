<?php get_header(); ?>

<div class="container">

  <!-- Announcement -->
  <div class="announcement">
    <?php the_field('announcement_text'); ?>
  </div>

  <!-- Search -->
  <div class="search-box">
    <input type="text" id="searchInput" placeholder="Search products..." onkeyup="filterProducts()" />
  </div>

  <!-- Hero -->
  <div class="hero">
    <?php $hero = get_field('hero_image'); ?>
    <?php if($hero): ?>
      <img src="<?php echo $hero['url']; ?>" />
    <?php endif; ?>

    <div class="hero-content">
      <h1><?php the_field('hero_heading'); ?></h1>
      <p><?php the_field('hero_subheading'); ?></p>

      <a class="button" href="<?php the_field('button_link'); ?>">
        <?php the_field('button_text'); ?>
      </a>
    </div>
  </div>

  <!-- Brands -->
  <div class="brands">
    <?php if($b1 = get_field('brand_logo_1')): ?>
      <img src="<?php echo $b1['url']; ?>" />
    <?php endif; ?>

    <?php if($b2 = get_field('brand_logo_2')): ?>
      <img src="<?php echo $b2['url']; ?>" />
    <?php endif; ?>

    <?php if($b3 = get_field('brand_logo_3')): ?>
      <img src="<?php echo $b3['url']; ?>" />
    <?php endif; ?>
  </div>

  <!-- Products -->
  <h2 class="section-title">New Arrivals</h2>

  <div class="products" id="productList">

    <div class="product">
      <?php if($p1 = get_field('product_image_1')): ?>
        <img src="<?php echo $p1['url']; ?>" />
      <?php endif; ?>
      <h3 class="product-name"><?php the_field('product_name_1'); ?></h3>
      <p><?php the_field('product_price_1'); ?></p>
    </div>

    <div class="product">
      <?php if($p2 = get_field('product_image_2')): ?>
        <img src="<?php echo $p2['url']; ?>" />
      <?php endif; ?>
      <h3 class="product-name"><?php the_field('product_name_2'); ?></h3>
      <p><?php the_field('product_price_2'); ?></p>
    </div>

  </div>

</div>

<!-- Search Script -->
<script>
function filterProducts() {
  let input = document.getElementById("searchInput").value.toLowerCase();
  let products = document.querySelectorAll(".product");

  products.forEach(function(product) {
    let name = product.querySelector(".product-name").innerText.toLowerCase();

    if (name.includes(input)) {
      product.style.display = "block";
    } else {
      product.style.display = "none";
    }
  });
}
</script>

<?php get_footer(); ?>