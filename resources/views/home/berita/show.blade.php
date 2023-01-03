@extends('home.layouts.app')

@section('title', $post->title)

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
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#none"><time
                                            datetime="2020-01-01">{{ $post->created_at->format('M d, Y') }}</time></a>
                                </li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#none">12
                                        Comments</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                {!! $post->content !!}
                            </p>
                        </div>

                    </article>
                    <!-- End blog entry -->

                    <div class="blog-comments">

                        <h4 class="comments-count">8 Comments</h4>

                        <div id="comment-2" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="{{ asset('sailor') }}/img/blog/comments-2.jpg"
                                        alt=""></div>
                                <div>
                                    <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i
                                                class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan, 2020</time>
                                    <p>
                                        Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe.
                                        Officiis illo ut beatae.
                                    </p>
                                </div>
                            </div>

                            <div id="comment-reply-1" class="comment comment-reply">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="{{ asset('sailor') }}/img/blog/comments-3.jpg"
                                            alt=""></div>
                                    <div>
                                        <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i
                                                    class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time datetime="2020-01-01">01 Jan, 2020</time>
                                        <p>
                                            Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur
                                            ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut
                                            est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt
                                            qui illum omnis est et dolor recusandae.

                                            Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro
                                            aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur
                                            distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio
                                            laborum minima fugiat.

                                            Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error
                                            dolorum non autem quisquam vero rerum neque.
                                        </p>
                                    </div>
                                </div>

                            </div><!-- End comment reply #1-->

                        </div><!-- End comment #2-->

                        <div class="reply-form">
                            <h4>Leave a Reply</h4>
                            <p>Your email address will not be published. Required fields are marked * </p>
                            <form action="">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input name="name" type="text" class="form-control" placeholder="Your Name*">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="email" type="text" class="form-control" placeholder="Your Email*">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <input name="website" type="text" class="form-control"
                                            placeholder="Your Website">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Post Comment</button>

                            </form>

                        </div>

                    </div>


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
