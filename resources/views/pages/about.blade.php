@extends('layouts.app')

@section('title', 'About Us | FINBEX Corporate Solutions Private Limited')
@section('meta_description', 'Learn about Finbex Corporate Solutions Private Limited - your trusted corporate financing and business loan consultancy partner in CBD Belapur, Navi Mumbai.')

@section('content')

<!-- PAGE HEADING -->
<section class="page-header" data-bg_img="{{ asset('assets/images/header-bg.jpg') }}" data-bg_color="#071526" data-bg_opacity="0.65">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2>About Finbex Corporate Solutions</h2>
        <p class="page-breadcrumb">
          <a href="{{ route('home') }}">Home</a> / About Us
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ABOUT US INTRO SECTION -->
<section class="section-content-block section-custom-bg no-bottom-padding" data-bg_color="#edf0f2" data-bg_img="{{ asset('assets/images/bg-gradient-right.png') }}" data-bg_opacity="0.3" data-bg_position="bottom right" data-bg_size="contain">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
        <div class="row margin-bottom-48">
          <div class="about-us-intro">
            <div class="col-md-12 col-sm-12 text-left margin-bottom-24">
              <h4 style="color: #004c8f; font-weight: 700; text-transform: uppercase;">Who We Are</h4>
              <h2 class="block-heading-title margin-top-12 text-dark-color" style="font-size: 26px;">
                FINBEX CORPORATE SOLUTIONS PRIVATE LIMITED
              </h2>
              <p style="font-size: 15.5px; line-height: 1.75; color: #475569;">
                Founded with a mission to empower Indian startups, SMEs, and mid-market enterprises, <strong>Finbex Corporate Solutions</strong> provides structured business loans, credit syndication, and financial advisory services. Based in CBD Belapur, Navi Mumbai, our seasoned team of financial specialists bridges the gap between ambitious companies and institutional lenders.
              </p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="highlight-layout-2">
              <div class="highlight-icon"><i class="fa fa-line-chart"></i></div>
              <div class="highlight-text">
                <h5><a href="{{ route('services') }}">Debt &amp; Capital Advisory</a></h5>
                <div>Strategic financial planning, loan structuring, and matching the right lender for your profile.</div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="highlight-layout-2">
              <div class="highlight-icon"><i class="fa fa-university"></i></div>
              <div class="highlight-text">
                <h5><a href="{{ route('services') }}">40+ Banking Alliances</a></h5>
                <div>Direct access to leading PSU banks, private commercial banks, and apex NBFC credit desks.</div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="highlight-layout-2">
              <div class="highlight-icon"><i class="fa fa-clock-o"></i></div>
              <div class="highlight-text">
                <h5><a href="{{ route('contact') }}">Fast Turnaround (TAT)</a></h5>
                <div>End-to-end documentation support ensuring faster sanction letters and loan disbursals.</div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="highlight-layout-2">
              <div class="highlight-icon"><i class="fa fa-handshake-o"></i></div>
              <div class="highlight-text">
                <h5><a href="{{ route('contact') }}">Client-First Approach</a></h5>
                <div>Transparent consultations with zero hidden fees and complete lifecycle loan support.</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs hidden-md">
        <figure class="about-us-img wow fadeInLeft about-us-stick-bottom">
          <img alt="About Finbex" src="{{ asset('assets/images/about_person_bg.png') }}">
        </figure>
      </div>
    </div>
  </div>
</section>

<!-- FEATURED CORPORATE VALUES SECTION -->
<section class="section-feat-about-us section-custom-bg" data-bg_color="#111111" data-bg_img="{{ asset('assets/images/about_us_info_bg.jpg') }}" data-bg_opacity="0.8">
  <div class="side-background">
    <div class="col-md-6 feat-img-side-bg visible-lg">
      <div class="row">
        <img alt="Corporate Solutions" src="{{ asset('assets/images/about_feat_bg_2.jpg') }}">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12 col-lg-offset-6 about-us-info-block wow fadeInLeft">
        <div class="row">
          <div class="about-us-info text-left">
            <h3 class="about-us-slogan about-us-slogan-bold text-light-color">
              STRUCTURING YOUR FINANCE<br>
              <i class="text-curly text-highlighter-primary">ACCELERATING</i>
              YOUR GROWTH !
            </h3>
            <div class="margin-top-48 text-light-color">
              <p class="text-light-color padding-top-24" style="font-size: 15px; line-height: 1.7;">
                At Finbex, we believe access to timely, fairly-priced credit is the lifeblood of business expansion. We work side-by-side with entrepreneurs to remove liquidity constraints and negotiate the best commercial credit terms.
              </p>
              <div class="about-details">
                <ul class="custom-bullet-list custom-icon">
                  <li>Custom credit structuring for SME expansion, capex, and working capital.</li>
                  <li>Deep expertise across retail, manufacturing, real estate, and service sectors.</li>
                  <li>Direct relationships with national credit underwriters and risk heads.</li>
                  <li>Comprehensive pre-assessment to prevent credit file rejections.</li>
                  <li>Full confidentiality and corporate data protection.</li>
                </ul>
              </div>
              <p class="margin-top-24 text-light-color">
                <a class="btn btn-theme" href="{{ route('services') }}" style="font-weight: 700;">EXPLORE OUR LOAN SERVICES</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TEAM HIGHLIGHT SECTION -->
<section class="section-content-block section-secondary-bg">
  <div class="container">
    <div class="row section-heading-wrapper text-center">
      <div class="col-md-12">
        <h4 class="heading-alt-style text-capitalize text-dark-color">Leadership &amp; Advisory Team</h4>
        <span class="heading-separator heading-separator-horizontal"></span>
        <h2 class="subheading-alt-style">
          Meet the corporate finance experts guiding your business toward optimal capital solutions.
        </h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="team-layout-1 text-center">
          <figure class="team-member">
            <a href="{{ route('team') }}" title="Finance Advisory Desk">
              <img alt="Finance Advisory" src="{{ asset('assets/images/team_5.jpg') }}">
            </a>
          </figure>
          <article class="team-info">
            <h3>SME Credit Advisory</h3>
            <h4>FINBEX TEAM</h4>
            <div class="team-social-share clearfix">
              <a href="{{ route('contact') }}"><i class="fa fa-envelope rectangle"></i></a>
              <a href="tel:9987484159"><i class="fa fa-phone rectangle"></i></a>
            </div>
          </article>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="team-layout-1 text-center">
          <figure class="team-member">
            <a href="{{ route('team') }}" title="Corporate Banking Desk">
              <img alt="Corporate Solutions" src="{{ asset('assets/images/team_6.jpg') }}">
            </a>
          </figure>
          <article class="team-info">
            <h3>Corporate Debt Solutions</h3>
            <h4>FINBEX TEAM</h4>
            <div class="team-social-share clearfix">
              <a href="{{ route('contact') }}"><i class="fa fa-envelope rectangle"></i></a>
              <a href="tel:9987484159"><i class="fa fa-phone rectangle"></i></a>
            </div>
          </article>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="team-layout-1 text-center">
          <figure class="team-member">
            <a href="{{ route('team') }}" title="Underwriting & Banking">
              <img alt="Banking Desk" src="{{ asset('assets/images/team_7.jpg') }}">
            </a>
          </figure>
          <article class="team-info">
            <h3>Banking &amp; Underwriting</h3>
            <h4>FINBEX TEAM</h4>
            <div class="team-social-share clearfix">
              <a href="{{ route('contact') }}"><i class="fa fa-envelope rectangle"></i></a>
              <a href="tel:9987484159"><i class="fa fa-phone rectangle"></i></a>
            </div>
          </article>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="team-layout-1 text-center">
          <figure class="team-member">
            <a href="{{ route('team') }}" title="Client Support">
              <img alt="Client Support" src="{{ asset('assets/images/team_8.jpg') }}">
            </a>
          </figure>
          <article class="team-info">
            <h3>Client Success &amp; Disbursal</h3>
            <h4>FINBEX TEAM</h4>
            <div class="team-social-share clearfix">
              <a href="{{ route('contact') }}"><i class="fa fa-envelope rectangle"></i></a>
              <a href="tel:9987484159"><i class="fa fa-phone rectangle"></i></a>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- COUNTER STATS SECTION -->
<section class="section-content-block section-content-block-minimal section-custom-bg" data-bg_color="#004c8f" data-bg_img="{{ asset('assets/images/pattern_1.png') }}" data-bg_opacity="0.95" data-bg_repeat="repeat" data-bg_size="contain">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="counter-block-2 light-counter-layout counter-border">
          <i class="icon fa fa-briefcase"></i>
          <div class="count-info">
            <span class="counter">7000</span>
            <span class="counter-postfix">+</span>
            <p class="text-capitalize">Businesses Advised</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="counter-block-2 light-counter-layout counter-border">
          <i class="icon fa fa-university"></i>
          <div class="count-info">
            <span class="counter">40</span>
            <span class="counter-postfix">+</span>
            <p class="text-capitalize">Banking Partners</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="counter-block-2 light-counter-layout counter-border">
          <i class="icon fa fa-percent"></i>
          <div class="count-info">
            <span class="counter">99</span>
            <span class="counter-postfix">%</span>
            <p class="text-capitalize">Approval Success</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="counter-block-2 light-counter-layout counter-border">
          <i class="icon fa fa-inr"></i>
          <div class="count-info">
            <span class="counter">500</span>
            <span class="counter-postfix">Cr+</span>
            <p class="text-capitalize">Total Disbursed</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- BOTTOM CTA -->
<section class="cta-layout-02 section-primary-bg" style="background: linear-gradient(135deg, #071526 0%, #004c8f 100%); padding: 48px 0;">
  <div class="container">
    <div class="row" style="display: flex; align-items: center; flex-wrap: wrap;">
      <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
        <h2 class="text-light-color" style="font-weight: 800; margin: 0 0 8px 0; font-size: 26px;">
          Partner with Finbex for Your Company's Financial Growth
        </h2>
        <p class="text-light-color" style="font-size: 15px; margin: 0; opacity: 0.9;">
          Schedule a consultation with our financial advisory team in CBD Belapur, Navi Mumbai.
        </p>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 text-center" style="margin-top: 10px;">
        <a class="btn btn-theme btn-square btn-theme-invert" href="{{ route('contact') }}" style="font-weight: 700; padding: 12px 26px;">
          CONTACT FINBEX <i class="fa fa-arrow-right" style="margin-left: 4px;"></i>
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
