<?php

use Illuminate\Database\Seeder;

class Admin extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		\App\Admin::create([
				'name'     => 'KamalSroor',
				'email'    => 'admin@admin.com',
				'password' => bcrypt('admin'),
			]);
	}
}
