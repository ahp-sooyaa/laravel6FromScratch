@extends('layout')

@section('content')

    <!-- One -->
        <section id="One" class="wrapper style3">
            <div class="inner">
                <header class="align-center">
                    <p>Welcome from My Web😍</p>
                    <h2>{{ucfirst(trans(Request::path()))}} Page</h2>
                </header>
            </div>
        </section>

    <!-- Two -->
        <section id="two" class="wrapper style2">
            <div class="inner">
                <div class="box">
                    <div class="content">
                        <ul>
                            @forelse ($articles as $article)
                            <li>
                                <h3>
                                    <a href="{{ $article->path() }}">
                                        {{$article->title}}
                                    </a>
                                </h3>
                                <img src="../images/pic01.jpg" alt="">
                                <p>{{$article->excerpt}}</p>
                            </li>
                            @empty
                                <p>No relevant articles for this tag!.</p>
                            @endforelse
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