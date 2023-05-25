{extends file="$layouts_admin"}


{block name="content"}
    <div class="row" style="justify-content: center;">
        <div class="col-lg-10" id="application_ajaxrender">
            <div class="panel px-2" id="ibox">
                <div class="panel-hdr" style="justify-content: center;">
                    <div class="panel-toolbar pt-3 pb-3">
                        <input type="hidden" name="iid" value="{$d['id']}" id="iid">
                        <div class="btn-group flex-wrap" role="group" aria-label="...">

                            <!-- Mark As -->
                            <div class="btn-group" role="group">
                                <button type="button" class="btn  btn-primary btn-sm dropdown-toggle" style="border-radius: 0;" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fal fa-check"></i>  <span class="d-none d-md-inline">{$_L['Mark As']}</span>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    {if $d['status'] neq 'Paid'}
                                        <li class="dropdown-item set_invoice_status" data-status="Paid"><a href="javascript:;">{$_L['Paid']}</a></li>
                                    {/if}
                                    {if $d['status'] neq 'Unpaid'}
                                        <li class="dropdown-item set_invoice_status" data-status="Unpaid"><a href="javascript:;">{$_L['Unpaid']}</a></li>
                                    {/if}
                                    {if $d['status'] neq 'Partially Paid'}
                                        <li class="dropdown-item set_invoice_status set_invoice_status" data-status="Partially Paid"><a href="javascript:;">{$_L['Partially Paid']}</a></li>
                                    {/if}
                                    {if $d['status'] neq 'Cancelled'}
                                        <li class="dropdown-item set_invoice_status" data-status="Cancelled"><a href="javascript:;">{$_L['Cancelled']}</a></li>
                                    {/if}
                                </ul>
                            </div>

                            <!-- Preview -->
                            <a href="{$_url}client/iview/{$d['id']}/token_{$d['vtoken']}" target="_blank" class="btn btn-primary  btn-sm"><i class="fal fa-file-alt"></i> <span class="d-none d-md-inline">{$_L['Preview']}</span></a>

                            <!-- Edit -->
                            <a href="{$_url}invoices/edit/{$d['id']}" class="btn btn-info btn-sm"><i class="fal fa-pencil"></i> <span class="d-none d-md-inline">{$_L['Edit']}</span></a>

                            <!-- PDF -->
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fal fa-download"></i>
                                    <span class="d-none d-md-inline">{$_L['PDF']}</span>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <a href="{$_url}client/ipdf/{$d['id']}/token_{$d['vtoken']}/view/" target="_blank">
                                        <li class="dropdown-item">
                                            {$_L['View PDF']}
                                        </li>
                                    </a>
                                    <a href="{$_url}client/ipdf/{$d['id']}/token_{$d['vtoken']}/dl/">
                                        <li class="dropdown-item">
                                            {$_L['Download PDF']}
                                        </li>
                                    </a>
                                </ul>
                            </div>
                            
                            <!-- Clone -->
                            <a href="{$_url}invoices/clone/{$d['id']}" class="btn btn-warning btn-sm" style="border-radius: 0;"><i class="fal fa-copy"></i> <span class="d-none d-md-inline">{$_L['Clone']}</span></a>

                        </div>
                    </div>
                </div>
                
                <!-- Status -->
                {if $d['status'] eq 'Unpaid'}
                    <h5 class="alert alert-danger py-2 my-3 w-100 text-center">{$_L['Unpaid']}</h5>
                {elseif $d['status'] eq 'Paid'}
                    <h5 class="alert alert-success py-2 my-3 w-100 text-center">{$_L['Paid']}</h5>
                {elseif $d['status'] eq 'Partially Paid'}
                    <h5 class="alert alert-info py-2 my-3 w-100 text-center">{$_L['Partially Paid']}</h5>
                {else}
                    <h5 class="alert alert-info py-2 my-3 w-100 text-center">{$d['status']}</h5>
                {/if}

                <div class="panel-container">
                    <div class="panel-content">
                        <style>
                            .invoice * {
                                font-size: 96%;
                            }
                        </style>

                        <div class="invoice">
                            <div class="bill-info">
                                <div class="row">

                                    <!-- Company info -->
                                    <div class="col-6">
                                        <div class="bill-data">

                                            <!-- Logo -->
                                            <div class="ib">
                                                <img src="{$app_url}storage/system/{$config['logo_default']}" alt="Logo" style="margin-bottom: 15px;">
                                            </div>

                                            <b>{$config['CompanyName']}</b>

                                            <!-- Address -->
                                            <address class="ib mr-xlg">
                                                {$config['caddress']}
                                                <!-- Phone -->
                                                <!-- {if ($config['CompanyPhone'])}
                                                    <strong>{$_L['Phone']}:</strong>
                                                    {$config['CompanyPhone']}
                                                {/if} -->

                                                <!-- Email -->
                                                {if ($config['sysEmail'])}
                                                    <br>
                                                    {$config['sysEmail']}
                                                {/if}

                                                <br>
                                                № TVA intracommunautaire: FR47920784766
                                                <br>
                                                № Siret: 92078476600015
                                                <br>
                                                Code NAF: 8121Z
                                            </address>

                                        </div>
                                    </div>

                                    <!-- Client info -->
                                    <div class="col-6">
                                        <div class="bill-to">

                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            
                                            <address>
                                                <!-- Full Name - Company -->
                                                {if $a['company'] neq ''}
                                                    <b>{$a['company']}</b>
                                                    <br>
                                                    <span class="text-capitalize">
                                                        {$d['account']}
                                                    </span>
                                                    <br>
                                                {else}
                                                    <span class="text-capitalize">
                                                        {$d['account']}
                                                    </span>
                                                    <br>
                                                {/if}

                                                <!-- Address -->
                                                {if ($a['address'])}
                                                    {$a['address']},
                                                {/if}
                                                {$a['city']}
                                                {$a['zip']}
                                                {$a['state']}
                                                {$a['country']}

                                                <!-- Phone -->
                                                {if ($a['phone'])}
                                                    <br>
                                                    <strong>{$_L['Phone']}:</strong>
                                                    {$a['phone']}
                                                {/if}

                                                <!-- Email -->
                                                {if ($a['email'])}
                                                    <br>
                                                    <strong>{$_L['Email']}:</strong> {$a['email']}
                                                {/if}

                                                <!-- Custum fields -->
                                                {foreach $cf as $cfs}
                                                    <br>
                                                    <strong>{$cfs['fieldname']}: </strong> {get_custom_field_value($cfs['id'],$a['id'])}
                                                {/foreach}

                                            </address>
                                        </div>
                                    </div>

                                    <!-- Quote number -->
                                    <b class="h4 mb-0">{$d['invoicenum']}{if $d['cn'] neq ''}{$d['cn']}{else}{$d['id']}{/if}</b>
                                            
                                    <!-- Quote date -->
                                    <p>
                                        <strong>{$_L['Date']}:</strong>
                                        {date( $config['df'], strtotime($d['date']))}
                                    </p>
                                </div>
                            </div>

                            <!-- Title -->
                            {if $d['title']}
                            <div class="row">
                                <div class="col-12">
                                    <hr>
                                    {$d['title']}
                                </div>
                            </div>
                            {/if}

                            <!-- Proposal -->
                            <div class="row">
                                <div class="col-12">
                                    <hr>
                                    {if $d['proposal']}
                                        {$d['proposal']}
                                        <hr>
                                    {/if}
                                </div>
                            </div>

                            <!-- Services -->
                            <div class="table-responsive">
                                <table class="table table-bordered invoice-items">
                                    <thead>
                                        <tr class="h4 text-dark">
                                            <th id="cell-item" class="text-semibold">{$_L['Service Ref']}</th>
                                            <th id="cell-item" class="text-semibold">{$_L['Item']}</th>
                                            <th id="cell-qty" class="text-center text-semibold">{$_L['Quantity']}</th>
                                            <th id="cell-price" class="text-center text-semibold">{$_L['PU Vente']}</th>
                                            <th id="cell-price" class="text-center text-semibold">{$_L['Tax']}</th>
                                            <th id="cell-total" class="text-center text-semibold">{$_L['Total HT']}</th>
                                            <th id="cell-total" class="text-center text-semibold">{$_L['Image']}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {foreach $items as $item}
                                            <tr>
                                                <td class="text-semibold">{$item['ref']}</td>
                                                <td class="text-semibold">
                                                    {$item['description']}
                                                    <br>
                                                    {foreach json_decode($item['features']) as $feature_line}
                                                        <span>- {$feature_line}</span>
                                                        <br>
                                                    {/foreach}
                                                </td>
                                                <td class="text-center nowrap">{$item['qty']}</td>
                                                <td class="text-center nowrap">{number_format($item['amount'],2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}</td>
                                                <td class="text-center nowrap">
                                                    {$taxAmount = 20/100}
                                                    {$finalAmount = $taxAmount * $item['amount']}
                                                    {if $item['taxed']}
                                                        {number_format($finalAmount,2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}
                                                    {else}
                                                        {number_format(0, 2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}
                                                    {/if}
                                                </td>
                                                <td class="text-center nowrap">{number_format($item['total'],2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}</td>
                                                <td></td>
                                            </tr>
                                        {/foreach}
                                    </tbody>
                                </table>
                            </div>

                            <!-- Invoice Summary -->
                            <div class="invoice-summary mb-3">
                                <div class="row" style="justify-content: right;">
                                    <div class="col-6 offset-md-8">
                                        <table class="table h5 text-dark">

                                            <tbody>
                                                <!-- Subtotal -->
                                                <tr class="b-top-none">
                                                    <td colspan="2">{$_L['Subtotal']}</td>
                                                    <td class="text-left">{number_format($d['subtotal'],2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}</td>
                                                </tr>

                                                <!-- Discount -->
                                                {if ($d['discount']) neq '0.00'}
                                                    <tr>
                                                        <td colspan="2">{$_L['Discount']}</td>
                                                        <td class="text-left">-{number_format($d['discount'],2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}</td>
                                                    </tr>
                                                {/if}

                                                <!-- Tax -->
                                                <tr>
                                                    <td colspan="2">{$_L['Tax']}</td>
                                                    <td class="text-left">{number_format($d['tax'],2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}</td>
                                                </tr>

                                                <!-- Grand Total -->
                                                <tr class="h4">
                                                    <td colspan="2">{$_L['Grand Total']}</td>
                                                    <td class="text-left">{number_format($d['total'],2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}</td>
                                                </tr>

                                                {if ($d['credit']) neq '0.00'}
                                                    <!-- Total paid -->
                                                    <tr>
                                                        <td colspan="2">{$_L['Total Paid']}</td>
                                                        <td class="text-left">{number_format($d['credit'],2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}</td>
                                                    </tr>

                                                    <!-- Amount Due -->
                                                    <tr class="h4">
                                                        <td colspan="2">{$_L['Amount Due']}</td>
                                                        <td class="text-left">{number_format($i_due,2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}</td>
                                                    </tr>
                                                {/if}
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Notes -->
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="mb-0 text-decoration-underline">{$_L['Terms']}</h6>
                                    {$d['notes']}
                                </div>
                            </div>
                        </div>

                        {*{if ($d['notes']) neq ''}*}
                        {*<div class="well m-t">*}
                        {*{$d['notes']}*}
                        {*</div>*}
                        {*{/if}*}

                    </div>
                </div>


            </div>
        </div>
    </div>

    <div id="modal_add_item" class="modal fade" tabindex="-1"  role="dialog" aria-hidden="true">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        {$_L['New Document']}
                    </h4>
                    <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="doc_title">{$_L['Title']}</label>
                            <input type="text" class="form-control" id="doc_title" name="doc_title">

                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="is_global" name="is_global"> {$_L['Available for all Customers']}
                            </label>
                        </div>

                    </form>

                    <hr>

                    <form action="" class="dropzone" id="upload_container">

                        <div class="dz-message">
                            <h3> <i class="fal fa-cloud-upload"></i>  {$_L['Drop File Here']}</h3>
                            <br />
                            <span class="note">{$_L['Click to Upload']}</span>
                        </div>

                    </form>
                    <hr>
                    <h4>{$_L['Server Config']}:</h4>
                    <p>{$_L['Upload Maximum Size']}: {$upload_max_size}</p>
                    <p>{$_L['POST Maximum Size']}: {$post_max_size}</p>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="file_link" id="file_link" value="">
                    <button type="button" data-bs-dismiss="modal" class="btn btn-danger">{$_L['Close']}</button>
                    <button type="button" id="btn_add_file" class="btn btn-primary">{$_L['Submit']}</button>
                </div>
            </div>
        </div>


    </div>

    {if !empty($config['invoice_items_purchasing'])}

        <div class="modal fade" id="purchaseInfo" tabindex="-1" aria-labelledby="purchaseInfoLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                   <form method="post" action="{$base_url}invoices/save-purchase-info">
                       <div class="modal-header">
                           <h1 class="modal-title fs-5" id="purchaseInfoLabel">Purchase Info</h1>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                       </div>
                       <div class="modal-body">

                           <div class="mb-3">
                               <label for="purchase_id">Purchase ID</label>
                               <input type="text" class="form-control" id="purchase_id" name="purchase_id" value="{$d['purchase_id']}">
                           </div>

                           <div class="row">
                               <div class="col-md-6">
                                   <div class="mb-3">
                                       <label for="purchase_date">Purchase Date</label>
                                       <input type="text" class="form-control" id="purchase_date" datepicker
                                              data-date-format="yyyy-mm-dd" data-auto-close="true" name="purchase_date"

                                              {if !empty($d['purchase_date'])}
                                                  value="{$d['purchase_date']}"
                                                  {else}
                                                    value="{date('Y-m-d')}"
                                              {/if}


                                       >
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="mb-3">
                                       <label for="purchase_cost">Purchase Cost</label>
                                       <input type="text" class="form-control" id="purchase_cost" name="purchase_cost" value="{$d['purchase_cost']}">
                                   </div>
                               </div>
                           </div>

                           <div class="mb-3">
                               <label for="staff_id">{__('Staff')}</label>
                               <select name="staff_id" id="staff_id" class="form-select">
                                   <option value="0">{__('Select Staff')}</option>
                                   {foreach $staffs as $staff}
                                       <option value="{$staff['id']}"
                                               {if $staff['id'] == $d['purchase_staff_id']}
                                                   selected="selected"
                                               {else}
                                                   {if $staff['id'] == $user['id']}
                                                       selected="selected"
                                                   {/if}
                                               {/if}
                                       >{$staff['fullname']}</option>
                                   {/foreach}
                               </select>
                           </div>

                           <div class="mb-3">
                               <label for="purchase_notes">Purchase Notes</label>
                               <textarea class="form-control" id="purchase_notes" rows="5" name="purchase_notes">{$d['purchase_notes']}</textarea>
                           </div>


                       </div>
                       <div class="modal-footer">
                           <input type="hidden" name="invoice_id" value="{$d['id']}">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary">Save</button>
                       </div>
                   </form>
                </div>
            </div>
        </div>

    {/if}

    {if !empty($config['invoice_items_shipping'])}

        <div class="modal fade" id="shippingInfo" tabindex="-1" aria-labelledby="shippingInfoLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="post" action="{$base_url}invoices/save-shipping-info">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="shippingInfoLabel">Shipping Info</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="shipping_weight">Weight</label>
                                <input type="text" class="form-control" id="shipping_weight" name="shipping_weight" value="{$d['shipping_weight']}">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="shipping_date">Shipping Date</label>
                                        <input type="text" class="form-control" id="shipping_date" datepicker
                                               data-date-format="yyyy-mm-dd" data-auto-close="true" name="shipping_date"

                                                {if !empty($d['shipping_date'])}
                                                    value="{$d['shipping_date']}"
                                                {else}
                                                    value="{date('Y-m-d')}"
                                                {/if}


                                        >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="shipping_cost">Shipping Cost</label>
                                        <input type="text" class="form-control" id="shipping_cost" name="shipping_cost" value="{$d['shipping_cost']}">
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="shipping_notes">Shipping Notes</label>
                                <textarea class="form-control" id="shipping_notes" rows="5" name="shipping_notes">{$d['shipping_notes']}</textarea>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="invoice_id" value="{$d['id']}">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    {/if}


    <input type="hidden" id="_lan_msg_confirm" value="{$_L['are_you_sure']}">
    <input type="hidden" id="admin_email" value="{$user->username}">




{/block}

{block name="script"}


    <script>


        Dropzone.autoDiscover = false;
        $(document).ready(function () {

            var _url = $("#_url").val();

            var $modal = $('#cloudonex_body');

            var sysrender = $modal;

            $('.amount').autoNumeric('init', {

                aSign: "{$config['currency_code']}",
                dGroup: {$config['thousand_separator_placement']},
                aPad: {$config['currency_decimal_digits']},
                pSign: '{$config['currency_symbol_position']}',
                aDec: '{$config['dec_point']}',
                aSep: '{$config['thousands_sep']}',
                vMax: '9999999999999999.00',
                vMin: '-9999999999999999.00'

            });

            var iid = $("#iid").val();
            sysrender.on('click', '#add_payment', function(e){
                e.preventDefault();

                {if $d['type'] === 'Credit Note'}
                let url = base_url + 'transactions/modal-expense/' + iid;
                {else}
                let url = base_url + 'invoices/add-payment/' + iid;
                {/if}

                $.fancybox.open({
                    src  :  url,
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $(".datepicker").datepicker();
                            $("#account").select2({

                            });
                            $("#cats").select2({

                            });
                            $("#pmethod").select2({

                            });
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });


            });


            sysrender.on('click', '#mail_invoice_created', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/mail_invoice_/' + iid + '/created',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });



            });

            sysrender.on('click', '#mail_invoice_reminder', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/mail_invoice_/' + iid + '/reminder',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });


            });

            sysrender.on('click', '#mail_invoice_overdue', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/mail_invoice_/' + iid + '/overdue',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });







            });

            sysrender.on('click', '#mail_invoice_confirm', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/mail_invoice_/' + iid + '/confirm',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });





            });

            sysrender.on('click', '#mail_invoice_refund', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/mail_invoice_/' + iid + '/refund',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });


            });



            sysrender.on('click', '#sms_invoice_created', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/sms_invoice_/' + iid + '/created',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').countSms('#sms-counter');
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });




            });

            sysrender.on('click', '#sms_invoice_reminder', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/sms_invoice_/' + iid + '/reminder',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').countSms('#sms-counter');
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });



            });

            sysrender.on('click', '#sms_invoice_overdue', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/sms_invoice_/' + iid + '/overdue',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').countSms('#sms-counter');
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });


            });

            sysrender.on('click', '#sms_invoice_confirm', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/sms_invoice_/' + iid + '/confirm',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').countSms('#sms-counter');
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });



            });

            sysrender.on('click', '#sms_invoice_refund', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/sms_invoice_/' + iid + '/refund',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').countSms('#sms-counter');
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });



            });




            $modal.on('click', '#btnModalSMSSend', function(event){

                event.preventDefault();

                $.post(base_url + 'sms/init/send_invoice', {


                    message: $('#message').val(),
                    to: $("#sms_to").val(),
                    from: $("#sms_from").val(),
                    invoice_id: $("#smsInvoiceId").val()

                }).done(function (data) {

                    toastr.success(data);
                });

            });



            $modal.on('click', '#send', function(e){

                e.preventDefault();

                var attach_pdf = 'No';

                if($("#attach_pdf").prop('checked') == true){
                    attach_pdf = 'Yes';
                }



                $.post(base_url + 'invoices/send_email', $('#email_form').serialize()).done(function (data) {
                    toastr.success(data);
                });

            });

            $modal.on('click', '#save_payment', function(e){
                e.preventDefault();

                {if $d['type'] === 'Credit Note'}

                let save_payment_url = base_url + 'transactions/expense-post/' + iid;
                {else}
                let save_payment_url = base_url + 'invoices/add-payment-post/' + iid;
                {/if}

                $.post(save_payment_url, $("#form_add_payment").serialize())

                    .done(function (data) {


                        if ($.isNumeric(data)) {
                            location.reload();
                        }
                        else {
                            toastr.error(data);

                        }
                    });


            });

            $("#mark_paid").click(function (e) {
                e.preventDefault();


                app.confirm($("#_lan_msg_confirm").val(), function(result) {
                    if(result){
                        var iid = $("#iid").val();
                        $.post(  _url + "invoices/markpaid", { iid: iid })
                            .done(function( data ) {
                                location.reload();
                            });
                    }
                });

            });


            $("#mark_unpaid").click(function (e) {
                e.preventDefault();


                app.confirm($("#_lan_msg_confirm").val(), function(result) {
                    if(result){
                        var iid = $("#iid").val();
                        $.post(  _url + "invoices/markunpaid", { iid: iid })
                            .done(function( data ) {
                                location.reload();
                            });
                    }
                });

            });

            $("#mark_cancelled").click(function (e) {
                e.preventDefault();
                app.confirm($("#_lan_msg_confirm").val(), function(result) {
                    if(result){
                        var iid = $("#iid").val();
                        $.post(  _url + "invoices/markcancelled", { iid: iid })
                            .done(function( data ) {
                                location.reload();
                            });
                    }
                });

            });

            $("#mark_partially_paid").click(function (e) {
                e.preventDefault();
                app.confirm($("#_lan_msg_confirm").val(), function(result) {
                    if(result){
                        var iid = $("#iid").val();
                        $.post(  _url + "invoices/markpartiallypaid", { iid: iid })
                            .done(function( data ) {
                                location.reload();
                            });
                    }
                });

            });



            $modal.on('click', '#send_bcc_to_admin', function(e){

                e.preventDefault();


                $("#bccemail").val($("#admin_email").val());

            });

            $modal.on('hidden.bs.modal', function () {
                location.reload();
            });


            $('[data-bs-toggle="tooltip"]').tooltip();

            var $btn_add_file = $("#btn_add_file");

            var $file_link = $("#file_link");

            var upload_resp;




            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "documents/upload/",
                    maxFiles: 1
                }
            );


            ib_file.on("sending", function() {

                $btn_add_file.prop('disabled', true);

            });

            ib_file.on("success", function(file,response) {

                $btn_add_file.prop('disabled', false);

                upload_resp = response;

                if(upload_resp.success == 'Yes'){

                    toastr.success(upload_resp.msg);
                    $file_link.val(upload_resp.file);


                }
                else{
                    toastr.error(upload_resp.msg);
                }


            });




            var $doc_title = $("#doc_title");


            $btn_add_file.on('click', function(e) {
                e.preventDefault();


                $.post( _url + "documents/post/", { title: $doc_title.val(), file_link: $file_link.val(), rid: iid, rtype: 'invoice' })
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            location.reload();

                        }

                        else {
                            toastr.error(data);
                        }




                    });


            });

            const set_invoice_status = document.querySelectorAll('.set_invoice_status');


            if (set_invoice_status){
                set_invoice_status.forEach((item) => {
                    item.addEventListener('click', (e) => {
                        e.preventDefault();
                        const status = item.getAttribute('data-status');
                        const invoice_id = '{$d['id']}';
                        app.confirm($("#_lan_msg_confirm").val(), function(result) {
                            if(result){

                                $.post(  base_url + "invoices/set-status", {
                                    status: status,
                                    invoice_id: invoice_id,
                                })
                                    .done(function( data ) {
                                        location.reload();
                                    });
                            }
                        });

                    });
                });
            }


            const set_invoice_purchase_status = document.querySelectorAll('.set_invoice_purchase_status');

            if (set_invoice_purchase_status) {
                    set_invoice_purchase_status.forEach((item) => {
                        item.addEventListener('click', (e) => {
                            e.preventDefault();
                            const status = item.getAttribute('data-status');
                            const invoice_id = '{$d['id']}';
                            app.confirm($("#_lan_msg_confirm").val(), function(result) {
                                if(result){

                                    $.post(  base_url + "invoices/set-purchase-status", {
                                        status: status,
                                        invoice_id: invoice_id,
                                    })
                                        .done(function( data ) {
                                            location.reload();
                                        });
                                }
                            });

                        });
                    });
                }

            const set_invoice_shipping_status = document.querySelectorAll('.set_invoice_shipping_status');

            if (set_invoice_shipping_status) {
                    set_invoice_shipping_status.forEach((item) => {
                        item.addEventListener('click', (e) => {
                            e.preventDefault();
                            const status = item.getAttribute('data-status');
                            const invoice_id = "{$d['id']}";
                            app.confirm($("#_lan_msg_confirm").val(), function(result) {
                                if(result){

                                    $.post(  base_url + "invoices/set-shipping-status", {
                                        status: status,
                                        invoice_id: invoice_id,
                                    })
                                        .done(function( data ) {
                                            location.reload();
                                        });
                                }
                            });

                        });
                    });
                }



        });



    </script>
{/block}
