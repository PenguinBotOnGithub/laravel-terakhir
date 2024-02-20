<form class="d-flex flex-column gap-4 justify-content-center">
    @auth
        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="number" name="nis" class="form-control" disabled value="{{ $student->nis }}">
        </div>
    @endauth
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" disabled value="{{ $student->nama }}">
    </div>
    <div class="mb-3">
        <label for="kelas" class="form-label">Kelas</label>
        <input type="text" name="kelas" class="form-control" disabled value="{{ $student->kelas->nama }}">
    </div>
    <div class="mb-3">
        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
        <input type="text" name="tgl_lahir" class="form-control" disabled
            value="{{ date_format(date_create($student->tanggal_lahir), 'd / F / Y') }}">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" disabled value="{{ $student->alamat }}">
    </div>
    <a type="button" class="btn btn-primary" href="javascript:history.back()">Back</a>
</form>
