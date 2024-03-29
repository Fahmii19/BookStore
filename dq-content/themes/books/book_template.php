<!-- book_template.php -->
<div class="isotope-container row">
    <div class="item col-md-4 col-lg-3 my-4">
        <div class="card position-relative">
            <a href="<?php echo seobooks($item['id'], $item['title']); ?>">
                <img src="<?php echo $item['poster']; ?>" class="img-fluid rounded-4" alt="<?php echo $item['title']; ?>" />
            </a>
            <div class="card-body p-0">
                <a href="<?php echo seobooks($item['id'], $item['title']); ?>">
                    <h3 class="card-title pt-4 m-0"><?php echo $item['title']; ?></h3>
                </a>
                <div class="card-text">
                    <span class="rating secondary-font">
                    </span>
                    <h3 class="secondary-font text-primary"><?php echo $item['author']; ?></h3>

                </div>
            </div>
        </div>
    </div>
</div>