<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    
    <div class="container">
        
    <a class="navbar-brand" href="home"><img src="images/logos/logo.png" width="160" height="70"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
            <span  class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarMenu">
                
            <ul class="navbar-nav ml-auto">
                
                <li class="nav-item" style="margin:2px;">
                    
                    <?php
                    if($page == "Home"){
                        
                        echo '<a class="btn btn-outline-info active" href="home" role="button" aria-pressed="true"> Home</a>';
                    }
                    else {
                        echo '<a class="btn btn-outline-info" href="home" role="button" aria-pressed="true"> Home</a>';
                    }
                    
                    ?>
                    
                </li>
                
                <li class="nav-item" style="margin:2px;">
                    
                    <?php
                    if($page == "About"){
                        
                        echo '<a class="btn btn-outline-info active" href="about" role="button" aria-pressed="true"> About</a>';
                    }
                    else {
                        echo '<a class="btn btn-outline-info" href="about" role="button" aria-pressed="true"> About</a>';
                    }
                    
                    ?>
                   
                </li>
                
                <li class="nav-item dropdown" style="margin:2px;">
                    <?php
                    if($page == "Services-ISP" || $page == "Services-IoT"){
                        
                        echo '<a class="btn btn-outline-info active" href="#" id="navbarDropdown "role="button" aria-pressed="true"> Services</a>';
                    }
                    else {
                        echo '<a class="btn btn-outline-info" href="#" id="navbarDropdown" role="button" aria-pressed="true">Services</a>';
                    }
                    
                    ?>
                    
                    
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="services-ISP">ISP</a></li>
                        <li><a class="dropdown-item" href="services-IoT">IoT</a></li>
                      </ul>                    
                                        
                </li>
                
                <li class="nav-item" style="margin:2px;">
                    <?php
                    if($page == "Contact"){
                        
                        echo '<a class="btn btn-outline-info active" href="contact" role="button" aria-pressed="true"> Contact</a>';
                    }
                    else {
                        echo '<a class="btn btn-outline-info" href="contact" role="button" aria-pressed="true"> Contact</a>';
                    }
                    ?>
                    
                </li>
             
                
                <li class="nav-item" style="margin:2px;">
                    <a class="btn btn-outline-info" href="https://iotcomms.co.bw/admin/login" target="_blank" role="button" aria-pressed="true">Admin</a>
                </li>
              
              <!-----
              
                <li class="nav-item" style="margin:2px;">
                
               
                    
                    <?php
                    /*
                    if($page == "erp_next_wiki"){
                        
                        echo '<a class="btn btn-outline-info active" href="erp_next_wiki" role="button" aria-pressed="true"> Wiki</a>';
                    }
                    else {
                        echo '<a class="btn btn-outline-info" href="erp_next_wiki" role="button" aria-pressed="true"> Wiki</a>';
                    }
                    */
                    ?>
                    
                 
                   
                </li>
              
              -----!>
              
              
                
            </ul>
            
        </div>
    
    </div>
        
</nav>