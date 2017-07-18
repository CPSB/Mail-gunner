@component('mail::message')
# @lang('action.title')}}

@lang('action.text')

<hr>
Ik ben gestuurd in opdracht van {{ $input['name'] }}. Wonend te {{ $input['postal_code'] }}, {{ $input['city'] }}
@endcomponent
