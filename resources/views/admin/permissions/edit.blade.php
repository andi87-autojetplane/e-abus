{{-- <x-splade-modal>
    <h1 class="text-2xl font-semibold p-4">Edit Role</h1>
    <x-splade-form :default="$role" :action="route('admin.roles.update', $role)" method="PUT" class="p-4 bg-white rounded-md space-y-2">
        <x-splade-input name="name" label="Name" />
        <x-splade-select name="permissions[]" :options="$permissions" multiple relation choices />
        <x-splade-submit />
    </x-splade-form>
</x-splade-modal> --}}
<x-splade-modal close-explicitly>
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Edit Permission
                </h3>

            </div>
            {{-- <h1 class="text-2xl font-semibold p-4">New Role</h1> --}}
            <x-splade-form :default="$permission" :action="route('admin.permissions.update', $permission)" method="PUT" class="p-4 bg-white rounded-md space-y-2">
                    <x-splade-input name="name" label="Name" />
                    <x-splade-select name="roles[]" :options="$roles" multiple relation choices />
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <x-splade-submit />
                        <button type="button" @click="modal.close"
                            class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                    </div>
            </x-splade-form>
        </div>
    </div>
</x-splade-modal>

