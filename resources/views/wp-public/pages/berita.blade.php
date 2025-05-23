@extends('wp-public.layouts.app')
@section('content')
<section id="news-hero" class="news-hero section mt-5">
    <div class="container mt-5" data-aos="fade-down">
        <div class="row g-4">
            <div class="col-lg-3">
                <div class="side-posts">
                    <article class="post-item side-post" data-aos="fade-right" data-aos-delay="100">
                        <div class="post-img">
                            <img src="{{ asset ('themes/frontend/assets/img/blog/blog-post-3.webp') }}" alt="Post Image"
                                class="img-fluid" loading="lazy">
                            <span class="category entertainment">Entertainment</span>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Maecenas tempus tellus eget condimentum rhoncus semper quam</a>
                            </h3>
                            <div class="post-meta">
                                <span>March 15, 2025</span>
                                <span class="dot">•</span>
                                <span>3 Comments</span>
                            </div>
                        </div>
                    </article>

                    <article class="post-item side-post" data-aos="fade-right" data-aos-delay="200">
                        <div class="post-img">
                            <img src="{{ asset ('themes/frontend/assets/img/blog/blog-post-9.webp') }}" alt="Post Image"
                                class="img-fluid" loading="lazy">
                            <span class="category technology">Technology</span>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Donec pede justo fringilla vel aliquet nec vulputate eget</a>
                            </h3>
                            <div class="post-meta">
                                <span>March 14, 2025</span>
                                <span class="dot">•</span>
                                <span>5 Comments</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <div class="col-lg-6">
                <article class="post-item main-post" data-aos="fade-up">
                    <div class="post-img">
                        <img src="{{ asset ('themes/frontend/assets/img/blog/blog-post-7.webp') }}" alt="Post Image"
                            class="img-fluid">
                        <span class="category business">Business</span>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">
                            <a href="#">Curabitur ullamcorper ultricies nisi nam eget dui etiam rhoncus</a>
                        </h2>
                        <p class="post-excerpt">
                            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
                            tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
                        </p>
                        <div class="post-meta">
                            <span>March 16, 2025</span>
                            <span class="dot">•</span>
                            <span>8 Comments</span>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-3">
                <div class="side-posts">
                    <article class="post-item side-post" data-aos="fade-left" data-aos-delay="100">
                        <div class="post-img">
                            <img src="{{ asset ('themes/frontend/assets/img/blog/blog-post-6.webp') }}" alt="Post Image"
                                class="img-fluid" loading="lazy">
                            <span class="category technology">Technology</span>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Aenean vulputate eleifend tellus aenean leo ligula porttitor</a>
                            </h3>
                            <div class="post-meta">
                                <span>March 13, 2025</span>
                                <span class="dot">•</span>
                                <span>2 Comments</span>
                            </div>
                        </div>
                    </article>

                    <article class="post-item side-post" data-aos="fade-left" data-aos-delay="200">
                        <div class="post-img">
                            <img src="{{ asset ('themes/frontend/assets/img/blog/blog-post-9.webp') }}" alt="Post Image"
                                class="img-fluid" loading="lazy">
                            <span class="category lifestyle">Lifestyle</span>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Etiam sit amet orci eget eros faucibus tincidunt duis leo</a>
                            </h3>
                            <div class="post-meta">
                                <span>March 12, 2025</span>
                                <span class="dot">•</span>
                                <span>4 Comments</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="news-posts" class="news-posts section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-4">
                <article>
                    <div class="post-img position-relative">
                        <img src="{{ asset ('themes/frontend/assets/img/blog/blog-post-1.webp') }}" alt=""
                            class="img-fluid" loading="lazy">
                        <div class="post-content">
                            <p class="post-category">Politics</p>
                            <h2 class="title">
                                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                            </h2>
                            <div class="post-meta">
                                <time datetime="2025-01-01">Jan 1, 2025</time>
                                <span class="px-2">•</span>
                                <span>No Comments</span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-4">
                <article>
                    <div class="post-img position-relative">
                        <img src="{{ asset ('themes/frontend/assets/img/blog/blog-post-2.webp') }}" alt=""
                            class="img-fluid" loading="lazy">
                        <div class="post-content">
                            <p class="post-category">Sports</p>
                            <h2 class="title">
                                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
                            </h2>
                            <div class="post-meta">
                                <time datetime="2025-06-05">Jun 5, 2025</time>
                                <span class="px-2">•</span>
                                <span>No Comments</span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-4">
                <article>

                    <div class="post-img position-relative">
                        <img src="{{ asset ('themes/frontend/assets/img/blog/blog-post-3.webp') }}" alt=""
                            class="img-fluid" loading="lazy">
                        <div class="post-content">
                            <p class="post-category">Entertainment</p>
                            <h2 class="title">
                                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et
                                    soluta</a>
                            </h2>
                            <div class="post-meta">
                                <time datetime="2025-06-22">Jun 22, 2025</time>
                                <span class="px-2">•</span>
                                <span>No Comments</span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-4">
                <article>

                    <div class="post-img position-relative">
                        <img src="{{ asset ('themes/frontend/assets/img/blog/blog-post-4.webp') }}" alt=""
                            class="img-fluid" loading="lazy">
                        <div class="post-content">
                            <p class="post-category">Sports</p>
                            <h2 class="title">
                                <a href="blog-details.html">Non rem rerum nam cum quo minus olor distincti</a>
                            </h2>
                            <div class="post-meta">
                                <time datetime="2025-06-30">Jun 30, 2025</time>
                                <span class="px-2">•</span>
                                <span>No Comments</span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-4">
                <article>

                    <div class="post-img position-relative">
                        <img src="{{ asset ('themes/frontend/assets/img/blog/blog-post-5.webp') }}" alt=""
                            class="img-fluid" loading="lazy">
                        <div class="post-content">
                            <p class="post-category">Politics</p>
                            <h2 class="title">
                                <a href="blog-details.html">Accusamus quaerat aliquam qui debitis facilis
                                    consequatur</a>
                            </h2>
                            <div class="post-meta">
                                <time datetime="2025-01-30">Jan 30, 2025</time>
                                <span class="px-2">•</span>
                                <span>No Comments</span>
                            </div>
                        </div>
                    </div>

                </article>
            </div>

            <div class="col-lg-4">
                <article>

                    <div class="post-img position-relative">
                        <img src="{{ asset ('themes/frontend/assets/img/blog/blog-post-6.webp') }}" alt=""
                            class="img-fluid" loading="lazy">
                        <div class="post-content">
                            <p class="post-category">Entertainment</p>
                            <h2 class="title">
                                <a href="blog-details.html">Distinctio provident quibusdam numquam aperiam aut</a>
                            </h2>
                            <div class="post-meta">
                                <time datetime="2025-02-14">Feb 14, 2025</time>
                                <span class="px-2">•</span>
                                <span>No Comments</span>
                            </div>
                        </div>
                    </div>

                </article>
            </div>
        </div>
    </div>
</section>


<section id="pagination-2" class="pagination-2 section">
    <div class="container">
        <nav class="d-flex justify-content-center" aria-label="Page navigation">
            <ul>
                <li>
                    <a href="#" aria-label="Previous page">
                        <i class="bi bi-arrow-left"></i>
                        <span class="d-none d-sm-inline">Previous</span>
                    </a>
                </li>

                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li class="ellipsis">...</li>
                <li><a href="#">8</a></li>
                <li><a href="#">9</a></li>
                <li><a href="#">10</a></li>

                <li>
                    <a href="#" aria-label="Next page">
                        <span class="d-none d-sm-inline">Next</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</section>

@endsection