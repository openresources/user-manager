<div style="background-color: rgba(0, 0, 0, .5)" x-show="showUserImportModal"
    class="mx-auto absolute top-0 left-0 w-full h-screen flex items-center shadow-lg overflow-y-auto">


    <div class="container mx-auto rounded p-4 mt-2 overflow-y-auto relative">
        <div class="bg-white rounded px-8 py-8" @click.away="showUserImportModal = false">
            <svg class="h-8 absolute top-0 right-0 m-6 fill-current cursor-pointer text-blue-300 hover:text-blue-500"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" @click="showUserImportModal = false">
                <path
                    d="M43.707 19.293a1 1 0 00-1.414 0L32 29.586 21.707 19.293a1 1 0 10-1.414 1.414L30.586 31 20.293 41.293a1 1 0 101.414 1.414L32 32.414l10.293 10.293a.997.997 0 001.414 0 1 1 0 000-1.414L33.414 31l10.293-10.293a1 1 0 000-1.414z" />
                <path
                    d="M32 0C14.327 0 0 14.327 0 32c0 17.673 14.327 32 32 32s32-14.327 32-32C64 14.327 49.673 0 32 0zm0 62C15.458 62 2 48.542 2 32S15.458 2 32 2s30 13.458 30 30-13.458 30-30 30z" />
            </svg>
            <h1 class="font-bold text-2xl mb-3">@lang('Bulk User Import')</h1>
            <div class="modal-body">
                <div wire:loading>
                    Processing...
                </div>
                <div wire:loading.remove>
                    <form action="{{ route('user-manager.bulk.imports.index') }}" enctype="multipart/form-data"
                        method="post">
                        @csrf
                        <div class="flex flex-col w-full items-center justify-center bg-gray-100 py-16">
                            <p class="text-lg leading-loose text-center">Create multiple user accounts by uploading an
                                excel file. <br> Download a <a class="underline"
                                    href="{{ route('user-manager.bulk.samples.index') }}">sample excel
                                    document</a> for upload</p>
                            <label
                                class="flex flex-col items-center px-4 mt-6 py-6 bg-blue-500 text-blue-700 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue-700 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"
                                    class="h-10 w-10 fill-current">
                                    <path
                                        d="M37 22H12a1 1 0 000 2h25a1 1 0 000-2zM12 16h10a1 1 0 000-2H12a1 1 0 000 2zM38 31a1 1 0 00-1-1H12a1 1 0 000 2h25a1 1 0 001-1zM30 39a1 1 0 00-1-1H12a1 1 0 000 2h17a1 1 0 001-1zM12 46a1 1 0 000 2h14a1 1 0 000-2H12z" />
                                    <path
                                        d="M3 2h29v14h14v17h2V14.586L33.414 0H1v60h31v-2H3V2zm31 1.414L44.586 14H34V3.414z" />
                                    <path
                                        d="M35 36v24h24V36H35zm22 22h-9V45.414l4.293 4.293 1.414-1.414L47 41.586l-6.707 6.707 1.414 1.414L46 45.414V58h-9V38h20v20z" />
                                </svg>
                                <span class="mt-2 text-base text-blue-200 leading-normal">Select a file</span>
                                <input type='file' name="user_list"
                                    class="appearance-none mt-2 italic lowercase text-sm text-gray-200 hover:text-white leading-normal" />
                            </label>

                            <button class="mt-6 button button-primary" type="submit">Import users</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
