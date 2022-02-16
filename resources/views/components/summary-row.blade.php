<div class="govuk-summary-list__row">
    <dt class="govuk-summary-list__key">
        {{ $label }}
    </dt>
    <dd class="govuk-summary-list__value">
        @foreach(Session::get($field) as $test)
            {{$test}}
        @endforeach
    </dd>
    <dd class="govuk-summary-list__actions">
        <a class="govuk-link" href="/form#{{ $field }}">
            Change<span class="govuk-visually-hidden"> name</span>
        </a>
    </dd>
</div>
