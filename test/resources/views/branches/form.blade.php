<div class="mb-4">
    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
    <input type="text" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('name', $branch->name ?? '') }}">
</div>
<div class="mb-4">
    <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
    <input type="text" name="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('address', $branch->address ?? '') }}">
</div>
<div class="mb-4">
    <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
    <input type="text" name="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('phone', $branch->phone ?? '') }}">
</div>
