<?php
/* Smarty version 4.3.0, created on 2023-05-03 18:34:58
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\companies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64529b42b6f6e1_24314205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4888cee124abb54d415a3475f7723f6e5a083ae6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\companies.tpl',
      1 => 1682984904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64529b42b6f6e1_24314205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23671561364529b42b5ba51_92135583', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26316315864529b42b6b7c9_61632022', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_199511376964529b42b5c088_54692136 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />

    <?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_23671561364529b42b5ba51_92135583 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_23671561364529b42b5ba51_92135583',
  ),
  'head' => 
  array (
    0 => 'Block_199511376964529b42b5c088_54692136',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199511376964529b42b5c088_54692136', "head", $this->tplIndex);
?>



    <div class="row">

        <div class="col-md-12">

            <div class="panel">

                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Companies'];?>
</h2>

                    <div class="panel-toolbar">
                        <a href="#" class="btn btn-primary add_company waves-effect waves-light" id="add_company"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Company'];?>
</a>

                    </div>
                </div>

                <div class="panel-container show">

                    <div class="panel-content">
                        <div class="table-responsive">
                            <table class="table w-100" id="clx_datatable">
                                <thead
                                        <?php if (empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                                            style="background:#f0f2ff"
                                            <?php }?>
                                         >
                                <tr>
                                    <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logo'];?>
</th>
                                    <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
</th>
                                    <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</th>
                                    <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</th>
                                    <th class="text-end bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>


                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?>
                                    <tr data-id="<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
">
                                        <td>

                                            <?php if ($_smarty_tpl->tpl_vars['company']->value['logo_url'] != '') {?>
                                                <img style="max-height: 40px;" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/companies/<?php echo $_smarty_tpl->tpl_vars['company']->value->logo_url;?>
">
                                            <?php } else { ?>
                                                <span class="clx-avatar"><?php echo $_smarty_tpl->tpl_vars['company']->value['company_name'][0];?>
</span>
                                            <?php }?>

                                        </td>
                                        <td>
                                            <a class="cview" id="ae<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
" href="#">
                                                <strong>
                                                    <?php echo $_smarty_tpl->tpl_vars['company']->value['company_name'];?>

                                                    <?php if ($_smarty_tpl->tpl_vars['company']->value['code'] != '') {?>
                                                        <br>
                                                        <?php echo $_smarty_tpl->tpl_vars['company']->value['code'];?>

                                                    <?php }?>
                                                </strong>

                                            </a>
                                        </td>
                                        <td><a href="#" class="send_email text-info h6"><?php echo $_smarty_tpl->tpl_vars['company']->value['email'];?>
</a> </td>
                                        <td class="h6"><?php echo $_smarty_tpl->tpl_vars['company']->value['phone'];?>
</td>
                                        <td>
                                            <div class="d-flex float-end">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
" id="ae<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
" class="btn btn-secondary-light btn-icon cview me-2" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
"><i class="fal fa-building"></i> </a>

                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
" id="be<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
" class="btn btn-secondary-light btn-icon cedit me-2" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
"><i class="fal fa-pencil"></i> </a>

                                                <a href="#" class="btn btn-secondary-light btn-icon cdelete" id="c<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
"><i class="fal fa-trash-alt"></i> </a>
                                            </div>
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
            </div>
        </div>



    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-primary waves-effect waves-light add_company" href="#">
            <i class="fal fa-plus"></i>
        </a>
    </div>


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_26316315864529b42b6b7c9_61632022 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_26316315864529b42b6b7c9_61632022',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
>

        $(function() {


            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    lengthChange: false,
                    dom:
                    /*	--- Layout Structure
                        --- Options
                        l	-	length changing input control
                        f	-	filtering input
                        t	-	The table!
                        i	-	Table information summary
                        p	-	pagination control
                        r	-	processing display element
                        B	-	buttons
                        R	-	ColReorder
                        S	-	Select

                        --- Markup
                        < and >				- div element
                        <"class" and >		- div with a class
                        <"#id" and >		- div with an ID
                        <"#id.class" and >	- div with an ID and a class

                        --- Further reading
                        https://datatables.net/reference/option/dom
                        --------------------------------------
                     */
                        "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [
                        /*{
                        	extend:    'colvis',
                        	text:      'Column Visibility',
                        	titleAttr: 'Col visibility',
                        	className: 'mr-sm-3'
                        },*/
                        {
                            extend: 'pdfHtml5',
                            text: 'PDF',
                            titleAttr: 'Generate PDF',
                            className: 'btn-danger-light btn-sm mr-1'
                        },
                        {
                            extend: 'excelHtml5',
                            text: 'Excel',
                            titleAttr: 'Generate Excel',
                            className: 'btn-success-light btn-sm mr-1'
                        },
                        {
                            extend: 'csvHtml5',
                            text: 'CSV',
                            titleAttr: 'Generate CSV',
                            className: 'btn-primary-light btn-sm mr-1'
                        },
                        {
                            extend: 'copyHtml5',
                            text: 'Copy',
                            titleAttr: 'Copy to clipboard',
                            className: 'btn-info-light btn-sm mr-1'
                        },
                        {
                            extend: 'print',
                            text: 'Print',
                            titleAttr: 'Print Table',
                            className: 'btn-secondary-light btn-sm'
                        }
                    ],
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




            var tab = 'summary';


            function updateDiv(action,base_url,cid,cb){

                var $ibox_form = $('#ibox_form');
                $ibox_form.block({ message: block_msg });

                // if (window.history.replaceState) {
                //     window.history.replaceState( {} , '',  _url + 'contacts/view/'+ cid +'/' + action + '/' );
                // }


                $('.list-group a.active').removeClass('active');
                $("#"+action).addClass("active");



                $.post(base_url +  "contacts/company_" +action + '/', {
                    cid: cid

                })
                    .done(function (data) {

                        $("#application_ajaxrender").html(data);
                        $ibox_form.unblock();

                        cb();


                        $('.amount').autoNumeric('init');

                    });

            }

            var cb  =  function cb(){



                switch(tab) {
                    case "memo":


                        // $('#v_memo').redactor(
                        //     {
                        //         minHeight: 200 // pixels
                        //     }
                        // );

                        break;





                    default:

                    //cb = function cb (){
                    //    //  return;
                    //};

                }




            };



            var _url = $("#_url").val();




            var $modal = $('#cloudonex_body');

            $('[data-bs-toggle="tooltip"]').tooltip();

            $('.add_company').on('click', function(e){

                e.preventDefault();

                $.fancybox.open({
                    src  :  base_url + 'contacts/modal_add_company',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $("#ajax-modal .country").select2();
                        }
                    },
                });

            });



            // function sendEmail(email,loader) {
            //
            //
            //
            //     $modal.load( base_url + 'handler/email/' + email + '/', '', function(){
            //
            //         $modal.modal();
            //
            //         if(loader){
            //             $('body').modalmanager('loading');
            //         }
            //
            //         ib_editor('#email_content',300,false);
            //
            //     });
            //
            // }


            $modal.on('click', '.modal_submit', function(e){

                e.preventDefault();

                $.post( _url + "contacts/add_company_post/", $("#ib_modal_form").serialize())
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            location.reload();

                        }

                        else {
                            toastr.error(data);
                        }

                    });

            });

            $modal.on('click', '.cedit', function(e){

                e.preventDefault();
                var id = this.id;

                $.fancybox.open({
                    src  :  base_url + 'contacts/modal_add_company/' + id,
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $("#ajax-modal .country").select2();
                        }
                    },
                });


            });

            $modal.on('click', '.cdelete', function(e){

                e.preventDefault();
                var id = this.id;
                app.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "delete/company/" + id + '/';
                    }
                });


            });


            $modal.on('click', '.cview', function(e){

                e.preventDefault();
                var id = this.id;

                $.fancybox.open({
                    src  :  base_url + 'contacts/modal_view_company/'+id,
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            updateDiv('summary',base_url,id,cb);
                        }
                    },
                });

            });




            $modal.on('click', '.act_memo_update', function(e){

                e.preventDefault();


                $.post( base_url + "contacts/company_update_notes/", { id: $('#base_cid').val(), memo:$("#v_memo").val() })
                    .done(function( data ) {

                        toastr.success(data);

                    });

            });







            $modal.on('click', '.li_memo', function(e){

                var cid = $('#base_cid').val();

                e.preventDefault();

                tab = 'memo';

                updateDiv(tab,base_url,cid,cb);

            });


            $modal.on('click', '.li_customers', function(e){

                var cid = $('#base_cid').val();

                e.preventDefault();

                tab = 'customers';

                updateDiv(tab,base_url,cid,cb);

            });

            $modal.on('click', '.li_summary', function(e){

                var cid = $('#base_cid').val();

                e.preventDefault();

                tab = 'summary';

                updateDiv(tab,base_url,cid,cb);

            });


            $modal.on('click', '.li_summary', function(e){

                var cid = $('#base_cid').val();

                e.preventDefault();

                tab = 'summary';

                updateDiv(tab,base_url,cid,cb);

            });

            $modal.on('click', '.li_invoices', function(e){

                var cid = $('#base_cid').val();

                e.preventDefault();

                tab = 'invoices';

                updateDiv(tab,base_url,cid,cb);

            });


            $modal.on('click', '.li_quotes', function(e){

                var cid = $('#base_cid').val();

                e.preventDefault();

                tab = 'quotes';

                updateDiv(tab,base_url,cid,cb);

            });


            $modal.on('click', '.li_orders', function(e){

                var cid = $('#base_cid').val();

                e.preventDefault();

                tab = 'orders';

                updateDiv(tab,base_url,cid,cb);

            });


            $modal.on('click', '.li_files', function(e){

                var cid = $('#base_cid').val();

                e.preventDefault();

                tab = 'files';

                updateDiv(tab,base_url,cid,cb);

            });


            $modal.on('click', '.li_transactions', function(e){

                var cid = $('#base_cid').val();

                e.preventDefault();

                tab = 'transactions';

                updateDiv(tab,base_url,cid,cb);

            });


            $modal.on('click', '.li_tickets', function(e){

                var cid = $('#base_cid').val();

                e.preventDefault();

                tab = 'tickets';

                updateDiv(tab,base_url,cid,cb);

            });


            $modal.on('click', '.send_email', function(e){
                e.preventDefault();
                sendEmail($(this).html(),true);

            });

            $("#ib_data_table").on('click', '.send_email', function(e){
                e.preventDefault();
                sendEmail($(this).html(),false);
            });


            $modal.on('click', '#btn_send_email', function(e){

                e.preventDefault();
                $modal.modal('loading');
                $.post( base_url + "handler/send_email_post/", {
                    to: $('#toemail').val(),
                    subject: $('#subject').val(),
                    message: tinyMCE.activeEditor.getContent()

                })
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            location.reload();

                        }

                        else {
                            $modal.modal('loading');
                            toastr.error(data);
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
