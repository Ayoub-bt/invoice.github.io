{extends file="layouts/base.tpl"}

{block name="content_body"}
    <div class="mx-auto" style="max-width: 980px; width: 100%; margin-top: 50px;">
        <section class="panel">

            <div class="panel-container p-2">
                <div class="panel-content">

                    <div class="invoice">
                        <header class="clearfix mb-5">
                            <div class="text-center">
                                <a href="{$_url}quotes/view/{$d['id']}/" class="btn btn-success my-2"><i class="fal fa-caret-left"></i> {$_L['Back']}</a>
                                <br>
                                <div class="btn-group">
                                    <!-- View Pdf -->
                                    <a href="{$_url}client/qpdf/{$d['id']}/token_{$d['vtoken']}" class="btn btn-primary"><i class="fal fa-print"></i> {$_L['View PDF']}</a>
                                    <!-- Download Pdf -->
                                    <a href="{$_url}client/qpdf/{$d['id']}/token_{$d['vtoken']}/dl/" class="btn btn-info"><i class="fal fa-file-pdf-o"></i> {$_L['Download PDF']}</a>

                                    <!-- Accept -->
                                    <!-- {if ($d['stage'] neq 'Accepted')}
                                        <a href="{$_url}client/q_accept/{$d['id']}/token_{$d['vtoken']}" class="btn btn-success">{$_L['Accept']}</a>
                                    {/if} -->

                                    <!-- Decline -->
                                    <!-- {if ($d['stage'] neq 'Lost')}
                                        <a href="{$_url}client/q_decline/{$d['id']}/token_{$d['vtoken']}" class="btn btn-danger">{$_L['Decline']}</a>
                                    {/if} -->
                                </div>

                                <div class="hr-line-dashed"></div>
                            </div>
                        </header>

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
                                                {$d['account']}
                                                <br>
                                            {else}
                                                {$d['account']}
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
                                        {$d['invoicenum']}{if $d['cn'] neq ''}{$d['cn']} {else} {$d['id']} {/if}
                                    </b>
                                </span>
                                
                                <!-- Quote date -->
                                <span class="m-none text-dark text-bold">
                                    <strong>{$_L['Date']}:</strong>
                                    {date( $config['df'], strtotime($d['datecreated']))}
                                </span>
                            </div>
                        </div>

                        <!-- Subject -->
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
                                        <th id="cell-item" class="text-decoration-underline">{$_L['Service Ref']}</th>
                                        <th id="cell-item" class="text-decoration-underline">{$_L['Item']}</th>
                                        <th id="cell-qty" class="text-center text-decoration-underline">{$_L['Quantity']}</th>
                                        <th id="cell-price" class="text-center text-decoration-underline">{$_L['PU Vente']}</th>
                                        <th id="cell-price" class="text-center text-decoration-underline">{$_L['Tax']}</th>
                                        <th id="cell-total" class="text-center text-decoration-underline">{$_L['Total']}</th>
                                        <th id="cell-total" class="text-center text-decoration-underline">{$_L['Image']}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {foreach $items as $item}
                                        <tr>
                                            <td class="text-dark">{$item['ref']}</td>
                                            <td class="text-dark">
                                                <p>{$item['description']}</p>
                                            </td>
                                            <td class="text-center nowrap">{$item['qty']}</td>
                                            <td class="text-center nowrap">{number_format($item['amount'], 2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}</td>
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

                        <!-- Summary -->
                        <div class="invoice-summary mb-3">
                            <div class="row" style="justify-content: right;" id="summary">
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
                                                    <td class="text-left">{number_format($d['discount'],2,$config['dec_point'],$config['thousands_sep'])} {$config['currency_code']}</td>
                                                </tr>
                                            {/if}
                                            <tr>
                                                <td colspan="2">{$_L['Tax']} ({round($d['taxrate'], 1)}%)</td>
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

        </section>
    </div>
{/block}
