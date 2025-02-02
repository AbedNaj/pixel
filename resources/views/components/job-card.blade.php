@props(['job'])
<div class="p-4 bg-white/5 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-800 group transition-colors duration-300">
    <div class="self-start text-sm">{{$job->employer->name}}</div>

    <div class="py-8 ">
        <h3 class="group-hover:text-blue-800 font-bold text-xl transition-colors duration-300">{{$job->title}}</h3>
        <p class="text-sm mt-4">Full Time - From {{$job->salary}}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
            <x-tag :tag="$tag" size="small"></x-tag>
            @endforeach


        </div>

        <x-employer-logo :employer="$job->employer"></x-employer-logo>


    </div>
</div>