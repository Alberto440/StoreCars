<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\car_dates;

use Livewire\WithPagination;

class CarSearchType extends Component
{
    use WithPagination;

    public $Name;
    public $Year;
    public $Fuel_type;

    public $Price;
    public $Price1;
    public $Price2;

    public $transmission;
    public $Bodywork;

    public $Mileage;
    public $Mileage1;
    public $Mileage2;

    public function render()
    {
        $cars = car_dates::where('id', '>', 0);

        if ($this->Name != "") {
            $cars = $cars->where('Name', 'LIKE', '%' . $this->Name . '%');
        }
        if ($this->Year != "") {
            $cars = $cars->where('Year',  $this->Year);
        }
        if ($this->Fuel_type != "") {
            $cars = $cars->where('Fuel_type',  $this->Fuel_type);
        }
        if ($this->Price1 != "" && $this->Price2 != "") {
            $cars = $cars->WhereBetween('Price', [$this->Price1, $this->Price2]);
        }
        if ($this->transmission != "") {
            $cars = $cars->where('Transmission_type', $this->transmission);
        }
        if ($this->Bodywork != "") {
            $cars = $cars->where('Bodywork', $this->Bodywork);
        }
        if ($this->Mileage1 != "" && $this->Mileage2 != "") {
            $cars = $cars->WhereBetween('Mileage', [$this->Mileage1, $this->Mileage2]);
        }
        
        $cars = $cars->orderBy('id', 'DESC')->paginate(9);
        return view('livewire.car-search-type', compact('cars'));
    }

    public function limpiarPage()
    {
        $this->resetPage();
    }
}
