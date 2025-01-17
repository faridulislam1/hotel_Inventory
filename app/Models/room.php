<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;
    private static $unit,$product;

    protected $fillable = [
        
        'hotel_id' ,
        'city_id',
        'room_type',
        'available_capacity' ,
        'max_capacity',
        'refundable',
        'non_refundable',
        'refundable_break',
        'refundable_nonbreak' ,
        'room_size',
        'cancellation_policy',
        'room_available',
        'extra_bed' ,
        'room_facilities' ,
        'bed_type',
        'total_rooms',
        'allocated_online_inventory',
        'allocated_offline_inventory',
        'online_sold',
        'offline_sold',
        'inventory', 
        'sales', 

    ];
    
    protected $casts = [
        'inventory' => 'array',
        'sales' => 'array',
    ];
    
    public static function destroy($id){
        self::$unit=room::find($id);
            self::$unit->delete();
    }

     public static function deleteroom($id){
        self::$product=room::find($id);
        self::$product->delete();
    }
     
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    // public function rooms()
    // {
    //     return $this->hasMany(Rooms::class);
    // }
    public function hotels(){
    return $this->belongsTo(hotel::class);
   }

   
   public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function rooms(){
        return $this->belongsTo(room::class);
       }
  
    // public function rooms()
    // {
    //     return $this->hasMany(room::class);
    // }
}


