@extends('schedule.schedule')

@section('table')
<div class="container mx-auto px-4 py-2">
    <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th
                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                    Name</th>
                <th
                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                    Type</th>
                <th
                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                    Date In</th>
                <th
                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                    Status</th>
                <th
                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                    Action</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($cases as $case)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $case->id_patient }}
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $case->type }}
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $case->date_in }}
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $case->status }}
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="{{ route('patient.show', $case->id_patient) }}" class="text-green-600 hover:text-green-900 mb-2 mr-2">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
