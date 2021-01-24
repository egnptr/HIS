@extends('layout.app')

@section('content')
<div>
    <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="block mb-8">
            <a href="{{ route('doctor.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Doctor</a>
        </div>
        
        <!---Table--->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="border-collapse w-full">
                            <thead>
                                <tr>
                                    <th
                                        class="p-3 font-bold bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                        Name</th>
                                    <th
                                        class="p-3 font-bold bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                        Sex</th>
                                    <th
                                        class="p-3 font-bold bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                        Date of Birth</th>
                                    <th
                                        class="p-3 font-bold bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                        Position</th>
                                    <th
                                        class="p-3 font-bold bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                        Email</th>
                                    <th
                                        class="p-3 font-bold bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                        Phone</th>
                                    <th
                                        class="p-3 font-bold bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($doctors as $doctor)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-900">
                                            {{ $doctor->name }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-900">
                                            {{ $doctor->sex }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-900">
                                            {{ $doctor->dob }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-900">
                                            {{ $doctor->position }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-900">
                                            {{ $doctor->email }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-900">
                                            {{ $doctor->phone }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                            <a href="{{ route('doctor.show', $doctor) }}" class="text-green-600 hover:text-green-900 mb-2 mr-2">View</a>
                                            <a href="{{ route('doctor.edit', $doctor) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">Edit</a>
                                            <form class="inline-block" action="{{ route('doctor.destroy', $doctor) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
