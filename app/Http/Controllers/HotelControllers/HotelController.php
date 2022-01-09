<?php

namespace App\Http\Controllers\HotelControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\HotelRequest;
use App\Http\Requests\SupplierRequest;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms =  Service::where('service_type','hotel')->with('contact')->get();
        return view('hotels.index', compact('rooms'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getHotels = Contact::where(['supplier_type'=>'hotel','contact_type'=>'supplier'])->get();
        return view('hotels.addHotel',compact('getHotels'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HotelRequest $request)
    {
        Service::create($request->validated());
        return redirect()->back()->with('message','Hotel added');
    }
    

    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //  /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function createHotelSupplier()
    // {
        //     return view('addHotelSupplier');
        // }
        
        // public function storeHotelSupplier(SupplierRequest $request)
        // {
            //     Contact::create([
                //         'contact_type' => Contact::CONTACT[0],
                //         'supplier_type'=> Contact::TYPE[2],
                //         'contact_name' => $request->contact_name,
                //         'phone' => $request->phone,
                //         'email' => $request->email,
                //         'vat_id' => $request->vat_id,
                //         'coc' => $request->coc,
                //     ]);
                
                //     return redirect()->back()->with('message','Company added successfully !');
                // }
                
                // /**
                //  * Store a newly created resource in storage.
                //  *
                //  * @param  \Illuminate\Http\Request  $request
                //  * @return \Illuminate\Http\Response
                //  */
                // public function hotelstore(HotelRequest $request)
                // {
                    //     //customer reserve room data needed
                    //     dd($request->all());
                    //    $contact =  Contact::create([
                        //         "contact_type" => "customer",
    //         'contact_name' => $request->contact_name, //contacts
    //         'phone' => $request->phone, //contacts
    //         'personal_id' => $request->personal_id, //contacts
    //         "email"=>$request->email,//contacts
    //     ]);
    //     //hotel data needed to reserve room
    //     $contact->orders()->create([
        //             'service_type' => "hotel", //services
    //             'availability' => $request->availability, //services
    //             'room_type' => $request->room_type, //services
    //             'hotel_location' => $request->hotel_location, //services
    //             'duration' => $request->duration, //services
    //             'price' => $request->price, //services
    //     ]);
    //     return redirect()->back()->with('message', 'Room Reserved successfully !');
    // }
    
    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function reserveroom()
    // {
    //     return view('reserveroom');
    // }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Service $hotel)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $hotel)
    {
        //
    }
}
