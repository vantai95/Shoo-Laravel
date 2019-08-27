<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ShoeCategoriesTableSeeder::class);
        $this->call(HowItWorkTableSeeder::class);
        $this->call(PageTableSeeder::class);
        $this->call(ShoeTypeTableSeeder::class);
        $this->call(PageHowItWorkTableSeeder::class);
        $this->call(SliderTableSeeder::class);
        $this->call(EmailTemplateTableSeeder::class);
        $this->call(ShoeStyleTableSeeder::class);
        $this->call(ProductFeatureTableSeeder::class);
        $this->call(ConfigurationTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(AboutUsTableSeeder::class);
        $this->call(AboutUsDescriptionTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
    }
}
