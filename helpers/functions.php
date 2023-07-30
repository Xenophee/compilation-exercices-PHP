<?php


function isActivePage($page, $currentPage) {
    return ($page == $currentPage) ? 'active' : '';
}