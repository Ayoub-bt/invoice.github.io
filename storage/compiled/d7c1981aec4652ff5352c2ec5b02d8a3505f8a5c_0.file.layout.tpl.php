<?php
/* Smarty version 4.3.0, created on 2023-01-12 10:14:08
  from '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/fluid/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c023c02f60e7_39817261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7c1981aec4652ff5352c2ec5b02d8a3505f8a5c' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/fluid/layout.tpl',
      1 => 1673536431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c023c02f60e7_39817261 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">

    <?php if (!empty($_smarty_tpl->tpl_vars['post']->value)) {?>
    <title><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</title>
        <?php } else { ?>
        <title><?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
</title>
    <?php }?>

    <link rel="stylesheet" href="https://s3.fromcdn.com/build/assets/fusion.min.css?v=3">
    <?php echo '<script'; ?>
 type="module" src="https://s3.fromcdn.com/build/assets/fusion.min.js?v=3"><?php echo '</script'; ?>
>
</head>

<body>
<div class="content-wrapper">
    <header class="wrapper bg-light">
        <div class="bg-primary text-white fw-bold fs-15 mb-2">
            <div class="container py-2 d-md-flex flex-md-row">
                <div class="d-flex flex-row align-items-center">
                    <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-location-pin-alt"></i></div>
                    <address class="mb-0">Moonshine St. 14/05 Light City</address>
                </div>
                <div class="d-flex flex-row align-items-center me-6 ms-auto">
                    <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-phone-volume"></i></div>
                    <p class="mb-0">00 (123) 456 78 90</p>
                </div>
                <div class="d-flex flex-row align-items-center">
                    <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-message"></i></div>
                    <p class="mb-0"><a href="/cdn-cgi/l/email-protection#ec9f8d82888e8394ac89818d8580c28f8381" class="link-white hover"><span class="__cf_email__" data-cfemail="92e1f3fcf6f0fdead2f7fff3fbfebcf1fdff">[email&#160;protected]</span></a></p>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
            <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client">
                        <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" style="max-height: 45px;" />
                    </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                        <h3 class="text-white fs-30 mb-0"><?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</h3>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                        <ul class="navbar-nav">


                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?php echo __('Home');?>
</a></li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?php echo __('Products n Services');?>
</a>
                                <ul class="dropdown-menu">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                        <li class="nav-item"><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/items/<?php echo $_smarty_tpl->tpl_vars['group']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value->name;?>
</a></li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            </li>


                        </ul>
                        <!-- /.navbar-nav -->
                        <div class="offcanvas-footer d-lg-none">
                            <div>
                                <a href="/cdn-cgi/l/email-protection#d2b4bba0a1a6fcbeb3a1a692b7bfb3bbbefcb1bdbf" class="link-inverse"><span class="__cf_email__" data-cfemail="523b3c343d12373f333b3e7c313d3f">[email&#160;protected]</span></a>
                                <br /> 00 (123) 456 78 90 <br />
                                <nav class="nav social social-white mt-4">
                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                    <a href="#"><i class="uil uil-instagram"></i></a>
                                    <a href="#"><i class="uil uil-youtube"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                        </div>
                        <!-- /.offcanvas-footer -->
                    </div>
                    <!-- /.offcanvas-body -->
                </div>
                <!-- /.navbar-collapse -->
                <div class="navbar-other w-100 d-flex ms-auto">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <li class="nav-item dropdown language-select text-uppercase">
                            <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" href="#">En</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">De</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Es</a></li>
                            </ul>
                        </li>
                        <li class="nav-item d-none d-md-block">
                            <a href="./contact.html" class="btn btn-sm btn-primary rounded-pill">Contact</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <button class="hamburger offcanvas-nav-btn"><span></span></button>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- /.navbar -->
    </header>
    <!-- /header -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211884003263c023c02f3388_73514049', "content");
?>

    <!-- /section -->
</div>
<!-- /.content-wrapper -->
<footer class="bg-light">
    <div class="container py-13 py-md-15">
        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <img class="mb-4" src="./assets/img/logo-dark.png" srcset="./assets/img/logo-dark@2x.png 2x" alt="" />
                    <p class="mb-4">© 2022 Sandbox. <br class="d-none d-lg-block" />All rights reserved.</p>
                    <nav class="nav social ">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                        <a href="#"><i class="uil uil-instagram"></i></a>
                        <a href="#"><i class="uil uil-youtube"></i></a>
                    </nav>
                    <!-- /.social -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title  mb-3">Get in Touch</h4>
                    <address class="pe-xl-15 pe-xxl-17">Moonshine St. 14/05 Light City, London, United Kingdom</address>
                    <a href="/cdn-cgi/l/email-protection#88ab" class="link-body"><span class="__cf_email__" data-cfemail="e58c8b838aa58088848c89cb868a88">[email&#160;protected]</span></a><br /> 00 (123) 456 78 90
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title  mb-3">Learn More</h4>
                    <ul class="list-unstyled text-reset mb-0">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Story</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-12 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title  mb-3">Our Newsletter</h4>
                    <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to you.</p>
                    <div class="newsletter-wrapper">
                        <!-- Begin Mailchimp Signup Form -->
                        <div id="mc_embed_signup2">
                            <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate " target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll2">
                                    <div class="mc-field-group input-group form-floating">
                                        <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                                        <label for="mce-EMAIL2">Email Address</label>
                                        <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary ">
                                    </div>
                                    <div id="mce-responses2" class="clear">
                                        <div class="response" id="mce-error-response2" style="display:none"></div>
                                        <div class="response" id="mce-success-response2" style="display:none"></div>
                                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                                    <div class="clear"></div>
                                </div>
                            </form>
                        </div>
                        <!--End mc_embed_signup-->
                    </div>
                    <!-- /.newsletter-wrapper -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</footer>
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

</body>
</html>
<?php }
/* {block "content"} */
class Block_211884003263c023c02f3388_73514049 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_211884003263c023c02f3388_73514049',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
