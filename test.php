<?php
    // require_once "Controllers/MainController.php";
    // require_once "Controllers/DashboardController.php";
    // require_once "Controllers/KasController.php";
    // require_once "Controllers/LaporanController.php";
    // require_once "Controllers/AkunController.php";
    // require_once "Models/DashboardModel.php";

    $tes = new M_Dashboard();
    $tes2 = $tes->getDaftarTransaksiPemasukan();
    echo $tes2[0][1];


    // $data = array(
    //     'kodeAkun' => [
    //         '1-10001', '1-10002', '1-10003', '1-10100', '1-10101', '1-10102', '1-10200', '1-10300', '1-10301', '1-10400', '1-10401', '1-10402', 
    //         '1-10403', '1-10500', '1-10501', '1-10502', '1-10503', '1-10700', '1-10701', '1-10702', '1-10703', '1-10704', '1-10705', '1-10706', 
    //         '1-10707', '1-10751', '1-10752', '1-10753', '1-10754', '1-10755', '1-10756', '1-10757', '1-10800', '2-20100', '2-20101', '2-20200', 
    //         '2-20201', '2-20202', '2-20203', '2-20301', '2-20302', '2-20399', '2-20400', '2-20500', '2-20501', '2-20502', '2-20503', '2-20504', 
    //         '2-20599', '2-20600', '2-20601', '2-20700', '3-30000', '3-30001', '3-30100', '3-30200', '3-30300', '3-30999', '4-40000', '4-40100', 
    //         '4-40200', '4-40201', '5-50000', '5-50100', '5-50200', '5-50300', '5-50400', '5-50500', '6-60000', '6-60100', '6-60216', '7-70000', 
    //         '7-70001', '7-70002', '7-70099', '8-80000', '8-80001', '8-80002', '8-80100', '8-80999', '9-90000', '9-90001'],
    //     'namaAkun' => [
    //         'Cash', 'Bank Account', 'Giro', 'Account Receivable', 'Unbilled Accounts Receivable', 'Doubtful Receivable', 'Inventory', 
    //         'Others Receivables', 'Employee Receivables', 'Undeposited Funds', 'Other current assets', 'Prepaid expenses', 'Advances', 
    //         'VAT In', 'Prepaid Income Tax - PPh 22', 'Prepaid Income Tax - PPh 23', 'Prepaid Income Tax - PPh 25', 'Fixed Assets - Land', 
    //         'Fixed Assets - Building', 'Fixed Assets - Building Improvements', 'Fixed Assets - Vehicles', 'Fixed Assets - Machinery & Equipment', 
    //         'Fixed Assets - Office Equipment', 'Fixed Assets - Leased Asset', 'Intangible Assets', 'Accumulated Depreciation - Building', 
    //         'Accumulated Depreciation - Building Improvements', 'Accumulated Depreciation - Vehicles', 
    //         'Accumulated Depreciation - Machinery & Equipment', 'Accumulated Depreciation - Office Equipment', 
    //         'Accumulated Depreciation - Leased Asset', 'Accumulated Amortization', 'Investments', 'Trade Payable', 'Unbilled Accounts Payable', 
    //         'Other Payables', 'Salaries Payable', 'Dividends Payable', 'Unearned Revenue', 'Accrued Utilities', 'Accrued Interest', 
    //         'Other Accrued Expenses', 'Bank Loans', 'VAT Out', 'Tax Payable - PPh 21', 'Tax Payable - PPh 22', 'Tax Payable - PPh 23', 
    //         'Tax Payable - PPh 29', 'Other Taxes Payable', 'Loan from Shareholders', 'Other Current Liabilities', 'Employee Benefit Liabilities', 
    //         'Paid In Capital', 'Additional Paid In Capital', 'Retained Earnings', 'Dividends', 'Other Comprehensive Income', 
    //         'Opening Balance Equity', 'Service Revenue', 'Sales Discount', 'Sales Return', 'Unbilled Revenues', 'Cost of Sales', 
    //         'Purchase Discounts', 'Purchase Return', 'Shipping/Freight & Delivery', 'Import Charges', 'Cost of Production', 'Selling Expenses', 
    //         'General & Administrative Expenses', 'Waste Goods Expense', 'Interest Income - Bank', 'Interest Income - Time deposit', 'Rounding', 
    //         'Other Income', 'Interest Expense', 'Provision', '(Gain)/Loss on Disposal of Fixed Assets', 'Inventory Adjustments', 
    //         'Other Miscellaneous Expense', 'Income Taxes - Current', 'Income Taxes - Deferred'],
    //     'kategori' => [
    //         'Kas & Bank', 'Kas & Bank', 'Kas & Bank', 'Akun Piutang', 'Akun Piutang', 'Akun Piutang', 'Persediaan', 'Aktiva Lancar Lainnya', 
    //         'Aktiva Lancar Lainnya', 'Aktiva Lancar Lainnya', 'Aktiva Lancar Lainnya', 'Aktiva Lancar Lainnya', 'Aktiva Lancar Lainnya', 
    //         'Aktiva Lancar Lainnya', 'Aktiva Lancar Lainnya', 'Aktiva Lancar Lainnya', 'Aktiva Lancar Lainnya', 'Aktiva Tetap', 'Aktiva Tetap', 
    //         'Aktiva Tetap', 'Aktiva Tetap', 'Aktiva Tetap', 'Aktiva Tetap', 'Aktiva Tetap', 'Aktiva Tetap', 'Depresiasi & Amortisasi', 
    //         'Depresiasi & Amortisasi', 'Depresiasi & Amortisasi', 'Depresiasi & Amortisasi', 'Depresiasi & Amortisasi', 'Depresiasi & Amortisasi', 
    //         'Depresiasi & Amortisasi', 'Aktiva Lainnya', 'Akun Hutang', 'Akun Hutang', 'Kewajiban Lancar Lainnya', 'Kewajiban Lancar Lainnya', 
    //         'Kewajiban Lancar Lainnya', 'Kewajiban Lancar Lainnya', 'Kewajiban Lancar Lainnya', 'Kewajiban Lancar Lainnya', 
    //         'Kewajiban Lancar Lainnya', 'Kewajiban Lancar Lainnya', 'Kewajiban Lancar Lainnya', 'Kewajiban Lancar Lainnya', 
    //         'Kewajiban Lancar Lainnya', 'Kewajiban Lancar Lainnya', 'Kewajiban Lancar Lainnya', 'Kewajiban Lancar Lainnya', 
    //         'Kewajiban Lancar Lainnya', 'Kewajiban Lancar Lainnya', 'Kewajiban Jangka Panjang', 'Ekuitas', 'Ekuitas', 'Ekuitas', 'Ekuitas', 
    //         'Ekuitas', 'Ekuitas', 'Pendapatan', 'Pendapatan', 'Pendapatan', 'Pendapatan', 'Harga Pokok Penjualan', 'Harga Pokok Penjualan', 
    //         'Harga Pokok Penjualan', 'Harga Pokok Penjualan', 'Harga Pokok Penjualan', 'Harga Pokok Penjualan', 'Beban', 'Beban', 'Beban', 
    //         'Pendapatan Lainnya', 'Pendapatan Lainnya', 'Pendapatan Lainnya', 'Pendapatan Lainnya', 'Beban Lainnya', 'Beban Lainnya', 
    //         'Beban Lainnya', 'Beban Lainnya', 'Beban Lainnya', 'Beban Lainnya', 'Beban Lainnya'], 
    //     'saldo' => [
    //         '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 
    //         '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 
    //         '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 
    //         '0']
    // );

    // for ($i=0; $i < count($data['kodeAkun']); $i++) { 
    //     $pre_data->setDaftarAkun($data['kodeAkun'][$i], $data['namaAkun'][$i], $data['kategori'][$i], $data['saldo'][$i]);
    // }

    // $namaAkun = [
    //     'Cash', 'Bank Account', 'Giro', 'Account Receivable', 'Unbilled Accounts Receivable', 'Doubtful Receivable', 'Inventory', 
    //     'Others Receivables', 'Employee Receivables', 'Undeposited Funds', 'Other current assets', 'Prepaid expenses', 'Advances', 
    //     'VAT In', 'Prepaid Income Tax - PPh 22', 'Prepaid Income Tax - PPh 23', 'Prepaid Income Tax - PPh 25', 'Fixed Assets - Land', 
    //     'Fixed Assets - Building', 'Fixed Assets - Building Improvements', 'Fixed Assets - Vehicles', 'Fixed Assets - Machinery & Equipment', 
    //     'Fixed Assets - Office Equipment', 'Fixed Assets - Leased Asset', 'Intangible Assets', 'Trade Mark', 'Copyright', 'Good Will', 
    //     'Accumulated Depreciation - Building', 'Accumulated Depreciation - Building Improvements', 'Accumulated Depreciation - Vehicles', 
    //     'Accumulated Depreciation - Machinery & Equipment', 'Accumulated Depreciation - Office Equipment', 
    //     'Accumulated Depreciation - Leased Asset', 'Accumulated Amortization', 'Accumulated Amortization : Trade Mark', 
    //     'Accumulated Amortization : Copyright', 'Accumulated Amortization : Good Will', 'Investments', 'Trade Payable', 
    //     'Unbilled Accounts Payable', 'Other Payables', 'Salaries Payable', 'Dividends Payable', 'Unearned Revenue', 'Accrued Utilities', 
    //     'Accrued Interest', 'Other Accrued Expenses', 'Bank Loans', 'VAT Out', 'Tax Payable - PPh 21', 'Tax Payable - PPh 22', 
    //     'Tax Payable - PPh 23', 'Tax Payable - PPh 29', 'Other Taxes Payable', 'Loan from Shareholders', 'Other Current Liabilities', 
    //     'Employee Benefit Liabilities', 'Paid In Capital', 'Additional Paid In Capital', 'Retained Earnings', 'Dividends', 
    //     'Other Comprehensive Income', 'Opening Balance Equity', 'Service Revenue', 'Sales Discount', 'Sales Return', 'Unbilled Revenues', 
    //     'Cost of Sales', 'Purchase Discounts', 'Purchase Return', 'Shipping/Freight & Delivery', 'Import Charges', 'Cost of Production', 
    //     'Selling Expenses', 'Advertising & Promotion', 'Commission & Fees', 'Fuel, Toll and Parking - Sales', 'Travelling - Sales', 
    //     'Communication - Sales', 'Other Marketing', 'General & Administrative Expenses', 'Salaries', 'Wages', 'Meals and Transport', 
    //     'Overtime', 'Medical', 'THR and Bonus', 'Jamsostek', 'Incentive', 'Severance', 'Other Benefit and Allowances', 'Donations', 
    //     'Entertainment', 'Fuel, Toll and Parking - General', 'Repair and Maintenance', 'Travelling - General', 'Meals', 
    //     'Communication - General', 'Dues & Subscription', 'Insurance', 'Legal & Professional Fees', 'Employee Benefit Expense', 
    //     'Utilities Expense', 'Training & Developments', 'Bad Debt Expense', 'Taxes and Licenses', 'Penalties', 'Electricity', 'Water', 
    //     'Service Charge', 'Subscribe Software', 'Office Expense', 'Stationery & Printing', 'Stamp & Duty', 'Securities and Cleaning', 
    //     'Supplies and Materials', 'Subcontractors', 'Rental Expense - Building', 'Rental Expense - Vehicle', 'Rental Expense - Operating Lease', 
    //     'Rental Expense - Others', 'Depreciation - Building', 'Depreciation - Building Improvements', 'Depreciation - Vehicle', 
    //     'Depreciation - Machinery & Equipment', 'Depreciation - Office Equipment', 'Depreciation - Leased Asset', 'Amortization: Trade Mark', 
    //     'Amortization: Copyright', 'Amortization: Good Will', 'Waste Goods Expense', 'Interest Income - Bank', 'Interest Income - Time deposit', 
    //     'Rounding', 'Other Income', 'Interest Expense', 'Provision', '(Gain)/Loss on Disposal of Fixed Assets', 'Inventory Adjustments', 
    //     'Other Miscellaneous Expense', 'Income Taxes - Current', 'Income Taxes - Deferred'];
?>