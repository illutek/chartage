<?php if ($teaser): ?>
    <div class="product_wrapper_teaser">
        <div class="product_list">
            <a href="<?php print $node_url; ?>">
                <div class="item">
                    <div class="teaser_prod_img">
                        <?php print render($content['uc_product_image']); ?>
                    </div>
                    <div class="body_teaser"><?php print $title; ?></div>
                    <!-- niet ingelogde user ziet geen prijs -->
                    <?php global $user; ?>
                    <?php if ($user->uid != 0) {
                        print render($content['sell_price']);
                    } else {
                        print '';
                    } ?>
                </div>
            </a>
        </div>
    </div>

<?php else: ?>
    <div class="product_list">
        <?php print render($title_prefix); ?>
        <?php if (!$page): ?>
            <h2 class="title" <?php print $title_attributes; ?>><a
                    href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
        <?php endif; ?>
        <?php print render($title_suffix); ?>

        <div class="content"<?php print $content_attributes; ?>>
            <div class="product_wrapper">
                <div class="row">
                    <div class="col-md-5 product_img">
                        <?php print render($content['uc_product_image']); ?>
                        <div class="logo-product">
                            <img src="<?php print base_path() . path_to_theme(); ?>/images/logo_products-min.png">
                        </div>
                    </div>
                    <div class="col-md-7 product_info">
                        <div class="sku">
                            Item number: <?php print_r($model) ?>
                        </div>
                        <!-- niet ingelogde user ziet geen prijs -->
                        <?php global $user; ?>
                        <?php if ($user->uid != 0) { ?>
                            <div class="sell-price">
                                <?php print render($content['sell_price']); ?>
                            </div>
                        <?php } else {
                            print '';
                        } ?>
                        <?php print render($content['body']); ?>

                        <?php
                        /**
                         * Als voorlopige oplossing om de sets te tonen via een button
                         * sets-button.inc.php
                         * Btn link naat more info form in dit geval naar
                         */
                        include 'partials/sets-button.inc.php';
                        include 'partials/more-info-btn.inc.php';
                        ?>


                        <?php if ($user->uid != 0) {
                            print render($content['add_to_cart']); ?>
                        <?php } else { ?>
                            <div class="message-registered">
                                <p><i class="fa fa-user"></i>
                                    Only a registered user can place an order.
                                </p>

                                <p><a href="<?php print base_path() ?>/user/register">Register</a></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- end product_wrapper-->
    </div>
<?php endif; ?>