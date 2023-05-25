<?php
/* Smarty version 4.3.0, created on 2023-01-13 03:24:25
  from '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/fluid/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c115392a3061_33252259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e1e035d7a94b88387386be970862c70e80cfd8b' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/fluid/home.tpl',
      1 => 1673546191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c115392a3061_33252259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157666335763c1153928a9d0_79786591', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, './layout.tpl');
}
/* {block 'content'} */
class Block_157666335763c1153928a9d0_79786591 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_157666335763c1153928a9d0_79786591',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="wrapper bg-light">
        <div class="container pt-8 pt-md-14">
            <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-1 position-relative order-lg-2" data-cue="zoomIn">
                    <div class="shape bg-dot primary rellax w-17 h-19" data-rellax-speed="1" style="top: -1.7rem; left: -1.5rem;"></div>
                    <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>
                    <figure class="rounded">
                        <?php if (!empty($_smarty_tpl->tpl_vars['post_settings']->value['hero_image'])) {?>
                            <img src="<?php echo APP_URL;?>
/storage/<?php echo $_smarty_tpl->tpl_vars['post_settings']->value['hero_image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
">
                            <?php } else { ?>
                            <img src="./assets/img/photos/about7.jpg"  />
                        <?php }?>
                    </figure>
                </div>
                <!--/column -->
                <div class="col-lg-5 mt-lg-n10 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
                    <h1 class="display-1 mb-5"><?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['hero_title'] ?? null)===null||$tmp==='' ? 'Web hosting solution for modern apps and websites.' ?? null : $tmp);?>
</h1>
                    <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0"><?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['hero_description'] ?? null)===null||$tmp==='' ? 'Fast server, modern tech stack, our solution is equipped with everything you need and beyond.' ?? null : $tmp);?>
</p>
                    <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                        <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span>
                        <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Free Trial</a></span>
                    </div>
                </div>
                <!--/column -->
            </div>

            <div class="row">
                <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
                    <h3 class="display-4 mb-6 text-center"><?php echo __('Products n Services');?>
</h3>
                </div>
                <!-- /column -->
            </div>

            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>

                    <div class="col-md-3 col-xs">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/items/<?php echo $_smarty_tpl->tpl_vars['group']->value->slug;?>
/" class="m-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h3><?php echo $_smarty_tpl->tpl_vars['group']->value->name;?>
</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <!-- /.row -->

            <!--/.row -->

            <!--/.row -->

            <!-- /.row -->
        </div>
        <!-- /.container -->

        <!-- /.container-fluid -->

        <!--/.container -->
    </section>
<?php
}
}
/* {/block 'content'} */
}
