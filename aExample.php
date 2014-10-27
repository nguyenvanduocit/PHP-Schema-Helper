<?php require_once 'autoload.php'; ?>
    <div class="price-product" <?php echo Schema::Offer()?>>
    <div class="price-arrow"><i class="fa fa-backward"></i></div>
    <span <?php echo Schema::Offer("price", "12"); ?>>This is price</span>
    <span <?php echo Schema::Offer("priceCurrency", "USD"); ?>>$</span>
</div>
<div  <?php echo Schema::Product(); ?> >
    <p <?php echo Schema::Product("name"); ?> >This is product name</p>
    <img <?php echo Schema::Product("image"); ?> src="link_to_image">
    <p <?php echo Schema::Product("description") ?> > this is product description</p>
    <p <?php echo Schema::Product("sku") ?>>This is SKU</p>
    <div <?php echo Schema::Product("aggregateRating") ?>>
        <p <?php echo Schema::AggregateRating("ratingCount") ?>>12</p>
        <p <?php echo Schema::AggregateRating("reviewCount") ?>>14</p>
    </div>
    <div <?php echo Schema::Product("brand") ?>>
        <p <?php echo Schema::Organization("address") ?>>Address of you org</p>
        <p <?php echo Schema::Organization("email") ?>>Org's email</p>
        <img <?php echo Schema::Organization("logo") ?> src="link_to_logo">
    </div>
    <div <?php echo Schema::Product("review") ?> >
        <p <?php echo Schema::Review("author") ?>>Duoc nguyen</p>
        <p <?php echo Schema::Review("reviewBody") ?>>This is my review about this product, so good</p>
        <div <?php echo Schema::Review("reviewRating") ?>>
            <div <?php echo Schema::Rating() ?>>
                <p <?php echo Schema::Rating("bestRating", 10) ?>>10</p>
                <p <?php echo Schema::Rating("ratingValue") ?>>6</p>
                <p <?php echo Schema::Rating("worstRating") ?>>5</p>
            </div>
        </div>
    </div>
</div>

<?php echo Schema::WriteAction("language","US"); ?>