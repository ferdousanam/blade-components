<div class="btn-group">
    <button type="button" class="btn btn-default btn-xs {{ $btnClass }} dropdown-toggle" data-toggle="dropdown">{!! trans('blade-components::sp_blade_components.action') !!} <span class="caret"></span></button>
    <div class="dropdown-menu dropdown-menu-right">
        {{ $slot }}
    </div>
</div>
