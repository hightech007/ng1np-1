<div  itemtype="http://schema.org/ItemList">
  <h2>NAME: <?php echo $name_article; ?></h2>
  <link itemprop="url" href="#" />
  <p><span itemprop="numberOfItems">ID: <span class="id"><?php echo $id; ?></span></span></p>
  <div itemprop="itemListElement" itemscope="" itemtype="http://schema.org/Product">
    <a href="pics/x1.jpg"><img alt="Photo of product" itemprop="image"
     src="pics/oklopnik.png" width="400" height="auto"/></a> 
    <p><a itemprop="url" href="#">
      <span itemprop="name">NO. BRAND: <span class="tag"><?php echo $bid; ?></span></span>
    </a></p>
    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
      <span itemprop="price">POUNDS: <?php echo $price; ?></span>
    </div><p>DESCRIPTION OF ARTICLE:<?php echo $description_article; ?></p>
    <div itemprop="itemListElement"  itemtype="http://schema.org/Product">
    <a href="#">Buy</a>
    </div>
  </div>
</div>
