@extends('layouts.app')

@section('title', 'Home | FINBEX Corporate Solutions Private Limited')
@section('meta_description', 'Finbex Corporate Solutions offers unsecured business loans, MCA/POS loans, working capital CC/OD, machinery loans, LAP, and invoice discounting in Navi Mumbai & across India.')

@section('content')

<!-- HOME SLIDER BLOCK -->
<div class="slider-wrap">
  <div class="owl-carousel" data-autoplay="true" data-autoplaytimeout="5500" data-bg_effect="true" data-dots="true" data-nav="true" id="slider_1">
    
    <!-- SLIDE 1 -->
    <div class="slider_item_container" data-bg_color="#071526" data-bg_img="{{ asset('assets/images/home_1_slider_1.jpg') }}" data-bg_opacity="0.45">
      <div class="item">
        <div class="slider-content">
          <div class="container text-left">
            <div class="row">
              <div class="slider-bg" data-animation-in="fadeInUp" data-animation-out="zoomInDown">
                <div class="col-sm-12 wow fadeInDown" data-wow-duration="1s">
                  <h3 style="color: #ffd700; font-weight: 700; letter-spacing: 1px;">STRUCTURING YOUR FINANCE | ACCELERATING GROWTH</h3>
                  <h2 class="margin-bottom-12" style="font-weight: 800; text-transform: uppercase;">
                    EMPOWERING BUSINESSES<br>WITH FAST CAPITAL
                  </h2>
                  <p style="color: #e2e8f0; font-size: 16px; max-width: 620px; margin-bottom: 24px;">
                    Collateral-free business loans, CC/OD working capital lines, and customized financing solutions for startups, SMEs, and growing enterprises.
                  </p>
                  <a class="btn btn-theme" href="{{ route('contact') }}" style="font-weight: 700;">APPLY FOR LOAN</a>
                  <a class="btn btn-theme btn-theme-white" href="{{ route('services') }}" style="font-weight: 700; margin-left: 8px;">EXPLORE SERVICES</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SLIDE 2 -->
    <div class="slider_item_container" data-bg_color="#071526" data-bg_img="{{ asset('assets/images/home_1_slider_2.jpg') }}" data-bg_opacity="0.45">
      <div class="item">
        <div class="slider-content">
          <div class="container text-center">
            <div class="row">
              <div class="slider-bg" data-animation-in="fadeInLeft" data-animation-out="zoomInDown">
                <div class="col-sm-12 wow fadeInLeft" data-wow-duration="1s">
                  <h3 style="color: #ffd700; font-weight: 700; letter-spacing: 1px;">UP TO ₹25 CRORES FUNDING</h3>
                  <h2 class="margin-bottom-12" style="font-weight: 800; text-transform: uppercase;">
                    TAILORED CORPORATE<br>FINANCING SOLUTIONS
                  </h2>
                  <p style="color: #e2e8f0; font-size: 16px; max-width: 650px; margin: 0 auto 24px auto;">
                    Partnered with 40+ leading Banks and NBFCs to ensure the most competitive interest rates and seamless loan disbursement.
                  </p>
                  <a class="btn btn-theme" href="{{ route('contact') }}" style="font-weight: 700;">CHECK ELIGIBILITY</a>
                  <a class="btn btn-theme btn-theme-white btn-invert" href="{{ route('about') }}" style="font-weight: 700; margin-left: 8px;">ABOUT FINBEX</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SLIDE 3 -->
    <div class="slider_item_container" data-bg_color="#071526" data-bg_img="{{ asset('assets/images/home_1_slider_3.jpg') }}" data-bg_opacity="0.45">
      <div class="item">
        <div class="slider-content">
          <div class="container text-left">
            <div class="row">
              <div class="slider-bg" data-animation-in="fadeInDown" data-animation-out="zoomInDown">
                <div class="col-sm-12 wow fadeInLeft" data-wow-duration="1s">
                  <h3 style="color: #ffd700; font-weight: 700; letter-spacing: 1px;">UNBLOCK WORKING CAPITAL</h3>
                  <h2 class="margin-bottom-12" style="font-weight: 800; text-transform: uppercase;">
                    MACHINERY LOANS &amp;<br>INVOICE DISCOUNTING
                  </h2>
                  <p style="color: #e2e8f0; font-size: 16px; max-width: 600px; margin-bottom: 24px;">
                    Convert your unpaid invoices and business assets into immediate cash liquidity within 24 to 48 hours.
                  </p>
                  <a class="btn btn-theme" href="{{ route('contact') }}" style="font-weight: 700;">GET STARTED NOW</a>
                  <a class="btn btn-theme btn-theme-white" href="{{ route('faq') }}" style="font-weight: 700; margin-left: 8px;">VIEW FAQ</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <span class="hero-growth-arrow" aria-hidden="true"><i class="fa fa-line-chart"></i></span>
</div>

<!-- QUICK CTA BAND -->
<section class="cta-layout-02 section-primary-bg" style="padding: 24px 0; background: linear-gradient(135deg, #004c8f 0%, #002d5a 100%);">
  <div class="container">
    <div class="row" style="display: flex; align-items: center; flex-wrap: wrap;">
      <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 wow fadeInLeft">
        <h3 class="text-light-color" style="margin: 0 0 6px 0; font-weight: 700; font-size: 22px;">
          Need Immediate Business Funding? Check Your Eligibility in 2 Minutes.
        </h3>
        <p class="text-light-color" style="margin: 0; font-size: 14px; opacity: 0.9;">
          Fast approvals, minimal documentation, and dedicated guidance by senior financial advisors.
        </p>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 text-right wow fadeInRight" style="margin-top: 10px;">
        <a class="btn btn-theme btn-square btn-theme-invert" href="{{ route('contact') }}" style="font-weight: 700; padding: 12px 24px;">
          APPLY ONLINE NOW <i class="fa fa-arrow-right" style="margin-left: 4px;"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- OUR SERVICES SECTION -->
<section class="section-content-block finbex-services-section">
  <div class="container">
    <div class="row section-heading-wrapper text-center wow fadeInUp">
      <div class="col-md-12">
        <h4 class="heading-alt-style text-capitalize text-dark-color">Comprehensive Financial Services</h4>
        <span class="heading-separator heading-separator-horizontal"></span>
        <h2 class="subheading-alt-style">
          Tailored business loan products and credit facilities designed to fuel your company's growth.
        </h2>
      </div>
    </div>

    <div class="row">
      <!-- 1. Unsecured Business Loans -->
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="finbex-service-card wow fadeInUp" data-wow-delay="0.05s">
          <span class="service-badge">Collateral Free</span>
          <div class="service-icon-wrap"><i class="fa fa-briefcase"></i></div>
          <h3>Unsecured Business Loans</h3>
          <p>Instant working capital and expansion loans without mortgaging property or assets.</p>
          <ul class="feature-list">
            <li><i class="fa fa-check-circle"></i> Loan amount up to ₹2 Crores</li>
            <li><i class="fa fa-check-circle"></i> Fast approval within 24 to 48 hours</li>
            <li><i class="fa fa-check-circle"></i> Flexible repayment tenure up to 5 years</li>
          </ul>
          <div class="card-actions">
            <a href="{{ route('service.details', ['slug'=>'unsecured-business-loans']) }}" class="btn btn-default btn-square">Learn More</a>
            <a href="{{ route('contact') }}" class="btn btn-theme btn-square">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- 2. MCA / POS Loans -->
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="finbex-service-card wow fadeInUp" data-wow-delay="0.15s">
          <span class="service-badge" style="background: linear-gradient(135deg, #10b981 0%, #047857 100%);">Daily Flexible</span>
          <div class="service-icon-wrap"><i class="fa fa-credit-card"></i></div>
          <h3>MCA / POS Swipe Loans</h3>
          <p>Merchant financing linked directly to daily credit/debit card swipe machine turnover.</p>
          <ul class="feature-list">
            <li><i class="fa fa-check-circle"></i> Repayment through daily card sales</li>
            <li><i class="fa fa-check-circle"></i> Ideal for retail, restaurants &amp; marts</li>
            <li><i class="fa fa-check-circle"></i> No fixed monthly EMI stress</li>
          </ul>
          <div class="card-actions">
            <a href="{{ route('service.details', ['slug'=>'mca-pos-loans']) }}" class="btn btn-default btn-square">Learn More</a>
            <a href="{{ route('contact') }}" class="btn btn-theme btn-square">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- 3. Working Capital CC / OD -->
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="finbex-service-card wow fadeInUp" data-wow-delay="0.25s">
          <span class="service-badge">Liquidity Support</span>
          <div class="service-icon-wrap"><i class="fa fa-refresh"></i></div>
          <h3>Working Capital (CC / OD)</h3>
          <p>Revolving Cash Credit and Overdraft facilities to cover daily operational expenses and inventory.</p>
          <ul class="feature-list">
            <li><i class="fa fa-check-circle"></i> Pay interest only on utilized limit</li>
            <li><i class="fa fa-check-circle"></i> Seamless vendor &amp; salary payments</li>
            <li><i class="fa fa-check-circle"></i> Annual limit renewal &amp; enhancement</li>
          </ul>
          <div class="card-actions">
            <a href="{{ route('service.details', ['slug'=>'working-capital-cc-od']) }}" class="btn btn-default btn-square">Learn More</a>
            <a href="{{ route('contact') }}" class="btn btn-theme btn-square">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- 4. Machinery & Equipment Loans -->
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="finbex-service-card wow fadeInUp" data-wow-delay="0.35s">
          <span class="service-badge">Asset Financing</span>
          <div class="service-icon-wrap"><i class="fa fa-cogs"></i></div>
          <h3>Machinery &amp; Equipment Loans</h3>
          <p>Fund the purchase, upgrade, or lease of industrial equipment and manufacturing machinery.</p>
          <ul class="feature-list">
            <li><i class="fa fa-check-circle"></i> Up to 90% equipment value funded</li>
            <li><i class="fa fa-check-circle"></i> New &amp; refurbished machinery eligible</li>
            <li><i class="fa fa-check-circle"></i> Tax depreciation benefits</li>
          </ul>
          <div class="card-actions">
            <a href="{{ route('service.details', ['slug'=>'machinery-equipment-loans']) }}" class="btn btn-default btn-square">Learn More</a>
            <a href="{{ route('contact') }}" class="btn btn-theme btn-square">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- 5. Loan Against Property -->
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="finbex-service-card wow fadeInUp" data-wow-delay="0.45s">
          <span class="service-badge" style="background: linear-gradient(135deg, #d4af37 0%, #a6841d 100%);">High Value</span>
          <div class="service-icon-wrap"><i class="fa fa-building"></i></div>
          <h3>Loan Against Property (LAP)</h3>
          <p>Unlock high-value long-tenure capital by leveraging commercial, residential, or industrial property.</p>
          <ul class="feature-list">
            <li><i class="fa fa-check-circle"></i> High loan ticket sizes up to ₹25 Cr+</li>
            <li><i class="fa fa-check-circle"></i> Lower interest rates &amp; long tenure</li>
            <li><i class="fa fa-check-circle"></i> Retain full commercial usage</li>
          </ul>
          <div class="card-actions">
            <a href="{{ route('service.details', ['slug'=>'loan-against-property']) }}" class="btn btn-default btn-square">Learn More</a>
            <a href="{{ route('contact') }}" class="btn btn-theme btn-square">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- 6. Invoice Discounting -->
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="finbex-service-card wow fadeInUp" data-wow-delay="0.55s">
          <span class="service-badge">Instant Cash Flow</span>
          <div class="service-icon-wrap"><i class="fa fa-file-text-o"></i></div>
          <h3>Supply Chain &amp; Invoice Discounting</h3>
          <p>Bridge the 30-90 day invoice payment gap and get immediate cash against verified client invoices.</p>
          <ul class="feature-list">
            <li><i class="fa fa-check-circle"></i> Up to 85-90% invoice value in 24h</li>
            <li><i class="fa fa-check-circle"></i> Off-balance sheet financing option</li>
            <li><i class="fa fa-check-circle"></i> Scale supply chain without cash crunch</li>
          </ul>
          <div class="card-actions">
            <a href="{{ route('service.details', ['slug'=>'invoice-discounting']) }}" class="btn btn-default btn-square">Learn More</a>
            <a href="{{ route('contact') }}" class="btn btn-theme btn-square">Apply Now</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12 text-center" style="margin-top: 15px;">
        <a class="btn btn-theme btn-square" href="{{ route('services') }}" style="padding: 12px 32px; font-weight: 700;">
          VIEW ALL FINANCING SERVICES <i class="fa fa-arrow-right" style="margin-left: 6px;"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- 4-STEP LOAN PROCESS SECTION (REPLACED EMPTY BRAND SECTION) -->
<section class="section-content-block section-secondary-bg" style="padding-top: 60px; padding-bottom: 60px;">
  <div class="container">
    <div class="row section-heading-wrapper text-center wow fadeInUp">
      <div class="col-md-12">
        <h4 class="heading-alt-style text-capitalize text-dark-color">How It Works</h4>
        <span class="heading-separator heading-separator-horizontal"></span>
        <h2 class="subheading-alt-style">
          Simple, Transparent &amp; Fast 4-Step Loan Approval Process
        </h2>
      </div>
    </div>

    <div class="row process-steps-row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="process-step-card wow fadeInUp" data-wow-delay="0.1s">
          <div class="process-step-number">1</div>
          <h4>Apply Online</h4>
          <p>Submit your basic business profile and funding requirement online or via direct consultation.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="process-step-card wow fadeInUp" data-wow-delay="0.25s">
          <div class="process-step-number">2</div>
          <h4>Quick Verification</h4>
          <p>Our experts review your GST, bank statements, and business financials to match top lender terms.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="process-step-card wow fadeInUp" data-wow-delay="0.4s">
          <div class="process-step-number">3</div>
          <h4>Sanction &amp; Approval</h4>
          <p>Get formal sanction offers with competitive interest rates and transparent loan terms.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="process-step-card wow fadeInUp" data-wow-delay="0.55s">
          <div class="process-step-number">4</div>
          <h4>Disbursal to Account</h4>
          <p>Funds credited directly into your business bank account within 24 to 48 hours of sanction.</p>
        </div>
      </div>
    </div>

    <!-- TRUST STATS GRID -->
    <div class="row">
      <div class="col-md-12">
        <div class="trust-stats-grid">
          <span class="tsg-glow"></span>
          <span class="tsg-shape tsg-shape-1"></span>
          <span class="tsg-shape tsg-shape-2"></span>
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 trust-stat-item">
              <div class="trust-stat-number wow zoomIn" data-wow-delay="0.1s">₹500 Cr+</div>
              <div class="trust-stat-label wow fadeInUp" data-wow-delay="0.25s">Total Loans Disbursed</div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 trust-stat-item">
              <div class="trust-stat-number wow zoomIn" data-wow-delay="0.25s">40+</div>
              <div class="trust-stat-label wow fadeInUp" data-wow-delay="0.4s">Banking &amp; NBFC Partners</div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 trust-stat-item">
              <div class="trust-stat-number wow zoomIn" data-wow-delay="0.4s">24 - 48 Hrs</div>
              <div class="trust-stat-label wow fadeInUp" data-wow-delay="0.55s">Average Approval TAT</div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 trust-stat-item">
              <div class="trust-stat-number wow zoomIn" data-wow-delay="0.55s">99%</div>
              <div class="trust-stat-label wow fadeInUp" data-wow-delay="0.7s">Client Satisfaction</div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ABOUT FINBEX INTRO SECTION -->
<section class="section-content-block section-custom-bg no-bottom-padding" data-bg_color="#edf0f2" data-bg_img="{{ asset('assets/images/bg-gradient-right.png') }}" data-bg_opacity="0.3" data-bg_position="bottom right" data-bg_size="contain">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
        <div class="row margin-bottom-48">
          <div class="about-us-intro wow fadeInRight">
            <div class="col-md-12 col-sm-12 text-left margin-bottom-24">
              <h4 style="color: #004c8f; font-weight: 700; text-transform: uppercase;">About Our Company</h4>
              <h2 class="block-heading-title margin-top-12 text-dark-color" style="font-size: 26px;">
                FINBEX CORPORATE SOLUTIONS PRIVATE LIMITED
              </h2>
              <p style="font-size: 15px; line-height: 1.7; color: #475569;">
                Headquartered in CBD Belapur, Navi Mumbai, Finbex is dedicated to providing end-to-end corporate financing, credit structuring, and business advisory services. We bridge the gap between Indian enterprises and institutional capital.
              </p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="highlight-layout-2">
              <div class="highlight-icon"><i class="fa fa-handshake-o"></i></div>
              <div class="highlight-text">
                <h5><a href="{{ route('about') }}">Dedicated Advisory</a></h5>
                <div>Personalized loan structuring aligned with your cash flow and growth objectives.</div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="highlight-layout-2">
              <div class="highlight-icon"><i class="fa fa-bolt"></i></div>
              <div class="highlight-text">
                <h5><a href="{{ route('services') }}">Rapid Turnaround</a></h5>
                <div>Minimal documentation and swift processing through our direct lending desk.</div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="highlight-layout-2">
              <div class="highlight-icon"><i class="fa fa-shield"></i></div>
              <div class="highlight-text">
                <h5><a href="{{ route('about') }}">100% Transparency</a></h5>
                <div>Zero hidden charges, clear terms, and competitive institutional interest rates.</div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="highlight-layout-2">
              <div class="highlight-icon"><i class="fa fa-users"></i></div>
              <div class="highlight-text">
                <h5><a href="{{ route('team') }}">Experienced Team</a></h5>
                <div>Ex-bankers and seasoned corporate finance professionals managing your portfolio.</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs hidden-md">
        <figure class="about-us-img wow fadeInLeft about-us-stick-bottom">
          <img alt="Finbex Corporate Finance" src="{{ asset('assets/images/about_person_bg.png') }}">
        </figure>
      </div>
    </div>
  </div>
</section>

<!-- PROJECTS & CASE STUDIES GALLERY -->
<section class="section-content-block">
  <div class="container">
    <div class="row section-heading-wrapper text-center wow fadeInUp">
      <div class="col-md-12">
        <h4 class="heading-alt-style text-capitalize text-dark-color">Industry Sectors We Serve</h4>
        <span class="heading-separator heading-separator-horizontal"></span>
        <h2 class="subheading-alt-style">
          Financing solutions across diverse business domains and industrial sectors
        </h2>
      </div>
    </div>

    <div class="row margin-bottom-24">
      <div class="col-md-3 col-sm-6 col-xs-12 gallery-container wow fadeInUp" data-wow-delay="0.05s">
        <a class="gallery-light-box industry-card" data-gall="myGallery" href="{{ asset('assets/images/gallery_1.jpg') }}">
          <span class="industry-media"><img alt="Manufacturing Finance" src="{{ asset('assets/images/gallery_1.jpg') }}"></span>
          <span class="industry-overlay">
            <span class="industry-accent"></span>
            <span class="industry-name">Manufacturing</span>
            <span class="industry-desc">Flexible finance solutions for production &amp; plant expansion.</span>
          </span>
        </a>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 gallery-container wow fadeInUp" data-wow-delay="0.15s" style="margin-top: 18px;">
        <a class="gallery-light-box industry-card" data-gall="myGallery" href="{{ asset('assets/images/gallery_2.jpg') }}">
          <span class="industry-media"><img alt="Retail & Merchant Loans" src="{{ asset('assets/images/gallery_2.jpg') }}"></span>
          <span class="industry-overlay">
            <span class="industry-accent"></span>
            <span class="industry-name">Retail &amp; Merchants</span>
            <span class="industry-desc">Daily-turnover linked funding for shops, marts &amp; restaurants.</span>
          </span>
        </a>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 gallery-container wow fadeInUp" data-wow-delay="0.25s">
        <a class="gallery-light-box industry-card" data-gall="myGallery" href="{{ asset('assets/images/gallery_3.jpg') }}">
          <span class="industry-media"><img alt="Infrastructure & LAP" src="{{ asset('assets/images/gallery_3.jpg') }}"></span>
          <span class="industry-overlay">
            <span class="industry-accent"></span>
            <span class="industry-name">Infrastructure</span>
            <span class="industry-desc">High-value property-backed capital for long-term projects.</span>
          </span>
        </a>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 gallery-container wow fadeInUp" data-wow-delay="0.35s" style="margin-top: 18px;">
        <a class="gallery-light-box industry-card" data-gall="myGallery" href="{{ asset('assets/images/gallery_4.jpg') }}">
          <span class="industry-media"><img alt="Machinery Procurement" src="{{ asset('assets/images/gallery_4.jpg') }}"></span>
          <span class="industry-overlay">
            <span class="industry-accent"></span>
            <span class="industry-name">Machinery</span>
            <span class="industry-desc">Equipment financing to modernize and scale operations.</span>
          </span>
        </a>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 gallery-container wow fadeInUp" data-wow-delay="0.05s">
        <a class="gallery-light-box industry-card" data-gall="myGallery" href="{{ asset('assets/images/gallery_5.jpg') }}">
          <span class="industry-media"><img alt="Supply Chain Liquidity" src="{{ asset('assets/images/gallery_5.jpg') }}"></span>
          <span class="industry-overlay">
            <span class="industry-accent"></span>
            <span class="industry-name">Supply Chain</span>
            <span class="industry-desc">Invoice discounting to unlock working capital fast.</span>
          </span>
        </a>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 gallery-container wow fadeInUp" data-wow-delay="0.15s" style="margin-top: 18px;">
        <a class="gallery-light-box industry-card" data-gall="myGallery" href="{{ asset('assets/images/gallery_6.jpg') }}">
          <span class="industry-media"><img alt="Healthcare & Medical Equipment" src="{{ asset('assets/images/gallery_6.jpg') }}"></span>
          <span class="industry-overlay">
            <span class="industry-accent"></span>
            <span class="industry-name">Healthcare</span>
            <span class="industry-desc">Funding for clinics, diagnostics &amp; medical equipment.</span>
          </span>
        </a>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 gallery-container wow fadeInUp" data-wow-delay="0.25s">
        <a class="gallery-light-box industry-card" data-gall="myGallery" href="{{ asset('assets/images/gallery_7.jpg') }}">
          <span class="industry-media"><img alt="Export-Import Trade Finance" src="{{ asset('assets/images/gallery_7.jpg') }}"></span>
          <span class="industry-overlay">
            <span class="industry-accent"></span>
            <span class="industry-name">Export-Import</span>
            <span class="industry-desc">Trade finance solutions for cross-border businesses.</span>
          </span>
        </a>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 gallery-container wow fadeInUp" data-wow-delay="0.35s" style="margin-top: 18px;">
        <a class="gallery-light-box industry-card" data-gall="myGallery" href="{{ asset('assets/images/gallery_8.jpg') }}">
          <span class="industry-media"><img alt="Corporate Expansion" src="{{ asset('assets/images/gallery_8.jpg') }}"></span>
          <span class="industry-overlay">
            <span class="industry-accent"></span>
            <span class="industry-name">Corporate Growth</span>
            <span class="industry-desc">Structured capital to fuel expansion &amp; new ventures.</span>
          </span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS SECTION -->
<section class="section-content-block section-secondary-bg">
  <div class="container">
    <div class="row section-heading-wrapper text-center wow fadeInUp">
      <div class="col-md-12">
        <h4 class="heading-alt-style text-capitalize text-dark-color">Client Testimonials</h4>
        <span class="heading-separator heading-separator-horizontal"></span>
        <h2 class="subheading-alt-style">
          What business leaders and entrepreneurs say about working with Finbex
        </h2>
      </div>
    </div>

    <div class="container theme-custom-box-shadow margin-bottom-24 margin-top-16" style="background: #ffffff; border-radius: 12px; overflow: hidden;">
      <div class="row">
        <div class="col-lg-5 hidden-md hidden-xs hidden-sm no-padding">
          <figure>
            <img alt="Client Stories" class="db" src="{{ asset('assets/images/testimony_feat_img.jpg') }}" style="width: 100%; height: 100%; object-fit: cover;">
          </figure>
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12" style="padding: 30px;">
          <div class="testimonial-container owl-carousel text-left wow fadeInUp" data-items="1">
            
            <div class="item">
              <div class="testimony-layout-1 transparent-bg">
                <div style="color: #ffd700; margin-bottom: 12px; font-size: 16px;">
                  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                </div>
                <p class="testimony-text" style="font-size: 15px; line-height: 1.7; color: #334155;">
                  "Finbex helped us secure an unsecured business loan of ₹75 Lakhs within 48 hours when we needed immediate inventory for a major order. Their team is extremely professional and transparent."
                </p>
                <div class="testimony-info" style="display: flex; align-items: center; gap: 14px; margin-top: 18px;">
                  <img alt="Client Avatar" class="img-responsive" src="{{ asset('assets/images/user_1.jpg') }}" style="width: 55px; height: 55px; border-radius: 50%; object-fit: cover;">
                  <div>
                    <h4 style="margin: 0; font-weight: 700; font-size: 16px; color: #0b1d33;">Ramesh Sharma</h4>
                    <h6 style="margin: 4px 0 0 0; color: #64748b; font-size: 13px;">Director, Apex Manufacturing Pvt Ltd (Thane)</h6>
                  </div>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="testimony-layout-1 transparent-bg">
                <div style="color: #ffd700; margin-bottom: 12px; font-size: 16px;">
                  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                </div>
                <p class="testimony-text" style="font-size: 15px; line-height: 1.7; color: #334155;">
                  "We needed working capital CC limits for our chain of retail stores in Mumbai. Finbex managed the entire banking coordination seamlessly and got us sanctioned at the lowest interest rate."
                </p>
                <div class="testimony-info" style="display: flex; align-items: center; gap: 14px; margin-top: 18px;">
                  <img alt="Client Avatar" class="img-responsive" src="{{ asset('assets/images/user_2.jpg') }}" style="width: 55px; height: 55px; border-radius: 50%; object-fit: cover;">
                  <div>
                    <h4 style="margin: 0; font-weight: 700; font-size: 16px; color: #0b1d33;">Pooja Deshmukh</h4>
                    <h6 style="margin: 4px 0 0 0; color: #64748b; font-size: 13px;">Founder, Metro Retail Hub (Navi Mumbai)</h6>
                  </div>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="testimony-layout-1 transparent-bg">
                <div style="color: #ffd700; margin-bottom: 12px; font-size: 16px;">
                  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                </div>
                <p class="testimony-text" style="font-size: 15px; line-height: 1.7; color: #334155;">
                  "Their invoice discounting facility unlocked our locked receivables and solved our cash flow issues permanently. Outstanding customer support by Mr. Pijush Shaw and team!"
                </p>
                <div class="testimony-info" style="display: flex; align-items: center; gap: 14px; margin-top: 18px;">
                  <img alt="Client Avatar" class="img-responsive" src="{{ asset('assets/images/user_3.jpg') }}" style="width: 55px; height: 55px; border-radius: 50%; object-fit: cover;">
                  <div>
                    <h4 style="margin: 0; font-weight: 700; font-size: 16px; color: #0b1d33;">Amitabh Roy</h4>
                    <h6 style="margin: 4px 0 0 0; color: #64748b; font-size: 13px;">CEO, Horizon Logistics (Mumbai)</h6>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- FAQ PREVIEW & CONTACT CALLOUT -->
<section class="section-content-block">
  <div class="container">
    <div class="row section-heading-wrapper text-center wow fadeInUp">
      <div class="col-md-12">
        <h4 class="heading-alt-style text-capitalize text-dark-color">Frequently Asked Questions</h4>
        <span class="heading-separator heading-separator-horizontal"></span>
        <h2 class="subheading-alt-style">
          Common queries answered regarding business loans and credit eligibility
        </h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div class="finbex-faq-card panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#homeFaq1">
                What are the basic eligibility criteria for an unsecured business loan?
                <i class="fa fa-chevron-down"></i>
              </a>
            </h4>
          </div>
          <div id="homeFaq1" class="panel-collapse collapse in">
            <div class="panel-body">
              Your business should be operating for at least 1-2 years with minimum annual turnover of ₹25-40 Lakhs, active GST registration, clean bank banking history, and a healthy CIBIL score (680+).
            </div>
          </div>
        </div>

        <div class="finbex-faq-card panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" href="#homeFaq2">
                What documents are needed to apply for a business loan?
                <i class="fa fa-chevron-down"></i>
              </a>
            </h4>
          </div>
          <div id="homeFaq2" class="panel-collapse collapse">
            <div class="panel-body">
              Key documents include KYC (PAN &amp; Aadhaar of promoters), Business Registration proof (GST / Udyam / Certificate of Incorporation), 12 months Bank Statements, and last 2 years ITR with computation.
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="finbex-faq-card panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" href="#homeFaq3">
                How quickly can funds be disbursed into our business account?
                <i class="fa fa-chevron-down"></i>
              </a>
            </h4>
          </div>
          <div id="homeFaq3" class="panel-collapse collapse">
            <div class="panel-body">
              For unsecured business loans and MCA swipe loans, disbursal typically takes 24 to 48 hours post document submission. Secured loans (LAP) generally take 7 to 10 working days.
            </div>
          </div>
        </div>

        <div class="finbex-faq-card panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" href="#homeFaq4">
                How is an MCA / POS loan different from regular term loans?
                <i class="fa fa-chevron-down"></i>
              </a>
            </h4>
          </div>
          <div id="homeFaq4" class="panel-collapse collapse">
            <div class="panel-body">
              An MCA loan is linked to your daily POS card machine or QR collections. Instead of a large fixed monthly EMI, a small percentage of daily card swipe receipts is deducted, making it flexible for retail merchants.
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row text-center" style="margin-top: 20px;">
      <a href="{{ route('faq') }}" class="btn btn-theme btn-square" style="padding: 12px 28px; font-weight: 700;">
        VIEW ALL FREQUENTLY ASKED QUESTIONS <i class="fa fa-arrow-right" style="margin-left: 6px;"></i>
      </a>
    </div>
  </div>
</section>

<!-- BOTTOM CTA SECTION -->
<section class="cta-layout-02 section-primary-bg" style="background: linear-gradient(135deg, #071526 0%, #004c8f 100%); padding: 50px 0;">
  <div class="container">
    <div class="row" style="display: flex; align-items: center; flex-wrap: wrap;">
      <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 wow fadeInLeft">
        <h2 class="text-light-color" style="font-weight: 800; margin: 0 0 10px 0; font-size: 28px;">
          Ready to Accelerate Your Business Growth?
        </h2>
        <p class="text-light-color" style="font-size: 15px; margin: 0; opacity: 0.9;">
          Speak with our Senior Financial Advisors at CBD Belapur, Navi Mumbai or request an instant callback.
        </p>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 text-center wow fadeInRight" style="margin-top: 12px;">
        <a class="btn btn-theme btn-square btn-theme-invert" href="{{ route('contact') }}" style="font-weight: 700; padding: 14px 28px; font-size: 15px;">
          TALK TO AN ADVISOR
        </a>
      </div>
    </div>
  </div>
</section>

@endsection