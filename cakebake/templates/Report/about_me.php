<main>
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 ">
					<div class="breadcrumbs mb-4"><?= $this->Html->link(__("Home"),['action' => "/"]) ?>
						<span class="mx-1">/</span> <?= $this->Html->link(__("About"),['action' => "about-me"]) ?>
					</div>
				</div>
				<div class="col-lg-8 mx-auto mb-5 mb-lg-0">
					<img loading="lazy" decoding="async" src="<?= $baseurl ?>webroot/img/author.jpg" class="img-fluid w-100 mb-4" alt="Author Image">
					<h1 class="mb-4">Hootan Safiyari</h1>
					<div class="content">
						<p>Hello, I&rsquo;m Hootan Safiyari. A Content writter, Developer and Story teller. Working as a Content writter at CoolTech Agency. Quam nihil enim maxime corporis cumque totam aliquid nam sint inventore optio modi neque laborum officiis necessitatibus, facilis placeat pariatur! Voluptatem, sed harum pariatur adipisci voluptates voluptatum cumque, porro sint minima similique magni perferendis fuga! Optio vel ipsum excepturi tempore reiciendis id quidem? Vel in, doloribus debitis nesciunt fugit sequi magnam accusantium modi neque quis, vitae velit, pariatur harum autem a! Velit impedit atque maiores animi possimus asperiores natus repellendus excepturi sint architecto eligendi non, omnis nihil. Facilis, doloremque illum. Fugit optio laborum minus debitis natus illo perspiciatis corporis voluptatum rerum laboriosam.</p>
						<blockquote>
							<p>Facilis, doloremque illum. Fugit optio laborum minus debitis natus illo perspiciatis corporis voluptatum rerum laboriosam.</p>
						</blockquote>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nihil enim maxime corporis cumque totam aliquid nam sint inventore optio modi neque laborum officiis necessitatibus, facilis placeat pariatur! Voluptatem, sed harum pariatur adipisci voluptates voluptatum cumque, porro sint minima similique magni perferendis fuga! Optio vel ipsum excepturi tempore reiciendis id quidem.</p>
					</div>
				</div>
        <div class="col-lg-4">
  <div class="widget-blocks">
    <div class="row">
     
      <div class="col-lg-12 col-md-6">
        <div class="widget">
          <h2 class="section-title mb-3">Recommended</h2>
          <div class="widget-body">
            <div class="widget-list">
              <article class="card mb-4">
                <div class="card-image">
                  <div class="post-info"> <span class="text-uppercase">1 minutes read</span>
                  </div>
                  <img loading="lazy" decoding="async" src="<?= $baseurl ?>webroot/img/post/post-9.jpg" alt="Post Thumbnail" class="w-100">
                </div>
                <div class="card-body px-0 pb-1">
                  <h3><a class="post-title post-title-sm"
                      href="article.html">Portugal and France Now
                      Allow Unvaccinated Tourists</a></h3>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor …</p>
                  <div class="content"> <a class="read-more-btn" href="article.html">Read Full Article</a>
                  </div>
                </div>
              </article>
              <a class="media align-items-center" href="article.html">
                <img loading="lazy" decoding="async" src="<?= $baseurl ?>webroot/img/post/post-2.jpg" alt="Post Thumbnail" class="w-100">
                <div class="media-body ml-3">
                  <h3 style="margin-top:-5px">These Are Making It Easier To Visit</h3>
                  <p class="mb-0 small">Heading Here is example of hedings. You can use …</p>
                </div>
              </a>
              <a class="media align-items-center" href="article.html"> <span class="image-fallback image-fallback-xs">No Image Specified</span>
                <div class="media-body ml-3">
                  <h3 style="margin-top:-5px">No Image specified</h3>
                  <p class="mb-0 small">Lorem ipsum dolor sit amet, consectetur adipiscing …</p>
                </div>
              </a>
              <a class="media align-items-center" href="article.html">
                <img loading="lazy" decoding="async" src="<?= $baseurl ?>webroot/img/post/post-5.jpg" alt="Post Thumbnail" class="w-100">
                <div class="media-body ml-3">
                  <h3 style="margin-top:-5px">Perfect For Fashion</h3>
                  <p class="mb-0 small">Lorem ipsum dolor sit amet, consectetur adipiscing …</p>
                </div>
              </a>
              <a class="media align-items-center" href="article.html">
                <img loading="lazy" decoding="async" src="<?= $baseurl ?>webroot/img/post/post-9.jpg" alt="Post Thumbnail" class="w-100">
                <div class="media-body ml-3">
                  <h3 style="margin-top:-5px">Record Utra Smooth Video</h3>
                  <p class="mb-0 small">Lorem ipsum dolor sit amet, consectetur adipiscing …</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-6">
        <div class="widget">
          <h2 class="section-title mb-3">Categories</h2>
          <div class="widget-body">
            <ul class="widget-list">
             <?php foreach ($categories as $category): ?>
               <li><a href="<?= \Cake\Routing\Router::Url(['controller' =>'Report','action' =>'blog-category',$category->id])?>"><?= $category->category ?><span class="ml-auto">(3)</span></a>
               </li>
              <?php endforeach  ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
			</div>
		</div>
	</section>
</main>