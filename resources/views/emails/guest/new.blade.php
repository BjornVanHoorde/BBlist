@component('mail::message')
# {{__('You have contributed to this list:')}} {{ $list->name }}.

{{__('You have bought the following things:')}}

@component('mail::panel')

@foreach ($products as $product)
    ~  {{ $product->name }}:         € {{ $product->price }}
@endforeach

{{__('Total:')}} {{ $order->total }}

@endcomponent

{{__('Message:')}} {{ $order->message }}

{{__('Thanks,')}}<br>
{{ config('app.name') }}
@endcomponent
