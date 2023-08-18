@extends('layout')

@section('content')
<div class= "container flex flex-col space-y-8 justify-center mt-20 mx-auto p-20 ">
    <form action="/listing/store" method='POST' class="">
        @csrf
        <div class="flex flex-col bg-white border p-10 border-gray-200 mx-auto md:w-full md:max-w-sm">
            <div class="mx-auto p-3"><h5 class="text-4xl">Create A Job</h5></div>
            <div class="flex flex-col">
                <label for="title" class="block mb-3 font-semibold font-medium">Title:</label>
                @error('title')
                <p class="text-red-500">{{$message}}</p> 
                @enderror
                <input type="text" name="title" class="mb-4 -none rounded-md text-gray-900 py-1.5 placeholder:text-gray-200 w-full" placeholder="title"/>
            </div> 
            <div class="flex flex-col">
                <label for="comapanyname" class="block mb-3 font-semibold font-medium">ComapnyName:</label>
                @error('company')
                    <p class="text-red-500">{{$message}}</p> 
                @enderror
                <input type="text" name="Comapany" class="mb-4 outline-none rounded-md text-gray-900 py-1.5 placeholder:text-gray-200 w-full" placeholder="Comapny"/>
            </div>   
            <div class="flex flex-col">
                <label for="Email" class="block mb-3 font-semibold font-medium">Email:</label>
                @error('email')
                    <p class="text-red-500">{{$message}}</p> 
                @enderror
                <input type="text" name="email" class="mb-4 outline-none rounded-md text-gray-900 py-1.5 placeholder:text-gray-200 w-full" placeholder="email" />
            </div>
            <div class="flex flex-col">
                <label for="location" class="block mb-3 font-semibold font-medium">Location:</label>
                @error('location')
                <p class="text-red-500">{{$message}}</p> 
                @enderror
                <input type="text" name="location" class="mb-4 outline-none rounded-md text-gray-900 py-1.5 placeholder:text-gray-200 w-full" placeholder="Location" />
            </div>  
            <div class="flex flex-col">
                <label for="website" class="block mb-3 font-semibold font-medium">website URL:</label>
                <input type="text" name="website" class="mb-4 outline-none rounded-md text-gray-900 py-1.5 placeholder:text-gray-200 w-full" placeholder="website url" />
            </div>  
            <div class="flex flex-col">
                <label for="description" class="block mb-3 font-semibold font-medium">Description:</label>
                @error('description')
                <p class="text-red-500">{{$message}}</p> 
                @enderror
                <textArea type="text" name="description" class="mb-4 h-40 outline-none rounded-md text-gray-900 py-1.5 placeholder:text-gray-200 w-full" placeholder="Description"></textArea>
            </div>    
            <div class="flex flex-col">
                <label for="Tags" class="block mb-3 font-semibold font-medium">Tags:</label>
                @error('tags')
                <p class="text-red-500">{{$message}}</p> 
                @enderror
                <input type="text" name="tags" class="mb-4 outline-none rounded-md text-gray-900 py-1.5 placeholder:text-gray-200 w-full" placeholder="javascript html python" />
            </div>
            <div class="mt-10">
                <button type="submit" class="bg-gray-800 p-3 text-white hover:bg-gray-200 w-full mx-auto">Create</button>
            </div>
              
        </div>
        
    </form>
</div> 
@endsection