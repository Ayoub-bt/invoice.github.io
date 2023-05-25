<?php
/* Smarty version 4.3.0, created on 2023-01-07 14:29:29
  from '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b9c819249395_10445143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c82bf4e26867bf761dd205d220c00ed1580549c2' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/layout.tpl',
      1 => 1672095351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b9c819249395_10445143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="icon" href="<?php ob_start();
echo APP_URL;
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
/storage/system/<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'icon-32','icon-32x32.png');?>
" sizes="32x32" />
    <link rel="icon" href="<?php ob_start();
echo APP_URL;
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
/storage/system/<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'icon-192','icon-192x192.png');?>
" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php ob_start();
echo APP_URL;
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
/storage/system/<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'icon-180','icon-180x180.png');?>
" />
    <meta name="msapplication-TileImage" content="<?php ob_start();
echo APP_URL;
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
/storage/system/<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'icon-270','icon-270x270.png');?>
" />
    <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</title>
    <link href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
frontend/hosting_x/css/theme.min.css?v=4" rel="stylesheet">
    <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['header_scripts']))) {?>
        <?php echo $_smarty_tpl->tpl_vars['config']->value['header_scripts'];?>

    <?php }?>
    <?php echo '<script'; ?>
>
        var base_url = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
';
        var block_msg = '<div class="md-preloader text-center"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>';
    <?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183966025363b9c8191f27c1_82048635', 'head');
?>

</head>

<body>

<div id="hx-header" class="d-flex mx-auto flex-column"><!-- start header -->
    <div class="bg_overlay_header">
        <div class="bg-img-header-new-standard">&nbsp;</div>
    </div>
    <!-- Fixed navbar -->
    <nav id="hx-navbar-header" class="navbar navbar-expand-md fixed-header-layout">
        <div class="container main-header-hx-s">

            <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/dashboard/"><img src="<?php ob_start();
echo APP_URL;
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];
$_prefixVariable21 = ob_get_clean();
echo $_prefixVariable21;?>
" style="max-height: 35px;" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable22 = ob_get_clean();
echo $_prefixVariable22;?>
" /></a>

            <button class="navbar-toggle offcanvas-toggle menu-btn-span-bar ml-auto" data-toggle="offcanvas" data-target="#offcanvas-menu-home">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse navbar-offcanvas" id="offcanvas-menu-home">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'dashboard') {?>active<?php }?>">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/home/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Home'];?>
</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" role="button" id="menu-items-list" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Place New Order'];?>
</a>
                        <ul class="dropdown-menu hx-dropdown-header">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/items/<?php echo $_smarty_tpl->tpl_vars['group']->value->slug;?>
/"><?php echo $_smarty_tpl->tpl_vars['group']->value->name;?>
</a></li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </li>

                    <?php if (!empty($_smarty_tpl->tpl_vars['user']->value)) {?>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" id="header-help-drop-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['_L']->value['My Orders'];?>
</a>
                            <ul class="dropdown-menu hx-dropdown-header" aria-labelledby="header-help-drop-down">
                                <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/domain-orders/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Domain Orders'];?>
</a></li>
                                <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/hosting-orders/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Hosting Orders'];?>
</a></li>
                            </ul>
                        </li>

                    <?php }?>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" id="header-help-drop-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Domains'];?>
</a>
                        <ul class="dropdown-menu hx-dropdown-header" aria-labelledby="header-help-drop-down">
                            <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/whois/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['WHOIS Lookup'];?>
</a></li>
                            <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/domain-register/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Register Domain'];?>
</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/kb/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Knowledgebase'];?>
</a>
                    </li>

                    <?php echo $_smarty_tpl->tpl_vars['client_extra_nav']->value[3];?>


                    <?php if (!empty($_smarty_tpl->tpl_vars['user']->value)) {?>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" id="header-help-drop-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Billing'];?>
</a>
                            <ul class="dropdown-menu hx-dropdown-header" aria-labelledby="header-help-drop-down">
                                <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/invoices/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</a></li>
                                <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/quotes/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quotes'];?>
</a></li>
                            </ul>
                        </li>
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['support']) {?>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" id="header-help-drop-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Support'];?>
</a>
                            <ul class="dropdown-menu hx-dropdown-header" aria-labelledby="header-help-drop-down">
                                <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/downloads/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Documents'];?>
</a></li>
                                <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/tickets/new/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Open New Ticket'];?>
</a></li>
                                <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/tickets/all/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tickets'];?>
</a></li>
                            </ul>
                        </li>
                    <?php }?>

                    <?php }?>


                </ul>
            </div>
            <ul class="header-user-info-hx">

                <?php if (!empty($_smarty_tpl->tpl_vars['user']->value)) {?>
                    <li class="dropdown"><a id="header-login-dropdown" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/login/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</a>
                    </li>
                <?php } else { ?>
                    <li class="dropdown"><a id="header-login-dropdown" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/dashboard/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dashboard'];?>
</a>
                    </li>
                <?php }?>


            </ul>
        </div>
    </nav>
    <div class="mt-auto header-top-height"></div>






















    <div class="mt-auto"></div>
</div><!-- end header -->



<?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {
echo $_smarty_tpl->tpl_vars['notify']->value;
}?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82033204563b9c8192245b0_16448440', "content");
?>







<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9 quiq-links-footer">
                <h5 class="text-white">Quick Links</h5>
                <div class="row">
                    <ul class="col-md-6 quiq-links-footer-ul">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/whois/"><?php ob_start();
echo __('WHOIS Lookup');
$_prefixVariable23 = ob_get_clean();
echo $_prefixVariable23;?>
</a></li>

                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/login/"><?php ob_start();
echo __('Login to your account');
$_prefixVariable24 = ob_get_clean();
echo $_prefixVariable24;?>
</a></li>


                    </ul>


                    <ul class="col-md-6 quiq-links-footer-ul">

                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/register/<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/forgot_pw/">Forgot Password?</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/register/<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/login/"><?php ob_start();
echo __('Create an account with us');
$_prefixVariable25 = ob_get_clean();
echo $_prefixVariable25;?>
</a></li>



                    </ul>

                </div>
            </div>

            <div class="col-md-3">


                <div class="footer-contact-method">
                    <a href="#">
                        <span>email us :</span>
                        <b><?php if (!empty($_smarty_tpl->tpl_vars['contact']->value->email)) {?>
                                <?php echo $_smarty_tpl->tpl_vars['contact']->value->email;?>

                        <?php }?>

                        </b>
                        <i class="fas fa-at"></i>
                    </a>

                    <a href="#">
                        <span>call us :</span>
                        <b><?php if (!empty($_smarty_tpl->tpl_vars['contact']->value->phone_number)) {?>
                                <?php echo $_smarty_tpl->tpl_vars['contact']->value->phone_number;?>

                            <?php }?>
                        </b>
                        <i class="fas fa-phone"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="mr-tp-40 row justify-content-between footer-area-under">
            <div class="col-md-4">
                <a href="#"><img class="footer-logo-blue" src="img/header/logo-w-f.png" alt="" /></a>
                <div class="footer-social-icons">
                    <a href="<?php if (!empty($_smarty_tpl->tpl_vars['contact']->value->facebook)) {?>
                                <?php echo $_smarty_tpl->tpl_vars['contact']->value->facebook;?>

                            <?php }?>">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="<?php if (!empty($_smarty_tpl->tpl_vars['contact']->value->twitter)) {?>
                                <?php echo $_smarty_tpl->tpl_vars['contact']->value->twitter;?>

                            <?php }?>">
                        <i class="fab fa-twitter"></i>
                    </a>

                    <a href="<?php if (!empty($_smarty_tpl->tpl_vars['contact']->value->twitter)) {?>
                                <?php echo $_smarty_tpl->tpl_vars['contact']->value->twitter;?>

                            <?php }?>">
                        <i class="fab fa-youtube"></i>
                    </a>

                </div>
            </div>

            <div class="col-md-4 row">
                <ul class="col-md-6 under-footer-ullist">
                    <li><a href="#">about us</a></li>
                    <li><a href="#"><?php ob_start();
echo __('COOKIE POLICY');
$_prefixVariable26 = ob_get_clean();
echo $_prefixVariable26;?>
</a></li>
                </ul>
                <ul class="col-md-6 under-footer-ullist text-right">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
privacy-policy"><?php ob_start();
echo __('privacy policy');
$_prefixVariable27 = ob_get_clean();
echo $_prefixVariable27;?>
</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
terms-and-conditions"><?php ob_start();
echo __('terms of sevice');
$_prefixVariable28 = ob_get_clean();
echo $_prefixVariable28;?>
</a></li>
                </ul>
            </div>

        </div>

        <div class="row justify-content-between final-footer-area mr-tp-40">
            <div class="final-footer-area-text">
                All rights reserved. Copyright © <?php echo '<script'; ?>
>
                    document.write(new Date().getFullYear())<?php echo '</script'; ?>
>
                <?php if (!empty($_smarty_tpl->tpl_vars['contact']->value->title)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['contact']->value->title;?>

                <?php }?>


            </div>


        </div>
    </div>
</section>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
frontend/hosting_x/js/theme.min.js?v=7"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

    $(function () {
        if(document.getElementById('domain-search-header')){
            let $form_domain_search = $('#domain-search-header');
            let $domain_search_result = $('#domain_search_result');
            let $domain_name = $('#domain_name');
            let $btn_domain_submit = $('#btn_domain_submit');
            $form_domain_search.on('submit',function (event) {
                event.preventDefault();
                $btn_domain_submit.prop('disabled',true);
                axios.post(base_url + 'client/whois-post',$form_domain_search.serialize()).then(function (response) {
                    $btn_domain_submit.prop('disabled',false);
                    $domain_search_result.show();
                    $domain_search_result.html('<div class="card"><div class="card-body">' + response.data + '</div></div>');
                }).catch(function (error) {

                    $btn_domain_submit.prop('disabled',false);

                    $.each(error.response.data, function(key, value) {
                        toastr.error(value);
                    });

                });

            });
        }
    });

<?php echo '</script'; ?>
>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41531995163b9c8192450b4_91742442', 'script');
?>


</body>

</html>
<?php }
/* {block 'head'} */
class Block_183966025363b9c8191f27c1_82048635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_183966025363b9c8191f27c1_82048635',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block "content"} */
class Block_82033204563b9c8192245b0_16448440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_82033204563b9c8192245b0_16448440',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_41531995163b9c8192450b4_91742442 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_41531995163b9c8192450b4_91742442',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'script'} */
}
