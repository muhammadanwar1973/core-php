<div role="main">
    <div class="page-shops-index js-page-shops-index" data-component-ready="">
        <div class="container">
            <div class="page-header">
                <div class="page-header__layout-breadcrumb">
                    <ol class="layout-breadcrumb ">
                        <li class="layout-breadcrumb__item layout-breadcrumb__item_is-previous">
                            <a href="/">Home</a>
                        </li>
                        <li class="layout-breadcrumb__item active"> Shops </li>
                    </ol>
                </div>
                <h1 class="page-header__headline"> All Shops </h1>
            </div>
        </div>
        <div class="page-shops-index__links">
            <div class="container">
                <div class="page-shops-index__links-inner">
                    <a href="?alphabet=a" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">A</a>
                    <a href="?alphabet=b" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">B</a>
                    <a href="?alphabet=c" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">C</a>
                    <a href="?alphabet=d" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">D</a>
                    <a href="?alphabet=e" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">E</a>
                    <a href="?alphabet=f" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">F</a>
                    <a href="?alphabet=g" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">G</a>
                    <a href="?alphabet=h" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">H</a>
                    <a href="?alphabet=i" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">I</a>
                    <a href="?alphabet=j" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">J</a>
                    <a href="?alphabet=k" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">K</a>
                    <a href="?alphabet=l" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">L</a>
                    <a href="?alphabet=m" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">M</a>
                    <a href="?alphabet=n" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">N</a>
                    <a href="?alphabet=o" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">O</a>
                    <a href="?alphabet=p" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">P</a>
                    <a href="?alphabet=q" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">Q</a>
                    <a href="?alphabet=r" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">R</a>
                    <a href="?alphabet=s" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">S</a>
                    <a href="?alphabet=t" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">T</a>
                    <a href="?alphabet=u" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">U</a>
                    <a href="?alphabet=v" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">V</a>
                    <a href="?alphabet=w" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">W</a>
                    <a href="?alphabet=x" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">X</a>
                    <a href="?alphabet=y" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">Y</a>
                    <a href="?alphabet=z" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">Z</a>
                    <a href="/stores" class="page-shops-index__links-item js-page-shops-index__links-item" data-link-offset="30">(Clear)</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div  class="page-shops-index__tab" id="letter-0-9">
               
                <div class="row page-shops-index__tab-featured-shops js-page-shops-index__tab-featured-shops" data-related-letter="0-9">
                    <?php
                    require 'includes/site/db.php';
                    $alphabet = $_GET['alphabet'] ?? '';

                    if (!empty($alphabet)) {
                        $alphabet = strtoupper($alphabet);
                        $filterCondition = "WHERE name LIKE '$alphabet%'";
                    } else {
                        $filterCondition = '';
                    }
                    
                    $query = "SELECT * FROM stores $filterCondition LIMIT 6";
                    $query_run = mysqli_query($db, $query);
                    $checkIfExists = mysqli_num_rows($query_run) > 0;
                    if ($checkIfExists)
                    {
                    while($row = mysqli_fetch_array($query_run))
                    {
                    ?>
                      <div class="col-12 col-sm-6 col-lg-3">
                      <div  class="page-shops-index__featured-shops-list js-page-shops-index__featured-shops-list">
                          <div style="width: 205px; " class="page-shops-index__featured-shops-item js-page-shops-index__featured-shops-item">
                              <a href="/store/<?php echo $row['name'];?>" class="page-shops-index__featured-shops-link" title="<?php echo $row['name']; ?>">
                                  <div style="margin-top: -8px; " class="page-shops-index__featured-shops-logo">
                                      <img  class="img-fluid image-grayscale lazyloaded" alt="1&amp;1" data-src="<?php echo $row['image']; ?>" src="<?php echo $row['image']; ?>">
                                      <noscript>
                                      <img src="<?php echo $row['image']; ?>" class="img-fluid image-grayscale" alt="1&amp;1" />
                                      </noscript>
                                  </div>
                              </a>
                          </div>
                      </div>
                       <a style="padding-left: 6px;" href="/store/<?= $row['name'] ?>" class="d-block"><?php echo $row['name']; ?></a>
                        <?php
                            // $store = $row['id'];
                            // $query1 = "SELECT * FROM coupons WHERE `store` = '$store'  ORDER BY store, order_id ASC LIMIT 10";
                            // $query_run1 = mysqli_query($db, $query1);
                            // $checkIfExists1 = mysqli_num_rows($query_run1) > 0;
                            // if ($checkIfExists1)
                            // {
                            // while($store = mysqli_fetch_array($query_run1))
                            // {
                        ?>
                           <!--<a  href="?couponId=<?= $store['id'] ?>" class="d-block"><?php echo $store['code']; ?></a>-->
                        <?php // } } ?>
                      </div>                    
                    <?php
                    
                    }
                    }
                    else
                    {
                    echo "No Record Found";
                    }
                    ?>
                    
                </div>
                <div  class="page-shops-index__tab-shops" >
                    <div class="page-shops-index__shop page-shops-index__shop-link">
                    </div>                    
                </div>
            </div>
        </a>
    </div>
</div>
</div>
</div>
</div>