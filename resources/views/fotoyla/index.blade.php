@extends('layouts.app')

@section('content')
    <div class="lg:flex lg:justify-between">
        <div class="lg:w-32">
            @include('fotoyla.leftbar')
        </div>
        <div class="lg:flex-1 lg:mx-10 mb-6 text-center" style="max-width: 700px">
            <div class="border border-blue-400 rounded-lg px-8 py-6 ">
                <button type="submit" class="bg-blue-500 hover:bg-blue-400 hover:text-white  rounded-lg shadow py-2 px-2 text-white">Herkesi Göster</button>
                <button type="submit" class="bg-blue-500 hover:bg-blue-400 hover:text-white rounded-lg shadow py-2 px-2 text-white">Sadece Baylar</button>
                <button type="submit" class="bg-blue-500 hover:bg-blue-400 hover:text-white rounded-lg shadow py-2 px-2 text-white">Sadece Bayanlar</button>
                <h1 class="mb-2 pt-3 mx-auto text-center">Aşağıdaki kullanıcı için kaç puan verirsiniz ?</h1>
                @if (Auth::user()==null)
                <h1 class="mb-6 pt-3 mx-auto text-center text-red-500 font-medium">Puan vermek için giriş yapmalısınız.</h1>
                @endif
                @foreach ($image as $i)
                    <div class="flex items-center justify-center">
                        <div class="flex border border-black">
                            @if (Auth::user())
                                <form action="/score/{{Auth::user()->id}}" method="POST">
                            @endif
                                @csrf
                                <input name="user_id" id="user_id" class="hidden" value="{{$i->user_id}}">
                                @for ($i = 1; $i <= 10; $i++)
                                    <button name="score" class="flex-left items-center justify-center w-10 h-10 text-lg font-medium hover:bg-blue-400 hover:text-white focus:outline-none" value={{$i}}>{{$i}}</button>
                                @endfor
                            </form>
                        </div>
                    </div>
                @endforeach
                @foreach ($image as $i)
                    <div class="flex justify-center">
                        <section class="grid-center grid-cols-3 max-w-6xl h-15 w-1/2">
                        <a class="flex flex-col justify-between p-6 rounded-md h-64 max-w-md relative overflow-hidden m-4 shadow-md hover:shadow-xl bg-gray-500 transition-shadow duration-400">
                            <img src="{{asset('/storage/photo/'.$i->photo)}}" class="absolute object-cover top-0 left-0 w-full h-full" alt="photo">
                        </a>
                        </section>
                    </div>
                @endforeach
            </div>
            
        </div>
        <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
            @include('fotoyla.rightbar')
        </div>
    </div>
@endsection
