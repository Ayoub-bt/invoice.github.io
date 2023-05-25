<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{$_L['INVOICE']} - {$d['invoicenum']}{if $d['cn'] neq ''} {$d['cn']} {else} {$d['id']} {/if}</title>

    <link rel="icon" href="{{APP_URL}}/storage/system/{get_or_default($config,'icon-32','icon-32x32.png')}" sizes="32x32" />
    <link rel="icon" href="{{APP_URL}}/storage/system/{get_or_default($config,'icon-192','icon-192x192.png')}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{APP_URL}}/storage/system/{get_or_default($config,'icon-180','icon-180x180.png')}" />
    <meta name="msapplication-TileImage" content="{{APP_URL}}/storage/system/{get_or_default($config,'icon-270','icon-270x270.png')}" />

    {if APP_STAGE == 'Dev'}
        {if $config['rtl'] eq '1'}
            <link id="css_app" rel="stylesheet" media="screen, print" href="{{APP_URL}}/ui/theme/default/css/app-rtl.min.css?v={{_raid()}}">
        {else}
            <link id="css_app" rel="stylesheet" media="screen, print" href="{{APP_URL}}/ui/theme/default/css/app.min.css?v={{_raid()}}">
        {/if}
        <link href="{$theme}default/css/themes/{$config['nstyle']}.css?v={{_raid()}}" rel="stylesheet">
    {else}
        {if $config['rtl'] eq '1'}
            <link id="css_app" rel="stylesheet" media="screen, print" href="{{APP_URL}}/ui/theme/default/css/app-rtl.min.css?v=2">
        {else}
            <link id="css_app" rel="stylesheet" media="screen, print" href="{{APP_URL}}/ui/theme/default/css/app.min.css?v=2">
        {/if}
        <link href="{$theme}default/css/themes/{$config['nstyle']}.css?v=13" rel="stylesheet">
    {/if}

    {block name=style}{/block}

    <script>
        var base_url = '{$_url}';
        var block_msg = '<div class="md-preloader text-center"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>';
    </script>

    {$config['header_scripts']}

    <style type="text/css">
        body {
            background-color: #e9ebee;
            overflow-x: visible;
        }
        .paper {
            margin: 20px auto;
            max-width: 980px;
            background-color: #FFF;
            position: relative;
        }

        .fancybox-slide--iframe .fancybox-content {
            width  : 600px;
            max-width  : 80%;
            max-height : 80%;
            margin: 0;
        }
        .panel {
            /*box-shadow: none;*/
            -webkit-box-shadow: 0 10px 40px 0 rgba(18,106,211,.07), 0 2px 9px 0 rgba(18,106,211,.06);
            box-shadow: 0 10px 40px 0 rgba(18,106,211,.07), 0 2px 9px 0 rgba(18,106,211,.06);
        }

        .panel-body {
            padding: 25px;
        }

        {if isset($payment_gateways_by_processor['stripe'])}

            .StripeElement {
                background-color: white;
                height: 40px;
                padding: 10px 12px;
                border-radius: 4px;
                border: 1px solid transparent;
                box-shadow: 0 1px 3px 0 #e6ebf1;
                -webkit-transition: box-shadow 150ms ease;
                transition: box-shadow 150ms ease;
            }

            .StripeElement--focus {
                box-shadow: 0 1px 3px 0 #cfd7df;
            }

            .StripeElement--invalid {
                border-color: #fa755a;
            }

            .StripeElement--webkit-autofill {
                background-color: #fefde5 !important;
            }

        {/if}

        .table.invoice-items{
            border: 1px solid #dee2e6;
        }

        .table.invoice-items td, .table.invoice-items th {
            border: 1px solid #dee2e6;
        }

    </style>

    {if isset($payment_gateways_by_processor['stripe'])}
        <script src="https://js.stripe.com/v3/"></script>
    {/if}

</head>

<body class="fixed-nav">

    <div class="paper">
        <section class="panel">
            <div class="panel-body">
                <div class="invoice">
                    
                    {if isset($notify)}
                        {$notify}
                    {/if}

                    <header class="clearfix">

                        <div class="row">
                            <div class="col-md-12 mb-5">
                                <div class="text-center">

                                    <!-- Back button -->
                                    <a href="{$_url}invoices/view/{$d['id']}" class="btn btn-success my-2"><i class="fal fa-caret-left"></i> {$_L['Back']}</a>
                                    <br>

                                    {if $has_login_token}
                                        <a href="{$_url}client/dashboard/" class="btn btn-primary ml-sm no-shadow no-border"><i class="fal fa-long-arrow-left"></i> {$_L['Back to Client Area']}</a>
                                    {/if}

                                    <div class="btn-group">
                                        <!-- View Pdf -->
                                        <a href="{$_url}client/ipdf/{$d['id']}/token_{$d['vtoken']}/view/" class="btn btn-primary"><i class="fal fa-print"></i> {$_L['View PDF']}</a>
                                        
                                        <!-- Download Pdf -->
                                        <a href="{$_url}client/ipdf/{$d['id']}/token_{$d['vtoken']}/dl/" class="btn btn-info"><i class="fal fa-file-pdf-o"></i> {$_L['Download PDF']}</a>
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>
                            </div>
                        </div>

                        <style>
                            .invoice * {
                                font-size: 96%;
                            }
                        </style>

                        <div class="bill-info">
                            <div class="row">

                                <!-- Company info -->
                                <div class="col-6">
                                    <div class="bill-data">

                                        <!-- Logo -->
                                        <div class="ib">
                                            <img src="{$app_url}storage/system/{$config['logo_default']}" alt="{$config['CompanyName']}" class="img-fluid" style="margin-bottom: 15px;">
                                        </div>

                                        <h4 class="h4 mb-0 mt-none text-dark"><b>{$config['CompanyName']}</b></h4>

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
                                            {if $a['address'] neq ''}
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

                                            {$x_html}
                                        </address>
                                    </div>
                                </div>

                                <!-- Quote number -->
                                <span class="h4 m-none text-dark text-bold mb-0">
                                    <b>
                                        {$d['invoicenum']}{if $d['cn'] neq ''}{$d['cn']}{else}{$d['id']} {/if}
                                    </b>
                                </span>
                                
                                <!-- Quote date -->
                                <p class="m-none text-dark text-bold">
                                    <strong>{$_L['Date']}:</strong>
                                    {date( $config['df'], strtotime($d['date']))}
                                </p>
                            </div>
                        </div>
                    </header>

                    <hr>

                    <style>
                        #summary th,
                        #summary td,
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
                            <tbody style="border-top: 0">
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

                    <!-- Summary -->
                    <div class="invoice-summary">
                        <div class="row" style="justify-content: right;">
                            <div class="col-6 offset-md-8 ">
                                <table class="table h5 text-dark" id="summary">
                                    <tbody>
                                    <tr class="b-top-none">
                                        <td colspan="2">{$_L['Sub Total']}</td>
                                        <td class="text-left">{number_format($d['subtotal'],2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}</td>
                                    </tr>

                                    {if ($d['discount']) neq '0.00'}
                                        <tr>
                                            <td colspan="2">{$_L['Discount']}</td>
                                            <td class="text-left">-{number_format($d['discount'],2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}</td>
                                        </tr>
                                    {/if}

                                    <tr>
                                        <td colspan="2">{$_L['TAX']}</td>
                                        <td class="text-left">{number_format($d['tax'],2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}</td>
                                    </tr>

                                    {if ($d['credit']) neq '0.00'}
                                        <tr>
                                            <td colspan="2">{$_L['Total']}</td>
                                            <td class="text-left">{number_format($d['total'],2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">{$_L['Total Paid']}</td>
                                            <td class="text-left">{number_format($d['credit'],2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}</td>
                                        </tr>

                                        {if $i_due > 0 }
                                            <tr class="h4">
                                                <td colspan="2">{$_L['Amount Due']}</td>
                                                <td class="text-left">{number_format($i_due,2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}</td>
                                            </tr>
                                        {/if}

                                    {/if}

                                    <tr class="h4">
                                        <td colspan="2">{$_L['Grand Total']}</td>
                                        <td class="text-left">{number_format($d['total'],2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Notes -->
                {if ($d['notes']) neq ''}
                    <div class="well m-t">
                    <h6 style="text-decoration: underline; margin-bottom: 0;">{$_L['Terms']}</h6>
                        {$d['notes']}
                    </div>
                {/if}

                {if !empty($invoice_append_footer)}
                    <div class="hr-line-dashed"></div>
                    <div class="my-3">
                        {$invoice_append_footer}
                    </div>
                {/if}

                {if isset($config['invoice_client_can_attach_signature']) && $config['invoice_client_can_attach_signature'] == 1 }

                    <div class="hr-line-dashed"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div id="signaturePadArea">

                            </div>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>{__('Sign above')}</h4>
                        </div>
                        <div class="col-md-6 text-end">
                            <button type="button" id="clearSignature" class="btn btn-danger btn-sm">{__('Clear signature')}</button>
                        </div>
                    </div>

                {/if}

            </div>
        </section>
    </div>

    <input type="hidden" id="_url" name="_url" value="{$_url}">
    <input type="hidden" id="_df" name="_df" value="{$config['df']}">
    <input type="hidden" id="_lan" name="_lan" value="{$config['language']}">

    <script>
        var _L = [];
        _L['Save'] = "{$_L['Save']}";
        _L['Submit'] = "{$_L['Submit']}";
        _L['Loading'] = "{$_L['Loading']}";
        _L['Media'] = "{$_L['Media']}";
        _L['OK'] = "{$_L['OK']}";
        _L['Cancel'] = "{$_L['Cancel']}";
        _L['Close'] = "{$_L['Close']}";
        _L['Close'] = "{$_L['Close']}";
        _L['are_you_sure'] = "{$_L['are_you_sure']}";
        _L['Saved Successfully'] = "{$_L['Saved Successful"y']}';
        _L['Empty'] = "{$_L['Empty']}";

        var app_url = '{$app_url}';
        var base_url = '{$base_url}';

        {if ($config['animate']) eq '1'}
        var config_animate = 'Oui';
        {else}
        var config_animate = 'Non';
        {/if}
        {$jsvar}
    </script>

    {if APP_STAGE == 'Dev'}
        <script src="{{APP_URL}}/ui/theme/default/js/app.min.js?v={_raid()}"></script>
    {else}
        <script src="{{APP_URL}}/ui/theme/default/js/app.min.js?v=2"></script>
    {/if}


    {block name=script}
    {/block}

    <script>
        $(function () {
            $('.amount').autoNumeric('init');
        });
    </script>

    {if isset($config['invoice_client_can_attach_signature']) && $config['invoice_client_can_attach_signature'] == 1 }

        <script src="{$app_url}ui/lib/jSignature.min.js"></script>

        <script>



            $(function () {

                var $signaturePadArea = $("#signaturePadArea");

                $signaturePadArea.jSignature({
                    color:"#000",


                });

                {if $d['signature_data_base64'] != '' }

                $signaturePadArea.jSignature("setData","{$d['signature_data_base64']}");

                {/if}

                $signaturePadArea.bind('change', function(e){
                    var signData = $signaturePadArea.jSignature("getData");
                    $.post( "{$_url}client/save-invoice-signature", {
                        invoice_id: '{$d['id']}',
                        view_token: '{$d['vtoken']}',
                        signData: signData,
                    });
                });


                $('#clearSignature').on('click',function () {
                    $signaturePadArea.jSignature("reset");
                });



            });
        </script>

    {/if}

    <script>
        jQuery(document).ready(function() {
            // initiate layout and plugins

            var $paymentGateway = $('#paymentGateway');

            {if isset($xjq)}
                {$xjq}
            {/if}

            if(document.getElementById('btnPayNow'))
                {
                    $('#btnPayNow').on('click',function (e) {
                        {$plugin_extra_js}
                        {if isset($payment_gateways_by_processor['stripe'])}
                        $stripeDiv = $('#stripeDiv');

                        if($paymentGateway.val() === 'stripe')
                            {
                                e.preventDefault();

                                $stripeDiv.show('slow');
                            }
                        {/if}
                    });

                    {if isset($payment_gateways_by_processor['stripe'])}

                        // Create a Stripe client.
                        var stripe = Stripe('{$payment_gateways_by_processor['stripe']['value']}');

                        // Create an instance of Elements.
                        var elements = stripe.elements();

                        // Custom styling can be passed to options when creating an Element.
                        // (Note that this demo uses a wider set of styles than the guide below.)
                        var style = {
                            base: {
                                color: '#32325d',
                                lineHeight: '18px',
                                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                                fontSmoothing: 'antialiased',
                                fontSize: '16px',
                                '::placeholder': {
                                    color: '#aab7c4'
                                }
                            },
                            invalid: {
                                color: '#fa755a',
                                iconColor: '#fa755a'
                            }
                        };

                        // Create an instance of the card Element.
                        var card = elements.create('card', { style: style });

                        // Add an instance of the card Element into the `card-element` <div>.
                        card.mount('#card-element');

                        // Handle real-time validation errors from the card Element.
                        card.addEventListener('change', function(event) {
                            var displayError = document.getElementById('card-errors');
                            if (event.error) {
                                displayError.textContent = event.error.message;
                            } else {
                                displayError.textContent = '';
                            }
                        });

                        // Handle form submission.
                        var form = document.getElementById('payment-form');
                        var $btnStripeSubmit = $('#btnStripeSubmit');
                        form.addEventListener('submit', function(event) {
                            event.preventDefault();
                            $btnStripeSubmit.prop('disabled',true);
                            stripe.createToken(card).then(function(result) {
                                if (result.error) {
                                    // Inform the user if there was an error.
                                    var errorElement = document.getElementById('card-errors');
                                    errorElement.textContent = result.error.message;
                                    $btnStripeSubmit.prop('disabled',false);
                                } else {
                                    // Send the token to your server.
                                    stripeTokenHandler(result.token);

                                }
                            });
                        });

                        // Submit the form with the token ID.
                        function stripeTokenHandler(token) {
                            // Insert the token ID into the form so it gets submitted to the server
                            var form = document.getElementById('payment-form');
                            var hiddenInput = document.createElement('input');
                            hiddenInput.setAttribute('type', 'hidden');
                            hiddenInput.setAttribute('name', 'stripeToken');
                            hiddenInput.setAttribute('value', token.id);
                            form.appendChild(hiddenInput);

                            // Submit the form
                            form.submit();
                        }

                    {/if}
                }
        });
    </script>
    {$config['footer_scripts']}
</body>

</html>