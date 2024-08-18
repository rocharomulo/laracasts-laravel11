<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class='font-bold text-lg'>{{ $job['title'] }}</h2>
    <p>
        Este cargo paga {{ $job['salary'] }} mensalmente.
    </p>
</x-layout>
