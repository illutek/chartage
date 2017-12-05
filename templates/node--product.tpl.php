<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 26/12/2015
 * Time: 14:00
 */
if ($teaser): ?>

    <div class="product_wrapper_teaser">
        <div class="product_list">
            <a href="<?php print $node_url; ?>">
                <div class="item">
                    <div class="teaser_prod_img">
                        <?php print (isset($uc_image) ? $uc_image : ''); ?>
                    </div>
                    <div class="body_teaser"><?php print $title; ?></div>
                    <!-- niet ingelogde user ziet geen prijs -->
                    <?php global $user; ?>
                    <?php if ($user->uid != 0) {
                        print (isset($uc_sellPrice) ? $uc_sellPrice : '');
                        /**
                         * variables van template.php
                         */
                        print $details;

                    } else {
                        print '';
                    } ?>
                </div>
            </a>
            <?php
            /**
             * variables van template.php
             * add to cart buiten de a href anders is deze
             * gewoon een link naar de node van het product
             */
            global $user; ?>
            <?php if ($user->uid != 0) {
                print $uc_addCart;
            } else {
                print '';
            } ?>
        </div>
    </div>

    <!--Hier de volledige product node-->
<?php else: ?>

    <div class="product_list">
        <?php print render($title_prefix);
        if (!$page): ?>
            <h2 class="title" <?php print $title_attributes; ?>>
                <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
            </h2>
        <?php endif;
        print render($title_suffix); ?>

        <div class="content"<?php print $content_attributes; ?>>
            <div class="product">
                <div class="row">

                    <!--            de produkt afbeelding               -->
                    <div class="col-md-5">

                        <div class="product-img-section">
                            <div class="product-img-section__uc-img">
                                <?php print (isset($uc_image) ? $uc_image : ''); ?>
                            </div>

                            <div class="product-img-section__logo">
                                <img src="<?php print base_path() . path_to_theme(); ?>/images/logo_products-min.png">
                            </div>
                        </div>

                    </div>



                    <!--            de produkt info                       -->
                    <div class="col-md-7">
                        <div class="product-info">

                            <div class="product-info__sku">
                                <?php print t("Item number:"); ?><?php print_r($model) ?>
                            </div>

                            <!-- niet ingelogde user ziet geen prijs -->
                            <?php global $user; ?>
                            <?php if ($user->uid != 0) { ?>
                                <div class="product-info__sell-price">
                                    <?php print (isset($uc_sellPrice) ? $uc_sellPrice : ''); ?>
                                </div>
                            <?php } else {
                                print '';
                            } ?>

                            <div class="product-info__description">
                                <?php print (isset($uc_body) ? $uc_body : ''); ?>
                            </div>

                            <div>
                                <?php
                                /**
                                 * Als voorlopige oplossing om de sets te tonen via een button
                                 * sets-button.inc.php
                                 * Btn link naar more info form in dit geval naar node/6
                                 */
                                include 'partials/sets-button.inc.php';

                                include 'partials/more-info-btn.inc.php';
                                ?>
                            </div>


                            <?php if ($user->uid != 0) {
                                /**
                                 * cart-btn is eigenlijk het volledige form met attributes, quantity en de Submit button.
                                 */
                                ?>
                                <div class="cart-btn">
                                    <?php print $uc_addCart; ?>
                                </div>
                                <?php
                            } else { ?>
                                <div class="message-registered">
                                    <p><i class="fa fa-user"></i>
                                        <?php print t("Only a registered user can place an order."); ?>
                                    </p>

                                    <p><a href="<?php print base_path() ?>/user/register">
                                            <?php print t("Register"); ?>
                                        </a>
                                    </p>
                                </div>
                            <?php } ?>
                        </div>

                    </div>

<!--                    end col-md-7-->
                </div>

  <div class="product_list">
    <?php print render($title_prefix);
    if (!$page): ?>
      <h2 class="title" <?php print $title_attributes; ?>>
        <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
      </h2>
    <?php endif;
    print render($title_suffix); ?>

    <div class="content"<?php print $content_attributes; ?>>
      <div class="product">
        <div class="row">

          <div class="col-md-5">
              <div class="product__section-image">
                  <div class="product__img">
                      <?php print (isset($uc_image) ? $uc_image : ''); ?>
                  </div>

                  <div class="product__logo">
                      <img src="<?php print base_path() . path_to_theme(); ?>/images/logo_products-min.png">
                  </div>
              </div>

          </div>

          <div class="col-md-7 product_info">
            <div class="sku">
              <?php print t("Item number:"); ?><?php print_r($model) ?>
            </div>
            <!-- niet ingelogde user ziet geen prijs -->
            <?php global $user; ?>
            <?php if ($user->uid != 0) { ?>
              <div class="sell-price">
                <?php print (isset($uc_sellPrice) ? $uc_sellPrice : ''); ?>
              </div>
            <?php } else {
              print '';
            } ?>
            <?php print (isset($uc_body) ? $uc_body : ''); ?>
            <div class="row">
              <?php
              /**
               * Als voorlopige oplossing om de sets te tonen via een button
               * sets-button.inc.php
               * Btn link naar more info form in dit geval naar node/6
               */
              include 'partials/sets-button.inc.php';
              include 'partials/more-info-btn.inc.php';
              ?>

            </div>
        </div>
        <!-- end product_wrapper-->
    </div>
<?php endif; ?>