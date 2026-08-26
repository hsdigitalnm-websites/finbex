<?php

namespace App\Support;

class FinbexServices
{
    public static function all(): array
    {
        return [
            'unsecured-business-loans' => [
                'title' => 'Unsecured Business Loans',
                'description' => 'Fast, collateral-free funding options to support immediate business needs, working capital, and operational growth.',
                'details' => 'Finbex helps eligible businesses explore unsecured funding options based on their business profile, financial requirements and applicable lender assessment.',
                'points' => ['Working capital support', 'Business expansion needs', 'No property collateral structure where applicable', 'Subject to lender eligibility and documentation'],
            ],
            'mca-pos-loans' => [
                'title' => 'Merchant Cash Advance (MCA) / POS Loans',
                'description' => 'Flexible financing based on daily credit/debit card swipe revenue, suitable for retail and merchant businesses.',
                'details' => 'This financing route can help eligible merchants access working capital linked to their business card-swipe revenue.',
                'points' => ['Suitable for eligible merchants', 'Revenue-linked repayment structure where applicable', 'Working capital support', 'Subject to assessment and lender terms'],
            ],
            'working-capital-cc-od' => [
                'title' => 'Working Capital Loans & Cash Credit (CC) / Overdraft (OD)',
                'description' => 'Customized credit lines to manage day-to-day operational expenses and cash-flow gaps smoothly.',
                'details' => 'Working capital facilities can help businesses manage operational cycles, supplier payments and temporary cash-flow requirements.',
                'points' => ['Day-to-day operational funding', 'Cash-flow gap management', 'CC / OD facility guidance', 'Customized to eligible business requirements'],
            ],
            'machinery-equipment-loans' => [
                'title' => 'Machinery & Equipment Loans',
                'description' => 'Equipment financing options to purchase, upgrade, or lease heavy machinery and industrial tools.',
                'details' => 'Eligible businesses can explore financing for productive assets, machinery upgrades and equipment acquisition.',
                'points' => ['Machinery purchase', 'Equipment upgrade', 'Industrial tools and assets', 'Financing guidance based on project requirements'],
            ],
            'loan-against-property' => [
                'title' => 'Loan Against Property (LAP) / Secured Business Loans',
                'description' => 'High-value financing options leveraging residential, commercial, or industrial properties.',
                'details' => 'Secured business finance may provide higher-value funding for eligible businesses against acceptable property security, subject to lender assessment.',
                'points' => ['Residential property options', 'Commercial property options', 'Industrial property options', 'Subject to valuation, eligibility and lender terms'],
            ],
            'invoice-discounting' => [
                'title' => 'Supply Chain & Invoice Discounting',
                'description' => 'Liquidity solutions by discounting unpaid client invoices and financing supply-chain procurement.',
                'details' => 'Eligible businesses can explore receivables-based liquidity solutions to improve cash flow while waiting for approved invoices to be paid.',
                'points' => ['Invoice-based liquidity', 'Working capital improvement', 'Supply-chain procurement support', 'Subject to invoice and counterparty assessment'],
            ],
        ];
    }
}
