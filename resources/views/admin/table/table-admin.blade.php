<div class="col-md-12 p-1 text-center">
    <label class="location-name" for="location">Data Admin</label>
</div>

<div class="row mt-4 mx-1">
    <div class="col-md-6">
        <a href="#" class="btn btn-primary btn-rounded" type="button" data-toggle="modal" data-target="#tambahModal"
            href="#"><i class="fa-solid fa-plus fa-beat"></i>
            Tambah
            Data Admin</a>
    </div>
    <div class="col-md-6 d-flex justify-content-end align-items-center gap-2">
        <label for="search">Search:</label>
        <input type="text" id="search" oninput="filterTable()">
    </div>
</div>



<div class="container-fluid table-parent">
    <table class="table table-all table-bordered" id="dataTable">
        <thead class="text-center">
            <tr>
                <th class="column1" style="vertical-align : middle;text-align:center;font-size:12px;" rowspan="2">
                    NO</th>
                <th class="column1" style="vertical-align : middle;text-align:center;font-size:12px;" rowspan="2">
                    Username</th>
                <th class="column1"
                    style="vertical-align : middle;text-align:center;font-size:12px; white-space:nowrap;" rowspan="2">
                    Email</th>
                <th class="column1"
                    style="vertical-align : middle;text-align:center;font-size:12px; white-space:nowrap;" rowspan="2">
                    Tanggal Dibuat</th>
                <th class="column1" style="vertical-align : middle;text-align:center;font-size:12px;" rowspan="2">
                    Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($dataAdmin as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ date('d M Y', strtotime($item->created_at)) }}</td>
                <td>
                    <a href="#" data-toggle="modal" data-target="#editModal-{{ $item->id }}"
                        class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"
                            style="color: #ffffff;"></i></a>
                    <button class="btn btn-sm btn-danger" onclick="deleteUser('{{ $item->id }}')">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal Tambah -->
<div class="modal fade w-100" id="tambahModal" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-center" class="modal-title" id="tambahModalLabel">Tambahkan Data Admin</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="adminForm" action="/kelola-admin/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Admin</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Username" autofocus
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="bramantyo@gmail.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="form-control" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="submitForm" class="btn btn-success">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Edit -->
@foreach ($dataAdmin as $edit)
<div class="modal fade" id="editModal-{{ $edit->id }}" tabindex="-1" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Mengubah Data Admin</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ url('/kelola-admin/update/' . $edit->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Admin</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $edit->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $edit->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="current_password" class="form-label">Password Sebelumnya</label>
                        <input type="password" name="current_password" id="current_password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="new_password" class="form-label">Password Baru (Opsional)</label>
                        <input type="password" name="new_password" id="new_password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="new_password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                        <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                            class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endforeach

{{-- User Delete Function --}}

<script>
    function deleteUser(userId) {
        Swal.fire({
            title: 'Konfirmasi',
            html: `
                <input type="password" id="password" class="swal2-input" placeholder="Masukkan password Anda">
            `,
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal',
            preConfirm: () => {
                const password = Swal.getPopup().querySelector('#password').value;
                if (!password) {
                    Swal.showValidationMessage('Password harus diisi');
                }
                return password;
            }
        }).then((result) => {
            if (result.isConfirmed) {
                fetch(`/kelola-admin/delete/${userId}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ password: result.value })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire(
                            'Deleted!',
                            'Data Admin telah dihapus.',
                            'success'
                        );
                        // Optionally, you can update the UI here
                        location.reload(); // Reload the page to update the table
                    } else {
                        Swal.fire(
                            'Error!',
                            'Gagal menghapus data Admin.',
                            'error'
                        );
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire(
                        'Error!',
                        'Gagal menghapus data Admin.',
                        'error'
                    );
                });
            }
        });
    }
</script>