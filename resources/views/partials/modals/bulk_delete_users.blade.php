<div style="background-color: rgba(0, 0, 0, .5)" x-show.transition="showBulkDeleteModal"
    class="mx-auto absolute top-0 left-0 w-full h-screen flex items-center shadow-lg overflow-y-auto">

    <div class="container mx-auto rounded p-4 mt-2 overflow-y-auto relative">
        <div class="bg-white rounded px-8 py-8" x-on:click.away="showBulkDeleteModal = false">
            <svg class="h-8 absolute top-0 right-0 m-6 fill-current cursor-pointer text-blue-300 hover:text-blue-500"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" x-on:click="showBulkDeleteModal = false">
                <path
                    d="M43.707 19.293a1 1 0 00-1.414 0L32 29.586 21.707 19.293a1 1 0 10-1.414 1.414L30.586 31 20.293 41.293a1 1 0 101.414 1.414L32 32.414l10.293 10.293a.997.997 0 001.414 0 1 1 0 000-1.414L33.414 31l10.293-10.293a1 1 0 000-1.414z" />
                <path
                    d="M32 0C14.327 0 0 14.327 0 32c0 17.673 14.327 32 32 32s32-14.327 32-32C64 14.327 49.673 0 32 0zm0 62C15.458 62 2 48.542 2 32S15.458 2 32 2s30 13.458 30 30-13.458 30-30 30z" />
            </svg>
            <h1 class="font-bold text-2xl mb-3">@lang('Bulk User Delete')</h1>
            <div class="modal-body">

                <div wire:loading>
                    Processing...
                </div>
                <div wire:loading.remove>
                    <form wire:submit.prevent="delete">
                        <div class="w-full bg-gray-100 p-4">
                            <p class="my-2 p-4 alert alert-warning leading-snug">
                                Warning! You are about to delete the following listed users. Proceed only if you are certain<br>
                                Otherwise, Click the cancel button below to review your selection. 
                            </p>
                            <ol class="list-decimal list-inside">
                                @foreach ($selectedUsers as $user)
                                <li class="leading-normal">{{ $user->name }}</li>
                                @endforeach
                            </ol>
                            <button class="mt-6 button button-primary">Delete selected users</button>
                            <button class="mt-6 button" x-on:click.prevent="showBulkDeleteModal = false">Cancel</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
