<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;



class Orderan extends Model

{

    protected $table = 'orderans';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [

        'sender_name',

        'sender_origin',

        'phone_number',

        'post_code',

        'address1',

        'name_recip',

        'destination',

        'phone_recipt',

        'post_recipt',

        'address2',

        'item_name',

        'item_type',

        'service',

        'quantity',

        'weight',

        'height',

        'width',

        'length',

        'notes',

        'ordertype',

    ];

}