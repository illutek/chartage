<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 3/01/2016
 * Time: 15:46
 */

print '<li class="first dropdown">' . t('') .
    '<a href="' . url('user/' . $user->uid) . '">' . '<i class="user fa fa-user fa-lg"></i>' . 'My account' . '</a>' .
    '<ul class="dropdown-menu">' . '<li>' . 'Address' . '</li>' . '</ul>' . '</li>';



?>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
           aria-expanded="false">Dropdown
            <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
        </ul>
    </li>


<?php

print '<li class="first dropdown">' . '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'
    . '<i class="user fa fa-user fa-lg"></i>' . 'My account' . '<span class="caret"></span></a>' . '<ul class="dropdown-menu">' . '<li>' .
    '<a href="' . url('user/' . $user->uid) . '">' . '<i class="user fa fa-user fa-lg"></i>' . 'My account' . '</a>' . '</li>' . '</li>' . '</ul>' . '</li>';



?>