
<h1>Edit Pelanggan</h1>

<form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
    @csrf
    @method('PUT')

    <p>
        Kode Pelanggan:
        <input type="text" name="kode_pelanggan"
            value="{{ $pelanggan->kode_pelanggan }}" required>
    </p>

    <p>
        Nama:
        <input type="text" name="nama"
            value="{{ $pelanggan->nama }}" required>
    </p>

    <p>
        Kategori:
        <input type="text" name="kategori"
            value="{{ $pelanggan->kategori }}" required>
    </p>

    <p>
        Email:
        <input type="email" name="email"
            value="{{ $pelanggan->email }}" required>
    </p>

    <p>
        Tanggal Daftar:
        <input type="date" name="tanggal_daftar"
            value="{{ $pelanggan->tanggal_daftar }}" required>
    </p>

    <p>
        Alamat:
        <textarea name="alamat" required>{{ $pelanggan->alamat }}</textarea>
    </p>

    <p>
        Keterangan:
        <textarea name="keterangan">{{ $pelanggan->keterangan }}</textarea>
    </p>

    <button type="submit">Update</button>
    <a href="{{ route('pelanggan.index') }}">Kembali</a>
</form>
