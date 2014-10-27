PHP-Schema-Helper
=================

This is a php map of schema.org's object

How to use
=================

Just call static method to echo attr in you html tag

Example
================

IN CODE : 
```PHP
<?php require_once 'autoload.php'; ?>
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
        <p <?php echo Schema::Review("reviewBody") ?>>This is my review about this product, so good</p>
        <div <?php echo Schema::Review("reviewRating") ?>>
            <div <?php echo Schema::Rating() ?>>
                <p <?php echo Schema::Rating("bestRating") ?>>10</p>
                <p <?php echo Schema::Rating("ratingValue") ?>>6</p>
                <p <?php echo Schema::Rating("worstRating") ?>>5</p>
            </div>
        </div>
    </div>
</div>
```

RESULT
```html
<div  itemscope itemtype="http//schema.org/Product" >
    <p itemprop="name"  >This is product name</p>
    <img itemprop="image"  src="link_to_image">
    <p itemprop="description"  > this is product description</p>
    <p itemprop="sku" >This is SKU</p>
    <div itemprop="aggregateRating" itemscope itemtype="http//schema.org/AggregateRating">
        <p itemprop="ratingCount" >12</p>
        <p itemprop="reviewCount" >14</p>
    </div>
    <div itemprop="brand" itemscope itemtype="http//schema.org/Organization">
        <p itemprop="address" >Address of you org</p>
        <p itemprop="email" >Org's email</p>
        <img itemprop="logo"  src="link_to_logo">
    </div>
    <div itemprop="review" itemscope itemtype="http//schema.org/Review" >
        <p itemprop="reviewBody" >This is my review about this product, so good</p>
        <div itemprop="reviewRating" itemscope itemtype="http//schema.org/Rating">
            <div itemscope itemtype="http//schema.org/Rating">
                <p itemprop="bestRating" >10</p>
                <p itemprop="ratingValue" >6</p>
                <p itemprop="worstRating" >5</p>
            </div>
        </div>
    </div>
</div>
```