<div style="background-color: rgba(0, 0, 0, .5)" x-show="showUserImportModal"
    class="mx-auto absolute top-0 left-0 w-full h-screen flex items-center shadow-lg overflow-y-auto">


    <div class="container mx-auto rounded p-4 mt-2 overflow-y-auto relative">
        <div class="bg-white rounded px-8 py-8" @click.away="{{$modalVariable}} = false">
            <svg class="h-8 absolute top-0 right-0 m-6 fill-current cursor-pointer text-blue-600 hover:text-blue-500" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 64 64"
                @click="showUserImportModal = false">
                <path
                    d="M43.707 19.293a1 1 0 00-1.414 0L32 29.586 21.707 19.293a1 1 0 10-1.414 1.414L30.586 31 20.293 41.293a1 1 0 101.414 1.414L32 32.414l10.293 10.293a.997.997 0 001.414 0 1 1 0 000-1.414L33.414 31l10.293-10.293a1 1 0 000-1.414z" />
                <path
                    d="M32 0C14.327 0 0 14.327 0 32c0 17.673 14.327 32 32 32s32-14.327 32-32C64 14.327 49.673 0 32 0zm0 62C15.458 62 2 48.542 2 32S15.458 2 32 2s30 13.458 30 30-13.458 30-30 30z" />
            </svg>
            <h1 class="font-bold text-2xl mb-3">Modal Title</h1>
            <div class="modal-body">
                <h1 class="text-xxl">{{ $data }}</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro amet repellat recusandae.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sit tempore, ratione modi
                    exercitationem enim neque deserunt rem rerum officia dolores! Aliquam harum ab suscipit porro quo
                    fuga molestiae eum?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sit tempore, ratione modi
                    exercitationem enim neque deserunt rem rerum officia dolores! Aliquam harum ab suscipit porro quo
                    fuga molestiae eum?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sit tempore, ratione modi
                    exercitationem enim neque deserunt rem rerum officia dolores! Aliquam harum ab suscipit porro quo
                    fuga molestiae eum?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sit tempore, ratione modi
                    exercitationem enim neque deserunt rem rerum officia dolores! Aliquam harum ab suscipit porro quo
                    fuga molestiae eum?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sit tempore, ratione modi
                    exercitationem enim neque deserunt rem rerum officia dolores! Aliquam harum ab suscipit porro quo
                    fuga molestiae eum?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sit tempore, ratione modi
                    exercitationem enim neque deserunt rem rerum officia dolores! Aliquam harum ab suscipit porro quo
                    fuga molestiae eum?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sit tempore, ratione modi
                    exercitationem enim neque deserunt rem rerum officia dolores! Aliquam harum ab suscipit porro quo
                    fuga molestiae eum?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sit tempore, ratione modi
                    exercitationem enim neque deserunt rem rerum officia dolores! Aliquam harum ab suscipit porro quo
                    fuga molestiae eum?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sit tempore, ratione modi
                    exercitationem enim neque deserunt rem rerum officia dolores! Aliquam harum ab suscipit porro quo
                    fuga molestiae eum?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sit tempore, ratione modi
                    exercitationem enim neque deserunt rem rerum officia dolores! Aliquam harum ab suscipit porro quo
                    fuga molestiae eum?</p>
            </div>
        </div>
    </div>
</div>
