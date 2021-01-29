@extends('layout.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <div class="items-center justify-between rounded-full shadow-md bg-gray-600 text-gray-200 p-4 my-4">
                <!-- Content -->
                <div class="flex flex-col justify-center text-center">
                    <h4 class="flex justify-center items-center text-2xl">
                        <svg class="fill-current text-gray-400 w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"/></svg>
                        Welcome to the Hospital Information System
                    </h4>
                    <hr class="my-2 border-gray-400">
                    <p class="flex-grow text-sm md:text-xs xl:text-md pb-2 px-2">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, a necessitatibus aspernatur assumenda 
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection