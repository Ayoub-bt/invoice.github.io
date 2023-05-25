<?php
/* Smarty version 4.3.0, created on 2023-05-04 23:33:41
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\list-tax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_645432c59bd596_59433242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dcd00c953bec55fd80e2359d7085070c147f713' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\list-tax.tpl',
      1 => 1682984912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645432c59bd596_59433242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_623088551645432c59a66a2_26098320', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1569097018645432c59a7495_95342363', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_602290529645432c59bc898_54708182', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_623088551645432c59a66a2_26098320 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_623088551645432c59a66a2_26098320',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />

<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_1569097018645432c59a7495_95342363 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1569097018645432c59a7495_95342363',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales Taxes'];?>
 </h2>
            <div class="panel-toobar">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/add-tax/" id="item_add" class="btn btn-primary"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Tax'];?>
 </a>
            </div>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <table class="table table-bordered table-striped table-hover sys_table">
                    <thead>
                    <tr>
                        <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                        <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tax Rate'];?>
</th>

                        <th class="h6 text-end"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                        <tr id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
">
                            <td> <?php if ($_smarty_tpl->tpl_vars['ds']->value['is_default'] == '1') {?> <label class="label label-success label-sm"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Default'];?>
</label> <?php }?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
 </td>
                            <td>


                                <?php if ($_smarty_tpl->tpl_vars['ds']->value['rate'] == '0.000' || $_smarty_tpl->tpl_vars['ds']->value['rate'] == '0.00') {?>
                                    0%
                                <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['rate'] == '5.000') {?>
                                    5%
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['ds']->value['rate'];?>
%
                                <?php }?>



                            </td>
                            <td class="text-end">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/edit-tax/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-secondary"><i class="fal fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
 </a>


                                <?php if ($_smarty_tpl->tpl_vars['ds']->value['is_default'] != '1') {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/tax-make-default/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-info"><i class="fal fa-star"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Make Default'];?>
 </a>
                                <?php }?>
                                <button type="button" id="t<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-danger cdelete"><i class="fal fa-trash-alt"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
 </button>
                            </td>

                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </tbody>
                </table>
            </div>
        </div>






    </div>
    <input type="hidden" id="_lan_are_you_sure" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_602290529645432c59bc898_54708182 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_602290529645432c59bc898_54708182',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                app.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        window.location.href = base_url + "tax/delete/" + id;
                    }
                });
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
