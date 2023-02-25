<?php
$css_file = "$domainPage/public/css/styl.css";
$css_responsive = "$domainPage/public/css/reponsive.css";
$grid_css = "$domainPage/public/css/bootstrap-grid.css";
$gridmap_css = "$domainPage/public/css/bootstrap-grid.css.map";

function css_file()
{
    return $GLOBALS['css_file'];
}
function grid_css()
{
    return $GLOBALS['grid_css'];
}
function gridmap_css()
{
    return $GLOBALS['gridmap_css'];
}
function css_responsive()
{
    return $GLOBALS['css_responsive'];
}