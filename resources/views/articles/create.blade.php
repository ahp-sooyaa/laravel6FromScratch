@extends('layout')

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
        <div class="container">
            <form method="POST" action="/articles">
                @csrf
                <div class="field">
                    <label for="title">Title</label>
        
                    <div class="control">
                        <input class="input" type="text" name="title" id="title">
                    </div>
                </div>
                <div class="field">
                    <label for="title">Excerpt</label>
        
                    <div class="control">
                        <input class="input" type="text" name="excerpt" id="excerpt">
                    </div>
                </div>
                <div class="field">
                    <label for="title">Body</label>
        
                    <div class="control">
                        <textarea name="body" id="body" class="textarea"></textarea>
                    </div>
                </div> <br>
                <div class="field is-grouped">
                    <div class="control buttons">
                        <button class="button is-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection