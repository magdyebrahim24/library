<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @section('dashboardbody') 
            @foreach($books as $book)
            <table>
            <tr>
            <div class="content">
            <div class="book-continer">
            <p class="book-name">{{$book->book_name}}</p>
            <p>{{$book->author_name}}</p>
            <p>{{$book->book_description}}</p>
            </div>
            
            <div class="img-continer">
            </div>
            <div class="buttons">
            <!-- <a href="#" class="btn btn-primary" role="button">Show</a> -->
            <a href="/unborrow/{{$book->id}}" class="btn btn-primary" role="button">UnBorrow</a>
            <a href="/detailes/{{$book->id}}" class="btn btn-primary" role="button">Book Details</a>

            </div>
            </tr>
            </table>
            @endforeach  
       
        @endsection
            </div>
        </div>
    </div>
</x-app-layout>
