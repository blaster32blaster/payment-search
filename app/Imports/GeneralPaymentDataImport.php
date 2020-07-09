<?php

namespace App\Imports;

use App\GeneralPaymentData;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

/**
 * class for saving csv data to database
 */
class GeneralPaymentDataImport implements ToModel, WithStartRow
{
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new GeneralPaymentData([
            'Change_Type' => $row[0],
            'Covered_Recipient_Type' => $row[1],
            'Teaching_Hospital_CCN' => $row[2],
            'Teaching_Hospital_ID' => $row[3],
            'Teaching_Hospital_Name' => $row[4],
            'Physician_Profile_ID' => $row[5],
            'Physician_First_Name' => $row[6],
            'Physician_Middle_Name' => $row[7],
            'Physician_Last_Name' => $row[8],
            'Physician_Name_Suffix' => $row[9],
            'Recipient_Primary_Business_Street_Address_Line1' => $row[10],
            'Recipient_Primary_Business_Street_Address_Line2' => $row[11],
            'Recipient_City' => $row[12],
            'Recipient_State' => $row[13],
            'Recipient_Zip_Code' => $row[14],
            'Recipient_Country' => $row[15],
            'Recipient_Province' => $row[16],
            'Recipient_Postal_Code' => $row[17],
            'Physician_Primary_Type' => $row[18],
            'Physician_Specialty' => $row[19],
            'Physician_License_State_code1' => $row[20],
            'Physician_License_State_code2' => $row[21],
            'Physician_License_State_code3' => $row[22],
            'Physician_License_State_code4' => $row[23],
            'Physician_License_State_code5' => $row[24],
            'Submitting_Applicable_Manufacturer_GPO_Name' => $row[25],
            'Applicable_Manufacturer_or_Payment_ID' => $row[26],
            'Applicable_Manufacturer_or_Payment_Name' => $row[27],
            'Applicable_Manufacturer_or_Payment_State' => $row[28],
            'Applicable_Manufacturer_or_Payment_Country' => $row[29],
            'Total_Amount_of_Payment_USDollars' => $row[30],
            'Date_of_Payment' => $row[31],
            'Number_of_Payments_Included_in_Total_Amount' => $row[32],
            'Form_of_Payment_or_Transfer_of_Value' => $row[33],
            'Nature_of_Payment_or_Transfer_of_Value' => $row[34],
            'City_of_Travel' => $row[35],
            'State_of_Travel' => $row[36],
            'Country_of_Travel' => $row[37],
            'Physician_Ownership_Indicator' => $row[38],
            'Third_Party_Payment_Recipient_Indicator' => $row[39],
            'Name_of_Third_Party_Entity_Receiving' => $row[40],
            'Charity_Indicator' => $row[41],
            'Third_Party_Equals_Covered_Recipient_Indicator' => $row[42],
            'Contextual_Information' => $row[43],
            'Delay_in_Publication_Indicator' => $row[44],
            'Record_ID' => $row[45],
            'Dispute_Status_for_Publication' => $row[46],
            'Related_Product_Indicator' => $row[47],
            'Covered_or_Noncovered_Indicator_1' => $row[48],
            'Indicate_Drug_or_Biological_or_Device_or_Medical_Supply_1' => $row[49],
            'Product_Category_or_Therapeutic_Area_1' => $row[50],
            'Name_of_Drug_or_Biological_or_Device_or_Medical_Supply_1' => $row[51],
            'Associated_Drug_or_Biological_NDC_1' => $row[52],
            'Covered_or_Noncovered_Indicator_2' => $row[53],
            'Indicate_Drug_or_Biological_or_Device_or_Medical_Supply_2' => $row[54],
            'Product_Category_or_Therapeutic_Area_2' => $row[55],
            'Name_of_Drug_or_Biological_or_Device_or_Medical_Supply_2' => $row[56],
            'Associated_Drug_or_Biological_NDC_2' => $row[57],
            'Covered_or_Noncovered_Indicator_3' => $row[58],
            'Indicate_Drug_or_Biological_or_Device_or_Medical_Supply_3' => $row[59],
            'Product_Category_or_Therapeutic_Area_3' => $row[60],
            'Name_of_Drug_or_Biological_or_Device_or_Medical_Supply_3' => $row[61],
            'Associated_Drug_or_Biological_NDC_3' => $row[62],
            'Covered_or_Noncovered_Indicator_4' => $row[63],
            'Indicate_Drug_or_Biological_or_Device_or_Medical_Supply_4' => $row[64],
            'Product_Category_or_Therapeutic_Area_4' => $row[65],
            'Name_of_Drug_or_Biological_or_Device_or_Medical_Supply_4' => $row[66],
            'Associated_Drug_or_Biological_NDC_4' => $row[67],
            'Covered_or_Noncovered_Indicator_5' => $row[68],
            'Indicate_Drug_or_Biological_or_Device_or_Medical_Supply_5' => $row[69],
            'Product_Category_or_Therapeutic_Area_5' => $row[70],
            'Name_of_Drug_or_Biological_or_Device_or_Medical_Supply_5' => $row[71],
            'Associated_Drug_or_Biological_NDC_5' => $row[72],
            'Program_Year' => $row[73],
            'Payment_Publication_Date' => $row[74],
        ]);
    }
}
