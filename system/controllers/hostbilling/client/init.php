<?php
if (!defined('APP_RUN')) {
    exit('No direct access allowed');
}
$base_theme = 'hostbilling';

$ui->assign('languages', Localization::getLanguages());

$ui->assign('selected_navigation', 'invoices');
$ui->assign('_st', 'Invoices');
$ui->assign('_title', $config['CompanyName']);

$action = route(1, 'home');

$ui->assign('page_name', $action);

Event::trigger('client', [$action]);

$ui->assign('groups', HostingPlanGroup::select(['id', 'name', 'slug','header_content','image'])->get());

$contact = Contact::isLoggedIn();
$ui->assign('user', $contact);

$cache_ttl = 180;

if (APP_STAGE === 'Live') {
    $cache_ttl = 5;
}

function hostbilling_get_shopping_cart_total($shopping_cart_items)
{
    $total = 0;

    if (!empty($shopping_cart_items['hosting'])) {
        foreach ($shopping_cart_items['hosting'] as $item) {
            $total += $item['price'];
            $total += ($item['tax_amount']  ?? 0);
        }
    }

    if (!empty($shopping_cart_items['domains'])) {
        foreach ($shopping_cart_items['domains'] as $item) {
            $total += $item['price'];
            $total += ($item['tax_amount']  ?? 0);
        }
    }

    return $total;
}

function hostbilling_count_shopping_cart_items($shopping_cart_items)
{
    $total = 0;

    if (!empty($shopping_cart_items['hosting'])) {
        foreach ($shopping_cart_items['hosting'] as $item) {
            ++$total;
        }
    }

    if (!empty($shopping_cart_items['domains'])) {
        foreach ($shopping_cart_items['domains'] as $item) {
            ++$total;
        }
    }

    return $total;
}

$shopping_cart = false;
if (!empty($_SESSION['shopping_cart_id'])) {
    $shopping_cart = ShoppingCart::find($_SESSION['shopping_cart_id']);
}

$ui->assign('shopping_cart', $shopping_cart);
