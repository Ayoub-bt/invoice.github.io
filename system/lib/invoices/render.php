<html>

<head>

<style>

    * { margin: 0; padding: 0; }
    body {
        font: 14px/1.4  dejavusanscondensed;
    }
    #page-wrap { width: 800px; margin: 0 auto; }

    table { border-collapse: collapse; }
    table td, table th { border: 1px solid #ececec; padding: 5px; }

    #customer { overflow: hidden; }

    <?php if ($config['rtl'] == 1) { ?>
        #logo { text-align: right; float: left; position: relative; margin-top: 25px; border: 1px solid #fff; max-width: 540px; overflow: hidden; }
    <?php } else { ?>
        #logo { text-align: right; float: right; position: relative; margin-top: 25px; border: 1px solid #fff; max-width: 540px; overflow: hidden; }
    <?php } ?>

    #meta { margin-top: 1px; width: 100%; float: right; }
    #meta td { text-align: right;  }
    #meta td.meta-head { text-align: left; background: #eee; }
    #meta td textarea { width: 100%; height: 20px; text-align: right; }

    #items { clear: both; width: 100%; margin: 0 0 0 0; }
    #items th { background: #eee; color: #2b2b2b; }
    #items textarea { width: 80px; height: 50px; }
    #items tr.item-row td {  vertical-align: top; }
    #items td.description { width: 300px; }
    #items td.item-name { width: 175px; }
    #items td.description textarea, #items td.item-name textarea { width: 100%; }
    #items td.total-line { border-right: 0; text-align: right; }
    #items td.total-value { border-left: 0; padding: 10px; }
    #items td.total-value textarea { height: 20px; background: none; }
    #items td.balance { background: #eee; }

    <?php if ($config['rtl'] == 1) { ?>
        html body {
            direction: rtl;
        }
        table td, table th {
            text-align: right;
        }
    <?php } else { ?>
        #items td.blank { border: 0; }
    <?php } ?>

</style>

</head>

<body style="font-family:dejavusanscondensed">

<div id="page-wrap">

    <table width="100%">
        <tr>
            <td style="border: 0;" width="62%">
                <div id="logo" style="font-size: 18px">

                    <!-- Logo -->
                    <img id="image" src="<?php echo APP_URL; ?>/storage/system/<?php echo $config['logo_default']; ?>" alt="<?= $config['CompanyName'] ?>" style="margin-bottom: 15px;" />
                    <br>
                    <br>

                    <!-- CompanyName -->
                    <b><?php echo $config['CompanyName']; ?></b>
                    
                    <br>
                    
                    <!-- Company Full Address -->
                    <?php echo $config['caddress']; ?>

                    <!-- CompanyPhone -->
                    <!-- <?php
                    if ($config['CompanyPhone']) {
                        echo $_L['Phone'] . ': ' . $config['CompanyPhone'] . "<br>";
                    }
                    ?> -->

                    <!-- CompanyEmail -->
                    <?php
                    if ($config['sysEmail']) {
                        echo $_L['Email'] . ': ' . $config['sysEmail'] . "<br>";
                    }
                    ?>

                    № TVA intracommunautaire: FR47920784766
                    <br>
                    № Siret: 92078476600015
                    <br>
                    Code NAF: 8121Z

                    <br>
                </div>
            </td>

            <!-- Client infos -->
            <td style="border: 0;" width="62%">
                <div id="logo" style="font-size:18px">

                <br>
                <br>
                <br>
                <br>

                <!-- Client Company -->
                <?php if ($a['company'] != '') { ?>
                    <b><?php echo $a['company']; ?></b> <br>
                    <?php echo $a['account']; ?> <br>
                <?php } else { ?>
                    <?php echo $d['account']; ?> <br>
                <?php } ?>

                <!-- Client address -->
                <?php echo getContactFormattedAddress($config, $a); ?>
                <br>

                <?php

                // Phone
                if ($a['phone'] != '') {
                    echo $_L['Phone'] . ': ' . $a['phone'] . ' <br>';
                }

                // Fax
                if ($a['fax'] != '' && $config['fax_field'] != '0') {
                    echo $_L['Fax'] . ': ' . $a['fax'] . ' <br>';
                }

                // Email
                if ($a['email'] != '') {
                    echo 'Email: ' . $a['email'] . ' <br>';
                }

                // Fieldname
                foreach ($cf as $cfs) {
                    echo $cfs['fieldname'] . ': ' . get_custom_field_value($cfs['id'], $a['id']) . ' <br>';
                }
                ?>
            </td>
        </tr>

        <!-- Invoice number -->
        <tr>
            <td style="border: 0;
                <?php if ($config['rtl'] == 1) { ?>
                    text-align: right;
                <?php } else { ?>
                    text-align: left;
                <?php } ?>" width="62%">
            
                <br>
                
                <span style="font-size: 23px; color: #2b2b2b">
                    <strong>
                        <?php
                        $dispid = $d['cn'] != '' ? $d['cn'] : $d['id'];
                        echo $d['invoicenum'] . $dispid;
                        ?>
                    </strong>
                </span>
            </td>
        </tr>

        <!-- Invoice date -->
        <tr>
            <td style="border: 0;">
                <?php echo date($config['df'], strtotime($d['date'])); ?>
            </td>
        </tr>
    </table>

    <div style="clear:both"></div>

    <?php if (isset($extraHtml) && $extraHtml != '') {
        echo $extraHtml;
    } ?>

    <!-- Services -->
    <table id="items">
        <tr>
            <th align="left"><?php echo $_L['Service Ref']; ?></th>
            <th align="left"><?php echo $_L['Item']; ?></th>
            <th align="right">
                <?php if ($d['show_quantity_as'] == '' || $d['show_quantity_as'] == '1') {
                    echo $_L['Qty'];
                } else {
                    echo $d['show_quantity_as'];
                } ?>
            </th>
            <th align="right"><?php echo $_L['PU Vente']; ?></th>
            <th align="right"><?php echo $_L['Tax']; ?></th>
            <th align="right"><?php echo $_L['Total HT']; ?></th>
            <th align="right"><?php echo $_L['Image']; ?></th>
        </tr>

        <?php $col_span = 5;?>

        <?php foreach ($items as $item) {
            $taxAmount = 20/100; $finalAmount = $taxAmount * $item['amount'];
            if ($item['taxed']) {
                $tax_amount = number_format($finalAmount, 2,$config['dec_point'], $config['thousands_sep']) . $config['currency_code'];
            } else {
                $tax_amount = number_format(0, 2,$config['dec_point'], $config['thousands_sep']) . $config['currency_code'];
            }
            echo '<tr class="item-row">' .
                    '<td>' . $item['ref'] . '</td>' . 
                    '<td class="description">'
                    . $item['description'] .
                    '</td>' . 
                    '<td align="right">' . numberFormatUsingCurrency($item['qty'], $d['currency_iso_code']) . '</td>' . 
                    '<td align="right">' . number_format($item['amount'],2, $config['dec_point'], $config['thousands_sep']) . $config['currency_code'] . '</td>' .
                    '<td align="right">' . $tax_amount . '</td>' . 
                    '<td align="right"><span class="price">' . number_format($item['total'],2 , $config['dec_point'], $config['thousands_sep']) . $config['currency_code'] . '</span></td>
                    <td></td>
                </tr>';
        } ?>

        <!-- Subtotal -->
        <tr>
            <td class="blank"> </td>

            <!-- Subtotal -->
            <td colspan="<?php echo $col_span; ?>" class="total-line"><?php echo $_L['Sub Total']; ?></td>

            <!-- Total value -->
            <td class="total-value" <?php if ($config['rtl'] != 1) { ?>
                style="text-align: right;"
                <?php } ?>>
                <div id="subtotal">
                    <?= number_format($d['subtotal'],2, $config['dec_point'], $config['thousands_sep']) . $config['currency_code'] ?>
                </div>
            </td>
        </tr>

        <!-- Discount -->
        <?php if ($d['discount'] != '0.00') { ?>
            <tr>
                <td class="blank"> </td>
                <td colspan="<?php echo $col_span; ?>" class="total-line" style="
                    <?php if ($config['rtl'] == 1) { ?>
                        text-align: left;
                    <?php } else { ?>
                        text-align: right;
                    <?php } ?>">
                    <?php echo $_L['Discount']; ?>
                </td>
                <td class="total-value" style="text-align: right;">
                    <div>
                        -<?= number_format($d['discount'], 2, $config['dec_point'], $config['thousands_sep']) . $config['currency_code'] ?>
                    </div>
                </td>
            </tr>
        <?php } ?>

        <!-- Tax -->
        <?php if ($d['tax'] != '0.00') { ?>
            <tr>
                <td class="blank"> </td>
                <td colspan="<?php echo $col_span; ?>" class="total-line" style="text-align: right;">
                    <?php if ($config['tax_system'] == 'India') {
                        echo 'GST';
                    } else {
                        echo $_L['TAX'];
                    } ?>
                </td>
                <td class="total-value" style="text-align: right;">
                    <div id="total">
                        <?= number_format($d['tax'], 2, $config['dec_point'], $config['thousands_sep']) . $config['currency_code'] ?>
                    </div>
                </td>
            </tr>
        <?php } ?>

        <?php if ($d['credit'] != '0.00') { ?>
            <tr>
                <td class="blank"> </td>
                <td colspan="<?php echo $col_span; ?>" class="total-line"><?php echo $_L['Invoice Total']; ?></td>
                <td class="total-value">
                    <div class="due">
                        <?= number_format($d['total'],2, $config['dec_point'], $config['thousands_sep']) . $config['currency_code'] ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="blank"> </td>
                <td colspan="<?php echo $col_span; ?>" class="total-line"><?php echo $_L['Total Paid']; ?></td>
                <td class="total-value">
                    <div class="due">
                        <?= number_format($d['credit'],2, $config['dec_point'], $config['thousands_sep']) . $config['currency_code'] ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="blank"> </td>
                <td colspan="<?php echo $col_span; ?>" class="total-line balance"><?php echo $_L['Amount Due']; ?></td>
                <td class="total-value balance">
                    <div class="due"><
                        <?= number_format($i_due,2, $config['dec_point'], $config['thousands_sep']) . $config['currency_code'] ?>
                    </div>
                </td>
            </tr>
        <?php } else { ?>
            <tr>
                <td class="blank"> </td>
                <td colspan="<?php echo $col_span; ?>" class="total-line balance" style="
                    <?php if ($config['rtl'] == 1) { ?>
                        text-align: left;
                    <?php } else { ?>
                        text-align: right;
                    <?php } ?>">
                    <?php echo $_L['Grand Total']; ?></td>
                <td class="total-value balance"
                    <?php if ($config['rtl'] != 1) { ?>
                        style="text-align: right;"
                    <?php } ?>>
                    <div class="due">
                        <?= number_format($d['total'], 2, $config['dec_point'], $config['thousands_sep']) . $config['currency_code'] ?>
                    </div>
                </td>
            </tr>
        <?php } ?>

    </table>

    <!-- Notes -->
    <?php if ($d['notes'] != '') { ?>
        <div id="terms">
            <h6 style="text-decoration: underline; margin-bottom: 0;"><?php echo $_L['Terms']; ?></h6>
            <span>
                <?php echo $d['notes']; ?>
            </span>
        </div>
    <?php } ?>

    <?php if (!empty($invoice_append_footer)) { ?>
        <br>
        <?php echo $invoice_append_footer; ?>
    <?php } ?>

</div>

</body>

</html>
