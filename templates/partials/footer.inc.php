<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 26/12/2015
 * Time: 14:40
 */
?>
<footer>
    <div class="container">
        <div class="col-md-12 footer-wrap">
            <div class="col-md-6">
                <p><a href="<?php print base_path() ?>legal">
                        <?php print t("Terms and Conditions"); ?>
                    </a>  |
                    <a href="<?php print base_path() ?>cookies">
                        <?php print t("Cookies"); ?>
                    </a>
                </p>
                <p>&copy; 2015 - <?php echo date("Y"); ?> Chartage</p>
                <p>TRADE BRUSSELS<br> ATOMIUMSQUARE 1 B91 | 1020 BRUSSELS | TEL : 0032 2 478 50 50</p>
            </div>
            <div class="col-md-6 mail-chimp">
                <?php global $user; ?>
                <?php if ($user->uid != 0) { ?>
                <!-- Begin MailChimp Signup Form -->
                <a href="http://eepurl.com/Iu6Kj" target="_blank">
                    <i class="fa fa-envelope-o fa-lg"></i>
                    <?php print t("Subscribe to our mailing list"); ?>
                </a>
                <?php } else {
                    print '';
                } ?>
            </div>
        </div>
    </div>
</footer>