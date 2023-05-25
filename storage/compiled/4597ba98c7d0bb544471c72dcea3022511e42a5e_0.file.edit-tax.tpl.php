<?php
/* Smarty version 4.3.0, created on 2022-12-31 04:51:54
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/edit-tax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b0063ab17347_61488643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4597ba98c7d0bb544471c72dcea3022511e42a5e' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/edit-tax.tpl',
      1 => 1635678024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b0063ab17347_61488643 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33688512463b0063ab01b93_35200237', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_33688512463b0063ab01b93_35200237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_33688512463b0063ab01b93_35200237',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit TAX'];?>
</h5>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/edit-tax-post/">
                            <div class="mb-3">
                                <label for="taxname"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
                                <input type="text" class="form-control" id="taxname" name="taxname" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
">
                            </div>
                            <div class="mb-3">
                                <label for="taxrate"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Rate'];?>
</label>
                                <input type="text" class="form-control amount" id="taxrate" name="taxrate" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 "  data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
" data-d-group="2" value="<?php if ($_smarty_tpl->tpl_vars['ib_money_format_apply']->value) {
ob_start();
echo $_smarty_tpl->tpl_vars['d']->value['rate'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
} else {
echo $_smarty_tpl->tpl_vars['d']->value['rate']+0;
}?>">
                            </div>

                            <input type="hidden" id="tid" name="tid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                            <button type="submit" class="btn btn-primary"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button> | <?php echo $_smarty_tpl->tpl_vars['_L']->value['Or'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tax/list/"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Back To The List'];?>
</a>
                        </form>
                    </div>




                </div>
            </div>



        </div>



    </div>
<?php
}
}
/* {/block "content"} */
}
