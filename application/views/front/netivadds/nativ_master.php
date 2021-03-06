<?php echo $headerlink; ?>
<body>
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
    </div>
    <div id="wrapper" style="background-color: #fff">
        <?php  echo $header; ?>
        <?php 
        if (isset($sidebar)) {
            echo $sidebar;
        }
        ?>
        
        <div id="page-wrapper">
            <div class="container-fluid">
                <!---------------------------------MAIN TEMPLATE START -------------------------->
                <div class="row bg-title" style="overflow: visible; margin-top:20px">
                    <div class="col-lg-9 col-md-10 col-sm-10 col-xs-12">
                        <!--                        <h4 class="page-title"></h4>--> 
                        <ul class="list-unstyled list-inline" style="text-align: left;">
                            <li><h4>Filter By</h4></li>
                            <li>
                                <select class="form-control select2" name="category" onchange="searchbycategory(this.value)" style="background-color: #00c292;">
                                    <option value="">Category</option>
                                    <?php foreach ($allcategory as $cat) { ?>
                                        <option value="<?php echo $cat['cat_id']; ?>"><?php echo $cat['cat_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </li>
                            <li>
                                <select class="form-control select2" name="category" onchange="searchbycountry(this.value)" style="background-color: #00c292;">
                                    <option value="">Country</option>
                                    <?php foreach ($allcountry as $country) { ?>
                                        <option value="<?php echo $country['country_id']; ?>">
                                            <?php echo $country['country_name']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                                
                            </li>
                             <li>
                                 <select class="form-control select2" name="category" onchange="searchbysize(this.value)" style="background-color: #00c292;">
                                    <option value="">Size</option>
                                    <?php foreach ($allsize as $size) { ?>
                                        <option value="<?php echo $size['width']; ?>,<?php echo $size['height'];?>">
                                            <?php echo $size['width']; ?> X <?php echo $size['height']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </li>
                             <li>
                                 <select class="form-control select2" name="display" onchange="searchbydisplay(this.value)" style="background-color: #00c292;">
                                     <option value="">Display All</option>
                                     <option value="1">My Favorites</option>
                                     <option value="2">My Comments</option>
                                 </select>
                                <!--<div class="dropdown">-->
                                <!--    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Display All-->
                                <!--        <span class="fa fa-sort-desc"></span></button>-->
                                <!--    <ul class="dropdown-menu dropdown-design" style="height: auto;overflow: auto;">-->
                                <!--            <li><a onclick="searchbymyfav(<?php echo $_SESSION['member_id']; ?>)">My Favorites</a></li>-->
                                <!--            <li><a onclick="searchbymycom(<?php echo $_SESSION['member_id']; ?>)">My Comments</a></li>-->
                                <!--    </ul>-->
                                <!--</div>-->
                            </li>
                             <input class="" placeholder="" aria-controls="myTable" type="text" id="banTag" style="width: 110px;border-radius: 5%;">
                             <input value="" type="hidden" id="txtAllowSearchID">
                             <button onclick="native_search()" style="margin-left: 5px; height: 24px; padding-top: 2px; padding-bottom: 0px;" class="btn btn-info">Search</button>
                        </ul>
                    </div>
                    <!--<div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">-->
                        <!--<div id="myTable_filter" class="dataTables_filter"><!--<label>Tags:</label>-->
                        <!--<input class="" placeholder="" aria-controls="myTable" type="text" id="banTag"><button onclick="nativsearch()" style="margin-left: 5px; height: 24px; padding-top: 2px; padding-bottom: 0px;" class="btn btn-info">Search</button></div>-->
                    <!--</div>-->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <div class="dataTables_length" id="myTable_length" style="float: right;">
                            <form method="get" id="dropdownlandsearch" name="dropdownlandsearch">
                                <label>Show 
                                    <select name="myTable_length" aria-controls="myTable" class="" id="bannerdrop">
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="250">250</option>
                                        <option value="500">500</option>
                                    </select> entries
                                </label>
                            </form>
                        </div>
                    </div>
                </div> 
                <!---------------------------------MAIN TEMPLATE END -------------------------->
                <?php echo $front_maincontent; ?>
                <?php echo $footer; ?>
            </div>
        </div>
        
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/lightbox/dist/css/lightbox.min.css">
        <script src="<?php echo base_url() ?>assets/front/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>

        <script src="<?php echo base_url() ?>assets/front/masonry/js/jquery-1.7.1.min.js"></script>
        <script src="<?php echo base_url() ?>assets/front/masonry/jquery.masonry.min.js"></script>
        
        <script>
            $(function () {
                var $container = $('#container');
                $container.imagesLoaded(function () {
                    $container.masonry({
                        itemSelector: '.box'
                    });
                });

            });

             
        </script>
        
        <?php echo $footerlink; ?>
</body>
</html>
