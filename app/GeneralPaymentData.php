<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
use ScoutElastic\Searchable;

class GeneralPaymentData extends Model
{
    use Searchable;


    /**
     * the table used
     *
     * @var $table
     */
    public $table = 'general_payment_data';

    /**
     * an index configurator
     *
     * @var MyIndexConfigurator $indexConfigurator
     */
    protected $indexConfigurator = MyIndexConfigurator::class;

    /**
     * should we or should we not use timestamps
     * in this case, no
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * the guarded fields
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];

     // Here you can specify a mapping for model fields
     protected $mapping = [
        'properties' => [
            // 'title' => [
                // 'type' => 'text',
                // Also you can configure multi-fields, more details you can find here https://www.elastic.co/guide/en/elasticsearch/reference/current/multi-fields.html
            //     'fields' => [
            //         'raw' => [
            //             'type' => 'keyword',
            //         ]
            //     ]
            // ],
            'Change_Type' => [
                'type' => 'text'
            ],
            'Covered_Recipient_Type' => [
                'type' => 'text'
            ],
            'Teaching_Hospital_CCN' => [
                'type' => 'text'
            ],
            'Teaching_Hospital_ID' => [
                'type' => 'text'
            ],
            'Teaching_Hospital_Name' => [
                'type' => 'text'
            ],
            'Physician_Profile_ID' => [
                'type' => 'text'
            ],
            'Physician_First_Name' => [
                'type' => 'text'
            ],
            'Physician_Middle_Name' => [
                'type' => 'text'
            ],
            'Physician_Last_Name' => [
                'type' => 'text'
            ],
            'Physician_Name_Suffix' => [
                'type' => 'text'
            ],
            'Recipient_Primary_Business_Street_Address_Line1' => [
                'type' => 'text'
            ],
            'Recipient_Primary_Business_Street_Address_Line2' => [
                'type' => 'text'
            ],
            'Recipient_City' => [
                'type' => 'text'
            ],
            'Recipient_State' => [
                'type' => 'text'
            ],
            'Recipient_Zip_Code' => [
                'type' => 'text'
            ],
            'Recipient_Country' => [
                'type' => 'text'
            ],
            'Recipient_Province' => [
                'type' => 'text'
            ],
            'Recipient_Postal_Code' => [
                'type' => 'text'
            ],
            'Physician_Primary_Type' => [
                'type' => 'text'
            ],
            'Physician_Specialty' => [
                'type' => 'text'
            ],
            'Physician_License_State_code1' => [
                'type' => 'text'
            ],
            'Physician_License_State_code2' => [
                'type' => 'text'
            ],
            'Physician_License_State_code3' => [
                'type' => 'text'
            ],
            'Physician_License_State_code4' => [
                'type' => 'text'
            ],
            'Physician_License_State_code5' => [
                'type' => 'text'
            ],
            'Submitting_Applicable_Manufacturer_GPO_Name' => [
                'type' => 'text'
            ],
            'Applicable_Manufacturer_or_Payment_ID' => [
                'type' => 'text'
            ],
            'Applicable_Manufacturer_or_Payment_Name' => [
                'type' => 'text'
            ],
            'Applicable_Manufacturer_or_Payment_State' => [
                'type' => 'text'
            ],
            'Applicable_Manufacturer_or_Payment_Country' => [
                'type' => 'text'
            ],
            'Total_Amount_of_Payment_USDollars' => [
                'type' => 'text'
            ],
            'Date_of_Payment' => [
                'type' => 'text'
            ],
            'Number_of_Payments_Included_in_Total_Amount' => [
                'type' => 'text'
            ],
            'Form_of_Payment_or_Transfer_of_Value' => [
                'type' => 'text'
            ],
            'Nature_of_Payment_or_Transfer_of_Value' => [
                'type' => 'text'
            ],
            'City_of_Travel' => [
                'type' => 'text'
            ],
            'State_of_Travel' => [
                'type' => 'text'
            ],
            'Country_of_Travel' => [
                'type' => 'text'
            ],
            'Physician_Ownership_Indicator' => [
                'type' => 'text'
            ],
            'Third_Party_Payment_Recipient_Indicator' => [
                'type' => 'text'
            ],
            'Name_of_Third_Party_Entity_Receiving' => [
                'type' => 'text'
            ],
            'Charity_Indicator' => [
                'type' => 'text'
            ],
            'Third_Party_Equals_Covered_Recipient_Indicator' => [
                'type' => 'text'
            ],
            'Contextual_Information' => [
                'type' => 'text'
            ],
            'Delay_in_Publication_Indicator' => [
                'type' => 'text'
            ],
            'Record_ID' => [
                'type' => 'text'
            ],
            'Dispute_Status_for_Publication' => [
                'type' => 'text'
            ],
            'Related_Product_Indicator' => [
                'type' => 'text'
            ],
            'Covered_or_Noncovered_Indicator_1' => [
                'type' => 'text'
            ],
            'Indicate_Drug_or_Biological_or_Device_or_Medical_Supply_1' => [
                'type' => 'text'
            ],
            'Product_Category_or_Therapeutic_Area_1' => [
                'type' => 'text'
            ],
            'Name_of_Drug_or_Biological_or_Device_or_Medical_Supply_1' => [
                'type' => 'text'
            ],
            'Associated_Drug_or_Biological_NDC_1' => [
                'type' => 'text'
            ],
            'Covered_or_Noncovered_Indicator_2' => [
                'type' => 'text'
            ],
            'Indicate_Drug_or_Biological_or_Device_or_Medical_Supply_2' => [
                'type' => 'text'
            ],
            'Product_Category_or_Therapeutic_Area_2' => [
                'type' => 'text'
            ],
            'Name_of_Drug_or_Biological_or_Device_or_Medical_Supply_2' => [
                'type' => 'text'
            ],
            'Associated_Drug_or_Biological_NDC_2' => [
                'type' => 'text'
            ],
            'Covered_or_Noncovered_Indicator_3' => [
                'type' => 'text'
            ],
            'Indicate_Drug_or_Biological_or_Device_or_Medical_Supply_3' => [
                'type' => 'text'
            ],
            'Product_Category_or_Therapeutic_Area_3' => [
                'type' => 'text'
            ],
            'Name_of_Drug_or_Biological_or_Device_or_Medical_Supply_3' => [
                'type' => 'text'
            ],
            'Associated_Drug_or_Biological_NDC_3' => [
                'type' => 'text'
            ],
            'Covered_or_Noncovered_Indicator_4' => [
                'type' => 'text'
            ],
            'Indicate_Drug_or_Biological_or_Device_or_Medical_Supply_4' => [
                'type' => 'text'
            ],
            'Product_Category_or_Therapeutic_Area_4' => [
                'type' => 'text'
            ],
            'Name_of_Drug_or_Biological_or_Device_or_Medical_Supply_4' => [
                'type' => 'text'
            ],
            'Associated_Drug_or_Biological_NDC_4' => [
                'type' => 'text'
            ],
            'Covered_or_Noncovered_Indicator_5' => [
                'type' => 'text'
            ],
            'Indicate_Drug_or_Biological_or_Device_or_Medical_Supply_5' => [
                'type' => 'text'
            ],
            'Product_Category_or_Therapeutic_Area_5' => [
                'type' => 'text'
            ],
            'Name_of_Drug_or_Biological_or_Device_or_Medical_Supply_5' => [
                'type' => 'text'
            ],
            'Associated_Drug_or_Biological_NDC_5' => [
                'type' => 'text'
            ],
            'Program_Year' => [
                'type' => 'text'
            ],
            'Payment_Publication_Date' => [
                'type' => 'text'
            ]
        ]
    ];

    /**
     * the fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'Change_Type',
        'Covered_Recipient_Type',
        'Teaching_Hospital_CCN',
        'Teaching_Hospital_ID',
        'Teaching_Hospital_Name',
        'Physician_Profile_ID',
        'Physician_First_Name',
        'Physician_Middle_Name',
        'Physician_Last_Name',
        'Physician_Name_Suffix',
        'Recipient_Primary_Business_Street_Address_Line1',
        'Recipient_Primary_Business_Street_Address_Line2',
        'Recipient_City',
        'Recipient_State',
        'Recipient_Zip_Code',
        'Recipient_Country',
        'Recipient_Province',
        'Recipient_Postal_Code',
        'Physician_Primary_Type',
        'Physician_Specialty',
        'Physician_License_State_code1',
        'Physician_License_State_code2',
        'Physician_License_State_code3',
        'Physician_License_State_code4',
        'Physician_License_State_code5',
        'Submitting_Applicable_Manufacturer_GPO_Name',
        'Applicable_Manufacturer_or_Payment_ID',
        'Applicable_Manufacturer_or_Payment_Name',
        'Applicable_Manufacturer_or_Payment_State',
        'Applicable_Manufacturer_or_Payment_Country',
        'Total_Amount_of_Payment_USDollars',
        'Date_of_Payment',
        'Number_of_Payments_Included_in_Total_Amount',
        'Form_of_Payment_or_Transfer_of_Value',
        'Nature_of_Payment_or_Transfer_of_Value',
        'City_of_Travel',
        'State_of_Travel',
        'Country_of_Travel',
        'Physician_Ownership_Indicator',
        'Third_Party_Payment_Recipient_Indicator',
        'Name_of_Third_Party_Entity_Receiving',
        'Charity_Indicator',
        'Third_Party_Equals_Covered_Recipient_Indicator',
        'Contextual_Information',
        'Delay_in_Publication_Indicator',
        'Record_ID',
        'Dispute_Status_for_Publication',
        'Related_Product_Indicator',
        'Covered_or_Noncovered_Indicator_1',
        'Indicate_Drug_or_Biological_or_Device_or_Medical_Supply_1',
        'Product_Category_or_Therapeutic_Area_1',
        'Name_of_Drug_or_Biological_or_Device_or_Medical_Supply_1',
        'Associated_Drug_or_Biological_NDC_1',
        'Covered_or_Noncovered_Indicator_2',
        'Indicate_Drug_or_Biological_or_Device_or_Medical_Supply_2',
        'Product_Category_or_Therapeutic_Area_2',
        'Name_of_Drug_or_Biological_or_Device_or_Medical_Supply_2',
        'Associated_Drug_or_Biological_NDC_2',
        'Covered_or_Noncovered_Indicator_3',
        'Indicate_Drug_or_Biological_or_Device_or_Medical_Supply_3',
        'Product_Category_or_Therapeutic_Area_3',
        'Name_of_Drug_or_Biological_or_Device_or_Medical_Supply_3',
        'Associated_Drug_or_Biological_NDC_3',
        'Covered_or_Noncovered_Indicator_4',
        'Indicate_Drug_or_Biological_or_Device_or_Medical_Supply_4',
        'Product_Category_or_Therapeutic_Area_4',
        'Name_of_Drug_or_Biological_or_Device_or_Medical_Supply_4',
        'Associated_Drug_or_Biological_NDC_4',
        'Covered_or_Noncovered_Indicator_5',
        'Indicate_Drug_or_Biological_or_Device_or_Medical_Supply_5',
        'Product_Category_or_Therapeutic_Area_5',
        'Name_of_Drug_or_Biological_or_Device_or_Medical_Supply_5',
        'Associated_Drug_or_Biological_NDC_5',
        'Program_Year',
        'Payment_Publication_Date'
    ];

    // /**
    //  * Get the index name for the model.
    //  *
    //  * @return string
    //  */
    // public function searchableAs()
    // {
    //     return 'posts_index';
    // }
}
