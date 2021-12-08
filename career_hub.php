<?php session_start(); ?>
<?php ob_start (); ?>
<?php include "db.php"; ?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>career hub</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Page-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.28.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
 <!-- Profile Icon -->

 <link rel="stylesheet" href="assets/css/shared/style.css">     
  
<!-- Autocomplete -->
<script type='text/javascript' src='js/autocomplete.js'></script>
<link rel="stylesheet" type='text/css' href="css/autocomplete.css"> 


    <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "",
    "logo": "images/default-logo.png",
    "sameAs": []
}</script>

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Page 1">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class=" u-clearfix u-header u-section-row-container" id="sec-6baa"><div class="u-section-rows">
        <div class="u-clearfix u-custom-color-2 u-section-row u-section-row-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" id="sec-a8af">
          <div class="u-clearfix u-sheet u-valign-middle-xl u-valign-middle-xs u-sheet-1">
            <a href="Job_seeker.php" class="u-image u-logo u-image-1">
              <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
              <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-black u-text-hover-palette-2-base" href="#">
                  <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
                </a>
              </div>
              <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90 active" href="Job_seeker.php" style="padding: 6px 0px;">Job Seeker</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="employer.php" style="padding: 6px 0px;">Employers</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="About_us.php" style="padding: 6px 0px;">About us</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Contact_us.php" style="padding: 6px 0px;">Contact us</a></li>

  <?php

    if(isset($_SESSION['Email']) == $db_Email){

  ?> 


<li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Member-Login.php" style="padding: 6px 0px;">Login</a></li>

  <?php 
              
      }else{
              
    ?> 



        <li class="u-nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="u-nav-link fa fa-sort-down" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="" style="width:40px; border-radius: 100%;" src ='images/<?php echo $_SESSION['Image'] ?>' alt=""></a>
 <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">

  <img class="" style="width:60px; border-radius: 100%;" src ='images/<?php echo $_SESSION['Image'] ?>' alt="">

                  <p class="mb-1 mt-3 font-weight-semibold" style="color:darkblue;">
                      <?php
                      
                      if(isset($_SESSION['Firstname'])){
                          
                        echo $_SESSION['Firstname']; 
                         
                      }
                      
                      ?>
                      
                    </p>
                  
                </div>
                <a class="dropdown-item" href="profile.php">My Profile <span class="badge badge-pill badge-danger"></span><i class="dropdown-item-icon ti-dashboard"></i></a>
                 
                <a class="dropdown-item"href="Logout.php">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              
              </div>
          </li>

<?php 
              
      }

?> 
</ul>
              </div>
              <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                  <div class="u-inner-container-layout u-sidenav-overflow">
                    <div class="u-menu-close"></div>
                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Job_seeker.php" style="padding: 6px 0px;">Job Seeker</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="employer.php" style="padding: 6px 0px;">Employers</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="About_us.php" style="padding: 6px 0px;">About us</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact_us.php" style="padding: 6px 0px;">Contact us</a></li>

<?php

    if(isset($_SESSION['Email']) == $db_Email){

  ?> 

<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Member-Login.php" style="padding: 6px 0px;">Login</a></li>

<?php 
              
    }
              
  ?> 
</ul>
                  </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
              </div>
            </nav>
          </div> 
        </div>

        <div class="u-custom-color-2 u-section-row u-section-row-2" id="sec-56e4">
          <div class="u-clearfix u-sheet u-valign-middle u-sheet-2">
            <div class="u-list u-list-1">
              <div class="u-repeater u-repeater-1"> 
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-1">
                    <p class="u-text u-text-default u-text-1">
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-1" href="Available_jobs.php">find a job</a>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-2">
                    <p class="u-text u-text-default u-text-2">
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-2" href="Register-Member.php">submit your CV</a>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-3">
                    <p class="u-text u-text-default u-text-3">
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-3 active" href="career_hub.php">career hub</a>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-4">
                    <p class="u-text u-text-default u-text-4">
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-body-color u-text-hover-black u-btn-4" href="areas_of_expertise.php">areas of expertise</a>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-5">
                    <p class="u-text u-text-default u-text-5">
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-5" href="security_advice.php">security advice</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div></header>
    <section class="u-clearfix u-custom-color-2 u-lightbox u-section-1" id="sec-de5a">
      <div class="u-clearfix u-sheet u-sheet-1"><br><br><br><br>


<!-- <h1 class="snp-content-title-large">
            <span></span>
            <span id="ctl07_ctl04_ctl01_TopicSelectorButton" class="snp-header-topic-dropbtn icon-chevron-down">select a category</span>
        </h1>
        <div class="snp-header-topic-dropdown">
            <div class="snp-header-topic-dropdown-content">
                
                        <ul class="list-clean">
                            
                        <li>
                            <a id="ctl07_ctl04_ctl01_TopicListView_ctrl0_ItemHyperLink" href="/job-seeker/career-hub/hr-trends/">HR Trends</a>
                        </li>
                    
                        <li>
                            <a id="ctl07_ctl04_ctl01_TopicListView_ctrl1_ItemHyperLink" href="/job-seeker/career-hub/areas-of-expertise/">Areas of Expertise</a>
                        </li>
                    
                        </ul>
                    
            </div>
        </div>
        <div class="content-text">
            <p>
                
            </p>
        </div>
 -->
    <div class="col-md-6">
       <h1 class="u-align-left u-text u-text-default u-text-2">Select a Category</h1>
         <select type="text" style="cursor: pointer; font-size: 30px; background-color: transparent; border-color: white; border-radius: 5px; color: white;" class="col-md-8 form-control" name="Offerings" id="Offerings">

             <option value='area of expertise' style="color: #058fe6; border-radius: 10px;">Areas of expertise</option>
             <option value='hr trends' style="color: #058fe6; border-radius: 10px;">HR Trends</option>

         </select> 
       </div>
    </div>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </section>
    <section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-left u-text-1"><a href="">see all articles</a><span style="font-weight: 700;"></span>
        </p>



<div class="snippet snp-dynamic-module snp-wf360-article-list h-scroll-list snp-bg-none h-scroll-list-ready" data-bit-h-scroll-list="article-list" data-bit-h-scroll-list-button-position="offset">
<div>


<div class="box-inner">
    <!-- <div class="wf360-article-list-header">
        
        <a id="ctl07_ctl04_ctl03_SeeAllArticlesHyperLink" class="wf360-article-list-all" href="/job-seeker/career-hub/all-articles/">see all articles</a>
    </div> -->
    <div id="ctl07_ctl04_ctl03_ArticleListOverviewWrapper" class="wf360-article-list-overview-wrapper">
        
    <div class="wf360-article-list-overview slick-initialized slick-slider" data-bit-h-scroll-list-init-element="">
            
        <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4332px; transform: translate3d(0px, 0px, 0px);" role="listbox">

  <div class="u-layout-row">        
  <article class="wf360-article h-scroll-list-item slick-slide slick-current slick-active" data-bit-h-scroll-list-item="" style="width: 361px;" tabindex="-1" role="option" aria-describedby="slick-slide00" data-slick-index="0" aria-hidden="false">
    <div id="ctl07_ctl04_ctl03_ctl01_ArticleHyperLinkWrapper" class="wf360-article-media">
        <div class="wf360-article-media-inner">
            <a id="ctl07_ctl04_ctl03_ctl01_ImageHyperLink" data-bit-h-scroll-list-button-height-element="" href="hr-trends/staffing-trends/" tabindex="0"><div id="ctl07_ctl04_ctl03_ctl01_PageImageWrapper" class="wf360-item-img-box">
                    <div class="wf360-dimensions-img wf360-constraint-img">
                        <img id="ctl07_ctl04_ctl03_ctl01_PageImage" style="width: 550px; height: 365px;" data-src="/ugc/img/casestudies/sbb-cs.jpg" src="images/sbb-cs.jpg" alt="staffing trends" data-lazy-load="false">
                    </div>
                </div></a>
        </div>
    </div>
    <div class="wf360-article-list-contents">
        <h3 class="wf30-article-title">
            <a id="ctl07_ctl04_ctl03_ctl01_TitleHyperLink" href="hr-trends/staffing-trends/" tabindex="0">staffing trends</a>
        </h3>
        
        
        <div id="ctl07_ctl04_ctl03_ctl01_DescriptionWrapper" class="wf360-article-content">
            <p>
                It’s important to keep up with the latest trends in talent acquisition, to ensure you aren’t falling behind competitors and missing out on vital skills. Here are five of the key themes in this space.
            </p>
        </div>
        <div class="wf360-article-tags">
            <span id="ctl07_ctl04_ctl03_ctl01_TagTitleLabel" class="wf360-article-tags-label">tags</span>
            
                    <ul class="wf360-article-tags-list list-clean">
                        
                    <li id="ctl07_ctl04_ctl03_ctl01_TagsListView_ctrl0_ItemWrapper" class="wf360-article-tag-prim">
                        <a id="ctl07_ctl04_ctl03_ctl01_TagsListView_ctrl0_ItemHyperLink" href="/job-seeker/career-hub/hr-trends/" tabindex="0">HR Trends</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl01_TagsListView_ctrl1_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl01_TagsListView_ctrl1_ItemHyperLink" href="/job-seeker/career-hub/all-articles/staffing/" tabindex="0">staffing</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl01_TagsListView_ctrl2_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl01_TagsListView_ctrl2_ItemHyperLink" href="/job-seeker/career-hub/all-articles/staffing-trends/" tabindex="0">staffing trends</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl01_TagsListView_ctrl3_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl01_TagsListView_ctrl3_ItemHyperLink" href="/job-seeker/career-hub/all-articles/trends/" tabindex="0">trends</a>
                    </li>
                
                    </ul>
                
        </div>
    </div>
</article>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<article class="wf360-article h-scroll-list-item slick-slide slick-active" data-bit-h-scroll-list-item="" style="width: 361px;" tabindex="-1" role="option" aria-describedby="slick-slide01" data-slick-index="1" aria-hidden="false">
    <div id="ctl07_ctl04_ctl03_ctl02_ArticleHyperLinkWrapper" class="wf360-article-media">
        <div class="wf360-article-media-inner">
            <a id="ctl07_ctl04_ctl03_ctl02_ImageHyperLink" data-bit-h-scroll-list-button-height-element="" href="areas-of-expertise/performance-appraisal-methods/" tabindex="0"><div id="ctl07_ctl04_ctl03_ctl02_PageImageWrapper" class="wf360-item-img-box">
                    <div class="wf360-dimensions-img wf360-constraint-img">
                        <img id="ctl07_ctl04_ctl03_ctl02_PageImage" style="width: 550px; height: 365px;" data-src="/ugc/img/blog/dots.png" src="images/dots.png" alt="performance appraisal methods" data-lazy-load="false">
                    </div>
                </div></a>
        </div>
    </div>
    <div class="wf360-article-list-contents">
        <h3 class="wf30-article-title">
            <a id="ctl07_ctl04_ctl03_ctl02_TitleHyperLink" href="areas-of-expertise/performance-appraisal-methods/" tabindex="0">performance appraisal methods</a>
        </h3>
        
        
        <div id="ctl07_ctl04_ctl03_ctl02_DescriptionWrapper" class="wf360-article-content">
            <p>
                Appraisals; a process often feared by many employees. Instigated by the company HR with your line manager at the helm, it is easy to get the fear when the appraisal invitation appears in your inbox.
            </p>
        </div>
        <div class="wf360-article-tags">
            <span id="ctl07_ctl04_ctl03_ctl02_TagTitleLabel" class="wf360-article-tags-label">tags</span>
            
                    <ul class="wf360-article-tags-list list-clean">
                        
                    <li id="ctl07_ctl04_ctl03_ctl02_TagsListView_ctrl0_ItemWrapper" class="wf360-article-tag-prim">
                        <a id="ctl07_ctl04_ctl03_ctl02_TagsListView_ctrl0_ItemHyperLink" href="/job-seeker/career-hub/areas-of-expertise/" tabindex="0">Areas of Expertise</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl02_TagsListView_ctrl1_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl02_TagsListView_ctrl1_ItemHyperLink" href="/job-seeker/career-hub/all-articles/performance/" tabindex="0">performance</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl02_TagsListView_ctrl2_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl02_TagsListView_ctrl2_ItemHyperLink" href="/job-seeker/career-hub/all-articles/performance-review/" tabindex="0">performance review</a>
                    </li>
                
                    </ul>
                
        </div>
    </div>
</article>
</div>

<div class="u-layout-row">
<article class="wf360-article h-scroll-list-item slick-slide" data-bit-h-scroll-list-item="" style="width: 361px;" tabindex="-1" role="option" aria-describedby="slick-slide03" data-slick-index="3" aria-hidden="true">
    <div id="ctl07_ctl04_ctl03_ctl04_ArticleHyperLinkWrapper" class="wf360-article-media">
        <div class="wf360-article-media-inner">
            <a id="ctl07_ctl04_ctl03_ctl04_ImageHyperLink" data-bit-h-scroll-list-button-height-element="" href="areas-of-expertise/5-types-of-bosses-and-how-to-work-with-them/" tabindex="-1"><div id="ctl07_ctl04_ctl03_ctl04_PageImageWrapper" class="wf360-item-img-box">
                    <div class="wf360-dimensions-img wf360-constraint-img">
                        <img id="ctl07_ctl04_ctl03_ctl04_PageImage" style="width: 550px; height: 365px;" data-src="/ugc/img/blog/hero.jpg" src="images/hero.jpg" alt="5 Types Of Bosses And How To Work With Them" data-lazy-load="false">
                    </div>
                </div></a>
        </div>
    </div>
    <div class="wf360-article-list-contents">
        <h3 class="wf30-article-title">
            <a id="ctl07_ctl04_ctl03_ctl04_TitleHyperLink" href="areas-of-expertise/5-types-of-bosses-and-how-to-work-with-them/" tabindex="-1">5 Types Of Bosses And How To Work With Them</a>
        </h3>
        
        
        <div id="ctl07_ctl04_ctl03_ctl04_DescriptionWrapper" class="wf360-article-content">
            <p>
                All bosses have different leadership styles in the workforce. Read Randstad's article about 5 different types of bosses and how to work well with them.
            </p>
        </div>
        <div class="wf360-article-tags">
            <span id="ctl07_ctl04_ctl03_ctl04_TagTitleLabel" class="wf360-article-tags-label">tags</span>
            
                    <ul class="wf360-article-tags-list list-clean">
                        
                    <li id="ctl07_ctl04_ctl03_ctl04_TagsListView_ctrl0_ItemWrapper" class="wf360-article-tag-prim">
                        <a id="ctl07_ctl04_ctl03_ctl04_TagsListView_ctrl0_ItemHyperLink" href="/job-seeker/career-hub/areas-of-expertise/" tabindex="-1">Areas of Expertise</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl04_TagsListView_ctrl1_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl04_TagsListView_ctrl1_ItemHyperLink" href="/job-seeker/career-hub/all-articles/building-your-career/" tabindex="-1">building your career</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl04_TagsListView_ctrl2_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl04_TagsListView_ctrl2_ItemHyperLink" href="/job-seeker/career-hub/all-articles/types-of-bosses/" tabindex="-1">types of bosses</a>
                    </li>
                
                    </ul>
                
        </div>
    </div>
</article>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<article class="wf360-article h-scroll-list-item slick-slide" data-bit-h-scroll-list-item="" style="width: 361px;" tabindex="-1" role="option" aria-describedby="slick-slide02" data-slick-index="2" aria-hidden="true">
    <div id="ctl07_ctl04_ctl03_ctl03_ArticleHyperLinkWrapper" class="wf360-article-media">
        <div class="wf360-article-media-inner">
            <a id="ctl07_ctl04_ctl03_ctl03_ImageHyperLink" data-bit-h-scroll-list-button-height-element="" href="areas-of-expertise/5-non-work-things-that-impact-your-job-satisfaction/" tabindex="-1"><div id="ctl07_ctl04_ctl03_ctl03_PageImageWrapper" class="wf360-item-img-box">
                    <div class="wf360-dimensions-img wf360-constraint-img">
                        <img id="ctl07_ctl04_ctl03_ctl03_PageImage" style="width: 550px; height: 365px;" data-src="/ugc/img/Corona 6_illustration_UseBackgroundWhite_RGB.png" src="images/Corona 6_illustration_UseBackgroundWhite_RGB.png" alt="5 non-work things that impact your job satisfaction" data-lazy-load="false">
                    </div>
                </div></a>
        </div>
    </div>
    <div class="wf360-article-list-contents">
        <h3 class="wf30-article-title">
            <a id="ctl07_ctl04_ctl03_ctl03_TitleHyperLink" href="areas-of-expertise/5-non-work-things-that-impact-your-job-satisfaction/" tabindex="-1">5 non-work things that impact your job satisfaction</a>
        </h3>
        
        
        <div id="ctl07_ctl04_ctl03_ctl03_DescriptionWrapper" class="wf360-article-content">
            <p>
                Global statistics raise a concern on employee engagement and happiness across the world. Only 13% employees are engaged, whereas 87% are not.&nbsp; While India seems to be doing better in this ...
            </p>
        </div>
        <div class="wf360-article-tags">
            <span id="ctl07_ctl04_ctl03_ctl03_TagTitleLabel" class="wf360-article-tags-label">tags</span>
            
                    <ul class="wf360-article-tags-list list-clean">
                        
                    <li id="ctl07_ctl04_ctl03_ctl03_TagsListView_ctrl0_ItemWrapper" class="wf360-article-tag-prim">
                        <a id="ctl07_ctl04_ctl03_ctl03_TagsListView_ctrl0_ItemHyperLink" href="/job-seeker/career-hub/areas-of-expertise/" tabindex="-1">Areas of Expertise</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl03_TagsListView_ctrl1_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl03_TagsListView_ctrl1_ItemHyperLink" href="/job-seeker/career-hub/all-articles/job-satisfaction/" tabindex="-1">job satisfaction</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl03_TagsListView_ctrl2_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl03_TagsListView_ctrl2_ItemHyperLink" href="/job-seeker/career-hub/all-articles/work-life-balance/" tabindex="-1">work life balance</a>
                    </li>
                
                    </ul>
                
        </div>
    </div>
</article>
</div>
<!-- <article class="wf360-article h-scroll-list-item slick-slide" data-bit-h-scroll-list-item="" style="width: 361px;" tabindex="-1" role="option" aria-describedby="slick-slide04" data-slick-index="4" aria-hidden="true">
    <div id="ctl07_ctl04_ctl03_ctl05_ArticleHyperLinkWrapper" class="wf360-article-media">
        <div class="wf360-article-media-inner">
            <a id="ctl07_ctl04_ctl03_ctl05_ImageHyperLink" data-bit-h-scroll-list-button-height-element="" href="areas-of-expertise/5-best-ways-to-network-at-the-workplace/" tabindex="-1"><div id="ctl07_ctl04_ctl03_ctl05_PageImageWrapper" class="wf360-item-img-box">
                    <div class="wf360-dimensions-img wf360-constraint-img">
                        <img id="ctl07_ctl04_ctl03_ctl05_PageImage" data-src="/ugc/img/career compass/IT network_illustration_UseBackgroundTurquoise_RGB.png" src="images/IT network_illustration_UseBackgroundTurquoise_RGB.png" alt="5 best ways to network at the workplace" data-lazy-load="false">
                    </div>
                </div></a>
        </div>
    </div>
    <div class="wf360-article-list-contents">
        <h3 class="wf30-article-title">
            <a id="ctl07_ctl04_ctl03_ctl05_TitleHyperLink" href="areas-of-expertise/5-best-ways-to-network-at-the-workplace/" tabindex="-1">5 best ways to network at the workplace</a>
        </h3>
        
        
        <div id="ctl07_ctl04_ctl03_ctl05_DescriptionWrapper" class="wf360-article-content">
            <p>
                five best ways to build your network more effectively at the workplace and it’s benefits.
            </p>
        </div>
        <div class="wf360-article-tags">
            <span id="ctl07_ctl04_ctl03_ctl05_TagTitleLabel" class="wf360-article-tags-label">tags</span>
            
                    <ul class="wf360-article-tags-list list-clean">
                        
                    <li id="ctl07_ctl04_ctl03_ctl05_TagsListView_ctrl0_ItemWrapper" class="wf360-article-tag-prim">
                        <a id="ctl07_ctl04_ctl03_ctl05_TagsListView_ctrl0_ItemHyperLink" href="/job-seeker/career-hub/areas-of-expertise/" tabindex="-1">Areas of Expertise</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl05_TagsListView_ctrl1_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl05_TagsListView_ctrl1_ItemHyperLink" href="/job-seeker/career-hub/all-articles/career-strategy/" tabindex="-1">career strategy</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl05_TagsListView_ctrl2_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl05_TagsListView_ctrl2_ItemHyperLink" href="/job-seeker/career-hub/all-articles/networking/" tabindex="-1">networking</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl05_TagsListView_ctrl3_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl05_TagsListView_ctrl3_ItemHyperLink" href="/job-seeker/career-hub/all-articles/workplace/" tabindex="-1">workplace</a>
                    </li>
                
                    </ul>
                
        </div>
    </div>
</article> -->
<!-- <article class="wf360-article h-scroll-list-item slick-slide" data-bit-h-scroll-list-item="" style="width: 361px;" tabindex="-1" role="option" aria-describedby="slick-slide05" data-slick-index="5" aria-hidden="true">
    <div id="ctl07_ctl04_ctl03_ctl06_ArticleHyperLinkWrapper" class="wf360-article-media">
        <div class="wf360-article-media-inner">
            <a id="ctl07_ctl04_ctl03_ctl06_ImageHyperLink" data-bit-h-scroll-list-button-height-element="" href="areas-of-expertise/6-ways-to-learn-new-skills/" tabindex="-1"><div id="ctl07_ctl04_ctl03_ctl06_PageImageWrapper" class="wf360-item-img-box">
                    <div class="wf360-dimensions-img wf360-constraint-img">
                        <img id="ctl07_ctl04_ctl03_ctl06_PageImage" data-src="/ugc/img/illustrations/workforce-v2.png" src="images/workforce-v2.png" alt="6 ways to learn new skills" data-lazy-load="false">
                    </div>
                </div></a>
        </div>
    </div>
    <div class="wf360-article-list-contents">
        <h3 class="wf30-article-title">
            <a id="ctl07_ctl04_ctl03_ctl06_TitleHyperLink" href="areas-of-expertise/6-ways-to-learn-new-skills/" tabindex="-1">6 ways to learn new skills</a>
        </h3>
        
        
        <div id="ctl07_ctl04_ctl03_ctl06_DescriptionWrapper" class="wf360-article-content">
            <p>
                Here are 6 ways in which you can enhance your skill set while seeking growth in your career
            </p>
        </div>
        <div class="wf360-article-tags">
            <span id="ctl07_ctl04_ctl03_ctl06_TagTitleLabel" class="wf360-article-tags-label">tags</span>
            
                    <ul class="wf360-article-tags-list list-clean">
                        
                    <li id="ctl07_ctl04_ctl03_ctl06_TagsListView_ctrl0_ItemWrapper" class="wf360-article-tag-prim">
                        <a id="ctl07_ctl04_ctl03_ctl06_TagsListView_ctrl0_ItemHyperLink" href="/job-seeker/career-hub/areas-of-expertise/" tabindex="-1">Areas of Expertise</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl06_TagsListView_ctrl1_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl06_TagsListView_ctrl1_ItemHyperLink" href="/job-seeker/career-hub/all-articles/building-your-career/" tabindex="-1">building your career</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl06_TagsListView_ctrl2_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl06_TagsListView_ctrl2_ItemHyperLink" href="/job-seeker/career-hub/all-articles/career-strategy/" tabindex="-1">career strategy</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl06_TagsListView_ctrl3_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl06_TagsListView_ctrl3_ItemHyperLink" href="/job-seeker/career-hub/all-articles/skill-development/" tabindex="-1">skill development</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl06_TagsListView_ctrl4_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl06_TagsListView_ctrl4_ItemHyperLink" href="/job-seeker/career-hub/all-articles/skills/" tabindex="-1">skills</a>
                    </li>
                
                    </ul>
                
        </div>
    </div>
</article> -->

<!-- <article class="wf360-article h-scroll-list-item slick-slide" data-bit-h-scroll-list-item="" style="width: 361px;" tabindex="-1" role="option" aria-describedby="slick-slide06" data-slick-index="6" aria-hidden="true">
    <div id="ctl07_ctl04_ctl03_ctl07_ArticleHyperLinkWrapper" class="wf360-article-media">
        <div class="wf360-article-media-inner">
            <a id="ctl07_ctl04_ctl03_ctl07_ImageHyperLink" data-bit-h-scroll-list-button-height-element="" href="areas-of-expertise/how-to-deal-with-favoritism-at-work/" tabindex="-1"><div id="ctl07_ctl04_ctl03_ctl07_PageImageWrapper" class="wf360-item-img-box">
                    <div class="wf360-dimensions-img wf360-constraint-img">
                        <img id="ctl07_ctl04_ctl03_ctl07_PageImage" data-src="/ugc/img/blog/middle-mgmt.jpg" src="images/middle-mgmt.jpg" alt="How To Deal With Favoritism At Work" data-lazy-load="false">
                    </div>
                </div></a>
        </div>
    </div>
    <div class="wf360-article-list-contents">
        <h3 class="wf30-article-title">
            <a id="ctl07_ctl04_ctl03_ctl07_TitleHyperLink" href="areas-of-expertise/how-to-deal-with-favoritism-at-work/" tabindex="-1">How To Deal With Favoritism At Work</a>
        </h3>
        
        
        <div id="ctl07_ctl04_ctl03_ctl07_DescriptionWrapper" class="wf360-article-content">
            <p>
                Read about the three ways to tackle the favoritism at work.
            </p>
        </div>
        <div class="wf360-article-tags">
            <span id="ctl07_ctl04_ctl03_ctl07_TagTitleLabel" class="wf360-article-tags-label">tags</span>
            
                    <ul class="wf360-article-tags-list list-clean">
                        
                    <li id="ctl07_ctl04_ctl03_ctl07_TagsListView_ctrl0_ItemWrapper" class="wf360-article-tag-prim">
                        <a id="ctl07_ctl04_ctl03_ctl07_TagsListView_ctrl0_ItemHyperLink" href="/job-seeker/career-hub/areas-of-expertise/" tabindex="-1">Areas of Expertise</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl07_TagsListView_ctrl1_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl07_TagsListView_ctrl1_ItemHyperLink" href="/job-seeker/career-hub/all-articles/favoritism/" tabindex="-1">favoritism</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl07_TagsListView_ctrl2_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl07_TagsListView_ctrl2_ItemHyperLink" href="/job-seeker/career-hub/all-articles/team-management/" tabindex="-1">team management</a>
                    </li>
                
                    </ul>
                
        </div>
    </div>
</article> -->

<!-- <article class="wf360-article h-scroll-list-item slick-slide" data-bit-h-scroll-list-item="" style="width: 361px;" tabindex="-1" role="option" aria-describedby="slick-slide07" data-slick-index="7" aria-hidden="true">
    <div id="ctl07_ctl04_ctl03_ctl08_ArticleHyperLinkWrapper" class="wf360-article-media">
        <div class="wf360-article-media-inner">
            <a id="ctl07_ctl04_ctl03_ctl08_ImageHyperLink" data-bit-h-scroll-list-button-height-element="" href="areas-of-expertise/three-things-to-do-when-youre-disengaged-at-the-workplace/" tabindex="-1"><div id="ctl07_ctl04_ctl03_ctl08_PageImageWrapper" class="wf360-item-img-box">
                    <div class="wf360-dimensions-img wf360-constraint-img">
                        <img id="ctl07_ctl04_ctl03_ctl08_PageImage" data-src="/ugc/img/blog/innovation.jpg" src="/ugc/img/blog/innovation.jpg" alt="Three things to do when you’re disengaged at the workplace" data-lazy-load="false">
                    </div>
                </div></a>
        </div>
    </div>
    <div class="wf360-article-list-contents">
        <h3 class="wf30-article-title">
            <a id="ctl07_ctl04_ctl03_ctl08_TitleHyperLink" href="areas-of-expertise/three-things-to-do-when-youre-disengaged-at-the-workplace/" tabindex="-1">Three things to do when you’re disengaged at the workplace</a>
        </h3>
        
        
        <div id="ctl07_ctl04_ctl03_ctl08_DescriptionWrapper" class="wf360-article-content">
            <p>
                Three things you can do to counter with disengagement at work.
            </p>
        </div>
        <div class="wf360-article-tags">
            <span id="ctl07_ctl04_ctl03_ctl08_TagTitleLabel" class="wf360-article-tags-label">tags</span>
            
                    <ul class="wf360-article-tags-list list-clean">
                        
                    <li id="ctl07_ctl04_ctl03_ctl08_TagsListView_ctrl0_ItemWrapper" class="wf360-article-tag-prim">
                        <a id="ctl07_ctl04_ctl03_ctl08_TagsListView_ctrl0_ItemHyperLink" href="/job-seeker/career-hub/areas-of-expertise/" tabindex="-1">Areas of Expertise</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl08_TagsListView_ctrl1_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl08_TagsListView_ctrl1_ItemHyperLink" href="/job-seeker/career-hub/all-articles/disengaged-at-work/" tabindex="-1">disengaged at work</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl08_TagsListView_ctrl2_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl08_TagsListView_ctrl2_ItemHyperLink" href="/job-seeker/career-hub/all-articles/workplace/" tabindex="-1">workplace</a>
                    </li>
                
                    </ul>
                
        </div>
    </div>
</article> -->
<!-- <article class="wf360-article h-scroll-list-item slick-slide" data-bit-h-scroll-list-item="" style="width: 361px;" tabindex="-1" role="option" aria-describedby="slick-slide08" data-slick-index="8" aria-hidden="true">
    <div id="ctl07_ctl04_ctl03_ctl09_ArticleHyperLinkWrapper" class="wf360-article-media">
        <div class="wf360-article-media-inner">
            <a id="ctl07_ctl04_ctl03_ctl09_ImageHyperLink" data-bit-h-scroll-list-button-height-element="" href="areas-of-expertise/how-to-increase-your-emotional-intelligence-5-tips/" tabindex="-1"><div id="ctl07_ctl04_ctl03_ctl09_PageImageWrapper" class="wf360-item-img-box">
                    <div class="wf360-dimensions-img wf360-constraint-img">
                        <img id="ctl07_ctl04_ctl03_ctl09_PageImage" data-src="/ugc/img/blog/innovation.jpg" src="/ugc/img/blog/innovation.jpg" alt="how to increase your emotional intelligence – 5 tips" data-lazy-load="false">
                    </div>
                </div></a>
        </div>
    </div>
    <div class="wf360-article-list-contents">
        <h3 class="wf30-article-title">
            <a id="ctl07_ctl04_ctl03_ctl09_TitleHyperLink" href="areas-of-expertise/how-to-increase-your-emotional-intelligence-5-tips/" tabindex="-1">how to increase your emotional intelligence – 5 tips</a>
        </h3>
        
        
        <div id="ctl07_ctl04_ctl03_ctl09_DescriptionWrapper" class="wf360-article-content">
            <p>
                Best five tips to grow your emotional intelligence and outperform at the workplace.
            </p>
        </div>
        <div class="wf360-article-tags">
            <span id="ctl07_ctl04_ctl03_ctl09_TagTitleLabel" class="wf360-article-tags-label">tags</span>
            
                    <ul class="wf360-article-tags-list list-clean">
                        
                    <li id="ctl07_ctl04_ctl03_ctl09_TagsListView_ctrl0_ItemWrapper" class="wf360-article-tag-prim">
                        <a id="ctl07_ctl04_ctl03_ctl09_TagsListView_ctrl0_ItemHyperLink" href="/job-seeker/career-hub/areas-of-expertise/" tabindex="-1">Areas of Expertise</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl09_TagsListView_ctrl1_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl09_TagsListView_ctrl1_ItemHyperLink" href="/job-seeker/career-hub/all-articles/emotional-intelligence/" tabindex="-1">emotional intelligence</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl09_TagsListView_ctrl2_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl09_TagsListView_ctrl2_ItemHyperLink" href="/job-seeker/career-hub/all-articles/eq/" tabindex="-1">EQ</a>
                    </li>
                
                    </ul>
                
        </div>
    </div>
</article> -->
<!-- <article class="wf360-article h-scroll-list-item slick-slide" data-bit-h-scroll-list-item="" style="width: 361px;" tabindex="-1" role="option" aria-describedby="slick-slide09" data-slick-index="9" aria-hidden="true">
    <div id="ctl07_ctl04_ctl03_ctl10_ArticleHyperLinkWrapper" class="wf360-article-media">
        <div class="wf360-article-media-inner">
            <a id="ctl07_ctl04_ctl03_ctl10_ImageHyperLink" data-bit-h-scroll-list-button-height-element="" href="areas-of-expertise/how-to-talk-about-your-achievements-at-work-without-bragging/" tabindex="-1"><div id="ctl07_ctl04_ctl03_ctl10_PageImageWrapper" class="wf360-item-img-box">
                    <div class="wf360-dimensions-img wf360-constraint-img">
                        <img id="ctl07_ctl04_ctl03_ctl10_PageImage" data-src="/ugc/img/blog/hero.jpg" src="/ugc/img/blog/hero.jpg" alt="how to talk about your achievements at work without bragging" data-lazy-load="false">
                    </div>
                </div></a>
        </div>
    </div>
    <div class="wf360-article-list-contents">
        <h3 class="wf30-article-title">
            <a id="ctl07_ctl04_ctl03_ctl10_TitleHyperLink" href="areas-of-expertise/how-to-talk-about-your-achievements-at-work-without-bragging/" tabindex="-1">how to talk about your achievements at work without bragging</a>
        </h3>
        
        
        <div id="ctl07_ctl04_ctl03_ctl10_DescriptionWrapper" class="wf360-article-content">
            <p>
                5 ways to talk about your achievements without crossing the line into bragging.
            </p>
        </div>
        <div class="wf360-article-tags">
            <span id="ctl07_ctl04_ctl03_ctl10_TagTitleLabel" class="wf360-article-tags-label">tags</span>
            
                    <ul class="wf360-article-tags-list list-clean">
                        
                    <li id="ctl07_ctl04_ctl03_ctl10_TagsListView_ctrl0_ItemWrapper" class="wf360-article-tag-prim">
                        <a id="ctl07_ctl04_ctl03_ctl10_TagsListView_ctrl0_ItemHyperLink" href="/job-seeker/career-hub/areas-of-expertise/" tabindex="-1">Areas of Expertise</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl10_TagsListView_ctrl1_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl10_TagsListView_ctrl1_ItemHyperLink" href="/job-seeker/career-hub/all-articles/achievements/" tabindex="-1">achievements</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl10_TagsListView_ctrl2_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl10_TagsListView_ctrl2_ItemHyperLink" href="/job-seeker/career-hub/all-articles/building-your-career/" tabindex="-1">building your career</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl10_TagsListView_ctrl3_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl10_TagsListView_ctrl3_ItemHyperLink" href="/job-seeker/career-hub/all-articles/career-strategy/" tabindex="-1">career strategy</a>
                    </li>
                
                    </ul>
                
        </div>
    </div>
</article> -->
<!-- <article class="wf360-article h-scroll-list-item slick-slide" data-bit-h-scroll-list-item="" style="width: 361px;" tabindex="-1" role="option" aria-describedby="slick-slide010" data-slick-index="10" aria-hidden="true">
    <div id="ctl07_ctl04_ctl03_ctl11_ArticleHyperLinkWrapper" class="wf360-article-media">
        <div class="wf360-article-media-inner">
            <a id="ctl07_ctl04_ctl03_ctl11_ImageHyperLink" data-bit-h-scroll-list-button-height-element="" href="areas-of-expertise/how-to-avoid-burnout-at-work/" tabindex="-1"><div id="ctl07_ctl04_ctl03_ctl11_PageImageWrapper" class="wf360-item-img-box">
                    <div class="wf360-dimensions-img wf360-constraint-img">
                        <img id="ctl07_ctl04_ctl03_ctl11_PageImage" data-src="/ugc/img/blog/innovation.jpg" src="/ugc/img/blog/innovation.jpg" alt="How To Avoid Burnout At Work" data-lazy-load="false">
                    </div>
                </div></a>
        </div>
    </div>
    <div class="wf360-article-list-contents">
        <h3 class="wf30-article-title">
            <a id="ctl07_ctl04_ctl03_ctl11_TitleHyperLink" href="areas-of-expertise/how-to-avoid-burnout-at-work/" tabindex="-1">How To Avoid Burnout At Work</a>
        </h3>
        
        
        <div id="ctl07_ctl04_ctl03_ctl11_DescriptionWrapper" class="wf360-article-content">
            <p>
                Read about the 4 ways that burnout can be avoided at the workplace.
            </p>
        </div>
        <div class="wf360-article-tags">
            <span id="ctl07_ctl04_ctl03_ctl11_TagTitleLabel" class="wf360-article-tags-label">tags</span>
            
                    <ul class="wf360-article-tags-list list-clean">
                        
                    <li id="ctl07_ctl04_ctl03_ctl11_TagsListView_ctrl0_ItemWrapper" class="wf360-article-tag-prim">
                        <a id="ctl07_ctl04_ctl03_ctl11_TagsListView_ctrl0_ItemHyperLink" href="/job-seeker/career-hub/areas-of-expertise/" tabindex="-1">Areas of Expertise</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl11_TagsListView_ctrl1_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl11_TagsListView_ctrl1_ItemHyperLink" href="/job-seeker/career-hub/all-articles/burnout/" tabindex="-1">burnout</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl11_TagsListView_ctrl2_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl11_TagsListView_ctrl2_ItemHyperLink" href="/job-seeker/career-hub/all-articles/career-strategy/" tabindex="-1">career strategy</a>
                    </li>
                
                    </ul>
                
        </div>
    </div>
</article> -->
<!-- <article class="wf360-article h-scroll-list-item slick-slide" data-bit-h-scroll-list-item="" style="width: 361px;" tabindex="-1" role="option" aria-describedby="slick-slide011" data-slick-index="11" aria-hidden="true">
    <div id="ctl07_ctl04_ctl03_ctl12_ArticleHyperLinkWrapper" class="wf360-article-media">
        <div class="wf360-article-media-inner">
            <a id="ctl07_ctl04_ctl03_ctl12_ImageHyperLink" data-bit-h-scroll-list-button-height-element="" href="areas-of-expertise/moving-between-departments-how-to-get-it-right/" tabindex="-1"><div id="ctl07_ctl04_ctl03_ctl12_PageImageWrapper" class="wf360-item-img-box">
                    <div class="wf360-dimensions-img wf360-constraint-img">
                        <img id="ctl07_ctl04_ctl03_ctl12_PageImage" data-src="/ugc/img/blog/diversity2.jpg" src="/ugc/img/blog/diversity2.jpg" alt="moving between departments – how to get it right" data-lazy-load="false">
                    </div>
                </div></a>
        </div>
    </div>
    <div class="wf360-article-list-contents">
        <h3 class="wf30-article-title">
            <a id="ctl07_ctl04_ctl03_ctl12_TitleHyperLink" href="areas-of-expertise/moving-between-departments-how-to-get-it-right/" tabindex="-1">moving between departments – how to get it right</a>
        </h3>
        
        
        <div id="ctl07_ctl04_ctl03_ctl12_DescriptionWrapper" class="wf360-article-content">
            <p>
                Three ways to get the right inter-departmental shift in your company.
            </p>
        </div>
        <div class="wf360-article-tags">
            <span id="ctl07_ctl04_ctl03_ctl12_TagTitleLabel" class="wf360-article-tags-label">tags</span>
            
                    <ul class="wf360-article-tags-list list-clean">
                        
                    <li id="ctl07_ctl04_ctl03_ctl12_TagsListView_ctrl0_ItemWrapper" class="wf360-article-tag-prim">
                        <a id="ctl07_ctl04_ctl03_ctl12_TagsListView_ctrl0_ItemHyperLink" href="/job-seeker/career-hub/areas-of-expertise/" tabindex="-1">Areas of Expertise</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl12_TagsListView_ctrl1_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl12_TagsListView_ctrl1_ItemHyperLink" href="/job-seeker/career-hub/all-articles/career-growth/" tabindex="-1">career growth</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl12_TagsListView_ctrl2_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl12_TagsListView_ctrl2_ItemHyperLink" href="/job-seeker/career-hub/all-articles/career-strategy/" tabindex="-1">career strategy</a>
                    </li>
                
                    <li id="ctl07_ctl04_ctl03_ctl12_TagsListView_ctrl3_ItemWrapper">
                        <a id="ctl07_ctl04_ctl03_ctl12_TagsListView_ctrl3_ItemHyperLink" href="/job-seeker/career-hub/all-articles/lateral-movement/" tabindex="-1">lateral movement</a>
                    </li>
                
                    </ul>
                
        </div>
    </div>
</article> -->
</div>
</div>
</div>
        
    </div>
    <!-- <div class="wf360-article-list-more">
        <p class="wf360-article-list-more-text">
            read more about this topic?
        </p>
        <a id="ctl07_ctl04_ctl03_ViewAllHyperLink" class="btn btn-prim" href="/job-seeker/career-hub/all-articles/">view all</a>
    </div> -->
</div>

</div>
</div>
            
          </div>
        </div>
      </div>
    </section>
    
 <?php include "footer.php"; ?> 