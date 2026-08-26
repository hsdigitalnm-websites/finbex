<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected array $services = [
        'unsecured-business-loans' => [
            'title' => 'Unsecured Business Loans',
            'description' => 'Collateral-free business funding for expanding operations, purchasing inventory, and supporting immediate cash flow requirements.',
            'details' => 'Finbex provides fast, hassle-free unsecured business loans with minimal documentation and quick disbursement for eligible businesses.',
            'points' => [
                'No real estate collateral required',
                'Fast processing and quick approval turnaround',
                'Flexible repayment tenures tailored to business cash flows',
                'Transparent pricing with competitive interest rates',
            ],
        ],
        'mca-pos-loans' => [
            'title' => 'Merchant Cash Advance / POS Loans',
            'description' => 'Flexible working capital loans based on your card swipe POS machine and digital payment transactions.',
            'details' => 'Merchant Cash Advance (MCA) allows retail businesses and merchants to obtain funding directly linked to daily POS turnover.',
            'points' => [
                'Funding linked to card swipe machine volume',
                'Daily / flexible repayment options matching daily collections',
                'Ideal for retail stores, restaurants, and merchant outlets',
                'Minimal paperwork and fast credit assessment',
            ],
        ],
        'working-capital-cc-od' => [
            'title' => 'Working Capital Loans (CC / OD)',
            'description' => 'Cash Credit and Overdraft facilities designed to manage operational cash flow gaps, vendor payables, and day-to-day business expenses.',
            'details' => 'Finbex helps businesses secure Cash Credit (CC) and Overdraft (OD) credit limits from leading financial partners.',
            'points' => [
                'Pay interest only on the utilized credit limit amount',
                'Maintain steady liquidity for payroll and vendor payments',
                'Annual renewal and scalable limits as turnover increases',
                'Comprehensive support through our banking partners',
            ],
        ],
        'machinery-equipment-loans' => [
            'title' => 'Machinery & Equipment Loans',
            'description' => 'Specialized equipment financing for buying, upgrading, or modernizing plant machinery, industrial tools, and medical devices.',
            'details' => 'Empower your manufacturing and service capabilities with customized asset and machinery loans.',
            'points' => [
                'Financing up to high percentages of equipment value',
                'Custom structured EMI tenure matching equipment lifespan',
                'Applicable for new as well as refurbished machinery',
                'Tax depreciation advantages for businesses',
            ],
        ],
        'loan-against-property' => [
            'title' => 'Loan Against Property (LAP)',
            'description' => 'High-value long-tenure secured financing against residential, commercial, or industrial properties.',
            'details' => 'Unlock the trapped equity in your property to fund large business expansion, debt consolidation, or capital expenditure.',
            'points' => [
                'Substantial loan amounts with extended repayment tenure',
                'Lower interest rates compared to unsecured loans',
                'Residential, commercial, and industrial properties accepted',
                'Retain complete ownership and usage of property',
            ],
        ],
        'invoice-discounting' => [
            'title' => 'Supply Chain & Invoice Discounting',
            'description' => 'Convert your unpaid accounts receivable and corporate invoices into instant working capital.',
            'details' => 'Bridge the 30-90 day gap between invoicing clients and receiving payment through institutional invoice discounting.',
            'points' => [
                'Immediate cash flow against raised invoices',
                'No added debt on company balance sheet',
                'Scales seamlessly with your invoicing volume',
                'Helps fulfill large orders without liquidity bottlenecks',
            ],
        ],
    ];

    public function show(string $slug)
    {
        if (!array_key_exists($slug, $this->services)) {
            abort(404);
        }

        $service = $this->services[$slug];

        return view('pages.service-details', [
            'service' => $service,
            'services' => $this->services,
            'currentSlug' => $slug,
        ]);
    }
}
