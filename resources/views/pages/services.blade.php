@extends('layouts.app')

@section('title', 'Corporate Financing & Business Loan Services | FINBEX Corporate Solutions')
@section('meta_description', 'Explore comprehensive financing solutions by Finbex: Unsecured Business Loans, MCA/POS Swipe Loans, Working Capital CC/OD, Machinery Loans, LAP, and Invoice Discounting.')

@section('content')

<!-- PAGE HEADING -->
<section class="page-header" data-bg_img="{{ asset('assets/images/header-bg.jpg') }}" data-bg_color="#071526" data-bg_opacity="0.65">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2>Business Financing Services</h2>
        <p class="page-breadcrumb">
          <a href="{{ route('home') }}">Home</a> / Our Services
        </p>
      </div>
    </div>
  </div>
</section>

<!-- MAIN SERVICES GRID -->
<section class="section-content-block">
  <div class="container wow fadeInUp">
    <div class="row section-heading-wrapper text-center">
      <div class="col-md-12">
        <h4 class="heading-alt-style text-capitalize text-dark-color">Tailored Lending Solutions</h4>
        <span class="heading-separator heading-separator-horizontal"></span>
        <h2 class="subheading-alt-style">
          Institutional credit facilities designed for Indian SMEs, manufacturers, merchants, and corporate enterprises.
        </h2>
      </div>
    </div>

    <div class="row">
      <!-- 1. Unsecured Business Loans -->
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="finbex-service-card">
          <span class="service-badge">No Collateral</span>
          <div class="service-icon-wrap"><i class="fa fa-briefcase"></i></div>
          <h3>Unsecured Business Loans</h3>
          <p>Instant collateral-free funding to support business expansion, seasonal bulk inventory purchases, or emergency liquidity.</p>
          <ul class="feature-list">
            <li><i class="fa fa-check-circle"></i> <strong>Loan Amount:</strong> Up to ₹2 Crores</li>
            <li><i class="fa fa-check-circle"></i> <strong>Tenure:</strong> 12 to 60 Months EMI</li>
            <li><i class="fa fa-check-circle"></i> <strong>Turnaround:</strong> 24 to 48 Hours Approval</li>
            <li><i class="fa fa-check-circle"></i> <strong>Requirement:</strong> Min 1 yr business vintage</li>
          </ul>
          <div class="card-actions">
            <a href="{{ route('service.details', ['slug'=>'unsecured-business-loans']) }}" class="btn btn-default btn-square">Learn Details</a>
            <a href="{{ route('contact') }}" class="btn btn-theme btn-square">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- 2. MCA / POS Loans -->
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="finbex-service-card">
          <span class="service-badge" style="background: linear-gradient(135deg, #10b981 0%, #047857 100%);">Merchant Financing</span>
          <div class="service-icon-wrap"><i class="fa fa-credit-card"></i></div>
          <h3>MCA / POS Swipe Loans</h3>
          <p>Flexible loan facility for retail merchants and restaurants directly linked to daily card swipe and digital payment turnover.</p>
          <ul class="feature-list">
            <li><i class="fa fa-check-circle"></i> <strong>Loan Amount:</strong> ₹5 Lakhs to ₹1 Crore</li>
            <li><i class="fa fa-check-circle"></i> <strong>Repayment:</strong> Automated daily swipe deduction</li>
            <li><i class="fa fa-check-circle"></i> <strong>Advantage:</strong> No fixed monthly EMI burden</li>
            <li><i class="fa fa-check-circle"></i> <strong>Requirement:</strong> Active POS card machine</li>
          </ul>
          <div class="card-actions">
            <a href="{{ route('service.details', ['slug'=>'mca-pos-loans']) }}" class="btn btn-default btn-square">Learn Details</a>
            <a href="{{ route('contact') }}" class="btn btn-theme btn-square">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- 3. Working Capital CC / OD -->
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="finbex-service-card">
          <span class="service-badge">Revolving Credit</span>
          <div class="service-icon-wrap"><i class="fa fa-refresh"></i></div>
          <h3>Working Capital (CC / OD)</h3>
          <p>Cash Credit (CC) and Overdraft (OD) credit lines to smoothly bridge working capital cycles, vendor payables, and payroll.</p>
          <ul class="feature-list">
            <li><i class="fa fa-check-circle"></i> <strong>Credit Limit:</strong> Up to ₹10 Crores</li>
            <li><i class="fa fa-check-circle"></i> <strong>Interest:</strong> Charged only on utilized amount</li>
            <li><i class="fa fa-check-circle"></i> <strong>Tenure:</strong> 12 Months (Renewable annually)</li>
            <li><i class="fa fa-check-circle"></i> <strong>Advantage:</strong> Maximizes liquidity efficiency</li>
          </ul>
          <div class="card-actions">
            <a href="{{ route('service.details', ['slug'=>'working-capital-cc-od']) }}" class="btn btn-default btn-square">Learn Details</a>
            <a href="{{ route('contact') }}" class="btn btn-theme btn-square">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- 4. Machinery & Equipment Loans -->
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="finbex-service-card">
          <span class="service-badge">Equipment Funding</span>
          <div class="service-icon-wrap"><i class="fa fa-cogs"></i></div>
          <h3>Machinery &amp; Equipment Loans</h3>
          <p>Long-term equipment finance for manufacturing, printing, medical, construction, and engineering machinery.</p>
          <ul class="feature-list">
            <li><i class="fa fa-check-circle"></i> <strong>Financing:</strong> Up to 85-90% equipment invoice</li>
            <li><i class="fa fa-check-circle"></i> <strong>Tenure:</strong> Up to 7 Years structured EMI</li>
            <li><i class="fa fa-check-circle"></i> <strong>Applicable:</strong> New &amp; refurbished machinery</li>
            <li><i class="fa fa-check-circle"></i> <strong>Benefit:</strong> Claim annual tax depreciation</li>
          </ul>
          <div class="card-actions">
            <a href="{{ route('service.details', ['slug'=>'machinery-equipment-loans']) }}" class="btn btn-default btn-square">Learn Details</a>
            <a href="{{ route('contact') }}" class="btn btn-theme btn-square">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- 5. Loan Against Property -->
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="finbex-service-card">
          <span class="service-badge" style="background: linear-gradient(135deg, #d4af37 0%, #a6841d 100%);">High Ticket Size</span>
          <div class="service-icon-wrap"><i class="fa fa-building"></i></div>
          <h3>Loan Against Property (LAP)</h3>
          <p>High-value secured financing against commercial, industrial, residential, or warehouse properties at competitive interest rates.</p>
          <ul class="feature-list">
            <li><i class="fa fa-check-circle"></i> <strong>Loan Amount:</strong> ₹50 Lakhs to ₹25+ Crores</li>
            <li><i class="fa fa-check-circle"></i> <strong>Tenure:</strong> Up to 15 Years flexible EMI</li>
            <li><i class="fa fa-check-circle"></i> <strong>Interest Rates:</strong> Lowest among all loan types</li>
            <li><i class="fa fa-check-circle"></i> <strong>Collateral:</strong> Property remains in business use</li>
          </ul>
          <div class="card-actions">
            <a href="{{ route('service.details', ['slug'=>'loan-against-property']) }}" class="btn btn-default btn-square">Learn Details</a>
            <a href="{{ route('contact') }}" class="btn btn-theme btn-square">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- 6. Supply Chain & Invoice Discounting -->
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="finbex-service-card">
          <span class="service-badge">Receivables Liquidity</span>
          <div class="service-icon-wrap"><i class="fa fa-file-text-o"></i></div>
          <h3>Supply Chain &amp; Invoice Discounting</h3>
          <p>Convert your unpaid client invoices into cash within 24 hours to pay suppliers and fulfill ongoing purchase orders.</p>
          <ul class="feature-list">
            <li><i class="fa fa-check-circle"></i> <strong>Disbursal:</strong> Up to 85-90% invoice value</li>
            <li><i class="fa fa-check-circle"></i> <strong>Turnaround:</strong> 24 to 48 Hours cash credit</li>
            <li><i class="fa fa-check-circle"></i> <strong>Advantage:</strong> No collateral or balance sheet debt</li>
            <li><i class="fa fa-check-circle"></i> <strong>Requirement:</strong> Invoices raised to creditworthy clients</li>
          </ul>
          <div class="card-actions">
            <a href="{{ route('service.details', ['slug'=>'invoice-discounting']) }}" class="btn btn-default btn-square">Learn Details</a>
            <a href="{{ route('contact') }}" class="btn btn-theme btn-square">Apply Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- COMPARISON MATRIX & ADVANTAGES -->
<section class="section-content-block section-secondary-bg" style="padding-top: 50px; padding-bottom: 60px;">
  <div class="container">
    <div class="row section-heading-wrapper text-center">
      <div class="col-md-12">
        <h4 class="heading-alt-style text-capitalize text-dark-color">Comparison Matrix</h4>
        <span class="heading-separator heading-separator-horizontal"></span>
        <h2 class="subheading-alt-style">
          Compare our core financing options to find the ideal match for your business
        </h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive" style="background: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.05); border: 1px solid #e2e8f0;">
          <table class="table table-striped table-bordered" style="margin-bottom: 0;">
            <thead style="background: #004c8f; color: #ffffff;">
              <tr>
                <th style="padding: 14px; font-weight: 700;">Service Name</th>
                <th style="padding: 14px; font-weight: 700;">Max Amount</th>
                <th style="padding: 14px; font-weight: 700;">Collateral Required</th>
                <th style="padding: 14px; font-weight: 700;">Average Tenure</th>
                <th style="padding: 14px; font-weight: 700;">Disbursal Time</th>
                <th style="padding: 14px; font-weight: 700; text-align: center;">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Unsecured Business Loan</strong></td>
                <td>Up to ₹2 Crores</td>
                <td><span class="label label-success">Nil / No Collateral</span></td>
                <td>1 to 5 Years</td>
                <td>24 - 48 Hours</td>
                <td class="text-center"><a href="{{ route('service.details', ['slug'=>'unsecured-business-loans']) }}" class="btn btn-xs btn-theme">View</a></td>
              </tr>
              <tr>
                <td><strong>MCA / POS Swipe Loan</strong></td>
                <td>Up to ₹1 Crore</td>
                <td><span class="label label-success">Nil / No Collateral</span></td>
                <td>6 to 24 Months</td>
                <td>24 - 48 Hours</td>
                <td class="text-center"><a href="{{ route('service.details', ['slug'=>'mca-pos-loans']) }}" class="btn btn-xs btn-theme">View</a></td>
              </tr>
              <tr>
                <td><strong>Working Capital (CC / OD)</strong></td>
                <td>Up to ₹10 Crores</td>
                <td>Book Debts / Stock / Property</td>
                <td>12 Months (Renewable)</td>
                <td>3 - 7 Working Days</td>
                <td class="text-center"><a href="{{ route('service.details', ['slug'=>'working-capital-cc-od']) }}" class="btn btn-xs btn-theme">View</a></td>
              </tr>
              <tr>
                <td><strong>Machinery &amp; Equipment Loan</strong></td>
                <td>Up to 90% Asset Value</td>
                <td>Hypothecation of Machinery</td>
                <td>3 to 7 Years</td>
                <td>4 - 8 Working Days</td>
                <td class="text-center"><a href="{{ route('service.details', ['slug'=>'machinery-equipment-loans']) }}" class="btn btn-xs btn-theme">View</a></td>
              </tr>
              <tr>
                <td><strong>Loan Against Property (LAP)</strong></td>
                <td>Up to ₹25 Crores</td>
                <td>Residential / Commercial Property</td>
                <td>5 to 15 Years</td>
                <td>7 - 10 Working Days</td>
                <td class="text-center"><a href="{{ route('service.details', ['slug'=>'loan-against-property']) }}" class="btn btn-xs btn-theme">View</a></td>
              </tr>
              <tr>
                <td><strong>Supply Chain &amp; Invoice Discounting</strong></td>
                <td>Up to 90% Invoice Value</td>
                <td><span class="label label-success">Nil (Invoice Backed)</span></td>
                <td>30 to 120 Days</td>
                <td>24 - 48 Hours</td>
                <td class="text-center"><a href="{{ route('service.details', ['slug'=>'invoice-discounting']) }}" class="btn btn-xs btn-theme">View</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE FINBEX HIGHLIGHTS -->
<section class="section-content-block">
  <div class="container">
    <div class="row section-heading-wrapper text-center">
      <div class="col-md-12">
        <h4 class="heading-alt-style text-capitalize text-dark-color">Why Partner With Us</h4>
        <span class="heading-separator heading-separator-horizontal"></span>
        <h2 class="subheading-alt-style">
          The Finbex advantage for businesses looking for reliable credit partners
        </h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom: 20px;">
        <div style="padding: 24px 16px; background: #f8fafc; border-radius: 10px; border: 1px solid #e2e8f0; height: 100%;">
          <i class="fa fa-university" style="font-size: 36px; color: #004c8f; margin-bottom: 12px;"></i>
          <h4 style="font-size: 17px; font-weight: 700; color: #1e293b;">40+ Lending Desks</h4>
          <p style="font-size: 13.5px; color: #64748b; line-height: 1.5; margin: 0;">Direct partnerships with leading PSU banks, private banks, and premier NBFCs.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom: 20px;">
        <div style="padding: 24px 16px; background: #f8fafc; border-radius: 10px; border: 1px solid #e2e8f0; height: 100%;">
          <i class="fa fa-percent" style="font-size: 36px; color: #004c8f; margin-bottom: 12px;"></i>
          <h4 style="font-size: 17px; font-weight: 700; color: #1e293b;">Lowest Interest Rates</h4>
          <p style="font-size: 13.5px; color: #64748b; line-height: 1.5; margin: 0;">We negotiate the most favorable interest rates and processing charges on your behalf.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom: 20px;">
        <div style="padding: 24px 16px; background: #f8fafc; border-radius: 10px; border: 1px solid #e2e8f0; height: 100%;">
          <i class="fa fa-clock-o" style="font-size: 36px; color: #004c8f; margin-bottom: 12px;"></i>
          <h4 style="font-size: 17px; font-weight: 700; color: #1e293b;">Fast Disbursals</h4>
          <p style="font-size: 13.5px; color: #64748b; line-height: 1.5; margin: 0;">End-to-end file preparation and underwriting assistance to avoid documentation delays.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom: 20px;">
        <div style="padding: 24px 16px; background: #f8fafc; border-radius: 10px; border: 1px solid #e2e8f0; height: 100%;">
          <i class="fa fa-lock" style="font-size: 36px; color: #004c8f; margin-bottom: 12px;"></i>
          <h4 style="font-size: 17px; font-weight: 700; color: #1e293b;">Zero Hidden Fees</h4>
          <p style="font-size: 13.5px; color: #64748b; line-height: 1.5; margin: 0;">Complete transparency at every step with no surprise charges or hidden clauses.</p>
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
          Need Assistance Selecting the Right Loan Product?
        </h2>
        <p class="text-light-color" style="font-size: 15px; margin: 0; opacity: 0.9;">
          Contact our CBD Belapur office for a confidential loan eligibility assessment and structured financial plan.
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
