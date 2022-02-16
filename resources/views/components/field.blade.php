<div class="govuk-form-group @error($field) govuk-form-group--error @enderror"">
    <fieldset class="govuk-fieldset" role="group" aria-describedby="{{ $field }}-error">

        <label class="govuk-label" for="{{ $field }}">
            {{ $label }}
        </label>

        @if($hint)
            <div id="{{ $field }}-hint" class="govuk-hint">{{ $hint }}</div>
        @endisset

        @error($field)
        <p id="{{ $field }}-error" class="govuk-error-message">
            <span class="govuk-visually-hidden">Error:</span> {{ $message }}
        </p>
        @enderror

        <input class="govuk-input govuk-!-width-two-thirds" id="{{ $field }}" name="{{ $field }}" type="{{ $type }}" value="{{ old($field, session($field)) }}">
    </fieldset>
</div>
