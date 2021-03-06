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
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
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
                                <select class="form-control select2" name="display" onchange="searchbydisplay(this.value)" style="background-color: #00c292;">
                                     <option value="">Display All</option>
                                     <option value="1">My Favorites</option>
                                     <option value="2">My Comments</option>
                                 </select>
                            </li>
                            
                            <input class="" placeholder="" aria-controls="myTable" type="text" id="offerTag" style="width: 110px;border-radius: 5%;">
                            <input value="" type="hidden" id="txtAllowSearchID">
                             <button onclick="feed_search()" style="margin-left: 5px; height: 24px; padding-top: 2px; padding-bottom: 0px;" class="btn btn-info">Search</button>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <div class="dataTables_length" id="myTable_length" style="float: right;">
                            <form method="get" id="dropdownlandsearch" name="dropdownlandsearch">
                                <label>Show 
                                    <select name="myTable_length" aria-controls="myTable" class="" id="offerdrop">
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
        <?php echo $footerlink; ?>
</body>
</html>
