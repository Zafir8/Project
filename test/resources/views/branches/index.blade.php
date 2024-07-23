
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Branch Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">{{ __('Manage Branches') }}</h3>
                    <a href="{{ route('branches.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Branch</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white shadow-md rounded-lg">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-gray-600 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-gray-600 uppercase tracking-wider">Address</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-gray-600 uppercase tracking-wider">Phone</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-gray-600 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($branches as $branch)
                                <tr>
                                    <td class="px-6 py-4 border-b border-gray-300 text-sm leading-5 text-gray-900">{{ $branch->name }}</td>
                                    <td class="px-6 py-4 border-b border-gray-300 text-sm leading-5 text-gray-900">{{ $branch->address }}</td>
                                    <td class="px-6 py-4 border-b border-gray-300 text-sm leading-5 text-gray-900">{{ $branch->phone }}</td>
                                    <td class="px-6 py-4 border-b border-gray-300 text-sm leading-5 text-gray-900">
                                        <a href="{{ route('branches.edit', $branch) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">Edit</a>
                                        <form action="{{ route('branches.destroy', $branch) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Delete</button>
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
</x-app-layout>
