<x-layout>
    <x-page-heading>New Job</x-page-heading>
    <x-form method="POST" action="/jobs">

        <x-input label="Title" name="title" placeholder="CEO"></x-input>
        <x-input label="Salary" name="salary" placeholder="$90,000"></x-input>
        <x-input label="Location" name="location" placeholder="winter Park , Florida"></x-input>
        <x-input label="URL" name="url" placeholder=""></x-input>
        <x-input label="Tags (Comma Seperated)" name="tags" placeholder=""></x-input>

        <x-select label="Schedule" name="schedule">

            <option>Part Time</option>
            <option>Full Time</option>
        </x-select>


        <x-divider></x-divider>
        <x-ckeckbox label="Feature (Costs Extra)" name="featured"></x-ckeckbox>
        <x-button>Create Job</x-button>
    </x-form>
</x-layout>