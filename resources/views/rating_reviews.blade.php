
    @include('_header1')
    

    <style>
            .navbar-expand-xl .navbar-collapse{justify-content: end;}
			/*---------- start rating & review --------*/
		.rating_heading_container{
			text-align: center;
		}
		.rating_heading_container>div{
			display: inline-block;
			width:400px;
			position: relative;
		}
		.rating_heading_container>div>div{
			display:flex;
			width:100%;
			height: 40px;
			align-items: center;
		}
		.rating_heading_container>div>div span{
			width:100%;
			height: 2px;
			background-color: #66C68F;
			display: block;
		}
		.rating_heading_container>div>h1{
			position: absolute;
			top: 0px;
			left: 0px;
			right: 0px;
			display: inline;
			width: 310px;
			background-color: white;
			margin-left: auto;
			margin-right: auto;
			font-size: 32px;
		}
		.total_rating_container{
			width: 400px;
			border: 1px solid #E4E4E4;
			border-radius: 8px;
			text-align: center;
			padding: 25px 15px;
			height: 263px;
			margin-left: auto;
			margin-right: auto;
		}
		.total_rating_container h3{
			font-weight: 600;
			font-size: 24px;
		}
		.total_rating_box{
			margin-top:35px;
		}
		.total_rating_box i{
			color: #d3d3d3;
			font-size: 45px;
			margin-left: 10px;
			margin-right: 10px;
		}
		.total_rating_box i.active_star{
			color: #FEC923;
		}
		.total_rating_container p{
			margin-top: 35px;
			font-size: 32px;
			font-weight: bold;
		}
		.rating_table{
			border-collapse: separate;
			border-spacing: 0;
            /* width: 27rem; */
		}
		.rating_table thead tr th{
			font-style: normal;
			font-weight: 600;
			font-size: 18px;
			text-transform: capitalize;
		}

		.rating_table tr th, .rating_table tr td{
			padding: 14px 10px
		}
		.rating_table tbody tr td select{
			width:100%;
			height: 40px;
			font-style: normal;
			font-weight: 400;
			font-size: 16px;
			text-transform: capitalize;
			color: #66C68F;
			border: 1px solid #EFEFEF;
			border-radius: 6px;
		}
		.rating_table tbody tr td select option{
		   
			color: #66C68F;
		}

		.review_main_container{
			height: 670px;
			overflow-y: scroll;
			border: 1px solid #E4E4E4;
			border-radius: 8px;
			padding: 15px;
		}


		.review_main_container>.review_single_container:not(:last-child){
			border-bottom: 1px solid #E4E4E4;
			padding-bottom: 20px;
			margin-bottom: 20px;
		}
		.review_single_rating_box i{
			color: #d3d3d3;
		}
		.review_single_rating_box i.active_star{
			color: #FEC923;
		}
		.review_single_container p{
			font-style: normal;
			font-weight: 400;
			font-size: 16px;
			text-transform: capitalize;
			text-align: justify;
		}
		.review_single_container .name_container strong{
			font-style: normal;
			font-weight: 600;
			font-size: 14px;
			text-transform: capitalize;
		}


		/* .review_single_container .name_container{display: none;} */

		.review_single_container .name_container span{
			font-style: normal;
			font-weight: 400;
			font-size: 12px;
			text-transform: capitalize;
			opacity: 0.6;
		}
		@media screen and (max-width: 530px) {
			.total_rating_container{
				width:370px;
			}
			.rating_heading_container>div{
				width:360px;
			}
		}
		@media screen and (max-width: 767px) {
			.review_main_container {
				 height: auto; 
				 overflow-y: unset; 
				
			}
		}
 


		.bdr_left{border-left: 1px solid #EFEFEF;}.bdr_right{border-right: 1px solid #EFEFEF;}.bdr_bottom{border-bottom: 1px solid #EFEFEF;}.bdr_top{border-top: 1px solid #EFEFEF;}
		.border-top-left-radius{border-top-left-radius: 8px}
		.border-top-right-radius{border-top-right-radius: 8px}
		.border-bottom-left-radius{border-bottom-left-radius: 8px}
		.border-bottom-right-radius{border-bottom-right-radius: 8px}

		.review_main_container::-webkit-scrollbar-thumb{background: #888;border-radius: 20px;border: 3px solid gray;}
		.tmaopt, .catopt, .subopt{
			display: flex;
			align-items: center;
            justify-content: space-between;
            /* border: 1px solid #E4E4E4; */
            padding: 8px;
            border-radius: 10px;
            /* color: #66C68F; */
		}
		.item {
            padding: 10px 9px;
            display: flex;
            cursor: pointer;
            border-bottom: 1px solid rgb(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .TMA .item {
            padding: 10px 9px;
        }
		.TMA, .cat, .sub{
			position: absolute;
            background: #FFFFFF;
            box-shadow: 0px 0px 20px rgba(16, 8, 63, 0.09);
            border-radius: 8px;
            width: 202px;
            overflow-y: hidden;
            padding: 5px 15px 0px 10px;
            display: none;
            z-index: 999;
            margin-top: 3px;
            margin-left: -7px;
            height:139px;
            overflow-y: scroll;
		}
		.name_container span{
			margin-left: 8px;
		}
		.profimg{
			border-radius:50%;
		}
        .team{
            margin-top: 15px;
        }
        .vmore{
            margin-top: 19px;
        }
        a, .vmore{
           color:#0d9da3;
           text-decoration: none;
           cursor: pointer;
        }
        a:hover{
            text-decoration: none;
            color:#0d9da3;
        }
        .vmore i{
            margin-left: 6px;
        }
        .serv{
            margin-left: 6px;
            border: 1px solid rgba(2,2,2,0.2);
            border-radius: 11px;
            padding: 0px 11px 2px 10px;
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            text-transform: capitalize;
            opacity: 0.6;
        }
        .review_main_container::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 20px;
            border: 3px solid gray;
        }
        .review_main_container::-webkit-scrollbar {
            scrollbar-width: thin;
            width:3px;
        }
        .review_main_container::-webkit-scrollbar-track {
            background: #f1f1f1;
            margin-top: 9px;
            border-radius: 20px;
            margin-bottom: 10px;
        }
        *::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 20px;
            border: 3px solid gray;
        }
        *::-webkit-scrollbar {
            scrollbar-width: thin;
            width:3px;
        }
        *::-webkit-scrollbar-track {
            background: #f1f1f1;
            margin-top: 9px;
            border-radius: 20px;
            margin-bottom: 9px;
        }
        tr, td, th {
            border-color: #EFEFEF;
        }
        .replay {
            display: none;
            margin-top: 20px;
            margin-left: 50px;
        }
        .replay h5 {
            font-size: 17px;
        }
        .replay p {
            font-size: 14px;
        }
        .item p{
            color:#FEC923;
            padding-top: 8px;
            padding-left: 12px;
        }
        .item i.active_star {
            color: #FEC923;
        }
        .team strong{
            font-style: normal;
            font-weight: 600;
            font-size: 14px;
            text-transform: capitalize;
        }
        .prof_img_lbl {
            border: 1px solid #dddddd;
            border-radius: 50%;
            height: 30px;
            width: 30px;
            position: absolute;
            margin-left: 53px;
        }
	</style>
     

        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="rating_heading_container">
                            <div>
                                <div>
                                    <span></span>
                                </div>
                                <h1>Rating And Review</h1>
                            </div>
                        </div>
                    </div>        
                </div>
                <div class="row mt-5">
                    <div class="col-sm-12">
                        <div class="total_rating_container">
                            <h3>Craig Martha</h3>
                            <div class="total_rating_box">
                                <i class="fa fa-star active_star" aria-hidden="true"></i>
                                <i class="fa fa-star active_star" aria-hidden="true"></i>
                                <i class="fa fa-star active_star" aria-hidden="true"></i>
                                <i class="fa fa-star active_star" aria-hidden="true"></i>
                                <i class="fa fa-star active_star" aria-hidden="true"></i>
                            </div>
                            <p>134 Reviews</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="">
                            <table class="table rating_table">
                                <thead>
                                  <tr>
                                    <th class="bdr_right bdr_left bdr_top border-top-left-radius text-center" style="width:50%;">TM</th>
                                    <th class="bdr_top bdr_right border-top-right-radius  text-center">(sub)Service</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr style="line-height: 0px !important;">
                                    <td class="bdr_left  bdr_right bdr_bottom border-bottom-left-radius">
									<div class="tmaopt">
										<span>TM A</span>
										<label for="" class="prof_img_lbl">
                                            <img src="" alt="">
                                        </label>
										<i  style="font-size: 15px;font-weight: bold;" class="fa fa-angle-down"></i>
									</div>
									<ul class="TMA">
                                        <li class="item d-flex justify-content-between align-items-center">
                                            <span>Lorem Ispum</span><p>4.4</p><i class="fa fa-star active_star" aria-hidden="true"></i>
                                        </li>
                                        <li class="item d-flex justify-content-between align-items-center">
                                            <span>Lorem Ispum</span><p>4.4</p><i class="fa fa-star active_star" aria-hidden="true"></i>
                                        </li>
                                        <li class="item d-flex justify-content-between align-items-center">
                                            <span>Lorem Ispum</span><p>4.4</p><i class="fa fa-star active_star" aria-hidden="true"></i>
                                        </li>
                                        <li class="item d-flex justify-content-between align-items-center">
                                            <span>Lorem Ispum</span><p>4.4</p><i class="fa fa-star active_star" aria-hidden="true"></i>
                                        </li>
                                  	</ul>
                                    </td>
                                    <td class="bdr_right  border-bottom-right-radius">
									    <div class="subopt">
										    <span>(Sub)Service</span>
										    <i  style="font-size: 15px;font-weight: bold;" class="fa fa-angle-down"></i>
									    </div>
										<ul class="sub">
                                        <li class="item d-flex justify-content-between align-items-center">
                                            <span>Lorem Ispum</span><p>4.4</p><i class="fa fa-star active_star" aria-hidden="true"></i>
                                        </li>
                                        <li class="item d-flex justify-content-between align-items-center">
                                            <span>Lorem Ispum</span><p>4.4</p><i class="fa fa-star active_star" aria-hidden="true"></i>
                                        </li>
                                        <li class="item d-flex justify-content-between align-items-center">
                                            <span>Lorem Ispum</span><p>4.4</p><i class="fa fa-star active_star" aria-hidden="true"></i>
                                        </li>
                                  	    </ul>
                                    </td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="review_main_container">

                            <div class="review_single_container">
                                <div class="review_single_rating_box">
                                    <i class="fa fa-star active_star" aria-hidden="true"></i>
                                    <i class="fa fa-star active_star" aria-hidden="true"></i>
                                    <i class="fa fa-star active_star" aria-hidden="true"></i>
                                    <i class="fa fa-star " aria-hidden="true"></i>
                                    <i class="fa fa-star " aria-hidden="true"></i>
                                </div>

                                <p>Lorem ipsum dolor sit amet consectetur. Risus blandit dignissim et ultricies amet dui tempus. Sit leo morbi tortor turpis pellentesque neque neque lacinia eu. Malesuada orci aliquam nibh libero aliquam. Quis lacus vestibulum viverra velit. Mollis orci suspendisse molestie donec mauris ut. Sit dolor cursus neque platea enim lacus nulla.</p>

                                <div class="name_container">
                                    <strong>Craig Martha</strong> <span>2 weeks ago</span>
                                </div>
                                <div class="team">
                                    <strong>TM A</strong><span class="serv">service 1</span><span class="serv">service 2</span><span class="serv">service 3</span>
                                </div>
                                <div class="team">
                                    <strong>TM B</strong><span class="serv">service 1</span><span class="serv">service 2</span><span class="serv">service 3</span>
                                </div>
                                <div class="vmore">
                                    <a href="">View Reply</a><i class="fw-bold fa fa-angle-down"></i>
                                </div>
                                <div class="replay">
                                    <h5>Niraj</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi aliquam officia nemo distinctio, incidunt dignissimos veniam velit id ut sunt at soluta fugiat sapiente, consectetur alias vero obcaecati nihil nostrum!</p>
                                </div>
                            </div>

                            <div class="review_single_container">
                                <div class="review_single_rating_box">
                                    <i class="fa fa-star active_star" aria-hidden="true"></i>
                                    <i class="fa fa-star active_star" aria-hidden="true"></i>
                                    <i class="fa fa-star active_star" aria-hidden="true"></i>
                                    <i class="fa fa-star active_star" aria-hidden="true"></i>
                                    <i class="fa fa-star active_star" aria-hidden="true"></i>
                                </div>

                                <p>Lorem ipsum dolor sit amet consectetur. Risus blandit dignissim et ultricies amet dui tempus. Sit leo morbi tortor turpis pellentesque neque neque lacinia eu. Malesuada orci aliquam nibh libero aliquam. Quis lacus vestibulum viverra velit. Mollis orci suspendisse molestie donec mauris ut. Sit dolor cursus neque platea enim lacus nulla.</p>

                                <div class="name_container">
                                    <strong>Craig Martha</strong> <span>a month ago</span>
                                </div>
                                <div class="team">
                                    <strong>TM A</strong><span class="serv">service 1</span><span class="serv">service 2</span><span class="serv">service 3</span>
                                </div>
                                <div class="vmore">
                                    <a href="">View Reply</a><i class="fw-bold fa fa-angle-down"></i>
                                </div>
                            </div>

                            <div class="review_single_container">
                                <div class="review_single_rating_box">
                                    <i class="fa fa-star active_star" aria-hidden="true"></i>
                                    <i class="fa fa-star active_star" aria-hidden="true"></i>
                                    <i class="fa fa-star active_star" aria-hidden="true"></i>
                                    <i class="fa fa-star active_star" aria-hidden="true"></i>
                                    <i class="fa fa-star active_star" aria-hidden="true"></i>
                                </div>

                                <p>Lorem ipsum dolor sit amet consectetur. Risus blandit dignissim et ultricies amet dui tempus. Sit leo morbi tortor turpis pellentesque neque neque lacinia eu. Malesuada orci aliquam nibh libero aliquam. Quis lacus vestibulum viverra velit. Mollis orci suspendisse molestie donec mauris ut. Sit dolor cursus neque platea enim lacus nulla.</p>
                                <div class="name_container">
                                    <strong>Craig Martha</strong> <span>2 months ago</span>
                                </div>
                                <div class="team">
                                    <strong>TM A</strong><span class="serv">service 1</span><span class="serv">service 2</span><span class="serv">service 3</span>
                                </div>
                                <div class="vmore">
                                    <a href="">View Reply</a><i class="fw-bold fa fa-angle-down"></i>
                                </div>
                            </div>

                            <div class="review_single_container">
                                <div class="review_single_rating_box">
                                    <i class="fa fa-star active_star" aria-hidden="true"></i>
                                    <i class="fa fa-star active_star" aria-hidden="true"></i>
                                    <i class="fa fa-star active_star" aria-hidden="true"></i>
                                    <i class="fa fa-star active_star" aria-hidden="true"></i>
                                    <i class="fa fa-star active_star" aria-hidden="true"></i>
                                </div>

                                <p>Lorem ipsum dolor sit amet consectetur. Risus blandit dignissim et ultricies amet dui tempus. Sit leo morbi tortor turpis pellentesque neque neque lacinia eu. Malesuada orci aliquam nibh libero aliquam. Quis lacus vestibulum viverra velit. Mollis orci suspendisse molestie donec mauris ut. Sit dolor cursus neque platea enim lacus nulla.</p>

                                <div class="name_container">
                                    <strong>Craig Martha</strong> <span>2 months ago</span>
                                </div>
                                <div class="team">
                                    <strong>TM A</strong><span class="serv">service 1</span><span class="serv">service 2</span><span class="serv">service 3</span>
                                </div>
                                <div class="vmore">
                                    <a href="">View Reply</a><i class="fw-bold fa fa-angle-down"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    @include('salon/footer')
    
	<script>
document.addEventListener("DOMContentLoaded", function() {
  const toggleBtn = document.querySelector(".tmaopt i");
  const list = document.querySelector(".TMA");

  toggleBtn.addEventListener("click", function() {
    if (list.style.display === "block") {
      list.style.display = "none";
      toggleBtn.classList.remove("fa-angle-up");
      toggleBtn.classList.add("fa-angle-down");
    } else {
      list.style.display = "block";
      toggleBtn.classList.remove("fa-angle-down");
      toggleBtn.classList.add("fa-angle-up");
    }
  });

  const items = document.querySelectorAll(".TMA li");
  items.forEach(function(item) {
    item.addEventListener("click", function() {
      list.style.display = "none";
      toggleBtn.classList.remove("fa-angle-up");
      toggleBtn.classList.add("fa-angle-down");
    });
  });
});

$(document).ready(function() {
    $(".vmore").click(function() {
        $(this).next(".replay").toggle();
        $(this).find(".fa").toggleClass("fa-angle-down fa-angle-up");
    });
});

// document.addEventListener("DOMContentLoaded", function() {
//   const toggleBtn = document.querySelector(".catopt i");
//   const list = document.querySelector(".cat");

//   toggleBtn.addEventListener("click", function() {
//     if (list.style.display === "block") {
//       list.style.display = "none";
//       toggleBtn.classList.remove("fa-angle-up");
//       toggleBtn.classList.add("fa-angle-down");
//     } else {
//       list.style.display = "block";
//       toggleBtn.classList.remove("fa-angle-down");
//       toggleBtn.classList.add("fa-angle-up");
//     }
//   });

//   const items = document.querySelectorAll(".cat li");
//   items.forEach(function(item) {
//     item.addEventListener("click", function() {
//       list.style.display = "none";
//       toggleBtn.classList.remove("fa-angle-up");
//       toggleBtn.classList.add("fa-angle-down");
//     });
//   });
// });

document.addEventListener("DOMContentLoaded", function() {
  const toggleBtn = document.querySelector(".subopt i");
  const list = document.querySelector(".sub");

  toggleBtn.addEventListener("click", function() {
    if (list.style.display === "block") {
      list.style.display = "none";
      toggleBtn.classList.remove("fa-angle-up");
      toggleBtn.classList.add("fa-angle-down");
    } else {
      list.style.display = "block";
      toggleBtn.classList.remove("fa-angle-down");
      toggleBtn.classList.add("fa-angle-up");
    }
  });

  const items = document.querySelectorAll(".sub li");
  items.forEach(function(item) {
    item.addEventListener("click", function() {
      list.style.display = "none";
      toggleBtn.classList.remove("fa-angle-up");
      toggleBtn.classList.add("fa-angle-down");
    });
  });
});
	</script>
  
    </body>
</html>