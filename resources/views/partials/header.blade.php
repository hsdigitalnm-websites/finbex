
<header class="main-header-2 clearfix" data-sticky_header="true">
  <section class="header-wrapper navgiation-wrapper">

    <div class="main-top-header hidden-sm hidden-xs clearfix">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 text-left">
            <div class="top-bar-link">
              <a href="{{ route('about') }}">About Finbex</a>
              <span class="separator-line"></span>
              <a href="{{ route('services') }}">Financing Solutions</a>
              <span class="separator-line"></span>
              <a href="{{ route('faq') }}">FAQ</a>
              <span class="separator-line"></span>
              <a href="{{ route('contact') }}">Support</a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 text-right">
            <div class="top-bar-link">
              <i class="fa fa-phone" style="color: #ffd700; margin-right: 4px;"></i> <strong>Call Us</strong> : <a href="tel:9987484159">9987484159</a>
              <span class="separator-line"></span>
              <i class="fa fa-whatsapp" style="color: #25D366; margin-right: 4px;"></i> <a href="https://wa.me/919987484159?text=Hello%20Finbex,%20I%20would%20like%20to%20inquire%20about%20business%20loans" target="_blank" rel="noopener">WhatsApp Chat</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="header-top">
      <div class="container">
        <div class="row" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap;">
          <div class="col-md-4 col-sm-12 col-xs-12 header-col-logo">
            <div class="header-logo logo">
              <a href="{{ route('home') }}" title="FINBEX Corporate Solutions Private Limited">
                <img src="{{ asset('assets/images/logo.png') }}" alt="FINBEX Corporate Solutions - Business. Finance. Expansion.">
              </a>
            </div>
          </div>

          <div class="col-md-8 col-sm-12 hidden-xs">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <div class="header-icon-box">
                  <div class="icon-container"><i class="fa fa-building-o"></i></div>
                  <div class="text">
                    <span class="head-heading">HEAD OFFICE</span>
                    <span class="head-content">CBD Belapur, Navi Mumbai</span>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-4">
                <div class="header-icon-box">
                  <div class="icon-container"><i class="fa fa-phone"></i></div>
                  <div class="text">
                    <span class="head-heading">DIRECT HELPLINE</span>
                    <span class="head-content">9987484159</span>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-4 clearfix">
                <a class="btn btn-theme btn-theme-invert no-border btn-square btn-header-cta margin-top-42 pull-right"
                   href="{{ route('contact') }}" title="Apply for Business Loan">APPLY FOR LOAN</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="navbar navbar-default">
      <div class="container clearfix">
        <a class="navbar-inline-logo" href="{{ route('home') }}" title="FINBEX Corporate Solutions Private Limited">
          <img src="{{ asset('assets/images/logo.png') }}" alt="FINBEX Corporate Solutions">
        </a>
        <div class="navbar-collapse collapse pull-left">
          <ul class="nav navbar-nav">
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'link-active' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'link-active' : '' }}">About Us</a></li>

            <li class="drop">
              <a href="{{ route('services') }}" class="{{ request()->routeIs('services') || request()->routeIs('service.details') ? 'link-active' : '' }}">Services <i class="fa fa-angle-down" style="font-size: 12px; margin-left: 4px;"></i></a>
              <ul class="drop-down">
                <li><a href="{{ route('service.details', ['slug'=>'unsecured-business-loans']) }}"><i class="fa fa-briefcase" style="margin-right: 6px; color: #004c8f;"></i> Unsecured Business Loans</a></li>
                <li><a href="{{ route('service.details', ['slug'=>'mca-pos-loans']) }}"><i class="fa fa-credit-card" style="margin-right: 6px; color: #004c8f;"></i> MCA / POS Swipe Loans</a></li>
                <li><a href="{{ route('service.details', ['slug'=>'working-capital-cc-od']) }}"><i class="fa fa-refresh" style="margin-right: 6px; color: #004c8f;"></i> Working Capital (CC / OD)</a></li>
                <li><a href="{{ route('service.details', ['slug'=>'machinery-equipment-loans']) }}"><i class="fa fa-cogs" style="margin-right: 6px; color: #004c8f;"></i> Machinery &amp; Equipment Loans</a></li>
                <li><a href="{{ route('service.details', ['slug'=>'loan-against-property']) }}"><i class="fa fa-building" style="margin-right: 6px; color: #004c8f;"></i> Loan Against Property (LAP)</a></li>
                <li><a href="{{ route('service.details', ['slug'=>'invoice-discounting']) }}"><i class="fa fa-file-text-o" style="margin-right: 6px; color: #004c8f;"></i> Supply Chain &amp; Invoice Discounting</a></li>
              </ul>
            </li>

            <li><a href="{{ route('faq') }}" class="{{ request()->routeIs('faq') ? 'link-active' : '' }}">FAQ</a></li>
            <li><a href="{{ route('team') }}" class="{{ request()->routeIs('team') ? 'link-active' : '' }}">Our Team</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'link-active' : '' }}">Contact Us</a></li>
          </ul>
        </div>

        <div class="navbar-header pull-right">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
          </button>
          <div class="navbar-contact">
            <div class="top-bar-social margin-top-12">
              <a href="https://wa.me/919987484159?text=Hello%20Finbex,%20I%20need%20business%20loan%20assistance" target="_blank" rel="noopener" aria-label="WhatsApp" style="color: #25D366;">
                <i class="fa fa-whatsapp"></i>
              </a>
              <a href="https://www.instagram.com/poonawallafincorp/" target="_blank" rel="noopener" aria-label="Instagram">
                <i class="fa fa-instagram"></i>
              </a>
              <a href="mailto:Pijush.shaw@gmail.com" aria-label="Email"><i class="fa fa-envelope"></i></a>
              <a href="tel:9987484159" aria-label="Phone"><i class="fa fa-phone"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</header>
