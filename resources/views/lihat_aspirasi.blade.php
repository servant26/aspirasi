@extends('usermaster')

@section('css')
<style>
    /* Existing styles */
    .report-container {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 15px;
        margin-bottom: 20px;
        background-color: #f9f9f9;
    }
    .user-icon, .admin-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: inline-block;
        text-align: center;
        line-height: 40px;
        font-size: 18px;
        color: white;
    }

    .user-icon{
        background-color: #c5a1f2;
    }

    .admin-icon{
        background-color: orange;
    }
    .user-name, .admin-name {
        font-weight: bold;
    }
    .response-content {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        margin-top: 10px;
        margin-left: 50px;
    }

    /* Custom pagination styles */
    .pagination {
        justify-content: center;
        margin-top: 20px;
    }
    .page-item.disabled .page-link {
        color: #6c757d;
    }
    .page-item.active .page-link {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
    }
    .page-link {
        color: #007bff;
    }
    .page-link:hover {
        text-decoration: none;
    }
</style>
@endsection

@section('content')
<div class="container mt-5">
<h3 class="mb-5" align="center">Daftar Aspirasi</h3>
    <!-- Search Form -->
    <div class="row">
        <div class="col-lg-8 col-sm-8 mx-auto">
            <form method="GET" action="{{ url('/lihat_aspirasi') }}" class="mb-4">
                <div class="input-group">
                    <input type="text" name="search" value="{{ $search }}" class="form-control" placeholder="Cari aspirasi (Masukkan nama anda)" autofocus>
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @foreach ($aspirations as $aspiration)
        <div class="report-container col-lg-10 col-sm-10 mx-auto">">
            <!-- User Report -->
            <div class="d-flex align-items-center">
                <div class="user-icon me-3">
                    <span>U</span> <!-- Placeholder for user profile picture -->
                </div>
                <div>
                    <div class="user-name">{{ $aspiration->nama }}</div>
                    <div class="text-muted">{{ $aspiration->created_at }}</div>
                </div>
            </div>
            <div class="mt-3">
                {{ $aspiration->isi_aspirasi }}
            </div>

            <!-- Admin Response -->
            <div class="response-content mt-4">
                <div class="d-flex align-items-center">
                    <div class="admin-icon me-3">
                        <span>A</span> <!-- Placeholder for admin profile picture -->
                    </div>
                    <div>
                        <div class="admin-name">Admin</div>
                        <div class="text-muted">{{ $aspiration->updated_at }}</div>
                    </div>
                </div>
                <div class="mt-3">
                    {{ $aspiration->isi_tanggapan }}
                </div>
            </div>
        </col-lg-8>
        </div>
    @endforeach

    <!-- Custom Pagination -->
    <div class="mt-5 mb-5">
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        @if ($aspirations->onFirstPage())
          <li class="page-item disabled">
            <a class="page-link">Previous</a>
          </li>
        @else
          <li class="page-item">
            <a class="page-link" href="{{ $aspirations->previousPageUrl() }}">Previous</a>
          </li>
        @endif

        @for ($i = 1; $i <= $aspirations->lastPage(); $i++)
          <li class="page-item {{ $i == $aspirations->currentPage() ? 'active' : '' }}">
            <a class="page-link" href="{{ $aspirations->url($i) }}">{{ $i }}</a>
          </li>
        @endfor

        @if ($aspirations->hasMorePages())
          <li class="page-item">
            <a class="page-link" href="{{ $aspirations->nextPageUrl() }}">Next</a>
          </li>
        @else
          <li class="page-item disabled">
            <a class="page-link">Next</a>
          </li>
        @endif
      </ul>
    </nav>
    </div>
</div>
@endsection
