@extends('usermaster')
@section('css')
<style>
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
        background-color: #f0f0f0;
        display: inline-block;
        text-align: center;
        line-height: 40px;
        font-size: 18px;
        color: #555;
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
</style>
@endsection

@section('content')
<div class="container mt-5">
    @foreach ($aspirations as $aspiration)
        <div class="report-container">
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
        </div>
    @endforeach
</div>
@endsection
