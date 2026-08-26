@extends('layouts.app')

@section('title', $service['title'] . ' | FINBEX Corporate Solutions Private Limited')
@section('meta_description', $service['description'])

@section('content')

<section class="page-header" data-bg_img="{{ asset('assets/images/header-bg.jpg') }}" data-bg_color="#071526" data-bg_opacity="0.65">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2>{{ $service['title'] }}</h2>
        <p class="page-breadcrumb">
          <a href="{{ route('home') }}">Home</a> / <a href="{{ route('services') }}">Services</a> / {{ $service['title'] }}
        </p>
      </div>
    </div>
  </div>
</section>

<section class="section-content-block">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12">
        <div class="service-details" style="background: #ffffff; border-radius: 12px; padding: 24px; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
          <div class="service-details-image" style="margin-bottom: 24px; border-radius: 8px; overflow: hidden;">
            <img src="{{ asset('assets/images/service_single.jpg') }}" alt="{{ $service['title'] }}" class="img-responsive" style="width: 100%; border-radius: 8px;">
          </div>
          
          <div class="service-details-content">
            <h2 style="font-size: 26px; font-weight: 800; color: #0b1d33; margin-top: 0; margin-bottom: 12px;">{{ $service['title'] }}</h2>
            <p style="font-size: 15.5px; line-height: 1.7; color: #475569; margin-bottom: 24px;">{{ $service['description'] }}</p>
            
            <h3 style="font-size: 20px; font-weight: 700; color: #004c8f; margin-bottom: 12px;">Overview &amp; Strategic Advantages</h3>
            <p style="font-size: 15px; line-height: 1.7; color: #475569; margin-bottom: 20px;">{{ $service['details'] }}</p>
            
            <h4 style="font-size: 18px; font-weight: 700; color: #1e293b; margin-top: 24px; margin-bottom: 14px;">Key Highlights &amp; Features</h4>
            <ul class="custom-bullet-list" style="margin-bottom: 28px;">
              @foreach($service['points'] as $point)
                <li style="font-size: 14.5px; margin-bottom: 10px; color: #334155;"><i class="fa fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> {{ $point }}</li>
              @endforeach
            </ul>

            <!-- DOCUMENT CHECKLIST BOX -->
            <div style="background: #f8fafc; border-radius: 8px; padding: 20px; border-left: 4px solid #004c8f; margin-bottom: 28px;">
              <h4 style="margin: 0 0 10px 0; font-size: 16px; font-weight: 700; color: #004c8f;">Standard Document Checklist</h4>
              <p style="margin: 0 0 10px 0; font-size: 13.5px; color: #64748b;">To fast-track your approval, keep the following documents ready:</p>
              <ul style="margin: 0; padding-left: 18px; font-size: 13.5px; color: #334155; line-height: 1.6;">
                <li>KYC Documents: PAN Card &amp; Aadhaar Card of Directors / Partners / Proprietor</li>
                <li>Business Proof: GST Certificate, Udyam Registration, Certificate of Incorporation</li>
                <li>Financials: Last 2 Years Audited / CA Certified ITR with Balance Sheet &amp; Computation</li>
                <li>Banking: Last 12 Months Current Account Bank Statements in PDF</li>
              </ul>
            </div>

            <div style="display: flex; gap: 12px; flex-wrap: wrap;">
              <a href="{{ route('contact') }}" class="btn btn-theme btn-square" style="padding: 12px 28px; font-weight: 700;">
                APPLY FOR THIS LOAN <i class="fa fa-arrow-right" style="margin-left: 6px;"></i>
              </a>
              <a href="https://wa.me/919987484159?text=Hello%20Finbex,%20I%20am%20interested%20in%20{{ urlencode($service['title']) }}" target="_blank" rel="noopener" class="btn btn-theme btn-theme-invert" style="background: #25D366; color: #fff; border-color: #25D366; padding: 12px 24px; font-weight: 700;">
                <i class="fa fa-whatsapp"></i> Chat with Advisor
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-12">
        <aside class="sidebar">
          <div class="sidebar-widget" style="background: #ffffff; border-radius: 12px; padding: 24px; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px rgba(0,0,0,0.05); margin-bottom: 24px;">
            <div class="sidebar-widget-header" style="border-bottom: 2px solid #f1f5f9; padding-bottom: 12px; margin-bottom: 16px;">
              <h3 style="font-size: 18px; font-weight: 700; color: #0b1d33; margin: 0;">All Financing Services</h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
              @foreach($services as $slug => $item)
                <li class="{{ $slug === $currentSlug ? 'active' : '' }}" style="margin-bottom: 6px;">
                  <a href="{{ route('service.details', ['slug'=>$slug]) }}" style="font-weight: 600; border-radius: 6px;">
                    <i class="fa fa-angle-right" style="margin-right: 6px;"></i> {{ $item['title'] }}
                  </a>
                </li>
              @endforeach
            </ul>
          </div>

          <div class="sidebar-widget" style="background: linear-gradient(135deg, #071526 0%, #004c8f 100%); color: #ffffff; border-radius: 12px; padding: 24px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
            <div class="sidebar-widget-header" style="border-bottom: 1px solid rgba(255,255,255,0.15); padding-bottom: 12px; margin-bottom: 16px;">
              <h3 style="font-size: 18px; font-weight: 700; color: #ffd700; margin: 0;">Need Quick Loan Assistance?</h3>
            </div>
            <p style="font-size: 13.5px; color: #e2e8f0; line-height: 1.5; margin-bottom: 16px;">
              Speak directly with our Chief Loan Advisor at our CBD Belapur, Navi Mumbai office.
            </p>
            <p style="margin-bottom: 10px;"><i class="fa fa-phone" style="color: #ffd700; margin-right: 8px;"></i> <a href="tel:9987484159" style="color: #ffffff; font-weight: 700;">+91 9987484159</a></p>
            <p style="margin-bottom: 10px;"><i class="fa fa-envelope" style="color: #ffd700; margin-right: 8px;"></i> <a href="mailto:Pijush.shaw@gmail.com" style="color: #ffffff;">Pijush.shaw@gmail.com</a></p>
            <p style="margin-bottom: 18px;"><i class="fa fa-map-marker" style="color: #ffd700; margin-right: 8px;"></i> CBD Belapur, Navi Mumbai</p>
            <a href="{{ route('contact') }}" class="btn btn-theme btn-block btn-square" style="background: #ffd700; color: #0b1d33; font-weight: 700; border: none;">
              REQUEST CALLBACK
            </a>
          </div>
        </aside>
      </div>
    </div>
  </div>
</section>

@endsection
