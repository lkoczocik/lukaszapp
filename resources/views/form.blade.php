@extends('layouts.app', ['title' => 'Summary'])

@section('content')

    @if (count($errors) > 0)

        <x-error-summary></x-error-summary>

    @endif

    <h1 class="govuk-heading-l">Contact Form</h1>

    <form action="{{ url('/summary') }}" method="POST" novalidate>
        {{ csrf_field() }}
        <x-field field="first-name" label="First Name" type="text"></x-field>
        <x-field field="last-name" label="Last Name" type="text"></x-field>
        <x-field field="email" label="Email Address" type="email"></x-field>
        <x-field field="telephone" label="Telephone Number" type="tel" hint="Enter a telephone number, like 01632960001 or 07700900982"></x-field>
        <x-checkbox-field field="contact-method" label="How should we contact you?" hint="Select all options that are relevant to you." :options="$contactMethod"></x-checkbox-field>
`
        <x-submit-button></x-submit-button>

    </form>
@endsection
