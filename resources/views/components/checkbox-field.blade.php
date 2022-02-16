<div class="govuk-form-group @error($field) govuk-form-group--error @enderror">
    <fieldset class="govuk-fieldset" aria-describedby="{{ $field }}-hint" id="{{ $field }}">
        <legend class="govuk-fieldset__legend govuk-fieldset__legend--l">
            <h2 class="govuk-fieldset__heading">
                {{ $label }}
            </h2>
        </legend>
        <div id="{{ $field }}-hint" class="govuk-hint">
            {{ $hint }}
        </div>
        <div class="govuk-checkboxes" data-module="govuk-checkboxes">
            @foreach($options as $option)
            <div class="govuk-checkboxes__item">
                <input class="govuk-checkboxes__input" id="{{ $field }}-{{ $option['value'] }}" name="{{ $field }}" type="checkbox" value="{{ $option['value'] }}" @if(old($field, session($field)) == $option['value']) checked @endif>
                <label class="govuk-label govuk-checkboxes__label" for="{{ $field }}-{{ $option['value'] }}">
                    {{ $option['label'] }}
                </label>
            </div>
            @endforeach
        </div>

    </fieldset>
</div>
