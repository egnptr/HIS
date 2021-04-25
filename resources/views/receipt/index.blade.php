@extends('layout.app')

@section('content')
<div>
    <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
        <!--<div class="block mb-8">-->
        <!--    <a href="{{ route('receipt.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Receipt</a>-->
        <!--</div>-->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Type</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Patient Name</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Doctor Name</th>
                                    <!--<th-->
                                    <!--    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">-->
                                    <!--    Date In</th>-->
                                    <!--<th-->
                                    <!--    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">-->
                                    <!--    Date Out</th>-->
                                    <!--<th-->
                                    <!--    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">-->
                                    <!--    Room Type</th>-->
                                    <th
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Total Cost</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($receipts as $receipt)
                                    <tr>
                                        <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $receipt->type }}
                                        </td>
                                        <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $receipt->patient_name }}
                                        </td>

                                        <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $receipt->doctor_name }}
                                        </td>

                                        <!--<td class="px-5 py-4 whitespace-nowrap text-sm text-gray-900">-->
                                        <!--    {{ $receipt->date_in }}-->
                                        <!--</td>-->

                                        <!--<td class="px-5 py-4 whitespace-nowrap text-sm text-gray-900">-->
                                        <!--    {{ $receipt->date_out }}-->
                                        <!--</td>-->

                                        <!--<td class="px-5 py-4 whitespace-nowrap text-sm text-gray-900">-->
                                        <!--    {{ $receipt->room_type }}-->
                                        <!--</td>-->

                                        <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-900">
                                            <b>Rp </b> 
                                            {{ number_format($receipt->total_cost) }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('receipt.show', $receipt) }}" class="text-green-600 hover:text-green-900 mb-2 mr-2">View</a>
                                            <!--<a href="{{ route('receipt.edit', $receipt) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">Edit</a>-->
                                            <!--<form class="inline-block" action="{{ route('receipt.destroy', $receipt) }}" method="POST">-->
                                            <!--    @csrf-->
                                            <!--    @method('DELETE')-->
                                            <!--    <button type="submit" class="text-red-500">Delete</button>-->
                                            <!--</form>-->
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $receipts->links() }}
                </div>
            </div>
        </div>

    </div>
</div>
@endsection