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
                        <ul class="list-unstyled list-inline" style="text-align: left;">
                            <li><h4>Filter By</h4></li>
                            <li>
                                 <select class="form-control select2" name="display" onchange="searchbydisplay(this.value)" style="background-color: #00c292;">
                                     <option value="">Display All</option>
                                     <option value="1">My Favorites</option>
                                     <option value="2">My Comments</option>
                                 </select>
                            </li>
                            <li>
                                <div id="myTable_filter" class="dataTables_filter">
                                    <label>Titles:
                                        <input class="" placeholder="" aria-controls="myTable" type="text" id="banTag">
                                        <input value="" type="hidden" id="txtAllowSearchID">
                                        <button onclick="resource_search()" style="margin-left: 5px; height: 24px; padding-top: 2px; padding-bottom: 0px;" class="btn btn-info">Search</button>
                                    </label>
                                </div>
                            </li>
                            
                        </ul>
                        
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
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
        <?php echo $footerlink; ?>
</body>
</html>
