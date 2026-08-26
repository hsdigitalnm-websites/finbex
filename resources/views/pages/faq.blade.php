@extends('layouts.app')

@section('title', 'Frequently Asked Questions | FINBEX Corporate Solutions')
@section('meta_description', 'Find answers to common questions regarding unsecured business loans, MCA loans, working capital CC/OD, loan eligibility, documents required, and interest rates at Finbex.')

@section('content')

<!-- PAGE HEADING -->
<section class="page-header" data-bg_img="{{ asset('assets/images/header-bg.jpg') }}" data-bg_color="#071526" data-bg_opacity="0.65">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2>Frequently Asked Questions</h2>
        <p class="page-breadcrumb">
          <a href="{{ route('home') }}">Home</a> / FAQ
        </p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION FAQ -->
<section class="section-content-block">
  <div class="container">
    <div class="row section-heading-wrapper text-center">
      <div class="col-md-12">
        <h4 class="heading-alt-style text-capitalize text-dark-color">Business Loan FAQs</h4>
        <span class="heading-separator heading-separator-horizontal"></span>
        <h2 class="subheading-alt-style">
          Everything you need to know about loan eligibility, documentation, and funding processes.
        </h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 col-sm-12">
        
        <div class="finbex-faq-card panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#faq1">
                What financial services does Finbex Corporate Solutions provide?
                <i class="fa fa-chevron-down"></i>
              </a>
            </h4>
          </div>
          <div id="faq1" class="panel-collapse collapse in">
            <div class="panel-body">
              Finbex specializes in 6 core corporate lending solutions: Unsecured Business Loans (up to ₹2 Cr), MCA / POS Card Swipe Loans, Working Capital Facilities (CC / OD), Machinery &amp; Equipment Loans, Loan Against Property (LAP up to ₹25 Cr+), and Supply Chain &amp; Invoice Discounting.
            </div>
          </div>
        </div>

        <div class="finbex-faq-card panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" href="#faq2">
                What are the eligibility criteria for an Unsecured Business Loan?
                <i class="fa fa-chevron-down"></i>
              </a>
            </h4>
          </div>
          <div id="faq2" class="panel-collapse collapse">
            <div class="panel-body">
              Eligibility requires a minimum business operational vintage of 1 to 2 years, valid GST registration, annual turnover of ₹25 Lakhs or above, a positive banking track record with no frequent cheque bounces, and a promoter CIBIL score of 680+.
            </div>
          </div>
        </div>

        <div class="finbex-faq-card panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" href="#faq3">
                What documents are required to apply for business financing?
                <i class="fa fa-chevron-down"></i>
              </a>
            </h4>
          </div>
          <div id="faq3" class="panel-collapse collapse">
            <div class="panel-body">
              Standard required documents include:
              <ul style="margin: 6px 0 0 0; padding-left: 20px;">
                <li>KYC of Promoters / Partners / Directors (PAN &amp; Aadhaar Card)</li>
                <li>Business Entity Proof (GST Certificate, Udyam Registration, COI)</li>
                <li>Last 12 Months Current Account Bank Statements</li>
                <li>Last 2 Years Income Tax Returns (ITR) with Computation &amp; Balance Sheet</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="finbex-faq-card panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" href="#faq4">
                How is an MCA / POS Swipe Loan different from regular EMI loans?
                <i class="fa fa-chevron-down"></i>
              </a>
            </h4>
          </div>
          <div id="faq4" class="panel-collapse collapse">
            <div class="panel-body">
              An MCA (Merchant Cash Advance) loan is based on daily credit/debit card swipe machine transactions. Rather than paying a fixed monthly EMI, a flexible percentage is settled automatically from daily card sales, matching your business revenue flow.
            </div>
          </div>
        </div>

      </div>

      <div class="col-md-6 col-sm-12">
        
        <div class="finbex-faq-card panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" href="#faq5">
                How does Supply Chain and Invoice Discounting work?
                <i class="fa fa-chevron-down"></i>
              </a>
            </h4>
          </div>
          <div id="faq5" class="panel-collapse collapse">
            <div class="panel-body">
              Invoice discounting allows you to unlock up to 85-90% of your unpaid corporate invoices within 24 to 48 hours without waiting 30 to 90 days for client payment cycles. Once the buyer pays the invoice, the balance is settled.
            </div>
          </div>
        </div>

        <div class="finbex-faq-card panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" href="#faq6">
                What is the turnaround time (TAT) for loan approval and disbursal?
                <i class="fa fa-chevron-down"></i>
              </a>
            </h4>
          </div>
          <div id="faq6" class="panel-collapse collapse">
            <div class="panel-body">
              Unsecured business loans and invoice discounting are typically sanctioned and disbursed within 24 to 48 hours post document submission. Secured facilities like Loan Against Property (LAP) usually take 7 to 10 working days due to legal and technical property verification.
            </div>
          </div>
        </div>

        <div class="finbex-faq-card panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" href="#faq7">
                Can I get funding if my business has existing loans?
                <i class="fa fa-chevron-down"></i>
              </a>
            </h4>
          </div>
          <div id="faq7" class="panel-collapse collapse">
            <div class="panel-body">
              Yes, existing loans are evaluated based on your current Debt Service Coverage Ratio (DSCR) and banking cash flows. We also assist with debt consolidation and balance transfer to lower interest rates.
            </div>
          </div>
        </div>

        <div class="finbex-faq-card panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" href="#faq8">
                How do I get started with a loan application?
                <i class="fa fa-chevron-down"></i>
              </a>
            </h4>
          </div>
          <div id="faq8" class="panel-collapse collapse">
            <div class="panel-body">
              You can submit your details online on our <a href="{{ route('contact') }}" style="color: #004c8f; font-weight: 700;">Contact Page</a>, call our direct helpline at <strong>+91 9987484159</strong>, or visit our office at CBD Belapur, Navi Mumbai.
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- ASSISTANCE BANNER -->
    <div class="row" style="margin-top: 30px;">
      <div class="col-md-12">
        <div style="background: linear-gradient(135deg, #0b1d33 0%, #004c8f 100%); border-radius: 12px; padding: 30px 24px; color: #ffffff; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
          <div>
            <h3 style="color: #ffd700; margin: 0 0 6px 0; font-size: 20px; font-weight: 700;">Still Have Questions Regarding Business Financing?</h3>
            <p style="margin: 0; color: #e2e8f0; font-size: 14px;">Our Senior Loan Advisory team is available Monday to Saturday (9:30 AM – 6:30 PM).</p>
          </div>
          <div style="display: flex; gap: 10px;">
            <a href="tel:9987484159" class="btn btn-theme" style="font-weight: 700; padding: 10px 20px;"><i class="fa fa-phone"></i> Call 9987484159</a>
            <a href="https://wa.me/919987484159?text=Hello%20Finbex,%20I%20have%20a%20question%20regarding%20business%20loans" target="_blank" rel="noopener" class="btn btn-theme btn-theme-invert" style="background: #25D366; color: #fff; border-color: #25D366; font-weight: 700; padding: 10px 20px;"><i class="fa fa-whatsapp"></i> WhatsApp</a>
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
          Ready to Discuss Your Business Funding Requirement?
        </h2>
        <p class="text-light-color" style="font-size: 15px; margin: 0; opacity: 0.9;">
          Submit your requirements and receive personalized loan proposals from top lending partners.
        </p>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 text-center" style="margin-top: 10px;">
        <a class="btn btn-theme btn-square btn-theme-invert" href="{{ route('contact') }}" style="font-weight: 700; padding: 12px 26px;">
          APPLY FOR LOAN <i class="fa fa-arrow-right" style="margin-left: 4px;"></i>
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
