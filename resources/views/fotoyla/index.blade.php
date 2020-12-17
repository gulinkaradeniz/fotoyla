@extends('layouts.app')

@section('content')
    <div class="lg:flex lg:justify-between">
        <div class="lg:w-32">
            @include('fotoyla.leftbar')
        </div>
        <div class="lg:flex-1 lg:mx-10 mb-6 text-center" style="max-width: 700px">
            <div class="border border-blue-400 rounded-lg px-8 py-6 ">
                <button type="submit" class="bg-blue-500  rounded-lg shadow py-2 px-2 text-white">Herkesi Göster</button>
                <button type="submit" class="bg-blue-500  rounded-lg shadow py-2 px-2 text-white">Sadece Baylar</button>
                <button type="submit" class="bg-blue-500  rounded-lg shadow py-2 px-2 text-white">Sadece Bayanlar</button>
            </div>
            <h1 class="mb-6 pt-6 mx-auto text-center">Aşağıdaki kullanıcı için kaç puan verirsiniz ?</h1>
            <div class="mx-auto max-w-sm text-center flex flex-wrap justify-center">
                @foreach ($sayilar as $s)
                    <div class="flex items-center mr-4 mb-4">
                    <input id="radio1" type="radio" name="radio" class="hidden" checked />
                    <label for="radio1" class="flex items-center cursor-pointer">
                        <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
                        {{$s}}</label>
                    </div>
                @endforeach
            </div>
            <div class="flex items-center mb-4">
                <img src="https://i.pravatar.cc/40" alt="" class="rounded-full mr-4" style="flex-shrink:0">
                Büşra
            </div>
        </div>
        <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
            @include('fotoyla.rightbar')
        </div>
    </div>
@endsection
