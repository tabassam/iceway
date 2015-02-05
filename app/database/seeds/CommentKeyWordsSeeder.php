<?php

class CommentKeyWordsSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
                $values = ['AIR CONDITIONING'
                          ,'POWER WINDOWS'
                          ,'POWER STEERING'
                          ,'LOW MILEAGE'
                          ,'CLEAN INTERIOR & EXTERIOR'
                          ,'CLEAN INTERIOR & EXTERIOR'
                          ,'SMART & CLEAN INTERIOR'
                          ,'WELL MAINTAINED INTERIOR'
                          ,'ENGINE IN CLEAN & GOOD CONDITION'
                          ,'ALLOY WHEELS'
                          ,'VERY WELL MAINTAINED'
                          ,'DIGITAL METER'
                          ,'FULLY LOADED'
                          ,'HID HEADLIGHTS'
                          ,'REAR SPOILER'
                          ,'WINDOW RAIN GUARDS'
                          ,'DOUBLE SUNROOF'
                          ,'VVT-i ENGINE'
                          ,'WELL MAINTAINED'
                          ,'NO ACCIDENTS'
                          ,'4 WHEEL DRIVE'
                          ,'SUNROOF'
                          ,'FULLY LOADED LUXURY SEDAN'
                          ,'DOUBLE SUNROOF'
                          ,'HI DEFINITION DISCHARGE HEAD LIGHTS'
                          ,'TRIPLE SUNROOF'
                          ,'DUAL AC'
                          ,'MOON ROOF'
                          ,'FULLY LOADED'
                          ,'HIGH QUALITY FULL LUXURY SUV'
                          ,'GOOD VALUE LUXURY HATCHBACK'
                          ,'FULLY LOADED'
                          ,'LEATHERETTE SEATS'
                          ,'FULLY LOADED LUXURY SEDAN'
                          ,'ENGINE IN CLEAN & GOOD CONDITION'
                          ,'ALLOY WHEELS'
                          ,'RUNS & DRIVES GREAT'
                          ,'REMOTE KEYLESS ENTRY'
                          ,'SPARE KEY'
                          ,'FOG LAMPS'
                          ,'HI DEFINITION DISCHARGE HEAD LIGHTS'
                          ,'VERY GOOD VALUE SUV'
                          ,'DUAL AC'
                          ,'SHINY COLOR'
                          ,'NEW MODEL'
                          ,'NEW SHAPE'
                          ,'GOOD VALUE LUXURY HATCHBACK'
                          ,'BACK CAMERA'
                          ,'RADIO'
                          ,'2000 CC ENGINE'
                          ,'GOOD VALUE WORK & PASSENGER VAN'
                          ,'HIROOF & HIDECK HIACE VAN'
                          ,'SMART & CLEAN INTERIOR'
                          ,'ROOF RAIL'
                          ,'VVT-i ENGINE'
                          ,'LEATHER SEATS'
                          ,'HDD'
                          ,'NAVIGATION'
                          ,'ONE OWNER'
                          ,'WINDOW RAIN GUARDS'
                          ,'DIGITAL METER'
                          ,'NO ACCIDENTS'
                          ,'HIGH QUALITY FULL LUXURY SUV'
                          ,'VERY GOOD VALUE SUV'];


        foreach($values as $value){
            CommentKeyword::create(['title'=>$value]);
        }

        $this->command->info("Comment Keywords Successfully created");
    }

}
