<?php
$css_file = "$domainPage/public/css/basess.css";
$css_responsive = "$domainPage/public/css/reponsive.css";
$grid_css = "$domainPage/public/css/bootstrap-grid.css";
$gridmap_css = "$domainPage/public/css/bootstrap-grid.css.map";
$material_dashboard = "$domainPage/public/css/admin/material-dashboards.css";
$admin_css = "$domainPage/public/css/admin/admin.css";
$demo = "$domainPage/public/css/admin/demo.css";

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

function material_dashboard()
{
    return $GLOBALS['material_dashboard'];
}

function demo()
{
    return $GLOBALS['demo'];
}

function admin_css()
{
    return $GLOBALS['admin_css'];
}