<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call('UserTableSeeder');
        $this->command->info('User table seeded!');
	}

}

class UserTableSeeder extends Seeder {
    public function run()
    {

        Eloquent::unguard();

        $hashed = Hash::make('secret');

        User::create(array(
            'username'  =>  'James',
            'email'     =>  'james@gmail.com',
            'password'  =>  $hashed
        ));
        User::create(array(
            'username'  =>  'Steve',
            'email'     =>  'steve@yahoo.com',
            'password'  =>  $hashed
        ));



    }
}
