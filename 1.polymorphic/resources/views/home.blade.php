@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">To Do List</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @guest
                        You are not loggin
                    @endguest

                    @auth
                        You are logged in! {{ auth()->user()->name}}
                    @else
                        None login user
                    @endauth

                        <style>
                            .error {
                                border-color: red;
                            }
                        </style>

                        @if($errors->any)
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="/list/">
                            @csrf
                            Title : <input type="text" @error("title") class="error" @enderror name="title" value="{{ old('title') }}" /><br />
                            <br>
                            <button type="submit">Create</button>
                        </form>
                            <br>
                        @foreach($toDoLists as $toDoList)
                            <ul>
                                <li>{{$toDoList->title}}</li>
                            </ul>
                        @endforeach
                        <br />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
