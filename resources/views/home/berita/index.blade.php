@extends('home.layouts.app')

@section('title', 'Berita')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" style="padding-top: 40px;">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <ol>
                    <li><a href="/">Beranda</a></li>
                    <li>Berita</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    @foreach ($posts as $post)
                        <article class="entry">

                            <div class="entry-img">
                                <img src="{{ asset('sailor') }}/img/blog/blog-1.jpg" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="{{ route('home.berita.show', $post->slug) }}">{{ $post->title }}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="#none">{{ $post->users->name }}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="#none"><time
                                                datetime="2020-01-01">{{ $post->created_at->format('M d, Y') }}</time></a>
                                    </li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="#none">12 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    {{ Str::limit($post->content, 250) }}
                                </p>
                                <div class="read-more">
                                    <a href="{{ route('home.berita.show', $post->slug) }}">Baca Berita</a>
                                </div>
                            </div>

                        </article>
                    @endforeach
                    <!-- End blog entry -->

                    {{ $posts->links('vendor.pagination.custome') }}

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Layanan</h3>
                        <div class="sidebar-item tags">
                            <ul>
                                <li><a href="#">Pengaduan Masyarakat</a></li>
                                <li><a href="#">Pelayanan Lantas</a></li>
                                <li><a href="#">Pelayanan Reksrim</a></li>
                            </ul>
                        </div><!-- End sidebar tags-->

                        <h3 class="sidebar-title">Postingan Terbaru</h3>
                        <div class="sidebar-item recent-posts">
                            @foreach ($recentPosts as $recentPost)
                                <div class="post-item clearfix">
                                    <img src="{{ asset('sailor') }}/img/blog/blog-recent-1.jpg" alt="">
                                    <h4><a
                                            href="{{ route('home.berita.show', $recentPost->slug) }}">{{ $recentPost->title }}</a>
                                    </h4>
                                    <time datetime="2020-01-01">{{ $recentPost->created_at->format('M d, Y') }}</time>
                                </div>
                            @endforeach

                        </div><!-- End sidebar recent posts-->


                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section>
@endsection
