<div>
    <table class="w-full">
        <thead>
            <tr>
                <th class="text-left"></th>
                <th class="text-left"></th>
                <th class="text-left">Name</th>
                <th class="text-left">Email</th>
                <th class="text-left">Role</th>
                <th class="text-left"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->avatar }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td class="flex">
                    <a class="button text-sm small p-2 mr-2" href="#">view</a>
                    <a class="button text-sm small p-2 mr-2" href="#">edit</a>
                    <a class="button text-sm small p-2 mr-2" href="#">disable</a>
                    <a class="button text-sm small p-2 mr-2" href="#">send magic link</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
