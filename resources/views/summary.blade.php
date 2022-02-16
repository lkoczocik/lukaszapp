@extends('layouts.app', ['title' => 'Summary'])

@section('content')
    <h1 class="govuk-heading-l">Summary</h1>

    <dl class="govuk-summary-list">
        <x-summary-row field="first-name" label="First name"></x-summary-row>
        <x-summary-row field="last-name" label="Last name"></x-summary-row>
        <x-summary-row field="email" label="E-Mail address"></x-summary-row>
        <x-summary-row field="telephone" label="Telephone"></x-summary-row>
        <x-summary-row field="contact-method" label="Preferred contact method"></x-summary-row>
    </dl>
@endsection
