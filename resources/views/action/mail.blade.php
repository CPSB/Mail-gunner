@component('mail::message')
# {{ config('app.name') }}

@lang('action.text')

---
Ik ben gestuurd in opdracht van {{ $input['name'] }}. Wonend te {{ $input['postal_code'] }}, {{ $input['city'] }}
@endcomponent
