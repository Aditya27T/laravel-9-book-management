<div class="container" style="background-color: #F5F6FA; height: 80%">
    <div class="d-flex justify-content-between px-5 py-4">
        <div>
            <div class="h5 mb-0">List Buku</div>
            <div class="d-flex">
                <select id="length_menu" class="mt-1 form-select" style="width: 50px;">
                    <option value="10" {{ request()->get('length') == '10' ? 'selected' : '' }}>10</option>
                    <option value="25" {{ request()->get('length') == '25' ? 'selected' : '' }}>25</option>
                    <option value="50" {{ request()->get('length') == '50' ? 'selected' : '' }}>50</option>
                    <option value="100" {{ request()->get('length') == '100' ? 'selected' : '' }}>100</option>
                </select>
                <p class="mt-1 ml-2">data</p>
            </div>
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Export
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                @csrf	
                <li><a class="dropdown-item" href="#">Export Excel</a></li>
            </ul>
        </div>
        <a href="#" class="btn rounded-pill text-light align-self-center" style="width: 200px; height: 40px; background-color: #364FF6;">Tambah Buku</a>
    </div>

    <div class="mx-5" style="height: 80%; box-sizing: border-box; overflow: scroll;">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Cover Buku</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
