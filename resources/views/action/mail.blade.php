@component('mail::message')
# @lang('action.title')}}

@lang('action.text')

<hr>
<small>Ik ben gestuurd in opdracht van {{ $input['name'] }}. Wonend te {{ $input['postal_code'] }}, {{ ucfirst($input['city']) }}</small>
@endcomponent
