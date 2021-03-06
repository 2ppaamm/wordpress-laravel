@include ('frontheader')
<!-- begin:content -->
<section id="content">
    <div class="container">
        <div class="row container-post">
            @foreach($wpposts as $post)
                @if($post->post_status=='publish')
                <!-- begin:article -->
                <div class="col-md-4 col-sm-6">
                    <div class="post-container">
                        <div class="post-content no-padding">
                            @foreach($post->subposts as $imagepost)
                                @if($imagepost->post_type =='attachment')
                                    <img src="{{$imagepost->guid}}" alt="$imagepost->post_title">
                                @endif
                            @endforeach
                        <div class="post-content">
                            <div class="heading-title heading-small">
                                <h2><a href={{URL::to('wpposts/'.$post->ID)}}>{{$post->post_title}}</a></h2>
                            </div>

                            <div class="post-meta">
                                <span>By <a href={{URL::to('wpusers/'.$post->author->ID)}} title="Posts by {{$post->author->display_name}} " rel="author">{{$post->author->display_name}}</a></span>
                                <span>On {{$post->post_date}}</span>
                                <span>In <a href="#">Story {{$post->taxonomy}}</a></span>
                            </div>
                            <p>{{$post->post_excerpt}}</p>
                            <div class="post-link">
                                <a href={{URL::to('wpposts/'.$post->ID)}}><span>Read more</span></a>
                            </div>
                        </div>
                        </div>
                        <div class="post-atribut">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href="#"><span><i class="fa fa-heart"></i> 2000</span></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href="#"><span><i class="fa fa-comments"></i> 400</span></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href="#"><span><i class="fa fa-eye"></i> 2500</span></a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                @endif
            @endforeach
            <!-- break -->
            <div class="col-md-4 col-sm-6">
                <div class="post-container">
                    <div class="post-content no-padding">
                        <img src="img/img01.jpg" alt="danish personal blog template">
                    </div>
                    <div class="post-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                    <div class="post-atribut">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href="#"><span><i class="fa fa-heart"></i> 2000</span></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href="#"><span><i class="fa fa-comments"></i> 400</span></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href="#"><span><i class="fa fa-eye"></i> 2500</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- break -->
            <div class="col-md-4 col-sm-6">
                <div class="post-container">
                    <div class="post-content">
                        <img src="img/img02.jpg" alt="danish personal blog template">
                        <div class="heading-title heading-small">
                            <h2><a href="#">This is sample post text with featured image</a></h2>
                        </div>
                        <div class="post-meta">
                            <span>By <a href="#" title="Posts by admin" rel="author">Admin</a></span>
                            <span>On September 11, 2014</span>
                            <span>In <a href="#">Story</a></span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
                        <div class="post-link">
                            <a href="#"><span>Read more</span></a>
                        </div>
                    </div>
                    <div class="post-atribut">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href="#"><span><i class="fa fa-heart"></i> 2000</span></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href="#"><span><i class="fa fa-comments"></i> 400</span></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href="#"><span><i class="fa fa-eye"></i> 2500</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- break -->
            <div class="col-md-4 col-sm-6">
                <div class="post-container">
                    <div class="post-content">
                        <blockquote>
                            <p>Dikehidupan manusia itu memang banyak usaha yang tidak membuahkan hasil. Usaha mendapatkan cintamu misalnya.. </p>
                            <small>Bardiman</small>
                        </blockquote>
                    </div>
                    <div class="post-atribut">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href="#"><span><i class="fa fa-heart"></i> 2000</span></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href="#"><span><i class="fa fa-comments"></i> 400</span></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href="#"><span><i class="fa fa-eye"></i> 2500</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- break -->
            <div class="col-md-4 col-sm-6">
                <div class="post-container">
                    <div class="post-content">
                        <img src="img/img04.jpg" alt="danish personal blog template">
                        <p>This is sample post image caption</p>
                        <div class="post-link">
                            <a href="#"><span>Read more</span></a>
                        </div>
                    </div>
                    <div class="post-atribut">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href="#"><span><i class="fa fa-heart"></i> 2000</span></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href="#"><span><i class="fa fa-comments"></i> 400</span></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href="#"><span><i class="fa fa-eye"></i> 2500</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- break -->
            <div class="col-md-4 col-sm-6">
                <div class="post-container">
                    <div class="post-content">
                        <div class="post-meta">
                            <span>By <a href="#" title="Posts by admin" rel="author">Admin</a></span>
                            <span>On September 11, 2014</span>
                            <span>In <a href="#">Story</a></span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat...</p>
                        <div class="post-link">
                            <a href="#"><span>Read more</span></a>
                        </div>
                    </div>
                    <div class="post-atribut">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href="#"><span><i class="fa fa-heart"></i> 2000</span></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href="#"><span><i class="fa fa-comments"></i> 400</span></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href="#"><span><i class="fa fa-eye"></i> 2500</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- break -->
        </div>
        <!-- end:article -->

    </div>
</section>
<!-- end:content -->
@include ('footer')