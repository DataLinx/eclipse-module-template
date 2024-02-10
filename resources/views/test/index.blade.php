@php use Eclipse\ModuleTemplate\Module; @endphp
<x-app-layout>

    <x-slot name="header">
        <h1>{{ _('Test view') }}</h1>
    </x-slot>

    <div class="container">

        <p>This is just a test view.</p>

        <p>Here's a Livewire component:</p>

        <livewire:my-counter/>

        <p class="mt-5">Also, say hello to my little friend:</p>

        <img src="{{ Module::asset('img/penguin.png') }}" alt="" class="penguin"/>

    </div>
</x-app-layout>
