<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 29/12/2015
 * Time: 18:16
 */
?>

<div class="user-region">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <!-- de inlog button en user print -->
                <li><?php global $user;
                    if ($user->uid != 0) {
                        print '<li class="first dropdown">' . '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'
                            . '<i class="fa fa-user fa-lg"></i>' . 'My account' . '<span class="caret"></span></a>' .
                            '<ul class="dropdown-menu">' .
                            '<li>' . '<a href="' . url('user/' . $user->uid) . '">' . t('My Chartage account') . '</a></li>' .
                            '<li>' . '<a href="' . url('user/' . $user->uid .'/edit') . '">' . '<i class="fa fa-pencil"></i>' . t('Edit') . '</a></li>' .
                            '<li>' . '<a href="' . url('user/' . $user->uid .'/addresses') . '">' . '<i class="fa fa-truck"></i>' . t('My addresses') . '</a>' . '</li>' .
                            '<li>' . '<a href="' . url('user/' . $user->uid .'/orders') . '">' . '<i class="fa fa-book"></i>' . t('My orders') . '</a></li>' .
                            '<li>' . '<a href="' . url('user/logout') . '">' . '<i class="fa fa-sign-out"></i>' . t('Logout') . '</a></li>' .
                            '</ul>' .
                            '</li>';
                        print '<li>
                        <a href="' . url('user/logout') . '">' . '<i class="fa fa-sign-out"></i>' . t('Logout') . '</a>
                        </li>';
                        print '<li>' .'<a href=' . base_path(). 'cart>' . '<i class="fa fa-shopping-cart fa-lg"></i>' . '</a></li>';

                    } else {

                        print '<li class="first">
                        <a href="' . url('user') . '">' . t('Login') . '</a>
                        </li>';
                        print '<li>
                        <a href="' . url('user/register') . '">' . t('Register') . '</a>
                        </li>';
                    } ?></li>
            </ul>
        </div>
    </div>
</div>