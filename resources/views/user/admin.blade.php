<x-layout>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <h2>Users Management</h2>
                <div class="d-flex justify-content-start mt-3">
                    <a class="btn btn-secondary me-2" href="{{ url()->previous() }}"><i class="fa fa-arrow-left"></i> Back</a>
                    <a class="btn btn-success" href="{{ route('users.create') }}"><i class="fa fa-plus"></i> Create New User</a>
                </div>
            </div>
        </div>
    
        <table class="table table-bordered mt-4">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($data as $key => $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                        <label class="badge bg-success">{{ $v }}</label>
                        @endforeach
                    @endif
                </td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                        <form method="POST" action="{{ route('users.destroy', $user->id) }}" style="display:inline">
                            @csrf
                            @method('DELETE')
        
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                </td>
            </tr>
            @endforeach
        </table>
    
        {!! $data->links('pagination::bootstrap-5') !!}
    </div>
</x-layout>
