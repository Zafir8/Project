<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

                <div class="flex justify-end mb-4">
                    <a href="{{ route('branches.index') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Manage Branches</a>
                </div>


                <div class="mt-8">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
                        {{ __('Branch Summary') }}
                    </h2>
                    <div class="mb-4">
                        <p>Total Branches: <span class="font-bold">{{ $totalBranches }}</span></p>
                    </div>
                </div>


                @if ($recentBranch)
                <div class="mt-8">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
                        {{ __('Most Recent Branch') }}
                    </h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white shadow-md rounded-lg">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-gray-600 uppercase tracking-wider">Name</th>
                                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-gray-600 uppercase tracking-wider">Address</th>
                                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-gray-600 uppercase tracking-wider">Phone</th>
                                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-gray-600 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="px-6 py-4 border-b border-gray-300 text-sm leading-5 text-gray-900">{{ $recentBranch->name }}</td>
                                    <td class="px-6 py-4 border-b border-gray-300 text-sm leading-5 text-gray-900">{{ $recentBranch->address }}</td>
                                    <td class="px-6 py-4 border-b border-gray-300 text-sm leading-5 text-gray-900">{{ $recentBranch->phone }}</td>
                                    <td class="px-6 py-4 border-b border-gray-300 text-sm leading-5 text-gray-900">
                                        <a href="{{ route('branches.edit', $recentBranch) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">Edit</a>
                                        <form action="{{ route('branches.destroy', $recentBranch) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
