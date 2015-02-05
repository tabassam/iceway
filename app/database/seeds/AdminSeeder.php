<?php

class AdminSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //'$10$Y0b1xFLnoRcPCvJhdkJIg.VBspmEN4jUIVw3yxWSs/fM00hY5vd3C
        Eloquent::unguard();
        User::truncate();
        User::create(['title'=>'Admin','username'=>'irfan','password'=> Hash::make('123456')]);
        $this->command->info("Admin username:irfan password:123456");
    }

}
