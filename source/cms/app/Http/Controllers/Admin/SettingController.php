<?php

namespace App\Http\Controllers\Admin;

use App\Models\Configuration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\Currency;

class SettingController extends Controller
{
    public function settings()
    {
        $indiegogo = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])
            ->first();
        $eCommerce = Configuration::where('config_key', Configuration::CONFIG_KEYS['E-COMMERCE'])
            ->first();

        $campaignMenuStatus = Configuration::where('config_key', Configuration::CONFIG_KEYS['CAMPAIGN_MENU_STATUS'])
            ->first();
        
        $campaignButtonStatus = Configuration::where('config_key', Configuration::CONFIG_KEYS['CAMPAIGN_BUTTON_STATUS'])
            ->first();
            
        $campaignButtonValue = Configuration::where('config_key', Configuration::CONFIG_KEYS['CAMPAIGN_BUTTON_VALUE'])
                ->first();

        $settings = [
            'INDIEGOGO' => $indiegogo,
            'E-COMMERCE' => $eCommerce,
            'CAMPAIGN_MENU_STATUS' => $campaignMenuStatus,
            'CAMPAIGN_BUTTON_STATUS' => $campaignButtonStatus,
            'CAMPAIGN_BUTTON_VALUE' => $campaignButtonValue
        ];
        return view('admin.settings.settings', compact('settings'));
    }

    public function storeOrUpdateSettings(Request $request)
    {

        $this->validate($request, [
            'indiegogo' => 'required|url'
        ]);
        $requestData = $request->all();
        $indiegogo = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])->first();
        if ($indiegogo == null) {
            $data['config_key'] = Configuration::CONFIG_KEYS['INDIEGOGO'];
            $data['config_value'] = $requestData['indiegogo'];
            $data['is_published'] = 1;
            $data['title_en'] = $requestData['campaign_menu_name_en'];
            $data['title_vi'] = $requestData['campaign_menu_name_vi'];
            $indiegogo = Configuration::create($data);
        }
        else {
            $indiegogo->config_value = $requestData['indiegogo'];
            $indiegogo->is_published = 1;
            $indiegogo->title_en = $requestData['campaign_menu_name_en'];
            $indiegogo->title_vi = $requestData['campaign_menu_name_vi'];
            $indiegogo->save();
        }

        $eCommerce = Configuration::where('config_key', Configuration::CONFIG_KEYS['E-COMMERCE'])
            ->first();
        if ($eCommerce == null) {
            $data['config_key'] = Configuration::CONFIG_KEYS['E-COMMERCE'];
            $data['config_value'] = $requestData['e_commerce_status'];
            $data['title'] = '';
            $data['is_published'] = 1;
            $eCommerce = Configuration::create($data);
        }
        else {
            $eCommerce->config_value = $requestData['e_commerce_status'];
            $eCommerce->save();
        }

        $eCommerce = Configuration::where('config_key', Configuration::CONFIG_KEYS['CAMPAIGN_MENU_STATUS'])
            ->first();
        if ($eCommerce == null) {
            $data['config_key'] = Configuration::CONFIG_KEYS['CAMPAIGN_MENU_STATUS'];
            $data['config_value'] = $requestData['campaign_menu_status'];
            $data['is_published'] = 1;
            $eCommerce = Configuration::create($data);
        }
        else {
            $eCommerce->config_value = $requestData['campaign_menu_status'];
            $eCommerce->is_published = 1;
            $eCommerce->save();
        }


        $eCommerce = Configuration::where('config_key', Configuration::CONFIG_KEYS['CAMPAIGN_BUTTON_STATUS'])
            ->first();
        if ($eCommerce == null) {
            $data['config_key'] = Configuration::CONFIG_KEYS['CAMPAIGN_BUTTON_STATUS'];
            $data['config_value'] = $requestData['campaign_button_status'];
            $data['is_published'] = 1;
            $eCommerce = Configuration::create($data);
        }
        else {
            $eCommerce->config_value = $requestData['campaign_button_status'];
            $eCommerce->is_published = 1;
            $eCommerce->save();
        }

        $eCommerce = Configuration::where('config_key', Configuration::CONFIG_KEYS['CAMPAIGN_BUTTON_VALUE'])->first();
        if ($eCommerce == null) {
            $data['config_key'] = Configuration::CONFIG_KEYS['CAMPAIGN_BUTTON_VALUE'];
            $data['config_value'] = $requestData['campaign_button_value'];
            $data['is_published'] = 1;
            $data['title_en'] = $requestData['campaign_button_name_en'];
            $data['title_vi'] = $requestData['campaign_button_name_vi'];
            $eCommerce = Configuration::create($data);
        }
        else {
            $eCommerce->config_value = $requestData['campaign_button_value'];
            $eCommerce->is_published = 1;
            $eCommerce->title_en = $requestData['campaign_button_name_en'];
            $eCommerce->title_vi = $requestData['campaign_button_name_vi'];
            $eCommerce->save();
        }

        Session::flash('flash_message', 'Settings updated successful!');
        return back();
    }

    public function currency(){
        $currencies = Currency::get();
        return view('admin.settings.currency.index', compact('currencies'));
    }
    public function editCurrency($id,Request $request){
        $currency = Currency::where('id','=',$id)->first();
        return view('admin.settings.currency.edit', compact('currency'));
    }
    public function changeCurrency($id,Request $request){
        $this->validate($request, [
            'code' => 'required',
            'exchange_rate' =>  'required|numeric|min:1'
        ]);
        $requestData = $request->all();
        $currency = Currency::findOrFail($id);

        $currency->update($requestData);
        Session::flash('flash_message', 'Updated Currency!');

        return redirect('admin/settings/currency');
    }

    public function addCurrency(){  
        return view('admin.settings.currency.create');
    }
    
    public function saveCurrency(Request $request){
        $this->validate($request, [
            'code' => 'required',
            'exchange_rate' =>  'required|numeric|min:1'
        ]);
        $requestData = $request->all();
        $currency = Currency::create($requestData);
        Session::flash('flash_message', 'Added Currency!');

        return redirect('admin/settings/currency');
    }

}
