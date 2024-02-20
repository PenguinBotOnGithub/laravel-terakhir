<h1>Students</h1>
@if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
    </div>
@endif
<div class="d-flex flex-row justify-content-between">
    @auth
        <a type="button" class="btn btn-primary" href="/dashboard/students/add">Add</a>
    @endauth
    @auth
        <form action="/dashboard/students" method="GET" class="w-25 d-flex flex-row gap-2">
            <select name="type" id="type" class="form-select w-25">
                <option value="nis">NIS</option>
                <option value="nama" selected>Nama</option>
                <option value="alamat">Alamat</option>
            </select>
            <input type="search" name="filter" id="filter" class="form-control w-75" placeholder="Search">
        </form>
    @endauth
</div>
<table class="table mt-4 container">
    <tr class="sticky-top">
        <th>ID</th>
        @auth
            <th>NIS</th>
        @endauth
        <th>Nama</th>
        <th>Kelas</th>
        <th>Actions</th>
    </tr>
    @foreach ($students as $key => $item)
        <tr>
            <td>{{ ($students->currentPage() - 1) * 20 + ($key + 1) }}</td>
            @auth
                <td>{{ $item->nis }}</td>
            @endauth
            <td>{{ $item->nama }}</td>
            <td>{{ $item->kelas->nama }}</td>
            <td>
                @auth
                    <a type="button" class="btn btn-primary"
                        href="/dashboard/students/detail/{{ $item->id }}">Detail</a>
                @else
                    <a type="button" class="btn btn-primary" href="/students/detail/{{ $item->id }}">Detail</a>
                @endauth
                @auth
                    <a type="button" class="btn btn-warning" href="/dashboard/students/edit/{{ $item->id }}">Edit</a>
                @endauth
                @auth
                    <form method="POST" action="/dashboard/students/delete/{{ $item->id }}" style="display: inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                    </form>
                @endauth
            </td>
        </tr>
    @endforeach
</table>

<div class="pagination d-flex flex-column">
    {{ $students->links() }}
</div>

{{-- <div class="d-flex flex-row justify-content-between mb-4">
    @if ($students->currentPage() > 1)
        @auth
            <a type="button" class="btn btn-primary"
                href="/dashboard/students?page={{ $students->currentPage() - 1 }}">Previous</a>
        @else
            <a type="button" class="btn btn-primary" href="/students?page={{ $students->currentPage() - 1 }}">Previous</a>
        @endauth
    @else
        <div></div>
    @endif
    {{ $students->currentPage() }}
    @if ($students->hasMorePages())
        @auth
            <a type="button" class="btn btn-primary"
                href="/dashboard/students?page={{ $students->currentPage() + 1 }}">Next</a>
        @else
            <a type="button" class="btn btn-primary" href="/students?page={{ $students->currentPage() + 1 }}">Next</a>
        @endauth
    @else
        <div></div>
    @endif
</div> --}}
