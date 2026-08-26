@extends('layouts.app')

@section('title', 'Our Team | FINBEX Corporate Solutions Private Limited')
@section('meta_description', 'Meet the corporate finance advisors, credit analysts, and banking specialists at Finbex Corporate Solutions Private Limited.')

@section('content')

<!-- PAGE HEADING -->
<section class="page-header" data-bg_img="{{ asset('assets/images/header-bg.jpg') }}" data-bg_color="#071526" data-bg_opacity="0.65">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2>Our Advisory Team</h2>
        <p class="page-breadcrumb">
          <a href="{{ route('home') }}">Home</a> / Our Team
        </p>
      </div>
    </div>
  </div>
</section>

<!-- TEAM SECTION -->
<section class="section-content-block section-secondary-bg">
  <div class="container">
    <div class="row section-heading-wrapper text-center">
      <div class="col-md-12">
        <h4 class="heading-alt-style text-capitalize text-dark-color">Dedicated Credit Specialists</h4>
        <span class="heading-separator heading-separator-horizontal"></span>
        <h2 class="subheading-alt-style">
          Experienced corporate finance professionals dedicated to structuring optimal funding solutions for your enterprise.
        </h2>
      </div>
    </div>

    <div class="row">
      <!-- 1 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="team-layout-1 text-center" style="background: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.06); padding-bottom: 16px;">
          <figure class="team-member">
            <a href="{{ route('contact') }}" title="SME Debt Syndication">
              <img alt="SME Debt Syndication" src="{{ asset('assets/images/team_5.jpg') }}">
            </a>
          </figure>
          <article class="team-info" style="padding: 16px;">
            <h3 style="font-size: 17px; font-weight: 700; color: #0b1d33; margin: 0 0 4px 0;">SME Debt Syndication</h3>
            <h4 style="font-size: 13px; color: #004c8f; font-weight: 600; text-transform: uppercase; margin: 0 0 12px 0;">Finbex Advisory Desk</h4>
            <p style="font-size: 13px; color: #64748b; line-height: 1.4; margin-bottom: 14px;">Specializes in unsecured business loans, CC/OD limits, and MSME working capital schemes.</p>
            <div class="team-social-share clearfix">
              <a href="{{ route('contact') }}" title="Email Desk"><i class="fa fa-envelope rectangle"></i></a>
              <a href="tel:9987484159" title="Call Helpline"><i class="fa fa-phone rectangle"></i></a>
              <a href="https://wa.me/919987484159" target="_blank" rel="noopener" title="WhatsApp"><i class="fa fa-whatsapp rectangle" style="background: #25D366; color: #fff;"></i></a>
            </div>
          </article>
        </div>
      </div>

      <!-- 2 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="team-layout-1 text-center" style="background: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.06); padding-bottom: 16px;">
          <figure class="team-member">
            <a href="{{ route('contact') }}" title="Corporate Banking Alliances">
              <img alt="Corporate Banking" src="{{ asset('assets/images/team_6.jpg') }}">
            </a>
          </figure>
          <article class="team-info" style="padding: 16px;">
            <h3 style="font-size: 17px; font-weight: 700; color: #0b1d33; margin: 0 0 4px 0;">Institutional Alliances</h3>
            <h4 style="font-size: 13px; color: #004c8f; font-weight: 600; text-transform: uppercase; margin: 0 0 12px 0;">Finbex Banking Desk</h4>
            <p style="font-size: 13px; color: #64748b; line-height: 1.4; margin-bottom: 14px;">Direct coordination with 40+ Bank &amp; NBFC zonal credit committees for high-ticket LAP.</p>
            <div class="team-social-share clearfix">
              <a href="{{ route('contact') }}" title="Email Desk"><i class="fa fa-envelope rectangle"></i></a>
              <a href="tel:9987484159" title="Call Helpline"><i class="fa fa-phone rectangle"></i></a>
              <a href="https://wa.me/919987484159" target="_blank" rel="noopener" title="WhatsApp"><i class="fa fa-whatsapp rectangle" style="background: #25D366; color: #fff;"></i></a>
            </div>
          </article>
        </div>
      </div>

      <!-- 3 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="team-layout-1 text-center" style="background: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.06); padding-bottom: 16px;">
          <figure class="team-member">
            <a href="{{ route('contact') }}" title="Credit Underwriting">
              <img alt="Credit Underwriting" src="{{ asset('assets/images/team_7.jpg') }}">
            </a>
          </figure>
          <article class="team-info" style="padding: 16px;">
            <h3 style="font-size: 17px; font-weight: 700; color: #0b1d33; margin: 0 0 4px 0;">Credit Underwriting</h3>
            <h4 style="font-size: 13px; color: #004c8f; font-weight: 600; text-transform: uppercase; margin: 0 0 12px 0;">Finbex Risk Desk</h4>
            <p style="font-size: 13px; color: #64748b; line-height: 1.4; margin-bottom: 14px;">Balance sheet analysis, DSCR evaluations, and pre-assessment to prevent file rejections.</p>
            <div class="team-social-share clearfix">
              <a href="{{ route('contact') }}" title="Email Desk"><i class="fa fa-envelope rectangle"></i></a>
              <a href="tel:9987484159" title="Call Helpline"><i class="fa fa-phone rectangle"></i></a>
              <a href="https://wa.me/919987484159" target="_blank" rel="noopener" title="WhatsApp"><i class="fa fa-whatsapp rectangle" style="background: #25D366; color: #fff;"></i></a>
            </div>
          </article>
        </div>
      </div>

      <!-- 4 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="team-layout-1 text-center" style="background: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.06); padding-bottom: 16px;">
          <figure class="team-member">
            <a href="{{ route('contact') }}" title="Client Success & Disbursal">
              <img alt="Client Success" src="{{ asset('assets/images/team_8.jpg') }}">
            </a>
          </figure>
          <article class="team-info" style="padding: 16px;">
            <h3 style="font-size: 17px; font-weight: 700; color: #0b1d33; margin: 0 0 4px 0;">Client Success &amp; Ops</h3>
            <h4 style="font-size: 13px; color: #004c8f; font-weight: 600; text-transform: uppercase; margin: 0 0 12px 0;">Finbex Operations</h4>
            <p style="font-size: 13px; color: #64748b; line-height: 1.4; margin-bottom: 14px;">Swift legal documentation, agreement signing, and 24-48h account disbursal follow-up.</p>
            <div class="team-social-share clearfix">
              <a href="{{ route('contact') }}" title="Email Desk"><i class="fa fa-envelope rectangle"></i></a>
              <a href="tel:9987484159" title="Call Helpline"><i class="fa fa-phone rectangle"></i></a>
              <a href="https://wa.me/919987484159" target="_blank" rel="noopener" title="WhatsApp"><i class="fa fa-whatsapp rectangle" style="background: #25D366; color: #fff;"></i></a>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS SECTION -->
<section class="section-content-block">
  <div class="container">
    <div class="row section-heading-wrapper text-center">
      <div class="col-md-12">
        <h4 class="heading-alt-style text-capitalize text-dark-color">Client Testimonials</h4>
        <span class="heading-separator heading-separator-horizontal"></span>
        <h2 class="subheading-alt-style">
          Trusted by growing businesses and corporate enterprises across Maharashtra &amp; India
        </h2>
      </div>
    </div>

    <div class="container theme-custom-box-shadow margin-bottom-24 margin-top-16" style="background: #ffffff; border-radius: 12px; overflow: hidden; border: 1px solid #e2e8f0;">
      <div class="row">
        <div class="col-lg-5 hidden-md hidden-xs hidden-sm no-padding">
          <figure>
            <img alt="Client Success" class="db" src="{{ asset('assets/images/testimony_feat_img.jpg') }}" style="width: 100%; height: 100%; object-fit: cover;">
          </figure>
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12" style="padding: 30px;">
          <div class="testimonial-container owl-carousel text-left wow fadeInUp" data-items="1">
            <div class="item">
              <div class="testimony-layout-1 transparent-bg">
                <div style="color: #ffd700; margin-bottom: 10px; font-size: 16px;">
                  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                </div>
                <p class="testimony-text" style="font-size: 15px; line-height: 1.7; color: #334155;">
                  "The Finbex team was instrumental in getting our machinery loan approved with minimal documentation. Their thorough banking knowledge saved us weeks of hassle."
                </p>
                <div class="testimony-info" style="display: flex; align-items: center; gap: 14px; margin-top: 18px;">
                  <img alt="Client Avatar" class="img-responsive" src="{{ asset('assets/images/user_1.jpg') }}" style="width: 50px; height: 50px; border-radius: 50%;">
                  <div>
                    <h4 style="margin: 0; font-weight: 700; font-size: 16px; color: #0b1d33;">Nitin Kulkarni</h4>
                    <h6 style="margin: 4px 0 0 0; color: #64748b; font-size: 13px;">MD, Precision Engineering Works (Pune)</h6>
                  </div>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="testimony-layout-1 transparent-bg">
                <div style="color: #ffd700; margin-bottom: 10px; font-size: 16px;">
                  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                </div>
                <p class="testimony-text" style="font-size: 15px; line-height: 1.7; color: #334155;">
                  "Exceptional responsiveness and clear loan terms. We obtained ₹1.2 Cr unsecured business funding seamlessly through Finbex."
                </p>
                <div class="testimony-info" style="display: flex; align-items: center; gap: 14px; margin-top: 18px;">
                  <img alt="Client Avatar" class="img-responsive" src="{{ asset('assets/images/user_2.jpg') }}" style="width: 50px; height: 50px; border-radius: 50%;">
                  <div>
                    <h4 style="margin: 0; font-weight: 700; font-size: 16px; color: #0b1d33;">Shweta Sharma</h4>
                    <h6 style="margin: 4px 0 0 0; color: #64748b; font-size: 13px;">Director, Zenith Pharmaceuticals (Vashi)</h6>
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

<!-- BOTTOM CTA -->
<section class="cta-layout-02 section-primary-bg" style="background: linear-gradient(135deg, #071526 0%, #004c8f 100%); padding: 48px 0;">
  <div class="container">
    <div class="row" style="display: flex; align-items: center; flex-wrap: wrap;">
      <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
        <h2 class="text-light-color" style="font-weight: 800; margin: 0 0 8px 0; font-size: 26px;">
          Need a Confidential Loan Assessment for Your Business?
        </h2>
        <p class="text-light-color" style="font-size: 15px; margin: 0; opacity: 0.9;">
          Connect directly with our senior loan advisors at our CBD Belapur, Navi Mumbai office.
        </p>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 text-center" style="margin-top: 10px;">
        <a class="btn btn-theme btn-square btn-theme-invert" href="{{ route('contact') }}" style="font-weight: 700; padding: 12px 26px;">
          CONNECT WITH TEAM <i class="fa fa-arrow-right" style="margin-left: 4px;"></i>
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
