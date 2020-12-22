@extends('layouts.app')
@section('content')
<div class="lg:flex lg:justify-between">
    <div class="lg:w-32">
        @include('fotoyla.leftbar')
    </div>
    <div class="lg:flex-1 lg:mx-10 mb-6 text-center" style="max-width: 700px">
        <div class="border border-blue-400 rounded-lg px-8 py-6 ">
            <h1 class="mb-4 text-left font-bold">RESİM YÜKLE</h1>
            <hr class="mb-4">
            <form method="POST" action="/users/{{ $user->id}}/upload" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input">
                    </div>
                </div><br>
                {{-- <div class="custom-file">
                    <label class="mb-4 h-24 w-24 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-full shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue-200 hover:text-white">
                        <span class="custom-file-label">Resim Yükle</span>
                        <input type='file' name="photo" class="custom-file-input" />
                    </label>
                </div> --}}
                    <button type="submit" class="bg-blue-500 w-full rounded-lg shadow py-2 px-2 text-white">Kaydet</button>
            </form>
        </div>
    </div>
    <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
        @include('fotoyla.rightbar')
    </div>
</div>
@endsection