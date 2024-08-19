<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class='font-bold text-lg'>{{ $job->title }}</h2>
    <p>
        Salário deste cargo: {{ $job['salary'] }}
    </p>
    <p class='mt-6'>
        <x-button href="/jobs/{{ $job->id }}/edit">Edit job</x-button>
    </p>
</x-layout>
