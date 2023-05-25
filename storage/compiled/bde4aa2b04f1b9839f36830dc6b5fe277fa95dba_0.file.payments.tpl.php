<?php
/* Smarty version 4.3.0, created on 2023-04-28 23:49:00
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\payments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_644c93ac668770_42257337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bde4aa2b04f1b9839f36830dc6b5fe277fa95dba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\payments.tpl',
      1 => 1673649396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644c93ac668770_42257337 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1514952830644c93ac641487_88113548', "head");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1409747981644c93ac647012_00841156', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1099287287644c93ac6663b6_13235332', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_1514952830644c93ac641487_88113548 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1514952830644c93ac641487_88113548',
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
class Block_1409747981644c93ac647012_00841156 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1409747981644c93ac647012_00841156',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payments'];?>
</h2>

                </div>

                <div class="panel-container">
                    <div class="panel-content">
                        <div class="table-responsive">

                            <table class="table table-striped" id="clx_datatable">
                                <thead style="background: #f0f2ff">
                                <tr>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
#</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>


                                    <th class="text-end"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>

                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Transaction ID'];?>
</th>

                                    <th class="text-end"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cr'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>

                                </thead>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                    <tr class="<?php if ($_smarty_tpl->tpl_vars['ds']->value['cr'] == '0.00') {?>warning <?php } else { ?>info<?php }?>">
                                        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['iid'];?>
</td>
                                        <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                                        <td class="h6"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>
                                        <td class="text-end amount text-info"><?php echo $_smarty_tpl->tpl_vars['ds']->value['amount'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>
                                        <td class="text-end amount"><?php echo $_smarty_tpl->tpl_vars['ds']->value['cr'];?>
</td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</a></td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                            </table>
                        </div>


                    </div>
                </div>

            </div>

        </div>

    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1099287287644c93ac6663b6_13235332 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1099287287644c93ac6663b6_13235332',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No items to display'];?>
",
                        "info":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing _START_ to _END_ of _TOTAL_ entries'];?>
",
                        "infoEmpty":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing 0 to 0 of 0 entries'];?>
",
                        buttons: {
                            pageLength: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Show all'];?>
'
                        },
                        searchPlaceholder: "<?php echo __('Search');?>
"
                    },
                }
            );
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
