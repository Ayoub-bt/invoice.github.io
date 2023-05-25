{extends file="$layouts_admin"}


{block name="head"}


    <style>

        #invform label {
            margin-bottom: 10px;
        }

        .btn-default {
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }

        .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active {
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }

        {if $pos eq 'pos'}
        .pos_item {

        {if $config['nstyle'] == 'dark_mode'}
            background: #182138;
        {else}
            background: #f3f6f9;
        {/if}


            cursor: pointer;
        }

        .pos_item:hover {
            background: #2196f3;
            color: #ffffff;
        }
        {/if}

    </style>
{/block}

{block name="content"}

    <form id="invform" method="post">

        <div class="row" id="ibox_form">

            <div class="alert alert-danger" id="emsg" style="display: none;">
                <span id="emsgbody"></span>
            </div>

            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-hdr py-3" style="justify-content: center;">
                        <div class="panel-toolbar">
                            {if $invoice}
                                <input type="hidden" name="invoice_id" value="{$invoice->id}">
                            {else}
                                <input type="hidden" name="invoice_id" value="">
                            {/if}

                            <!-- Save buttons -->
                            <div class="btn-group">
                                <button class="btn btn-sm btn-primary" id="submit"> {$_L['Save']}</button>
                                <button class="btn btn-sm btn-info" id="save_n_close"> {$_L['Save n Close']}</button>
                            </div>
                        </div>
                    </div>

                    <div class="panel-container px-2">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class='row'>

                                        <!-- Title -->
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label for="invoice_title">{$_L['Title']}  <small><em>({$_L['optional']})</em></small></label>
                                                <input type="text" class="form-control" id="invoice_title" name="title" {if $invoice}value="{$invoice->title}" {/if}>
                                            </div>
                                        </div>

                                        <!-- Customer -->
                                        <div class='col-sm-12'>
                                            <div class='mb-3'>
                                                <label for="user_title">{$_L['Customer']}</label>

                                                <select id="cid" name="cid" class="form-select">
                                                    <option value="">{$_L['Select Contact']}...</option>
                                                    {foreach $c as $cs}
                                                        <option value="{$cs['id']}" {if $p_cid eq ($cs['id'])} selected="selected" {/if}>
                                                            <!-- Full Name -->
                                                            {$cs['account']}
                                                            
                                                            <!-- Company -->
                                                            {if $cs['company'] neq ''}
                                                                - {$cs['company']}
                                                            {/if}
                                                        </option>
                                                    {/foreach}
                                                </select>
                                                <span class="help-block">
                                                    <a href="#" id="contact_add">| {$_L['Or Add New Customer']}</a>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Staff -->
                                        <div class='col-sm-4' style="display: none;">
                                            <div class='mb-3'>
                                                <label for="aid">{$_L['Staff']}</label>

                                                <select class="form-select" name="aid" id="aid">
                                                    <option value="1"></option>
                                                </select>
                                            </div>
                                        </div>


                                        <!-- Status -->
                                        <!-- <div class='col-sm-2'>
                                            <div class="mb-3">
                                                <label for="status">{$_L['Status']}</label>
                                                <select id="status" name="status" class="form-select">
                                                    <option value="Published" {if $invoice && $invoice->status != 'Draft'}selected{/if}>{$_L['Published']}</option>
                                                    <option value="Draft" {if $invoice && $invoice->status == 'Draft'}selected{/if}>{$_L['Draft']}</option>
                                                </select>
                                            </div>
                                        </div> -->
                                    </div>

                                    <!-- Invoice group -->
                                    {if !empty($config['invoice_group'])}
                                        <div class="mb-3">
                                            <label>{__('Group')}</label>
                                            <select class="form-select" name="group_id">
                                                <option value="0">{__('None')}</option>
                                                {foreach $invoice_groups as $group}
                                                    <option value="{$group->id}" {if $invoice && $invoice->group_id == $group->id}selected{/if}>{$group->name}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                    {/if}

                                    <!-- Single service -->
                                    {if !empty($config['invoice_single_service'])}
                                        <div class="mb-3">
                                            <label>{__('Service')}</label>
                                            <select class="form-select" id="service_id" name="service_id">
                                                <option value="0">{__('None')}</option>
                                                {foreach $services as $service}
                                                    <option data-price="{numberFormatUsingCurrency($service->sales_price,$config['home_currency'])}" value="{$service->id}" {if $invoice && $invoice->service_id == $service->id}selected{/if}>{$service->name}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                    {/if}

                                    <div class='row'>

                                    
                                        <!-- Address -->
                                        <div class='col-sm-6'>
                                            <div class="mb-3">
                                                <label for="address">{$_L['Address']}</label>
                                                <textarea id="address" readonly class="form-control" rows="1"></textarea>
                                            </div>
                                        </div>

                                        <!-- Currency -->
                                        <div class='col-sm-2'>
                                            <div class="mb-3">
                                                <label for="currency">{$_L['Currency']}</label>
                                                <select id="currency" name="currency" class="form-select">
                                                    {foreach $currencies as $key=>$value}
                                                        <option value="{$key}"

                                                                {if $invoice}
                                                                    {if $invoice->currency_iso_code == $key}selected {/if}
                                                                {else}
                                                                    {if $config['home_currency'] eq ($key)}selected {/if}
                                                                {/if}

                                                                data-decimal-mark="{$value['decimal_mark']}" data-thousands-separator="{$value['thousands_separator']}" data-symbol="{$value['symbol']}"
                                                                
                                                                {if $value['symbol_first']}
                                                                    data-symbol-first="yes"
                                                                {else}
                                                                    data-symbol-first="no"
                                                                {/if}
                                                                >
                                                            {$key}
                                                        </option>
                                                        {foreachelse}
                                                    {/foreach}
                                                </select>
                                            </div>
                                        </div>
                                            
                                        <!-- Show quantity as -->
                                        <div class='col-sm-4'>
                                            <div class="mb-3">
                                                <label for="show_quantity_as">{$_L['Show quantity as']}</label>
                                                <input type="text" class="form-control" id="show_quantity_as" name="show_quantity_as"
                                                    {if $invoice}
                                                        value="{$invoice->show_quantity_as}"
                                                    {else}
                                                        value="{if $config['show_quantity_as'] eq ''}{$_L['Qty']}{else}{$config['show_quantity_as']}{/if}"
                                                    {/if}
                                                    >
                                            </div>
                                        </div>

                                        <!-- Prefix -->
                                        <div class='col-sm-4'>
                                            <div class="mb-3">
                                                <label for="invoicenum">{$_L['Invoice Prefix']}</label>
                                                <input type="text" class="form-control" id="invoicenum" name="invoicenum" {if $invoice}value="{$invoice->invoicenum}" {else}

                                                        {if $action == 'credit-note'}

                                                            {if !empty($config['credit_note_prefix'])}

                                                                value="{sp_transform_string_template($config['invoice_code_prefix'])}"



                                                                {else}

                                                                value="{__('CN')}"

                                                                {/if}

                                                            {else}
                                                            value="{sp_transform_string_template($config['invoice_code_prefix'])}"
                                                        {/if}

                                                        {/if}>
                                            </div>
                                        </div>

                                        <!-- Invoice Number -->
                                        <div class='col-sm-4'>
                                            <div class="mb-3">
                                                <label for="cn">{__('Number')} #</label>
                                                <input type="text" class="form-control" id="cn" name="cn" {if $invoice}value="{$invoice->cn}" {else} value="{str_pad($config['invoice_code_current_number'], $config['number_pad'], '0', STR_PAD_LEFT)}" {/if}>
                                                {if $action !== 'credit-note'}
                                                    <span class="help-block">{$_L['invoice_number_help']}</span>
                                                {/if}

                                            </div>
                                        </div>

                                        <!-- Invoice Date -->
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="idate">{$_L['Invoice Date']}</label>
                                                <input type="text" class="form-control" id="idate" name="idate"
                                                    datepicker data-date-format="yyyy-mm-dd" data-auto-close="true"
                                                    {if $invoice}
                                                        value="{$invoice->date}"
                                                    {else}
                                                        value="{$idate}"
                                                    {/if}
                                                    >
                                            </div>
                                        </div>

                                        <!-- Payment Terms -->
                                        <div class="col-sm-4" style="display: none;">
                                            <div class="mb-3">
                                                <label for="duedate">{$_L['Payment Terms']}</label>

                                                {if $invoice}
                                                    <input type="text" class="form-control" id="duedate" name="duedate" datepicker
                                                        data-date-format="yyyy-mm-dd" data-auto-close="true"
                                                        value="{$invoice->duedate}">
                                                {else}
                                                    <select class="form-select" name="duedate" id="duedate">
                                                        <option value="due_on_receipt" {if isset($config['invoice_default_date']) && ($config['invoice_default_date'] == 'due_on_receipt' )} selected{/if}>{$_L['Due On Receipt']}</option>
                                                        <option value="days3" {if isset($config['invoice_default_date']) && ($config['invoice_default_date'] == 'days3' )} selected{/if}>{$_L['days_3']}</option>
                                                        <option value="days5" {if isset($config['invoice_default_date']) && ($config['invoice_default_date'] == 'days5' )} selected{/if}>{$_L['days_5']}</option>
                                                        <option value="days7" {if isset($config['invoice_default_date']) && ($config['invoice_default_date'] == 'days7' )} selected{/if}>{$_L['days_7']}</option>
                                                        <option value="days10" {if isset($config['invoice_default_date']) && ($config['invoice_default_date'] == 'days10' )} selected{/if}>{$_L['days_10']}</option>
                                                        <option value="days15" {if isset($config['invoice_default_date']) && ($config['invoice_default_date'] == 'days15' )} selected{/if}>{$_L['days_15']}</option>
                                                        <option value="days30" {if isset($config['invoice_default_date']) && ($config['invoice_default_date'] == 'days30' )} selected{/if}>{$_L['days_30']}</option>
                                                        <option value="days45" {if isset($config['invoice_default_date']) && ($config['invoice_default_date'] == 'days45' )} selected{/if}>{$_L['days_45']}</option>
                                                        <option value="days60" {if isset($config['invoice_default_date']) && ($config['invoice_default_date'] == 'days60' )} selected{/if}>{$_L['days_60']}</option>
                                                    </select>
                                                {/if}
                                            </div>
                                        </div>

                                        <!-- Receipt Number -->
                                        {if $config['invoice_receipt_number'] eq '1'}
                                            <div class='col-sm-4'>
                                                <div class="mb-3">
                                                    <label for="receipt_number">{$_L['Receipt Number']}</label>
                                                    <input type="text" class="form-control" id="receipt_number" name="receipt_number" {if $invoice}value="{$invoice->receipt_number}" {/if}>
                                                </div>
                                            </div>
                                        {else}
                                            <input type="hidden" name="receipt_number" id="receipt_number" value="">
                                        {/if}

                                        <!-- Recurring - Repeat Every -->
                                        {if $recurring}
                                            <div class='col-sm-4'>
                                                <div class="mb-3">
                                                    <label for="repeat">{$_L['Repeat Every']}</label>

                                                    <select class="form-select" name="repeat" id="repeat">
                                                        <option value="daily" {if $invoice && $invoice->r == '+1 day'} selected{/if}>{$_L['Daily']}</option>
                                                        <option value="week1" {if $invoice && $invoice->r == '+1 week'} selected{/if}>{$_L['Weekly']}</option>
                                                        <option value="weeks2" {if $invoice && $invoice->r == '+2 weeks'} selected{/if}>{$_L['Weeks_2']}</option>
                                                        <option value="weeks3" {if $invoice && $invoice->r == '+3 weeks'} selected{/if}>{$_L['Weeks_3']}</option>
                                                        <option value="weeks4" {if $invoice && $invoice->r == '+4 weeks'} selected{/if}>{$_L['Weeks_4']}</option>
                                                        <option value="month1" {if $invoice} {if $invoice->r == '+1 month'} selected{/if} {else} selected {/if}>{$_L['Month']}</option>
                                                        <option value="months2" {if $invoice && $invoice->r == '+2 months'} selected{/if}>{$_L['Months_2']}</option>
                                                        <option value="months3" {if $invoice && $invoice->r == '+3 months'} selected{/if}>{$_L['Months_3']}</option>
                                                        <option value="months6" {if $invoice && $invoice->r == '+6 months'} selected{/if}>{$_L['Months_6']}</option>
                                                        <option value="year1" {if $invoice && $invoice->r == '+1 year'} selected{/if}>{$_L['Year']}</option>
                                                        <option value="years2" {if $invoice && $invoice->r == '+2 years'} selected{/if}>{$_L['Years_2']}</option>
                                                        <option value="years3" {if $invoice && $invoice->r == '+3 years'} selected{/if}>{$_L['Years_3']}</option>

                                                    </select>
                                                </div>
                                            </div>
                                        {else}
                                            <input type="hidden" name="repeat" id="repeat" value="0">
                                        {/if}
                                    </div>

                                    {$extraHtml}

                                </div>
                            </div>

                            <!-- Search -->
                            {if $pos eq 'pos'}
                                <div class="ib-search-bar my-3" style="margin-bottom: 30px;">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="ib_search_input"
                                        placeholder="{$_L['Search']}..." autofocus data-list=".list_pos_items">
                                    </div>
                                </div>
                                <hr>
                                <div id="block_items" class="list_pos_items row">
                                </div>
                            {/if}

                            <!-- Services -->
                            <div class="table-responsive mt-3">
                                <table class="table table-bordered invoice-table" id="invoice_items">
                                    <thead>
                                        <tr>
                                            <th width="10%">{$_L['Service Ref']}</th>
                                            <th width="35%">{$_L['Item Name']}</th>
                                            <th width="5%">{if $config['show_quantity_as'] eq ''}{$_L['Qty']}{else}{$config['show_quantity_as']}{/if}</th>
                                            <th width="10%">{$_L['Price']}</th>
                                            <!-- Discount -->
                                            <th colspan="2" width="10%">{$_L['Discount']}
                                                {if $invoice}
                                                    <label class="radio-inline">
                                                        <input class="discountType" id="discountTypeP" type="radio" name="discount_type" value="p" {if $invoice->discount_type == 'p'}checked{/if}>
                                                        <span  data-bs-toggle="tooltip" data-placement="top" title="{$_L['Percentage']}">%</span>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input class="discountType" id="discountTypeF" type="radio" name="discount_type" value="f" {if $invoice->discount_type == 'f'}checked{/if}>
                                                        <span data-bs-toggle="tooltip" data-placement="top" title="{$_L['Fixed Amount']}" id="fixedDiscountText">
                                                            {if isset($currencies[$config['home_currency']])}
                                                                {$currencies[$config['home_currency']]['symbol']}
                                                            {else}
                                                            {/if}
                                                        </span>
                                                    </label>
                                                {else}
                                                    <label class="radio-inline">
                                                        <input class="discountType" id="discountTypeP" type="radio" name="discount_type" value="p" checked> <span  data-bs-toggle="tooltip" data-placement="top" title="{$_L['Percentage']}">%</span>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input class="discountType" id="discountTypeF" type="radio" name="discount_type" value="f">
                                                        <span data-bs-toggle="tooltip" data-placement="top" title="{$_L['Fixed Amount']}" id="fixedDiscountText">
                                                            {if isset($currencies[$config['home_currency']])}
                                                                {$currencies[$config['home_currency']]['symbol']}
                                                            {else}
                                                            {/if}
                                                        </span>
                                                    </label>
                                                {/if}
                                            </th>
                                            <th width="10%">{$_L['Tax']}</th>
                                            <th width="15%">{$_L['Total']}</th>
                                        </tr>

                                    </thead>
                                    <tbody>

                                        {if $items}
                                            {foreach $items as $item}
                                                <tr>
                                                    <!-- Service -->
                                                    <td><input type="text" class="form-control ref" value="{$item['ref']}" name="ref[]"></td>
                                                    <td>
                                                        {if !empty($config['invoicing_allow_staff_selection_for_each_item'])}
                                                            <div class="mb-3">
                                                                <select name="staff_id[]" class="form-select"><option value="0">{{__('Select Staff')}}</option>{foreach $staffs as $employee}<option value="{$employee->id}"
                                                                    {if $item->staff_id == $employee->id} selected {/if}
                                                                    >{$employee->fullname}</option>{/foreach}</select>
                                                            </div>
                                                        {/if}
                                                        <textarea class="form-control item_name" name="desc[]" rows="3">{$item->description}</textarea>
                                                        <input type="hidden" name="item_code[]" value="{$item->itemcode}">
                                                    </td>

                                                    <!-- Quantity -->
                                                    <td>
                                                        <input type="text" class="form-control qty" value="{numberFormatUsingCurrency($item->qty,$invoice->currency_iso_code)}" name="qty[]">
                                                    </td>

                                                    <!-- Price -->
                                                    <td>
                                                        <input type="text" class="form-control item_price" name="amount[]" value="{numberFormatUsingCurrency($item->amount,$invoice->currency_iso_code)}">
                                                    </td>

                                                    <!-- Discount -->
                                                    <td colspan="2">
                                                        <input type="text" class="form-control item_discount" name="discount[]" value="{numberFormatUsingCurrency($item->discount_amount,$invoice->currency_iso_code)}">
                                                    </td>

                                                    <!-- Tax -->
                                                    <td>
                                                        <select class="form-select taxed" name="taxed[]">
                                                            {foreach $t as $ts}
                                                            <option value="{$ts['rate']}"
                                                                {if $item->taxed eq '1' && $item->tax_rate eq $ts['rate']} selected {/if}
                                                                >
                                                                {$ts['name']} - {$ts['rate']}%
                                                            </option>
                                                            {/foreach}
                                                        </select>
                                                    </td>
                                                    

                                                    <!-- Total -->
                                                    <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>
                                                </tr>
                                            {/foreach}
                                        {/if}

                                        <tr>

                                            <td><input type="text" class="form-control item_ref" value="" name="ref[]"></td>

                                            <!-- Description -->
                                            <td>
                                                <textarea class="form-control item_name" name="desc[]" rows="3"></textarea>
                                                <input type="hidden" name="item_code[]" value="">
                                            </td>

                                            <!-- Qty -->
                                            <td>
                                                <input type="text" class="form-control qty" value="" name="qty[]">
                                            </td>

                                            <!-- Amount -->
                                            <td>
                                                <input type="text" class="form-control item_price" name="amount[]" value="">
                                            </td>

                                            <!-- Discount -->
                                            <td colspan="2">
                                                <input type="text" class="form-control item_discount" name="discount[]" value="">
                                            </td>

                                            <!-- Tax -->
                                            <td>
                                                <select class="form-select taxed" name="taxed[]">
                                                    {foreach $t as $ts}
                                                        <option value="{$ts['rate']}" {if $ts['is_default'] eq '1'} selected {/if}>
                                                            {$ts['name']} - {$ts['rate']}%
                                                        </option>
                                                    {/foreach}
                                                </select>
                                            </td>

                                            <!-- Total -->
                                            <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <!-- Add blank line -->
                            <button type="button" class="btn btn-primary mb-3" id="blank-add">
                                <i class="fal fa-plus"></i> {$_L['Add blank Line']}
                            </button>
                            <!-- Add product or service -->
                            <button type="button" class="btn btn-primary mb-3" id="item-add">
                                <i class="fal fa-search"></i> {$_L['Add Product OR Service']}
                            </button>
                            <!-- Delete product or service -->
                            <button type="button" class="btn btn-danger mb-3" id="item-remove">
                                <i class="fal fa-minus-circle"></i> {$_L['Delete']}
                            </button>

                            <br>
                            <br>
                            <hr>

                            <div class="row">
                                <div class="col-md-4 offset-md-8">
                                    <table class="table invoice-total">
                                        <tbody>
                                            <!-- Sub Total -->
                                            <tr>
                                                <td><strong>{$_L['Sub Total']} :</strong></td>
                                                <td id="sub_total" class="amount">0.00</td>
                                            </tr>

                                            <!-- Discount -->
                                            <tr>
                                                <td>
                                                    <strong>{$_L['Discount']} <span id="is_pt"></span> : </strong>
                                                </td>
                                                <td id="discount_amount_total" class="amount">0.00</td>
                                            </tr>

                                            <!-- Tax -->
                                            {if $config['tax_system'] eq 'default'}
                                                <tr>
                                                    <td><strong>{$_L['TAX']} :</strong></td>
                                                    <td id="taxtotal" class="amount">0.00
                                                    </td>
                                                </tr>
                                            {elseif $config['tax_system'] eq 'ca_quebec'}
                                                <div id="taxValTr">
                                                    <tr>
                                                        <td><strong>{$_L['TAX']} :</strong></td>
                                                        <td id="taxtotal" class="amount">0.00
                                                        </td>
                                                    </tr>
                                                </div>
                                            {elseif $config['tax_system'] eq 'India'}
                                                <div id="taxValTr">
                                                    <tr>
                                                        <td><strong>{$_L['TAX']} :</strong></td>
                                                        <td id="taxtotal" class="amount">0.00
                                                        </td>
                                                    </tr>
                                                </div>
                                            {/if}

                                            <!-- Total -->
                                            <tr>
                                                <td><strong>{$_L['TOTAL']} :</strong></td>
                                                <td id="total" class="amount">0.00
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <hr>
                            <textarea class="form-control" name="notes" id="notes" rows="3"
                                placeholder="{$_L['Invoice Terms']}...">{if $invoice}{$invoice->notes}{else}{$config['invoice_terms']}{/if}</textarea>
                            <br>

                            {if $recurring}
                                <input type="hidden" id="is_recurring" value="yes">
                            {else}
                                <input type="hidden" id="is_recurring" value="no">
                            {/if}

                        </div>
                    </div>

                    <div class="panel-toolbar mb-3" style="justify-content: center;">
                        {if $invoice}
                            <input type="hidden" name="invoice_id" value="{$invoice->id}">
                        {else}
                            <input type="hidden" name="invoice_id" value="">
                        {/if}

                        <!-- Save buttons -->
                        <div class="btn-group">
                            <button class="btn btn-sm btn-primary" id="submit2"> {$_L['Save']}</button>
                            <button class="btn btn-sm btn-info" id="save_n_close2"> {$_L['Save n Close']}</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <input type="hidden" name="document_type" value="{{$action}}">

    </form>

    {* lan variables *}
    <input type="hidden" id="_lan_set_discount" value="{$_L['Set Discount']}">
    <input type="hidden" id="_lan_discount" value="{$_L['Discount']}">
    <input type="hidden" id="_lan_discount_type" value="{$_L['Discount Type']}">
    <input type="hidden" id="_lan_percentage" value="{$_L['Percentage']}">
    <input type="hidden" id="_lan_fixed_amount" value="{$_L['Fixed Amount']}">
    <input type="hidden" id="_lan_btn_save" value="{$_L['Save']}">
    <input type="hidden" id="_lan_no_results_found" value="{$_L['No results found']}">
{/block}


{block name="script"}

<script>

String.prototype.replaceAll = function(search, replacement) {
    var target = this;
    return target.replace(new RegExp(search, 'g'), replacement);
};

String.prototype.trunc = String.prototype.trunc ||
    function (n) {
        return (this.length > n) ? this.substr(0, n - 1) + '&hellip;' : this;
    };

var selectedCurrency;

function getSelectedCurrencySymbol() {
    selectedCurrency = document.getElementById('currency');
    return selectedCurrency.options[selectedCurrency.selectedIndex].getAttribute('data-symbol');
}

function getSelectedCurrencyDecimalMark() {
    selectedCurrency = document.getElementById('currency');
    return selectedCurrency.options[selectedCurrency.selectedIndex].getAttribute('data-decimal-mark');
}

function getSelectedCurrencyThousandsSeparator() {
    selectedCurrency = document.getElementById('currency');
    return selectedCurrency.options[selectedCurrency.selectedIndex].getAttribute('data-thousands-separator');
}

function selectedCurrencyIsSymbolFirst() {
    selectedCurrency = document.getElementById('currency');
    if(selectedCurrency.options[selectedCurrency.selectedIndex].getAttribute('data-symbol-first') === 'yes')
    {
        return true;
    }
    else
    {
        return false;
    }

}

function clx_number_format(number, decimals, dec_point, thousands_sep) {

    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        toFixedFix = function (n, prec) {
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            var k = Math.pow(10, prec);
            return Math.round(n * k) / k;
        },
        s = (prec ? toFixedFix(n, prec) : Math.round(n)).toString().split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}

function formatCurrency(amount) {
    var prefix = '';
    var suffix = '';
    if(selectedCurrencyIsSymbolFirst())
    {
        prefix = getSelectedCurrencySymbol() + ' ';
    }
    else
    {
        suffix = ' ' + getSelectedCurrencySymbol();
    }


    return prefix + clx_number_format(amount,2,getSelectedCurrencyDecimalMark(),getSelectedCurrencyThousandsSeparator()) + suffix;

}


function parseAmount(amount,to_fixed_digits) {

    let digits = 2;

    if(amount === '')
    {
        return 0.00;
    }

    if(typeof to_fixed_digits !== 'undefined')
    {
        digits = to_fixed_digits;
    }


    if(getSelectedCurrencyDecimalMark() === ',')
    {
        amount = amount.split('.').join('');
        amount = amount.replace(',','.');
    }
    else{
        amount = amount.replace(',','');
    }


    return parseFloat(amount).toFixed(digits);

}

function calculatePercentage(amount,percentage) {
    return (amount)*(percentage/100);
}

var is_same_state = false;

$(document).ready(function () {

    $('[data-bs-toggle="tooltip"]').tooltip();

    var c_qty;
    var c_price;
    var c_taxed;
    var c_discount;

    var lineTotal;
    var lineDiscount;

    var tax_val;

    var $discount_amount_total = $("#discount_amount_total");

    var $discount_amount = $("#discount_amount");
    var $discount_type = $("#discount_type");


    function spEditor(selector) {

        $(selector).redactor({
            minHeight: 30,
            buttons: ['html', '|', 'formatting', '|', 'bold', 'italic', 'link', 'unorderedlist', 'orderedlist']
        });

    }

    function spMultiSelect(selector) {
        /*
        $(selector).multiselect(
            {
                allSelectedText: false,
                nonSelectedText: 'None'
            }
        );
        */


    }

    spMultiSelect('.taxed');


    var $total = $("#total");
    var $taxtotal = $("#taxtotal");
    var $sub_total = $("#sub_total");

    var $invoice_items = $('#invoice_items');

    var invTotal = 0;

    var totalTaxVal = 0;

    var lineTotalWithoutTax;

    var totalLineTotalWithoutTax = 0;

    var discount_type = 'p';

    var totalDiscount;

    function calculateTotal() {

        discount_type = document.querySelector('.discountType:checked').value;

        invTotal = 0;

        totalTaxVal = 0;

        tax_val = 0;

        lineTotalWithoutTax = 0;

        totalLineTotalWithoutTax = 0;

        totalDiscount = 0;

        var c_taxed_split;

        $.each($('.qty'), function (index, value) {
            // console.log(index);
            // console.log(this.value);

            c_qty = this.value;

            c_qty = parseAmount(c_qty);

            c_price = $(this).closest('tr').find('.item_price').val();

            {if isset($config['decimal_places_products_and_services'])}
            c_price = parseAmount(c_price,{$config['decimal_places_products_and_services']});
            {else}
            c_price = parseAmount(c_price);
            {/if}

            c_discount = $(this).closest('tr').find('.item_discount').val();
            c_discount = parseAmount(c_discount);

            // console.log(c_discount);

            if (c_qty === '' || c_price === '') {
                return;
            }

            c_taxed = $(this).closest('tr').find('.taxed').val();

            lineTotal = c_price * c_qty;

            lineTotal = parseFloat(lineTotal);

            lineTotalWithoutTax = lineTotal;

            if(discount_type == 'p')
            {
                lineDiscount = calculatePercentage(lineTotal,c_discount);
            }
            else {
                lineDiscount = c_discount;
            }

            // console.log(lineDiscount);

            lineTotal = (lineTotal-lineDiscount);


            if (c_taxed === '' || c_taxed === null) {
                tax_val = 0;
            }
            else {
                c_taxed = parseFloat(c_taxed).toFixed(3);
                tax_val = (lineTotal * c_taxed) / 100;

                //  console.log(c_taxed);
                //  console.log(lineTotal);

                lineTotal = lineTotal + tax_val;
            }

            $(this).closest('tr').find('.lvtotal').val(lineTotal.toFixed(2));

            totalTaxVal += tax_val;

            totalLineTotalWithoutTax += lineTotalWithoutTax;

            totalDiscount += lineDiscount;

        });

        totalDiscount = parseFloat(totalDiscount);

        invTotal = totalLineTotalWithoutTax - totalDiscount + totalTaxVal;

        $total.html(formatCurrency(invTotal.toFixed(2)));
        $taxtotal.html(formatCurrency(totalTaxVal.toFixed(2)));
        $sub_total.html(formatCurrency(totalLineTotalWithoutTax.toFixed(2)));
        $discount_amount_total.html(formatCurrency(totalDiscount.toFixed(2)));
    }

    calculateTotal();

    $('#discountTypeP').change(function () {
        calculateTotal();
    });

    $('#discountTypeF').change(function () {
        calculateTotal();
    });

    var $currency = $('#currency');
    var $fixedDiscountText = $('#fixedDiscountText');

    // $currency.on('change',function () {
    //     $fixedDiscountText.html(getSelectedCurrencySymbol());
    //     calculateTotal();
    // });

    var $block_items = $("#block_items");
    var _url = $("#_url").val();

    $('#notes').redactor(
        {
            minHeight: 200, // pixels
            plugins: ['fontcolor']
        }
    );

    spEditor('.item_name');

    $invoice_items.on('change', '.taxed', function () {
        //   $('#taxtotal').html('dd');
        // var taxrate = $('#stax').val().replace(',', '.');
        // $(this).val(taxrate);
        calculateTotal();
    });

    $invoice_items.on('change', '.qty', function () {
        calculateTotal();
    });

    $invoice_items.on('change', '.item_price', function () {
        calculateTotal();
    });

    $invoice_items.on('change', '.item_discount', function () {
        calculateTotal();
    });

    var item_remove = $('#item-remove');
    item_remove.hide();

    function update_address() {
        var _url = $("#_url").val();
        var cid = $('#cid').val();
        if (cid != '') {
            $.post(_url + 'contacts/json-single-contact/', {
                cid: cid

            })
                .done(function (data) {
                    var adrs = $("#address");

                    adrs.html(data.address_full);

                    if (document.getElementById('business_number')) {
                        $('#business_number').val(data.business_number);
                    }

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
        .on("change", function (e) {
            // mostly used event, fired to the original element when the value changes
            // log("change val=" + e.val);
            //  alert(e.val);

            update_address();
        });

    {if $config['tax_system'] eq 'India'}

    var $place_to_supply = $("#place_of_supply");

    $place_to_supply.select2({

        language: {
            noResults: function () {
                return $("#_lan_no_results_found").val();
            }
        }
    })
        .on("change", function (e) {

        });
    {/if}

    item_remove.on('click', function () {
        $("#invoice_items tr.info").fadeOut(300, function () {
            $(this).remove();

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
                                "emptyTable": "{$_L['No items to display']}",
                                "info":      "{$_L['Showing _START_ to _END_ of _TOTAL_ entries']}",
                                "infoEmpty":      "{$_L['Showing 0 to 0 of 0 entries']}",
                                buttons: {
                                    pageLength: '{$_L['Show all']}'
                                },
                                searchPlaceholder: "{__('Search')}"
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

    $('#contact_add').on('click', function (e) {
        e.preventDefault();

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

    var rowNum = 0;

    let with_staff_selection = '';

    {if !empty($config['invoicing_allow_staff_selection_for_each_item'])}

    with_staff_selection = '<div class="mb-3"><select name="staff_id[]" class="form-select"><option value="0">{{__('Select Staff')}}</option>{foreach $staffs as $employee}<option value="{$employee->id}">{$employee->fullname}</option>{/foreach}</select></div>';

    {/if}

    $('#blank-add').on('click', function () {
        rowNum++;

        $invoice_items.find('tbody')
            .append(
                '<tr> <td><input type="text" class="form-control ref" value="" name="ref[]"></td> <td><textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + rowNum + '"></textarea> <input type="hidden" name="item_code[]" value=""> </td> <td><input type="text" class="form-control qty" value="" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value=""></td> <td colspan="2"><input type="text" class="form-control item_discount" name="discount[]" value=""></td><td> <select class="form-select taxed" name="taxed[]" id="t_' + rowNum + '"> {foreach $t as $ts}  <option value="{$ts['rate']}" {if $ts['is_default'] eq '1'}selected{/if}>{$ts['name']} - {$ts['rate']}%</option> {/foreach} </select></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>'
            );

        spEditor('#i_' + rowNum);


        spMultiSelect('#t_' + rowNum);

        //   calculateTotal();


    });

    $invoice_items.on('click', '.redactor-editor', function () {
        $("tr").removeClass("info");
        $(this).closest('tr').addClass("info");
        item_remove.show();
    });

    $modal.on('click', '.update', function () {
        var tableControl = document.getElementById('items_table');

        $.fancybox.close();


        $('input:checkbox:checked', tableControl).each(function () {
            rowNum++;
            var item_code = $(this).closest('tr').find('td:eq(1)').text();
            var item_name = $(this).closest('tr').find('td:eq(2)').text();

            var item_price = $(this).closest('tr').find('td:eq(3)').text();
            let tax_code = $(this).closest('tr').find('td:eq(4)').text();

            $invoice_items.find('tbody')
                .append(
                    '<tr> <td><input type="text" class="form-control ref" value="' + item_code + '" name="ref[]"></td> <td><textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + rowNum + '">' + item_name + '</textarea> <input type="hidden" name="item_code[]" value="' + item_code + '"></td> <td><input type="text" class="form-control qty" value="1" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value="' + item_price + '"></td> <td colspan="2"><input type="text" class="form-control item_discount" name="discount[]" value=""></td>  <td> <select class="form-select taxed" name="taxed[]" id="t_' + rowNum + '"> {foreach $t as $ts}  <option value="{$ts['rate']}" {if $ts['is_default'] eq '1'}selected{/if}>{$ts['name']} - {$ts['rate']}%</option> {/foreach} </select></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>'
                );

            spEditor('#i_' + rowNum);

            spMultiSelect('#t_' + rowNum);

            calculateTotal();

        });


        $modal.modal('hide');

    });


    $modal.on('click', '.contact_submit', function (e) {
        e.preventDefault();
        //  var tableControl= document.getElementById('items_table');


        var _url = $("#_url").val();
        $.post(_url + 'contacts/add-post/', {


            account: $('#account').val(),
            company: $('#company').val(),
            address: $('#m_address').val(),


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
                    var is_recurring = $('#is_recurring').val();
                    if (is_recurring == 'yes') {
                        window.location = _url + 'invoices/add/recurring/' + data + '/';
                    }
                    else {
                        window.location = _url + 'invoices/add/1/' + data + '/';
                    }

                }
                else {


                    $modal
                        .modal('loading')
                        .find('.modal-body')
                        .prepend('<div class="alert alert-danger fade in">' + data +
                            '<button type="button" class="close btn btn-danger" data-dismiss="alert">&times;</button>' +
                            '</div>');
                }
            });


    });


    $(".progress").hide();
    $("#emsg").hide();
    $("#submit").click(function (e) {
        e.preventDefault();
        $('#ibox_form').block({ message: null });
        var _url = $("#_url").val();
        $.post(_url + 'invoices/add-post/', $('#invform').serialize(), function (data) {

            var _url = $("#_url").val();
            if ($.isNumeric(data)) {
                window.location = _url + 'invoices/edit/' + data + '/';
            }
            else {
                $('#ibox_form').unblock();
                var body = $("html, body");
                body.animate({ scrollTop: 0 }, '1000', 'swing');
                $("#emsgbody").html(data);
                $("#emsg").show("slow");
            }
        });
    });

    $("#submit2").click(function (e) {
        e.preventDefault();
        $('#ibox_form').block({ message: null });
        var _url = $("#_url").val();
        $.post(_url + 'invoices/add-post/', $('#invform').serialize(), function (data) {

            var _url = $("#_url").val();
            if ($.isNumeric(data)) {
                window.location = _url + 'invoices/edit/' + data + '/';
            }
            else {
                $('#ibox_form').unblock();
                var body = $("html, body");
                body.animate({ scrollTop: 0 }, '1000', 'swing');
                $("#emsgbody").html(data);
                $("#emsg").show("slow");
            }
        });
    });

    $("#save_n_close2").click(function (e) {
        e.preventDefault();
        $('#ibox_form').block({ message: null });
        var _url = $("#_url").val();
        $.post(_url + 'invoices/add-post/', $('#invform').serialize(), function (data) {

            var _url = $("#_url").val();
            if ($.isNumeric(data)) {
                window.location = _url + 'invoices/view/' + data + '/';
            }
            else {
                $('#ibox_form').unblock();
                var body = $("html, body");
                body.animate({ scrollTop: 0 }, '1000', 'swing');
                $("#emsgbody").html(data);
                $("#emsg").show("slow");
            }
        });
    });

    $("#save_n_close").click(function (e) {
        e.preventDefault();
        $('#ibox_form').block({ message: null });
        var _url = $("#_url").val();
        $.post(_url + 'invoices/add-post/', $('#invform').serialize(), function (data) {

            var _url = $("#_url").val();
            if ($.isNumeric(data)) {

                window.location = _url + 'invoices/view/' + data + '/';
            }
            else {
                $('#ibox_form').unblock();
                var body = $("html, body");
                body.animate({ scrollTop: 0 }, '1000', 'swing');
                $("#emsgbody").html(data);
                $("#emsg").show("slow");
            }
        });
    });


    {if $pos eq 'pos'}

    function loadItems() {

        $block_items.html(block_msg);

        var item_name;

        $.getJSON(base_url + "items/all/", function (data) {
            var items = "";
            var b_p;
            $.each(data, function (key, val) {

                item_name = val.name;

                item_name = item_name.trunc(12);


                var image;

                if(val.image == '') {
                    image = '{$app_url}ui/lib/img/item_placeholder.png';
                }
                else{
                    image = '{$app_url}storage/items/thumb'+ val.image;
                }


                b_p = '<div class="col-lg-2 col-md-2 col-sm-3 col-xs-4"><div class="pos_item text-center" id="pos_item_'+ val.id +'" data-pos-item-name="'+val.name+'" data-pos-item-price="'+val.sales_price+'" data-pos-tax-code="'+val.tax_code+'" data-id="'+ val.id +'" data-pos-item-number="'+ val.item_number +'"><img src="'+ image +'" alt="'+ item_name +'" class="img-circle"><hr>'+ item_name +' <br>'+ val.sales_price +'  <hr></div> </div>';

                items = items + b_p;
            });

            $block_items.html(items);

            $('#ib_search_input').hideseek({
                highlight: true
            });

        });

    }

    loadItems();

    var pos_item_name, pos_item_price, pos_item_id, pos_item_number, pos_tax_code;

    var item_sl = 5000;

    $block_items.on('click', '.pos_item', function () {

        pos_item_number = $(this).data('pos-item-number');
        pos_item_name = $(this).data('pos-item-name');
        pos_item_price = $(this).data('pos-item-price');
        pos_item_id = $(this).data('id');
        pos_tax_code = ($(this).data('pos-tax-code')) ?? '';

        $invoice_items.find('tbody')
            .prepend(
                '<tr> <td><input type="text" class="form-control ref" value="' + item_code + '" name="ref[]"></td> <td><textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + item_sl + '">' + pos_item_name + '</textarea> <input type="hidden" name="item_code[]" value="' + pos_item_number + '"></td> <td><input type="text" class="form-control qty" value="1" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value="' + pos_item_price + '"></td> <td colspan="2"><input type="text" class="form-control item_discount" name="discount[]" value=""></td>  <td> <select class="form-select taxed" name="taxed[]" id="t_' + item_sl + '"> {foreach $t as $ts}  <option value="{$ts['rate']}" {if $ts['is_default'] eq '1'}selected{/if}>{$ts['name']}</option> {/foreach} </select></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>'
            );


        spEditor('#i_' + item_sl);


        spMultiSelect('#t_' + rowNum);

        calculateTotal();

        item_sl = item_sl + 1;


    });



    {/if}


    {if !empty($config['invoice_single_service'])}

    const service_id = document.getElementById('service_id');

    service_id.addEventListener('change', () => {

        let item_sl = 15000;

        let price = service_id.options[service_id.selectedIndex].getAttribute('data-price');
        let name = service_id.options[service_id.selectedIndex].text;


        $invoice_items.find('tbody')
            .prepend(
                '<tr>  <td><textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + item_sl + '">' + name + '</textarea> <input type="hidden" name="item_code[]" value=""></td> <td><input type="text" class="form-control qty" value="1" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value="' + price + '"></td> <td colspan="2"><input type="text" class="form-control item_discount" name="discount[]" value=""></td>  <td> <select class="form-select taxed" name="taxed[]" id="t_' + item_sl + '"> {foreach $t as $ts}  <option value="{$ts['rate']}" {if $ts['is_default'] eq '1'}selected{/if}>{$ts['name']}</option> {/foreach} </select></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>'
            );

        spEditor('#i_' + item_sl);


        spMultiSelect('#t_' + rowNum);

        calculateTotal();

        item_sl = item_sl + 1;
    });

    {/if}

});
</script>
    
{/block}
