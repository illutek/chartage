#Chartage webshop
##SASS
Alle opgedeeld in SMACSS manier

##Only Pro
Webshop is enkel toegangkelijk voor professionele klanten, registreren kan via  de site
maar een site verandwoordelijke moet zijn goedkeuring geven.  
Dus er worden geen prijzen getoond en ook geen winkelcart.

##Better login


##Webform More info
%get[product] = Default value voor de Product SKU

##Product node
Alle variables ingesteld op template.php

###Set name
´´´
[#items] => Array ( [0] => Array ( [tid] => 10 [taxonomy_term] => stdClass Object ( [tid] => 10 [vid] => 3 [name] => set001
´´´
Bovenstaande met volgend print opdracht 
´´´
<?php  print_r ($content['field_set']); ?>
´´´
Volgende om enkel de waarde te printen van dat taxonomie veld
´´´
<?php
$contentSet = $content['field_set']['#items'][0]['taxonomy_term']->name;
print $contentSet; 
?>
´´´

###Not done
Maar toch gedaan in de module ubercart/uc_cart/uc_cart.module t('Checkout') vervangen door t('Order') (2x)

####Nog op te lossen
Krijg het base_path via template.php niet in orde???
