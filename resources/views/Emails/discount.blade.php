@component('mail::message')
# Your Discount Information

@foreach($discounts as $discount)
- {{ $discount['name'] }}: {{ $discount['Percent'] }}% discount
@endforeach

Thank you for recycling with us!

@endcomponent
