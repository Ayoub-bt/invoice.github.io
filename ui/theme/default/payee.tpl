{extends file="$layouts_admin"}

{block name="content"}
    <div class="row">
        <div class="widget-1 col-md-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{$_L['Add Payee']}</h3>
                </div>
                <div class="panel-body">
                    <form role="form" name="accadd" method="post" action="{$_url}settings/payee-post">
                        <div class="mb-3">
                            <label for="name">{$_L['Name']}</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>




                        <button type="submit" class="btn btn-primary"><i class="fal fa-check"></i> {$_L['Submit']}</button>$f[
                    </form>
                </div>
            </div>
        </div> <!-- Widget-1 end-->
        <div class="widget-1 col-md-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{$_L['Manage Payees']}</h3>
                </div>
                <div class="panel-body">
                    <span id="resp">{$_L['drag_n_drop_help']}</span>
                    <ol class="rounded-list" id="sorder">


                        {foreach $d as $ds}
                            <li id='recordsArray_{$ds['id']}'><a href="{$_url}settings/payee-manage/{$ds['id']}">{$ds['name']}</a></li>
                        {/foreach}

                    </ol>

                </div>
            </div>
        </div>
        <!-- Widget-2 end-->
    </div>
{/block}
