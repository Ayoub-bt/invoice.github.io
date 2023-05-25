<?php
/* Smarty version 4.3.0, created on 2023-05-01 15:09:32
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\add-tax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64500e6cbd1781_10470874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e185a3ee602832ec0f0ae51fc20a52d91fc8e15f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\add-tax.tpl',
      1 => 1673649396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64500e6cbd1781_10470874 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165277189764500e6cbcce68_55696545', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_165277189764500e6cbcce68_55696545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_165277189764500e6cbcce68_55696545',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-6">

            <div class="card">
                <div class="card-body">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add TAX'];?>
</h5>

                    <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/add-tax-post/">
                        <div class="mb-3">
                            <label for="taxname"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
                            <input type="text" class="form-control" id="taxname" name="taxname">
                        </div>
                        <div class="mb-3">
                            <label for="taxrate"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Rate'];?>
</label>
                            <input type="text" class="form-control" id="taxrate" name="taxrate">
                        </div>


                        <button type="submit" class="btn btn-primary"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button> | <?php echo $_smarty_tpl->tpl_vars['_L']->value['Or'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tax/list/"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Back To The List'];?>
</a>
                    </form>

                </div>
            </div>



        </div>



    </div>
<?php
}
}
/* {/block "content"} */
}
