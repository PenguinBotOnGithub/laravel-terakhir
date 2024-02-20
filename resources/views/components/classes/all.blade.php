    <h1>Classes</h1>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @auth
        <a type="button" class="btn btn-primary align-self-start" href="/dashboard/classes/add">Add</a>
    @endauth
    <table class="table mt-4 container">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Actions</th>
        </tr>
        @foreach ($classes as $key => $class)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $class->nama }}</td>
                <td>
                    @auth
                        <a type="button" class="btn btn-primary"
                            href="/dashboard/classes/detail/{{ $class->id }}">Detail</a>
                    @else
                        <a type="button" class="btn btn-primary" href="/classes/detail/{{ $class->id }}">Detail</a>
                    @endauth
                    @auth
                        <a type="button" class="btn btn-warning"
                            href="/dashboard/classes/edit/{{ $class->id }}">Edit</a>
                    @endauth
                    @auth
                        <form method="POST" action="/classes/delete/{{ $class->id }}" style="display: inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                        </form>
                    @endauth
                </td>
            </tr>
        @endforeach
    </table>
