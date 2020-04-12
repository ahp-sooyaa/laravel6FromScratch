@extends('layout')

@section('content')

    <!-- One -->
        <section id="One" class="wrapper style3">
            <div class="inner">
                <header class="align-center">
                    <p>Eleifend vitae urna</p>
                    <h2>Generic Page Template</h2>
                </header>
            </div>
        </section>

    <!-- Two -->
        <section id="two" class="wrapper style2">
            <div class="inner">
                <div class="box">
                    <div class="content">
                        <header class="align-center">
                            <p>maecenas sapien feugiat ex purus</p>
                            <h2>Lorem ipsum dolor</h2>
                        </header>
                        <ul>
                            @foreach ($articles as $article)
                            <li>
                                <h3>
                                    <a href="/articles/{{ $article->id }}">{{$article->title}}</a>
                                </h3>
                                <p>{{$article->excerpt}}</p>
                            </li>
                            @endforeach
                        </ul>
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