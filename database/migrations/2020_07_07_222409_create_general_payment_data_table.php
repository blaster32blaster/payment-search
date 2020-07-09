<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralPaymentDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('general_payment_data')) {
            return;
        }

        Schema::create('general_payment_data', function (Blueprint $table) {
            $table->id();
            $table->text('Change_Type')->nullable();
            $table->text('Covered_Recipient_Type')->nullable();
            $table->text('Teaching_Hospital_CCN')->nullable();
            $table->text('Teaching_Hospital_ID')->nullable();
            $table->text('Teaching_Hospital_Name')->nullable();
            $table->text('Physician_Profile_ID')->nullable();
            $table->text('Physician_First_Name')->nullable();
            $table->text('Physician_Middle_Name')->nullable();
            $table->text('Physician_Last_Name')->nullable();
            $table->text('Physician_Name_Suffix')->nullable();
            $table->text('Recipient_Primary_Business_Street_Address_Line1')->nullable();
            $table->text('Recipient_Primary_Business_Street_Address_Line2')->nullable();
            $table->text('Recipient_City')->nullable();
            $table->text('Recipient_State')->nullable();
            $table->text('Recipient_Zip_Code')->nullable();
            $table->text('Recipient_Country')->nullable();
            $table->text('Recipient_Province')->nullable();
            $table->text('Recipient_Postal_Code')->nullable();
            $table->text('Physician_Primary_Type')->nullable();
            $table->text('Physician_Specialty')->nullable();
            $table->text('Physician_License_State_code1')->nullable();
            $table->text('Physician_License_State_code2')->nullable();
            $table->text('Physician_License_State_code3')->nullable();
            $table->text('Physician_License_State_code4')->nullable();
            $table->text('Physician_License_State_code5')->nullable();
            $table->text('Submitting_Applicable_Manufacturer_GPO_Name')->nullable();
            $table->text('Applicable_Manufacturer_or_Payment_ID')->nullable();
            $table->text('Applicable_Manufacturer_or_Payment_Name')->nullable();
            $table->text('Applicable_Manufacturer_or_Payment_State')->nullable();
            $table->text('Applicable_Manufacturer_or_Payment_Country')->nullable();
            $table->integer('Total_Amount_of_Payment_USDollars')->nullable();
            $table->dateTime('Date_of_Payment')->nullable();
            $table->integer('Number_of_Payments_Included_in_Total_Amount')->nullable();
            $table->text('Form_of_Payment_or_Transfer_of_Value')->nullable();
            $table->text('Nature_of_Payment_or_Transfer_of_Value')->nullable();
            $table->text('City_of_Travel')->nullable();
            $table->text('State_of_Travel')->nullable();
            $table->text('Country_of_Travel')->nullable();
            $table->text('Physician_Ownership_Indicator')->nullable();
            $table->text('Third_Party_Payment_Recipient_Indicator')->nullable();
            $table->text('Name_of_Third_Party_Entity_Receiving')->nullable();
            $table->text('Charity_Indicator')->nullable();
            $table->text('Third_Party_Equals_Covered_Recipient_Indicator')->nullable();
            $table->text('Contextual_Information')->nullable();
            $table->text('Delay_in_Publication_Indicator')->nullable();
            $table->text('Record_ID')->nullable();
            $table->text('Dispute_Status_for_Publication')->nullable();
            $table->text('Related_Product_Indicator')->nullable();
            $table->text('Covered_or_Noncovered_Indicator_1')->nullable();
            $table->text('Indicate_Drug_or_Biological_or_Device_or_Medical_Supply_1')->nullable();
            $table->text('Product_Category_or_Therapeutic_Area_1')->nullable();
            $table->text('Name_of_Drug_or_Biological_or_Device_or_Medical_Supply_1')->nullable();
            $table->text('Associated_Drug_or_Biological_NDC_1')->nullable();
            $table->text('Covered_or_Noncovered_Indicator_2')->nullable();
            $table->text('Indicate_Drug_or_Biological_or_Device_or_Medical_Supply_2')->nullable();
            $table->text('Product_Category_or_Therapeutic_Area_2')->nullable();
            $table->text('Name_of_Drug_or_Biological_or_Device_or_Medical_Supply_2')->nullable();
            $table->text('Associated_Drug_or_Biological_NDC_2')->nullable();
            $table->text('Covered_or_Noncovered_Indicator_3')->nullable();
            $table->text('Indicate_Drug_or_Biological_or_Device_or_Medical_Supply_3')->nullable();
            $table->text('Product_Category_or_Therapeutic_Area_3')->nullable();
            $table->text('Name_of_Drug_or_Biological_or_Device_or_Medical_Supply_3')->nullable();
            $table->text('Associated_Drug_or_Biological_NDC_3')->nullable();
            $table->text('Covered_or_Noncovered_Indicator_4')->nullable();
            $table->text('Indicate_Drug_or_Biological_or_Device_or_Medical_Supply_4')->nullable();
            $table->text('Product_Category_or_Therapeutic_Area_4')->nullable();
            $table->text('Name_of_Drug_or_Biological_or_Device_or_Medical_Supply_4')->nullable();
            $table->text('Associated_Drug_or_Biological_NDC_4')->nullable();
            $table->text('Covered_or_Noncovered_Indicator_5')->nullable();
            $table->text('Indicate_Drug_or_Biological_or_Device_or_Medical_Supply_5')->nullable();
            $table->text('Product_Category_or_Therapeutic_Area_5')->nullable();
            $table->text('Name_of_Drug_or_Biological_or_Device_or_Medical_Supply_5')->nullable();
            $table->text('Associated_Drug_or_Biological_NDC_5')->nullable();
            $table->integer('Program_Year')->nullable();
            $table->dateTime('Payment_Publication_Date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (!Schema::hasTable('general_payment_data')) {
            return;
        }
        Schema::dropIfExists('general_payment_data');
    }
}
