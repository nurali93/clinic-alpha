<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PatientTableSeeder extends Seeder{
	public function run(){
		DB::table('patients')->delete();

		$patient = array(
			array(
				'pt_ic' => 420115715112,
				'pt_name' => 'Fatanah',
				'pt_contactNo' => '',
				'pt_dob' => \Carbon\Carbon::createFromDate(15,01,1942)->format('D-m-y H:i:s'), 
				'pt_gender' => 'Female',
				'pt_panel' => 'Cash',
				'pt_race' => 'Malay',
				'pt_address' => 'lot 2326 no 16jln. 8,kg tgh tambahan,gombak setia',
				'pt_city' => 'Kuala Lumpur',
				'pt_postcode' => 53100,
				'pt_state' => 'Wilayah Persekutuan'
				),

			array(
				'pt_ic' => 420212045050,
				'pt_name' => 'Masnah Kassim',
				'pt_contactNo' => '0132600902',
				'pt_dob' => \Carbon\Carbon::createFromDate(12,02,1942)->format('D-m-y H:i:s'),
				'pt_gender' => 'Female',
				'pt_panel' => 'Cash',
				'pt_race' => 'Malay',
				'pt_address' => '',
				'pt_city' => 'Kuala Lumpur',
				'pt_postcode' => 53100,
				'pt_state' => 'Wilayah Persekutuan'
				)
		);

		DB::table('patients')->insert($patient);
	}
	
}
