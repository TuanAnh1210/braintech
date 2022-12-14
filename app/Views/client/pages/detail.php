<?php ipView('frontend.component.header') ?>

<div class="container detail_product-wrapper">
    <div style="align-items: center; flex-wrap: wrap-reverse;" class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="detail_product">
                <h2 class="detail_product-title"><?php echo $item['productName'] ?></h2>
                <p class="detail_product-price">$<?php echo $item['productPrice'] ?></p>
                <p class="detail_product-desc"><?php echo $item['productDesc'] ?></p>

                <form action="">
                    <div class="form_group">
                        <input class="quantity" type="text" placeholder="quantity...">
                        <input class="btn_submit" type="submit" value="Add To Cart">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <div class="detail_product-img">
                <img src="<?php echo $item['productImage'] ?>" alt="">
            </div>
        </div>
    </div>
</div>

<?php ipView('frontend.component.footer') ?>