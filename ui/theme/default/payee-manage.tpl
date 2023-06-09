{extends file="$layouts_admin"}

{block name="content"}
    <div class="row">
        <div class="widget-1 col-md-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{$_L['Edit Payee']}}</h3>
                </div>
                <div class="panel-body">
                    <form role="form" name="accadd" method="post" action="{$_url}settings/payee-edit-post">
                        <div class="mb-3">
                            <label for="name">{$_L['Name']}</label>

                            <input type="text" class="form-control" id="name" name="name" value="{$c['name']}">
                        </div>



                        <input type="hidden" name="id" value="{$c['id']}">
                        <button type="submit" class="btn btn-primary"><i class="fal fa-check"></i> {$_L['Submit']}</button>$f[
                    </form>
                </div>
            </div>
        </div> <!-- Widget-1 end-->
        <div class="widget-1 col-md-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{$_L['Delete']}</h3>
                </div>
                <div class="panel-body">

                    <a href="{$_url}settings/payee-delete/{$c['id']}" class="btn btn-danger">{$_L['Delete']}</a>

                </div>
            </div>
        </div>
        <!-- Widget-2 end-->
    </div>
{/block}
