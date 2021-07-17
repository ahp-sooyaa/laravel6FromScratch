@extends('layouts.app')

@section('content')

<!-- Banner -->
<section class="banner full">
    <article>
        <img src="../images/slide01.jpg" alt="" />
        <div class="inner">
            <header>
                <p>Welcome {{auth()->user()->name}}, You are logged in!</p>
                <h2>Hielo</h2>
            </header>
        </div>
    </article>
    <article>
        <img src="../images/slide02.jpg" alt="" />
        <div class="inner">
            <header>
                <p>Welcome {{auth()->user()->name}}, You are logged in!</p>
                <h2>Hielo</h2>
            </header>
        </div>
    </article>
    <article>
        <img src="../images/slide03.jpg"  alt="" />
        <div class="inner">
            <header>
                <p>Welcome {{auth()->user()->name}}, You are logged in!</p>
                <h2>Hielo</h2>
            </header>
        </div>
    </article>
    <article>
        <img src="../images/slide04.jpg"  alt="" />
        <div class="inner">
            <header>
                <p>Welcome {{auth()->user()->name}}, You are logged in!</p>
                <h2>Hielo</h2>
            </header>
        </div>
    </article>
    <article>
        <img src="../images/slide05.jpg"  alt="" />
        <div class="inner">
            <header>
                <p>Welcome dude, You are logged in!</p>
                <h2>Hielo</h2>
            </header>
        </div>
    </article>
</section>

<!-- One -->
<section id="one" class="wrapper style2">
    <div class="inner">
        <div class="grid-style">
            @foreach ($articles as $article):
            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="../images/pic02.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>maecenas sapien feugiat ex purus</p>
                            <h2>Lorem ipsum dolor</h2>
                        </header>
                        <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
                        <footer class="align-center">
                            <a href="#" class="button alt">Learn More</a>
                        </footer>
                    </div>
                </div>
            </div>
            @endforeach;


            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="../images/pic03.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>mattis elementum sapien pretium tellus</p>
                            <h2>Vestibulum sit amet</h2>
                        </header>
                        <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
                        <footer class="align-center">
                            <a href="#" class="button alt">Learn More</a>
                        </footer>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Two -->
<!-- <section id="two" class="wrapper style3">
    <div class="inner">
        <header class="align-center">
            <p>Nam vel ante sit amet libero scelerisque facilisis eleifend vitae urna</p>
            <h2>Morbi maximus justo</h2>
        </header>
    </div>
</section> -->

<!-- Three -->
<section id="three" class="wrapper style2">
    <div class="inner">
        <header class="align-center">
            <p class="special">Nam vel ante sit amet libero scelerisque facilisis eleifend vitae urna</p>
            <h2>Morbi maximus justo</h2>
        </header>
        <div class="gallery">
            <div>
                <div class="image fit">
                    <a href="#"><img src="../images/pic01.jpg" alt="" /></a>
                </div>
            </div>
            <div>
                <div class="image fit">
                    <a href="#"><img src="../images/pic02.jpg" alt="" /></a>
                </div>
            </div>
            <div>
                <div class="image fit">
                    <a href="#"><img src="../images/pic03.jpg" alt="" /></a>
                </div>
            </div>
            <div>
                <div class="image fit">
                    <a href="#"><img src="../images/pic04.jpg" alt="" /></a>
                </div>
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
