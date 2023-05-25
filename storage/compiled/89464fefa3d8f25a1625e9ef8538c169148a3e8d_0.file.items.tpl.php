<?php
/* Smarty version 4.3.0, created on 2023-01-07 14:36:15
  from '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b9c9af3d7419_39355870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89464fefa3d8f25a1625e9ef8538c169148a3e8d' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/items.tpl',
      1 => 1672095351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b9c9af3d7419_39355870 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131676827363b9c9af376492_97735279', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155124290963b9c9af3d58c2_45514212', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./layout.tpl");
}
/* {block "content"} */
class Block_131676827363b9c9af376492_97735279 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_131676827363b9c9af376492_97735279',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section class="padding-100-0 position-relative">
        <div class="body_overlay_ono z-index-3"></div>
        <div class="container">

            <?php if ($_smarty_tpl->tpl_vars['group']->value && $_smarty_tpl->tpl_vars['group']->value->header_content) {?>
                <h5 class="title-default-hx-two"><?php echo $_smarty_tpl->tpl_vars['group']->value->header_content;?>
</h5>
            <?php }?>

            <div class="row justify-content-start second-pricing-table-container mr-tp-30">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>

                    <div class="col-md-4">
                        <div class="second-pricing-table <?php if ($_smarty_tpl->tpl_vars['item']->value->featured) {?>active<?php }?>">
                            <h5 class="second-pricing-table-title">Basic plan <span>mostly for personal using</span></h5>
                            <span class="second-pricing-table-price monthly">

                            <?php if ($_smarty_tpl->tpl_vars['item']->value->one_time_fee && $_smarty_tpl->tpl_vars['item']->value->one_time_fee > 0) {?>
                                <i class="monthly"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->one_time_fee),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
<small><?php echo $_smarty_tpl->tpl_vars['_L']->value['One Time'];?>
</small></i>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->price_monthly && $_smarty_tpl->tpl_vars['item']->value->price_monthly > 0) {?>
                            <i class="monthly"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->price_monthly),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
<small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Monthly'];?>
</small></i>

                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->price_yearly && $_smarty_tpl->tpl_vars['item']->value->price_yearly > 0) {?>
                            <i class="monthly"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->price_yearly),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
<small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Yearly'];?>
</small></i>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->price_quarterly && $_smarty_tpl->tpl_vars['item']->value->price_quarterly > 0) {?>
                            <i class="monthly"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->price_quarterly),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
<small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quarterly'];?>
</small></i>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->price_half_yearly && $_smarty_tpl->tpl_vars['item']->value->price_half_yearly > 0) {?>
                            <i class="monthly"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->price_half_yearly),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
<small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Half Yearly'];?>
</small></i>


                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->two_years && $_smarty_tpl->tpl_vars['item']->value->two_years > 0) {?>
                            <i class="monthly"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->two_years),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
<small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Two Years'];?>
</small></i>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->price_three_years && $_smarty_tpl->tpl_vars['item']->value->price_three_years > 0) {?>
                            <i class="monthly"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->price_three_years),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
<small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Three Years'];?>
</small></i>
                            <?php }?>


	                    </span>

                            <?php if (count(get_available_item_pricing_terms($_smarty_tpl->tpl_vars['item']->value)) > 1) {?>

                                <select class="form-select my-2 select_payment_term" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" data-slug="<?php echo $_smarty_tpl->tpl_vars['item']->value->slug;?>
" >
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, get_available_item_pricing_terms($_smarty_tpl->tpl_vars['item']->value), 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                        <option data-price="<?php echo formatCurrency($_smarty_tpl->tpl_vars['value']->value['price'],$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
" data-term="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                                                <?php if ((isset($_smarty_tpl->tpl_vars['shopping_cart_items']->value['hosting'][$_smarty_tpl->tpl_vars['item']->value->id]['term'])) && ($_smarty_tpl->tpl_vars['shopping_cart_items']->value['hosting'][$_smarty_tpl->tpl_vars['item']->value->id]['term'] === $_smarty_tpl->tpl_vars['key']->value)) {?>
                                                    selected
                                                <?php }?>
                                        ><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
 <?php echo formatCurrency($_smarty_tpl->tpl_vars['value']->value['price'],$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>

                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['item']->value->features && count(json_decode($_smarty_tpl->tpl_vars['item']->value->features))) {?>
                                <ul class="second-pricing-table-body">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['item']->value->features), 'feature_line');
$_smarty_tpl->tpl_vars['feature_line']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature_line']->value) {
$_smarty_tpl->tpl_vars['feature_line']->do_else = false;
?>
                                        <li><?php echo $_smarty_tpl->tpl_vars['feature_line']->value;?>
</li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            <?php }?>




                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/buy-now/<?php echo $_smarty_tpl->tpl_vars['item']->value->slug;?>
" class="second-pricing-table-button"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Buy Now'];?>
</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/item/<?php echo $_smarty_tpl->tpl_vars['item']->value->slug;?>
" class="second-pricing-table-button"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Learn More'];?>
</a>

                        </div>
                    </div>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



            </div><!-- end row -->
        </div><!-- end container -->
    </section>




<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_155124290963b9c9af3d58c2_45514212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_155124290963b9c9af3d58c2_45514212',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {
            $('.select_payment_term').on('change',function () {
                let that = $(this);

                that.closest('.pricing_block').find('.selected_price').html(that.find(':selected').data('price'));
                that.closest('.pricing_block').find('.selected_term').html(that.find(':selected').data('term'));
                that.closest('.pricing_block').find('.btn_buy_now').attr('href',base_url + 'client/buy-now/' + that.data('slug') + '/' + that.find(':selected').data('term'));

            });
        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
