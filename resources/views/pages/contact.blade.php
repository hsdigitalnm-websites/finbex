@extends('layouts.app')

@section('title', 'Contact Us | FINBEX Corporate Solutions Private Limited')
@section('meta_description', 'Get in touch with Finbex Corporate Solutions in CBD Belapur, Navi Mumbai for unsecured business loans, MCA loans, CC/OD lines, and corporate advisory.')

@section('content')

<!-- PAGE HEADER -->
<section class="page-header" data-bg_img="{{ asset('assets/images/header-bg.jpg') }}" data-bg_color="#0b1d33" data-bg_opacity="0.6">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2>Contact Finbex Corporate Solutions</h2>
        <p class="page-breadcrumb">
          <a href="{{ route('home') }}">Home</a> / Contact Us
        </p>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT INFO CARDS -->
<section class="section-content-block" style="padding-bottom: 20px;">
  <div class="container">
    <div class="row section-heading-wrapper text-center">
      <div class="col-md-12">
        <h4 class="heading-alt-style text-capitalize text-dark-color">Get In Touch</h4>
        <span class="heading-separator heading-separator-horizontal"></span>
        <h2 class="subheading-alt-style">
          Have a business funding requirement or financial inquiry? Our team is here to assist you.
        </h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="contact-info-card">
          <div class="card-icon"><i class="fa fa-map-marker"></i></div>
          <div>
            <h4>Head Office</h4>
            <p>Office No - 306 Sai Chambers, Plot 44, Sector 11, CBD Belapur, Navi Mumbai - 400614</p>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="contact-info-card">
          <div class="card-icon"><i class="fa fa-phone"></i></div>
          <div>
            <h4>Call Us Directly</h4>
            <p><a href="tel:9987484159">+91 9987484159</a></p>
            <p style="font-size: 12px; color: #64748b; margin-top: 4px;">Mon - Sat, 9:30 AM - 6:30 PM</p>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="contact-info-card">
          <div class="card-icon" style="background: #e8faf0; color: #25D366;"><i class="fa fa-whatsapp"></i></div>
          <div>
            <h4>WhatsApp Support</h4>
            <p><a href="https://wa.me/919987484159?text=Hello%20Finbex,%20I%20want%20to%20apply%20for%20business%20loan" target="_blank" rel="noopener" style="color: #25D366;">Chat on WhatsApp</a></p>
            <p style="font-size: 12px; color: #64748b; margin-top: 4px;">Quick response within 1 hour</p>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="contact-info-card">
          <div class="card-icon"><i class="fa fa-envelope-o"></i></div>
          <div>
            <h4>Email Support</h4>
            <p><a href="mailto:Pijush.shaw@gmail.com">Pijush.shaw@gmail.com</a></p>
            <p style="font-size: 12px; color: #64748b; margin-top: 4px;">Official business inquiries</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MAIN FORM & MAP SECTION -->
<section class="section-content-block section-secondary-bg" style="padding-top: 40px; padding-bottom: 70px;">
  <div class="container">
    <div class="row">
      <!-- FORM -->
      <div class="col-md-7 col-sm-12">
        <div class="modern-form-wrapper">
          <h3 style="font-size: 24px; font-weight: 700; color: #0b1d33; margin-top: 0; margin-bottom: 12px;">
            Apply for Loan / Request Consultation
          </h3>
          <p style="color: #64748b; margin-bottom: 24px; font-size: 14px;">
            Fill out the form below and one of our dedicated loan advisors will connect with you within 24 business hours.
          </p>

          <div id="contact-alert" class="alert alert-success" style="display: none; border-radius: 6px;">
            <i class="fa fa-check-circle"></i> Thank you! Your request has been received. Our loan advisor will call you shortly.
          </div>

          <form id="finbex-contact-form" onsubmit="handleContactSubmit(event)">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                <label style="font-weight: 600; font-size: 13px; color: #334155;">Full Name *</label>
                <input type="text" class="form-control" name="full_name" placeholder="e.g. Rajesh Kumar" required>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                <label style="font-weight: 600; font-size: 13px; color: #334155;">Business / Company Name *</label>
                <input type="text" class="form-control" name="company_name" placeholder="e.g. RK Enterprises Pvt Ltd" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                <label style="font-weight: 600; font-size: 13px; color: #334155;">Mobile Number *</label>
                <input type="tel" class="form-control" name="phone" placeholder="e.g. 9876543210" pattern="[0-9]{10}" required>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                <label style="font-weight: 600; font-size: 13px; color: #334155;">Email Address *</label>
                <input type="email" class="form-control" name="email" placeholder="e.g. rajesh@example.com" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                <label style="font-weight: 600; font-size: 13px; color: #334155;">Required Financing Service *</label>
                <select class="form-control" name="service_type" required>
                  <option value="">Select Service</option>
                  <option value="Unsecured Business Loan">Unsecured Business Loan (Up to ₹2 Cr)</option>
                  <option value="MCA / POS Swipe Loan">MCA / POS Swipe Loan</option>
                  <option value="Working Capital (CC / OD)">Working Capital Facilities (CC / OD)</option>
                  <option value="Machinery & Equipment Loan">Machinery &amp; Equipment Loan</option>
                  <option value="Loan Against Property">Loan Against Property (LAP)</option>
                  <option value="Invoice Discounting">Supply Chain &amp; Invoice Discounting</option>
                  <option value="Corporate Advisory">Corporate Financial Advisory</option>
                </select>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                <label style="font-weight: 600; font-size: 13px; color: #334155;">Loan Amount Required *</label>
                <select class="form-control" name="loan_amount" required>
                  <option value="">Select Amount</option>
                  <option value="₹5 Lakhs - ₹25 Lakhs">₹5 Lakhs - ₹25 Lakhs</option>
                  <option value="₹25 Lakhs - ₹50 Lakhs">₹25 Lakhs - ₹50 Lakhs</option>
                  <option value="₹50 Lakhs - ₹2 Crores">₹50 Lakhs - ₹2 Crores</option>
                  <option value="₹2 Crores - ₹5 Crores">₹2 Crores - ₹5 Crores</option>
                  <option value="Above ₹5 Crores">Above ₹5 Crores</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label style="font-weight: 600; font-size: 13px; color: #334155;">Message / Requirement Details</label>
              <textarea class="form-control" name="message" rows="4" placeholder="Briefly describe your business turnover, requirement and any specific timeline..."></textarea>
            </div>

            <div style="display: flex; gap: 12px; align-items: center; flex-wrap: wrap;">
              <button type="submit" class="btn btn-theme" style="padding: 12px 30px; font-weight: 700;">
                SUBMIT INQUIRY <i class="fa fa-arrow-right" style="margin-left: 6px;"></i>
              </button>
              <a href="https://wa.me/919987484159?text=Hello%20Finbex,%20I%20need%20immediate%20loan%20assistance" target="_blank" rel="noopener" class="btn btn-theme btn-theme-invert" style="background: #25D366; color: #fff; border-color: #25D366; padding: 12px 24px; font-weight: 700;">
                <i class="fa fa-whatsapp"></i> Quick WhatsApp
              </a>
            </div>
          </form>
        </div>
      </div>

      <!-- MAP & OFFICE DETAILS -->
      <div class="col-md-5 col-sm-12">
        <div style="background: #ffffff; border-radius: 12px; padding: 24px; border: 1px solid #e2e8f0; box-shadow: 0 8px 30px rgba(0,0,0,0.06); height: 100%;">
          <h3 style="font-size: 20px; font-weight: 700; color: #0b1d33; margin-top: 0; margin-bottom: 16px;">
            <i class="fa fa-map" style="color: #004c8f; margin-right: 6px;"></i> Our Location
          </h3>
          <p style="color: #64748b; font-size: 13.5px; margin-bottom: 16px;">
            <strong>FINBEX CORPORATE SOLUTIONS PRIVATE LIMITED</strong><br>
            Office No - 306 Sai Chambers, Plot 44, Sector 11, CBD Belapur, Navi Mumbai - 400614
          </p>

          <div class="map-responsive-container">
            <iframe 
              src="https://maps.google.com/maps?q=Sai%20Chambers%20Sector%2011%20CBD%20Belapur%20Navi%20Mumbai&t=&z=15&ie=UTF8&iwloc=&output=embed" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade"
              title="Finbex Corporate Solutions Location">
            </iframe>
          </div>

          <div style="margin-top: 20px; padding: 16px; background: #f0f7fc; border-radius: 8px; border-left: 4px solid #004c8f;">
            <h5 style="margin: 0 0 6px 0; font-weight: 700; color: #004c8f;">Visit Our Office</h5>
            <p style="margin: 0; font-size: 13px; color: #475569;">
              Walking distance from CBD Belapur Railway Station. Prior appointment recommended for consultation with Senior Financial Advisors.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

@push('scripts')
<script>
function handleContactSubmit(e) {
  e.preventDefault();
  var alertBox = document.getElementById('contact-alert');
  alertBox.style.display = 'block';
  alertBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
  e.target.reset();
}
</script>
@endpush
