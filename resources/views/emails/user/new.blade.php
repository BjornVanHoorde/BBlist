@component('mail::message')
# {{ $order->name }} {{__('has contributed to this list:')}} {{ $list->name }}.

{{ $order->name }} {{__('has bought the following things:')}}

@foreach ($products as $product)
    ~  {{ $product->name }}         € {{ $product->price }}
@endforeach

{{__('Total:')}} {{ $order->total }}


{{__('Message:')}} {{ $order->message }}

{{__('Thanks,')}}<br>
{{ config('app.name') }}
@endcomponent
