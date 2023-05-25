<?php
/* Smarty version 4.3.0, created on 2023-05-04 22:06:04
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\crm_groups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64541e3c319a45_13409732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43b0db030d74b0dedf74e5272d4df94251f305bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\crm_groups.tpl',
      1 => 1682984906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64541e3c319a45_13409732 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75994892764541e3c3029a7_24076609', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34309250164541e3c3071f7_08279895', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153332299364541e3c316593_53639782', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_75994892764541e3c3029a7_24076609 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_75994892764541e3c3029a7_24076609',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php if (empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
        <style>
            .table-striped tbody tr:nth-of-type(odd) {
                background-color: #F7F9FC;
            }
        </style>
    <?php }?>

<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_34309250164541e3c3071f7_08279895 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_34309250164541e3c3071f7_08279895',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Groups'];?>
</h2>
                    <div class="panel-toolbar">
                        <div class="btn-group">
                            <a href="#" class="btn btn-sm btn-success" id="add_new_group"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Group'];?>
</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reorder/groups/" class="btn btn-sm btn-primary"><i class="fal fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Reorder'];?>
</a>
                        </div>


                    </div>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <div class="thead-light">
                            <table class="table table-striped">
                                <th><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Group'];?>
</strong></th>
                                <th><strong><?php echo __('Customers');?>
</strong></th>
                                <th class="text-end"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gs']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
                                    <tr>
                                        <td><strong><?php echo $_smarty_tpl->tpl_vars['g']->value['gname'];?>
</strong></td>

                                        <td>
                                            <strong><?php echo Contact::where('gid',$_smarty_tpl->tpl_vars['g']->value['id'])->count();?>
</strong>
                                        </td>

                                         <td>
                                             <div class="float-end">
                                                 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/find_by_group/<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
/" class="btn btn-sm btn-info"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['List Contacts'];?>
</a>
                                                 <a href="#" class="btn btn-sm btn-primary edit_group" id="e<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['g']->value['gname'];?>
"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>

                                                 <a href="javascript:;" id="g<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
" class="btn btn-sm btn-danger cdelete"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                                             </div>


                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                            </table>
                        </div>



                    </div>

                    <br>
                    <br>


                </div>
            </div>



        </div>



    </div>

    <input type="hidden" name="_msg_add_new_group" id="_msg_add_new_group" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Group'];?>
">
    <input type="hidden" name="_msg_group_name" id="_msg_group_name" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Group Name'];?>
">
    <input type="hidden" name="_msg_edit" id="_msg_edit" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
">
    <input type="hidden" name="_msg_ok" id="_msg_ok" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['OK'];?>
">
    <input type="hidden" name="_msg_cancel" id="_msg_cancel" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
">


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_153332299364541e3c316593_53639782 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_153332299364541e3c316593_53639782',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(document).ready(function () {

            var _url = $("#_url").val();


            $("#add_new_group").click(function(e){

                e.preventDefault();

                (async () => {

                    const { value: group_name } = await Swal.fire({
                        title: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Group'];?>
',
                        input: 'text',
                        inputLabel: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Group Name'];?>
',
                        inputPlaceholder: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Group Name'];?>
',
                    })

                    if (group_name) {
                        $.post(  _url + "contacts/add_group/", { group_name: group_name })
                            .done(function( data ) {

                                if ($.isNumeric(data)) {

                                    location.reload();

                                }

                                else {
                                    Swal.fire({
                                        title: '<?php echo __('Error');?>
',
                                        text: data,
                                        type: 'error',
                                        confirmButtonText: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
'
                                    })
                                }

                            });
                    }

                })()



            });


            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                app.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "delete/crm-group/" + id;
                    }
                });



            });


            $(".edit_group").click(function (e) {
                e.preventDefault();

                var eid = this.id;

                // alert(eid);

                var gname = $( this ).attr( "data-name" );


                (async () => {

                    const { value: group_name } = await Swal.fire({
                        title: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
',
                        input: 'text',
                        inputLabel: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Group Name'];?>
',
                        inputPlaceholder: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Group Name'];?>
',
                        inputValue: gname,
                    })

                    if (group_name) {
                        $.post(  _url + "contacts/group_edit/", { id: eid, gname: group_name })
                            .done(function( data ) {
                                location.reload();
                            });
                    }

                })()



            });




        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
