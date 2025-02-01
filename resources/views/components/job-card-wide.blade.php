@props(['job'])
<div class="p-4 bg-white/5 rounded-xl flex gap-6 border border-transparent hover:border-blue-800 group transition-colors duration-300">

    <div>
        <x-employer-logo :employer="$job->employer" width="90"></x-employer-logo>
    </div>

    <div class="flex-1 flex flex-col">

        <div class="self-start text-sm text-gray-400">{{$job->employer->name}}</div>

        <h3 class=" font-bold  mt-2 text-xl group-hover:text-blue-800 transition-colors duration-300">{{$job->title}}</h3>
        <p class="text-sm text-gray-400 mt-auto">Full Time - From {{$job->salary}}</p>

    </div>

    <div>
        @foreach ($job->tags as $tag)
        <x-tag :tag="$tag"></x-tag>
        @endforeach
    </div>



</div>