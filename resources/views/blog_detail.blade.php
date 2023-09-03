
@include('_header1')
    

<style>
   .navbar-expand-xl .navbar-collapse{justify-content: end;}
   /*---------- start blog detail --------*/
   .blog_main_container p{
    text-align: justify;
}
.blog_main_container>h1{
    font-style: normal;
    font-weight: 700;
    font-size: 32px;
    text-transform: capitalize;
    margin-bottom: 20px;
}
.blog_operations_container{
    display: flex;
}
.blog_operations_container figure{
    margin-right: 50px;
}
.blog_operations_container figure img{
    margin-right: 10px;
}
.blog_operations_container figure i{
    color: #66C68F;
    margin-right: 10px;
    font-size: 20px;
}
.blog_operations_container figure span{
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    text-transform: capitalize;
    opacity: 0.9;
}

.blog_content_container>h2{
    font-style: normal;
    font-weight: 700;
    font-size: 24px;
    text-transform: capitalize;
}

.blog_comment_container{
    border: 1px solid #EFEFEF;
    box-shadow: 0px 0px 30px rgba(16, 8, 63, 0.09);
    border-radius: 8px;
    padding:20px 15px;
}
.blog_comment_container>h2{
    font-style: normal;
    font-weight: 700;
    font-size: 24px;
    line-height: 32px;
    text-transform: capitalize;
    margin-bottom: 25px;
}
.my_media_object{
    width:100%;
    overflow: hidden;
}
.my_media_object_left{
    float: left;
    width: 35px;
}
.my_media_object_left img{
    width:100%;
}
.my_media_object_right{
    float:right;
    width: calc(100% - 35px);
    padding-left:15px;
}
.my_media_object_right>h6{
    font-style: normal;
    font-weight: 600;
    font-size: 14px;
    text-transform: capitalize;
}
.my_media_object_right>h6 span{
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    text-transform: capitalize;
    opacity: 0.6;
}



.blog_search_container{
    position: relative;
    margin-top: 55px;
    border: 1px solid #EFEFEF;
    box-shadow: 0px 0px 20px rgb(16 8 63 / 9%);
    border-radius: 8px;
    overflow: hidden;
}

.blog_search_container input{
    width: 100%;
    height: 60px;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 21px;
    text-transform: capitalize;
    padding-left: 15px;
    border: none;
    
    border: 1px solid #EFEFEF;
    box-shadow: 0px 0px 20px rgba(16, 8, 63, 0.09);
    border-radius: 8px;
}
.blog_search_container button{
    position: absolute;
    right: 0px;
    background-color: #66C68F;
    width: 60px;
    height: 100%;
    border: none;
}
.blog_search_container button i{
    color: white!important;
    font-size: 25px;
    
}
.blog_category_container{
    width:100%;
    margin-top:25px;
    border: 1px solid #EFEFEF;
    box-shadow: 0px 0px 20px rgba(16, 8, 63, 0.09);
    border-radius: 8px;
    padding: 20px 15px;
}
.blog_category_container>h4{
    font-style: normal;
    font-weight: 700;
    font-size: 24px;
    text-transform: capitalize;
    position: relative;
    margin-bottom: 25px;
}
.blog_category_container>h4 span{
    display: inline-block;
    width: 60px;
    height: 3px;
    background-color: #66C68F;
    left: 0px;
    position: absolute;
    bottom: -8px;
}
.blog_category_container a{
    background: #F4F4F4;
    border-radius: 8px;
    font-size: 12px;
    text-align: center;
    color: black;
    text-decoration: none;
    padding: 7px 15px;
    margin-bottom: 8px;
    display: inline-block;
    font-weight: bold;
    text-transform: capitalize;
}
.blog_subscribe_container{
    width:100%;
    margin-top:25px;
    border: 1px solid #EFEFEF;
    box-shadow: 0px 0px 20px rgba(16, 8, 63, 0.09);
    border-radius: 8px;
    padding: 20px 15px 35px 15px;
}
.blog_subscribe_container>h4{
    font-style: normal;
    font-weight: 700;
    font-size: 24px;
    text-transform: capitalize;
    position: relative;
    margin-bottom: 25px;
}
.blog_subscribe_container>h4 span{
    display: inline-block;
    width: 60px;
    height: 3px;
    background-color: #66C68F;
    left: 0px;
    position: absolute;
    bottom: -8px;
}
.subscribe_form{
    text-align: center;
}
.subscribe_form input[type="email"]{
    width: 100%;
    border: none;
    border-bottom: 2px solid rgb(197 197 197);
    margin-top: 18px;
    margin-bottom: 40px;
}
.subscribe_form button{
    width: 234px;
    height: 50px;
    background: #66C68F;
    box-shadow: 0px 0px 20px rgba(16, 8, 63, 0.09);
    border-radius: 24px;
    border:none;
    color: white;

    font-style: normal;
    font-weight: 600;
    font-size: 16px;
    text-transform: capitalize;
}
.blog_more_container{
    width:100%;
    margin-top:25px;
    border: 1px solid #EFEFEF;
    box-shadow: 0px 0px 20px rgba(16, 8, 63, 0.09);
    border-radius: 8px;
    padding: 20px 15px 35px 15px;
}
.blog_more_container>h4{
    font-style: normal;
    font-weight: 700;
    font-size: 24px;
    text-transform: capitalize;
    position: relative;
    margin-bottom: 25px;
}
.blog_more_container>h4 span{
    display: inline-block;
    width: 60px;
    height: 3px;
    background-color: #66C68F;
    left: 0px;
    position: absolute;
    bottom: -8px;
}
.my_media_object_for_more_blog{
    width:100%;
    overflow: hidden;
}
.my_media_object_for_more_blog_left{
    float: left;
    width: 100px;
}
.my_media_object_for_more_blog_left img{
    width:100%;
}
.my_media_object_for_more_blog_right{
    float:right;
    width: calc(100% - 100px);
    padding-left:15px;
}
.my_media_object_for_more_blog_right>h6{
    font-style: normal;
    font-weight: 600;
    font-size: 14px;
    text-transform: capitalize;
    margin-bottom: 0px;
}
.my_media_object_for_more_blog_right>h6 span{
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    text-transform: capitalize;
    opacity: 0.6;
}
.my_media_object_for_more_blog_right>p{
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    text-transform: capitalize;
}

@media screen and (max-width: 530px) {
    .blog_operations_container figure{
        margin-right: 10px;
    }
    .blog_operations_container figure span {
        display: block;
    }
}
@media screen and (max-width: 650px) {
    .blog_operations_container figure{
        margin-right: 20px;
    }
}
@media screen and (max-width: 1200px) {
    .blog_operations_container figure{
        margin-right: 20px;
    }
}

                
</style>

        <section class="mt-5">
            <div class="container-lg">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog_main_container">
                            <h1>Sculpted Face Stick</h1>
                            <figure>
                                <img src="public/images/blog/blog_main.png" class="img-fluid">
                            </figure>
                            <div class="blog_operations_container">
                                <figure>
                                    <img src="public/images/blog/operation1.png"> 
                                    <span>27 mAR, 2023</span>
                                </figure>
                                <figure>
                                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                    <span>By admin</span>
                                </figure>
                                <figure>
                                    <img src="public/images/blog/operation3.png">
                                    <span>23k</span>
                                </figure>
                                <figure>
                                    <img src="public/images/blog/operation4.png">
                                    <span>1.1k</span>
                                </figure>
                                <figure>
                                    <img src="public/images/blog/operation5.png">
                                    <span>570</span>
                                </figure>
                            </div>
                            <div class="blog_content_container">
                                <h2>Ultimate Color Collection</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.L</p>
                                <figure>
                                    <img src="public/images/blog/blog_second.jpg" class="img-fluid" />
                                </figure>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            </div>
                            <div class="blog_comment_container">

                                <h2>Recent comments</h2>

                                <div class="my_media_object">
                                    <div class="my_media_object_left">
                                        <figure>
                                            <img src="public/images/blog/blog_comment1.png">
                                        </figure>
                                    </div>
                                    <div class="my_media_object_right">
                                        <h6>Craig Martha <span>31 Mar 2023</span></h6>
                                        <p>Lorem ipsum dolor sit amet consectetur. Risus blandit dignissim et ultricies amet dui tempus. Sit leo morbi tortor turpis pellentesque neque neque lacinia eu. Malesuada orci aliquam nibh libero aliquam. Quis lacus vestibulum viverra velit. Mollis orci suspendisse molestie donec mauris ut. Sit dolor cursus neque platea enim lacus nulla.</p>
                                    </div>
                                </div>

                                <div class="my_media_object">
                                    <div class="my_media_object_left">
                                        <figure>
                                            <img src="public/images/blog/blog_comment2.png">
                                        </figure>
                                    </div>
                                    <div class="my_media_object_right">
                                        <h6>Craig Martha <span>31 Mar 2023</span></h6>
                                        <p>Lorem ipsum dolor sit amet consectetur. Risus blandit dignissim et ultricies amet dui tempus. Sit leo morbi tortor turpis pellentesque neque neque lacinia eu.</p>
                                    </div>
                                </div>

                                <div class="my_media_object">
                                    <div class="my_media_object_left">
                                        <figure>
                                            <img src="public/images/blog/blog_comment3.png">
                                        </figure>
                                    </div>
                                    <div class="my_media_object_right">
                                        <h6>Craig Martha <span>31 Mar 2023</span></h6>
                                        <p>Lorem ipsum dolor sit amet consectetur. Risus blandit dignissim et ultricies amet dui tempus. Sit leo morbi tortor turpis pellentesque neque neque lacinia eu. Malesuada orci aliquam nibh libero aliquam. Quis lacus vestibulum viverra velit. Mollis orci suspendisse molestie donec mauris ut. Sit dolor cursus neque platea enim lacus nulla. Lorem ipsum dolor sit amet consectetur. Risus blandit dignissim et ultricies amet dui tempus. Sit leo morbi tortor turpis pellentesque neque neque lacinia eu. Malesuada orci aliquam nibh libero aliquam. Quis lacus vestibulum viverra velit. Mollis orci suspendisse molestie donec mauris ut. Sit dolor cursus neque platea enim lacus nulla.</p>
                                    </div>
                                </div>

                                <div class="my_media_object">
                                    <div class="my_media_object_left">
                                        <figure>
                                            <img src="public/images/blog/blog_comment4.png">
                                        </figure>
                                    </div>
                                    <div class="my_media_object_right">
                                        <h6>Craig Martha <span>31 Mar 2023</span></h6>
                                        <p>Lorem ipsum dolor sit amet consectetur. Risus blandit dignissim et ultricies amet dui tempus. Sit leo morbi tortor turpis pellentesque neque neque lacinia eu.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog_sidebar">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="blog_search_container">
                                        <input type="text" placeholder="Search Here.." />
                                        <button>
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="blog_category_container">
                                        <h4>Blog categories  <span class="                  bottom_line"></span>
                                        </h4>
                                        <a href="javascript:void(0)">Hair Care</a>
                                        <a href="javascript:void(0)">Lifestyle</a>
                                        <a href="javascript:void(0)">Client Stories</a>
                                        <a href="javascript:void(0)">DIY</a>
                                        <a href="javascript:void(0)">Industry News</a>
                                        <a href="javascript:void(0)">Fashion</a>
                                        <a href="javascript:void(0)">Bridal</a>
                                        <a href="javascript:void(0)">Color</a>
                                        <a href="javascript:void(0)">Product Reviews</a>
                                        <a href="javascript:void(0)">Hairstyle Inspiration</a>
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-sm-12">
                                    <div class="blog_subscribe_container">
                                        <h4>Subscribe to Blog  <span class="                  bottom_line"></span>
                                        </h4>
                                        
                                        <form class="subscribe_form">
                                            <input type="email" placeholder="Email Address">
                                            <button type="submit">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-sm-12">
                                    <div class="blog_more_container">
                                        <h4>More Blog  <span class="                  bottom_line"></span>
                                        </h4>
                                        
                                       <div class="my_media_object_for_more_blog">
                                            <div class="my_media_object_for_more_blog_left">
                                                <figure>
                                                    <img src="public/images/blog/more_blog1.jpg">
                                                </figure>
                                            </div>
                                            <div class="my_media_object_for_more_blog_right">
                                                <h6><span>31 Mar 2023</span></h6>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            </div>
                                        </div>

                                        <div class="my_media_object_for_more_blog">
                                            <div class="my_media_object_for_more_blog_left">
                                                <figure>
                                                    <img src="public/images/blog/more_blog2.jpg">
                                                </figure>
                                            </div>
                                            <div class="my_media_object_for_more_blog_right">
                                                <h6><span>31 Mar 2023</span></h6>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            </div>
                                        </div>

                                        <div class="my_media_object_for_more_blog">
                                            <div class="my_media_object_for_more_blog_left">
                                                <figure>
                                                    <img src="public/images/blog/more_blog3.jpg">
                                                </figure>
                                            </div>
                                            <div class="my_media_object_for_more_blog_right">
                                                <h6><span>31 Mar 2023</span></h6>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            </div>
                                        </div>
                                        <div class="my_media_object_for_more_blog">
                                            <div class="my_media_object_for_more_blog_left">
                                                <figure>
                                                    <img src="public/images/blog/more_blog4.jpg">
                                                </figure>
                                            </div>
                                            <div class="my_media_object_for_more_blog_right">
                                                <h6><span>31 Mar 2023</span></h6>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-sm-12">
                                    <div class="blog_category_container">
                                        <h4>Tags  <span class="                  bottom_line"></span>
                                        </h4>
                                        <a href="javascript:void(0)">hair-cutting</a>
                                        <a href="javascript:void(0)">colouring and styling</a>
                                        <a href="javascript:void(0)">tanning</a>
                                        <a href="javascript:void(0)">massages</a>
                                        <a href="javascript:void(0)">nail treatments</a>
                                        <a href="javascript:void(0)">facials</a>
                                        <a href="javascript:void(0)">skin care treatments</a>
                                        <a href="javascript:void(0)">Hair color and perm</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
             </div>
        </section>

    @include('salon/footer')
    
    </script>

  
    </body>
</html>