<div>
    <div style="display: flex;">
        <div>
            <button data-type="min" data-field="{{$name}}" style="padding-left: 9px; padding-right: 9px;
             border-radius: 47%; border: solid 1px;" class="btn-picker" type="button">- </button>
        </div>
        <div style="margin-left: 25px; margin-right: 25px;">
            <label id="number_picker_{{$name}}">
                @if (old($name))
                    {{ old($name) }}
                @else
                    {{ $default }}
                @endif</label>
        </div>
        <div>
            <button data-type="max" data-field="{{$name}}" style="padding-left: 9px; padding-right: 9px;
             border-radius: 47%; border: solid 1px;" class="btn-picker" type="button"> +</button>
        </div>
    </div>
    <input min="{{$min}}" max="{{$max}}" type="hidden" name="{{$name}}" value="@if(old($name) !== null) {{ old($name) }} @else {{ $default }} @endif">
</div>