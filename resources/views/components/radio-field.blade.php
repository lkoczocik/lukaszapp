<div class="govuk-form-group @error($field) govuk-form-group--error @enderror">
    <fieldset class="govuk-fieldset" aria-describedby="{{ $field }}-hint" id="{{ $field }}">
        <legend class="govuk-fieldset__legend govuk-fieldset__legend--l">
            <h2 class="govuk-fieldset__heading">
                {{ $label }}
            </h2>
        </legend>
        @error($field)
        <p id="{{ $field }}-error" class="govuk-error-message">
            <span class="govuk-visually-hidden">Error:</span> {{ $message }}
        </p>
        @enderror
        <div class="govuk-radios govuk-radios--inline" data-module="govuk-radios">
            @foreach($options as $option)
                <div class="govuk-radios__item">
                    <input class="govuk-radios__input" id="{{ $field }}-{{ $option['value'] }}" name="{{ $field }}" type="radio" value="{{ $option['value'] }}" @if(old($field, session($field)) == $option['value']) checked @endif>
                    <label class="govuk-label govuk-radios__label" for="{{ $field }}-{{ $option['value'] }}">
                        {{ $option['label'] }}
                    </label>
                </div>
            @endforeach
        </div>
    </fieldset>
</div>
