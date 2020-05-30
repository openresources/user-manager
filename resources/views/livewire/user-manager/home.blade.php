<div x-data="{ 
    clearCheckBoxes: false,
    disableBulkActions: true,
    showBulkDeleteModal: false,
}">

    <table class="w-full">
        <thead>
            <tr>
                <th class="pb-2 text-left"></th>
                <th class="pb-2 text-left"></th>
                <th class="pb-2 text-left"></th>
                <th class="pb-2 text-left">Name</th>
                <th class="pb-2 text-left">Email</th>
                <th class="pb-2 text-left">Role</th>
                <th class="pb-2 flex justify-end content-center">
                    <button x-on:click="showBulkDeleteModal = true"
                        x-bind:class="{'bg-red-700 hover:bg-red-800 text-white button button-small' : ! disableBulkActions }"
                        class="text-sm py-2 mr-2" x-bind:disabled="disableBulkActions"
                        wire:click="updateSelectedUsers">delete selected</button>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td> <label class="p-2 cursor" x-on:click="disableBulkActions = false">
                        <input type="checkbox" wire:model="ids.{{$user['id']}}" id="user#{{$user['id']}}">
                     </label> 
                </td>
                <td>{{ $user['avatar']}}</td>
                <td><label for="user#{{$user['id']}}">{{ $user['name'] }}</label></td>
                <td>{{ $user['email'] }}</td>
                <td>{!! $user['role']['name'] ?? '<span class="block text-center">&dash;</span>' !!}</td>
                <td class="flex justify-end">
                    <a class="button text-sm small p-2 mr-2" href="#">view</a>
                    <a class="button text-sm small p-2 mr-2" href="#">edit</a>
                    <a class="button text-sm small p-2 mr-2" href="#">disable</a>
                    <a class="button text-sm small p-2 mr-2" href="#">send magic link</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div x-cloak>
        @include('user-manager::partials.modals.bulk_delete_users')
    </div>
</div>
