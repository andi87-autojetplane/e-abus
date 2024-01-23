<x-app-layout>
    <x-slot name="header">
        {{ __('Roles') }}
    </x-slot>
    <div class="bg-white rounded-lg shadow dark:bg-gray-900 m-4 mb-0">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="p-4 sm:ml-64">
            <div class="flex justify-between mb-4">
                {{-- <Link modal href="/users/create">Create new user</Link>

                <x-splade-modal>
                    <h1>Create new user</h1>

                    <x-splade-form>
                        <input v-model="form.name" placeholder="Name" />
                        <button type="submit">Create</button>
                    </x-splade-form>
                </x-splade-modal> --}}

                <h1 class="text-2xl font-semibold p-4"></h1>
                <div>
                    <Link modal href="{{ route('admin.roles.create') }}"
                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded text-white">
                        New Role
                    </Link>
                </div>
            </div>
            <x-splade-table :for="$roles">
                @cell('action', $role)
                    <div class="space-x-2">
                        <Link href="{{ route('admin.roles.edit', $role) }}"
                            class="text-green-400 hover:text-green-700 font-semibold">
                        Edit
                        </Link>
                        <Link href="{{ route('admin.roles.destroy', $role) }}" method="DELETE" confirm="Delete the role"
                            confirm-text="Are you sure?" confirm-button="Yes" cancel-button="No"
                            class="text-red-400 hover:text-red-700 font-semibold">
                        Delete
                        </Link>
                    </div>
                @endcell
            </x-splade-table>
            </div>
        </div>
    </div>





</x-app-layout>
