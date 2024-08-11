@extends('usermaster')

@section('css')
<style>
        .chat-container {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }
        .chat-bubble {
            max-width: 70%;
            padding: 10px;
            border-radius: 15px;
            margin: 10px;
        }
        .chat-bubble-q {
            background-color: #007bff;
            color: white;
            text-align: left;
            margin-left: auto;
        }
        .chat-bubble-a {
            background-color: #f1f1f1;
            text-align: left;
        }
        .profile-pic {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin: 10px;
        }
        .chat-container.q .profile-pic {
            order: 2;
        }
        .chat-container.q .chat-bubble {
            order: 1;
        }
    </style>
@endsection
@section('content')
<div class="isi">
<div class="container col-lg-8 mt-5 mb-5">
        <h3 align="center" class="mb-5">Pertanyaan seputar web</h3>
        <div class="chat-container q">
            <div class="chat-bubble chat-bubble-q">
                Apa itu fitur aspirasi masyarakat?
            </div>
            <img src="{{ asset('images\user.png') }}" alt="User Profile" class="profile-pic">
        </div>
        <div class="chat-container a">
            <img src="{{ asset('images\admin.png') }}" alt="Admin Profile" class="profile-pic">
            <div class="chat-bubble chat-bubble-a">
                Fitur ini memungkinkan warga desa untuk menyampaikan ide, kritik, saran, atau keluhan mereka secara langsung kepada administrasi desa. Aspirasi yang masuk akan dipertimbangkan dan dapat ditindaklanjuti oleh admin desa.
            </div>
        </div>

        <div class="chat-container q">
            <div class="chat-bubble chat-bubble-q">
                Bagaimana cara menyampaikan aspirasi saya?
            </div>
            <img src="{{ asset('images\user.png') }}" alt="User Profile" class="profile-pic">
        </div>
        <div class="chat-container a">
            <img src="{{ asset('images\admin.png') }}" alt="Admin Profile" class="profile-pic">
            <div class="chat-bubble chat-bubble-a">
                Anda bisa mengisi formulir yang tersedia di halaman "Aspirasi Masyarakat". Masukkan informasi yang diperlukan seperti nama, kontak, dan detail aspirasi Anda, kemudian klik "Kirim".
            </div>
        </div>

        <div class="chat-container q">
            <div class="chat-bubble chat-bubble-q">
                Apakah ada batasan jumlah aspirasi yang bisa saya kirimkan?
            </div>
            <img src="{{ asset('images\user.png') }}" alt="User Profile" class="profile-pic">
        </div>
        <div class="chat-container a">
            <img src="{{ asset('images\admin.png') }}" alt="Admin Profile" class="profile-pic">
            <div class="chat-bubble chat-bubble-a">
                Tidak ada batasan jumlah aspirasi yang bisa dikirimkan. Namun, kami menyarankan agar Anda memastikan bahwa setiap aspirasi yang dikirimkan relevan dan belum pernah disampaikan sebelumnya.
            </div>
        </div>

        <div class="chat-container q">
            <div class="chat-bubble chat-bubble-q">
                Siapa yang dapat saya hubungi jika saya mengalami masalah dengan fitur ini?
            </div>
            <img src="{{ asset('images\user.png') }}" alt="User Profile" class="profile-pic">
        </div>
        <div class="chat-container a">
            <img src="{{ asset('images\admin.png') }}" alt="Admin Profile" class="profile-pic">
            <div class="chat-bubble chat-bubble-a">
                Jika Anda menghadapi masalah teknis atau memerlukan bantuan, Anda dapat langsung mengunjungi kantor BPD untuk info lebih lanjut.
            </div>
        </div>

        <div class="chat-container q">
            <div class="chat-bubble chat-bubble-q">
                Bagaimana aspirasi saya akan diproses setelah dikirim?
            </div>
            <img src="{{ asset('images\user.png') }}" alt="User Profile" class="profile-pic">
        </div>
        <div class="chat-container a">
            <img src="{{ asset('images\admin.png') }}" alt="Admin Profile" class="profile-pic">
            <div class="chat-bubble chat-bubble-a">
                Setelah dikirim, aspirasi Anda akan ditindaklanjuti oleh admin desa dan akan diproses lebih lanjut
            </div>
        </div>
    </div>
</div>
@endsection
