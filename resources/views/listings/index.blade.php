@extends('layout')



@section('content')
@include('partials._search')
    
<div class="grid grid-rows-2 pt-10 pl-5 gap-4 lg:grid-cols-2 ">

    @unless ($listings === 0)
    @foreach($listings as $listing)
    
    <x-listing-crads :listing="$listing" />

    @endforeach
    @endunless
</div>
@endsection
