<?php

class TcvOptionsSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $values = ['Anti-Lock Brakes','Driver Airbag','Passenger Airbag','Side Airbag','Alarm','Power Windows','Rear Window Defroster'
            ,'Rear Window Wiper','Tinted Glass','A/C:front','A/C:rear','Cruise Control','Navigation System','Power Steering','Remote Keyless Entry'
            ,'Tilt Wheel','Digital Meter','AM/FM Radio','AM/FM Stereo','CD Changer','CD Player','Premium Sound','Satellite Radio','DVD','Hard Disc',
            'Child Seat','Leather Seats','Power Seats','Bucket Seat','Alloy Wheels','Power Door Locks','Power Mirrors','Sunroof','Third Row Seats',
            'Power Slide Door','Custom wheels','Fully loaded','Maintenance records available','New paint','New tires','No accidents','One owner',
            'Performance tires','Upgraded sound system','Non-smoker','Turbo','Airbag'];

        foreach($values as $value){
            TcvOption::create(['value'=>$value]);
        }

        $this->command->info("Options Successfully created");
    }

}
