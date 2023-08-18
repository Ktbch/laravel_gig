@props(['listing'])

<x-bgcard>
    <div class="content">
        <div class="title">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">{{$listing->title}}</h5>
        </div>
        <div class="mb-5 font-semibold">
            <p>{{$listing->company}}</p>
        </div>
        <div class="mb-3 font-normal text-gray-900">
            <p>{{$listing->description}}</p>
        </div>
        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 font-normal">
            <div class="flex flex-col pb-3">    
                <dt class="mb-1 text-gray-800 md:text-lg">Email address</dt>
                <dd class="text-lg font-semibold">{{$listing->email}}</dd>
            </div>
            <div class="flex flex-col pb-3">
                <dt class="mb-1 text-gray-800 md:text-lg">Location</dt>
                <dd class="text-lg font-semibold">{{$listing->location}}</dd>
            </div>
        </dl>    
        <x-listing-tags :tagCsv="$listing['tags']" />
    </div>

</x-bgcard>