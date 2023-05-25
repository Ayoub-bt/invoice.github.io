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
                            <div class="btn-group" style="display: none;" role="group">
                                <button type="button" class="btn  btn-success btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fal fa-check"></i>  {$_L['Mark As']}
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    {if $d['stage'] neq 'Draft'}
                                        <li class="dropdown-item"><a href="#" id="mark_draft">{$_L['Draft']}</a></li>
                                    {/if}
                                    {if $d['stage'] neq 'Delivered'}
                                        <li class="dropdown-item"><a href="#" id="mark_delivered">{$_L['Delivered']}</a></li>
                                    {/if}
                                    {if $d['stage'] neq 'On Hold'}
                                        <li class="dropdown-item"><a href="#" id="mark_on_hold">{$_L['On Hold']}</a></li>
                                    {/if}
                                    {if $d['stage'] neq 'Accepted'}
                                        <li class="dropdown-item"><a href="#" id="mark_accepted">{$_L['Accepted']}</a></li>
                                    {/if}

                                    {if $d['stage'] neq 'Lost'}
                                        <li class="dropdown-item"><a href="#" id="mark_lost">{$_L['Lost']}</a></li>
                                    {/if}

                                    {if $d['stage'] neq 'Dead'}
                                        <li class="dropdown-item"><a href="#" id="mark_dead">{$_L['Dead']}</a></li>
                                    {/if}

                                </ul>
                            </div>

                            <!-- Preview -->
                            <a href="{$_url}client/q/{$d['id']}/token_{$d['vtoken']}" class="btn btn-primary btn-sm"><i class="fal fa-eye"></i> {$_L['Preview']}</a>

                            <!-- Edit -->
                            <a href="{$_url}quotes/edit/{$d['id']}/" class="btn btn-warning  btn-sm"><i class="fal fa-pencil"></i> {$_L['Edit']}</a>

                            <!-- PDF -->
                            <div class="btn-group" role="group">
                                <button type="button" class="btn  btn-success btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fal fa-download"></i>
                                    {$_L['PDF']}
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <a href="{$_url}client/qpdf/{$d['id']}/token_{$d['vtoken']}">
                                        <li class="dropdown-item">
                                            {$_L['View PDF']}
                                        </li>
                                    </a>
                                    <a href="{$_url}client/qpdf/{$d['id']}/token_{$d['vtoken']}/dl/">
                                        <li class="dropdown-item">
                                            {$_L['Download PDF']}
                                        </li>
                                    </a>
                                </ul>
                            </div>

                            <!-- Convert to Invoice -->
                            <button type="button" class="btn btn-danger btn-sm" style="border-radius: 0;" id="convert_invoice"><i class="fal fa-plus"></i> {$_L['Convert to Invoice']}</button>
                            
                            <!-- Print -->
                            <!-- <a href="{$_url}iview/print/{$d['id']}/token_{$d['vtoken']}" target="_blank" class="btn btn-primary  btn-sm"><i class="fal fa-print"></i> {$_L['Print']}</a> -->
                        </div>
                    </div>
                </div>

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

                                            <h4 class="h4 mt-none text-dark text-bold">{$config['CompanyName']}</h4>

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


                                            <!-- Expiry Date -->
                                            <!-- <p class="mb-none">
                                                <span class="text-dark">{$_L['Expiry Date']}:</span>
                                                <span class="value">{date( $config['df'], strtotime($d['validuntil']))}</span>
                                            </p> -->

                                            <!-- Total -->
                                            <!-- <h2> {$_L['Total']}: {$config['currency_code']} {number_format($d['total'],2,$config['dec_point'],$config['thousands_sep'])} </h2> -->

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
                                                <!-- Company -->
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
                                    <b class="h4 mb-0">{$d['invoicenum']}{if $d['cn'] neq ''}{$d['cn']} {else} {$d['id']} {/if}</b>
                                    
                                    <!-- Quote date -->
                                    <p>
                                        <strong>{$_L['Date']}:</strong>
                                        {date( $config['df'], strtotime($d['datecreated']))}
                                    </p>
                                </div>
                            </div>

                            <!-- Object -->
                            {if $d['subject']}
                            <div class="row">
                                <div class="col-12">
                                    <hr>
                                    <strong>{$_L['Subject']}:</strong> {$d['subject']}
                                </div>
                            </div>
                            {/if}

                            <!-- Proposal -->
                            {if $d['proposal']}
                                <div class="row">
                                    <div class="col-12">
                                        <hr>
                                            {$d['proposal']}
                                    </div>
                                </div>
                            {/if}

                            <style>
                                #services th,
                                #services td {
                                    padding: 5px;
                                }
                            </style>

                            <!-- Services -->
                            <div class="table-responsive">
                                <table class="table table-bordered invoice-items" id="services">
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
                                                    {if $item['taxable']}
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

                            <!-- Quote Summary -->
                            <div class="invoice-summary mb-3">
                                <div class="row" style="justify-content: right;">
                                    <div class="col-6 offset-md-8">
                                        <table class="table h5 text-dark">
                                            <tbody>
                                                <tr class="b-top-none">
                                                    <td colspan="2">{$_L['Subtotal']}</td>
                                                    <td class="text-left">{number_format($d['subtotal'],2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}</td>
                                                </tr>
                                                {if ($d['discount']) neq '0.00'}
                                                    <tr>
                                                        <td colspan="2">{$_L['Discount']}</td>
                                                        <td class="text-left">-{number_format($d['discount'],2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}</td>
                                                    </tr>
                                                {/if}
                                                <tr>
                                                    <!-- <td colspan="2">{$d['taxname']}</td> -->
                                                    <td colspan="2">{$_L['Tax']}</td>
                                                    <td class="text-left">{number_format($d['tax1'],2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}</td>
                                                </tr>

                                                <tr class="h4">
                                                    <td colspan="2">{$_L['Grand Total']}</td>
                                                    <td class="text-left">{number_format($d['total'],2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Notes -->
                            {if $d['customernotes']}
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6 class="mb-0 text-decoration-underline">{$_L['Terms']}</h6>
                                        {$d['customernotes']}
                                    </div>
                                </div>
                            {/if}
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <input type="hidden" id="_lan_msg_confirm" value="{$_L['are_you_sure']}">

    <input type="hidden" id="admin_email" value="{$user->username}">
{/block}

{block name="script"}
<script>
    $(document).ready(function () {



        var $modal = $('#cloudonex_body');


        var sysrender = $('#application_ajaxrender');

        var _url = base_url;


        sysrender.on('click', '#mail_quote_created', function(e){
            e.preventDefault();
            var iid = $("#iid").val();
            $.fancybox.open({
                src  :  base_url + 'quotes/mail_invoice_/' + iid + '/created',
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



        sysrender.on('click', '#sms_quote_created', function(e){
            e.preventDefault();
            var iid = $("#iid").val();
            $.fancybox.open({
                src  :  base_url + 'quotes/sms_quote_/' + iid + '/created',
                type : 'ajax',
                opts : {
                    afterShow : function( instance, current ) {
                        $('#message').countSms('#sms-counter');
                    }
                },
            });




        });


        sysrender.on('click', '#sms_quote_accepted', function(e){
            e.preventDefault();
            var iid = $("#iid").val();
            $.fancybox.open({
                src  :  base_url + 'quotes/sms_quote_/' + iid + '/accepted',
                type : 'ajax',
                opts : {
                    afterShow : function( instance, current ) {
                        $('#message').countSms('#sms-counter');
                    }
                },
            });




        });


        sysrender.on('click', '#sms_quote_cancelled', function(e){
            e.preventDefault();
            var iid = $("#iid").val();
            $.fancybox.open({
                src  :  base_url + 'quotes/sms_quote_/' + iid + '/cancelled',
                type : 'ajax',
                opts : {
                    afterShow : function( instance, current ) {
                        $('#message').countSms('#sms-counter');
                    }
                },
            });




        });



        $modal.on('click', '#btnModalSMSSend', function(){



            $.post(base_url + 'sms/init/send_quote', {


                message: $('#message').val(),
                to: $("#sms_to").val(),
                from: $("#sms_from").val(),
                invoice_id: $("#smsQuoteId").val()

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
            $('#send').prop('disabled',true);
            $.post(base_url + 'quotes/send_email', $('#email_form').serialize()).done(function (data) {
                toastr.success(data);
            });
        });

        $("#convert_invoice").click(function (e) {
            e.preventDefault();
            app.confirm($("#_lan_msg_confirm").val(), function(result) {
                if(result){
                    $('#ibox').block({ message: null });
                    var iid = $("#iid").val();
                    $.post(  _url + "quotes/convert_invoice/", { iid: iid })
                        .done(function( data ) {
                        window.location = _url + 'invoices/view/' + data + '/';
                        // console.log(data);
                        $('#ibox').unblock();
                    });
                }
            });
        });

        $("#mark_draft").click(function (e) {
            e.preventDefault();
            app.confirm($("#_lan_msg_confirm").val(), function(result) {
                if(result){
                    var iid = $("#iid").val();
                    $.post(  _url + "quotes/mark_draft/", { iid: iid })
                        .done(function( data ) {
                            location.reload();
                    });
                }
            });
        });

        $("#mark_delivered").click(function (e) {
            e.preventDefault();
            app.confirm($("#_lan_msg_confirm").val(), function(result) {
                if(result){
                    var iid = $("#iid").val();
                    $.post(  _url + "quotes/mark_delivered/", { iid: iid })
                        .done(function( data ) {
                            location.reload();
                    });
                }
            });

        });

        $("#mark_on_hold").click(function (e) {
            e.preventDefault();
            app.confirm($("#_lan_msg_confirm").val(), function(result) {
                if(result){
                    var iid = $("#iid").val();
                    $.post(  _url + "quotes/mark_on_hold/", { iid: iid })
                        .done(function( data ) {
                            location.reload();
                        });
                }
            });
        });

        $("#mark_accepted").click(function (e) {
            e.preventDefault();
            app.confirm($("#_lan_msg_confirm").val(), function(result) {
                if(result){
                    var iid = $("#iid").val();
                    $.post(  _url + "quotes/mark_accepted/", { iid: iid })
                        .done(function( data ) {
                            location.reload();
                        });
                }
            });
        });

        $("#mark_lost").click(function (e) {
            e.preventDefault();
            app.confirm($("#_lan_msg_confirm").val(), function(result) {
                if(result){
                    var iid = $("#iid").val();
                    $.post(  _url + "quotes/mark_lost/", { iid: iid })
                        .done(function( data ) {
                            location.reload();
                        });
                }
            });
        });

        $("#mark_dead").click(function (e) {
            e.preventDefault();
            app.confirm($("#_lan_msg_confirm").val(), function(result) {
                if(result){
                    var iid = $("#iid").val();
                    $.post(  _url + "quotes/mark_dead/", { iid: iid })
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
        })

    });
</script>

{/block}
