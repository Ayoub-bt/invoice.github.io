<?php
/* Smarty version 4.3.0, created on 2023-05-05 17:59:14
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\add-quote.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_645535e29cf2e1_62544941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb299c8d269c60158654aab8293d8e4eae6a1369' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\add-quote.tpl',
      1 => 1683305953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645535e29cf2e1_62544941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1633069769645535e29a8ea6_39537373', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1463964434645535e29cb794_12271423', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_1633069769645535e29a8ea6_39537373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1633069769645535e29a8ea6_39537373',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_alias'];?>

                    </h2>
                </div>

                <style>
                    #invform label {
                        margin-bottom: 7px;
                    }
                </style>

                <div class="panel-container">
                    <div class="panel-content" id="ibox_form">
                        <form id="invform" method="post">
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="alert alert-danger" id="emsg" style="display: none;">
                                            <span id="emsgbody"></span>
                                        </div>
                                    </div>

                                    <!-- Subject -->
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="subject"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</label>
                                            <input type="text" class="form-control" name="subject" id="subject">
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-horizontal">

                                            <!-- Customer -->
                                            <div class="mb-3">
                                                <label for="cid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</label>

                                                <select id="cid" name="cid" class="form-select">
                                                    <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Contact'];?>
...</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value, 'cs');
$_smarty_tpl->tpl_vars['cs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cs']->value) {
$_smarty_tpl->tpl_vars['cs']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
"
                                                                <?php if ($_smarty_tpl->tpl_vars['p_cid']->value == ($_smarty_tpl->tpl_vars['cs']->value['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
 <?php if ($_smarty_tpl->tpl_vars['cs']->value['company'] != '') {?>- <?php echo $_smarty_tpl->tpl_vars['cs']->value['company'];
}?></option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                </select>

                                                <span class="help-block">
                                                    <a href="#" id="contact_add">| <?php echo $_smarty_tpl->tpl_vars['_L']->value['Or Add New Customer'];?>
</a>
                                                </span>

                                            </div>

                                            <!-- Address -->
                                            <div class="mb-3">
                                                <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
                                                <textarea id="address" readonly class="form-control" rows="1"></textarea>
                                            </div>

                                            <?php echo $_smarty_tpl->tpl_vars['extra_fields']->value;?>


                                            <!-- Quote Prefix -->
                                            <div class="mb-3">
                                                <label for="invoicenum"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote Prefix'];?>
</label>

                                                <input type="text" class="form-control" id="invoicenum" name="invoicenum" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['quotation_code_prefix'];?>
">
                                            </div>

                                            <!-- Quote Number -->
                                            <div class="mb-3">
                                                <label for="cn"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote Number'];?>
</label>

                                                <input type="text" class="form-control" id="cn" name="cn" value="<?php echo str_pad($_smarty_tpl->tpl_vars['config']->value['quotation_code_current_number'],$_smarty_tpl->tpl_vars['config']->value['number_pad'],'0',STR_PAD_LEFT);?>
">
                                            </div>


                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-horizontal">
                                            <!-- Date Created -->
                                            <div class="mb-3">
                                                <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date Created'];?>
</label>

                                                <input type="text" class="form-control" id="idate" name="idate" datepicker
                                                    data-date-format="dd-mm-yyyy" data-auto-close="true"
                                                    value="<?php echo $_smarty_tpl->tpl_vars['idate']->value;?>
">
                                            </div>

                                            <!-- Expiry Date -->
                                            <div class="mb-3" style="display: none;">
                                                <label for="edate"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expiry Date'];?>
</label>

                                                <input type="text" class="form-control" id="edate" name="edate" datepicker
                                                    data-date-format="dd-mm-yyyy" data-auto-close="true"
                                                    value="<?php echo ib_after_1_month();?>
">
                                            </div>

                                            <!-- Stage -->
                                            <div class="mb-3" style="display: none;">
                                                <label for="stage"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Stage'];?>
</label>

                                                <select class="form-select" name="stage" id="stage">
                                                    <option value="Draft"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Draft'];?>
</option>
                                                    <option value="Delivered"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delivered'];?>
</option>
                                                    <option value="Accepted"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accepted'];?>
</option>
                                                    <option value="Lost"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Lost'];?>
</option>
                                                    <option value="Dead"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dead'];?>
</option>
                                                </select>
                                            </div>

                                            <!-- Sales TAX -->
                                            <div class="mb-3">
                                                <label for="tid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales TAX'];?>
</label>

                                                <select id="tid" name="tid" class="form-select">
                                                    <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t']->value, 'ts');
$_smarty_tpl->tpl_vars['ts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ts']->value) {
$_smarty_tpl->tpl_vars['ts']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['ts']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ts']->value['name'];?>

                                                            (<?php ob_start();
echo number_format($_smarty_tpl->tpl_vars['ts']->value['rate'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                                                            %)
                                                        </option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                </select>

                                                <input type="hidden" id="stax" name="stax" value="0.00">

                                            </div>

                                            <!-- Discount -->
                                            <div class="mb-3">
                                                <label for="add_discount"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
</label>
                                                <a href="#" id="add_discount" class="btn btn-info btn-xs" style="margin-top: 5px;">
                                                    <i class="fal fa-minus-circle"></i>
                                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Discount'];?>

                                                </a>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>

                                        <!-- Proposal Text -->
                                        <div class="mb-3">
                                            <label for="proposal_text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Proposal Text'];?>
</label>
                                            <textarea class="form-control" id="proposal_text" name="proposal_text" rows="6"></textarea>
                                            <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_help_top'];?>
</span>
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                                <style>
                                    #invoice_items th,
                                    #invoice_items td {
                                        padding: 5px;
                                        text-align: center;
                                    }
                                </style>

                                <!-- Services -->
                                <div class="table-responsive m-t">
                                    <table class="table invoice-table" id="invoice_items">
                                        <thead>
                                        <tr>
                                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Service Ref'];?>
</th>
                                            <th width="50%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Name'];?>
</th>
                                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];?>
</th>
                                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
                                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tax'];?>
</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><input type="text" class="form-control item_ref" value="" name="ref[]"></td>
                                            <td><textarea class="form-control item_name" name="desc[]" rows="3"></textarea></td>
                                            <td><input type="number" class="form-control qty" value="" name="qty[]"></td>
                                            <td><input type="number" class="form-control item_price" name="amount[]" value=""></td>
                                            <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>
                                            <td>
                                                <select class="form-control taxed" name="taxed[]">
                                                    <option value="Yes">Oui</option>
                                                    <option value="No" selected="">Non</option>
                                                </select>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <hr>

                                </div>

                                <button type="button" class="btn btn-primary mb-3" id="blank-add">
                                    <i class="fal fa-plus"></i>
                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add blank Line'];?>

                                </button>
                                <button type="button" class="btn btn-primary mb-3" id="item-add">
                                    <i class="fal fa-search"></i>
                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Product OR Service'];?>

                                </button>
                                <button type="button" class="btn btn-danger mb-3" id="item-remove">
                                    <i class="fal fa-minus-circle"></i>
                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>

                                </button>

                                <!-- Summary -->
                                <div class="mt-3 row">
                                    <div class="col-md-4 offset-md-8">
                                        <table class="table invoice-total">
                                            <tbody>
                                            <tr>
                                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sub Total'];?>
 :</strong></td>
                                                <td id="sub_total" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
"
                                                    data-a-sep="" data-d-group="2">0.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
 <span id="is_pt"></span> :</strong></td>
                                                <td id="discount_amount_total" class="amount" data-a-sign=""
                                                    data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
" data-a-sep="" data-d-group="2">0.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TAX'];?>
 :</strong></td>
                                                <td id="taxtotal" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
"
                                                    data-a-sep="" data-d-group="2">0.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TOTAL'];?>
 :</strong></td>
                                                <td id="total" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
"
                                                    data-a-sep="" data-d-group="2">0.00
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <hr>

                                <div class="mb-3">
                                    <label for="customer_notes"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer Notes'];?>
</label>
                                    <textarea class="form-control" id="customer_notes" name="customer_notes" rows="6"></textarea>
                                    <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_help_footer'];?>
</span>
                                </div>

                                <div class="text-end">
                                    <input type="hidden" id="_dec_point" name="_dec_point" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
">
                                    <input type="hidden" id="taxed_type" name="taxed_type" value="individual">
                                    <button class="btn btn-primary" id="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>

                                    </button>
                                </div>

                            </div>

                            <!-- Discount modal -->
                            <div class="modal fade" id="discountModal" tabindex="-1" aria-labelledby="discountModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Discount'];?>
</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <label class="mb-2"><?php echo __('Type');?>
</label>

                                            <div class="mb-3">
                                                <div class="btn-group" role="group">
                                                    <input type="radio" class="btn-check discount_type" name="discount_type" id="radio_discount_type_p" autocomplete="off" value="p" checked>
                                                    <label class="btn btn-outline-primary" for="radio_discount_type_p">
                                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Percentage'];?>

                                                    </label>

                                                    <input type="radio" class="btn-check discount_type" name="discount_type" id="radio_discount_type_f" value="f" autocomplete="off">
                                                    <label class="btn btn-outline-primary" for="radio_discount_type_f">
                                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Fixed Amount'];?>

                                                    </label>

                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="mb-2"><?php echo __('Discount');?>
</label>
                                                <input type="number" class="form-control" id="discount_amount" name="discount_amount" value="">
                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>

            </div>
        </div>

    </div>



    
    <input type="hidden" id="_lan_set_discount" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Discount'];?>
">
    <input type="hidden" id="_lan_discount" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
">
    <input type="hidden" id="_lan_discount_type" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount Type'];?>
">
    <input type="hidden" id="_lan_percentage" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Percentage'];?>
">
    <input type="hidden" id="_lan_fixed_amount" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Fixed Amount'];?>
">
    <input type="hidden" id="_lan_btn_save" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
">
    <input type="hidden" id="_lan_no_results_found" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No results found'];?>
">


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1463964434645535e29cb794_12271423 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1463964434645535e29cb794_12271423',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $('.amount').autoNumeric('init');


            var _url = $("#_url").val();


            $('#invoice_items').on('change', 'select', function(){
                //   $('#taxtotal').html('dd');
                var taxrate = $('#stax').val().replace(',', '.');
                // $(this).val(taxrate);

            });

            var item_remove = $('#item-remove');
            item_remove.hide();


            $('#proposal_text').redactor({
                minHeight: 300,
            });

            $('#customer_notes').redactor({
                minHeight: 300,
            });


            function update_address(){

                var cid = $('#cid').val();
                if(cid != ''){
                    $.post(_url + 'contacts/render-address/', {
                        cid: cid
                    })
                        .done(function (data) {
                            var adrs = $("#address");
                            adrs.html(data);

                        });
                }

            }
            update_address();
            $('#cid').select2({
                language: {
                    noResults: function () {
                        return $("#_lan_no_results_found").val();
                    }
                }
            })
                .on("change", function(e) {
                    // mostly used event, fired to the original element when the value changes
                    // log("change val=" + e.val);
                    //  alert(e.val);

                    update_address();
                });

            item_remove.on('click', function(){
                $("#invoice_items tr.info").fadeOut(300, function(){
                    $(this).remove();
                    calculateTotal();
                });
            });


            var $modal = $('#cloudonex_body');

            $('#item-add').on('click', function () {

                $.fancybox.open({
                    src  : base_url + 'ps/modal-list/',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#modal_items_table').dataTable(
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
                                });
                        },
                        touch: false,
                        autoFocus: false,
                    }
                });

            });


            /*
             / @since v 2.0
             */

            $('#contact_add').on('click', function(e){
                e.preventDefault();
                // create the backdrop and wait for next modal to be triggered
                $.fancybox.open({
                    src  : _url + 'contacts/modal_add/',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $("#country").select2({

                            });
                        }
                    }
                });

            });

            $('#blank-add').on('click', function(){
                $("#invoice_items").find('tbody')
                    .append(
                        '<tr><td><input type="text" class="form-control item_ref" value="" name="ref[]"></td><td><textarea class="form-control item_name" name="desc[]" rows="3"></textarea></td> <td><input type="text" class="form-control qty" value="" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value=""></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly value=""></td> <td> <select class="form-control taxed" name="taxed[]"> <option value="Yes">Yes</option> <option value="No" selected>No</option></select></td></tr>'
                    );

            });

            $('#invoice_items').on('click', '.item_name', function(){
                $("tr").removeClass("info");
                $(this).closest('tr').addClass("info");
                item_remove.show();
            });


            $modal.on('click', '.update', function(){
                var tableControl= document.getElementById('items_table');

                $('input:checkbox:checked', tableControl).each(function() {

                    var item_code = $(this).closest('tr').find('td:eq(1)').text();
                    var item_name = $(this).closest('tr').find('td:eq(2)').text();

                    var item_price = $(this).closest('tr').find('td:eq(3)').text();

                    //  obj.push(innertext);
                    $("#invoice_items").find('tbody')
                        .append(
                            '<tr> <td><input type="text" class="form-control item_ref" value="' + item_code + '" name="ref[]"></td> <td><textarea class="form-control item_name" name="desc[]" rows="3">' + item_name + '</textarea></td> <td><input type="text" class="form-control qty" value="1" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value="' + parseInt(item_price) + '"></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly value=""></td> <td> <select class="form-control taxed" name="taxed[]"> <option value="Yes">Yes</option> <option value="No" selected>No</option></select></td></tr>'
                        );
                });


                $.fancybox.close();

            });


            $modal.on('click', '.contact_submit', function(e){
                e.preventDefault();

                var _url = $("#_url").val();
                $.post(_url + 'contacts/add-post/', {


                    account: $('#account').val(),
                    address: $('#m_address').val(),
                    company: $('#company').val(),

                    city: $('#city').val(),
                    state: $('#state').val(),
                    zip: $('#zip').val(),
                    country: $('#country').val(),
                    phone: $('#phone').val(),
                    email: $('#email').val()

                })
                    .done(function (data) {

                        var _url = $("#_url").val();
                        if ($.isNumeric(data)) {

                            // location.reload();
                            window.location = _url + 'quotes/new/1/' + data + '/';

                        }
                        else {

                            $("#cid").select2('data', { id: newID, text: newText });
                        }
                    });


            });

            const discountModal = new bootstrap.Modal('#discountModal', {
                keyboard: false,
            });

            const discount_types = document.querySelectorAll('input[name="discount_type"]');
            const discount_value = document.querySelector('#discount_value');

            discount_types.forEach((discount_type) => {
                discount_type.addEventListener('change', (event) => {
                    if (event.target.value === 'p') {
                        discount_value.setAttribute('max', '100');
                        discount_value.setAttribute('min', '0');
                    } else {
                        discount_value.removeAttribute('max');
                        discount_value.removeAttribute('min');
                    }

                });

            });


            $("#add_discount").click(function (e) {

                e.preventDefault();

                discountModal.show();


            });




            //var callbacks = $.Callbacks();
            //callbacks.add( updateTotal );
            //callbacks.fire(  alert('done') );


            $(".progress").hide();
            $("#emsg").hide();
            $("#submit").click(function (e) {
                e.preventDefault();
                $('#ibox_form').block({ message: null });
                var _url = $("#_url").val();
                $.post(_url + 'quotes/add-post/', $('#invform').serialize(), function(data){

                    var _url = $("#_url").val();
                    if ($.isNumeric(data)) {

                        window.location = _url + 'quotes/edit/' + data + '/';
                    }
                    else {
                        $('#ibox_form').unblock();
                        var body = $("html, body");
                        body.animate({ scrollTop:0 }, '1000', 'swing');
                        $("#emsgbody").html(data);
                        $("#emsg").show("slow");
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
