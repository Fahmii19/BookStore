<?php
/**
* @author deqila.id
* @copyright 2020
*/
get_header();
?>
        <meta itemprop="image" content="<?php echo $single['images'] ;?>"/>
        <meta property="og:image" content="<?php echo $single['images'] ;?>"/>
        <meta name="twitter:image" content="<?php echo $single['images'] ;?>"/>
        <?php include(ABSPATH . THMPATH . $options['theme_name'] . '/header2.php')?>
        <section class="white box-shadow">
            <div class="container">
                <div class="document">
                    <div class="row">
                        <div class="col-sm-3 col-4">
                            <!-- cover -->
                            <div class="cover">
                                <div class="cover__wrapper">
                                    <a href="/rc" class="cover__img" style="background-image:url( <?php echo $single['poster']?> );">
                                        <img src="<?php echo get_webinfo('theme_url') ;?>img/doc-cover-shadow.png" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="document__actions d-none d-sm-block">
                                <!-- actions list -->
                                <ul class="actions-list">
                                    <li>
                                        <button class="js-trigger" data-trigger="action-feature">
                                            <i class="typcn typcn-bookmark"></i>
                                            <span data-i18n="_.save-for-later">Save for later</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="js-trigger" data-trigger="action-feature">
                                            <i class="typcn typcn-th-list"></i>
                                            <span data-i18n="_.add-to-list">Add to list</span>
                                        </button>
                                    </li>
                                </ul>
                                <?php if ( $options['300x250'] == 'true' ): ?>
                                    <div class="d-block" style="margin: 15px auto;overflow:hidden;text-align:center;">    
                                    <?php $adspath = ABSPATH . THMPATH . $options['theme_name'] . '/ads/300x250.php'; $adscode = file_get_contents($adspath,NULL); if(isset($adscode) and !empty($adscode)): ?><?php echo $adscode; ?><?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-sm-8 offset-sm-1 d-none d-sm-block">
                            <!-- info -->
                            <h1 class="document__title"><?php echo $single['title']?></h1>
                            <h2><span class="document__subtitle"><?php echo $single['works_count']?> Published Books</span></h2>
                            <!-- main buttons -->
                            <div class="btn--wrapper">
                                <a href="/rc" class="btn text-capitalize"><i class="typcn typcn-book"></i> <span data-i18n="_.read">Read Now</span></a>
                                <a href="" class="btn btn--outline js-trigger text-capitalize" data-trigger="download"><i class="typcn typcn-download"></i> <span data-i18n="_.download">Download Now</span></a>
                            </div>
                            <!-- description -->
                            <article class="document__desc js-readmore"><?php if($single['description']){echo $single['description'];}?></article>
                            <?php if ( $options['468x60'] == 'true' ): ?>
                                <div class="d-block mt-5" style="overflow:hidden;">   
                                <?php $adspath = ABSPATH . THMPATH . $options['theme_name'] . '/ads/468x60.php'; $adscode = file_get_contents($adspath,NULL); if(isset($adscode) and !empty($adscode)): ?><?php echo $adscode; ?><?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-8 d-block d-sm-none">
                            <!-- info -->
                            <h1 class="document__title"><?php echo $single['title']?></h1>
                            <h2><span class="document__subtitle"><?php echo $single['works_count']?> Published Books</span></h2>                
                        </div>
                    </div>
                    <div class="row d-flex d-sm-none">
                        <div class="col-12">
                            <!-- main buttons -->
                            <div class="btn--wrapper">
                                <a href="/rc" class="btn text-capitalize"><i class="typcn typcn-book"></i> <span data-i18n="_.read">Read</span></a>
                                <a href="" class="btn btn--outline js-trigger text-capitalize" data-trigger="download"><i class="typcn typcn-download"></i> <span data-i18n="_.download">Download</span></a>
                            </div>
                            <div class="document__actions">
                                <!-- actions list -->
                                <ul class="actions-list">
                                    <li>
                                        <button class="js-trigger" data-trigger="action-feature">
                                            <i class="typcn typcn-bookmark"></i>
                                            <span data-i18n="_.save-for-later">Save for later</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="js-trigger" data-trigger="action-feature">
                                            <i class="typcn typcn-th-list"></i>
                                            <span data-i18n="_.add-to-list">Add to list</span>
                                        </button>
                                    </li>
                                </ul>
                                <?php if ( $options['300x250'] == 'true' ): ?>
                                    <div class="d-block" style="margin: 15px auto;overflow:hidden;text-align:center;">    
                                    <?php $adspath = ABSPATH . THMPATH . $options['theme_name'] . '/ads/300x250.php'; $adscode = file_get_contents($adspath,NULL); if(isset($adscode) and !empty($adscode)): ?><?php echo $adscode; ?><?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <!-- description -->
                            <article class="document__desc js-readmore"><?php if($single['description']){echo $single['description'];}?></article>
                            <?php if ( $options['468x60'] == 'true' ): ?>
                                <div class="d-block mt-5" style="overflow:hidden;">   
                                <?php $adspath = ABSPATH . THMPATH . $options['theme_name'] . '/ads/468x60.php'; $adscode = file_get_contents($adspath,NULL); if(isset($adscode) and !empty($adscode)): ?><?php echo $adscode; ?><?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row">
                    <div class="col-12">
                        <h3 class="heading-small mt-5"><span data-i18n="books.more-books-from">Popular Books by <?php echo $single['title']?></span></h3>
                        <div class="carrousel carrousel--author">
                            <div class="carrousel__fiveup owl-carousel">
                                <?php if (is_array($single['similar'])) { foreach((array)$single['similar'] as $item) {?>
                                <div class="thumb">
                                    <div class="thumb__cover">
                                        <div class="cover">
                                            <div class="cover__wrapper">
                                                <a href="<?php echo seobooks($item['id'],$item['title']);?>" class="cover__img" style="background-image:url(<?php echo $item['poster'];?> );">
                                                    <img src="<?php echo get_webinfo('theme_url') ;?>img/doc-cover-shadow.png" class="img-fluid">
                                                </a>
                                            </div>
                                        </div>    
                                    </div>
                                    <a href="<?php echo seobooks($item['id'],$item['title']);?>" class="thumb__info">
                                        <h1 class="document__title"><?php echo $item['title'];?></h1>
                                        <h2 class="document__subtitle"><?php echo $item['author'];?></h2>
                                        <div class="document__rating">
                                            <div class="rating">
                                                <div class='rating__stars'>
                                                  <div class='rating__stars__wrapper'>
                                                    <span class='rating__stars__icons' style="width:89.2%"></span>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>    
                                    </a>
                                </div>
                                <?php } }else{ $Books = unserialize( deqila_data_BooksAll('most-read', $page));if( is_array($Books) ) {foreach ($Books as $key=>$item ) {  ?>
                                <div class="thumb">
                                    <div class="thumb__cover">
                                        <div class="cover">
                                            <div class="cover__wrapper">
                                                <a href="<?php echo seobooks($item['id'],$item['title']);?>" class="cover__img" style="background-image:url(<?php echo $item['poster'];?> );">
                                                    <img src="<?php echo get_webinfo('theme_url') ;?>img/doc-cover-shadow.png" class="img-fluid">
                                                </a>
                                            </div>
                                        </div>    
                                    </div>
                                    <a href="<?php echo seobooks($item['id'],$item['title']);?>" class="thumb__info">
                                        <h1 class="document__title"><?php echo $item['title'];?></h1>
                                        <h2 class="document__subtitle"><?php echo $item['author'];?></h2>
                                        <div class="document__rating">
                                            <div class="rating">
                                                <div class='rating__stars'>
                                                  <div class='rating__stars__wrapper'>
                                                    <span class='rating__stars__icons' style="width:89.2%"></span>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>    
                                    </a>
                                </div>
                                <?php if ($key == 11)break; } } } ?>
                            </div>
                        </div>
                    </div>
                    <?php if ( $options['nativeads'] == 'true' ): ?>
                    <div class="col-12">
                        <div class="d-block" style="margin: 15px auto;overflow:hidden;text-align:center;">    
                        <?php $adspath = ABSPATH . THMPATH . $options['theme_name'] . '/ads/nativeads.php'; $adscode = file_get_contents($adspath,NULL); if(isset($adscode) and !empty($adscode)): ?><?php echo $adscode; ?><?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
<?php get_footer(); ?>