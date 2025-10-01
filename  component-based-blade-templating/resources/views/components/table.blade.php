@props(['columns' => [], 'data' => []])

<div class="m-2 overflow-x-auto">
    <table class="min-w-full border border-gray-300 rounded">
        <thead>
            <tr class="bg-gray-100">
                @foreach($columns as $col)
                <th class="px-4 py-2 border-b text-left">{{ $col }}</th>
                @endforeach
                <th class="px-4 py-2 border-b text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $row)
            <tr class="hover:bg-gray-50">
                @foreach($row as $value)
                <td class="px-4 py-2 border-b">
                    {{ $value ?? '' }}
                </td>
                @endforeach
                <td class="text-center px-4 py-2 border-b">
                    <x-buttonx color="red" title="Delete"/>
                    <x-buttonx title="Edit" />
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="{{ count($columns)+1 }}" class="px-4 py-2 text-center text-gray-500">
                    No data available
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
