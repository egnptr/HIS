@extends('layout.app')

@section('content')
<div>
    <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Room Name</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Beds</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Status</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Cost</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($rooms as $room)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $room->room_name }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $room->bed_used }}/{{ $room->total_bed }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if ($room->status === "Available")
                                            <div class="w-3/4 px-2 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white text-center">
                                                {{ $room->status }}
                                            </div>
                                            @else
                                            <div class="w-3/4 px-2 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white text-center">
                                                {{ $room->status }}
                                            </div>
                                            @endif
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            <b>Rp </b> 
                                            {{ number_format($room->cost) }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                            <form class="inline-block" action="{{ route('room.update', $room) }}" method="POST">
                                                @csrf
                                                <input id="bed_used" type="number" name="bed_used" hidden value="{{ $room->bed_used+1 }}"/>
                                                @if ($room->bed_used+1 === $room->total_bed)
                                                <input id="status" type="text" name="status" hidden value="Not Available"/>
                                                @else
                                                <input id="status" type="text" name="status" hidden value="Available"/>
                                                @endif
                                                <button type="submit" class="p-3 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white text-center hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">+</button>
                                            </form>
                                            <form class="inline-block" action="{{ route('room.update', $room) }}" method="POST">
                                                @csrf
                                                <input id="bed_used" type="number" name="bed_used" hidden value="{{ $room->bed_used-1 }}"/>
                                                @if ($room->bed_used-1 === $room->total_bed)
                                                <input id="status" type="text" name="status" hidden value="Not Available"/>
                                                @else
                                                <input id="status" type="text" name="status" hidden value="Available"/>
                                                @endif
                                                <button type="submit" class="p-3 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white text-center hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">-</button>
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