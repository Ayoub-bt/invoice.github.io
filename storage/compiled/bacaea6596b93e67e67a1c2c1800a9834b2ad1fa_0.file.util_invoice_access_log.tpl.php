<?php
/* Smarty version 4.3.0, created on 2023-04-29 00:08:08
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\util_invoice_access_log.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_644c98288d8ed9_50862918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bacaea6596b93e67e67a1c2c1800a9834b2ad1fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\util_invoice_access_log.tpl',
      1 => 1673649396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644c98288d8ed9_50862918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1866142583644c98288c5324_26727234', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2413579644c98288c5f14_76989887', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1502998436644c98288d71c2_61883465', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_1866142583644c98288c5324_26727234 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1866142583644c98288c5324_26727234',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_2413579644c98288c5f14_76989887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2413579644c98288c5f14_76989887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Records'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['found'];?>

                        . <?php echo $_smarty_tpl->tpl_vars['_L']->value['Page'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['page'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['of'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['lastpage'];?>
. </h2>
                    


                </div>
                <div class="panel-container" id="application_ajaxrender">
                    <div class="panel-content">
                        <div class="table-responsive">

                            <table class="table table-bordered sys_table" id="clx_datatable">
                                <thead style="background: #f0f2ff">
                                <tr>

                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['IP'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Browser'];?>
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
                                    <tr>

                                        <td><?php echo date(($_smarty_tpl->tpl_vars['config']->value['df']).(' H:i:s'),strtotime($_smarty_tpl->tpl_vars['ds']->value['viewed_at']));?>
</td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['customer'];?>
</a> </td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['iid'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['iid'];?>
</a> </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['ip'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['country'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['city'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['browser'];?>
</td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>

                        </div>

                    </div>




                    <?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>


                </div>


            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1502998436644c98288d71c2_61883465 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1502998436644c98288d71c2_61883465',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php echo '<script'; ?>
>
        $(function() {

            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    lengthChange: false,
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

            $('.has-tooltip').tooltip();
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
