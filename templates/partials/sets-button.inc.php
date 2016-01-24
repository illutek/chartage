<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 23/01/2016
 * Time: 20:29
 */

$value = field_get_items('node', $node, 'field_set');

if ($value):
    $contentSet = $content['field_set']['#items'][0]['taxonomy_term']->name;
    ?>
    <div class="product-set">
        <a href="<?php print base_path() ?>sets/<?php print $contentSet; ?>">
            <button type="button" class="btn btn-default">Here you can find the set</button>
        </a>
    </div>
<?php else:
    print '';
endif;
?>