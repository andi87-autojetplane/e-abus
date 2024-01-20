@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<div href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
    <img class="w-8 h-8 mr-2" src="{{ asset('logo/logo.png') }}" alt="logo">
    e-abus
</div>
{{-- <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo"> --}}
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
