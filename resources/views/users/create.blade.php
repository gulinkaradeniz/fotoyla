@extends('layouts.app')

@section('content')
    <div class="lg:flex lg:justify-between">
        <div class="lg:w-32">
            @include('fotoyla.leftbar')
        </div>
        <div class="lg:flex-1 lg:mx-10 mb-6 text-center" style="max-width: 700px">
            <div class="border border-blue-400 rounded-lg px-8 py-6 ">
                <h1 class="mb-4 text-left font-bold">KAYIT</h1>
                <hr class="mb-4">
                <form method="POST" action="/users">
                    @csrf
                    <div class="mb-2">
                        <label class="text-grey-darker text-left block">Ad Soyad</label>
                        <input type="name" class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-1 py-1 rounded shadow" id="name" name="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="mb-2">
                        <label class="text-grey-darker text-left block">E-mail</label>
                        <input type="email" class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-1 py-1 rounded shadow" id="email" name="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="mb-2">
                        <label class="text-grey-darker text-left block">Şifre</label>
                        <input type="password" class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-1 py-1 rounded shadow" id="password" name="password" value="{{ old('password') }}" required>
                    </div>
                        <button type="submit" class="bg-blue-500 w-full rounded-lg shadow py-2 px-2 text-white">Kayıt Ol</button>
                </form>
            </div>
        </div>
        <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
            @include('fotoyla.rightbar')
        </div>
    </div>
@endsection