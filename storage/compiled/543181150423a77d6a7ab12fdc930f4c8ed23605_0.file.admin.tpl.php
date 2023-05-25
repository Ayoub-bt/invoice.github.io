<?php
/* Smarty version 4.3.0, created on 2023-05-05 02:56:17
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\hostbilling\layouts\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64546241c02712_04881251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '543181150423a77d6a7ab12fdc930f4c8ed23605' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\hostbilling\\layouts\\admin.tpl',
      1 => 1683251746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64546241c02712_04881251 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117095507964546241b835d9_75452977', "head_extras_from_layout");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196041858564546241b84dd4_72086188', "content_body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/layouts/base.tpl");
}
/* {block "head_extras_from_layout"} */
class Block_117095507964546241b835d9_75452977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_extras_from_layout' => 
  array (
    0 => 'Block_117095507964546241b835d9_75452977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
>
    var clx_admin_layout = 1;
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "head_extras_from_layout"} */
/* {block "content"} */
class Block_38281423564546241bfe409_90938925 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "content_body"} */
class Block_196041858564546241b84dd4_72086188 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_body' => 
  array (
    0 => 'Block_196041858564546241b84dd4_72086188',
  ),
  'content' => 
  array (
    0 => 'Block_38281423564546241bfe409_90938925',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<aside class="page-sidebar">
    <div class="page-logo">
        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" class="page-logo-link d-flex align-items-center position-relative">

            <?php if (empty($_smarty_tpl->tpl_vars['config']->value['header_show_logo_as'])) {?>

                <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_square']))) {?>
                    <img src="<?php echo APP_URL;?>
/storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_square'];?>
"
                        alt="<?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
" aria-roledescription="logo">
                <?php } else { ?>
                    <img src="<?php echo APP_URL;?>
/storage/system/logo-512x512.png?v=2"
                        alt="<?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
" aria-roledescription="logo">
                <?php }?>

                <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_text']))) {?>
                <span class="page-logo-text mr-1"><?php echo $_smarty_tpl->tpl_vars['config']->value['logo_text'];?>
</span>
                <?php } else { ?>
                <span class="page-logo-text mr-1">CloudOnex</span>
                <?php }?>

            <?php } else { ?>

                <img src="<?php echo APP_URL;?>
/storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];?>
"
                    style="width: auto; max-height: 28px;" alt="<?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
"
                    aria-roledescription="logo">

            <?php }?>

        </a>
    </div>

    <nav id="clx-primary-navigation" class="primary-nav" role="navigation">

        <!-- profile -->
        <div class="info-card">
            <?php if ($_smarty_tpl->tpl_vars['user']->value->img) {?>
                <img src="<?php echo APP_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->img;?>
" class="profile-image rounded-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
            <?php } else { ?>
                <img src="<?php echo APP_URL;?>
/ui/lib/img/default-user-avatar.png" class="profile-image rounded-circle"
                    alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
            <?php }?>

            <div class="info-card-text">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="d-flex align-items-center text-white">
                    <span class="text-truncate text-truncate-sm d-inline-block">
                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['user']->value->fullname, ENT_QUOTES, 'UTF-8', true);?>

                    </span>
                </a>
            </div>

            <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['hide_cover_image'])) && $_smarty_tpl->tpl_vars['config']->value['hide_cover_image'] == 1) {?>

            <?php } else { ?>

            <img src="<?php echo APP_URL;?>
/ui/theme/default/img/cover-2-lg.jpg" class="cover" alt="cover">

            <?php }?>

        </div>

        <ul id="clx-navigation-menu" class="nav-menu">

            <?php echo $_smarty_tpl->tpl_vars['admin_extra_nav']->value[0];?>


            <!-- Dashboard -->
            <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'reports')) {?>
            <li <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'dashboard') {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;
echo $_smarty_tpl->tpl_vars['config']->value['redirect_url'];?>
">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-home">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dashboard'];?>
</span>
                </a>
            </li>
            <?php }?>

            <?php echo $_smarty_tpl->tpl_vars['admin_extra_nav']->value[1];?>


            <!-- Customers -->
            <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'customers')) {?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'contacts') {?>active  open<?php }?>">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-users">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
</span>
                </a>
                <ul>
                    <!-- Add customer -->
                    <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'customers','create')) {?>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/add">
                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Customer'];?>
</span>
                        </a>
                    </li>
                    <?php }?>

                    <!-- All customers -->
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/list">
                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Customers'];?>
</span>
                        </a>
                    </li>

                    <!-- Companies -->
                    <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'companies','view') && ($_smarty_tpl->tpl_vars['config']->value['companies'])) {?>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/companies">
                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Companies'];?>
</span>
                        </a>
                    </li>
                    <?php }?>

                    <!-- Groups -->
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/groups">
                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Groups'];?>
</span>
                        </a>
                    </li>

                </ul>
            </li>
            <?php }?>

            <?php echo $_smarty_tpl->tpl_vars['admin_extra_nav']->value[2];?>


            <!-- Billing -->
            <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'sales')) {?>
                <?php if (($_smarty_tpl->tpl_vars['config']->value['invoicing'] == '1') || ($_smarty_tpl->tpl_vars['config']->value['quotes'] == '1')) {?>
                <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'invoices') {?>active open<?php }?>">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-credit-card">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                        <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Billing'];?>
</span>
                    </a>
                    <ul>

                        <?php if ($_smarty_tpl->tpl_vars['config']->value['quotes'] == '1') {?>
                            <!-- Quotes -->
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/list"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quotes'];?>
</span></a></li>

                            <!-- Create New Quote -->
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/new"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Create New Quote'];?>
</span></a></li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['config']->value['invoicing'] == '1') {?>
                            <!-- All Invoices -->
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</span></a></li>

                            <!-- New Invoice -->
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/add/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Invoice'];?>
</span></a></li>

                            <!-- Recurring Invoices -->
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list-recurring/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recurring Invoices'];?>
</span></a></li>
                            
                            <!-- New Recurring Invoices -->
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/add/recurring/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Recurring Invoice'];?>
</span></a></li>
                        <?php }?>

                        <!-- Accounts -->
                        <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/list/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accounts'];?>
</span></a></li> -->

                        <!-- Payments -->
                        <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/payments"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payments'];?>
</span></a></li> -->

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_menu_admin']->value['sales'], 'sm_sales');
$_smarty_tpl->tpl_vars['sm_sales']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sm_sales']->value) {
$_smarty_tpl->tpl_vars['sm_sales']->do_else = false;
?>

                        <?php echo $_smarty_tpl->tpl_vars['sm_sales']->value;?>


                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </ul>
                </li>
                <?php }?>
            <?php }?>

            <!-- Services -->
            <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'products_n_services')) {?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'products_and_services') {?>active open<?php }?>">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/services/">

                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-server">
                        <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                        <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                        <line x1="6" y1="6" x2="6.01" y2="6"></line>
                        <line x1="6" y1="18" x2="6.01" y2="18"></line>
                    </svg>

                    <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Services'];?>
</span>
                </a>
                <!-- <ul> -->
                    <!-- Hosting Plans -->
                    <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/hosting-plans/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Hosting Plans'];?>
</span> </a></li> -->
                    
                    <!-- Services -->
                    <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/services/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Other Services'];?>
</span> </a></li> -->

                    <!-- Groups -->
                    <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/groups/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Groups'];?>
</span> </a></li> -->
                <!-- </ul> -->
            </li>
            <?php }?>

            <!-- Productivity -->
            <li
                class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'documents' || $_smarty_tpl->tpl_vars['selected_navigation']->value == 'tasks' || $_smarty_tpl->tpl_vars['selected_navigation']->value == 'calendar') {?>active open<?php }?>">
                <a href="#">

                    <svg height="22px" xmlns='http://www.w3.org/2000/svg' class='ionicon' viewBox='0 0 512 512'>
                        <title>Calendar</title>
                        <rect fill='none' stroke='currentColor' stroke-linejoin='round' stroke-width='32' x='48' y='80'
                            width='416' height='384' rx='48' />
                        <circle cx='296' cy='232' r='24' />
                        <circle cx='376' cy='232' r='24' />
                        <circle cx='296' cy='312' r='24' />
                        <circle cx='376' cy='312' r='24' />
                        <circle cx='136' cy='312' r='24' />
                        <circle cx='216' cy='312' r='24' />
                        <circle cx='136' cy='392' r='24' />
                        <circle cx='216' cy='392' r='24' />
                        <circle cx='296' cy='392' r='24' />
                        <path fill='none' stroke='currentColor' stroke-linejoin='round' stroke-width='32'
                            stroke-linecap='round' d='M128 48v32M384 48v32' />
                        <path fill='none' stroke='currentColor' stroke-linejoin='round' stroke-width='32'
                            d='M464 160H48' />
                    </svg>

                    <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Productivity'];?>
</span>
                </a>
                <ul>
                    <!-- Tasks -->
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tasks/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tasks'];?>
</span> </a></li>

                    <!-- Calendar -->
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
calendar/events/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Calendar'];?>
</span> </a></li>
                </ul>
            </li>

            <?php echo $_smarty_tpl->tpl_vars['admin_extra_nav']->value[4];?>


            <!-- Reports -->
            <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'reports')) {?>
            <!-- <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'reports') {?>active open<?php }?>">
                <a href="#">

                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-pie-chart">
                        <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                        <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                    </svg>

                    <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports'];?>
 </span>
                </a>
                <ul>

                    <?php if ($_smarty_tpl->tpl_vars['config']->value['accounting'] == '1') {?>

                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/invoices"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</span></a></li>

                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/income"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Reports'];?>
</span></a></li>

                    <?php }?>

                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/sales"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales'];?>
</a></li>
                </ul>
            </li> -->
            <?php }?>

            <!-- Appearance -->
            <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'appearance')) {?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'appearance') {?>active open<?php }?>" id="li_appearance">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-layout">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="3" y1="9" x2="21" y2="9"></line>
                        <line x1="9" y1="21" x2="9" y2="9"></line>
                    </svg>


                    <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Appearance'];?>
 </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <!-- Customize -->
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appearance/customize"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customize'];?>
</span></a></li>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_menu_admin']->value['appearance'], 'sm_appearance');
$_smarty_tpl->tpl_vars['sm_appearance']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sm_appearance']->value) {
$_smarty_tpl->tpl_vars['sm_appearance']->do_else = false;
?>
                    <?php echo $_smarty_tpl->tpl_vars['sm_appearance']->value;?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <!-- Themes -->
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appearance/themes"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Themes'];?>
</span></a></li>

                </ul>
            </li>
            <?php }?>

            <!-- Settings -->
            <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'settings')) {?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'settings') {?>active open<?php }?>" id="li_settings">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-settings">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path
                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                        </path>
                    </svg>
                    <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Settings'];?>
 </span>
                </a>

                <ul class="nav nav-second-level">
                    <!-- General settings -->
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['General Settings'];?>
</span></a></li>

                    <!-- Localisation -->
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/localisation"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Localisation'];?>
</span></a></li>

                    <!-- Currencies -->
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/currencies"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currencies'];?>
</span></a></li>


                    <?php if ($_smarty_tpl->tpl_vars['config']->value['accounting'] == '1') {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tax/list"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales Taxes'];?>
</span></a></li>
                    <?php }?>

                    <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'utilities')) {?>
                        <!-- Backup -->
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/backups"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Backup'];?>
</span></a></li>
                        <!-- Activity log -->
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/activity"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Activity Log'];?>
</span></a></li>
                    <?php }?>

                    <!-- Staff -->
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Staff'];?>
</span></a></li>

                    <!-- Roles -->
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/roles"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Roles'];?>
</span></a></li>

                    <?php if ($_smarty_tpl->tpl_vars['config']->value['accounting'] == '1') {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/income-categories"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Categories'];?>
</span></a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/tags"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage Tags'];?>
</span></a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/pmethods"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payment Methods'];?>
</span></a></li>
                    <?php }?>

                    <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/emls"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Settings'];?>
</span></a></li> -->
                    <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/email-templates"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Templates'];?>
</span></a></li> -->
                    <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
sms/init/settings"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMS Settings'];?>
</span></a> --></li>
                    <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
sms/init/templates"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMS Templates'];?>
</span></a></li> -->
                    <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/automation"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Automation Settings'];?>
</span></a></li> -->
                    <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/api"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['API Access'];?>
</span></a></li> -->
                    
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_menu_admin']->value['settings'], 'sm_settings');
$_smarty_tpl->tpl_vars['sm_settings']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sm_settings']->value) {
$_smarty_tpl->tpl_vars['sm_settings']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['sm_settings']->value;?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/customfields"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Custom Contact Fields'];?>
</span></a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/features"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose Features'];?>
</span></a></li>
                    <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/about"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['About'];?>
</span></a></li> -->

                </ul>
            </li>
            <?php }?>

        </ul>
    </nav>

</aside>

<div class="page-content-wrapper">
    <header class="page-header" role="banner">

        <!-- Logo -->
        <div class="page-logo">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard"
                class="page-logo-link press-scale-down d-flex align-items-center position-relative">

                <?php if (empty($_smarty_tpl->tpl_vars['config']->value['header_show_logo_as'])) {?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_square']))) {?>
                        <img src="<?php echo APP_URL;?>
/storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_square'];?>
"
                            alt="<?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
" aria-roledescription="logo">
                    <?php } else { ?>
                        <img src="<?php echo APP_URL;?>
/storage/system/logo-512x512.png?v=2"
                            alt="<?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
" aria-roledescription="logo">
                    <?php }?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_text']))) {?>
                        <span class="page-logo-text mr-1"><?php echo $_smarty_tpl->tpl_vars['config']->value['logo_text'];?>
</span>
                    <?php } else { ?>
                        <span class="page-logo-text mr-1">Fatourati</span>
                    <?php }?>

                <?php } else { ?>
                    <img src="<?php echo APP_URL;?>
/storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];?>
"
                        style="width: auto; max-height: 28px;" alt="<?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
"
                        aria-roledescription="logo">
                <?php }?>

                <span class="position-absolute text-white opacity-50 small pos-top pos-right me-2 mt-n2"></span>
            </a>
        </div>
        <!-- DOC: nav menu layout change shortcut -->
        <div class="hidden-md-down dropdown-icon-menu position-relative">
            <a href="#" class="header-btn btn js-waves-off svg-icon svg-icon-primary rounded-0" style="border: none;"
                data-action="toggle" data-class="nav-function-hidden" title="Hide Navigation">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px"
                    height="32px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="2" rx="1"></rect>
                        <rect fill="#000000" opacity="0.3" x="4" y="13" width="16" height="2" rx="1"></rect>
                        <path
                            d="M5,9 L13,9 C13.5522847,9 14,9.44771525 14,10 C14,10.5522847 13.5522847,11 13,11 L5,11 C4.44771525,11 4,10.5522847 4,10 C4,9.44771525 4.44771525,9 5,9 Z M5,17 L13,17 C13.5522847,17 14,17.4477153 14,18 C14,18.5522847 13.5522847,19 13,19 L5,19 C4.44771525,19 4,18.5522847 4,18 C4,17.4477153 4.44771525,17 5,17 Z"
                            fill="#000000"></path>
                    </g>
                </svg>
            </a>
            <ul>
                <li>
                    <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify"
                        title="Minify Navigation">
                        <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
                                    <path
                                        d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3"
                                        transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
                                </g>
                            </svg></span>
                    </a>
                </li>
                <li>
                    <a href="#" class="btn js-waves-off" data-action="toggle" data-class="clx-fixed-navigation"
                        title="Lock Navigation">
                        <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <mask fill="white">
                                        <use xlink:href="#path-1" />
                                    </mask>
                                    <g />
                                    <path
                                        d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z"
                                        fill="#000000" />
                                </g>
                            </svg></span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="hidden-lg-up">
            <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
                <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px" viewBox="0 0 24 24"
                        version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
                            <path
                                d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z"
                                fill="#000000" opacity="0.3" />
                        </g>
                    </svg></span>
            </a>
        </div>

        <div class="ms-auto d-flex">

            <div>
                <!-- Shortcuts button -->
                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'utilities')) {?>
                    <a href="javasctipt:;" id="get_activity" class="header-icon cursor-pointer" data-bs-toggle="dropdown">
                        <span style="color: #e0e6ed;">
                            <svg height="20px" xmlns="http://www.w3.org/2000/svg" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-file-text" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <path d="M12 8v8m-4-4h8"/>
                                </g>
                            </svg>
                        </span>
                    </a>
                <?php }?>

                <!-- Shortcuts dropdown -->
                <div class="dropdown-menu dropdown-xl" style="width: 15rem;">
                    <div
                        style="background: #002393;"
                        class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top mb-2">
                        <h4 class="m-0 text-center color-white">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Shortcuts'];?>

                        </h4>
                    </div>

                    <div class="custom-scroll h-100">
                        <div class="text-center my-3">
                            <!-- Shortcut - New invoice -->
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/add/" class="p-3">
                                <span class="nav-link-text">
                                    <i class="fal fa-file"></i>&nbsp; <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Invoice'];?>

                                </span>
                            </a>

                            <br>
                            <br>

                            <!-- Shortcut - New quote -->
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/new">
                                <span class="nav-link-text">
                                    <i class="fal fa-file"></i>&nbsp; <?php echo $_smarty_tpl->tpl_vars['_L']->value['Create New Quote'];?>

                                </span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div>
                <!-- Notifications button -->
                <!-- <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'utilities')) {?>
                    <a href="javasctipt:;" id="get_activity" class="header-icon cursor-pointer" data-bs-toggle="dropdown">
                        <span style="color: #e0e6ed;"><svg height="20px" xmlns="http://www.w3.org/2000/svg" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-bell" viewBox="0 0 24 24">
                                <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 01-3.46 0" />
                            </svg></span>
                    </a>
                <?php }?> -->

                <!-- Notifications dropdown -->
                <!-- <div class="dropdown-menu dropdown-xl">
                    <div
                        class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top mb-2">
                        <h4 class="m-0 text-center color-white">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Notifications'];?>

                        </h4>
                    </div>

                    <div class="custom-scroll h-100" id="activity_loaded">
                        <div class="text-center my-3">
                            <div class="md-preloader">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32"
                                    width="32" viewbox="0 0 75 75">
                                    <circle cx="37.5" cy="37.5" r="33.5" stroke-width="6" /></svg></div>
                        </div>
                    </div>
                    <div
                        class="py-2 px-3 bg-faded d-block rounded-bottom text-center border-faded border-bottom-0 border-right-0 border-left-0">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/activity" class="fs-xs fw-500 ms-auto"><?php echo $_smarty_tpl->tpl_vars['_L']->value['See All Activity'];?>
</a>
                    </div>
                </div> -->
            </div>

            <div>
                <a href="#" data-bs-toggle="dropdown" title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['user']->value->fullname, ENT_QUOTES, 'UTF-8', true);?>
"
                    class="header-icon d-flex align-items-center justify-content-center ml-2 cursor-pointer">

                    <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png" class="profile-image rounded-circle"
                        alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['user']->value->fullname, ENT_QUOTES, 'UTF-8', true);?>
">
                    <?php } else { ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;
echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="profile-image rounded-circle"
                        alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['user']->value->fullname, ENT_QUOTES, 'UTF-8', true);?>
">
                    <?php }?>
                </a>
                <div class="dropdown-menu dropdown-lg p-0">
                    <div style="background: #002393;" class="dropdown-header d-flex flex-row py-4 rounded-top">
                        <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                            <span class="me-2">

                                <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png"
                                    class="rounded-circle profile-image" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['user']->value->fullname, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php } else { ?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;
echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="rounded-circle profile-image"
                                    alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['user']->value->fullname, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php }?>
                            </span>
                            <div class="info-card-text">
                                <div class="fs-lg text-truncate text-truncate-lg"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['user']->value->fullname, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <span class="text-truncate text-truncate-md opacity-80"><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</span>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider m-0"></div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="dropdown-item">
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Profile'];?>

                    </a>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/change-password" class="dropdown-item">
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Change Password'];?>

                    </a>



                    <div class="dropdown-divider m-0"></div>
                    <a class="dropdown-item fw-500 pt-3 pb-3" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout">
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Logout'];?>

                    </a>
                </div>
            </div>
        </div>
    </header>

    <main id="clx-page-content" role="main"
        class="page-content <?php if ((isset($_smarty_tpl->tpl_vars['page_content_extra_class']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['page_content_extra_class']->value;?>
 <?php }?>">


        <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {
echo $_smarty_tpl->tpl_vars['notify']->value;
}?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38281423564546241bfe409_90938925', "content", $this->tplIndex);
?>



    </main>

    <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>


    <div class="modal fade js-modal-notes modal-backdrop-transparent" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content h-100">
                <div class="dropdown-header bg-primary-900 d-flex align-items-center w-100">
                    <h3 class="text-white mt-2 mb-1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Notes'];?>
</h3>
                    <button type="button" class="close text-white position-absolute pos-top pos-right p-2 m-1 me-2"
                        data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body p-0 h-100 d-flex">
                    <textarea class="form-control rounded-0" id="clx_notes_clipboard"
                        placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Whats on your mind'];?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['user']->value->notes, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                </div>
            </div>
        </div>
    </div>



</div>

<?php
}
}
/* {/block "content_body"} */
}