@extends('layout')

@section('content')

    <!-- One -->
        <section id="One" class="wrapper style3">
            <div class="inner">
                <header class="align-center">
                    <p>{{$article->title}}</p>
                    <h2>{{$article->excerpt}}</h2>
                </header>
            </div>
        </section>

    <!-- Two -->
        <section id="two" class="wrapper style2">
            <div class="inner">
                <div class="box">
                    <div class="content">
                        <p>
                            {{$article->body}}
                        </p>
                        <p>
                            @foreach ($article->tags as $tag)
                                <a href="{{route('articles.index', ['tag' => $tag->name])}}">{{$tag->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </section>

    <!-- Footer -->
        <footer id="footer">
            <div class="container">
                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
                </ul>
            </div>
            <div class="copyright">
                &copy; Untitled. All rights reserved.
            </div>
        </footer>
@endsection