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
                <h1 class="mb-6 pt-6 mx-auto text-center">Aşağıdaki kullanıcı için kaç puan verirsiniz ?</h1>
                {{--  <div class="mx-auto max-w-sm text-center flex flex-wrap justify-center">
                    @foreach ($sayilar as $s)
                        <div class="flex items-center mr-4 mb-4">
                        <input id="radio1" type="radio" name="radio" class="hidden" checked />
                        <label for="radio1" class="flex items-center cursor-pointer">
                            <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
                            {{$s}}</label>
                        </div>
                    @endforeach
                </div> --}}
                <div class="flex items-center justify-center">
                    <div class="flex border border-black">
                        @for ($i = 1; $i <= 10; $i++)
                        <button class="flex items-center justify-center w-8 h-8 text-sm font-medium border-l border-blue hover:bg-blue-200 hover:text-white focus:outline-none">{{$i}}</button>
                        @endfor
                    </div>
                </div>
                @foreach ($users as $user)
                <div class="flex justify-center">
                    
                    <section class="grid-center grid-cols-3 max-w-6xl h-15 w-1/2">
                    <a class="flex flex-col justify-between p-6 rounded-md h-64 max-w-md relative overflow-hidden m-4 shadow-md hover:shadow-xl bg-gray-500 transition-shadow duration-300">
                        <img src="{{asset('/storage/photo/'.$user->photo)}}" class="absolute object-cover top-0 left-0 w-full h-full" alt="photo">
                      <div class="card_bottom relative flex justify-between text-black">
                        <div class="text-sm font-semibold">{{$user->name}}</div>
                      </div>
                    
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
