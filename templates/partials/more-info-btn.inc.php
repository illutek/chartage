<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 24/01/2016
 * Time: 11:19
 * $model is een variabele van ubercart zelf
 */

$textMoreInfo = t("Get info about this product");
?>
<!-- link naar meer info form hier node/6 -->

<div class="product-info__btn product-info__btn--more-info">
    <a href="<?php print base_path() ?>node/6?product=<?php print_r($model) ?>">
        <button type="button" class="btn btn-default">
            <i class="fa fa-info fa-lg"></i><?php print $textMoreInfo; ?>
        </button>
    </a>
</div>

