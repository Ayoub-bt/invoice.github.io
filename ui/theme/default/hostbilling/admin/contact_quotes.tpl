{extends file="hostbilling/admin/contact_base.tpl"}


{block name="inner_content"}


    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>{$_L['Quote']}</th>
            <th>{$_L['Subject']}</th>
            <th>{$_L['Amount']}</th>
            <th>{$_L['Created']}</th>
        </tr>
        </thead>
        <tbody>

        {foreach $quotes as $recent_quote}

            <tr>
                <td>
                    <!-- {$_url}quotes/view/{$ds['id']}/ -->
                    <a href="{$base_url}quotes/view/{$recent_quote->id}/">
                        {cloudonex_get_invoice_number($recent_quote)}
                    </a>
                </td>
                <td>
                    {$recent_quote->subject}
                </td>
                <td>
                    {formatCurrency($recent_quote->total, $config['home_currency'])}
                </td>
                <td>
                    {date( $config['df'], strtotime($recent_quote->datecreated))}
                </td>
            </tr>

        {/foreach}


        </tbody>
    </table>


{/block}
