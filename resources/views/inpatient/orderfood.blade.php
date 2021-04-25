@extends('layout.app')

@section('content')
<div class="flex flex-col h-screen">
    <div class="grid place-items-center mx-2 my-20 sm:my-auto">
        <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12
        px-6 py-10 sm:px-10 sm:py-6
        bg-white rounded-lg shadow-md lg:shadow-lg">
            <h2 class="text-center font-semibold text-2xl lg:text-2xl text-gray-800">
                Order Food for {{ $patients->name }}
            </h2>

            <form method="POST" action="{{ route('inpatient.orderfood', $patients) }}">
                @csrf
                <div class="bg-white sm:p-6">
                    <label for="food1Quantity" class="block text-xs font-semibold text-gray-600 uppercase">Chicken Porridge</label>
                    <input id="food1Quantity" type="number" name="food1Quantity" placeholder="Enter amount..."
                        class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        />
                    @error('food1Quantity')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="bg-white sm:p-6">
                    <label for="food2Quantity" class="block text-xs font-semibold text-gray-600 uppercase">Chicken Soup</label>
                    <input id="food2Quantity" type="number" name="food2Quantity" placeholder="Enter amount..."
                        class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        />
                    @error('food2Quantity')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="bg-white sm:p-6">
                    <label for="food3Quantity" class="block text-xs font-semibold text-gray-600 uppercase">Fish Soup</label>
                    <input id="food3Quantity" type="number" name="food3Quantity" placeholder="Enter amount..."
                        class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        />
                    @error('food3Quantity')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="bg-white sm:p-6">
                    <label for="food4Quantity" class="block text-xs font-semibold text-gray-600 uppercase">Fish Porridge</label>
                    <input id="food4Quantity" type="number" name="food4Quantity" placeholder="Enter amount..."
                        class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        />
                    @error('food4Quantity')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="flex items-center justify-end px-4 py-3 space-x-4 sm:px-6">
                    <a href="{{ route('inpatient.list') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        Back to list
                    </a>
                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection