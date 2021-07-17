@extends('layout')

@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.1/css/bulma.css">
@endsection

@section('content')
    <!-- One -->
    <section id="One" class="wrapper style3">
        <div class="inner">
            <header class="align-center">
                <p>Welcome dude!</p>
                <h2>Create Page</h2>
            </header>
        </div>
    </section>

    <!-- form -->
    <div id="wrapper">
        <div id="page" class="container">
            <h1 style="margin-top: 20px" class="heading has-text-weight-bold is-size-4">New Article</h1>
            <form method="POST" action="/articles">
                @csrf
                <div class="field">
                    <label for="title">Title</label>
        
                    <div class="control">
                        {{-- <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" id="title"> --}}
                        <input 
                            class="input @error('title') is-danger @enderror" 
                            type="text" 
                            name="title" 
                            id="title"
                            value="{{ old('title')}}"
                        >
                        {{-- @if($errors->has('title')) --}}
                        @error('title')
                        <p class="help is-danger">{{$errors->first('title')}}</p>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label for="excerpt">Excerpt</label>
        
                    <div class="control">
                        <input 
                            class="input @error('excerpt') is-danger @enderror" 
                            type="text" 
                            name="excerpt" 
                            id="excerpt"
                            value="{{ old('excerpt') }}" 
                        >
                        @error('excerpt')
                        <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label for="body">Body</label>
        
                    <div class="control">
                    <textarea name="body" id="body" class="textarea @error('body') is-danger @enderror">{{ old ('body')}}</textarea>
                        @error('body')
                        <p class="help is-danger">{{$errors->first('body')}}</p>
                        @enderror
                    </div>
                </div> <br>
                <div class="field">
                    <label for="tags">Tags</label>
        
                    <div class="select is-multiple is-primary">
                        <select 
                            name="tags[]"
                            multiple
                        >
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
                        @error('tags')
                        <p class="help is-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control buttons">
                        <button class="button is-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection