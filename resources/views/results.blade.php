<x-layout>

    <x-page-heading>Search</x-page-heading>


    <section>
        <div class="space-y-6">
            @foreach ($jobs as $job )
            <x-job-card-wide :job="$job"></x-job-card-wide>
            @endforeach


        </div>
    </section>
</x-layout>